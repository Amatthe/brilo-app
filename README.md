# brilo-test
Webová aplikace zobrazující periodicky obnovovaná data o cenách Bitcoinu na základě dat třetí strany.

## Použité nástroje
Framework Laravel 8

## Soubory ke kontrole
Úpravy důležité pro běh aplikace jsem provedl v následujících souborech:

### Routes/web.php
Nastavení routování na hlavní a testovací stránku.

### app/Http/ViewController.php
Inicializace třídy pro ukládání souborů.
Funkce zobrazení indexu (view).

-Otevření konfiguračního JSON souboru a přiřazení do proměnných, které jsou dále posílány do view.

-Získání JSON dat z adresy uvedené v konfiguračním souboru.

-Compactování dat určených k propsání do view.

-Samotné zobrazení view.

### resources/views
Ve složce **layout** soubor **app.blade.php** obsahuje šablonu záhlaví a zápatí stránky. Obnovení obstarává element meta http-equiv="refresh".

Soubor **index.blade.php** vypisuje do HTML/Blade šablony data získaná z controlleru.

### storage/app/configuration.json
Konfigurační soubor pro nastavení API.

### Ostatní
Soubor **app/Http/TestController** obsahuje historii dílčích testů. 

Soubor **resources/views/test.blade.php** je určený pro zobrazování výsledků testů, je-li potřeba.
