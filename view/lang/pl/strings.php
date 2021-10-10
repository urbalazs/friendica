<?php

if(! function_exists("string_plural_select_pl")) {
function string_plural_select_pl($n){
	$n = intval($n);
	if ($n==1) { return 0; } else if (($n%10>=2 && $n%10<=4) && ($n%100<12 || $n%100>14)) { return 1; } else if ($n!=1 && ($n%10>=0 && $n%10<=1) || ($n%10>=5 && $n%10<=9) || ($n%100>=12 && $n%100<=14)) { return 2; } else  { return 3; }
}}
$a->strings['default'] = 'standardowe';
$a->strings['greenzero'] = 'zielone zero';
$a->strings['purplezero'] = 'fioletowe zero';
$a->strings['easterbunny'] = 'zajączek wielkanocny';
$a->strings['darkzero'] = 'ciemne zero';
$a->strings['comix'] = 'comix';
$a->strings['slackr'] = 'luźny';
$a->strings['Submit'] = 'Potwierdź';
$a->strings['Theme settings'] = 'Ustawienia motywu';
$a->strings['Variations'] = 'Zmiana';
$a->strings['Alignment'] = 'Wyrównanie';
$a->strings['Left'] = 'Lewo';
$a->strings['Center'] = 'Środek';
$a->strings['Color scheme'] = 'Zestaw kolorów';
$a->strings['Posts font size'] = 'Rozmiar czcionki postów';
$a->strings['Textareas font size'] = 'Rozmiar czcionki Textareas';
$a->strings['Comma separated list of helper forums'] = 'Lista pomocników oddzielona przecinkami';
$a->strings['don\'t show'] = 'nie pokazuj';
$a->strings['show'] = 'pokaż';
$a->strings['Set style'] = 'Ustaw styl';
$a->strings['Community Pages'] = 'Strony społeczności';
$a->strings['Community Profiles'] = 'Profile społeczności';
$a->strings['Help or @NewHere ?'] = 'Pomóż lub @NowyTutaj?';
$a->strings['Connect Services'] = 'Połączone serwisy';
$a->strings['Find Friends'] = 'Znajdź znajomych';
$a->strings['Last users'] = 'Ostatni użytkownicy';
$a->strings['Find People'] = 'Znajdź ludzi';
$a->strings['Enter name or interest'] = 'Wpisz nazwę lub zainteresowanie';
$a->strings['Connect/Follow'] = 'Połącz/Obserwuj';
$a->strings['Examples: Robert Morgenstein, Fishing'] = 'Przykład: Jan Kowalski, Wędkarstwo';
$a->strings['Find'] = 'Znajdź';
$a->strings['Friend Suggestions'] = 'Osoby, które możesz znać';
$a->strings['Similar Interests'] = 'Podobne zainteresowania';
$a->strings['Random Profile'] = 'Domyślny profil';
$a->strings['Invite Friends'] = 'Zaproś znajomych';
$a->strings['Global Directory'] = 'Katalog globalny';
$a->strings['Local Directory'] = 'Katalog lokalny';
$a->strings['Forums'] = 'Fora';
$a->strings['External link to forum'] = 'Zewnętrzny link do forum';
$a->strings['show more'] = 'pokaż więcej';
$a->strings['Quick Start'] = 'Szybki start';
$a->strings['Help'] = 'Pomoc';
$a->strings['Custom'] = 'Niestandardowe';
$a->strings['Note'] = 'Uwaga';
$a->strings['Check image permissions if all users are allowed to see the image'] = 'Sprawdź uprawnienia do zdjęć, jeśli wszyscy użytkownicy mogą zobaczyć obraz';
$a->strings['Select color scheme'] = 'Wybierz schemat kolorów';
$a->strings['Copy or paste schemestring'] = 'Skopiuj lub wklej schemat';
$a->strings['You can copy this string to share your theme with others. Pasting here applies the schemestring'] = 'Możesz skopiować ten ciąg, aby podzielić się swoim motywem z innymi. Wklejanie tutaj stosuje schemat';
$a->strings['Navigation bar background color'] = 'Kolor tła paska nawigacyjnego';
$a->strings['Navigation bar icon color '] = 'Kolor ikon na pasku nawigacyjnym ';
$a->strings['Link color'] = 'Kolor łączy';
$a->strings['Set the background color'] = 'Ustaw kolor tła';
$a->strings['Content background opacity'] = 'Nieprzezroczystość tła treści';
$a->strings['Set the background image'] = 'Ustaw obraz tła';
$a->strings['Background image style'] = 'Styl tła';
$a->strings['Login page background image'] = 'Obraz tła strony logowania';
$a->strings['Login page background color'] = 'Kolor tła strony logowania';
$a->strings['Leave background image and color empty for theme defaults'] = 'Pozostaw obraz tła i kolor pusty dla domyślnych ustawień kompozycji';
$a->strings['Guest'] = 'Gość';
$a->strings['Visitor'] = 'Odwiedzający';
$a->strings['Status'] = 'Status';
$a->strings['Your posts and conversations'] = 'Twoje posty i rozmowy';
$a->strings['Profile'] = 'Profil użytkownika';
$a->strings['Your profile page'] = 'Twoja strona profilowa';
$a->strings['Photos'] = 'Zdjęcia';
$a->strings['Your photos'] = 'Twoje zdjęcia';
$a->strings['Videos'] = 'Filmy';
$a->strings['Your videos'] = 'Twoje filmy';
$a->strings['Events'] = 'Wydarzenia';
$a->strings['Your events'] = 'Twoje wydarzenia';
$a->strings['Network'] = 'Sieć';
$a->strings['Conversations from your friends'] = 'Rozmowy Twoich przyjaciół';
$a->strings['Events and Calendar'] = 'Wydarzenia i kalendarz';
$a->strings['Messages'] = 'Wiadomości';
$a->strings['Private mail'] = 'Prywatne maile';
$a->strings['Settings'] = 'Ustawienia';
$a->strings['Account settings'] = 'Ustawienia konta';
$a->strings['Contacts'] = 'Kontakty';
$a->strings['Manage/edit friends and contacts'] = 'Zarządzaj listą przyjaciół i kontaktami';
$a->strings['Follow Thread'] = 'Śledź wątek';
$a->strings['Skip to main content'] = 'Przejdź do głównej zawartości';
$a->strings['Top Banner'] = 'Górny Baner';
$a->strings['Resize image to the width of the screen and show background color below on long pages.'] = 'Zmień rozmiar obrazu na szerokość ekranu i pokaż kolor tła poniżej na długich stronach.';
$a->strings['Full screen'] = 'Pełny ekran';
$a->strings['Resize image to fill entire screen, clipping either the right or the bottom.'] = 'Zmień rozmiar obrazu, aby wypełnić cały ekran, przycinając prawy lub dolny.';
$a->strings['Single row mosaic'] = 'Mozaika jednorzędowa';
$a->strings['Resize image to repeat it on a single row, either vertical or horizontal.'] = 'Zmień rozmiar obrazu, aby powtórzyć go w jednym wierszu, w pionie lub w poziomie.';
$a->strings['Mosaic'] = 'Mozaika';
$a->strings['Repeat image to fill the screen.'] = 'Powtórz obraz, aby wypełnić ekran.';
$a->strings['%s: Updating author-id and owner-id in item and thread table. '] = '%s: Aktualizowanie ID autora i właściciela w tabeli pozycji i wątku. ';
$a->strings['%s: Updating post-type.'] = '%s: Aktualizowanie typu postu.';
$a->strings['%1$s poked %2$s'] = '%1$s zaczepił Cię %2$s';
$a->strings['event'] = 'wydarzenie';
$a->strings['status'] = 'status';
$a->strings['photo'] = 'zdjęcie';
$a->strings['%1$s tagged %2$s\'s %3$s with %4$s'] = '%1$s zaznaczył %2$s\'go %3$s przy użyciu %4$s';
$a->strings['Select'] = 'Wybierz';
$a->strings['Delete'] = 'Usuń';
$a->strings['View %s\'s profile @ %s'] = 'Pokaż %s\'s profil @ %s';
$a->strings['Categories:'] = 'Kategorie:';
$a->strings['Filed under:'] = 'Zapisano w:';
$a->strings['%s from %s'] = '%s od %s';
$a->strings['View in context'] = 'Zobacz w kontekście';
$a->strings['Please wait'] = 'Proszę czekać';
$a->strings['remove'] = 'usuń';
$a->strings['Delete Selected Items'] = 'Usuń zaznaczone elementy';
$a->strings['View Status'] = 'Zobacz status';
$a->strings['View Profile'] = 'Zobacz profil';
$a->strings['View Photos'] = 'Zobacz zdjęcia';
$a->strings['Network Posts'] = 'Wiadomości sieciowe';
$a->strings['View Contact'] = 'Pokaż kontakt';
$a->strings['Send PM'] = 'Wyślij prywatną wiadomość';
$a->strings['Block'] = 'Zablokuj';
$a->strings['Ignore'] = 'Ignoruj';
$a->strings['Poke'] = 'Zaczepka';
$a->strings['%s likes this.'] = '%s lubi to.';
$a->strings['%s doesn\'t like this.'] = '%s nie lubi tego.';
$a->strings['%s attends.'] = '%s uczestniczy.';
$a->strings['%s doesn\'t attend.'] = '%s nie uczestniczy.';
$a->strings['%s attends maybe.'] = '%s może bierze udział.';
$a->strings['%s reshared this.'] = '%sudostępnił to. ';
$a->strings['and'] = 'i';
$a->strings['and %d other people'] = 'i %d inni ludzie';
$a->strings['<span  %1$s>%2$d people</span> like this'] = '<span  %1$s>%2$d ludzi </span> lubi to';
$a->strings['%s like this.'] = '%s lubię to.';
$a->strings['<span  %1$s>%2$d people</span> don\'t like this'] = '<span  %1$s>%2$d ludzi</span> nie lubi tego';
$a->strings['%s don\'t like this.'] = '%s nie lubię tego.';
$a->strings['<span  %1$s>%2$d people</span> attend'] = '<span  %1$s>%2$dosoby</span> uczestniczą';
$a->strings['%s attend.'] = '%s uczestniczy.';
$a->strings['<span  %1$s>%2$d people</span> don\'t attend'] = '<span  %1$s>%2$dludzie</span> nie uczestniczą';
$a->strings['%s don\'t attend.'] = '%s nie uczestniczy.';
$a->strings['<span  %1$s>%2$d people</span> attend maybe'] = 'Możliwe, że <span  %1$s>%2$d osoby</span> będą uczestniczyć';
$a->strings['%s attend maybe.'] = '%sbyć może uczestniczyć.';
$a->strings['<span  %1$s>%2$d people</span> reshared this'] = '<span  %1$s>%2$d użytkowników</span> udostępniło to dalej';
$a->strings['Visible to <strong>everybody</strong>'] = 'Widoczne dla <strong>wszystkich</strong>';
$a->strings['Please enter a image/video/audio/webpage URL:'] = 'Wprowadź adres URL obrazu/wideo/audio/strony:';
$a->strings['Tag term:'] = 'Termin tagu:';
$a->strings['Save to Folder:'] = 'Zapisz w folderze:';
$a->strings['Where are you right now?'] = 'Gdzie teraz jesteś?';
$a->strings['Delete item(s)?'] = 'Usunąć pozycję (pozycje)?';
$a->strings['New Post'] = 'Nowy Post';
$a->strings['Share'] = 'Podziel się';
$a->strings['Loading...'] = 'Ładowanie...';
$a->strings['Upload photo'] = 'Wyślij zdjęcie';
$a->strings['upload photo'] = 'dodaj zdjęcie';
$a->strings['Attach file'] = 'Załącz plik';
$a->strings['attach file'] = 'załącz plik';
$a->strings['Bold'] = 'Pogrubienie';
$a->strings['Italic'] = 'Kursywa';
$a->strings['Underline'] = 'Podkreślenie';
$a->strings['Quote'] = 'Cytat';
$a->strings['Code'] = 'Kod';
$a->strings['Image'] = 'Obraz';
$a->strings['Link'] = 'Link';
$a->strings['Link or Media'] = 'Link lub Media';
$a->strings['Set your location'] = 'Ustaw swoją lokalizację';
$a->strings['set location'] = 'wybierz lokalizację';
$a->strings['Clear browser location'] = 'Wyczyść lokalizację przeglądarki';
$a->strings['clear location'] = 'wyczyść lokalizację';
$a->strings['Set title'] = 'Podaj tytuł';
$a->strings['Categories (comma-separated list)'] = 'Kategorie (lista słów oddzielonych przecinkiem)';
$a->strings['Permission settings'] = 'Ustawienia uprawnień';
$a->strings['permissions'] = 'zezwolenia';
$a->strings['Public post'] = 'Publiczny post';
$a->strings['Preview'] = 'Podgląd';
$a->strings['Cancel'] = 'Anuluj';
$a->strings['Post to Groups'] = 'Opublikuj w grupach';
$a->strings['Post to Contacts'] = 'Wstaw do kontaktów';
$a->strings['Private post'] = 'Prywatne posty';
$a->strings['Message'] = 'Wiadomość';
$a->strings['Browser'] = 'Przeglądarka';
$a->strings['Open Compose page'] = 'Otwórz stronę Redagowanie';
$a->strings['[Friendica:Notify]'] = '[Friendica: Powiadomienie]';
$a->strings['%s New mail received at %s'] = '%s Nowa poczta otrzymana o %s';
$a->strings['%1$s sent you a new private message at %2$s.'] = '%1$s wysłał(-a) ci nową prywatną wiadomość na %2$s.';
$a->strings['a private message'] = 'prywatna wiadomość';
$a->strings['%1$s sent you %2$s.'] = '%1$s wysłał(-a) ci %2$s.';
$a->strings['Please visit %s to view and/or reply to your private messages.'] = 'Odwiedź %s, aby zobaczyć i/lub odpowiedzieć na twoje prywatne wiadomości.';
$a->strings['%1$s replied to you on %2$s\'s %3$s %4$s'] = '%1$s odpowiedział ci na %2$s\'s %3$s %4$s';
$a->strings['%1$s tagged you on %2$s\'s %3$s %4$s'] = '%1$s oznaczył cię na %2$s\'s %3$s %4$s';
$a->strings['%1$s commented on %2$s\'s %3$s %4$s'] = '%1$s skomentował %2$s\'s %3$s %4$s';
$a->strings['%1$s replied to you on your %2$s %3$s'] = '%1$s odpowiedział ci na twój %2$s %3$s';
$a->strings['%1$s tagged you on your %2$s %3$s'] = '%1$s oznaczył cię tagiem na twoim %2$s %3$s';
$a->strings['%s %s tagged you'] = '%s %s oznaczył Cię';
$a->strings['%1$s tagged you at %2$s'] = '%1$s oznaczono Cię tagiem %2$s';
$a->strings['%1$s Comment to conversation #%2$d by %3$s'] = '%1$s Komentarz do rozmowy #%2$d autor %3$s';
$a->strings['%s commented on an item/conversation you have been following.'] = '%s skomentował(-a) rozmowę którą śledzisz.';
$a->strings['Please visit %s to view and/or reply to the conversation.'] = 'Odwiedź %s, aby zobaczyć i/lub odpowiedzieć na rozmowę.';
$a->strings['%1$s posted to your profile wall at %2$s'] = '%1$s opublikował(-a) wpis na twojej ścianie o %2$s';
$a->strings['%1$s posted to [url=%2$s]your wall[/url]'] = '%1$s opublikował(-a) na [url=%2$s]twojej ścianie[/url]';
$a->strings['%s %s shared a new post'] = '%s %s udostępnił nowy post';
$a->strings['%1$s shared a new post at %2$s'] = '%1$s udostępnił(-a) nowy wpis na %2$s';
$a->strings['%1$s [url=%2$s]shared a post[/url].'] = '%1$s[url=%2$s]udostępnił wpis[/url].';
$a->strings['%1$s %2$s poked you'] = '%1$s %2$s zaczepił cię';
$a->strings['%1$s poked you at %2$s'] = '%1$s zaczepił Cię %2$s';
$a->strings['%1$s [url=%2$s]poked you[/url].'] = '%1$s[url=%2$s] zaczepił Cię[/url].';
$a->strings['%s %s tagged your post'] = '%s %s oznaczył twój post';
$a->strings['%1$s tagged your post at %2$s'] = '%1$s oznaczył(-a) twój wpis na %2$s';
$a->strings['%1$s tagged [url=%2$s]your post[/url]'] = '%1$soznacz [url=%2$s]twój post[/url]';
$a->strings['You\'ve received an introduction from \'%1$s\' at %2$s'] = 'Otrzymałeś wstęp od \'%1$s\' z %2$s';
$a->strings['You\'ve received [url=%1$s]an introduction[/url] from %2$s.'] = 'Zostałeś [url=%1$s] przyjęty [/ url] z %2$s.';
$a->strings['You may visit their profile at %s'] = 'Możesz odwiedzić ich profil na stronie %s';
$a->strings['Please visit %s to approve or reject the introduction.'] = 'Odwiedż %s aby zatwierdzić lub odrzucić przedstawienie.';
$a->strings['%s A new person is sharing with you'] = '%s Nowa osoba udostępnia Ci coś';
$a->strings['%1$s is sharing with you at %2$s'] = '%1$s dzieli się z tobą w %2$s';
$a->strings['%s You have a new follower'] = '%s Masz nowego obserwującego';
$a->strings['You have a new follower at %2$s : %1$s'] = 'Masz nowego obserwatora na %2$s : %1$s';
$a->strings['%s Friend suggestion received'] = '%s Otrzymano sugestię znajomego';
$a->strings['You\'ve received a friend suggestion from \'%1$s\' at %2$s'] = 'Otrzymałeś od znajomego sugestię \'%1$s\' na %2$s';
$a->strings['You\'ve received [url=%1$s]a friend suggestion[/url] for %2$s from %3$s.'] = 'Otrzymałeś [url=%1$s] sugestię znajomego [/url] dla %2$s od %3$s.';
$a->strings['Name:'] = 'Imię:';
$a->strings['Photo:'] = 'Zdjęcie:';
$a->strings['Please visit %s to approve or reject the suggestion.'] = 'Odwiedź stronę %s, aby zatwierdzić lub odrzucić sugestię.';
$a->strings['%s Connection accepted'] = '%s Połączenie zaakceptowane';
$a->strings['\'%1$s\' has accepted your connection request at %2$s'] = '\'%1$s\' zaakceptował Twoją prośbę o połączenie na %2$s';
$a->strings['%2$s has accepted your [url=%1$s]connection request[/url].'] = '%2$s zaakceptował twoją [url=%1$s] prośbę o połączenie [/url].';
$a->strings['You are now mutual friends and may exchange status updates, photos, and email without restriction.'] = 'Jesteście teraz przyjaciółmi i możesz wymieniać aktualizacje statusu, zdjęcia i e-maile bez ograniczeń.';
$a->strings['Please visit %s if you wish to make any changes to this relationship.'] = 'Odwiedź stronę %s jeśli chcesz wprowadzić zmiany w tym związku.';
$a->strings['\'%1$s\' has chosen to accept you a fan, which restricts some forms of communication - such as private messaging and some profile interactions. If this is a celebrity or community page, these settings were applied automatically.'] = '\'%1$s\' zdecydował się zaakceptować Cię jako fana, który ogranicza niektóre formy komunikacji - takie jak prywatne wiadomości i niektóre interakcje w profilu. Jeśli jest to strona celebrytów lub społeczności, ustawienia te zostały zastosowane automatycznie.';
$a->strings['\'%1$s\' may choose to extend this into a two-way or more permissive relationship in the future.'] = '\'%1$s\' możesz zdecydować o przedłużeniu tego w dwukierunkową lub bardziej ścisłą relację w przyszłości. ';
$a->strings['Please visit %s  if you wish to make any changes to this relationship.'] = 'Odwiedź stronę %s, jeśli chcesz wprowadzić zmiany w tej relacji.';
$a->strings['[Friendica System Notify]'] = '[Powiadomienie Systemu Friendica]';
$a->strings['registration request'] = 'prośba o rejestrację';
$a->strings['You\'ve received a registration request from \'%1$s\' at %2$s'] = 'Otrzymałeś wniosek rejestracyjny od \'%1$s\' na %2$s';
$a->strings['You\'ve received a [url=%1$s]registration request[/url] from %2$s.'] = 'Otrzymałeś [url=%1$s] żądanie rejestracji [/url] od %2$s.';
$a->strings['Full Name:	%s
Site Location:	%s
Login Name:	%s (%s)'] = 'Imię i nazwisko:	%s
Lokalizacja witryny:	%s
Nazwa użytkownika:	%s(%s)';
$a->strings['Please visit %s to approve or reject the request.'] = 'Odwiedź stronę %s, aby zatwierdzić lub odrzucić wniosek.';
$a->strings['Daily posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Dzienny limit opublikowanych %d posta. Post został odrzucony.',
	1 => 'Dzienny limit opublikowanych %d postów. Post został odrzucony.',
	2 => 'Dzienny limit opublikowanych %d postów. Post został odrzucony.',
	3 => 'Dzienny limit opublikowanych %d postów. Post został odrzucony.',
];
$a->strings['Weekly posting limit of %d post reached. The post was rejected.'] = [
	0 => 'Tygodniowy limit wysyłania %d posta. Post został odrzucony.',
	1 => 'Tygodniowy limit wysyłania %d postów. Post został odrzucony.',
	2 => 'Tygodniowy limit wysyłania %d postów. Post został odrzucony.',
	3 => 'Tygodniowy limit wysyłania %d postów. Post został odrzucony.',
];
$a->strings['Monthly posting limit of %d post reached. The post was rejected.'] = 'Miesięczny limit %d wysyłania postów. Post został odrzucony.';
$a->strings['Profile Photos'] = 'Zdjęcie profilowe';
$a->strings['Access denied.'] = 'Brak dostępu.';
$a->strings['Contact not found.'] = 'Nie znaleziono kontaktu.';
$a->strings['Permission denied.'] = 'Brak uprawnień.';
$a->strings['Number of daily wall messages for %s exceeded. Message failed.'] = 'Dzienny limit wiadomości %s został przekroczony. Wiadomość została odrzucona.';
$a->strings['No recipient selected.'] = 'Nie wybrano odbiorcy.';
$a->strings['Unable to check your home location.'] = 'Nie można sprawdzić twojej lokalizacji.';
$a->strings['Message could not be sent.'] = 'Nie udało się wysłać wiadomości.';
$a->strings['Message collection failure.'] = 'Błąd zbierania komunikatów.';
$a->strings['No recipient.'] = 'Brak odbiorcy.';
$a->strings['Please enter a link URL:'] = 'Proszę wpisać adres URL:';
$a->strings['Send Private Message'] = 'Wyślij prywatną wiadomość';
$a->strings['If you wish for %s to respond, please check that the privacy settings on your site allow private mail from unknown senders.'] = 'Jeśli chcesz %s odpowiedzieć, sprawdź, czy ustawienia prywatności w Twojej witrynie zezwalają na prywatne wiadomości od nieznanych nadawców.';
$a->strings['To:'] = 'Do:';
$a->strings['Subject:'] = 'Temat:';
$a->strings['Your message:'] = 'Twoja wiadomość:';
$a->strings['Insert web link'] = 'Wstaw link';
$a->strings['Profile not found.'] = 'Nie znaleziono profilu.';
$a->strings['This may occasionally happen if contact was requested by both persons and it has already been approved.'] = 'Może się to zdarzyć, gdy kontakt został zgłoszony przez obie osoby i został już zatwierdzony.';
$a->strings['Response from remote site was not understood.'] = 'Odpowiedź do zdalnej strony nie została zrozumiana';
$a->strings['Unexpected response from remote site: '] = 'Nieoczekiwana odpowiedź od strony zdalnej:';
$a->strings['Confirmation completed successfully.'] = 'Potwierdzenie zostało pomyślnie zakończone.';
$a->strings['Temporary failure. Please wait and try again.'] = 'Tymczasowa awaria. Proszę czekać i spróbuj ponownie.';
$a->strings['Introduction failed or was revoked.'] = 'Wprowadzenie nie powiodło się lub zostało odwołane.';
$a->strings['Remote site reported: '] = 'Zgłoszona zdana strona:';
$a->strings['No user record found for \'%s\' '] = 'Nie znaleziono użytkownika dla \'%s\'';
$a->strings['Our site encryption key is apparently messed up.'] = 'Klucz kodujący jest najwyraźniej uszkodzony.';
$a->strings['Empty site URL was provided or URL could not be decrypted by us.'] = 'Został podany pusty adres URL witryny lub nie można go odszyfrować.';
$a->strings['Contact record was not found for you on our site.'] = 'Nie znaleziono kontaktu na naszej stronie';
$a->strings['Site public key not available in contact record for URL %s.'] = 'Publiczny klucz witryny jest niedostępny w rekordzie kontaktu dla adresu URL %s';
$a->strings['The ID provided by your system is a duplicate on our system. It should work if you try again.'] = 'Identyfikator dostarczony przez Twój system jest duplikatem w naszym systemie. Powinien działać, jeśli spróbujesz ponownie.';
$a->strings['Unable to set your contact credentials on our system.'] = 'Nie można ustawić danych kontaktowych w naszym systemie.';
$a->strings['Unable to update your contact profile details on our system'] = 'Nie można zaktualizować danych Twojego profilu kontaktowego w naszym systemie';
$a->strings['[Name Withheld]'] = '[Nazwa zastrzeżona]';
$a->strings['Public access denied.'] = 'Publiczny dostęp zabroniony.';
$a->strings['No videos selected'] = 'Nie zaznaczono filmów';
$a->strings['Access to this item is restricted.'] = 'Dostęp do tego obiektu jest ograniczony.';
$a->strings['View Video'] = 'Zobacz film';
$a->strings['View Album'] = 'Zobacz album';
$a->strings['Recent Videos'] = 'Ostatnio dodane filmy';
$a->strings['Upload New Videos'] = 'Wstaw nowe filmy';
$a->strings['No keywords to match. Please add keywords to your profile.'] = 'Brak pasujących słów kluczowych. Dodaj słowa kluczowe do swojego profilu.';
$a->strings['first'] = 'pierwszy';
$a->strings['next'] = 'następny';
$a->strings['No matches'] = 'Brak wyników';
$a->strings['Profile Match'] = 'Dopasowanie profilu';
$a->strings['Missing some important data!'] = 'Brakuje ważnych danych!';
$a->strings['Update'] = 'Zaktualizuj';
$a->strings['Failed to connect with email account using the settings provided.'] = 'Połączenie z kontem email używając wybranych ustawień nie powiodło się.';
$a->strings['Contact CSV file upload error'] = 'Kontakt z plikiem CSV błąd przekazywania plików';
$a->strings['Importing Contacts done'] = 'Importowanie kontaktów zakończone';
$a->strings['Relocate message has been send to your contacts'] = 'Przeniesienie wiadomości zostało wysłane do Twoich kontaktów';
$a->strings['Passwords do not match.'] = 'Hasła nie pasują do siebie.';
$a->strings['Password update failed. Please try again.'] = 'Aktualizacja hasła nie powiodła się. Proszę spróbować ponownie.';
$a->strings['Password changed.'] = 'Hasło zostało zmienione.';
$a->strings['Password unchanged.'] = 'Hasło niezmienione.';
$a->strings['Please use a shorter name.'] = 'Użyj krótszej nazwy.';
$a->strings['Name too short.'] = 'Nazwa jest za krótka. ';
$a->strings['Wrong Password.'] = 'Nieprawidłowe hasło.';
$a->strings['Invalid email.'] = 'Niepoprawny e-mail.';
$a->strings['Cannot change to that email.'] = 'Nie można zmienić tego e-maila.';
$a->strings['Private forum has no privacy permissions. Using default privacy group.'] = 'Prywatne forum nie ma uprawnień do prywatności. Użyj domyślnej grupy prywatnej.';
$a->strings['Private forum has no privacy permissions and no default privacy group.'] = 'Prywatne forum nie ma uprawnień do prywatności ani domyślnej grupy prywatności.';
$a->strings['Add application'] = 'Dodaj aplikację';
$a->strings['Save Settings'] = 'Zapisz ustawienia';
$a->strings['Name'] = 'Nazwa';
$a->strings['Consumer Key'] = 'Klucz klienta';
$a->strings['Consumer Secret'] = 'Tajny klucz klienta';
$a->strings['Redirect'] = 'Przekierowanie';
$a->strings['Icon url'] = 'Adres Url ikony';
$a->strings['You can\'t edit this application.'] = 'Nie możesz edytować tej aplikacji.';
$a->strings['Connected Apps'] = 'Powiązane aplikacje';
$a->strings['Edit'] = 'Edytuj';
$a->strings['Client key starts with'] = 'Klucz klienta zaczyna się od';
$a->strings['No name'] = 'Bez nazwy';
$a->strings['Remove authorization'] = 'Odwołaj upoważnienie';
$a->strings['No Addon settings configured'] = 'Brak skonfigurowanych ustawień dodatków';
$a->strings['Addon Settings'] = 'Ustawienia Dodatków';
$a->strings['Additional Features'] = 'Dodatkowe funkcje';
$a->strings['Diaspora (Socialhome, Hubzilla)'] = 'Diaspora (Socialhome, Hubzilla)';
$a->strings['enabled'] = 'włączone';
$a->strings['disabled'] = 'wyłączone';
$a->strings['Built-in support for %s connectivity is %s'] = 'Wbudowane wsparcie dla połączenia z %s jest %s';
$a->strings['Email access is disabled on this site.'] = 'Dostęp do e-maila jest wyłączony na tej stronie.';
$a->strings['None'] = 'Brak';
$a->strings['Social Networks'] = 'Portale społecznościowe';
$a->strings['General Social Media Settings'] = 'Ogólne ustawienia mediów społecznościowych';
$a->strings['Accept only top level posts by contacts you follow'] = 'Akceptuj tylko posty najwyższego poziomu według kontaktów, które obserwujesz';
$a->strings['The system does an auto completion of threads when a comment arrives. This has got the side effect that you can receive posts that had been started by a non-follower but had been commented by someone you follow. This setting deactivates this behaviour. When activated, you strictly only will receive posts from people you really do follow.'] = 'System dokonuje automatycznego uzupełniania wątków po otrzymaniu komentarza. Ma to taki efekt uboczny, że możesz otrzymywać posty, które zostały założone przez osoby niebędące obserwatorami, ale zostały skomentowane przez osobę, którą obserwujesz. To ustawienie wyłącza to zachowanie. Po aktywacji będziesz otrzymywać wyłącznie wpisy od osób, które naprawdę obserwujesz.';
$a->strings['Disable Content Warning'] = 'Wyłącz ostrzeżenie o treści';
$a->strings['Users on networks like Mastodon or Pleroma are able to set a content warning field which collapse their post by default. This disables the automatic collapsing and sets the content warning as the post title. Doesn\'t affect any other content filtering you eventually set up.'] = 'Użytkownicy w sieciach takich jak Mastodon lub Pleroma mogą ustawić pole ostrzeżenia o treści, które domyślnie zwijać będzie swój wpis. Powoduje wyłączenie automatycznego zwijania i ustawia ostrzeżenie o treści jako tytuł postu. Nie ma wpływu na żadne inne filtrowanie treści, które ostatecznie utworzyłeś.';
$a->strings['Disable intelligent shortening'] = 'Wyłącz inteligentne skracanie';
$a->strings['Normally the system tries to find the best link to add to shortened posts. If this option is enabled then every shortened post will always point to the original friendica post.'] = 'Zwykle system próbuje znaleźć najlepszy link do dodania do skróconych postów. Jeśli ta opcja jest włączona, każdy skrócony wpis zawsze wskazuje oryginalny post znajomej osoby.';
$a->strings['Attach the link title'] = 'Dołącz tytuł linku';
$a->strings['When activated, the title of the attached link will be added as a title on posts to Diaspora. This is mostly helpful with "remote-self" contacts that share feed content.'] = 'Po aktywacji tytuł dołączonego linku zostanie dodany jako tytuł postów do Diaspory. Jest to szczególnie pomocne w przypadku kontaktów „zdalnych”, które udostępniają treść kanału.';
$a->strings['Automatically follow any GNU Social (OStatus) followers/mentioners'] = 'Automatycznie podążaj za wszystkimi obserwatorami/rzecznikami GNU Społeczności (OStatus)';
$a->strings['If you receive a message from an unknown OStatus user, this option decides what to do. If it is checked, a new contact will be created for every unknown user.'] = 'Jeśli otrzymasz wiadomość od nieznanego użytkownika OStatus, ta opcja decyduje, co zrobić. Jeśli zostanie zaznaczone, dla każdego nieznanego użytkownika zostanie utworzony nowy kontakt.';
$a->strings['Default group for OStatus contacts'] = 'Domyślna grupa dla kontaktów OStatus';
$a->strings['Your legacy GNU Social account'] = 'Twoje starsze konto społecznościowe GNU';
$a->strings['If you enter your old GNU Social/Statusnet account name here (in the format user@domain.tld), your contacts will be added automatically. The field will be emptied when done.'] = 'Jeśli podasz swoją starą nazwę konta GNU Social/Statusnet tutaj (w formacie user@domain.tld), twoje kontakty zostaną dodane automatycznie. Pole zostanie opróżnione po zakończeniu.';
$a->strings['Repair OStatus subscriptions'] = 'Napraw subskrypcje OStatus';
$a->strings['Email/Mailbox Setup'] = 'Ustawienia  emaila/skrzynki mailowej';
$a->strings['If you wish to communicate with email contacts using this service (optional), please specify how to connect to your mailbox.'] = 'Jeśli chcesz komunikować się z kontaktami e-mail za pomocą tej usługi (opcjonalnie), określ sposób łączenia się ze skrzynką pocztową.';
$a->strings['Last successful email check:'] = 'Ostatni sprawdzony e-mail:';
$a->strings['IMAP server name:'] = 'Nazwa serwera IMAP:';
$a->strings['IMAP port:'] = 'Port IMAP:';
$a->strings['Security:'] = 'Ochrona:';
$a->strings['Email login name:'] = 'Nazwa logowania e-mail:';
$a->strings['Email password:'] = 'E-mail hasło:';
$a->strings['Reply-to address:'] = 'Adres zwrotny:';
$a->strings['Send public posts to all email contacts:'] = 'Wyślij publiczny wpis do wszystkich kontaktów e-mail:';
$a->strings['Action after import:'] = 'Akcja po zaimportowaniu:';
$a->strings['Mark as seen'] = 'Oznacz jako przeczytane';
$a->strings['Move to folder'] = 'Przenieś do folderu';
$a->strings['Move to folder:'] = 'Przenieś do folderu:';
$a->strings['Unable to find your profile. Please contact your admin.'] = 'Nie można znaleźć Twojego profilu. Skontaktuj się z administratorem.';
$a->strings['Account Types'] = 'Rodzaje kont';
$a->strings['Personal Page Subtypes'] = 'Podtypy osobistych stron';
$a->strings['Community Forum Subtypes'] = 'Podtypy społeczności forum';
$a->strings['Personal Page'] = 'Strona osobista';
$a->strings['Account for a personal profile.'] = 'Konto dla profilu osobistego.';
$a->strings['Organisation Page'] = 'Strona Organizacji';
$a->strings['Account for an organisation that automatically approves contact requests as "Followers".'] = 'Konto dla organizacji, która automatycznie zatwierdza prośby o kontakt jako "Obserwatorzy".';
$a->strings['News Page'] = 'Strona Wiadomości';
$a->strings['Account for a news reflector that automatically approves contact requests as "Followers".'] = 'Konto dla reflektora wiadomości, który automatycznie zatwierdza prośby o kontakt jako "Obserwatorzy".';
$a->strings['Community Forum'] = 'Forum społecznościowe';
$a->strings['Account for community discussions.'] = 'Konto do dyskusji w społeczności.';
$a->strings['Normal Account Page'] = 'Normalna strona konta';
$a->strings['Account for a regular personal profile that requires manual approval of "Friends" and "Followers".'] = 'Konto dla zwykłego profilu osobistego, który wymaga ręcznej zgody "Przyjaciół" i "Obserwatorów".';
$a->strings['Soapbox Page'] = 'Strona Soapbox';
$a->strings['Account for a public profile that automatically approves contact requests as "Followers".'] = 'Konto dla profilu publicznego, który automatycznie zatwierdza prośby o kontakt jako "Obserwatorzy".';
$a->strings['Public Forum'] = 'Forum publiczne';
$a->strings['Automatically approves all contact requests.'] = 'Automatycznie zatwierdza wszystkie prośby o kontakt.';
$a->strings['Automatic Friend Page'] = 'Automatyczna strona znajomego';
$a->strings['Account for a popular profile that automatically approves contact requests as "Friends".'] = 'Konto popularnego profilu, które automatycznie zatwierdza prośby o kontakt jako "Przyjaciele".';
$a->strings['Private Forum [Experimental]'] = 'Prywatne Forum [Eksperymentalne]';
$a->strings['Requires manual approval of contact requests.'] = 'Wymaga ręcznego zatwierdzania żądań kontaktów.';
$a->strings['OpenID:'] = 'OpenID:';
$a->strings['(Optional) Allow this OpenID to login to this account.'] = '(Opcjonalnie) Pozwól zalogować się na to konto przy pomocy OpenID.';
$a->strings['Publish your profile in your local site directory?'] = 'Czy opublikować twój profil w katalogu lokalnej witryny?';
$a->strings['Your profile will be published in this node\'s <a href="%s">local directory</a>. Your profile details may be publicly visible depending on the system settings.'] = 'Twój profil zostanie opublikowany w lokalnym katalogu tego <a href="%s">węzła</a>. Dane Twojego profilu mogą być publicznie widoczne w zależności od ustawień systemu.';
$a->strings['Your profile will also be published in the global friendica directories (e.g. <a href="%s">%s</a>).'] = 'Twój profil zostanie również opublikowany w globalnych katalogach Friendica (np. <a href="%s">%s</a>).';
$a->strings['Your Identity Address is <strong>\'%s\'</strong> or \'%s\'.'] = 'Twój adres tożsamości to <strong>\'%s\'</strong> lub \'%s\'.';
$a->strings['Account Settings'] = 'Ustawienia konta';
$a->strings['Password Settings'] = 'Ustawienia hasła';
$a->strings['New Password:'] = 'Nowe hasło:';
$a->strings['Allowed characters are a-z, A-Z, 0-9 and special characters except white spaces, accentuated letters and colon (:).'] = 'Dozwolone znaki to a-z, A-Z, 0-9 i znaki specjalne, z wyjątkiem białych znaków, podkreślonych liter i dwukropka (:).';
$a->strings['Confirm:'] = 'Potwierdź:';
$a->strings['Leave password fields blank unless changing'] = 'Pozostaw pole hasła puste, jeżeli nie chcesz go zmienić.';
$a->strings['Current Password:'] = 'Aktualne hasło:';
$a->strings['Your current password to confirm the changes'] = 'Wpisz aktualne hasło, aby potwierdzić zmiany';
$a->strings['Password:'] = 'Hasło:';
$a->strings['Delete OpenID URL'] = 'Usuń adres URL OpenID';
$a->strings['Basic Settings'] = 'Ustawienia podstawowe';
$a->strings['Full Name:'] = 'Imię i nazwisko:';
$a->strings['Email Address:'] = 'Adres email:';
$a->strings['Your Timezone:'] = 'Twoja strefa czasowa:';
$a->strings['Your Language:'] = 'Twój język:';
$a->strings['Set the language we use to show you friendica interface and to send you emails'] = 'Wybierz język, ktory bedzie używany do wyświetlania użytkownika friendica i wysłania Ci e-maili';
$a->strings['Default Post Location:'] = 'Domyślna lokalizacja wiadomości:';
$a->strings['Use Browser Location:'] = 'Używaj lokalizacji przeglądarki:';
$a->strings['Security and Privacy Settings'] = 'Ustawienia bezpieczeństwa i prywatności';
$a->strings['Maximum Friend Requests/Day:'] = 'Maksymalna dzienna liczba zaproszeń do grona przyjaciół:';
$a->strings['(to prevent spam abuse)'] = '(aby zapobiec spamowaniu)';
$a->strings['Allow your profile to be searchable globally?'] = 'Czy Twój profil ma być dostępny do wyszukiwania na całym świecie?';
$a->strings['Activate this setting if you want others to easily find and follow you. Your profile will be searchable on remote systems. This setting also determines whether Friendica will inform search engines that your profile should be indexed or not.'] = 'Aktywuj to ustawienie, jeśli chcesz, aby inni mogli Cię łatwo znaleźć i śledzić. Twój profil będzie można przeszukiwać na zdalnych systemach. To ustawienie określa również, czy Friendica poinformuje wyszukiwarki, że Twój profil powinien być indeksowany, czy nie.';
$a->strings['Hide your contact/friend list from viewers of your profile?'] = 'Ukryć listę kontaktów/znajomych przed osobami przeglądającymi Twój profil?';
$a->strings['A list of your contacts is displayed on your profile page. Activate this option to disable the display of your contact list.'] = 'Lista kontaktów jest wyświetlana na stronie profilu. Aktywuj tę opcję, aby wyłączyć wyświetlanie listy kontaktów.';
$a->strings['Hide your profile details from anonymous viewers?'] = 'Ukryć dane Twojego profilu przed anonimowymi widzami?';
$a->strings['Anonymous visitors will only see your profile picture, your display name and the nickname you are using on your profile page. Your public posts and replies will still be accessible by other means.'] = 'Anonimowi użytkownicy zobaczą tylko Twoje zdjęcie profilowe, swoją wyświetlaną nazwę i pseudonim, którego używasz na stronie profilu. Twoje publiczne posty i odpowiedzi będą nadal dostępne w inny sposób.';
$a->strings['Make public posts unlisted'] = 'Zamieszczaj posty publiczne niepubliczne';
$a->strings['Your public posts will not appear on the community pages or in search results, nor be sent to relay servers. However they can still appear on public feeds on remote servers.'] = 'Twoje publiczne posty nie będą wyświetlane na stronach społeczności ani w wynikach wyszukiwania ani nie będą wysyłane do serwerów przekazywania. Jednak nadal mogą one pojawiać się w publicznych kanałach na serwerach zdalnych.';
$a->strings['Make all posted pictures accessible'] = 'Udostępnij wszystkie opublikowane zdjęcia';
$a->strings['This option makes every posted picture accessible via the direct link. This is a workaround for the problem that most other networks can\'t handle permissions on pictures. Non public pictures still won\'t be visible for the public on your photo albums though.'] = 'Ta opcja powoduje, że każde opublikowane zdjęcie jest dostępne poprzez bezpośredni link. Jest to obejście problemu polegającego na tym, że większość innych sieci nie może obsłużyć uprawnień do zdjęć. Jednak zdjęcia niepubliczne nadal nie będą widoczne publicznie w Twoich albumach.';
$a->strings['Allow friends to post to your profile page?'] = 'Zezwalać znajomym na publikowanie postów na stronie Twojego profilu?';
$a->strings['Your contacts may write posts on your profile wall. These posts will be distributed to your contacts'] = 'Twoi znajomi mogą pisać posty na stronie Twojego profilu. Posty zostaną przesłane do Twoich kontaktów.';
$a->strings['Allow friends to tag your posts?'] = 'Zezwolić na oznaczanie Twoich postów przez znajomych?';
$a->strings['Your contacts can add additional tags to your posts.'] = 'Twoje kontakty mogą dodawać do tagów dodatkowe posty.';
$a->strings['Permit unknown people to send you private mail?'] = 'Zezwolić nieznanym osobom na wysyłanie prywatnych wiadomości?';
$a->strings['Friendica network users may send you private messages even if they are not in your contact list.'] = 'Użytkownicy sieci w serwisie Friendica mogą wysyłać prywatne wiadomości, nawet jeśli nie znajdują się one na liście kontaktów.';
$a->strings['Maximum private messages per day from unknown people:'] = 'Maksymalna liczba prywatnych wiadomości dziennie od nieznanych osób:';
$a->strings['Default Post Permissions'] = 'Domyślne prawa dostępu wiadomości';
$a->strings['Expiration settings'] = 'Ustawienia ważności';
$a->strings['Automatically expire posts after this many days:'] = 'Posty wygasną automatycznie po następującej liczbie dni:';
$a->strings['If empty, posts will not expire. Expired posts will be deleted'] = 'Pole puste, wiadomość nie wygaśnie. Niezapisane wpisy zostaną usunięte.';
$a->strings['Expire posts'] = 'Ważność wiadomości';
$a->strings['When activated, posts and comments will be expired.'] = 'Po aktywacji posty i komentarze wygasną.';
$a->strings['Expire personal notes'] = 'Ważność osobistych notatek';
$a->strings['When activated, the personal notes on your profile page will be expired.'] = 'Po aktywacji osobiste notatki na stronie profilu wygasną.';
$a->strings['Expire starred posts'] = 'Wygasaj posty oznaczone gwiazdką';
$a->strings['Starring posts keeps them from being expired. That behaviour is overwritten by this setting.'] = 'Oznaczanie postów gwiazdką powoduje, że wygasają. To zachowanie jest zastępowane przez to ustawienie.';
$a->strings['Expire photos'] = 'Wygasanie zdjęć';
$a->strings['When activated, photos will be expired.'] = 'Po aktywacji zdjęcia wygasną.';
$a->strings['Only expire posts by others'] = 'Wygasają tylko posty innych osób';
$a->strings['When activated, your own posts never expire. Then the settings above are only valid for posts you received.'] = 'Po aktywacji Twoje posty nigdy nie wygasają. Zatem powyższe ustawienia obowiązują tylko dla otrzymanych postów.';
$a->strings['Notification Settings'] = 'Ustawienia powiadomień';
$a->strings['Send a notification email when:'] = 'Wysyłaj powiadmonienia na email, kiedy:';
$a->strings['You receive an introduction'] = 'Otrzymałeś zaproszenie';
$a->strings['Your introductions are confirmed'] = 'Twoje zaproszenie jest potwierdzone';
$a->strings['Someone writes on your profile wall'] = 'Ktoś pisze na twoim profilu';
$a->strings['Someone writes a followup comment'] = 'Ktoś pisze komentarz nawiązujący.';
$a->strings['You receive a private message'] = 'Otrzymałeś prywatną wiadomość';
$a->strings['You receive a friend suggestion'] = 'Otrzymałeś propozycję od znajomych';
$a->strings['You are tagged in a post'] = 'Jesteś oznaczony tagiem w poście';
$a->strings['You are poked/prodded/etc. in a post'] = 'Jesteś zaczepiony/zaczepiona/itp. w poście';
$a->strings['Activate desktop notifications'] = 'Aktywuj powiadomienia na pulpicie';
$a->strings['Show desktop popup on new notifications'] = 'Pokazuj wyskakujące okienko gdy otrzymasz powiadomienie';
$a->strings['Text-only notification emails'] = 'E-maile z powiadomieniami tekstowymi';
$a->strings['Send text only notification emails, without the html part'] = 'Wysyłaj tylko e-maile z powiadomieniami tekstowymi, bez części html';
$a->strings['Show detailled notifications'] = 'Pokazuj szczegółowe powiadomienia';
$a->strings['Per default, notifications are condensed to a single notification per item. When enabled every notification is displayed.'] = 'Domyślne powiadomienia są skondensowane z jednym powiadomieniem dla każdego przedmiotu. Po włączeniu wyświetlane jest każde powiadomienie.';
$a->strings['Advanced Account/Page Type Settings'] = 'Zaawansowane ustawienia konta/rodzaju strony';
$a->strings['Change the behaviour of this account for special situations'] = 'Zmień zachowanie tego konta w sytuacjach specjalnych';
$a->strings['Import Contacts'] = 'Import kontaktów';
$a->strings['Upload a CSV file that contains the handle of your followed accounts in the first column you exported from the old account.'] = 'Prześlij plik CSV zawierający obsługę obserwowanych kont w pierwszej kolumnie wyeksportowanej ze starego konta.';
$a->strings['Upload File'] = 'Prześlij plik';
$a->strings['Relocate'] = 'Przeniesienie';
$a->strings['If you have moved this profile from another server, and some of your contacts don\'t receive your updates, try pushing this button.'] = 'Jeśli ten profil został przeniesiony z innego serwera, a niektóre z Twoich kontaktów nie otrzymają aktualizacji, spróbuj nacisnąć ten przycisk.';
$a->strings['Resend relocate message to contacts'] = 'Wyślij ponownie przenieść wiadomości do kontaktów';
$a->strings['{0} wants to be your friend'] = '{0} chce być Twoim znajomym';
$a->strings['{0} requested registration'] = '{0} wymagana rejestracja';
$a->strings['No contacts in common.'] = 'Brak wspólnych kontaktów.';
$a->strings['Common Friends'] = 'Wspólni znajomi';
$a->strings['No such group'] = 'Nie ma takiej grupy';
$a->strings['Group is empty'] = 'Grupa jest pusta';
$a->strings['Group: %s'] = 'Grupa: %s';
$a->strings['Invalid contact.'] = 'Nieprawidłowy kontakt.';
$a->strings['Latest Activity'] = 'Ostatnia Aktywność';
$a->strings['Sort by latest activity'] = 'Sortuj według ostatniej aktywności';
$a->strings['Latest Posts'] = 'Najnowsze wiadomości';
$a->strings['Sort by post received date'] = 'Sortowanie według daty otrzymania postu';
$a->strings['Personal'] = 'Osobiste';
$a->strings['Posts that mention or involve you'] = 'Posty, które wspominają lub angażują Ciebie';
$a->strings['Starred'] = 'Ulubione';
$a->strings['Favourite Posts'] = 'Ulubione posty';
$a->strings['Resubscribing to OStatus contacts'] = 'Ponowne subskrybowanie kontaktów OStatus';
$a->strings['Error'] = [
	0 => 'Błąd',
	1 => 'Błędów',
	2 => 'Błędy',
	3 => 'Błędów',
];
$a->strings['Done'] = 'Gotowe';
$a->strings['Keep this window open until done.'] = 'Pozostaw to okno otwarte, dopóki nie będzie gotowe.';
$a->strings['You aren\'t following this contact.'] = 'Nie obserwujesz tego kontaktu.';
$a->strings['Unfollowing is currently not supported by your network.'] = 'Brak obserwowania nie jest obecnie obsługiwany przez twoją sieć.';
$a->strings['Disconnect/Unfollow'] = 'Rozłącz/Nie obserwuj';
$a->strings['Your Identity Address:'] = 'Twój adres tożsamości:';
$a->strings['Submit Request'] = 'Wyślij zgłoszenie';
$a->strings['Profile URL'] = 'Adres URL profilu';
$a->strings['Status Messages and Posts'] = 'Status wiadomości i postów';
$a->strings['New Message'] = 'Nowa wiadomość';
$a->strings['Unable to locate contact information.'] = 'Nie można znaleźć informacji kontaktowych.';
$a->strings['Discard'] = 'Odrzuć';
$a->strings['Do you really want to delete this message?'] = 'Czy na pewno chcesz usunąć tę wiadomość?';
$a->strings['Yes'] = 'Tak';
$a->strings['Conversation not found.'] = 'Nie znaleziono rozmowy.';
$a->strings['No messages.'] = 'Brak wiadomości.';
$a->strings['Message not available.'] = 'Wiadomość nie jest dostępna.';
$a->strings['Delete message'] = 'Usuń wiadomość';
$a->strings['D, d M Y - g:i A'] = 'D, d M Y - g:m A';
$a->strings['Delete conversation'] = 'Usuń rozmowę';
$a->strings['No secure communications available. You <strong>may</strong> be able to respond from the sender\'s profile page.'] = 'Brak bezpiecznej komunikacji. <strong>Możesz</strong> odpowiedzieć na stronie profilu nadawcy.';
$a->strings['Send Reply'] = 'Odpowiedz';
$a->strings['Unknown sender - %s'] = 'Nieznany nadawca - %s';
$a->strings['You and %s'] = 'Ty i %s';
$a->strings['%s and You'] = '%s i ty';
$a->strings['%d message'] = [
	0 => '%d wiadomość',
	1 => '%d wiadomości',
	2 => '%d wiadomości',
	3 => '%d wiadomości',
];
$a->strings['Subscribing to OStatus contacts'] = 'Subskrybowanie kontaktów OStatus';
$a->strings['No contact provided.'] = 'Brak kontaktu.';
$a->strings['Couldn\'t fetch information for contact.'] = 'Nie można pobrać informacji o kontakcie.';
$a->strings['Couldn\'t fetch friends for contact.'] = 'Nie można pobrać znajomych do kontaktu.';
$a->strings['success'] = 'powodzenie';
$a->strings['failed'] = 'nie powiodło się';
$a->strings['ignored'] = 'ignorowany(-a)';
$a->strings['%1$s welcomes %2$s'] = '%1$s witamy %2$s';
$a->strings['User deleted their account'] = 'Użytkownik usunął swoje konto';
$a->strings['On your Friendica node an user deleted their account. Please ensure that their data is removed from the backups.'] = 'W twoim węźle Friendica użytkownik usunął swoje konto. Upewnij się, że ich dane zostały usunięte z kopii zapasowych.';
$a->strings['The user id is %d'] = 'Identyfikatorem użytkownika jest %d';
$a->strings['Remove My Account'] = 'Usuń moje konto';
$a->strings['This will completely remove your account. Once this has been done it is not recoverable.'] = 'Spowoduje to całkowite usunięcie Twojego konta. Po wykonaniu tej czynności nie można jej cofnąć.';
$a->strings['Please enter your password for verification:'] = 'Wprowadź hasło w celu weryfikacji:';
$a->strings['Remove Item Tag'] = 'Usuń pozycję Tag';
$a->strings['Select a tag to remove: '] = 'Wybierz tag do usunięcia: ';
$a->strings['Remove'] = 'Usuń';
$a->strings['No suggestions available. If this is a new site, please try again in 24 hours.'] = 'Brak dostępnych sugestii. Jeśli jest to nowa witryna, spróbuj ponownie za 24 godziny.';
$a->strings['The requested item doesn\'t exist or has been deleted.'] = 'Żądany element nie istnieje lub został usunięty.';
$a->strings['Access to this profile has been restricted.'] = 'Dostęp do tego profilu został ograniczony.';
$a->strings['The feed for this item is unavailable.'] = 'Kanał dla tego elementu jest niedostępny.';
$a->strings['Invalid request.'] = 'Nieprawidłowe żądanie.';
$a->strings['Image exceeds size limit of %s'] = 'Obraz przekracza limit rozmiaru wynoszący %s';
$a->strings['Unable to process image.'] = 'Przetwarzanie obrazu nie powiodło się.';
$a->strings['Wall Photos'] = 'Tablica zdjęć';
$a->strings['Image upload failed.'] = 'Przesyłanie obrazu nie powiodło się.';
$a->strings['No valid account found.'] = 'Nie znaleziono ważnego konta.';
$a->strings['Password reset request issued. Check your email.'] = 'Prośba o zresetowanie hasła została zatwierdzona. Sprawdź swój e-mail.';
$a->strings['
		Dear %1$s,
			A request was recently received at "%2$s" to reset your account
		password. In order to confirm this request, please select the verification link
		below or paste it into your web browser address bar.

		If you did NOT request this change, please DO NOT follow the link
		provided and ignore and/or delete this email, the request will expire shortly.

		Your password will not be changed unless we can verify that you
		issued this request.'] = '
		Szanowny Użytkowniku %1$s, 
			Otrzymano prośbę o \'\'%2$s" zresetowanie hasła do konta. 
		Aby potwierdzić tę prośbę, kliknij link weryfikacyjny 
		poniżej lub wklej go w pasek adresu przeglądarki internetowej. 
 
		Jeśli nie prosisz o tę zmianę, nie klikaj w link.
		Jeśli zignorujesz i/lub usuniesz ten e-mail, prośba wkrótce wygaśnie. 
 
		Twoje hasło nie zostanie zmienione, chyba że będziemy mogli potwierdzić 
		Twoje żądanie.';
$a->strings['
		Follow this link soon to verify your identity:

		%1$s

		You will then receive a follow-up message containing the new password.
		You may change that password from your account settings page after logging in.

		The login details are as follows:

		Site Location:	%2$s
		Login Name:	%3$s'] = '
Postępuj zgodnie z poniższym linkiem, aby zweryfikować swoją tożsamość: 

		%1$s

		Otrzymasz następnie komunikat uzupełniający zawierający nowe hasło. 
		Możesz zmienić to hasło ze strony ustawień swojego konta po zalogowaniu. 
 
		Dane logowania są następujące: 
 
Lokalizacja strony: 	%2$s
Nazwa użytkownika:	%3$s';
$a->strings['Password reset requested at %s'] = 'Prośba o reset hasła na %s';
$a->strings['Request could not be verified. (You may have previously submitted it.) Password reset failed.'] = 'Prośba nie może być zweryfikowana. (Mogłeś już ją poprzednio wysłać.) Reset hasła nie powiódł się.';
$a->strings['Request has expired, please make a new one.'] = 'Żądanie wygasło. Zrób nowe.';
$a->strings['Forgot your Password?'] = 'Zapomniałeś hasła?';
$a->strings['Enter your email address and submit to have your password reset. Then check your email for further instructions.'] = 'Wpisz swój adres email i wyślij, aby zresetować hasło. Później sprawdź swojego emaila w celu uzyskania dalszych instrukcji.';
$a->strings['Nickname or Email: '] = 'Pseudonim lub e-mail: ';
$a->strings['Reset'] = 'Zresetuj';
$a->strings['Password Reset'] = 'Zresetuj hasło';
$a->strings['Your password has been reset as requested.'] = 'Twoje hasło zostało zresetowane zgodnie z żądaniem.';
$a->strings['Your new password is'] = 'Twoje nowe hasło to';
$a->strings['Save or copy your new password - and then'] = 'Zapisz lub skopiuj nowe hasło - a następnie';
$a->strings['click here to login'] = 'naciśnij tutaj, aby zalogować się';
$a->strings['Your password may be changed from the <em>Settings</em> page after successful login.'] = 'Twoje hasło może być zmienione w <em>Ustawieniach</em> po udanym zalogowaniu.';
$a->strings['
			Dear %1$s,
				Your password has been changed as requested. Please retain this
			information for your records (or change your password immediately to
			something that you will remember).
		'] = '
			Szanowny Użytkowniku %1$s, 
				Twoje hasło zostało zmienione zgodnie z życzeniem. Proszę, zachowaj te 
			informacje dotyczące twoich rekordów (lub natychmiast zmień hasło na 
			coś, co zapamiętasz).
		';
$a->strings['
			Your login details are as follows:

			Site Location:	%1$s
			Login Name:	%2$s
			Password:	%3$s

			You may change that password from your account settings page after logging in.
		'] = '
			Dane logowania są następujące:

			Lokalizacja witryny:	%1$s
			Nazwa użytkownika:	%2$s
			Hasło:	%3$s

			Możesz zmienić hasło na stronie ustawień konta po zalogowaniu.
		';
$a->strings['Your password has been changed at %s'] = 'Twoje hasło zostało zmienione na %s';
$a->strings['This introduction has already been accepted.'] = 'To wprowadzenie zostało już zaakceptowane.';
$a->strings['Profile location is not valid or does not contain profile information.'] = 'Lokalizacja profilu jest nieprawidłowa lub nie zawiera informacji o profilu.';
$a->strings['Warning: profile location has no identifiable owner name.'] = 'Ostrzeżenie: położenie profilu ma taką samą nazwę jak użytkownik.';
$a->strings['Warning: profile location has no profile photo.'] = 'Ostrzeżenie: położenie profilu nie zawiera zdjęcia.';
$a->strings['%d required parameter was not found at the given location'] = [
	0 => '%d wymagany parametr nie został znaleziony w podanej lokacji',
	1 => '%d wymagane parametry nie zostały znalezione w podanej lokacji',
	2 => '%d wymagany parametr nie został znaleziony w podanej lokacji',
	3 => '%d wymagany parametr nie został znaleziony w podanej lokacji',
];
$a->strings['Introduction complete.'] = 'Wprowadzanie zakończone.';
$a->strings['Unrecoverable protocol error.'] = 'Nieodwracalny błąd protokołu.';
$a->strings['Profile unavailable.'] = 'Profil niedostępny.';
$a->strings['%s has received too many connection requests today.'] = '%s otrzymał dziś zbyt wiele żądań połączeń.';
$a->strings['Spam protection measures have been invoked.'] = 'Wprowadzono zabezpieczenia przed spamem.';
$a->strings['Friends are advised to please try again in 24 hours.'] = 'Przyjaciele namawiają do spróbowania za 24h.';
$a->strings['Invalid locator'] = 'Nieprawidłowy lokalizator';
$a->strings['You have already introduced yourself here.'] = 'Już się tu przedstawiłeś.';
$a->strings['Apparently you are already friends with %s.'] = 'Wygląda na to, że już jesteście znajomymi z %s.';
$a->strings['Invalid profile URL.'] = 'Nieprawidłowy adres URL profilu.';
$a->strings['Disallowed profile URL.'] = 'Nie dozwolony adres URL profilu.';
$a->strings['Blocked domain'] = 'Zablokowana domena';
$a->strings['Failed to update contact record.'] = 'Aktualizacja rekordu kontaktu nie powiodła się.';
$a->strings['Your introduction has been sent.'] = 'Twoje dane zostały wysłane.';
$a->strings['Remote subscription can\'t be done for your network. Please subscribe directly on your system.'] = 'Zdalnej subskrypcji nie można wykonać dla swojej sieci. Proszę zasubskrybuj bezpośrednio w swoim systemie.';
$a->strings['Please login to confirm introduction.'] = 'Zaloguj się, aby potwierdzić wprowadzenie.';
$a->strings['Incorrect identity currently logged in. Please login to <strong>this</strong> profile.'] = 'Niepoprawna tożsamość obecnego użytkownika. Proszę zalogować się na <strong>tego</strong> użytkownika. ';
$a->strings['Confirm'] = 'Potwierdź';
$a->strings['Hide this contact'] = 'Ukryj kontakt';
$a->strings['Welcome home %s.'] = 'Witaj na stronie domowej %s.';
$a->strings['Please confirm your introduction/connection request to %s.'] = 'Proszę potwierdzić swój wstęp/prośbę o połączenie do %s.';
$a->strings['Friend/Connection Request'] = 'Przyjaciel/Prośba o połączenie';
$a->strings['Enter your Webfinger address (user@domain.tld) or profile URL here. If this isn\'t supported by your system (for example it doesn\'t work with Diaspora), you have to subscribe to <strong>%s</strong> directly on your system'] = 'Wpisz tutaj swój adres Webfinger (user@domain.tld) lub adres URL profilu. Jeśli nie jest to obsługiwane przez system (na przykład nie działa z Diaspora), musisz subskrybować <strong>%s</strong> bezpośrednio w systemie';
$a->strings['Your Webfinger address or profile URL:'] = 'Twój adres lub adres URL profilu Webfinger:';
$a->strings['Please answer the following:'] = 'Proszę odpowiedzieć na następujące pytania:';
$a->strings['%s knows you'] = '%s zna cię';
$a->strings['Add a personal note:'] = 'Dodaj osobistą notkę:';
$a->strings['Authorize application connection'] = 'Autoryzacja połączenia aplikacji';
$a->strings['Return to your app and insert this Securty Code:'] = 'Powróć do swojej aplikacji i wpisz ten Kod Bezpieczeństwa:';
$a->strings['Please login to continue.'] = 'Zaloguj się aby kontynuować.';
$a->strings['Do you want to authorize this application to access your posts and contacts, and/or create new posts for you?'] = 'Czy chcesz zezwolić tej aplikacji na dostęp do swoich postów i kontaktów i/lub tworzenie nowych postów?';
$a->strings['No'] = 'Nie';
$a->strings['Sorry, maybe your upload is bigger than the PHP configuration allows'] = 'Przepraszam, Twój przesyłany plik jest większy niż pozwala konfiguracja PHP';
$a->strings['Or - did you try to upload an empty file?'] = 'Lub - czy próbowałeś załadować pusty plik?';
$a->strings['File exceeds size limit of %s'] = 'Plik przekracza limit rozmiaru wynoszący %s';
$a->strings['File upload failed.'] = 'Przesyłanie pliku nie powiodło się.';
$a->strings['Unable to locate original post.'] = 'Nie można zlokalizować oryginalnej wiadomości.';
$a->strings['Empty post discarded.'] = 'Pusty wpis został odrzucony.';
$a->strings['Post updated.'] = 'Post zaktualizowany.';
$a->strings['Item wasn\'t stored.'] = 'Element nie został zapisany. ';
$a->strings['Item couldn\'t be fetched.'] = 'Nie można pobrać elementu.';
$a->strings['Item not found.'] = 'Element nie znaleziony.';
$a->strings['Do you really want to delete this item?'] = 'Czy na pewno chcesz usunąć ten element?';
$a->strings['User imports on closed servers can only be done by an administrator.'] = 'Import użytkowników na zamkniętych serwerach może być wykonywany tylko przez administratora.';
$a->strings['This site has exceeded the number of allowed daily account registrations. Please try again tomorrow.'] = 'Strona przekroczyła ilość dozwolonych rejestracji na dzień. Proszę spróbuj ponownie jutro.';
$a->strings['Import'] = 'Import';
$a->strings['Move account'] = 'Przenieś konto';
$a->strings['You can import an account from another Friendica server.'] = 'Możesz zaimportować konto z innego serwera Friendica.';
$a->strings['You need to export your account from the old server and upload it here. We will recreate your old account here with all your contacts. We will try also to inform your friends that you moved here.'] = 'Musisz wyeksportować konto ze starego serwera i przesłać je tutaj. Odtworzymy twoje stare konto tutaj ze wszystkimi twoimi kontaktami. Postaramy się również poinformować twoich znajomych, że się tutaj przeniosłeś.';
$a->strings['This feature is experimental. We can\'t import contacts from the OStatus network (GNU Social/Statusnet) or from Diaspora'] = 'Ta funkcja jest eksperymentalna. Nie możemy importować kontaktów z sieci OStatus (GNU Social/Statusnet) lub z Diaspory';
$a->strings['Account file'] = 'Pliki konta';
$a->strings['To export your account, go to "Settings->Export your personal data" and select "Export account"'] = 'Aby eksportować konto, wejdź w "Ustawienia->Eksport danych osobistych" i wybierz "Eksportuj konto"';
$a->strings['User not found.'] = 'Użytkownik nie znaleziony.';
$a->strings['View'] = 'Widok';
$a->strings['Previous'] = 'Poprzedni';
$a->strings['Next'] = 'Następny';
$a->strings['today'] = 'dzisiaj';
$a->strings['month'] = 'miesiąc';
$a->strings['week'] = 'tydzień';
$a->strings['day'] = 'dzień';
$a->strings['list'] = 'lista';
$a->strings['User not found'] = 'Użytkownik nie znaleziony';
$a->strings['This calendar format is not supported'] = 'Ten format kalendarza nie jest obsługiwany';
$a->strings['No exportable data found'] = 'Nie znaleziono danych do eksportu';
$a->strings['calendar'] = 'kalendarz';
$a->strings['Item not found'] = 'Nie znaleziono elementu';
$a->strings['Edit post'] = 'Edytuj post';
$a->strings['Save'] = 'Zapisz';
$a->strings['web link'] = 'odnośnik sieciowy';
$a->strings['Insert video link'] = 'Wstaw link do filmu';
$a->strings['video link'] = 'link do filmu';
$a->strings['Insert audio link'] = 'Wstaw link do audio';
$a->strings['audio link'] = 'link do audio';
$a->strings['CC: email addresses'] = 'CC: adresy e-mail';
$a->strings['Example: bob@example.com, mary@example.com'] = 'Przykład: bob@example.com, mary@example.com';
$a->strings['Event can not end before it has started.'] = 'Wydarzenie nie może się zakończyć przed jego rozpoczęciem.';
$a->strings['Event title and start time are required.'] = 'Wymagany tytuł wydarzenia i czas rozpoczęcia.';
$a->strings['Create New Event'] = 'Stwórz nowe wydarzenie';
$a->strings['Event details'] = 'Szczegóły wydarzenia';
$a->strings['Starting date and Title are required.'] = 'Data rozpoczęcia i tytuł są wymagane.';
$a->strings['Event Starts:'] = 'Rozpoczęcie wydarzenia:';
$a->strings['Required'] = 'Wymagany';
$a->strings['Finish date/time is not known or not relevant'] = 'Data/czas zakończenia nie jest znana lub jest nieistotna';
$a->strings['Event Finishes:'] = 'Zakończenie wydarzenia:';
$a->strings['Adjust for viewer timezone'] = 'Dopasuj dla strefy czasowej widza';
$a->strings['Description:'] = 'Opis:';
$a->strings['Location:'] = 'Lokalizacja:';
$a->strings['Title:'] = 'Tytuł:';
$a->strings['Share this event'] = 'Udostępnij te wydarzenie';
$a->strings['Basic'] = 'Podstawowy';
$a->strings['Advanced'] = 'Zaawansowany';
$a->strings['Permissions'] = 'Uprawnienia';
$a->strings['Failed to remove event'] = 'Nie udało się usunąć wydarzenia';
$a->strings['The contact could not be added.'] = 'Nie można dodać kontaktu.';
$a->strings['You already added this contact.'] = 'Już dodałeś ten kontakt.';
$a->strings['The network type couldn\'t be detected. Contact can\'t be added.'] = 'Nie można wykryć typu sieci. Kontakt nie może zostać dodany.';
$a->strings['Diaspora support isn\'t enabled. Contact can\'t be added.'] = 'Obsługa Diaspory nie jest włączona. Kontakt nie może zostać dodany.';
$a->strings['OStatus support is disabled. Contact can\'t be added.'] = 'Obsługa OStatus jest wyłączona. Kontakt nie może zostać dodany.';
$a->strings['Tags:'] = 'Tagi:';
$a->strings['Contact Photos'] = 'Zdjęcia kontaktu';
$a->strings['Upload'] = 'Załaduj';
$a->strings['Files'] = 'Pliki';
$a->strings['Personal Notes'] = 'Notatki';
$a->strings['Photo Albums'] = 'Albumy zdjęć';
$a->strings['Recent Photos'] = 'Ostatnio dodane zdjęcia';
$a->strings['Upload New Photos'] = 'Wyślij nowe zdjęcie';
$a->strings['everybody'] = 'wszyscy';
$a->strings['Contact information unavailable'] = 'Informacje o kontakcie są niedostępne';
$a->strings['Album not found.'] = 'Nie znaleziono albumu.';
$a->strings['Album successfully deleted'] = 'Album został pomyślnie usunięty';
$a->strings['Album was empty.'] = 'Album był pusty.';
$a->strings['a photo'] = 'zdjęcie';
$a->strings['%1$s was tagged in %2$s by %3$s'] = '%1$szostał oznaczony tagiem %2$s przez %3$s';
$a->strings['Image upload didn\'t complete, please try again'] = 'Przesyłanie zdjęć nie zostało zakończone, spróbuj ponownie';
$a->strings['Image file is missing'] = 'Brak pliku obrazu';
$a->strings['Server can\'t accept new file upload at this time, please contact your administrator'] = 'Serwer nie może teraz przyjąć nowego pliku, skontaktuj się z administratorem';
$a->strings['Image file is empty.'] = 'Plik obrazka jest pusty.';
$a->strings['No photos selected'] = 'Nie zaznaczono zdjęć';
$a->strings['Upload Photos'] = 'Prześlij zdjęcia';
$a->strings['New album name: '] = 'Nazwa nowego albumu: ';
$a->strings['or select existing album:'] = 'lub wybierz istniejący album:';
$a->strings['Do not show a status post for this upload'] = 'Nie pokazuj statusu postów dla tego wysłania';
$a->strings['Show to Groups'] = 'Pokaż Grupy';
$a->strings['Show to Contacts'] = 'Pokaż kontakty';
$a->strings['Do you really want to delete this photo album and all its photos?'] = 'Czy na pewno chcesz usunąć ten album i wszystkie zdjęcia z tego albumu?';
$a->strings['Delete Album'] = 'Usuń album';
$a->strings['Edit Album'] = 'Edytuj album';
$a->strings['Drop Album'] = 'Upuść Album';
$a->strings['Show Newest First'] = 'Pokaż najpierw najnowsze';
$a->strings['Show Oldest First'] = 'Pokaż najpierw najstarsze';
$a->strings['View Photo'] = 'Zobacz zdjęcie';
$a->strings['Permission denied. Access to this item may be restricted.'] = 'Odmowa dostępu. Dostęp do tych danych może być ograniczony.';
$a->strings['Photo not available'] = 'Zdjęcie niedostępne';
$a->strings['Do you really want to delete this photo?'] = 'Czy na pewno chcesz usunąć to zdjęcie ?';
$a->strings['Delete Photo'] = 'Usuń zdjęcie';
$a->strings['View photo'] = 'Zobacz zdjęcie';
$a->strings['Edit photo'] = 'Edytuj zdjęcie';
$a->strings['Delete photo'] = 'Usuń zdjęcie';
$a->strings['Use as profile photo'] = 'Ustaw jako zdjęcie profilowe';
$a->strings['Private Photo'] = 'Prywatne zdjęcie';
$a->strings['View Full Size'] = 'Zobacz w pełnym rozmiarze';
$a->strings['Tags: '] = 'Tagi: ';
$a->strings['[Select tags to remove]'] = '[Wybierz tagi do usunięcia]';
$a->strings['New album name'] = 'Nazwa nowego albumu';
$a->strings['Caption'] = 'Zawartość';
$a->strings['Add a Tag'] = 'Dodaj tag';
$a->strings['Example: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping'] = 'Przykładowo: @bob, @Barbara_Jensen, @jim@example.com, #California, #camping';
$a->strings['Do not rotate'] = 'Nie obracaj';
$a->strings['Rotate CW (right)'] = 'Obróć CW (w prawo)';
$a->strings['Rotate CCW (left)'] = 'Obróć CCW (w lewo)';
$a->strings['I like this (toggle)'] = 'Lubię to (zmień)';
$a->strings['I don\'t like this (toggle)'] = 'Nie lubię tego (zmień)';
$a->strings['This is you'] = 'To jesteś ty';
$a->strings['Comment'] = 'Komentarz';
$a->strings['Map'] = 'Mapa';
$a->strings['You must be logged in to use addons. '] = 'Musisz być zalogowany(-a), aby korzystać z dodatków. ';
$a->strings['Delete this item?'] = 'Usunąć ten element?';
$a->strings['toggle mobile'] = 'przełącz na mobilny';
$a->strings['Login failed.'] = 'Logowanie nieudane.';
$a->strings['We encountered a problem while logging in with the OpenID you provided. Please check the correct spelling of the ID.'] = 'Napotkaliśmy problem podczas logowania z podanym przez nas identyfikatorem OpenID. Sprawdź poprawną pisownię identyfikatora.';
$a->strings['The error message was:'] = 'Komunikat o błędzie:';
$a->strings['Login failed. Please check your credentials.'] = 'Logowanie nie powiodło się. Sprawdź swoje dane uwierzytelniające.';
$a->strings['Welcome %s'] = 'Witaj %s';
$a->strings['Please upload a profile photo.'] = 'Proszę dodać zdjęcie profilowe.';
$a->strings['Method not allowed for this module. Allowed method(s): %s'] = 'Metoda niedozwolona dla tego modułu. Dozwolona metoda(y): %s';
$a->strings['Page not found.'] = 'Strona nie znaleziona.';
$a->strings['There are no tables on MyISAM or InnoDB with the Antelope file format.'] = 'Brak tabel w MyISAM lub InnoDB z formatem pliku Antelope.';
$a->strings['
Error %d occurred during database update:
%s
'] = '
Wystąpił błąd %d podczas aktualizacji bazy danych:
%s
';
$a->strings['Errors encountered performing database changes: '] = 'Błędy napotkane podczas dokonywania zmian w bazie danych: ';
$a->strings['%s: Database update'] = '%s: Aktualizacja bazy danych';
$a->strings['%s: updating %s table.'] = '%s: aktualizowanie %s tabeli.';
$a->strings['Update %s failed. See error logs.'] = 'Aktualizacja %s nie powiodła się. Zobacz dziennik błędów.';
$a->strings['
				The friendica developers released update %s recently,
				but when I tried to install it, something went terribly wrong.
				This needs to be fixed soon and I can\'t do it alone. Please contact a
				friendica developer if you can not help me on your own. My database might be invalid.'] = '
				Deweloperzy friendica wydali niedawno aktualizację %s,
				ale podczas próby instalacji, coś poszło nie tak.
				Zostanie to naprawione wkrótce i nie mogę tego zrobić sam. Proszę skontaktować się z 
				programistami friendica, jeśli nie możesz mi pomóc na własną rękę. Moja baza danych może być nieprawidłowa.';
$a->strings['The error message is
[pre]%s[/pre]'] = 'Komunikat o błędzie jest 
[pre]%s[/ pre]';
$a->strings['[Friendica Notify] Database update'] = '[Powiadomienie Friendica] Aktualizacja bazy danych';
$a->strings['
					The friendica database was successfully updated from %s to %s.'] = '
					Baza danych Friendica została pomyślnie zaktualizowana z %s do %s.';
$a->strings['Followers'] = 'Zwolenników';
$a->strings['Mutuals'] = 'Wzajemne';
$a->strings['Post to Email'] = 'Prześlij e-mailem';
$a->strings['Public'] = 'Publiczny';
$a->strings['This content will be shown to all your followers and can be seen in the community pages and by anyone with its link.'] = 'Ta treść zostanie wyświetlona wszystkim Twoim obserwatorom i będzie widoczna na stronach społeczności oraz przez każdego z jej linkiem.';
$a->strings['Limited/Private'] = 'Ograniczony/Prywatny';
$a->strings['This content will be shown only to the people in the first box, to the exception of the people mentioned in the second box. It won\'t appear anywhere public.'] = 'Ta zawartość będzie wyświetlana tylko osobom w pierwszym polu, z wyjątkiem osób wymienionych w drugim polu. Nie pojawi się nigdzie publicznie.';
$a->strings['Show to:'] = 'Pokaż na:';
$a->strings['Except to:'] = 'Z wyjątkiem:';
$a->strings['Connectors'] = 'Wtyczki';
$a->strings['The database configuration file "config/local.config.php" could not be written. Please use the enclosed text to create a configuration file in your web server root.'] = 'Plik konfiguracyjny bazy danych "config/local.config.php" nie mógł zostać zapisany. Proszę użyć załączonego tekstu, aby utworzyć plik konfiguracyjny w katalogu głównym serwera.';
$a->strings['You may need to import the file "database.sql" manually using phpmyadmin or mysql.'] = 'Może być konieczne zaimportowanie pliku "database.sql" ręcznie, używając phpmyadmin lub mysql.';
$a->strings['Please see the file "INSTALL.txt".'] = 'Proszę przejrzeć plik "INSTALL.txt".';
$a->strings['Could not find a command line version of PHP in the web server PATH.'] = 'Nie można znaleźć PHP dla wiersza poleceń w PATH serwera.';
$a->strings['PHP executable path'] = 'Ścieżka wykonywalna PHP';
$a->strings['Enter full path to php executable. You can leave this blank to continue the installation.'] = 'Wprowadź pełną ścieżkę do pliku wykonywalnego php. Możesz pozostawić to pole puste, aby kontynuować instalację.';
$a->strings['Command line PHP'] = 'Linia komend PHP';
$a->strings['PHP executable is not the php cli binary (could be cgi-fgci version)'] = 'Plik wykonywalny PHP nie jest php cli binarny (może być wersją cgi-fgci)';
$a->strings['Found PHP version: '] = 'Znaleziona wersja PHP: ';
$a->strings['PHP cli binary'] = 'PHP cli binarny';
$a->strings['The command line version of PHP on your system does not have "register_argc_argv" enabled.'] = 'Wersja linii poleceń PHP w twoim systemie nie ma aktywowanego "register_argc_argv".';
$a->strings['This is required for message delivery to work.'] = 'Jest wymagane, aby dostarczanie wiadomości działało.';
$a->strings['PHP register_argc_argv'] = 'PHP register_argc_argv';
$a->strings['Error: the "openssl_pkey_new" function on this system is not able to generate encryption keys'] = 'Błąd: funkcja "openssl_pkey_new" w tym systemie nie jest w stanie wygenerować kluczy szyfrujących';
$a->strings['If running under Windows, please see "http://www.php.net/manual/en/openssl.installation.php".'] = 'Jeśli korzystasz z Windowsa, proszę odwiedzić "http://www.php.net/manual/en/openssl.installation.php".';
$a->strings['Generate encryption keys'] = 'Generuj klucz kodowania';
$a->strings['Error: Apache webserver mod-rewrite module is required but not installed.'] = 'Błąd: moduł Apache webserver mod-rewrite jest potrzebny, jednakże nie jest zainstalowany.';
$a->strings['Apache mod_rewrite module'] = 'Moduł Apache mod_rewrite';
$a->strings['Error: PDO or MySQLi PHP module required but not installed.'] = 'Błąd: Wymagany moduł PDO lub MySQLi PHP, ale nie zainstalowany.';
$a->strings['Error: The MySQL driver for PDO is not installed.'] = 'Błąd: Sterownik MySQL dla PDO nie jest zainstalowany.';
$a->strings['PDO or MySQLi PHP module'] = 'Moduł PDO lub MySQLi PHP';
$a->strings['Error, XML PHP module required but not installed.'] = 'Błąd, wymagany moduł XML PHP, ale nie zainstalowany.';
$a->strings['XML PHP module'] = 'Moduł XML PHP';
$a->strings['libCurl PHP module'] = 'Moduł PHP libCurl';
$a->strings['Error: libCURL PHP module required but not installed.'] = 'Błąd: libCURL PHP wymagany moduł, lecz nie zainstalowany.';
$a->strings['GD graphics PHP module'] = 'Moduł PHP-GD';
$a->strings['Error: GD graphics PHP module with JPEG support required but not installed.'] = 'Błąd: moduł graficzny GD z PHP potrzebuje wsparcia technicznego JPEG, jednakże on nie jest zainstalowany.';
$a->strings['OpenSSL PHP module'] = 'Moduł PHP OpenSSL';
$a->strings['Error: openssl PHP module required but not installed.'] = 'Błąd: openssl PHP wymagany moduł, lecz nie zainstalowany.';
$a->strings['mb_string PHP module'] = 'Moduł PHP mb_string';
$a->strings['Error: mb_string PHP module required but not installed.'] = 'Błąd: moduł PHP mb_string jest wymagany ,ale nie jest zainstalowany.';
$a->strings['iconv PHP module'] = 'Moduł PHP iconv';
$a->strings['Error: iconv PHP module required but not installed.'] = 'Błąd: wymagany moduł PHP iconv, ale nie zainstalowany.';
$a->strings['POSIX PHP module'] = 'Moduł POSIX PHP';
$a->strings['Error: POSIX PHP module required but not installed.'] = 'Błąd: wymagany moduł POSIX PHP, ale nie zainstalowany.';
$a->strings['JSON PHP module'] = 'Moduł PHP JSON';
$a->strings['Error: JSON PHP module required but not installed.'] = 'Błąd: wymagany jest moduł JSON PHP, ale nie jest zainstalowany.';
$a->strings['File Information PHP module'] = 'Informacje o pliku Moduł PHP';
$a->strings['Error: File Information PHP module required but not installed.'] = 'Błąd: wymagane informacje o pliku Moduł PHP, ale nie jest zainstalowany.';
$a->strings['The web installer needs to be able to create a file called "local.config.php" in the "config" folder of your web server and it is unable to do so.'] = 'Instalator internetowy musi mieć możliwość utworzenia pliku o nazwie "local.config.php" w folderze "config" serwera WWW i nie może tego zrobić.';
$a->strings['This is most often a permission setting, as the web server may not be able to write files in your folder - even if you can.'] = 'Jest to najczęściej ustawienie uprawnień, ponieważ serwer sieciowy może nie być w stanie zapisywać plików w folderze - nawet jeśli możesz.';
$a->strings['At the end of this procedure, we will give you a text to save in a file named local.config.php in your Friendica "config" folder.'] = 'Pod koniec tej procedury otrzymasz tekst do zapisania w pliku o nazwie local.config.php w folderze "config" Friendica.';
$a->strings['You can alternatively skip this procedure and perform a manual installation. Please see the file "INSTALL.txt" for instructions.'] = 'Alternatywnie można pominąć tę procedurę i wykonać ręczną instalację. Proszę zobaczyć plik \'INSTALL.txt\' z instrukcjami.';
$a->strings['config/local.config.php is writable'] = 'config/local.config.php jest zapisywalny';
$a->strings['Friendica uses the Smarty3 template engine to render its web views. Smarty3 compiles templates to PHP to speed up rendering.'] = 'Friendica używa silnika szablonów Smarty3 do renderowania swoich widoków. Smarty3 kompiluje szablony do PHP, aby przyspieszyć renderowanie.';
$a->strings['In order to store these compiled templates, the web server needs to have write access to the directory view/smarty3/ under the Friendica top level folder.'] = 'Aby przechowywać te skompilowane szablony, serwer WWW musi mieć dostęp do zapisu do katalogu view/smarty3/ w folderze najwyższego poziomu Friendica.';
$a->strings['Please ensure that the user that your web server runs as (e.g. www-data) has write access to this folder.'] = 'Upewnij się, że użytkownik, na którym działa serwer WWW (np. www-data), ma prawo do zapisu do tego folderu.';
$a->strings['Note: as a security measure, you should give the web server write access to view/smarty3/ only--not the template files (.tpl) that it contains.'] = 'Uwaga: jako środek bezpieczeństwa, powinieneś dać serwerowi dostęp do zapisu view/smarty3/ jedynie - nie do plików szablonów (.tpl), które zawiera.';
$a->strings['view/smarty3 is writable'] = 'view/smarty3 jest zapisywalny';
$a->strings['Url rewrite in .htaccess is not working. Make sure you copied .htaccess-dist to .htaccess.'] = 'Adres URL zapisany w .htaccess nie działa. Upewnij się, że skopiowano .htaccess-dist do .htaccess.';
$a->strings['Error message from Curl when fetching'] = 'Komunikat o błędzie z Curl podczas pobierania';
$a->strings['Url rewrite is working'] = 'Działający adres URL';
$a->strings['ImageMagick PHP extension is not installed'] = 'Rozszerzenie PHP ImageMagick nie jest zainstalowane';
$a->strings['ImageMagick PHP extension is installed'] = 'Rozszerzenie PHP ImageMagick jest zainstalowane';
$a->strings['ImageMagick supports GIF'] = 'ImageMagick obsługuje GIF';
$a->strings['Database already in use.'] = 'Baza danych jest już w użyciu.';
$a->strings['Could not connect to database.'] = 'Nie można połączyć się z bazą danych.';
$a->strings['Monday'] = 'Poniedziałek';
$a->strings['Tuesday'] = 'Wtorek';
$a->strings['Wednesday'] = 'Środa';
$a->strings['Thursday'] = 'Czwartek';
$a->strings['Friday'] = 'Piątek';
$a->strings['Saturday'] = 'Sobota';
$a->strings['Sunday'] = 'Niedziela';
$a->strings['January'] = 'Styczeń';
$a->strings['February'] = 'Luty';
$a->strings['March'] = 'Marzec';
$a->strings['April'] = 'Kwiecień';
$a->strings['May'] = 'Maj';
$a->strings['June'] = 'Czerwiec';
$a->strings['July'] = 'Lipiec';
$a->strings['August'] = 'Sierpień';
$a->strings['September'] = 'Wrzesień';
$a->strings['October'] = 'Październik';
$a->strings['November'] = 'Listopad';
$a->strings['December'] = 'Grudzień';
$a->strings['Mon'] = 'Pon';
$a->strings['Tue'] = 'Wt';
$a->strings['Wed'] = 'Śr';
$a->strings['Thu'] = 'Czw';
$a->strings['Fri'] = 'Pt';
$a->strings['Sat'] = 'Sob';
$a->strings['Sun'] = 'Niedz';
$a->strings['Jan'] = 'Sty';
$a->strings['Feb'] = 'Lut';
$a->strings['Mar'] = 'Mar';
$a->strings['Apr'] = 'Kwi';
$a->strings['Jun'] = 'Cze';
$a->strings['Jul'] = 'Lip';
$a->strings['Aug'] = 'Sie';
$a->strings['Sep'] = 'Wrz';
$a->strings['Oct'] = 'Paź';
$a->strings['Nov'] = 'Lis';
$a->strings['Dec'] = 'Gru';
$a->strings['poke'] = 'zaczep';
$a->strings['poked'] = 'zaczepił Cię';
$a->strings['ping'] = 'ping';
$a->strings['pinged'] = 'napięcia';
$a->strings['prod'] = 'zaczep';
$a->strings['prodded'] = 'zaczepiać';
$a->strings['slap'] = 'klask';
$a->strings['slapped'] = 'spoliczkowany';
$a->strings['finger'] = 'wskaż';
$a->strings['fingered'] = 'dotknięty';
$a->strings['rebuff'] = 'odrzuć';
$a->strings['rebuffed'] = 'odrzucony';
$a->strings['Error decoding account file'] = 'Błąd podczas odczytu pliku konta';
$a->strings['Error! No version data in file! This is not a Friendica account file?'] = 'Błąd! Brak danych wersji w pliku! To nie jest plik konta Friendica?';
$a->strings['User \'%s\' already exists on this server!'] = 'Użytkownik \'%s\' już istnieje na tym serwerze!';
$a->strings['User creation error'] = 'Błąd tworzenia użytkownika';
$a->strings['%d contact not imported'] = [
	0 => 'Nie zaimportowano %d kontaktu',
	1 => 'Nie zaimportowano %d kontaktów',
	2 => 'Nie zaimportowano %d kontaktów',
	3 => '%d kontakty nie zostały zaimportowane ',
];
$a->strings['User profile creation error'] = 'Błąd tworzenia profilu użytkownika';
$a->strings['Done. You can now login with your username and password'] = 'Gotowe. Możesz teraz zalogować się z użyciem nazwy użytkownika i hasła';
$a->strings['Legacy module file not found: %s'] = 'Nie znaleziono pliku modułu: %s';
$a->strings['(no subject)'] = '(bez tematu)';
$a->strings['This message was sent to you by %s, a member of the Friendica social network.'] = 'Wiadomość została wysłana do ciebie od %s, członka sieci społecznościowej Friendica.';
$a->strings['You may visit them online at %s'] = 'Możesz odwiedzić ich online pod adresem %s';
$a->strings['Please contact the sender by replying to this post if you do not wish to receive these messages.'] = 'Skontaktuj się z nadawcą odpowiadając na ten post jeśli nie chcesz otrzymywać tych wiadomości.';
$a->strings['%s posted an update.'] = '%s zaktualizował wpis.';
$a->strings['This entry was edited'] = 'Ten wpis został zedytowany';
$a->strings['Private Message'] = 'Wiadomość prywatna';
$a->strings['Delete locally'] = 'Usuń lokalnie';
$a->strings['Delete globally'] = 'Usuń globalnie';
$a->strings['Remove locally'] = 'Usuń lokalnie';
$a->strings['save to folder'] = 'zapisz w folderze';
$a->strings['I will attend'] = 'Będę uczestniczyć';
$a->strings['I will not attend'] = 'Nie będę uczestniczyć';
$a->strings['I might attend'] = 'Mogę wziąć udział';
$a->strings['ignore thread'] = 'zignoruj ​​wątek';
$a->strings['unignore thread'] = 'odignoruj ​​wątek';
$a->strings['toggle ignore status'] = 'przełącz status ignorowania';
$a->strings['pin'] = 'przypnij';
$a->strings['unpin'] = 'odepnij';
$a->strings['pinned'] = 'Przypięte';
$a->strings['add star'] = 'dodaj gwiazdkę';
$a->strings['remove star'] = 'anuluj gwiazdkę';
$a->strings['toggle star status'] = 'włącz status gwiazdy';
$a->strings['starred'] = 'gwiazdką';
$a->strings['add tag'] = 'dodaj tag';
$a->strings['like'] = 'lubię to';
$a->strings['dislike'] = 'nie lubię tego';
$a->strings['Share this'] = 'Udostępnij to';
$a->strings['share'] = 'udostępnij';
$a->strings['to'] = 'do';
$a->strings['via'] = 'przez';
$a->strings['Wall-to-Wall'] = 'Wall-to-Wall';
$a->strings['via Wall-To-Wall:'] = 'via Wall-To-Wall:';
$a->strings['Reply to %s'] = 'Odpowiedź %s';
$a->strings['More'] = 'Więcej';
$a->strings['Notifier task is pending'] = 'Zadanie Notifier jest w toku';
$a->strings['Delivery to remote servers is pending'] = 'Trwa przesyłanie do serwerów zdalnych';
$a->strings['Delivery to remote servers is underway'] = 'Trwa dostawa do serwerów zdalnych';
$a->strings['Delivery to remote servers is mostly done'] = 'Dostawa do zdalnych serwerów jest w większości wykonywana';
$a->strings['Delivery to remote servers is done'] = 'Trwa dostarczanie do zdalnych serwerów';
$a->strings['%d comment'] = [
	0 => '%d komentarz',
	1 => '%d komentarze',
	2 => '%d komentarzy',
	3 => '%d komentarzy',
];
$a->strings['Show more'] = 'Pokaż więcej';
$a->strings['Show fewer'] = 'Pokaż mniej';
$a->strings['comment'] = [
	0 => 'komentarz',
	1 => 'komentarze',
	2 => 'komentarze',
	3 => 'komentarz',
];
$a->strings['Could not find any unarchived contact entry for this URL (%s)'] = 'Nie można znaleźć żadnego wpisu kontaktu zarchiwizowanego dla tego adresu URL (%s)';
$a->strings['The contact entries have been archived'] = 'Wpisy kontaktów zostały zarchiwizowane';
$a->strings['Could not find any contact entry for this URL (%s)'] = 'Nie można znaleźć żadnego kontaktu dla tego adresu URL (%s)';
$a->strings['The contact has been blocked from the node'] = 'Kontakt został zablokowany w węźle';
$a->strings['Enter new password: '] = 'Wprowadź nowe hasło: ';
$a->strings['Enter user name: '] = 'Wpisz nazwę użytkownika:';
$a->strings['Enter user nickname: '] = 'Wpisz nazwę użytkownika:';
$a->strings['Enter user email address: '] = 'Wpisz adres e-mail użytkownika:';
$a->strings['Enter a language (optional): '] = 'Wpisz język (opcjonalnie):';
$a->strings['Type "yes" to delete %s'] = 'Wpisz „tak”, aby usunąć %s';
$a->strings['Post update version number has been set to %s.'] = 'Numer wersji aktualizacji posta został ustawiony na %s.';
$a->strings['Check for pending update actions.'] = 'Sprawdź oczekujące działania aktualizacji.';
$a->strings['Done.'] = 'Gotowe.';
$a->strings['Execute pending post updates.'] = 'Wykonaj oczekujące aktualizacje postów.';
$a->strings['All pending post updates are done.'] = 'Wszystkie oczekujące aktualizacje postów są gotowe.';
$a->strings['Hometown:'] = 'Miasto rodzinne:';
$a->strings['Marital Status:'] = 'Stan cywilny:';
$a->strings['With:'] = 'Z:';
$a->strings['Since:'] = 'Od:';
$a->strings['Sexual Preference:'] = 'Preferencje seksualne:';
$a->strings['Political Views:'] = 'Poglądy polityczne:';
$a->strings['Religious Views:'] = 'Poglądy religijne:';
$a->strings['Likes:'] = 'Lubię to:';
$a->strings['Dislikes:'] = 'Nie lubię tego:';
$a->strings['Title/Description:'] = 'Tytuł/Opis:';
$a->strings['Summary'] = 'Podsumowanie';
$a->strings['Musical interests'] = 'Muzyka';
$a->strings['Books, literature'] = 'Literatura';
$a->strings['Television'] = 'Telewizja';
$a->strings['Film/dance/culture/entertainment'] = 'Film/taniec/kultura/rozrywka';
$a->strings['Hobbies/Interests'] = 'Zainteresowania';
$a->strings['Love/romance'] = 'Miłość/romans';
$a->strings['Work/employment'] = 'Praca/zatrudnienie';
$a->strings['School/education'] = 'Szkoła/edukacja';
$a->strings['Contact information and Social Networks'] = 'Dane kontaktowe i Sieci społecznościowe';
$a->strings['No system theme config value set.'] = 'Nie ustawiono wartości konfiguracyjnej zestawu tematycznego.';
$a->strings['Friend Suggestion'] = 'Propozycja znajomych';
$a->strings['Friend/Connect Request'] = 'Prośba o dodanie do przyjaciół/powiązanych';
$a->strings['New Follower'] = 'Nowy obserwujący';
$a->strings['%s created a new post'] = '%s dodał nowy wpis';
$a->strings['%s commented on %s\'s post'] = '%s skomentował wpis %s';
$a->strings['%s liked %s\'s post'] = '%s polubił wpis %s';
$a->strings['%s disliked %s\'s post'] = '%s nie lubi tych %s postów';
$a->strings['%s is attending %s\'s event'] = '%s uczestniczy w wydarzeniu %s';
$a->strings['%s is not attending %s\'s event'] = '%s nie uczestniczy w wydarzeniu %s';
$a->strings['%s is now friends with %s'] = '%s jest teraz znajomym %s';
$a->strings['Network Notifications'] = 'Powiadomienia sieciowe';
$a->strings['System Notifications'] = 'Powiadomienia systemowe';
$a->strings['Personal Notifications'] = 'Prywatne powiadomienia';
$a->strings['Home Notifications'] = 'Powiadomienia domowe';
$a->strings['No more %s notifications.'] = 'Brak kolejnych %s powiadomień.';
$a->strings['Show unread'] = 'Pokaż nieprzeczytane';
$a->strings['Show all'] = 'Pokaż wszystko';
$a->strings['Notifications'] = 'Powiadomienia';
$a->strings['Show Ignored Requests'] = 'Pokaż ignorowane żądania';
$a->strings['Hide Ignored Requests'] = 'Ukryj zignorowane prośby';
$a->strings['Notification type:'] = 'Typ powiadomienia:';
$a->strings['Suggested by:'] = 'Sugerowany przez:';
$a->strings['Hide this contact from others'] = 'Ukryj ten kontakt przed innymi';
$a->strings['Approve'] = 'Zatwierdź';
$a->strings['Claims to be known to you: '] = 'Twierdzi, że go/ją znasz: ';
$a->strings['Shall your connection be bidirectional or not?'] = 'Czy twoje połączenie ma być dwukierunkowe, czy nie?';
$a->strings['Accepting %s as a friend allows %s to subscribe to your posts, and you will also receive updates from them in your news feed.'] = 'Przyjmowanie %s jako znajomego pozwala %s zasubskrybować twoje posty, a także otrzymywać od nich aktualizacje w swoim kanale wiadomości.';
$a->strings['Accepting %s as a subscriber allows them to subscribe to your posts, but you will not receive updates from them in your news feed.'] = 'Zaakceptowanie %s jako subskrybenta umożliwia im subskrybowanie Twoich postów, ale nie otrzymasz od nich aktualizacji w swoim kanale wiadomości.';
$a->strings['Friend'] = 'Znajomy';
$a->strings['Subscriber'] = 'Subskrybent';
$a->strings['About:'] = 'O:';
$a->strings['Network:'] = 'Sieć:';
$a->strings['No introductions.'] = 'Brak dostępu.';
$a->strings['Logged out.'] = 'Wylogowano.';
$a->strings['Invalid code, please retry.'] = 'Nieprawidłowy kod, spróbuj ponownie.';
$a->strings['Two-factor authentication'] = 'Uwierzytelnianie dwuskładnikowe';
$a->strings['<p>Open the two-factor authentication app on your device to get an authentication code and verify your identity.</p>'] = '<p>Otwórz aplikację uwierzytelniania dwuskładnikowego na swoim urządzeniu, aby uzyskać kod uwierzytelniający i zweryfikować swoją tożsamość.</p>';
$a->strings['Don’t have your phone? <a href="%s">Enter a two-factor recovery code</a>'] = 'Nie masz telefonu? <a href="%s">Wprowadzić dwuetapowy kod przywracania </a>';
$a->strings['Please enter a code from your authentication app'] = 'Wprowadź kod z aplikacji uwierzytelniającej';
$a->strings['Verify code and complete login'] = 'Zweryfikuj kod i zakończ logowanie';
$a->strings['Remaining recovery codes: %d'] = 'Pozostałe kody odzyskiwania: %d';
$a->strings['Two-factor recovery'] = 'Odzyskiwanie dwuczynnikowe';
$a->strings['<p>You can enter one of your one-time recovery codes in case you lost access to your mobile device.</p>'] = '<p>Możesz wprowadzić jeden ze swoich jednorazowych kodów odzyskiwania w przypadku utraty dostępu do urządzenia mobilnego.</p>';
$a->strings['Please enter a recovery code'] = 'Wprowadź kod odzyskiwania';
$a->strings['Submit recovery code and complete login'] = 'Prześlij kod odzyskiwania i pełne logowanie';
$a->strings['Create a New Account'] = 'Załóż nowe konto';
$a->strings['Register'] = 'Zarejestruj';
$a->strings['Please enter your username and password to add the OpenID to your existing account.'] = 'Wprowadź nazwę użytkownika i hasło, aby dodać OpenID do istniejącego konta.';
$a->strings['Or login using OpenID: '] = 'Lub zaloguj się za pośrednictwem OpenID: ';
$a->strings['Logout'] = 'Wyloguj';
$a->strings['Login'] = 'Zaloguj się';
$a->strings['Password: '] = 'Hasło: ';
$a->strings['Remember me'] = 'Zapamiętaj mnie';
$a->strings['Forgot your password?'] = 'Zapomniałeś swojego hasła?';
$a->strings['Website Terms of Service'] = 'Warunki korzystania z witryny';
$a->strings['terms of service'] = 'warunki użytkowania';
$a->strings['Website Privacy Policy'] = 'Polityka Prywatności Witryny';
$a->strings['privacy policy'] = 'polityka prywatności';
$a->strings['Account not found. Please login to your existing account to add the OpenID to it.'] = 'Konto nie znalezione. Zaloguj się do swojego istniejącego konta, aby dodać do niego OpenID.';
$a->strings['Account not found. Please register a new account or login to your existing account to add the OpenID to it.'] = 'Konto nie znalezione. Zarejestruj nowe konto lub zaloguj się na istniejące konto, aby dodać do niego OpenID.';
$a->strings['l F d, Y \@ g:i A'] = 'l F d, Y \@ g:i A';
$a->strings['Time Conversion'] = 'Zmiana czasu';
$a->strings['Friendica provides this service for sharing events with other networks and friends in unknown timezones.'] = 'Friendica udostępnia tę usługę do udostępniania wydarzeń innym sieciom i znajomym w nieznanych strefach czasowych.';
$a->strings['UTC time: %s'] = 'Czas UTC %s';
$a->strings['Current timezone: %s'] = 'Obecna strefa czasowa: %s';
$a->strings['Converted localtime: %s'] = 'Zmień strefę czasową: %s';
$a->strings['Please select your timezone:'] = 'Wybierz swoją strefę czasową:';
$a->strings['Source input'] = 'Źródło wejściowe';
$a->strings['BBCode::toPlaintext'] = 'BBCode::na prosty tekst';
$a->strings['BBCode::convert (raw HTML)'] = 'BBCode:: konwersjia (raw HTML)';
$a->strings['BBCode::convert'] = 'BBCode::przekształć';
$a->strings['BBCode::convert => HTML::toBBCode'] = 'BBCode::przekształć => HTML::toBBCode';
$a->strings['BBCode::toMarkdown'] = 'BBCode::toMarkdown';
$a->strings['BBCode::toMarkdown => Markdown::convert'] = 'BBCode::toMarkdown => Markdown::przekształć';
$a->strings['BBCode::toMarkdown => Markdown::toBBCode'] = 'BBCode::toMarkdown => Markdown::toBBCode';
$a->strings['BBCode::toMarkdown =>  Markdown::convert => HTML::toBBCode'] = 'BBCode::toMarkdown => Markdown::przekształć => HTML::toBBCode';
$a->strings['Item Body'] = 'Element Body';
$a->strings['Item Tags'] = 'Element Tagów';
$a->strings['Source input (Diaspora format)'] = 'Źródło wejściowe (format Diaspora)';
$a->strings['Markdown::convert (raw HTML)'] = 'Markdown::convert (raw HTML)';
$a->strings['Markdown::convert'] = 'Markdown::convert';
$a->strings['Markdown::toBBCode'] = 'Markdown::toBBCode';
$a->strings['Raw HTML input'] = 'Surowe wejście HTML';
$a->strings['HTML Input'] = 'Wejście HTML';
$a->strings['HTML::toBBCode'] = 'HTML::toBBCode';
$a->strings['HTML::toBBCode => BBCode::convert'] = 'HTML::toBBCode => BBCode::convert';
$a->strings['HTML::toBBCode => BBCode::convert (raw HTML)'] = 'HTML::toBBCode => BBCode::convert (raw HTML)';
$a->strings['HTML::toMarkdown'] = 'HTML::toMarkdown';
$a->strings['HTML::toPlaintext'] = 'HTML::toPlaintext';
$a->strings['Source text'] = 'Tekst źródłowy';
$a->strings['BBCode'] = 'BBCode';
$a->strings['Diaspora'] = 'Diaspora';
$a->strings['Markdown'] = 'Markdown';
$a->strings['HTML'] = 'HTML';
$a->strings['Only logged in users are permitted to perform a probing.'] = 'Tylko zalogowani użytkownicy mogą wykonywać sondowanie.';
$a->strings['You must be logged in to use this module'] = 'Musisz być zalogowany, aby korzystać z tego modułu';
$a->strings['Source URL'] = 'Źródłowy adres URL';
$a->strings['Lookup address'] = 'Wyszukaj adres';
$a->strings['%s\'s timeline'] = 'oś czasu %s';
$a->strings['%s\'s posts'] = 'wpisy %s';
$a->strings['%s\'s comments'] = 'komentarze %s';
$a->strings['No contacts.'] = 'Brak kontaktów.';
$a->strings['All contacts'] = 'Wszystkie kontakty';
$a->strings['Following'] = 'Kolejny';
$a->strings['Mutual friends'] = 'Wspólni znajomi';
$a->strings['Member since:'] = 'Członek od:';
$a->strings['j F, Y'] = 'd M, R';
$a->strings['j F'] = 'd M';
$a->strings['Birthday:'] = 'Urodziny:';
$a->strings['Age: '] = 'Wiek: ';
$a->strings['XMPP:'] = 'XMPP:';
$a->strings['Homepage:'] = 'Strona główna:';
$a->strings['Forums:'] = 'Fora:';
$a->strings['View profile as:'] = 'Wyświetl profil jako:';
$a->strings['Edit profile'] = 'Edytuj profil';
$a->strings['Only parent users can create additional accounts.'] = 'Tylko użytkownicy nadrzędni mogą tworzyć dodatkowe konta.';
$a->strings['You may (optionally) fill in this form via OpenID by supplying your OpenID and clicking "Register".'] = 'Możesz (opcjonalnie) wypełnić ten formularz za pośrednictwem OpenID, podając swój OpenID i klikając "Register".';
$a->strings['If you are not familiar with OpenID, please leave that field blank and fill in the rest of the items.'] = 'Jeśli nie jesteś zaznajomiony z OpenID, zostaw to pole puste i uzupełnij resztę elementów.';
$a->strings['Your OpenID (optional): '] = 'Twój OpenID (opcjonalnie): ';
$a->strings['Include your profile in member directory?'] = 'Czy dołączyć twój profil do katalogu członków?';
$a->strings['Note for the admin'] = 'Uwaga dla administratora';
$a->strings['Leave a message for the admin, why you want to join this node'] = 'Pozostaw wiadomość dla administratora, dlaczego chcesz dołączyć do tego węzła';
$a->strings['Membership on this site is by invitation only.'] = 'Członkostwo na tej stronie możliwe tylko dzięki zaproszeniu.';
$a->strings['Your invitation code: '] = 'Twój kod zaproszenia: ';
$a->strings['Registration'] = 'Rejestracja';
$a->strings['Your Full Name (e.g. Joe Smith, real or real-looking): '] = 'Twoje imię i nazwisko (np. Jan Kowalski, prawdziwe lub wyglądające na prawdziwe): ';
$a->strings['Your Email Address: (Initial information will be send there, so this has to be an existing address.)'] = 'Twój adres e-mail: (Informacje początkowe zostaną wysłane tam, więc musi to być istniejący adres).';
$a->strings['Please repeat your e-mail address:'] = 'Powtórz swój adres e-mail:';
$a->strings['Leave empty for an auto generated password.'] = 'Pozostaw puste dla wygenerowanego automatycznie hasła.';
$a->strings['Choose a profile nickname. This must begin with a text character. Your profile address on this site will then be "<strong>nickname@%s</strong>".'] = 'Wybierz pseudonim profilu. Musi zaczynać się od znaku tekstowego. Twój adres profilu na tej stronie to "<strong>nickname@%s</strong>".';
$a->strings['Choose a nickname: '] = 'Wybierz pseudonim: ';
$a->strings['Import your profile to this friendica instance'] = 'Zaimportuj swój profil do tej instancji friendica';
$a->strings['Terms of Service'] = 'Warunki usługi';
$a->strings['Note: This node explicitly contains adult content'] = 'Uwaga: Ten węzeł jawnie zawiera treści dla dorosłych';
$a->strings['Parent Password:'] = 'Hasło nadrzędne:';
$a->strings['Please enter the password of the parent account to legitimize your request.'] = 'Wprowadź hasło konta nadrzędnego, aby legalizować swoje żądanie.';
$a->strings['Password doesn\'t match.'] = 'Hasło nie jest zgodne.';
$a->strings['Please enter your password.'] = 'Wprowadź hasło.';
$a->strings['You have entered too much information.'] = 'Podałeś za dużo informacji.';
$a->strings['Please enter the identical mail address in the second field.'] = 'Wpisz identyczny adres e-mail w drugim polu.';
$a->strings['The additional account was created.'] = 'Dodatkowe konto zostało utworzone.';
$a->strings['Registration successful. Please check your email for further instructions.'] = 'Rejestracja zakończona pomyślnie. Dalsze instrukcje zostały wysłane na twojego e-maila.';
$a->strings['Failed to send email message. Here your accout details:<br> login: %s<br> password: %s<br><br>You can change your password after login.'] = 'Nie udało się wysłać wiadomości e-mail. Tutaj szczegóły twojego konta:<br> login: %s<br>hasło: %s<br><br>Możesz zmienić swoje hasło po zalogowaniu.';
$a->strings['Registration successful.'] = 'Rejestracja udana.';
$a->strings['Your registration can not be processed.'] = 'Nie można przetworzyć Twojej rejestracji.';
$a->strings['You have to leave a request note for the admin.'] = 'Musisz zostawić notatkę z prośbą do administratora.';
$a->strings['Your registration is pending approval by the site owner.'] = 'Twoja rejestracja oczekuje na zaakceptowanie przez właściciela witryny.';
$a->strings['Bad Request'] = 'Nieprawidłowe żądanie';
$a->strings['Unauthorized'] = 'Nieautoryzowane';
$a->strings['Forbidden'] = 'Zabronione';
$a->strings['Not Found'] = 'Nie znaleziono';
$a->strings['Internal Server Error'] = 'Wewnętrzny błąd serwera';
$a->strings['Service Unavailable'] = 'Usługa Niedostępna ';
$a->strings['The server cannot or will not process the request due to an apparent client error.'] = 'Serwer nie może lub nie będzie przetwarzać żądania z powodu widocznego błędu klienta.';
$a->strings['Authentication is required and has failed or has not yet been provided.'] = 'Uwierzytelnienie jest wymagane i nie powiodło się lub nie zostało jeszcze dostarczone.';
$a->strings['The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account.'] = 'Żądanie było ważne, ale serwer odmawia działania. Użytkownik może nie mieć wymaganych uprawnień do zasobu lub może potrzebować konta.';
$a->strings['The requested resource could not be found but may be available in the future.'] = 'Żądany zasób nie został znaleziony, ale może być dostępny w przyszłości.';
$a->strings['An unexpected condition was encountered and no more specific message is suitable.'] = 'Napotkano nieoczekiwany warunek i nie jest odpowiedni żaden bardziej szczegółowy komunikat.';
$a->strings['The server is currently unavailable (because it is overloaded or down for maintenance). Please try again later.'] = 'Serwer jest obecnie niedostępny (ponieważ jest przeciążony lub wyłączony z powodu konserwacji). Spróbuj ponownie później.';
$a->strings['Go back'] = 'Wróć';
$a->strings['Welcome to %s'] = 'Witamy w %s';
$a->strings['No friends to display.'] = 'Brak znajomych do wyświetlenia.';
$a->strings['Suggested contact not found.'] = 'Nie znaleziono sugerowanego kontaktu.';
$a->strings['Friend suggestion sent.'] = 'Wysłana propozycja dodania do znajomych.';
$a->strings['Suggest Friends'] = 'Zaproponuj znajomych';
$a->strings['Suggest a friend for %s'] = 'Zaproponuj znajomych dla %s';
$a->strings['Credits'] = 'Zaufany';
$a->strings['Friendica is a community project, that would not be possible without the help of many people. Here is a list of those who have contributed to the code or the translation of Friendica. Thank you all!'] = 'Friendica to projekt społecznościowy, który nie byłby możliwy bez pomocy wielu osób. Oto lista osób, które przyczyniły się do tworzenia kodu lub tłumaczenia Friendica. Dziękuję wam wszystkim!';
$a->strings['Friendica Communications Server - Setup'] = 'Friendica Communications Server - Instalator';
$a->strings['System check'] = 'Sprawdzanie systemu';
$a->strings['Check again'] = 'Sprawdź ponownie';
$a->strings['No SSL policy, links will track page SSL state'] = 'Brak SSL, linki będą śledzić stan SSL';
$a->strings['Force all links to use SSL'] = 'Wymuś używanie SSL na wszystkich odnośnikach';
$a->strings['Self-signed certificate, use SSL for local links only (discouraged)'] = 'Wewnętrzne Certyfikaty, użyj SSL tylko dla linków lokalnych . ';
$a->strings['Base settings'] = 'Ustawienia bazy';
$a->strings['SSL link policy'] = 'Polityka odnośników SSL';
$a->strings['Determines whether generated links should be forced to use SSL'] = 'Określa, czy generowane odnośniki będą obowiązkowo używały SSL';
$a->strings['Host name'] = 'Nazwa hosta';
$a->strings['Overwrite this field in case the determinated hostname isn\'t right, otherweise leave it as is.'] = 'Nadpisz to pole w przypadku, gdy określona nazwa hosta nie jest prawidłowa, a pozostałe pozostaw to bez zmian.';
$a->strings['Base path to installation'] = 'Podstawowa ścieżka do instalacji';
$a->strings['If the system cannot detect the correct path to your installation, enter the correct path here. This setting should only be set if you are using a restricted system and symbolic links to your webroot.'] = 'Jeśli system nie może wykryć poprawnej ścieżki do instalacji, wprowadź tutaj poprawną ścieżkę. To ustawienie powinno być ustawione tylko wtedy, gdy używasz ograniczonego systemu i dowiązań symbolicznych do twojego webroota.';
$a->strings['Sub path of the URL'] = 'Ścieżka podrzędna adresu URL';
$a->strings['Overwrite this field in case the sub path determination isn\'t right, otherwise leave it as is. Leaving this field blank means the installation is at the base URL without sub path.'] = 'Nadpisz to pole w przypadku, gdy określenie ścieżki podrzędnej nie jest prawidłowe, w przeciwnym razie pozostaw je bez zmian. Pozostawienie tego pola pustego oznacza, że ​​instalacja odbywa się pod podstawowym adresem URL bez podścieżki.';
$a->strings['Database connection'] = 'Połączenie z bazą danych';
$a->strings['In order to install Friendica we need to know how to connect to your database.'] = 'W celu zainstalowania Friendica musimy wiedzieć jak połączyć się z twoją bazą danych.';
$a->strings['Please contact your hosting provider or site administrator if you have questions about these settings.'] = 'Proszę skontaktuj się ze swoim dostawcą usług hostingowych bądź administratorem strony jeśli masz pytania co do tych ustawień .';
$a->strings['The database you specify below should already exist. If it does not, please create it before continuing.'] = 'Wymieniona przez Ciebie baza danych powinna już istnieć. Jeżeli nie, utwórz ją przed kontynuacją.';
$a->strings['Database Server Name'] = 'Nazwa serwera bazy danych';
$a->strings['Database Login Name'] = 'Nazwa użytkownika bazy danych';
$a->strings['Database Login Password'] = 'Hasło logowania do bazy danych';
$a->strings['For security reasons the password must not be empty'] = 'Ze względów bezpieczeństwa hasło nie może być puste';
$a->strings['Database Name'] = 'Nazwa bazy danych';
$a->strings['Please select a default timezone for your website'] = 'Proszę wybrać domyślną strefę czasową dla swojej strony';
$a->strings['Site settings'] = 'Ustawienia strony';
$a->strings['Site administrator email address'] = 'Adres e-mail administratora strony';
$a->strings['Your account email address must match this in order to use the web admin panel.'] = 'Adres e-mail konta musi pasować do tego, aby móc korzystać z panelu administracyjnego.';
$a->strings['System Language:'] = 'Język systemu:';
$a->strings['Set the default language for your Friendica installation interface and to send emails.'] = 'Ustaw domyślny język dla interfejsu instalacyjnego Friendica i wysyłaj e-maile.';
$a->strings['Your Friendica site database has been installed.'] = 'Twoja baza danych witryny Friendica została zainstalowana.';
$a->strings['Installation finished'] = 'Instalacja zakończona';
$a->strings['<h1>What next</h1>'] = '<h1>Co dalej</h1>';
$a->strings['IMPORTANT: You will need to [manually] setup a scheduled task for the worker.'] = 'WAŻNE: Będziesz musiał [ręcznie] ustawić zaplanowane zadanie dla pracownika.';
$a->strings['Go to your new Friendica node <a href="%s/register">registration page</a> and register as new user. Remember to use the same email you have entered as administrator email. This will allow you to enter the site admin panel.'] = 'Przejdź do <a href="%s/register">strony rejestracji</a> nowego węzła Friendica i zarejestruj się jako nowy użytkownik. Pamiętaj, aby użyć adresu e-mail wprowadzonego jako e-mail administratora. To pozwoli Ci wejść do panelu administratora witryny.';
$a->strings['- select -'] = '- wybierz -';
$a->strings['Remote privacy information not available.'] = 'Nie są dostępne zdalne informacje o prywatności.';
$a->strings['Visible to:'] = 'Widoczne dla:';
$a->strings['Manage Identities and/or Pages'] = 'Zarządzaj tożsamościami i/lub stronami';
$a->strings['Toggle between different identities or community/group pages which share your account details or which you have been granted "manage" permissions'] = 'Przełącz między różnymi tożsamościami lub stronami społeczność/grupy, które udostępniają dane Twojego konta lub które otrzymałeś uprawnienia "zarządzaj"';
$a->strings['Select an identity to manage: '] = 'Wybierz tożsamość do zarządzania: ';
$a->strings['Local Community'] = 'Lokalna społeczność';
$a->strings['Posts from local users on this server'] = 'Wpisy od lokalnych użytkowników na tym serwerze';
$a->strings['Global Community'] = 'Globalna społeczność';
$a->strings['Posts from users of the whole federated network'] = 'Wpisy od użytkowników całej sieci stowarzyszonej';
$a->strings['No results.'] = 'Brak wyników.';
$a->strings['This community stream shows all public posts received by this node. They may not reflect the opinions of this node’s users.'] = 'Ten strumień społeczności pokazuje wszystkie publiczne posty otrzymane przez ten węzeł. Mogą nie odzwierciedlać opinii użytkowników tego węzła.';
$a->strings['Community option not available.'] = 'Opcja wspólnotowa jest niedostępna.';
$a->strings['Not available.'] = 'Niedostępne.';
$a->strings['Welcome to Friendica'] = 'Witamy na Friendica';
$a->strings['New Member Checklist'] = 'Lista nowych członków';
$a->strings['We would like to offer some tips and links to help make your experience enjoyable. Click any item to visit the relevant page. A link to this page will be visible from your home page for two weeks after your initial registration and then will quietly disappear.'] = 'Chcielibyśmy zaproponować kilka porad i linków, które pomogą uczynić twoje doświadczenie przyjemnym. Kliknij dowolny element, aby odwiedzić odpowiednią stronę. Link do tej strony będzie widoczny na stronie głównej przez dwa tygodnie od czasu rejestracji, a następnie zniknie.';
$a->strings['Getting Started'] = 'Pierwsze kroki';
$a->strings['Friendica Walk-Through'] = 'Friendica Przejdź-Przez';
$a->strings['On your <em>Quick Start</em> page - find a brief introduction to your profile and network tabs, make some new connections, and find some groups to join.'] = 'Na stronie <em>Szybki start</em> - znajdź krótkie wprowadzenie do swojego profilu i kart sieciowych, stwórz nowe połączenia i znajdź kilka grup do przyłączenia się.';
$a->strings['Go to Your Settings'] = 'Idź do swoich ustawień';
$a->strings['On your <em>Settings</em> page -  change your initial password. Also make a note of your Identity Address. This looks just like an email address - and will be useful in making friends on the free social web.'] = 'Na stronie Ustawienia - zmień swoje początkowe hasło. Zanotuj także swój adres tożsamości. Wygląda to jak adres e-mail - będzie przydatny w nawiązywaniu znajomości w bezpłatnej sieci społecznościowej.';
$a->strings['Review the other settings, particularly the privacy settings. An unpublished directory listing is like having an unlisted phone number. In general, you should probably publish your listing - unless all of your friends and potential friends know exactly how to find you.'] = 'Przejrzyj pozostałe ustawienia, w szczególności ustawienia prywatności. Niepublikowany wykaz katalogów jest podobny do niepublicznego numeru telefonu. Ogólnie rzecz biorąc, powinieneś opublikować swój wpis - chyba, że wszyscy twoi znajomi i potencjalni znajomi dokładnie wiedzą, jak Cię znaleźć.';
$a->strings['Upload Profile Photo'] = 'Wyślij zdjęcie profilowe';
$a->strings['Upload a profile photo if you have not done so already. Studies have shown that people with real photos of themselves are ten times more likely to make friends than people who do not.'] = 'Dodaj swoje zdjęcie profilowe jeśli jeszcze tego nie zrobiłeś. Twoje szanse na zwiększenie liczby znajomych rosną dziesięciokrotnie, kiedy na tym zdjęciu jesteś ty.';
$a->strings['Edit Your Profile'] = 'Edytuj własny profil';
$a->strings['Edit your <strong>default</strong> profile to your liking. Review the settings for hiding your list of friends and hiding the profile from unknown visitors.'] = 'Edytuj swój domyślny profil do swoich potrzeb. Przejrzyj ustawienia ukrywania listy znajomych i ukrywania profilu przed nieznanymi użytkownikami.';
$a->strings['Profile Keywords'] = 'Słowa kluczowe profilu';
$a->strings['Set some public keywords for your profile which describe your interests. We may be able to find other people with similar interests and suggest friendships.'] = 'Ustaw kilka publicznych słów kluczowych dla swojego profilu, które opisują Twoje zainteresowania. Możemy znaleźć inne osoby o podobnych zainteresowaniach i zasugerować przyjaźnie.';
$a->strings['Connecting'] = 'Łączenie';
$a->strings['Importing Emails'] = 'Importowanie e-maili';
$a->strings['Enter your email access information on your Connector Settings page if you wish to import and interact with friends or mailing lists from your email INBOX'] = 'Wprowadź informacje dotyczące dostępu do poczty e-mail na stronie Ustawienia oprogramowania, jeśli chcesz importować i wchodzić w interakcje z przyjaciółmi lub listami adresowymi z poziomu konta e-mail INBOX';
$a->strings['Go to Your Contacts Page'] = 'Idź do strony z Twoimi kontaktami';
$a->strings['Your Contacts page is your gateway to managing friendships and connecting with friends on other networks. Typically you enter their address or site URL in the <em>Add New Contact</em> dialog.'] = 'Strona Kontakty jest twoją bramą do zarządzania przyjaciółmi i łączenia się z przyjaciółmi w innych sieciach. Zazwyczaj podaje się adres lub adres URL strony w oknie dialogowym <em>Dodaj nowy kontakt</em>.';
$a->strings['Go to Your Site\'s Directory'] = 'Idż do twojej strony';
$a->strings['The Directory page lets you find other people in this network or other federated sites. Look for a <em>Connect</em> or <em>Follow</em> link on their profile page. Provide your own Identity Address if requested.'] = 'Strona Katalog umożliwia znalezienie innych osób w tej sieci lub innych witrynach stowarzyszonych. Poszukaj łącza <em>Połącz</em> lub <em>Śledź</em> na stronie profilu. Jeśli chcesz, podaj swój własny adres tożsamości.';
$a->strings['Finding New People'] = 'Znajdowanie nowych osób';
$a->strings['On the side panel of the Contacts page are several tools to find new friends. We can match people by interest, look up people by name or interest, and provide suggestions based on network relationships. On a brand new site, friend suggestions will usually begin to be populated within 24 hours.'] = 'Na bocznym panelu strony Kontaktów znajduje się kilka narzędzi do znajdowania nowych przyjaciół. Możemy dopasować osoby według zainteresowań, wyszukiwać osoby według nazwisk i zainteresowań oraz dostarczać sugestie oparte na relacjach sieciowych. Na zupełnie nowej stronie sugestie znajomych zwykle zaczynają być wypełniane w ciągu 24 godzin';
$a->strings['Groups'] = 'Grupy';
$a->strings['Group Your Contacts'] = 'Grupy kontaktów';
$a->strings['Once you have made some friends, organize them into private conversation groups from the sidebar of your Contacts page and then you can interact with each group privately on your Network page.'] = 'Gdy zaprzyjaźnisz się z przyjaciółmi, uporządkuj je w prywatne grupy konwersacji na pasku bocznym na stronie Kontakty, a następnie możesz wchodzić w interakcje z każdą grupą prywatnie na stronie Sieć.';
$a->strings['Why Aren\'t My Posts Public?'] = 'Dlaczego moje posty nie są publiczne?';
$a->strings['Friendica respects your privacy. By default, your posts will only show up to people you\'ve added as friends. For more information, see the help section from the link above.'] = 'Friendica szanuje Twoją prywatność. Domyślnie Twoje wpisy będą wyświetlane tylko osobom, które dodałeś jako znajomi. Aby uzyskać więcej informacji, zobacz sekcję pomocy na powyższym łączu.';
$a->strings['Getting Help'] = 'Otrzymaj pomoc';
$a->strings['Go to the Help Section'] = 'Przejdź do sekcji pomocy';
$a->strings['Our <strong>help</strong> pages may be consulted for detail on other program features and resources.'] = 'Na naszych stronach <strong>pomocy</strong> można znaleźć szczegółowe informacje na temat innych funkcji programu i zasobów.';
$a->strings['This page is missing a url parameter.'] = 'Na tej stronie brakuje parametru url.';
$a->strings['The post was created'] = 'Post został utworzony';
$a->strings['Information'] = 'Informacje';
$a->strings['Overview'] = 'Przegląd';
$a->strings['Federation Statistics'] = 'Statystyki Organizacji';
$a->strings['Configuration'] = 'Konfiguracja';
$a->strings['Site'] = 'Strona';
$a->strings['Users'] = 'Użytkownicy';
$a->strings['Addons'] = 'Dodatki';
$a->strings['Themes'] = 'Wygląd';
$a->strings['Additional features'] = 'Dodatkowe funkcje';
$a->strings['Database'] = 'Baza danych';
$a->strings['DB updates'] = 'Aktualizacje DB';
$a->strings['Inspect Deferred Workers'] = 'Sprawdź Odroczonych Pracowników';
$a->strings['Inspect worker Queue'] = 'Sprawdź kolejkę pracowników';
$a->strings['Tools'] = 'Narzędzia';
$a->strings['Contact Blocklist'] = 'Lista zablokowanych kontaktów';
$a->strings['Server Blocklist'] = 'Lista zablokowanych serwerów';
$a->strings['Delete Item'] = 'Usuń przedmiot';
$a->strings['Logs'] = 'Logi';
$a->strings['View Logs'] = 'Zobacz rejestry';
$a->strings['Diagnostics'] = 'Diagnostyka';
$a->strings['PHP Info'] = 'Informacje o PHP';
$a->strings['probe address'] = 'adres sondy';
$a->strings['check webfinger'] = 'sprawdź webfinger';
$a->strings['Item Source'] = 'Źródło elementu';
$a->strings['Admin'] = 'Administator';
$a->strings['Addon Features'] = 'Funkcje dodatkowe';
$a->strings['User registrations waiting for confirmation'] = 'Rejestracje użytkowników czekające na potwierdzenie';
$a->strings['%d contact edited.'] = [
	0 => 'Zedytowano %d kontakt.',
	1 => 'Zedytowano %d kontakty.',
	2 => 'Zedytowano %d kontaktów.',
	3 => '%dedytuj kontakty.',
];
$a->strings['Could not access contact record.'] = 'Nie można uzyskać dostępu do rejestru kontaktów.';
$a->strings['Follow'] = 'Śledź';
$a->strings['Contact not found'] = 'Nie znaleziono kontaktu';
$a->strings['Contact has been blocked'] = 'Kontakt został zablokowany';
$a->strings['Contact has been unblocked'] = 'Kontakt został odblokowany';
$a->strings['Contact has been ignored'] = 'Kontakt jest ignorowany';
$a->strings['Contact has been unignored'] = 'Kontakt nie jest ignorowany';
$a->strings['Contact has been archived'] = 'Kontakt został zarchiwizowany';
$a->strings['Contact has been unarchived'] = 'Kontakt został przywrócony';
$a->strings['Drop contact'] = 'Usuń kontakt';
$a->strings['Do you really want to delete this contact?'] = 'Czy na pewno chcesz usunąć ten kontakt?';
$a->strings['Contact has been removed.'] = 'Kontakt został usunięty.';
$a->strings['You are mutual friends with %s'] = 'Jesteś już znajomym z %s';
$a->strings['You are sharing with %s'] = 'Współdzielisz z %s';
$a->strings['%s is sharing with you'] = '%s współdzieli z tobą';
$a->strings['Private communications are not available for this contact.'] = 'Nie można nawiązać prywatnej rozmowy z tym kontaktem.';
$a->strings['Never'] = 'Nigdy';
$a->strings['(Update was successful)'] = '(Aktualizacja przebiegła pomyślnie)';
$a->strings['(Update was not successful)'] = '(Aktualizacja nie powiodła się)';
$a->strings['Suggest friends'] = 'Osoby, które możesz znać';
$a->strings['Network type: %s'] = 'Typ sieci: %s';
$a->strings['Communications lost with this contact!'] = 'Utracono komunikację z tym kontaktem!';
$a->strings['Fetch further information for feeds'] = 'Pobierz dalsze informacje dla kanałów';
$a->strings['Fetch information like preview pictures, title and teaser from the feed item. You can activate this if the feed doesn\'t contain much text. Keywords are taken from the meta header in the feed item and are posted as hash tags.'] = 'Pobieranie informacji, takich jak zdjęcia podglądu, tytuł i zwiastun z elementu kanału. Możesz to aktywować, jeśli plik danych nie zawiera dużo tekstu. Słowa kluczowe są pobierane z nagłówka meta w elemencie kanału i są publikowane jako znaczniki haszowania.';
$a->strings['Disabled'] = 'Wyłączony';
$a->strings['Fetch information'] = 'Pobierz informacje';
$a->strings['Fetch keywords'] = 'Pobierz słowa kluczowe';
$a->strings['Fetch information and keywords'] = 'Pobierz informacje i słowa kluczowe';
$a->strings['Contact Information / Notes'] = 'Informacje kontaktowe/Notatki';
$a->strings['Contact Settings'] = 'Ustawienia kontaktów';
$a->strings['Contact'] = 'Kontakt';
$a->strings['Their personal note'] = 'Ich osobista uwaga';
$a->strings['Edit contact notes'] = 'Edytuj notatki kontaktu';
$a->strings['Visit %s\'s profile [%s]'] = 'Obejrzyj %s\'s profil [%s]';
$a->strings['Block/Unblock contact'] = 'Zablokuj/odblokuj kontakt';
$a->strings['Ignore contact'] = 'Ignoruj kontakt';
$a->strings['View conversations'] = 'Wyświetl rozmowy';
$a->strings['Last update:'] = 'Ostatnia aktualizacja:';
$a->strings['Update public posts'] = 'Zaktualizuj publiczne posty';
$a->strings['Update now'] = 'Aktualizuj teraz';
$a->strings['Unblock'] = 'Odblokuj';
$a->strings['Unignore'] = 'Odblokuj';
$a->strings['Currently blocked'] = 'Obecnie zablokowany';
$a->strings['Currently ignored'] = 'Obecnie zignorowany';
$a->strings['Currently archived'] = 'Obecnie zarchiwizowany';
$a->strings['Awaiting connection acknowledge'] = 'Oczekiwanie na potwierdzenie połączenia';
$a->strings['Replies/likes to your public posts <strong>may</strong> still be visible'] = 'Odpowiedzi/kliknięcia "lubię to" do twoich publicznych postów nadal <strong>mogą</strong> być widoczne';
$a->strings['Notification for new posts'] = 'Powiadomienie o nowych postach';
$a->strings['Send a notification of every new post of this contact'] = 'Wyślij powiadomienie o każdym nowym poście tego kontaktu';
$a->strings['Comma separated list of keywords that should not be converted to hashtags, when "Fetch information and keywords" is selected'] = 'Rozdzielana przecinkami lista słów kluczowych, które nie powinny zostać przekonwertowane na hashtagi, gdy wybrana jest opcja \'Pobierz informacje i słowa kluczowe\'';
$a->strings['Actions'] = 'Akcja';
$a->strings['All Contacts'] = 'Wszystkie kontakty';
$a->strings['Show all contacts'] = 'Pokaż wszystkie kontakty';
$a->strings['Pending'] = 'Oczekujące';
$a->strings['Only show pending contacts'] = 'Pokaż tylko oczekujące kontakty';
$a->strings['Blocked'] = 'Zablokowane';
$a->strings['Only show blocked contacts'] = 'Pokaż tylko zablokowane kontakty';
$a->strings['Ignored'] = 'Ignorowane';
$a->strings['Only show ignored contacts'] = 'Pokaż tylko ignorowane kontakty';
$a->strings['Archived'] = 'Zarchiwizowane';
$a->strings['Only show archived contacts'] = 'Pokaż tylko zarchiwizowane kontakty';
$a->strings['Hidden'] = 'Ukryte';
$a->strings['Only show hidden contacts'] = 'Pokaż tylko ukryte kontakty';
$a->strings['Organize your contact groups'] = 'Uporządkuj swoje grupy kontaktów';
$a->strings['Search your contacts'] = 'Wyszukaj w kontaktach';
$a->strings['Results for: %s'] = 'Wyniki dla: %s';
$a->strings['Archive'] = 'Archiwum';
$a->strings['Unarchive'] = 'Przywróć z archiwum';
$a->strings['Batch Actions'] = 'Akcje wsadowe';
$a->strings['Conversations started by this contact'] = 'Rozmowy rozpoczęły się od tego kontaktu';
$a->strings['Posts and Comments'] = 'Posty i komentarze';
$a->strings['Profile Details'] = 'Szczegóły profilu';
$a->strings['View all contacts'] = 'Zobacz wszystkie kontakty';
$a->strings['View all common friends'] = 'Zobacz wszystkich popularnych znajomych';
$a->strings['Advanced Contact Settings'] = 'Zaawansowane ustawienia kontaktów';
$a->strings['Mutual Friendship'] = 'Wzajemna przyjaźń';
$a->strings['is a fan of yours'] = 'jest twoim fanem';
$a->strings['you are a fan of'] = 'jesteś fanem';
$a->strings['Pending outgoing contact request'] = 'Oczekujące żądanie kontaktu wychodzącego';
$a->strings['Pending incoming contact request'] = 'Oczekujące żądanie kontaktu przychodzącego';
$a->strings['Refetch contact data'] = 'Odśwież dane kontaktowe';
$a->strings['Toggle Blocked status'] = 'Przełącz status na Zablokowany';
$a->strings['Toggle Ignored status'] = 'Przełącz status na Ignorowany';
$a->strings['Toggle Archive status'] = 'Przełącz  status na Archiwalny';
$a->strings['Delete contact'] = 'Usuń kontakt';
$a->strings['At the time of registration, and for providing communications between the user account and their contacts, the user has to provide a display name (pen name), an username (nickname) and a working email address. The names will be accessible on the profile page of the account by any visitor of the page, even if other profile details are not displayed. The email address will only be used to send the user notifications about interactions, but wont be visibly displayed. The listing of an account in the node\'s user directory or the global user directory is optional and can be controlled in the user settings, it is not necessary for communication.'] = 'W momencie rejestracji oraz w celu zapewnienia komunikacji między kontem użytkownika, a jego kontaktami, użytkownik musi podać nazwę wyświetlaną (pseudonim), nazwę użytkownika (przydomek) i działający adres e-mail. Nazwy będą dostępne na stronie profilu konta dla każdego odwiedzającego stronę, nawet jeśli inne szczegóły profilu nie zostaną wyświetlone. Adres e-mail będzie używany tylko do wysyłania powiadomień użytkownika o interakcjach, ale nie będzie wyświetlany w widoczny sposób. Lista kont w katalogu użytkownika węzła lub globalnym katalogu użytkownika jest opcjonalna i może być kontrolowana w ustawieniach użytkownika, nie jest konieczna do komunikacji.';
$a->strings['This data is required for communication and is passed on to the nodes of the communication partners and is stored there. Users can enter additional private data that may be transmitted to the communication partners accounts.'] = 'Te dane są wymagane do komunikacji i są przekazywane do węzłów partnerów komunikacyjnych i są tam przechowywane. Użytkownicy mogą wprowadzać dodatkowe prywatne dane, które mogą być przesyłane na konta partnerów komunikacyjnych.';
$a->strings['Privacy Statement'] = 'Oświadczenie o prywatności';
$a->strings['Help:'] = 'Pomoc:';
$a->strings['Total invitation limit exceeded.'] = 'Przekroczono limit zaproszeń ogółem.';
$a->strings['%s : Not a valid email address.'] = '%s : Nieprawidłowy adres e-mail.';
$a->strings['Please join us on Friendica'] = 'Dołącz do nas na Friendica';
$a->strings['Invitation limit exceeded. Please contact your site administrator.'] = 'Przekroczono limit zaproszeń. Skontaktuj się z administratorem witryny.';
$a->strings['%s : Message delivery failed.'] = '%s : Nie udało się dostarczyć wiadomości.';
$a->strings['%d message sent.'] = [
	0 => '%d wiadomość wysłana.',
	1 => '%d wiadomości wysłane.',
	2 => '%d wysłano .',
	3 => '%d wiadomość wysłano.',
];
$a->strings['You have no more invitations available'] = 'Nie masz już dostępnych zaproszeń';
$a->strings['Visit %s for a list of public sites that you can join. Friendica members on other sites can all connect with each other, as well as with members of many other social networks.'] = 'Odwiedź %s listę publicznych witryn, do których możesz dołączyć. Członkowie Friendica na innych stronach mogą łączyć się ze sobą, jak również z członkami wielu innych sieci społecznościowych.';
$a->strings['To accept this invitation, please visit and register at %s or any other public Friendica website.'] = 'Aby zaakceptować to zaproszenie, odwiedź i zarejestruj się %s lub w dowolnej innej publicznej witrynie internetowej Friendica.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks. See %s for a list of alternate Friendica sites you can join.'] = 'Strony Friendica łączą się ze sobą, tworząc ogromną sieć społecznościową o zwiększonej prywatności, która jest własnością i jest kontrolowana przez jej członków. Mogą również łączyć się z wieloma tradycyjnymi sieciami społecznościowymi. Zobacz %s listę alternatywnych witryn Friendica, do których możesz dołączyć.';
$a->strings['Our apologies. This system is not currently configured to connect with other public sites or invite members.'] = 'Przepraszamy. System nie jest obecnie skonfigurowany do łączenia się z innymi publicznymi witrynami lub zapraszania członków.';
$a->strings['Friendica sites all inter-connect to create a huge privacy-enhanced social web that is owned and controlled by its members. They can also connect with many traditional social networks.'] = 'Strony Friendica łączą się ze sobą, tworząc ogromną sieć społecznościową o zwiększonej prywatności, która jest własnością i jest kontrolowana przez jej członków. Mogą również łączyć się z wieloma tradycyjnymi sieciami społecznościowymi.';
$a->strings['To accept this invitation, please visit and register at %s.'] = 'Aby zaakceptować to zaproszenie, odwiedź stronę i zarejestruj się na stronie %s.';
$a->strings['Send invitations'] = 'Wyślij zaproszenie';
$a->strings['Enter email addresses, one per line:'] = 'Wprowadź adresy e-mail, po jednym w wierszu:';
$a->strings['You are cordially invited to join me and other close friends on Friendica - and help us to create a better social web.'] = 'Serdecznie zapraszam do przyłączenia się do mnie i innych bliskich znajomych na stronie Friendica - i pomóż nam stworzyć lepszą sieć społecznościową.';
$a->strings['You will need to supply this invitation code: $invite_code'] = 'Musisz podać ten kod zaproszenia: $invite_code';
$a->strings['Once you have registered, please connect with me via my profile page at:'] = 'Po rejestracji połącz się ze mną na stronie mojego profilu pod adresem:';
$a->strings['For more information about the Friendica project and why we feel it is important, please visit http://friendi.ca'] = 'Aby uzyskać więcej informacji na temat projektu Friendica i dlaczego uważamy, że jest to ważne, odwiedź http://friendi.ca';
$a->strings['People Search - %s'] = 'Szukaj osób - %s';
$a->strings['Forum Search - %s'] = 'Przeszukiwanie forum - %s';
$a->strings['Disable'] = 'Wyłącz';
$a->strings['Enable'] = 'Zezwól';
$a->strings['Theme %s disabled.'] = 'Motyw %s wyłączony.';
$a->strings['Theme %s successfully enabled.'] = 'Motyw %s został pomyślnie włączony.';
$a->strings['Theme %s failed to install.'] = 'Nie udało się zainstalować motywu %s.';
$a->strings['Screenshot'] = 'Zrzut ekranu';
$a->strings['Administration'] = 'Administracja';
$a->strings['Toggle'] = 'Włącz';
$a->strings['Author: '] = 'Autor: ';
$a->strings['Maintainer: '] = 'Opiekun: ';
$a->strings['Unknown theme.'] = 'Nieznany motyw.';
$a->strings['Reload active themes'] = 'Przeładuj aktywne motywy';
$a->strings['No themes found on the system. They should be placed in %1$s'] = 'Nie znaleziono motywów w systemie. Powinny zostać umieszczone %1$s';
$a->strings['[Experimental]'] = '[Eksperymentalne]';
$a->strings['[Unsupported]'] = '[Niewspieralne]';
$a->strings['Lock feature %s'] = 'Funkcja blokady %s';
$a->strings['Manage Additional Features'] = 'Zarządzanie dodatkowymi funkcjami';
$a->strings['%s user blocked'] = [
	0 => '%s użytkownik zablokowany',
	1 => '%s użytkowników zablokowanych',
	2 => '%s użytkowników zablokowanych',
	3 => '%s użytkownicy zablokowani',
];
$a->strings['You can\'t remove yourself'] = 'Nie możesz usunąć siebie';
$a->strings['%s user deleted'] = [
	0 => 'usunięto %s użytkownika',
	1 => 'usunięto %s użytkowników',
	2 => 'usunięto %s użytkowników',
	3 => '%s usuniętych użytkowników',
];
$a->strings['User "%s" deleted'] = 'Użytkownik "%s" usunięty';
$a->strings['User "%s" blocked'] = 'Użytkownik "%s" zablokowany';
$a->strings['User "%s" unblocked'] = 'Użytkownik "%s" odblokowany';
$a->strings['Account approved.'] = 'Konto zatwierdzone.';
$a->strings['Registration revoked'] = 'Rejestracja odwołana';
$a->strings['Private Forum'] = 'Prywatne forum';
$a->strings['Relay'] = 'Przekaźnik';
$a->strings['Email'] = 'E-mail';
$a->strings['Register date'] = 'Data rejestracji';
$a->strings['Last login'] = 'Ostatnie logowanie';
$a->strings['Type'] = 'Typu';
$a->strings['Add User'] = 'Dodaj użytkownika';
$a->strings['select all'] = 'zaznacz wszystko';
$a->strings['User registrations waiting for confirm'] = 'Zarejestrowani użytkownicy czekający na potwierdzenie';
$a->strings['User waiting for permanent deletion'] = 'Użytkownik czekający na trwałe usunięcie';
$a->strings['Request date'] = 'Data prośby';
$a->strings['No registrations.'] = 'Brak rejestracji.';
$a->strings['Note from the user'] = 'Uwaga od użytkownika';
$a->strings['Deny'] = 'Odmów';
$a->strings['User blocked'] = 'Użytkownik zablokowany';
$a->strings['Site admin'] = 'Administracja stroną';
$a->strings['Account expired'] = 'Konto wygasło';
$a->strings['New User'] = 'Nowy użytkownik';
$a->strings['Permanent deletion'] = 'Trwałe usunięcie';
$a->strings['Selected users will be deleted!\n\nEverything these users had posted on this site will be permanently deleted!\n\nAre you sure?'] = 'Zaznaczeni użytkownicy zostaną usunięci!\n\n Wszystko co zamieścili na tej stronie będzie trwale skasowane!\n\n Jesteś pewien?';
$a->strings['The user {0} will be deleted!\n\nEverything this user has posted on this site will be permanently deleted!\n\nAre you sure?'] = 'Użytkownik {0} zostanie usunięty!\n\n Wszystko co zamieścił na tej stronie będzie trwale skasowane!\n\n Jesteś pewien?';
$a->strings['Name of the new user.'] = 'Nazwa nowego użytkownika.';
$a->strings['Nickname'] = 'Pseudonim';
$a->strings['Nickname of the new user.'] = 'Pseudonim nowego użytkownika.';
$a->strings['Email address of the new user.'] = 'Adres email nowego użytkownika.';
$a->strings['Inspect Deferred Worker Queue'] = 'Sprawdź kolejkę odroczonych pracowników';
$a->strings['This page lists the deferred worker jobs. This are jobs that couldn\'t be executed at the first time.'] = 'Ta strona zawiera listę zadań opóźnionych pracowników. Są to zadania, które nie mogą być wykonywane po raz pierwszy.';
$a->strings['Inspect Worker Queue'] = 'Sprawdź Kolejkę Pracowników';
$a->strings['This page lists the currently queued worker jobs. These jobs are handled by the worker cronjob you\'ve set up during install.'] = 'Ta strona zawiera listę aktualnie ustawionych zadań dla pracowników. Te zadania są obsługiwane przez cronjob pracownika, który skonfigurowałeś podczas instalacji.';
$a->strings['ID'] = 'ID';
$a->strings['Job Parameters'] = 'Parametry zadania';
$a->strings['Created'] = 'Utwórz';
$a->strings['Priority'] = 'Priorytet';
$a->strings['Update has been marked successful'] = 'Aktualizacja została oznaczona jako udana';
$a->strings['Database structure update %s was successfully applied.'] = 'Pomyślnie zastosowano aktualizację %s struktury bazy danych.';
$a->strings['Executing of database structure update %s failed with error: %s'] = 'Wykonanie aktualizacji %s struktury bazy danych nie powiodło się z powodu błędu:%s';
$a->strings['Executing %s failed with error: %s'] = 'Wykonanie %s nie powiodło się z powodu błędu:%s';
$a->strings['Update %s was successfully applied.'] = 'Aktualizacja %s została pomyślnie zastosowana.';
$a->strings['Update %s did not return a status. Unknown if it succeeded.'] = 'Aktualizacja %s nie zwróciła statusu. Nieznane, jeśli się udało.';
$a->strings['There was no additional update function %s that needed to be called.'] = 'Nie było dodatkowej funkcji %s aktualizacji, która musiała zostać wywołana.';
$a->strings['No failed updates.'] = 'Brak błędów aktualizacji.';
$a->strings['Check database structure'] = 'Sprawdź strukturę bazy danych';
$a->strings['Failed Updates'] = 'Błąd aktualizacji';
$a->strings['This does not include updates prior to 1139, which did not return a status.'] = 'Nie dotyczy to aktualizacji przed 1139, który nie zwrócił statusu.';
$a->strings['Mark success (if update was manually applied)'] = 'Oznacz sukces (jeśli aktualizacja została ręcznie zastosowana)';
$a->strings['Attempt to execute this update step automatically'] = 'Spróbuj automatycznie wykonać ten krok aktualizacji';
$a->strings['Other'] = 'Inne';
$a->strings['unknown'] = 'nieznany';
$a->strings['This page offers you some numbers to the known part of the federated social network your Friendica node is part of. These numbers are not complete but only reflect the part of the network your node is aware of.'] = 'Ta strona zawiera kilka numerów do znanej części federacyjnej sieci społecznościowej, do której należy Twój węzeł Friendica. Liczby te nie są kompletne, ale odzwierciedlają tylko część sieci, o której wie twój węzeł.';
$a->strings['Currently this node is aware of %d nodes with %d registered users from the following platforms:'] = 'Obecnie węzeł ten jest świadomy %dwęzłów z %d zarejestrowanymi użytkownikami z następujących platform:';
$a->strings['Error trying to open <strong>%1$s</strong> log file.\r\n<br/>Check to see if file %1$s exist and is readable.'] = 'Błąd podczas próby otwarcia <strong>%1$s</strong> pliku dziennika. \r\n <br/>Sprawdź, czy plik %1$s istnieje i czy można go odczytać.';
$a->strings['Couldn\'t open <strong>%1$s</strong> log file.\r\n<br/>Check to see if file %1$s is readable.'] = 'Nie można otworzyć <strong>%1$s</strong>pliku dziennika. \r\n<br/>Sprawdź, czy plik %1$s jest czytelny.';
$a->strings['The logfile \'%s\' is not writable. No logging possible'] = 'Plik dziennika \'%s\' nie jest zapisywalny. Brak możliwości logowania';
$a->strings['PHP log currently enabled.'] = 'Dziennik PHP jest obecnie włączony.';
$a->strings['PHP log currently disabled.'] = 'Dziennik PHP jest obecnie wyłączony.';
$a->strings['Clear'] = 'Wyczyść';
$a->strings['Enable Debugging'] = 'Włącz debugowanie';
$a->strings['Log file'] = 'Plik logów';
$a->strings['Must be writable by web server. Relative to your Friendica top-level directory.'] = 'Musi być zapisywalny przez serwer sieciowy. W stosunku do katalogu najwyższego poziomu Friendica.';
$a->strings['Log level'] = 'Poziom logów';
$a->strings['PHP logging'] = 'Logowanie w PHP';
$a->strings['To temporarily enable logging of PHP errors and warnings you can prepend the following to the index.php file of your installation. The filename set in the \'error_log\' line is relative to the friendica top-level directory and must be writeable by the web server. The option \'1\' for \'log_errors\' and \'display_errors\' is to enable these options, set to \'0\' to disable them.'] = 'Aby tymczasowo włączyć rejestrowanie błędów i ostrzeżeń PHP, możesz dołączyć do pliku index.php swojej instalacji. Nazwa pliku ustawiona w linii \'error_log\' odnosi się do katalogu najwyższego poziomu friendiki i musi być zapisywalna przez serwer WWW. Opcja \'1\' dla \'log_errors\' i \'display_errors\' polega na włączeniu tych opcji, ustawieniu na \'0\', aby je wyłączyć.';
$a->strings['Can not parse base url. Must have at least <scheme>://<domain>'] = 'Nie można zanalizować podstawowego adresu URL. Musi mieć co najmniej <scheme>: //<domain>';
$a->strings['Invalid storage backend setting value.'] = 'Nieprawidłowa wartość ustawienia magazynu pamięci.';
$a->strings['No special theme for mobile devices'] = 'Brak specialnego motywu dla urządzeń mobilnych';
$a->strings['%s - (Experimental)'] = '%s- (Eksperymentalne)';
$a->strings['No community page for local users'] = 'Brak strony społeczności dla użytkowników lokalnych';
$a->strings['No community page'] = 'Brak strony społeczności';
$a->strings['Public postings from users of this site'] = 'Publikacje publiczne od użytkowników tej strony';
$a->strings['Public postings from the federated network'] = 'Publikacje wpisy ze sfederowanej sieci';
$a->strings['Public postings from local users and the federated network'] = 'Publikacje publiczne od użytkowników lokalnych i sieci federacyjnej';
$a->strings['Multi user instance'] = 'Tryb wielu użytkowników';
$a->strings['Closed'] = 'Zamknięte';
$a->strings['Requires approval'] = 'Wymaga zatwierdzenia';
$a->strings['Open'] = 'Otwarta';
$a->strings['Don\'t check'] = 'Nie sprawdzaj';
$a->strings['check the stable version'] = 'sprawdź wersję stabilną';
$a->strings['check the development version'] = 'sprawdź wersję rozwojową';
$a->strings['none'] = 'brak';
$a->strings['Database (legacy)'] = 'Baza danych (legacy)';
$a->strings['Republish users to directory'] = 'Ponownie opublikuj użytkowników w katalogu';
$a->strings['File upload'] = 'Przesyłanie plików';
$a->strings['Policies'] = 'Zasady';
$a->strings['Auto Discovered Contact Directory'] = 'Katalog kontaktów automatycznie odkrytych';
$a->strings['Performance'] = 'Ustawienia';
$a->strings['Worker'] = 'Pracownik';
$a->strings['Message Relay'] = 'Przekazywanie wiadomości';
$a->strings['Relocate Instance'] = 'Zmień lokalizację';
$a->strings['Site name'] = 'Nazwa strony';
$a->strings['Sender Email'] = 'E-mail nadawcy';
$a->strings['The email address your server shall use to send notification emails from.'] = 'Adres e-mail używany przez Twój serwer do wysyłania e-maili z powiadomieniami.';
$a->strings['Banner/Logo'] = 'Logo';
$a->strings['Shortcut icon'] = 'Ikona skrótu';
$a->strings['Link to an icon that will be used for browsers.'] = 'Link do ikony, która będzie używana w przeglądarkach.';
$a->strings['Touch icon'] = 'Dołącz ikonę';
$a->strings['Link to an icon that will be used for tablets and mobiles.'] = 'Link do ikony, która będzie używana w tabletach i telefonach komórkowych.';
$a->strings['Additional Info'] = 'Dodatkowe informacje';
$a->strings['For public servers: you can add additional information here that will be listed at %s/servers.'] = 'W przypadku serwerów publicznych: możesz tu dodać dodatkowe informacje, które będą wymienione na %s/servers.';
$a->strings['System language'] = 'Język systemu';
$a->strings['System theme'] = 'Motyw systemowy';
$a->strings['Default system theme - may be over-ridden by user profiles - <a href="/admin/themes" id="cnftheme">Change default theme settings</a>'] = 'Domyślny motyw systemu - może być nadpisywany przez profile użytkowników - <a href="/admin/themes" id="cnftheme">Zmień domyślne ustawienia motywu</a>';
$a->strings['Mobile system theme'] = 'Motyw systemu mobilnego';
$a->strings['Theme for mobile devices'] = 'Motyw na urządzenia mobilne';
$a->strings['Force SSL'] = 'Wymuś SSL';
$a->strings['Force all Non-SSL requests to SSL - Attention: on some systems it could lead to endless loops.'] = 'Wymuszaj wszystkie żądania SSL bez SSL - Uwaga: w niektórych systemach może to prowadzić do niekończących się pętli.';
$a->strings['Hide help entry from navigation menu'] = 'Ukryj pomoc w menu nawigacyjnym';
$a->strings['Hides the menu entry for the Help pages from the navigation menu. You can still access it calling /help directly.'] = 'Chowa pozycje menu dla stron pomocy ze strony nawigacyjnej. Możesz nadal ją wywołać poprzez komendę /help.';
$a->strings['Single user instance'] = 'Tryb pojedynczego użytkownika';
$a->strings['Make this instance multi-user or single-user for the named user'] = 'Ustawia tryb dla wielu użytkowników lub pojedynczego użytkownika dla nazwanego użytkownika';
$a->strings['File storage backend'] = 'Backend przechowywania plików';
$a->strings['Maximum image size'] = 'Maksymalny rozmiar zdjęcia';
$a->strings['Maximum size in bytes of uploaded images. Default is 0, which means no limits.'] = 'Maksymalny rozmiar w bitach dla wczytywanego obrazu . Domyślnie jest to  0 , co oznacza bez limitu .';
$a->strings['Maximum image length'] = 'Maksymalna długość obrazu';
$a->strings['Maximum length in pixels of the longest side of uploaded images. Default is -1, which means no limits.'] = 'Maksymalna długość w pikselach dłuższego boku przesyłanego obrazu. Wartością domyślną jest -1, co oznacza brak ograniczeń.';
$a->strings['JPEG image quality'] = 'Jakość obrazu JPEG';
$a->strings['Uploaded JPEGS will be saved at this quality setting [0-100]. Default is 100, which is full quality.'] = 'Przesłane pliki JPEG zostaną zapisane w tym ustawieniu jakości [0-100]. Domyślna wartość to 100, która jest pełną jakością.';
$a->strings['Register policy'] = 'Zasady rejestracji';
$a->strings['Maximum Daily Registrations'] = 'Maksymalna dzienna rejestracja';
$a->strings['If registration is permitted above, this sets the maximum number of new user registrations to accept per day.  If register is set to closed, this setting has no effect.'] = 'Jeśli rejestracja powyżej jest dozwolona, to określa maksymalną liczbę nowych rejestracji użytkowników do zaakceptowania na dzień. Jeśli rejestracja jest ustawiona na "Zamknięta", to ustawienie to nie ma wpływu.';
$a->strings['Register text'] = 'Zarejestruj tekst';
$a->strings['Will be displayed prominently on the registration page. You can use BBCode here.'] = 'Będą wyświetlane w widocznym miejscu na stronie rejestracji. Możesz użyć BBCode tutaj.';
$a->strings['Forbidden Nicknames'] = 'Zakazane pseudonimy';
$a->strings['Comma separated list of nicknames that are forbidden from registration. Preset is a list of role names according RFC 2142.'] = 'Lista oddzielonych przecinkami pseudonimów, których nie wolno rejestrować. Preset to lista nazw ról zgodnie z RFC 2142.';
$a->strings['Accounts abandoned after x days'] = 'Konta porzucone po x dni';
$a->strings['Will not waste system resources polling external sites for abandonded accounts. Enter 0 for no time limit.'] = 'Nie będzie marnować zasobów systemu wypytując zewnętrzne strony o opuszczone konta. Ustaw 0 dla braku limitu czasu .';
$a->strings['Allowed friend domains'] = 'Dozwolone domeny przyjaciół';
$a->strings['Comma separated list of domains which are allowed to establish friendships with this site. Wildcards are accepted. Empty to allow any domains'] = 'Rozdzielana przecinkami lista domen, które mogą nawiązywać przyjaźnie z tą witryną. Symbole wieloznaczne są akceptowane. Pozostaw puste by zezwolić każdej domenie na zaprzyjaźnienie.';
$a->strings['Allowed email domains'] = 'Dozwolone domeny e-mailowe';
$a->strings['Comma separated list of domains which are allowed in email addresses for registrations to this site. Wildcards are accepted. Empty to allow any domains'] = 'Rozdzielana przecinkami lista domen dozwolonych w adresach e-mail do rejestracji na tej stronie. Symbole wieloznaczne są akceptowane. Opróżnij, aby zezwolić na dowolne domeny';
$a->strings['No OEmbed rich content'] = 'Brak treści multimedialnych ze znaczkiem HTML';
$a->strings['Don\'t show the rich content (e.g. embedded PDF), except from the domains listed below.'] = 'Nie wyświetlaj zasobów treści (np. osadzonego pliku PDF), z wyjątkiem domen wymienionych poniżej.';
$a->strings['Allowed OEmbed domains'] = 'Dozwolone domeny OEmbed';
$a->strings['Comma separated list of domains which oembed content is allowed to be displayed. Wildcards are accepted.'] = 'Rozdzielana przecinkami lista domen, w których wyświetlana jest treść, może być wyświetlana. Symbole wieloznaczne są akceptowane.';
$a->strings['Block public'] = 'Blokuj publicznie';
$a->strings['Check to block public access to all otherwise public personal pages on this site unless you are currently logged in.'] = 'Zaznacz, aby zablokować publiczny dostęp do wszystkich publicznych stron prywatnych w tej witrynie, chyba że jesteś zalogowany.';
$a->strings['Force publish'] = 'Wymuś publikację';
$a->strings['Check to force all profiles on this site to be listed in the site directory.'] = 'Zaznacz, aby wymusić umieszczenie wszystkich profili w tej witrynie w katalogu witryny.';
$a->strings['Enabling this may violate privacy laws like the GDPR'] = 'Włączenie tego może naruszyć prawa ochrony prywatności, takie jak GDPR';
$a->strings['Global directory URL'] = 'Globalny adres URL katalogu';
$a->strings['URL to the global directory. If this is not set, the global directory is completely unavailable to the application.'] = 'Adres URL do katalogu globalnego. Jeśli nie zostanie to ustawione, katalog globalny jest całkowicie niedostępny dla aplikacji.';
$a->strings['Private posts by default for new users'] = 'Prywatne posty domyślnie dla nowych użytkowników';
$a->strings['Set default post permissions for all new members to the default privacy group rather than public.'] = 'Ustaw domyślne uprawnienia do publikowania dla wszystkich nowych członków na domyślną grupę prywatności, a nie publiczną.';
$a->strings['Don\'t include post content in email notifications'] = 'Nie wklejaj zawartości postu do powiadomienia o poczcie';
$a->strings['Don\'t include the content of a post/comment/private message/etc. in the email notifications that are sent out from this site, as a privacy measure.'] = 'W celu ochrony prywatności, nie włączaj zawartości postu/komentarza/wiadomości prywatnej/etc. do powiadomień w wiadomościach mailowych wysyłanych z tej strony.';
$a->strings['Disallow public access to addons listed in the apps menu.'] = 'Nie zezwalaj na publiczny dostęp do dodatkowych wtyczek wyszczególnionych w menu aplikacji.';
$a->strings['Checking this box will restrict addons listed in the apps menu to members only.'] = 'Zaznaczenie tego pola spowoduje ograniczenie dodatków wymienionych w menu aplikacji tylko dla członków.';
$a->strings['Don\'t embed private images in posts'] = 'Nie umieszczaj prywatnych zdjęć w postach';
$a->strings['Don\'t replace locally-hosted private photos in posts with an embedded copy of the image. This means that contacts who receive posts containing private photos will have to authenticate and load each image, which may take a while.'] = 'Nie zastępuj lokalnie hostowanych zdjęć prywatnych we wpisach za pomocą osadzonej kopii obrazu. Oznacza to, że osoby, które otrzymują posty zawierające prywatne zdjęcia, będą musiały uwierzytelnić i wczytać każdy obraz, co może trochę potrwać.';
$a->strings['Explicit Content'] = 'Treści dla dorosłych';
$a->strings['Set this to announce that your node is used mostly for explicit content that might not be suited for minors. This information will be published in the node information and might be used, e.g. by the global directory, to filter your node from listings of nodes to join. Additionally a note about this will be shown at the user registration page.'] = 'Ustaw to, aby ogłosić, że Twój węzeł jest używany głównie do jawnej treści, która może nie być odpowiednia dla nieletnich. Informacje te zostaną opublikowane w informacjach o węźle i mogą zostać wykorzystane, np. w katalogu globalnym, aby filtrować węzeł z list węzłów do przyłączenia. Dodatkowo notatka o tym zostanie pokazana na stronie rejestracji użytkownika.';
$a->strings['Allow Users to set remote_self'] = 'Zezwól użytkownikom na ustawienie remote_self';
$a->strings['With checking this, every user is allowed to mark every contact as a remote_self in the repair contact dialog. Setting this flag on a contact causes mirroring every posting of that contact in the users stream.'] = 'Po sprawdzeniu tego każdy użytkownik może zaznaczyć każdy kontakt jako zdalny w oknie dialogowym kontaktu naprawczego. Ustawienie tej flagi na kontakcie powoduje dublowanie każdego wpisu tego kontaktu w strumieniu użytkowników.';
$a->strings['Block multiple registrations'] = 'Zablokuj wielokrotną rejestrację';
$a->strings['Disallow users to register additional accounts for use as pages.'] = 'Nie pozwalaj użytkownikom na zakładanie dodatkowych kont do używania jako strony. ';
$a->strings['Disable OpenID'] = 'Wyłącz OpenID';
$a->strings['Disable OpenID support for registration and logins.'] = 'Wyłącz obsługę OpenID dla rejestracji i logowania.';
$a->strings['No Fullname check'] = 'Bez sprawdzania pełnej nazwy';
$a->strings['Allow users to register without a space between the first name and the last name in their full name.'] = 'Zezwól użytkownikom na rejestrację bez spacji między imieniem i nazwiskiem w ich pełnym imieniu.';
$a->strings['Community pages for visitors'] = 'Strony społecznościowe dla odwiedzających';
$a->strings['Which community pages should be available for visitors. Local users always see both pages.'] = 'Które strony społeczności powinny być dostępne dla odwiedzających. Lokalni użytkownicy zawsze widzą obie strony.';
$a->strings['Posts per user on community page'] = 'Lista postów użytkownika na stronie społeczności';
$a->strings['The maximum number of posts per user on the community page. (Not valid for "Global Community")'] = 'Maksymalna liczba postów na użytkownika na stronie społeczności. (Nie dotyczy „Globalnej społeczności”)';
$a->strings['Disable OStatus support'] = 'Wyłącz obsługę OStatus';
$a->strings['Disable built-in OStatus (StatusNet, GNU Social etc.) compatibility. All communications in OStatus are public, so privacy warnings will be occasionally displayed.'] = 'Wyłącz wbudowaną kompatybilność z OStatus (StatusNet, GNU Social itd.). Wszystkie rozmowy w OStatus są publiczne, więc czasem będą pojawiać się ostrzeżenia o prywatności.';
$a->strings['OStatus support can only be enabled if threading is enabled.'] = 'Obsługa OStatus może być włączona tylko wtedy, gdy włączone jest wątkowanie.';
$a->strings['Diaspora support can\'t be enabled because Friendica was installed into a sub directory.'] = 'Obsługa Diaspory nie może być włączona, ponieważ Friendica została zainstalowana w podkatalogu.';
$a->strings['Enable Diaspora support'] = 'Włączyć obsługę Diaspory';
$a->strings['Provide built-in Diaspora network compatibility.'] = 'Zapewnij wbudowaną kompatybilność z siecią Diaspora.';
$a->strings['Only allow Friendica contacts'] = 'Dopuść tylko kontakty Friendrica';
$a->strings['All contacts must use Friendica protocols. All other built-in communication protocols disabled.'] = 'Wszyscy znajomi muszą używać protokołów Friendica. Wszystkie inne wbudowane protokoły komunikacyjne są wyłączone.';
$a->strings['Verify SSL'] = 'Weryfikacja SSL';
$a->strings['If you wish, you can turn on strict certificate checking. This will mean you cannot connect (at all) to self-signed SSL sites.'] = 'Jeśli chcesz, możesz włączyć ścisłe sprawdzanie certyfikatu. Oznacza to, że nie możesz połączyć się (w ogóle) z własnoręcznie podpisanymi stronami SSL.';
$a->strings['Proxy user'] = 'Użytkownik proxy';
$a->strings['Proxy URL'] = 'URL Proxy';
$a->strings['Network timeout'] = 'Network timeout';
$a->strings['Value is in seconds. Set to 0 for unlimited (not recommended).'] = 'Wartość jest w sekundach. Ustaw na 0 dla nieograniczonej (niezalecane).';
$a->strings['Maximum Load Average'] = 'Maksymalne obciążenie średnie';
$a->strings['Maximum system load before delivery and poll processes are deferred - default %d.'] = 'Maksymalne obciążenie systemu przed dostarczeniem i procesami odpytywania jest odroczone - domyślnie %d.';
$a->strings['Maximum Load Average (Frontend)'] = 'Maksymalne obciążenie średnie (Frontend)';
$a->strings['Maximum system load before the frontend quits service - default 50.'] = 'Maksymalne obciążenie systemu, zanim frontend zakończy pracę - domyślnie 50.';
$a->strings['Minimal Memory'] = 'Minimalna pamięć';
$a->strings['Minimal free memory in MB for the worker. Needs access to /proc/meminfo - default 0 (deactivated).'] = 'Minimalna wolna pamięć w MB dla pracownika. Potrzebuje dostępu do /proc/ meminfo - domyślnie 0 (wyłączone).';
$a->strings['Days between requery'] = 'Dni między żądaniem';
$a->strings['Number of days after which a server is requeried for his contacts.'] = 'Liczba dni, po upływie których serwer jest żądany dla swoich kontaktów.';
$a->strings['Discover contacts from other servers'] = 'Odkryj kontakty z innych serwerów';
$a->strings['Search the local directory'] = 'Wyszukaj w lokalnym katalogu';
$a->strings['Search the local directory instead of the global directory. When searching locally, every search will be executed on the global directory in the background. This improves the search results when the search is repeated.'] = 'Wyszukaj lokalny katalog zamiast katalogu globalnego. Podczas wyszukiwania lokalnie każde wyszukiwanie zostanie wykonane w katalogu globalnym w tle. Poprawia to wyniki wyszukiwania, gdy wyszukiwanie jest powtarzane.';
$a->strings['Publish server information'] = 'Publikuj informacje o serwerze';
$a->strings['If enabled, general server and usage data will be published. The data contains the name and version of the server, number of users with public profiles, number of posts and the activated protocols and connectors. See <a href="http://the-federation.info/">the-federation.info</a> for details.'] = 'Jeśli ta opcja jest włączona, ogólne dane dotyczące serwera i użytkowania zostaną opublikowane. Dane zawierają nazwę i wersję serwera, liczbę użytkowników z profilami publicznymi, liczbę postów i aktywowane protokoły i złącza. Szczegółowe informacje można znaleźć na <a href="http://the-federation.info/">the-federation.info</a>.';
$a->strings['Check upstream version'] = 'Sprawdź wersję powyżej';
$a->strings['Enables checking for new Friendica versions at github. If there is a new version, you will be informed in the admin panel overview.'] = 'Umożliwia sprawdzenie nowych wersji Friendica na github. Jeśli pojawi się nowa wersja, zostaniesz o tym poinformowany w panelu administracyjnym.';
$a->strings['Suppress Tags'] = 'Ukryj tagi';
$a->strings['Suppress showing a list of hashtags at the end of the posting.'] = 'Pomiń wyświetlenie listy hashtagów na końcu postu.';
$a->strings['Clean database'] = 'Wyczyść bazę danych';
$a->strings['Remove old remote items, orphaned database records and old content from some other helper tables.'] = 'Usuń stare zdalne pozycje, osierocone rekordy bazy danych i starą zawartość z innych tabel pomocników.';
$a->strings['Lifespan of remote items'] = 'Żywotność odległych przedmiotów';
$a->strings['When the database cleanup is enabled, this defines the days after which remote items will be deleted. Own items, and marked or filed items are always kept. 0 disables this behaviour.'] = 'Po włączeniu czyszczenia bazy danych określa dni, po których zdalne elementy zostaną usunięte. Własne przedmioty oraz oznaczone lub wypełnione pozycje są zawsze przechowywane. 0 wyłącza to zachowanie.';
$a->strings['Lifespan of unclaimed items'] = 'Żywotność nieodebranych przedmiotów';
$a->strings['When the database cleanup is enabled, this defines the days after which unclaimed remote items (mostly content from the relay) will be deleted. Default value is 90 days. Defaults to the general lifespan value of remote items if set to 0.'] = 'Po włączeniu czyszczenia bazy danych określa się dni, po których usunięte zostaną nieodebrane zdalne elementy (głównie zawartość z przekaźnika). Wartość domyślna to 90 dni. Wartość domyślna dla ogólnej długości życia zdalnych pozycji, jeśli jest ustawiona na 0.';
$a->strings['Lifespan of raw conversation data'] = 'Trwałość nieprzetworzonych danych konwersacji';
$a->strings['The conversation data is used for ActivityPub and OStatus, as well as for debug purposes. It should be safe to remove it after 14 days, default is 90 days.'] = 'Dane konwersacji są używane do ActivityPub i OStatus, a także do celów debugowania. Powinno być bezpieczne usunięcie go po 14 dniach, domyślnie jest to 90 dni.';
$a->strings['Path to item cache'] = 'Ścieżka do pamięci podręcznej';
$a->strings['The item caches buffers generated bbcode and external images.'] = 'Pozycja buforuje bufory generowane bbcode i obrazy zewnętrzne.';
$a->strings['Cache duration in seconds'] = 'Czas trwania w sekundach';
$a->strings['How long should the cache files be hold? Default value is 86400 seconds (One day). To disable the item cache, set the value to -1.'] = 'Jak długo powinny być przechowywane pliki pamięci podręcznej? Wartość domyślna to 86400 sekund (jeden dzień). Aby wyłączyć pamięć podręczną elementów, ustaw wartość na -1.';
$a->strings['Maximum numbers of comments per post'] = 'Maksymalna liczba komentarzy na post';
$a->strings['How much comments should be shown for each post? Default value is 100.'] = 'Ile komentarzy powinno być pokazywanych dla każdego posta? Domyślna wartość to 100.';
$a->strings['Temp path'] = 'Ścieżka do Temp';
$a->strings['If you have a restricted system where the webserver can\'t access the system temp path, enter another path here.'] = 'Jeśli masz zastrzeżony system, w którym serwer internetowy nie może uzyskać dostępu do ścieżki temp systemu, wprowadź tutaj inną ścieżkę.';
$a->strings['Disable picture proxy'] = 'Wyłącz obraz proxy';
$a->strings['The picture proxy increases performance and privacy. It shouldn\'t be used on systems with very low bandwidth.'] = 'Serwer proxy zwiększa wydajność i prywatność. Nie powinno być używane w systemach o bardzo niskiej przepustowości.';
$a->strings['Only search in tags'] = 'Szukaj tylko w tagach';
$a->strings['On large systems the text search can slow down the system extremely.'] = 'W dużych systemach wyszukiwanie tekstu może wyjątkowo spowolnić system.';
$a->strings['New base url'] = 'Nowy bazowy adres url';
$a->strings['Change base url for this server. Sends relocate message to all Friendica and Diaspora* contacts of all users.'] = 'Zmień bazowy adres URL dla tego serwera. Wysyła wiadomość o przeniesieniu do wszystkich kontaktów Friendica i Diaspora* wszystkich użytkowników.';
$a->strings['RINO Encryption'] = 'Szyfrowanie RINO';
$a->strings['Encryption layer between nodes.'] = 'Warstwa szyfrowania między węzłami.';
$a->strings['Enabled'] = 'Włącz';
$a->strings['Maximum number of parallel workers'] = 'Maksymalna liczba równoległych pracowników';
$a->strings['On shared hosters set this to %d. On larger systems, values of %d are great. Default value is %d.'] = 'Na udostępnionych usługach hostingowych ustaw tę opcję %d. W większych systemach wartości %dsą świetne . Wartość domyślna to %d.';
$a->strings['Enable this if your system doesn\'t allow the use of "proc_open". This can happen on shared hosters. If this is enabled you should increase the frequency of worker calls in your crontab.'] = 'Włącz to, jeśli twój system nie zezwala na użycie „proc_open”. Może się tak zdarzyć na współdzielonych hostach. Jeśli to jest włączone, powinieneś zwiększyć częstotliwość wywołań roboczych w crontabie.';
$a->strings['Enable fastlane'] = 'Włącz Fastlane';
$a->strings['When enabed, the fastlane mechanism starts an additional worker if processes with higher priority are blocked by processes of lower priority.'] = 'Po włączeniu system Fastlane uruchamia dodatkowego pracownika, jeśli procesy o wyższym priorytecie są blokowane przez procesy o niższym priorytecie.';
$a->strings['Enable frontend worker'] = 'Włącz pracownika frontend';
$a->strings['Subscribe to relay'] = 'Subskrybuj przekaźnik';
$a->strings['Enables the receiving of public posts from the relay. They will be included in the search, subscribed tags and on the global community page.'] = 'Umożliwia odbieranie publicznych wiadomości z przekaźnika. Zostaną uwzględnione w tagach wyszukiwania, subskrybowanych i na stronie społeczności globalnej.';
$a->strings['Relay server'] = 'Serwer przekazujący';
$a->strings['Address of the relay server where public posts should be send to. For example https://relay.diasp.org'] = 'Adres serwera przekazującego, do którego należy wysyłać publiczne posty. Na przykład https://relay.diasp.org';
$a->strings['Direct relay transfer'] = 'Bezpośredni transfer przekaźników';
$a->strings['Enables the direct transfer to other servers without using the relay servers'] = 'Umożliwia bezpośredni transfer do innych serwerów bez korzystania z serwerów przekazujących';
$a->strings['Relay scope'] = 'Zakres przekaźnika';
$a->strings['Can be "all" or "tags". "all" means that every public post should be received. "tags" means that only posts with selected tags should be received.'] = 'Mogą to być „wszystkie” lub „tagi”. „wszystkie” oznacza, że ​​każdy publiczny post powinien zostać odebrany. „Tagi” oznaczają, że powinny być odbierane tylko posty z wybranymi tagami.';
$a->strings['all'] = 'wszystko';
$a->strings['tags'] = 'tagi';
$a->strings['Server tags'] = 'Serwer tagów';
$a->strings['Comma separated list of tags for the "tags" subscription.'] = 'Rozdzielana przecinkami lista tagów dla subskrypcji „tagi”.';
$a->strings['Allow user tags'] = 'Pozwól na tagi użytkowników';
$a->strings['If enabled, the tags from the saved searches will used for the "tags" subscription in addition to the "relay_server_tags".'] = 'Jeśli ta opcja jest włączona, tagi z zapisanych wyszukiwań będą używane jako subskrypcja „tagów” jako uzupełnienie do "relay_server_tags".';
$a->strings['Start Relocation'] = 'Rozpocznij przenoszenie';
$a->strings['Your DB still runs with MyISAM tables. You should change the engine type to InnoDB. As Friendica will use InnoDB only features in the future, you should change this! See <a href="%s">here</a> for a guide that may be helpful converting the table engines. You may also use the command <tt>php bin/console.php dbstructure toinnodb</tt> of your Friendica installation for an automatic conversion.<br />'] = 'Twoja baza danych nadal używa tabel MyISAM. Powinieneś(-naś) zmienić typ silnika na InnoDB. Ponieważ Friendica będzie używać w przyszłości wyłącznie funkcji InnoDB, powinieneś(-naś) to zmienić! Zobacz <a href="%s">tutaj</a> przewodnik, który może być pomocny w konwersji silników tabel. Możesz także użyć polecenia <tt>php bin/console.php dbstructure toinnodb</tt> instalacji Friendica, aby dokonać automatycznej konwersji.<br />';
$a->strings['There is a new version of Friendica available for download. Your current version is %1$s, upstream version is %2$s'] = 'Dostępna jest nowa wersja aplikacji Friendica. Twoja aktualna wersja to %1$s wyższa wersja to %2$s';
$a->strings['The database update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear.'] = 'Aktualizacja bazy danych nie powiodła się. Uruchom polecenie "php bin/console.php dbstructure update" z wiersza poleceń i sprawdź błędy, które mogą się pojawić.';
$a->strings['The last update failed. Please run "php bin/console.php dbstructure update" from the command line and have a look at the errors that might appear. (Some of the errors are possibly inside the logfile.)'] = 'Ostatnia aktualizacja nie powiodła się. Uruchom polecenie "php bin/console.php dbstructure update" z wiersza poleceń i spójrz na błędy, które mogą się pojawić. (Niektóre błędy są prawdopodobnie w pliku dziennika).';
$a->strings['The worker was never executed. Please check your database structure!'] = 'Pracownik nigdy nie został stracony. Sprawdź swoją strukturę bazy danych!';
$a->strings['The last worker execution was on %s UTC. This is older than one hour. Please check your crontab settings.'] = 'Ostatnie wykonanie robota było w %s UTC. To jest starsze niż jedna godzina. Sprawdź ustawienia crontab.';
$a->strings['Friendica\'s configuration now is stored in config/local.config.php, please copy config/local-sample.config.php and move your config from <code>.htconfig.php</code>. See <a href="%s">the Config help page</a> for help with the transition.'] = 'Konfiguracja Friendiki jest teraz przechowywana w config/local.config.php, skopiuj config/local-sample.config.php i przenieś swoją konfigurację z <code>.htconfig.php</code>. Zobacz <a href="%s">stronę pomocy Config</a>, aby uzyskać pomoc dotyczącą przejścia.';
$a->strings['Friendica\'s configuration now is stored in config/local.config.php, please copy config/local-sample.config.php and move your config from <code>config/local.ini.php</code>. See <a href="%s">the Config help page</a> for help with the transition.'] = 'Konfiguracja Friendiki jest teraz przechowywana w config/local.config.php, skopiuj config/local-sample.config.php i przenieś konfigurację z <code>config/local.ini.php</code>. Zobacz <a href="%s">stronę pomocy Config</a>, aby uzyskać pomoc dotyczącą przejścia.';
$a->strings['<a href="%s">%s</a> is not reachable on your system. This is a severe configuration issue that prevents server to server communication. See <a href="%s">the installation page</a> for help.'] = '<a href="%s">%s</a> nie jest osiągalny w twoim systemie. Jest to poważny problem z konfiguracją, który uniemożliwia komunikację między serwerami. Zobacz pomoc na <a href="%s">stronie instalacji</a>.';
$a->strings['Friendica\'s system.basepath was updated from \'%s\' to \'%s\'. Please remove the system.basepath from your db to avoid differences.'] = 'System.basepath Friendiki został zaktualizowany z \'%s\' do \'%s\'. Usuń system.basepath z bazy danych, aby uniknąć różnic.';
$a->strings['Friendica\'s current system.basepath \'%s\' is wrong and the config file \'%s\' isn\'t used.'] = 'Obecny system.basepath Friendiki \'%s\' jest nieprawidłowy i plik konfiguracyjny \'%s\' nie jest używany.';
$a->strings['Friendica\'s current system.basepath \'%s\' is not equal to the config file \'%s\'. Please fix your configuration.'] = 'Obecny system.basepath Friendiki \'%s\' nie jest równy plikowi konfiguracyjnemu \'%s\'. Napraw konfigurację.';
$a->strings['Normal Account'] = 'Konto normalne';
$a->strings['Automatic Follower Account'] = 'Automatyczne konto obserwatora';
$a->strings['Public Forum Account'] = 'Publiczne konto na forum';
$a->strings['Automatic Friend Account'] = 'Automatyczny przyjaciel konta';
$a->strings['Blog Account'] = 'Konto Bloga';
$a->strings['Private Forum Account'] = 'Prywatne konto na forum';
$a->strings['Message queues'] = 'Wiadomości';
$a->strings['Server Settings'] = 'Ustawienia serwera';
$a->strings['Registered users'] = 'Zarejestrowani użytkownicy';
$a->strings['Pending registrations'] = 'Oczekujące rejestracje';
$a->strings['Version'] = 'Wersja';
$a->strings['Active addons'] = 'Aktywne dodatki';
$a->strings['Display Terms of Service'] = 'Wyświetl Warunki korzystania z usługi';
$a->strings['Enable the Terms of Service page. If this is enabled a link to the terms will be added to the registration form and the general information page.'] = 'Włącz stronę Warunki świadczenia usług. Jeśli ta opcja jest włączona, link do warunków zostanie dodany do formularza rejestracyjnego i strony z informacjami ogólnymi.';
$a->strings['Display Privacy Statement'] = 'Wyświetl oświadczenie o prywatności';
$a->strings['Privacy Statement Preview'] = 'Podgląd oświadczenia o prywatności';
$a->strings['The Terms of Service'] = 'Warunki świadczenia usług';
$a->strings['Enter the Terms of Service for your node here. You can use BBCode. Headers of sections should be [h2] and below.'] = 'Wprowadź tutaj Warunki świadczenia usług dla swojego węzła. Możesz użyć BBCode. Nagłówki sekcji powinny być [h2] i poniżej.';
$a->strings['Server domain pattern added to blocklist.'] = 'Wzorzec domeny serwera dodano do listy bloków.';
$a->strings['Blocked server domain pattern'] = 'Zablokowany wzorzec domeny serwera';
$a->strings['Reason for the block'] = 'Powód blokowania';
$a->strings['Delete server domain pattern'] = 'Usuń wzorzec domeny serwera';
$a->strings['Check to delete this entry from the blocklist'] = 'Zaznacz, aby usunąć ten wpis z listy bloków';
$a->strings['Server Domain Pattern Blocklist'] = 'Lista bloków wzorców domen serwerów';
$a->strings['Add new entry to block list'] = 'Dodaj nowy wpis do listy bloków';
$a->strings['Server Domain Pattern'] = 'Wzorzec domeny serwera';
$a->strings['The domain pattern of the new server to add to the block list. Do not include the protocol.'] = 'Wzorzec domeny nowego serwera do dodania do listy bloków. Nie dołączaj protokołu.';
$a->strings['Block reason'] = 'Powód zablokowania';
$a->strings['The reason why you blocked this server domain pattern.'] = 'Powód zablokowania wzorca domeny serwera.';
$a->strings['Add Entry'] = 'Dodaj wpis';
$a->strings['Save changes to the blocklist'] = 'Zapisz zmiany w liście zablokowanych';
$a->strings['Current Entries in the Blocklist'] = 'Aktualne wpisy na liście zablokowanych';
$a->strings['Delete entry from blocklist'] = 'Usuń wpis z listy zablokowanych';
$a->strings['Delete entry from blocklist?'] = 'Usunąć wpis z listy zablokowanych?';
$a->strings['%s contact unblocked'] = [
	0 => '%s kontakt odblokowany',
	1 => '%s kontakty odblokowane',
	2 => '%s kontaktów odblokowanych',
	3 => '%s kontaktów odblokowanych',
];
$a->strings['Remote Contact Blocklist'] = 'Lista zablokowanych kontaktów zdalnych';
$a->strings['This page allows you to prevent any message from a remote contact to reach your node.'] = 'Ta strona pozwala zapobiec wysyłaniu do węzła wiadomości od kontaktu zdalnego.';
$a->strings['Block Remote Contact'] = 'Zablokuj kontakt zdalny';
$a->strings['select none'] = 'wybierz brak';
$a->strings['No remote contact is blocked from this node.'] = 'Z tego węzła nie jest blokowany kontakt zdalny.';
$a->strings['Blocked Remote Contacts'] = 'Zablokowane kontakty zdalne';
$a->strings['Block New Remote Contact'] = 'Zablokuj nowy kontakt zdalny';
$a->strings['Photo'] = 'Zdjęcie';
$a->strings['%s total blocked contact'] = [
	0 => 'łącznie %s zablokowany kontakt',
	1 => 'łącznie %s zablokowane kontakty',
	2 => 'łącznie %s zablokowanych kontaktów',
	3 => '%s całkowicie zablokowane kontakty',
];
$a->strings['URL of the remote contact to block.'] = 'Adres URL kontaktu zdalnego do zablokowania.';
$a->strings['Item Guid'] = 'Element Guid';
$a->strings['Item marked for deletion.'] = 'Przedmiot oznaczony do usunięcia.';
$a->strings['Delete this Item'] = 'Usuń ten przedmiot';
$a->strings['On this page you can delete an item from your node. If the item is a top level posting, the entire thread will be deleted.'] = 'Na tej stronie możesz usunąć przedmiot ze swojego węzła. Jeśli element jest publikowaniem na najwyższym poziomie, cały wątek zostanie usunięty.';
$a->strings['You need to know the GUID of the item. You can find it e.g. by looking at the display URL. The last part of http://example.com/display/123456 is the GUID, here 123456.'] = 'Musisz znać identyfikator GUID tego przedmiotu. Możesz go znaleźć np. patrząc na wyświetlany adres URL. Ostatnia część http://example.com/display/123456 to GUID, tutaj 123456.';
$a->strings['GUID'] = 'GUID';
$a->strings['The GUID of the item you want to delete.'] = 'Identyfikator elementu GUID, który chcesz usunąć.';
$a->strings['Addon not found.'] = 'Nie znaleziono dodatku.';
$a->strings['Addon %s disabled.'] = 'Dodatek %s wyłączony.';
$a->strings['Addon %s enabled.'] = 'Dodatek %s włączony.';
$a->strings['Addon %s failed to install.'] = 'Instalacja dodatku %s nie powiodła się.';
$a->strings['Reload active addons'] = 'Załaduj ponownie aktywne dodatki';
$a->strings['There are currently no addons available on your node. You can find the official addon repository at %1$s and might find other interesting addons in the open addon registry at %2$s'] = 'W twoim węźle nie ma obecnie żadnych dodatków. Możesz znaleźć oficjalne repozytorium dodatków na %1$s i możesz znaleźć inne interesujące dodatki w otwartym rejestrze dodatków na %2$s';
$a->strings['No entries (some entries may be hidden).'] = 'Brak odwiedzin (niektóre odwiedziny mogą być ukryte).';
$a->strings['Find on this site'] = 'Znajdź na tej stronie';
$a->strings['Results for:'] = 'Wyniki dla:';
$a->strings['Site Directory'] = 'Katalog Witryny';
$a->strings['Item was not found.'] = 'Element nie znaleziony.';
$a->strings['Please enter a post body.'] = 'Wpisz treść postu.';
$a->strings['This feature is only available with the frio theme.'] = 'Ta funkcja jest dostępna tylko z motywem Frio.';
$a->strings['Compose new personal note'] = 'Utwórz nową notatkę osobistą';
$a->strings['Compose new post'] = 'Utwórz nowy post';
$a->strings['Visibility'] = 'Widoczność';
$a->strings['Clear the location'] = 'Wyczyść lokalizację';
$a->strings['Location services are unavailable on your device'] = 'Usługi lokalizacyjne są niedostępne na twoim urządzeniu';
$a->strings['Location services are disabled. Please check the website\'s permissions on your device'] = 'Usługi lokalizacyjne są wyłączone. Sprawdź uprawnienia strony internetowej na swoim urządzeniu';
$a->strings['Installed addons/apps:'] = 'Zainstalowane dodatki/aplikacje:';
$a->strings['No installed addons/apps'] = 'Brak zainstalowanych dodatków/aplikacji';
$a->strings['Read about the <a href="%1$s/tos">Terms of Service</a> of this node.'] = 'Przeczytaj o <a href="%1$s/tos">Warunkach świadczenia usług</a> tego węzła.';
$a->strings['On this server the following remote servers are blocked.'] = 'Na tym serwerze następujące serwery zdalne są blokowane.';
$a->strings['This is Friendica, version %s that is running at the web location %s. The database version is %s, the post update version is %s.'] = 'To jest wersja Friendica, %s która działa w lokalizacji internetowej %s. Wersja bazy danych to %s wersja po aktualizacji %s.';
$a->strings['Please visit <a href="https://friendi.ca">Friendi.ca</a> to learn more about the Friendica project.'] = 'Odwiedź stronę <a href="https://friendi.ca">Friendi.ca</a> aby dowiedzieć się więcej o projekcie Friendica.';
$a->strings['Bug reports and issues: please visit'] = 'Raporty o błędach i problemy: odwiedź stronę';
$a->strings['the bugtracker at github'] = 'śledzenie błędów na github';
$a->strings['Suggestions, praise, etc. - please email "info" at "friendi - dot - ca'] = 'Propozycje, pochwały itd. – napisz e-mail do „info” małpa „friendi” - kropka - „ca”';
$a->strings['Only You Can See This'] = 'Tylko ty możesz to zobaczyć';
$a->strings['Tips for New Members'] = 'Wskazówki dla nowych użytkowników';
$a->strings['Invalid photo with id %s.'] = 'Nieprawidłowe zdjęcie z identyfikatorem %s.';
$a->strings['The provided profile link doesn\'t seem to be valid'] = 'Podany link profilu wydaje się być nieprawidłowy';
$a->strings['Account'] = 'Konto';
$a->strings['Display'] = 'Wygląd';
$a->strings['Manage Accounts'] = 'Zarządzanie kontami';
$a->strings['Connected apps'] = 'Powiązane aplikacje';
$a->strings['Export personal data'] = 'Eksportuj dane osobiste';
$a->strings['Remove account'] = 'Usuń konto';
$a->strings['Could not create group.'] = 'Nie można utworzyć grupy.';
$a->strings['Group not found.'] = 'Nie znaleziono grupy.';
$a->strings['Unknown group.'] = 'Nieznana grupa.';
$a->strings['Contact is deleted.'] = 'Kontakt został usunięty.';
$a->strings['Unable to add the contact to the group.'] = 'Nie można dodać kontaktu do grupy.';
$a->strings['Contact successfully added to group.'] = 'Kontakt został pomyślnie dodany do grupy.';
$a->strings['Unable to remove the contact from the group.'] = 'Nie można usunąć kontaktu z grupy.';
$a->strings['Contact successfully removed from group.'] = 'Kontakt został pomyślnie usunięty z grupy.';
$a->strings['Unknown group command.'] = 'Nieznane polecenie grupy.';
$a->strings['Bad request.'] = 'Błędne żądanie.';
$a->strings['Save Group'] = 'Zapisz grupę';
$a->strings['Filter'] = 'Filtr';
$a->strings['Create a group of contacts/friends.'] = 'Stwórz grupę znajomych.';
$a->strings['Group Name: '] = 'Nazwa grupy: ';
$a->strings['Contacts not in any group'] = 'Kontakt nie jest w żadnej grupie';
$a->strings['Unable to remove group.'] = 'Nie można usunąć grupy.';
$a->strings['Delete Group'] = 'Usuń grupę';
$a->strings['Edit Group Name'] = 'Edytuj nazwę grupy';
$a->strings['Members'] = 'Członkowie';
$a->strings['Remove contact from group'] = 'Usuń kontakt z grupy';
$a->strings['Click on a contact to add or remove.'] = 'Kliknij na kontakt w celu dodania lub usunięcia.';
$a->strings['Add contact to group'] = 'Dodaj kontakt do grupy';
$a->strings['Only logged in users are permitted to perform a search.'] = 'Tylko zalogowani użytkownicy mogą wyszukiwać.';
$a->strings['Only one search per minute is permitted for not logged in users.'] = 'Dla niezalogowanych użytkowników dozwolone jest tylko jedno wyszukiwanie na minutę.';
$a->strings['Search'] = 'Szukaj';
$a->strings['Items tagged with: %s'] = 'Przedmioty oznaczone tagiem: %s';
$a->strings['You must be logged in to use this module.'] = 'Musisz być zalogowany, aby korzystać z tego modułu.';
$a->strings['Search term already saved.'] = 'Wyszukiwane hasło jest już zapisane.';
$a->strings['No profile'] = 'Brak profilu';
$a->strings['Poke/Prod'] = 'Zaczepić';
$a->strings['poke, prod or do other things to somebody'] = 'szturchać, zaczepić lub robić inne rzeczy';
$a->strings['Choose what you wish to do to recipient'] = 'Wybierz, co chcesz zrobić';
$a->strings['Make this post private'] = 'Ustaw ten post jako prywatny';
$a->strings['Contact update failed.'] = 'Nie udało się zaktualizować kontaktu.';
$a->strings['<strong>WARNING: This is highly advanced</strong> and if you enter incorrect information your communications with this contact may stop working.'] = '<strong>OSTRZEŻENIE: Jest to bardzo zaawansowane</strong> i jeśli wprowadzisz niepoprawne informacje, twoja komunikacja z tym kontaktem może przestać działać.';
$a->strings['Please use your browser \'Back\' button <strong>now</strong> if you are uncertain what to do on this page.'] = 'Jeśli nie jesteś pewien, co zrobić na tej stronie, użyj <strong>teraz</strong> przycisku \'powrót\' na swojej przeglądarce.';
$a->strings['No mirroring'] = 'Bez dublowania';
$a->strings['Mirror as forwarded posting'] = 'Przesłany lustrzany post';
$a->strings['Mirror as my own posting'] = 'Lustro mojego własnego komentarza';
$a->strings['Return to contact editor'] = 'Wróć do edytora kontaktów';
$a->strings['Remote Self'] = 'Zdalny Self';
$a->strings['Mirror postings from this contact'] = 'Publikacje lustrzane od tego kontaktu';
$a->strings['Mark this contact as remote_self, this will cause friendica to repost new entries from this contact.'] = 'Oznacz ten kontakt jako remote_self, spowoduje to, że friendica odeśle nowe wpisy z tego kontaktu.';
$a->strings['Account Nickname'] = 'Nazwa konta';
$a->strings['@Tagname - overrides Name/Nickname'] = '@Tagname - zastępuje Imię/Pseudonim';
$a->strings['Account URL'] = 'Adres URL konta';
$a->strings['Friend Request URL'] = 'Adres URL żądający znajomości';
$a->strings['Friend Confirm URL'] = 'URL potwierdzający znajomość';
$a->strings['Notification Endpoint URL'] = 'Zgłoszenie Punktu Końcowego URL';
$a->strings['Poll/Feed URL'] = 'Adres Ankiety/RSS';
$a->strings['New photo from this URL'] = 'Nowe zdjęcie z tego adresu URL';
$a->strings['No installed applications.'] = 'Brak zainstalowanych aplikacji.';
$a->strings['Applications'] = 'Aplikacje';
$a->strings['Profile Name is required.'] = 'Nazwa profilu jest wymagana.';
$a->strings['Profile couldn\'t be updated.'] = 'Profil nie mógł zostać zaktualizowany.';
$a->strings['Label:'] = 'Etykieta:';
$a->strings['Value:'] = 'Wartość:';
$a->strings['(click to open/close)'] = '(kliknij by otworzyć/zamknąć)';
$a->strings['Profile Actions'] = 'Akcje profilowe';
$a->strings['Edit Profile Details'] = 'Edytuj informacje o profilu';
$a->strings['Change Profile Photo'] = 'Zmień zdjęcie profilowe';
$a->strings['Profile picture'] = 'Zdjęcie profilowe';
$a->strings['Location'] = 'Lokalizacja';
$a->strings['Miscellaneous'] = 'Różny';
$a->strings['Display name:'] = 'Nazwa wyświetlana:';
$a->strings['Street Address:'] = 'Ulica:';
$a->strings['Locality/City:'] = 'Miasto:';
$a->strings['Region/State:'] = 'Województwo/Stan:';
$a->strings['Postal/Zip Code:'] = 'Kod Pocztowy:';
$a->strings['Country:'] = 'Kraj:';
$a->strings['XMPP (Jabber) address:'] = 'Adres XMPP (Jabber):';
$a->strings['The XMPP address will be propagated to your contacts so that they can follow you.'] = 'Adres XMPP będzie propagowany do Twoich kontaktów, aby mogli Cię śledzić.';
$a->strings['Homepage URL:'] = 'Adres URL strony domowej:';
$a->strings['Public Keywords:'] = 'Publiczne słowa kluczowe:';
$a->strings['(Used for suggesting potential friends, can be seen by others)'] = '(Używany do sugerowania potencjalnych znajomych, jest widoczny dla innych)';
$a->strings['Private Keywords:'] = 'Prywatne słowa kluczowe:';
$a->strings['(Used for searching profiles, never shown to others)'] = '(Używany do wyszukiwania profili, niepokazywany innym)';
$a->strings['Image size reduction [%s] failed.'] = 'Redukcja rozmiaru obrazka [%s] nie powiodła się.';
$a->strings['Shift-reload the page or clear browser cache if the new photo does not display immediately.'] = 'Ponownie załaduj stronę lub wyczyść pamięć podręczną przeglądarki, jeśli nowe zdjęcie nie pojawi się natychmiast.';
$a->strings['Unable to process image'] = 'Nie udało się przetworzyć obrazu';
$a->strings['Photo not found.'] = 'Nie znaleziono zdjęcia.';
$a->strings['Profile picture successfully updated.'] = 'Zdjęcie profilowe zostało pomyślnie zaktualizowane.';
$a->strings['Crop Image'] = 'Przytnij zdjęcie';
$a->strings['Please adjust the image cropping for optimum viewing.'] = 'Dostosuj kadrowanie obrazu, aby uzyskać optymalny obraz.';
$a->strings['Use Image As Is'] = 'Użyj obrazu takim, jaki jest';
$a->strings['Missing uploaded image.'] = ' Brak przesłanego obrazu.';
$a->strings['Profile Picture Settings'] = 'Ustawienia zdjęcia profilowego';
$a->strings['Current Profile Picture'] = 'Bieżące zdjęcie profilowe';
$a->strings['Upload Profile Picture'] = 'Prześlij zdjęcie profilowe';
$a->strings['Upload Picture:'] = 'Załaduj zdjęcie:';
$a->strings['or'] = 'lub';
$a->strings['skip this step'] = 'pomiń ten krok';
$a->strings['select a photo from your photo albums'] = 'wybierz zdjęcie z twojego albumu';
$a->strings['Delegation successfully granted.'] = 'Delegacja została pomyślnie przyznana.';
$a->strings['Parent user not found, unavailable or password doesn\'t match.'] = 'Nie znaleziono użytkownika nadrzędnego, jest on niedostępny lub hasło nie pasuje.';
$a->strings['Delegation successfully revoked.'] = 'Delegacja została pomyślnie odwołana.';
$a->strings['Delegated administrators can view but not change delegation permissions.'] = 'Delegowani administratorzy mogą przeglądać uprawnienia do delegowania, ale nie mogą ich zmieniać.';
$a->strings['Delegate user not found.'] = 'Nie znaleziono delegowanego użytkownika.';
$a->strings['No parent user'] = 'Brak nadrzędnego użytkownika';
$a->strings['Parent User'] = 'Użytkownik nadrzędny';
$a->strings['Additional Accounts'] = 'Dodatkowe konta';
$a->strings['Register additional accounts that are automatically connected to your existing account so you can manage them from this account.'] = 'Zarejestruj dodatkowe konta, które są automatycznie połączone z istniejącym kontem, aby móc nimi zarządzać z tego konta.';
$a->strings['Register an additional account'] = 'Zarejestruj dodatkowe konto';
$a->strings['Parent users have total control about this account, including the account settings. Please double check whom you give this access.'] = 'Użytkownicy nadrzędni mają pełną kontrolę nad tym kontem, w tym także ustawienia konta. Sprawdź dokładnie, komu przyznasz ten dostęp.';
$a->strings['Delegates'] = 'Oddeleguj';
$a->strings['Delegates are able to manage all aspects of this account/page except for basic account settings. Please do not delegate your personal account to anybody that you do not trust completely.'] = 'Delegaci mogą zarządzać wszystkimi aspektami tego konta/strony, z wyjątkiem podstawowych ustawień konta. Nie przekazuj swojego konta osobistego nikomu, komu nie ufasz całkowicie.';
$a->strings['Existing Page Delegates'] = 'Obecni delegaci stron';
$a->strings['Potential Delegates'] = 'Potencjalni delegaci';
$a->strings['Add'] = 'Dodaj';
$a->strings['No entries.'] = 'Brak wpisów.';
$a->strings['Two-factor authentication successfully disabled.'] = 'Autoryzacja dwuskładnikowa została pomyślnie wyłączona.';
$a->strings['Wrong Password'] = 'Złe hasło';
$a->strings['<p>Use an application on a mobile device to get two-factor authentication codes when prompted on login.</p>'] = '<p>Użyj aplikacji na urządzeniu mobilnym, aby uzyskać dwuskładnikowe kody uwierzytelniające po wyświetleniu monitu o zalogowanie.</p>';
$a->strings['Authenticator app'] = 'Aplikacja Authenticator';
$a->strings['Configured'] = 'Skonfigurowane';
$a->strings['Not Configured'] = 'Nie skonfigurowane';
$a->strings['<p>You haven\'t finished configuring your authenticator app.</p>'] = '<p>Nie zakończyłeś konfigurowania aplikacji uwierzytelniającej.</p>';
$a->strings['<p>Your authenticator app is correctly configured.</p>'] = '<p>Twoja aplikacja uwierzytelniająca jest poprawnie skonfigurowana.</p>';
$a->strings['Recovery codes'] = 'Kody odzyskiwania';
$a->strings['Remaining valid codes'] = 'Pozostałe ważne kody';
$a->strings['<p>These one-use codes can replace an authenticator app code in case you have lost access to it.</p>'] = '<p>Te jednorazowe kody mogą zastąpić kod aplikacji uwierzytelniającej w przypadku utraty dostępu do niej.</p>';
$a->strings['App-specific passwords'] = 'Hasła specyficzne dla aplikacji';
$a->strings['Generated app-specific passwords'] = 'Wygenerowane hasła specyficzne dla aplikacji';
$a->strings['<p>These randomly generated passwords allow you to authenticate on apps not supporting two-factor authentication.</p>'] = '<p>Losowo generowane hasła umożliwiają uwierzytelnianie w aplikacjach nie obsługujących uwierzytelniania dwuskładnikowego.</p>';
$a->strings['Current password:'] = 'Aktualne hasło:';
$a->strings['You need to provide your current password to change two-factor authentication settings.'] = 'Musisz podać swoje aktualne hasło, aby zmienić ustawienia uwierzytelniania dwuskładnikowego.';
$a->strings['Enable two-factor authentication'] = 'Włącz uwierzytelnianie dwuskładnikowe';
$a->strings['Disable two-factor authentication'] = 'Wyłącz uwierzytelnianie dwuskładnikowe';
$a->strings['Show recovery codes'] = 'Pokaż kody odzyskiwania';
$a->strings['Manage app-specific passwords'] = 'Zarządzaj hasłami specyficznymi dla aplikacji';
$a->strings['Finish app configuration'] = 'Zakończ konfigurację aplikacji';
$a->strings['Please enter your password to access this page.'] = 'Wprowadź hasło, aby uzyskać dostęp do tej strony.';
$a->strings['Two-factor authentication successfully activated.'] = 'Uwierzytelnienie dwuskładnikowe zostało pomyślnie aktywowane.';
$a->strings['<p>Or you can submit the authentication settings manually:</p>
<dl>
	<dt>Issuer</dt>
	<dd>%s</dd>
	<dt>Account Name</dt>
	<dd>%s</dd>
	<dt>Secret Key</dt>
	<dd>%s</dd>
	<dt>Type</dt>
	<dd>Time-based</dd>
	<dt>Number of digits</dt>
	<dd>6</dd>
	<dt>Hashing algorithm</dt>
	<dd>SHA-1</dd>
</dl>'] = '<p>Możesz przesłać ustawienia uwierzytelniania ręcznie:</p>
<dl>
	<dt>Wystawc</dt>
	<dd>%s</dd>
	<dt>Nazwa konta</dt>
	<dd>%s</dd>
	<dt>Sekretny klucz</dt>
	<dd>%s</dd>
	<dt>Typ</dt>
	<dd>Oparte na czasie</dd>
	<dt>Liczba cyfr</dt>
	<dd>6</dd>
	<dt>Hashing algorytmu</dt>
	<dd>SHA-1</dd>
</dl>';
$a->strings['Two-factor code verification'] = 'Weryfikacja kodu dwuskładnikowego';
$a->strings['<p>Please scan this QR Code with your authenticator app and submit the provided code.</p>'] = '<p>Zeskanuj kod QR za pomocą aplikacji uwierzytelniającej i prześlij podany kod.</p>';
$a->strings['<p>Or you can open the following URL in your mobile devicde:</p><p><a href="%s">%s</a></p>'] = '<p>Możesz też otworzyć następujący adres URL w urządzeniu mobilnym:</p><p><a href="%s">%s</a></p>';
$a->strings['Verify code and enable two-factor authentication'] = 'Sprawdź kod i włącz uwierzytelnianie dwuskładnikowe';
$a->strings['New recovery codes successfully generated.'] = 'Wygenerowano nowe kody odzyskiwania.';
$a->strings['Two-factor recovery codes'] = 'Dwuskładnikowe kody odzyskiwania';
$a->strings['When you generate new recovery codes, you must copy the new codes. Your old codes won’t work anymore.'] = 'Kiedy generujesz nowe kody odzyskiwania, musisz skopiować nowe kody. Twoje stare kody nie będą już działać.';
$a->strings['Generate new recovery codes'] = 'Wygeneruj nowe kody odzyskiwania';
$a->strings['Next: Verification'] = 'Następny: Weryfikacja';
$a->strings['App-specific password generation failed: The description is empty.'] = 'Generowanie hasła aplikacji nie powiodło się: Opis jest pusty.';
$a->strings['App-specific password generation failed: This description already exists.'] = 'Generowanie hasła aplikacji nie powiodło się: Opis ten już istnieje.';
$a->strings['New app-specific password generated.'] = 'Nowe hasło specyficzne dla aplikacji.';
$a->strings['App-specific passwords successfully revoked.'] = 'Hasła specyficzne dla aplikacji zostały pomyślnie cofnięte.';
$a->strings['App-specific password successfully revoked.'] = 'Hasło specyficzne dla aplikacji zostało pomyślnie odwołane.';
$a->strings['Two-factor app-specific passwords'] = 'Dwuskładnikowe hasła aplikacji';
$a->strings['Description'] = 'Opis';
$a->strings['Last Used'] = 'Ostatnio używane';
$a->strings['Revoke'] = 'Unieważnij';
$a->strings['Revoke All'] = 'Unieważnij wszyskie';
$a->strings['Generate new app-specific password'] = 'Wygeneruj nowe hasło specyficzne dla aplikacji';
$a->strings['Friendiqa on my Fairphone 2...'] = 'Friendiqa na moim Fairphone 2...';
$a->strings['The theme you chose isn\'t available.'] = 'Wybrany motyw jest niedostępny.';
$a->strings['%s - (Unsupported)'] = '%s - (Nieobsługiwane)';
$a->strings['Display Settings'] = 'Ustawienia wyglądu';
$a->strings['General Theme Settings'] = 'Ogólne ustawienia motywu';
$a->strings['Custom Theme Settings'] = 'Niestandardowe ustawienia motywów';
$a->strings['Content Settings'] = 'Ustawienia zawartości';
$a->strings['Calendar'] = 'Kalendarz';
$a->strings['Display Theme:'] = 'Wyświetl motyw:';
$a->strings['Mobile Theme:'] = 'Motyw dla urządzeń mobilnych:';
$a->strings['Number of items to display per page:'] = 'Liczba elementów do wyświetlenia na stronie:';
$a->strings['Maximum of 100 items'] = 'Maksymalnie 100 elementów';
$a->strings['Number of items to display per page when viewed from mobile device:'] = 'Liczba elementów do wyświetlenia na stronie podczas przeglądania z urządzenia mobilnego:';
$a->strings['Update browser every xx seconds'] = 'Odświeżaj stronę co xx sekund';
$a->strings['Minimum of 10 seconds. Enter -1 to disable it.'] = 'Minimum 10 sekund. Wprowadź -1, aby go wyłączyć.';
$a->strings['Automatic updates only at the top of the post stream pages'] = 'Automatyczne aktualizacje tylko w górnej części stron strumienia postu';
$a->strings['Don\'t show emoticons'] = 'Nie pokazuj emotikonek';
$a->strings['Normally emoticons are replaced with matching symbols. This setting disables this behaviour.'] = 'Zazwyczaj emotikony są zastępowane pasującymi symbolami. To ustawienie wyłącza to zachowanie.';
$a->strings['Infinite scroll'] = 'Nieskończone przewijanie';
$a->strings['Automatic fetch new items when reaching the page end.'] = 'Automatyczne pobieranie nowych elementów po osiągnięciu końca strony.';
$a->strings['Disable Smart Threading'] = 'Wyłącz inteligentne wątki';
$a->strings['Hide the Dislike feature'] = 'Ukryj funkcję Nie lubię';
$a->strings['Beginning of week:'] = 'Początek tygodnia:';
$a->strings['Export account'] = 'Eksportuj konto';
$a->strings['Export your account info and contacts. Use this to make a backup of your account and/or to move it to another server.'] = 'Eksportuj informacje o swoim koncie i kontaktach. Użyj tego do utworzenia kopii zapasowej konta i/lub przeniesienia go na inny serwer.';
$a->strings['Export all'] = 'Eksportuj wszystko';
$a->strings['Export Contacts to CSV'] = 'Eksportuj kontakty do CSV';
$a->strings['Export the list of the accounts you are following as CSV file. Compatible to e.g. Mastodon.'] = 'Wyeksportuj listę kont, które obserwujesz, jako plik CSV. Kompatybilny np. Mastodont.';
$a->strings['System down for maintenance'] = 'System wyłączony w celu konserwacji';
$a->strings['%s is now following %s.'] = '%s zaczął(-ęła) obserwować %s.';
$a->strings['following'] = 'następujący';
$a->strings['%s stopped following %s.'] = '%s przestał(a) obserwować %s.';
$a->strings['stopped following'] = 'przestał śledzić';
$a->strings['Attachments:'] = 'Załączniki:';
$a->strings['%1$s, %2$s Administrator'] = '%1$s,%2$sAdministrator';
$a->strings['%s Administrator'] = '%s Administrator';
$a->strings['thanks'] = 'dziękuję';
$a->strings['Friendica Notification'] = 'Powiadomienia Friendica';
$a->strings['YYYY-MM-DD or MM-DD'] = 'RRRR-MM-DD lub MM-DD';
$a->strings['never'] = 'nigdy';
$a->strings['less than a second ago'] = 'mniej niż sekundę temu';
$a->strings['year'] = 'rok';
$a->strings['years'] = 'lata';
$a->strings['months'] = 'miesiące';
$a->strings['weeks'] = 'tygodnie';
$a->strings['days'] = 'dni';
$a->strings['hour'] = 'godzina';
$a->strings['hours'] = 'godziny';
$a->strings['minute'] = 'minuta';
$a->strings['minutes'] = 'minuty';
$a->strings['second'] = 'sekunda';
$a->strings['seconds'] = 'sekundy';
$a->strings['in %1$d %2$s'] = 'w %1$d %2$s';
$a->strings['%1$d %2$s ago'] = '%1$d %2$s temu';
$a->strings['Database storage failed to update %s'] = 'Przechowywanie bazy danych nie powiodło się %s';
$a->strings['Database storage failed to insert data'] = 'Magazyn bazy danych nie mógł wstawić danych';
$a->strings['Filesystem storage failed to create "%s". Check you write permissions.'] = 'Nie można utworzyć magazynu systemu plików "%s". Sprawdź, czy masz uprawnienia do zapisu.';
$a->strings['Filesystem storage failed to save data to "%s". Check your write permissions'] = 'Nie udało się zapisać danych w pamięci systemu plików "%s". Sprawdź swoje uprawnienia do zapisu';
$a->strings['Storage base path'] = 'Ścieżka bazy pamięci masowej';
$a->strings['Folder where uploaded files are saved. For maximum security, This should be a path outside web server folder tree'] = 'Folder, w którym zapisywane są przesłane pliki. Dla maksymalnego bezpieczeństwa, powinna to być ścieżka poza drzewem folderów serwera WWW';
$a->strings['Enter a valid existing folder'] = 'Wprowadź poprawny istniejący folder';
$a->strings['activity'] = 'aktywność';
$a->strings['post'] = 'post';
$a->strings['Content warning: %s'] = 'Ostrzeżenie o treści: %s';
$a->strings['bytes'] = 'bajty';
$a->strings['View on separate page'] = 'Zobacz na oddzielnej stronie';
$a->strings['view on separate page'] = 'zobacz na oddzielnej stronie';
$a->strings['link to source'] = 'link do źródła';
$a->strings['[no subject]'] = '[bez tematu]';
$a->strings['Drop Contact'] = 'Zakończ znajomość';
$a->strings['Organisation'] = 'Organizacja';
$a->strings['News'] = 'Aktualności';
$a->strings['Forum'] = 'Forum';
$a->strings['Connect URL missing.'] = 'Brak adresu URL połączenia.';
$a->strings['The contact could not be added. Please check the relevant network credentials in your Settings -> Social Networks page.'] = 'Nie można dodać kontaktu. Sprawdź odpowiednie poświadczenia sieciowe na stronie Ustawienia -> Sieci społecznościowe.';
$a->strings['This site is not configured to allow communications with other networks.'] = 'Ta strona nie jest skonfigurowana do pozwalania na komunikację z innymi sieciami';
$a->strings['No compatible communication protocols or feeds were discovered.'] = 'Nie znaleziono żadnych kompatybilnych protokołów komunikacyjnych ani źródeł.';
$a->strings['The profile address specified does not provide adequate information.'] = 'Dany adres profilu nie dostarcza odpowiednich informacji.';
$a->strings['An author or name was not found.'] = 'Autor lub nazwa nie zostało znalezione.';
$a->strings['No browser URL could be matched to this address.'] = 'Przeglądarka WWW nie może odnaleźć podanego adresu';
$a->strings['Unable to match @-style Identity Address with a known protocol or email contact.'] = 'Nie można dopasować @-stylu Adres identyfikacyjny ze znanym protokołem lub kontaktem e-mail.';
$a->strings['Use mailto: in front of address to force email check.'] = 'Użyj mailto: przed adresem, aby wymusić sprawdzanie poczty e-mail.';
$a->strings['The profile address specified belongs to a network which has been disabled on this site.'] = 'Określony adres profilu należy do sieci, która została wyłączona na tej stronie.';
$a->strings['Limited profile. This person will be unable to receive direct/personal notifications from you.'] = 'Profil ograniczony. Ta osoba będzie niezdolna do odbierania osobistych powiadomień od ciebie.';
$a->strings['Unable to retrieve contact information.'] = 'Nie można otrzymać informacji kontaktowych';
$a->strings['Starts:'] = 'Rozpoczęcie:';
$a->strings['Finishes:'] = 'Zakończenie:';
$a->strings['all-day'] = 'cały dzień';
$a->strings['Sept'] = 'Wrz';
$a->strings['No events to display'] = 'Brak wydarzeń do wyświetlenia';
$a->strings['l, F j'] = 'l, F j';
$a->strings['Edit event'] = 'Edytuj wydarzenie';
$a->strings['Duplicate event'] = 'Zduplikowane zdarzenie';
$a->strings['Delete event'] = 'Usuń wydarzenie';
$a->strings['D g:i A'] = 'D g:i A';
$a->strings['g:i A'] = 'g:i A';
$a->strings['Show map'] = 'Pokaż mapę';
$a->strings['Hide map'] = 'Ukryj mapę';
$a->strings['%s\'s birthday'] = '%s urodzin';
$a->strings['Happy Birthday %s'] = 'Urodziny %s';
$a->strings['Login failed'] = 'Logowanie nieudane';
$a->strings['Not enough information to authenticate'] = 'Za mało informacji do uwierzytelnienia';
$a->strings['Password can\'t be empty'] = 'Hasło nie może być puste';
$a->strings['Empty passwords are not allowed.'] = 'Puste hasła są niedozwolone.';
$a->strings['The new password has been exposed in a public data dump, please choose another.'] = 'Nowe hasło zostało ujawnione w publicznym zrzucie danych, wybierz inne.';
$a->strings['The password can\'t contain accentuated letters, white spaces or colons (:)'] = 'Hasło nie może zawierać podkreślonych liter, białych spacji ani dwukropków (:)';
$a->strings['Passwords do not match. Password unchanged.'] = 'Hasła nie pasują do siebie. Hasło niezmienione.';
$a->strings['An invitation is required.'] = 'Wymagane zaproszenie.';
$a->strings['Invitation could not be verified.'] = 'Zaproszenie niezweryfikowane.';
$a->strings['Invalid OpenID url'] = 'Nieprawidłowy adres url OpenID';
$a->strings['Please enter the required information.'] = 'Wprowadź wymagane informacje.';
$a->strings['system.username_min_length (%s) and system.username_max_length (%s) are excluding each other, swapping values.'] = 'system.username_min_length (%s) i system.username_max_length (%s) wykluczają się nawzajem, zamieniając wartości.';
$a->strings['Username should be at least %s character.'] = [
	0 => 'Nazwa użytkownika powinna wynosić co najmniej %s znaków.',
	1 => 'Nazwa użytkownika powinna wynosić co najmniej %s znaków.',
	2 => 'Nazwa użytkownika powinna wynosić co najmniej %s znaków.',
	3 => 'Nazwa użytkownika powinna wynosić co najmniej %s znaków.',
];
$a->strings['Username should be at most %s character.'] = [
	0 => 'Nazwa użytkownika nie może mieć więcej niż %s znaków.',
	1 => 'Nazwa użytkownika nie może mieć więcej niż %s znaków.',
	2 => 'Nazwa użytkownika nie może mieć więcej niż %s znaków.',
	3 => 'Nazwa użytkownika nie może mieć więcej niż %s znaków.',
];
$a->strings['That doesn\'t appear to be your full (First Last) name.'] = 'Wydaje mi się, że to nie jest twoje pełne imię (pierwsze imię) i nazwisko.';
$a->strings['Your email domain is not among those allowed on this site.'] = 'Twoja domena internetowa nie jest obsługiwana na tej stronie.';
$a->strings['Not a valid email address.'] = 'Niepoprawny adres e mail..';
$a->strings['The nickname was blocked from registration by the nodes admin.'] = 'Pseudonim został zablokowany przed rejestracją przez administratora węzłów.';
$a->strings['Cannot use that email.'] = 'Nie można użyć tego e-maila.';
$a->strings['Your nickname can only contain a-z, 0-9 and _.'] = 'Twój pseudonim może zawierać tylko a-z, 0-9 i _.';
$a->strings['Nickname is already registered. Please choose another.'] = 'Ten login jest zajęty. Wybierz inny.';
$a->strings['SERIOUS ERROR: Generation of security keys failed.'] = 'POWAŻNY BŁĄD: niepowodzenie podczas tworzenia kluczy zabezpieczeń.';
$a->strings['An error occurred during registration. Please try again.'] = 'Wystąpił bład podczas rejestracji, Spróbuj ponownie.';
$a->strings['An error occurred creating your default profile. Please try again.'] = 'Wystąpił błąd podczas tworzenia profilu. Spróbuj ponownie.';
$a->strings['An error occurred creating your self contact. Please try again.'] = 'Wystąpił błąd podczas tworzenia własnego kontaktu. Proszę spróbuj ponownie.';
$a->strings['Friends'] = 'Przyjaciele';
$a->strings['An error occurred creating your default contact group. Please try again.'] = 'Wystąpił błąd podczas tworzenia domyślnej grupy kontaktów. Proszę spróbuj ponownie.';
$a->strings['
		Dear %1$s,
			the administrator of %2$s has set up an account for you.'] = '
		Szanowna/y %1$s,
			administrator of %2$s założył dla Ciebie konto.';
$a->strings['Registration details for %s'] = 'Szczegóły rejestracji dla %s';
$a->strings['
			Dear %1$s,
				Thank you for registering at %2$s. Your account is pending for approval by the administrator.

			Your login details are as follows:

			Site Location:	%3$s
			Login Name:		%4$s
			Password:		%5$s
		'] = '
			Szanowny Użytkowniku %1$s,
				Dziękujemy za rejestrację na stronie %2$s. Twoje konto czeka na zatwierdzenie przez administratora.

			Twoje dane do logowania są następujące:

			Lokalizacja witryny:	%3$s
			Nazwa użytkownika:		%4$s
			Hasło:		%5$s
		';
$a->strings['Registration at %s'] = 'Rejestracja w %s';
$a->strings['
				Dear %1$s,
				Thank you for registering at %2$s. Your account has been created.
			'] = '
				Szanowna/y %1$s,
				Dziękujemy za rejestrację w %2$s. Twoje konto zostało utworzone.
			';
$a->strings['
			The login details are as follows:

			Site Location:	%3$s
			Login Name:		%1$s
			Password:		%5$s

			You may change your password from your account "Settings" page after logging
			in.

			Please take a few moments to review the other account settings on that page.

			You may also wish to add some basic information to your default profile
			(on the "Profiles" page) so that other people can easily find you.

			We recommend setting your full name, adding a profile photo,
			adding some profile "keywords" (very useful in making new friends) - and
			perhaps what country you live in; if you do not wish to be more specific
			than that.

			We fully respect your right to privacy, and none of these items are necessary.
			If you are new and do not know anybody here, they may help
			you to make some new and interesting friends.

			If you ever want to delete your account, you can do so at %3$s/removeme

			Thank you and welcome to %2$s.'] = '
			Dane logowania są następuje:
			Lokalizacja witryny:	%3$s
			Nazwa użytkownika:		%1$s
			Hasło:		%5$s

			Po zalogowaniu możesz zmienić hasło do swojego konta na stronie "Ustawienia".
 			Proszę poświęć chwilę, aby przejrzeć inne ustawienia konta na tej stronie.

			Możesz również dodać podstawowe informacje do swojego domyślnego profilu
			(na stronie "Profil użytkownika"), aby inne osoby mogły łatwo Cię znaleźć.

			Zalecamy ustawienie imienia i nazwiska, dodanie zdjęcia profilowego,
			dodanie niektórych "słów kluczowych" profilu (bardzo przydatne w nawiązywaniu nowych znajomości) 
			i być może gdzie mieszkasz; jeśli nie chcesz podać więcej szczegów.

			W pełni szanujemy Twoje prawo do prywatności i żaden z tych elementów nie jest konieczny.
			Jeśli jesteś nowy i nie znasz tutaj nikogo, oni mogą ci pomóc
			możesz zdobyć nowych interesujących przyjaciół.

			Jeśli kiedykolwiek zechcesz usunąć swoje konto, możesz to zrobić na stronie %3$s/removeme

			Dziękujemy i Zapraszamy do %2$s.';
$a->strings['A deleted group with this name was revived. Existing item permissions <strong>may</strong> apply to this group and any future members. If this is not what you intended, please create another group with a different name.'] = 'Skasowana grupa o tej nazwie została przywrócona. Istniejące uprawnienia do pozycji <strong>mogą</strong> dotyczyć tej grupy i wszystkich przyszłych członków. Jeśli nie jest to zamierzone, utwórz inną grupę o innej nazwie.';
$a->strings['Default privacy group for new contacts'] = 'Domyślne ustawienia prywatności dla nowych kontaktów';
$a->strings['Everybody'] = 'Wszyscy';
$a->strings['edit'] = 'edytuj';
$a->strings['add'] = 'dodaj';
$a->strings['Edit group'] = 'Edytuj grupy';
$a->strings['Create a new group'] = 'Stwórz nową grupę';
$a->strings['Edit groups'] = 'Edytuj grupy';
$a->strings['Change profile photo'] = 'Zmień zdjęcie profilowe';
$a->strings['Atom feed'] = 'Kanał Atom';
$a->strings['g A l F d'] = 'g A I F d';
$a->strings['F d'] = 'F d';
$a->strings['[today]'] = '[dziś]';
$a->strings['Birthday Reminders'] = 'Przypomnienia o urodzinach';
$a->strings['Birthdays this week:'] = 'Urodziny w tym tygodniu:';
$a->strings['[No description]'] = '[Brak opisu]';
$a->strings['Event Reminders'] = 'Przypominacze wydarzeń';
$a->strings['Upcoming events the next 7 days:'] = 'Nadchodzące wydarzenia w ciągu następnych 7 dni:';
$a->strings['OpenWebAuth: %1$s welcomes %2$s'] = 'OpenWebAuth: %1$s wita %2$s';
$a->strings['Add New Contact'] = 'Dodaj nowy kontakt';
$a->strings['Enter address or web location'] = 'Wpisz adres lub lokalizację sieciową';
$a->strings['Example: bob@example.com, http://example.com/barbara'] = 'Przykład: bob@przykład.com, http://przykład.com/barbara';
$a->strings['Connect'] = 'Połącz';
$a->strings['%d invitation available'] = [
	0 => '%d zaproszenie dostępne',
	1 => '%d zaproszeń dostępnych',
	2 => '%d zaproszenia dostępne',
	3 => '%d zaproszenia dostępne',
];
$a->strings['Everyone'] = 'Wszyscy';
$a->strings['Relationships'] = 'Relacje';
$a->strings['Protocols'] = 'Protokoły';
$a->strings['All Protocols'] = 'Wszystkie protokoły';
$a->strings['Saved Folders'] = 'Zapisz w folderach';
$a->strings['Everything'] = 'Wszystko';
$a->strings['Categories'] = 'Kategorie';
$a->strings['%d contact in common'] = [
	0 => '%d wspólny kontakt',
	1 => '%d wspólne kontakty',
	2 => '%d wspólnych kontaktów',
	3 => '%dwspólnych kontaktów',
];
$a->strings['Archives'] = 'Archiwum';
$a->strings['Frequently'] = 'Często';
$a->strings['Hourly'] = 'Co godzinę';
$a->strings['Twice daily'] = 'Dwa razy dziennie';
$a->strings['Daily'] = 'Codziennie';
$a->strings['Weekly'] = 'Co tydzień';
$a->strings['Monthly'] = 'Miesięczne';
$a->strings['DFRN'] = 'DFRN';
$a->strings['OStatus'] = 'OStatus';
$a->strings['RSS/Atom'] = 'RSS/Atom';
$a->strings['Zot!'] = 'Zot!';
$a->strings['LinkedIn'] = 'LinkedIn';
$a->strings['XMPP/IM'] = 'XMPP/IM';
$a->strings['MySpace'] = 'MySpace';
$a->strings['Google+'] = 'Google+';
$a->strings['pump.io'] = 'pump.io';
$a->strings['Twitter'] = 'Twitter';
$a->strings['Discourse'] = 'Rozmowa';
$a->strings['Diaspora Connector'] = 'Łącze Diaspora';
$a->strings['GNU Social Connector'] = 'Łącze GNU Social';
$a->strings['ActivityPub'] = 'Pub aktywności';
$a->strings['pnut'] = 'orzech';
$a->strings['%s (via %s)'] = '%s (przez %s)';
$a->strings['General Features'] = 'Funkcje ogólne';
$a->strings['Photo Location'] = 'Lokalizacja zdjęcia';
$a->strings['Photo metadata is normally stripped. This extracts the location (if present) prior to stripping metadata and links it to a map.'] = 'Metadane zdjęć są zwykle usuwane. Wyodrębnia to położenie (jeśli jest obecne) przed usunięciem metadanych i łączy je z mapą.';
$a->strings['Trending Tags'] = 'Popularne tagi';
$a->strings['Show a community page widget with a list of the most popular tags in recent public posts.'] = 'Pokaż widżet strony społeczności z listą najpopularniejszych tagów w ostatnich postach publicznych.';
$a->strings['Post Composition Features'] = 'Ustawienia funkcji postów';
$a->strings['Auto-mention Forums'] = 'Automatyczne wymienianie forów';
$a->strings['Add/remove mention when a forum page is selected/deselected in ACL window.'] = 'Dodaj/usuń wzmiankę, gdy strona forum zostanie wybrana/cofnięta w oknie ACL.';
$a->strings['Add explicit mentions to comment box for manual control over who gets mentioned in replies.'] = 'Dodaj wyraźne wzmianki do pola komentarza, aby ręcznie kontrolować, kto zostanie wymieniony w odpowiedziach.';
$a->strings['Post/Comment Tools'] = 'Narzędzia post/komentarz';
$a->strings['Post Categories'] = 'Kategorie postów';
$a->strings['Add categories to your posts'] = 'Umożliwia dodawanie kategorii do twoich postów';
$a->strings['Advanced Profile Settings'] = 'Zaawansowane ustawienia profilu';
$a->strings['List Forums'] = 'Lista forów';
$a->strings['Show visitors public community forums at the Advanced Profile Page'] = 'Wyświetla publiczne fora społeczności na stronie profilu zaawansowanego';
$a->strings['Tag Cloud'] = 'Chmura tagów';
$a->strings['Provide a personal tag cloud on your profile page'] = 'Podaj osobistą chmurę tagów na stronie profilu';
$a->strings['Display Membership Date'] = 'Wyświetl datę członkostwa';
$a->strings['Display membership date in profile'] = 'Wyświetla datę członkostwa w profilu';
$a->strings['Nothing new here'] = 'Brak nowych zdarzeń';
$a->strings['Clear notifications'] = 'Wyczyść powiadomienia';
$a->strings['@name, !forum, #tags, content'] = '@imię, !forum, #tagi, treść';
$a->strings['End this session'] = 'Zakończ sesję';
$a->strings['Sign in'] = 'Zaloguj się';
$a->strings['Personal notes'] = 'Notatki';
$a->strings['Your personal notes'] = 'Twoje prywatne notatki';
$a->strings['Home'] = 'Strona domowa';
$a->strings['Home Page'] = 'Strona startowa';
$a->strings['Create an account'] = 'Załóż konto';
$a->strings['Help and documentation'] = 'Pomoc i dokumentacja';
$a->strings['Apps'] = 'Aplikacje';
$a->strings['Addon applications, utilities, games'] = 'Wtyczki, aplikacje, narzędzia, gry';
$a->strings['Search site content'] = 'Przeszukaj zawartość strony';
$a->strings['Full Text'] = 'Pełny tekst';
$a->strings['Tags'] = 'Tagi';
$a->strings['Community'] = 'Społeczność';
$a->strings['Conversations on this and other servers'] = 'Rozmowy na tym i innych serwerach';
$a->strings['Directory'] = 'Katalog';
$a->strings['People directory'] = 'Katalog osób';
$a->strings['Information about this friendica instance'] = 'Informacje o tej instancji friendica';
$a->strings['Terms of Service of this Friendica instance'] = 'Warunki świadczenia usług tej instancji Friendica';
$a->strings['Introductions'] = 'Zapoznanie';
$a->strings['Friend Requests'] = 'Prośba o przyjęcie do grona znajomych';
$a->strings['See all notifications'] = 'Zobacz wszystkie powiadomienia';
$a->strings['Mark all system notifications seen'] = 'Oznacz wszystkie powiadomienia systemu jako przeczytane';
$a->strings['Inbox'] = 'Odebrane';
$a->strings['Outbox'] = 'Wysłane';
$a->strings['Accounts'] = 'Konto';
$a->strings['Manage other pages'] = 'Zarządzaj innymi stronami';
$a->strings['Site setup and configuration'] = 'Konfiguracja i ustawienia instancji';
$a->strings['Navigation'] = 'Nawigacja';
$a->strings['Site map'] = 'Mapa strony';
$a->strings['Remove term'] = 'Usuń wpis';
$a->strings['Saved Searches'] = 'Zapisywanie wyszukiwania';
$a->strings['Export'] = 'Eksport';
$a->strings['Export calendar as ical'] = 'Wyeksportuj kalendarz jako ical';
$a->strings['Export calendar as csv'] = 'Eksportuj kalendarz jako csv';
$a->strings['More Trending Tags'] = 'Więcej popularnych tagów';
$a->strings['No contacts'] = 'Brak kontaktów';
$a->strings['%d Contact'] = [
	0 => '%d kontakt',
	1 => '%d kontaktów',
	2 => '%d kontakty',
	3 => '%d Kontakty',
];
$a->strings['View Contacts'] = 'Widok kontaktów';
$a->strings['newer'] = 'nowsze';
$a->strings['older'] = 'starsze';
$a->strings['Embedding disabled'] = 'Osadzanie wyłączone';
$a->strings['Embedded content'] = 'Osadzona zawartość';
$a->strings['prev'] = 'poprzedni';
$a->strings['last'] = 'ostatni';
$a->strings['Loading more entries...'] = 'Ładuję więcej wpisów...';
$a->strings['The end'] = 'Koniec';
$a->strings['Click to open/close'] = 'Kliknij aby otworzyć/zamknąć';
$a->strings['Image/photo'] = 'Obrazek/zdjęcie';
$a->strings['<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s'] = '<a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a> %3$s';
$a->strings['$1 wrote:'] = '$1 napisał:';
$a->strings['Encrypted content'] = 'Szyfrowana treść';
$a->strings['Invalid source protocol'] = 'Nieprawidłowy protokół źródłowy';
$a->strings['Invalid link protocol'] = 'Niepoprawny link protokołu';
$a->strings['The form security token was not correct. This probably happened because the form has been opened for too long (>3 hours) before submitting it.'] = 'Znacznik zabezpieczeń formularza nie był poprawny. Prawdopodobnie stało się tak, ponieważ formularz został otwarty zbyt długo (> 3 godziny) przed jego przesłaniem.';
