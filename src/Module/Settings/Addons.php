<?php
/**
 * @copyright Copyright (C) 2010-2023, the Friendica project
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 */

namespace Friendica\Module\Settings;

use Friendica\App;
use Friendica\Core\Hook;
use Friendica\Core\L10n;
use Friendica\Core\Renderer;
use Friendica\Core\Session\Capability\IHandleUserSessions;
use Friendica\Database\Database;
use Friendica\Module\BaseSettings;
use Friendica\Module\Response;
use Friendica\Util\Profiler;
use Psr\Log\LoggerInterface;

class Addons extends BaseSettings
{
	/** @var Database */
	private $database;
	/** @var App */
	private $app;

	public function __construct(App $app, Database $database, IHandleUserSessions $session, App\Page $page, L10n $l10n, App\BaseURL $baseUrl, App\Arguments $args, LoggerInterface $logger, Profiler $profiler, Response $response, array $server, array $parameters = [])
	{
		parent::__construct($session, $page, $l10n, $baseUrl, $args, $logger, $profiler, $response, $server, $parameters);

		$this->database = $database;
		$this->app      = $app;
	}

	protected function post(array $request = [])
	{
		BaseSettings::checkFormSecurityTokenRedirectOnError($this->args->getQueryString(), 'settings_addon');

		Hook::callAll('addon_settings_post', $request);
		$this->baseUrl->redirect($this->args->getQueryString());
	}

	protected function content(array $request = []): string
	{
		parent::content($request); // TODO: Change the autogenerated stub

		$addon_settings_forms = [];
		foreach ($this->database->selectToArray('hook', ['file', 'function'], ['hook' => 'addon_settings']) as $hook) {
			$data = [];
			Hook::callSingle($this->app, 'addon_settings', [$hook['file'], $hook['function']], $data);

			if (!empty($data['href'])) {
				$tpl                    = Renderer::getMarkupTemplate('settings/addons/link.tpl');
				$addon_settings_forms[] = Renderer::replaceMacros($tpl, [
					'$addon' => $data['addon'],
					'$title' => $data['title'],
					'$href'  => $data['href'],
				]);
			} elseif (!empty($data['addon'])) {
				$tpl                                  = Renderer::getMarkupTemplate('settings/addons/panel.tpl');
				$addon_settings_forms[$data['addon']] = Renderer::replaceMacros($tpl, [
					'$addon'  => $data['addon'],
					'$title'  => $data['title'],
					'$open'   => ($this->parameters['addon'] ?? '') === $data['addon'],
					'$html'   => $data['html'] ?? '',
					'$submit' => $data['submit'] ?? $this->t('Save Settings'),
				]);
			}
		}

		$tpl = Renderer::getMarkupTemplate('settings/addons.tpl');
		return Renderer::replaceMacros($tpl, [
			'$form_security_token'           => BaseSettings::getFormSecurityToken('settings_addon'),
			'$title'                         => $this->t('Addon Settings'),
			'$no_addons_settings_configured' => $this->t('No Addon settings configured'),
			'$addon_settings_forms'          => $addon_settings_forms,
		]);
	}
}
