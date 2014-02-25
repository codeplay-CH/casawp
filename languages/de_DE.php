<?php 
    add_filter( 'gettext', 'plugin_translation', 20, 3 );
    function plugin_translation( $translated_text, $text, $domain ) {
        //echo "<pre>" . $text . "</pre>";
        if ( $domain == 'casasync') {

            switch ( $text ) {

               


                case 'Buy':  $translated_text = 'Kaufen';break;
                case 'Rent': $translated_text = 'Mieten';break;

                case 'First name':          $translated_text = 'Vorname';break;
                case 'Last name':           $translated_text = 'Nachname';break;
                case 'Email':               $translated_text = 'E-Mail';break;
                case 'Salutation':          $translated_text = 'Anrede';break;
                case 'Title':               $translated_text = 'Titel';break;
                case 'Phone':               $translated_text = 'Telefon';break;
                case 'Company':             $translated_text = 'Firma';break;
                case 'Street':              $translated_text = 'Strasse';break;
                case 'ZIP':                 $translated_text = 'PLZ';break;
                case 'City':                $translated_text = 'Stadt';break;
                //case 'Locality':            $translated_text = 'Ort';break;
                case 'Kanton':              $translated_text = 'Kanton';break;
                case 'Subject':             $translated_text = 'Betreff';break;
                case 'Message':             $translated_text = 'Nachricht';break;
                case 'Recipient':           $translated_text = 'Rezipient';break;
                case 'Required':            $translated_text = 'Erforderlich';break;
                case '&larr; Page back':    $translated_text = '&larr; Seite zurück';break;
                case 'Page forward &rarr;': $translated_text = 'nächste Seite &rarr;';break;
                case 'Please consider the following errors and try sending it again': $translated_text = 'Folgende Fehler sind aufgetreten. Bitte überprüfen Sie die Eingabefelder.';break;

                case 'Switzerland':         $translated_text = 'Schweiz';break;
                case 'Italy':               $translated_text = 'Italien';break;
                case 'France':              $translated_text = 'Frankreich';break;
                case 'monthly':             $translated_text = 'monatlich';break;
                case 'weekly':              $translated_text = 'wöchentlich';break;
                case 'daily':               $translated_text = 'täglich';break;
                case 'yearly':              $translated_text = 'jährlich';break;
                case 'hourly':              $translated_text = 'stündlich';break;
                case 'month':               $translated_text = 'Monat';break;
                case 'week':                $translated_text = 'Woche';break;
                case 'day':                 $translated_text = 'Tag';break;
                case 'year':                $translated_text = 'Jahr';break;
                case 'per month':           $translated_text = 'pro Monat';break;
                case 'per week':            $translated_text = 'pro Woche';break;
                case 'per day':             $translated_text = 'pro Tag';break;
                case 'per year':            $translated_text = 'pro Jahr';break;
                case 'per hour':            $translated_text = 'pro Stunde';break;
                case 'Base data':           $translated_text = 'Grunddaten';break;
                case 'Plans & Documents':   $translated_text = 'Pläne & Dokumente';break;
                case 'Rooms:':              $translated_text = 'Zimmer:';break;
                case 'Rooms':               $translated_text = 'Zimmer';break;
                case 'Living space':        $translated_text = 'Wohnfläche';break;
                case 'Floor':               $translated_text = 'Etage';break;
                case 'Rent price:':         $translated_text = 'Mietpreis:';break;
                case 'Object ID':           $translated_text = 'Objekt-ID';break;
                case 'Floor(s)':            $translated_text = 'Stockwerk(e)';break;



                case 'Surroundings': $translated_text = 'Umfeld';break;
                case 'Distances:':   $translated_text = 'Distanzen:';break;
                case 'Plans':        $translated_text = 'Pläne';break;


                case 'Public transportation': $translated_text = 'Öffentlicher Verkehr';break;
                case 'Shopping':              $translated_text = 'Einkaufen';break;
                case 'Kindergarten':          $translated_text = 'Kindergarten';break;
                case 'Rail connection':       $translated_text = 'Bahnanschluss';break;
                case 'Motorway':              $translated_text = 'Autobahnanschluss';break;
                case 'Primary school':        $translated_text = 'Primarschule';break;
                case 'Secondary school':      $translated_text = 'Oberstufe';break;

                case 'Property space':        $translated_text = 'Grundstücksfläche';break;
                case 'Year of renovation':    $translated_text = 'Letzte Renovation';break;
                case 'Year of construction':  $translated_text = 'Baujahr';break;
                case 'Number of rooms':       $translated_text = 'Anzahl Zimmer';break;
                case 'Number of floors':      $translated_text = 'Anzahl Etagen';break;
                
                case 'Directly contact the provider now': $translated_text = 'Jetzt Anbieter direkt kontaktieren';break;
                case 'Back to the list':                  $translated_text = 'Zurück zur Übersicht';break;


                case 'Please fill out all the fields': $translated_text = 'Bitte alle Felder ausfüllen.';break;
                case 'Send':                           $translated_text = 'Senden';break;
                case 'Contact directly':               $translated_text = 'Direkt kontaktieren';break;

                case 'Provider':           $translated_text = 'Anbieter';break;
                case 'Seller':             $translated_text = 'Verkäufer';break;

                case 'Choose category': $translated_text = 'Kategorie wählen';break;
                case 'Choose locality': $translated_text = 'Ort wählen';break;
                case 'Choose offer':    $translated_text = 'Angebot wählen';break;

                case 'Advanced search': $translated_text = 'Erweiterte Suche';break;
                case 'Search':          $translated_text = 'Suchen';break;
                case 'Details':         $translated_text = 'Details';break;

                case 'and': $translated_text = 'und';break;




                case 'Wheelchair accessible': $translated_text = 'Rollstuhlzugänglich'; break;
                case 'Entrances': $translated_text = 'Eingänge';break;

                case 'Child friendly':          $translated_text = 'Kinderfreundlich';break;
                case 'Garage':                  $translated_text = 'Garage';break;
                case '%d garages':              $translated_text = '%d Garagen';break;
                case 'Balcony':                 $translated_text = 'Balkon';break;
                case '%d balconies':            $translated_text = '%dx Balkone';break;
                case 'ISDN connection':         $translated_text = 'ISDN Anschluss';break;
                case 'Vista':                   $translated_text = 'Aussicht';break;
                case 'Cable TV':                $translated_text = 'Kabelfernsehen';break;
                case '% Parking spaces':        $translated_text = '%d Parkplätze';break;
                case 'Parking space':           $translated_text = 'Parkplatz';break;
                case 'Pets allowed':            $translated_text = 'Haustiere erlaubt';break;
                case '%d pets allowed':         $translated_text = '%d Haustiere erlaubt';break;
                case 'Restrooms':               $translated_text = 'Toiletten';break;
                case '%d restrooms':            $translated_text = '%d Toiletten';break;
                case 'Elevator':                $translated_text = 'Lift / Aufzug';break;
                case '%d elevators':            $translated_text = '%d Lifte / Aufzüge';break;



                case 'Agriculture':        $translated_text = 'Landwirtschaft';break;
                case 'Apartment':          $translated_text = 'Wohnung';break;
                case 'Gastronomy':         $translated_text = 'Gastronomie';break;
                case 'House':              $translated_text = 'Haus';break;
                case 'Industrial Objects': $translated_text = 'Gewerbe/Industrie';break;
                case 'Industrial':         $translated_text = 'Gewerbe/Industrie';break;
                case 'Plot':               $translated_text = 'Grundstück';break;
                case 'Secondary rooms':    $translated_text = 'Wohnnebenräume';break;
                case 'Garden':             $translated_text = 'Garten';break;
                case 'Commercial':         $translated_text = 'Büro';break;


                case 'Available:':         $translated_text = 'Verfügbar:';break;
                case 'Reserved':           $translated_text = 'Reserviert';break;
                case 'Planned':            $translated_text = 'In Planung';break;
                case 'Under construction': $translated_text = 'Im Bau';break;




                /* New */
                case 'Agricultural installation': $translated_text = 'Landwirtschaftsbetrieb';break;
                case 'Mountain farm':             $translated_text = 'Alpwirtschaft';break;
                case 'Farm':                      $translated_text = 'Farm';break;

                case 'Duplex':         $translated_text = 'Maisonette / Duplex';break;
                case 'Attic flat':     $translated_text = 'Attikawohnung';break;
                case 'Roof flat':      $translated_text = 'Dachwohnung';break;
                case 'Studio':         $translated_text = 'Studio';break;
                case 'Single Room':    $translated_text = 'Einzelzimmer';break;
                case 'Furnished flat': $translated_text = 'Möbl. Wohnobj.';break;
                case 'Terrace flat':   $translated_text = 'Terrassenwohnung';break;
                case 'Bachelor flat':  $translated_text = 'Einliegerwohnung';break;
                case 'Loft':           $translated_text = 'Loft';break;
                case 'Attic':          $translated_text = 'Mansarde';break;

                case 'Alottment garden': $translated_text = 'Schrebergarten';break;

                case 'Hotel':                     $translated_text = 'Hotel';break;
                case 'Restaurant':                $translated_text = 'Restaurant';break;
                case 'Coffeehouse':               $translated_text = 'Café';break;
                case 'Bar':                       $translated_text = 'Bar';break;
                case 'Club / Disco':              $translated_text = 'Club / Disco';break;
                case 'Casino':                    $translated_text = 'Casino';break;
                case 'Movie / theater':           $translated_text = 'Kino / Theater';break;
                case 'Squash / Badminton':        $translated_text = 'Squash / Badminton';break;
                case 'Indoor tennis courts':      $translated_text = 'Tennishalle';break;
                case 'Tennis court':              $translated_text = 'Tennisplatz';break;
                case 'Sports hall':               $translated_text = 'Sportanlage';break;
                case 'Campground / Tent camping': $translated_text = 'Camping- / Zeltplatz';break;
                case 'Outdoor swimming pool':     $translated_text = 'Freibad';break;
                case 'Indoor swimmingpool':       $translated_text = 'Hallenbad';break;
                case 'Golf course':               $translated_text = 'Golfplatz';break;
                case 'Motel':                     $translated_text = 'Motel';break;
                case 'Pub':                       $translated_text = 'Pub';break;

                case 'Single house':               $translated_text = 'Einfamilienhaus';break;
                case 'Row house':                  $translated_text = 'Reihenfamilienhaus';break;
                case 'Bifamiliar house':           $translated_text = 'Doppeleinfamilienhaus';break;
                case 'Terrace house':              $translated_text = 'Terrassenhaus';break;
                case 'Villa':                      $translated_text = 'Villa';break;
                case 'Farm house':                 $translated_text = 'Bauernhaus';break;
                case 'Multiple dwelling':          $translated_text = 'Mehrfamilienhaus';break;
                case 'Cave house / earthen house': $translated_text = 'Höhlen- / Erdhaus';break;
                case 'Castle':                     $translated_text = 'Schloss';break;
                case 'Granny flat':                $translated_text = 'Stöckli';break;
                case 'Chalet':                     $translated_text = 'Chalet';break;
                case 'Rustic house':               $translated_text = 'Rustico';break;

                case 'Office':                       $translated_text = 'Büro';break;
                case 'Shop':                         $translated_text = 'Ladenfläche';break;
                case 'Advertising area':             $translated_text = 'Werbefläche';break;
                case 'Storage room':                 $translated_text = 'Lager';break;
                case 'Practice':                     $translated_text = 'Praxis';break;
                case 'Kiosk':                        $translated_text = 'Kiosk';break;
                case 'Gardening':                    $translated_text = 'Gärtnerei';break;
                case 'Fuel station':                 $translated_text = 'Tankstelle';break;
                case 'Garage':                       $translated_text = 'Autogarage';break;
                case 'Cheese factory':               $translated_text = 'Käserei';break;
                case 'Butcher':                      $translated_text = 'Metzgerei';break;
                case 'Bakery':                       $translated_text = 'Bäckerei';break;
                case 'Hairdresser':                  $translated_text = 'Coiffeursalon';break;
                case 'Shopping centre':              $translated_text = 'Shoppingcenter';break;
                case 'Factory':                      $translated_text = 'Fabrik';break;
                case 'Industrial object':            $translated_text = 'Industrieobjekt';break;
                case 'Arcade':                       $translated_text = 'Arcade';break;
                case 'Atelier':                      $translated_text = 'Atelier';break;
                case 'Living / commercial building': $translated_text = 'Wohn- / Geschäftshaus';break;
                case 'Library':                      $translated_text = 'Bücherei';break;
                case 'Hospital':                     $translated_text = 'Krankenhaus';break;
                case 'Laboratory':                   $translated_text = 'Labor';break;
                case 'Mini-golf course':             $translated_text = 'Minigolfplatz';break;
                case 'nursing home':                 $translated_text = 'Pflegeheim';break;
                case 'Riding hall':                  $translated_text = 'Reithalle';break;
                case 'Sanatorium':                   $translated_text = 'Sanatorium';break;
                case 'Workshop':                     $translated_text = 'Werkstatt';break;
                case 'Party room':                   $translated_text = 'Partyraum';break;
                case 'Sauna':                        $translated_text = 'Sauna';break;
                case 'Solarium':                     $translated_text = 'Solarium';break;
                case 'Carpentry shop':               $translated_text = 'Schreinerei';break;
                case 'Old-age home':                 $translated_text = 'Altersheim';break;
                case 'Department store':             $translated_text = 'Geschäftshaus';break;
                case 'Home':                         $translated_text = 'Heim';break;
                case 'Display window':               $translated_text = 'Schaufenster';break;
                case 'Parking garage':               $translated_text = 'Parkhaus';break;
                case 'Parking surface':              $translated_text = 'Parkfläche';break;

                case 'Open slot':                  $translated_text = 'offener Parkplatz';break;
                case 'Covered slot':               $translated_text = 'Unterstand';break;
                case 'Single garage':              $translated_text = 'Einzelgarage';break;
                case 'Double garage':              $translated_text = 'Doppelgarage';break;
                case 'Underground slot':           $translated_text = 'Tiefgarage';break;
                case 'Boat dry dock':              $translated_text = 'Boot Hallenplatz';break;
                case 'Boat landing stage':         $translated_text = 'Boot Stegplatz';break;
                case 'Covered parking place bike': $translated_text = 'Moto Hallenplatz';break;
                case 'Outdoor parking place bike': $translated_text = 'Moto Aussenplatz';break;
                case 'Horse box':                  $translated_text = 'Stallboxe';break;
                case 'Boat mooring':               $translated_text = 'Boot Bojenplatz';break;

                case 'Building land':     $translated_text = 'Bauland';break;
                case 'Agricultural land': $translated_text = 'Agrarland';break;
                case 'Commercial land':   $translated_text = 'Gewerbeland';break;
                case 'Industrial land':   $translated_text = 'Industriebauland';break;

                case 'Hobby room':         $translated_text = 'Hobbyraum';break;
                case 'Cellar compartment': $translated_text = 'Kellerabteil';break;
                case 'Attic compartment':  $translated_text = 'Estrichabteil';break;

                case 'Floor':                       $translated_text = 'Etage';break;
                case 'Number of apartments':        $translated_text = 'Anzahl Wohnungen';break;
                case 'Surface usable':              $translated_text = 'Nutzfläche';break;
                case 'Ceiling height':              $translated_text = 'Raumhöhe';break;
                case 'Hall height':                 $translated_text = 'Hallenhöhe';break;
                case 'Maximal floor loading':       $translated_text = 'Max. Bodenbelastung';break;
                case 'Carrying capacity crane':     $translated_text = 'Max. Gewicht Kran';break;
                case 'Carrying capacity elevator':  $translated_text = 'Max. Gewicht Warenlift';break;
                case 'Volume':                      $translated_text = 'Kubatur';break;

                case 'available':           $translated_text = 'Verfügbar';break;
                case 'reserved':            $translated_text = 'Reserved';break;
                case 'planned':             $translated_text = 'In Planung';break;
                case 'under-construction':  $translated_text = 'Im Bau';break;
                case 'reference':           $translated_text = 'Referenz';break;
                case 'No image':            $translated_text = 'Kein Bild';break;
                case 'No results':          $translated_text = 'Keine Suchergebnisse';break;
                case '(net)':               $translated_text = '(Netto)';break;
                case '(gross)':             $translated_text = '(Brutto)';break;
                case 'On Request':          $translated_text = 'Auf Anfrage';break;
                case 'By Agreement':        $translated_text = 'Nach Vereinbarung';break;
                case 'Immediate':           $translated_text = 'Sofort';break;

                case 'Floor':               $translated_text = 'OG';break;
                case 'Country':             $translated_text = 'Land';break;

                case 'Nothing Found': $translated_text = 'Nichts gefunden';break;
                case 'Sorry, but nothing matched your search terms. Please try again with some different keywords.': $translated_text = 'Es tut uns leid, aber auf ihre Suchanfrage gab es keine Treffer. Bitte versuchen Sie es mit anderen Suchbegriffen.';break;


                case 'Ascension': $translated_text = 'Ascension';break;
                case 'Andorra': $translated_text = 'Andorra';break;
                case 'United Arab Emirates': $translated_text = 'Vereinigte Arabische Emirate';break;
                case 'Afghanistan': $translated_text = 'Afghanistan';break;
                case 'Antigua and Barbuda': $translated_text = 'Antigua und Barbuda';break;
                case 'Anguilla': $translated_text = 'Anguilla';break;
                case 'Albania': $translated_text = 'Albanien';break;
                case 'Armenia': $translated_text = 'Armenien';break;
                case 'Netherlands Antilles': $translated_text = 'Niederländische Antillen';break;
                case 'Angola': $translated_text = 'Angola';break;
                case 'Antarctica': $translated_text = 'Antarktis';break;
                case 'Argentina': $translated_text = 'Argentinien';break;
                case 'American Samoa': $translated_text = 'Amerikanisch-Samoa';break;
                case 'Austria': $translated_text = 'Österreich';break;
                case 'Australia': $translated_text = 'Australien';break;
                case 'Aruba': $translated_text = 'Aruba';break;
                case 'Åland Islands': $translated_text = 'Aland';break;
                case 'Azerbaijan': $translated_text = 'Aserbaidschan';break;
                case 'Bosnia and Herzegovina': $translated_text = 'Bosnien und Herzegowina';break;
                case 'Barbados': $translated_text = 'Barbados';break;
                case 'Bangladesh': $translated_text = 'Bangladesch';break;
                case 'Belgium': $translated_text = 'Belgien';break;
                case 'Burkina Faso': $translated_text = 'Burkina Faso';break;
                case 'Bulgaria': $translated_text = 'Bulgarien';break;
                case 'Bahrain': $translated_text = 'Bahrain';break;
                case 'Burundi': $translated_text = 'Burundi';break;
                case 'Benin': $translated_text = 'Benin';break;
                case 'Bermuda': $translated_text = 'Bermuda';break;
                case 'Brunei Darussalam': $translated_text = 'Brunei';break;
                case 'Bolivia, Plurinational State of': $translated_text = 'Bolivien';break;
                case 'Brazil': $translated_text = 'Brasilien';break;
                case 'Bahamas': $translated_text = 'Bahamas';break;
                case 'Bhutan': $translated_text = 'Bhutan';break;
                case 'Bouvet Island': $translated_text = 'Bouvetinsel';break;
                case 'Botswana': $translated_text = 'Botswana';break;
                case 'Belarus': $translated_text = 'Weißrussland';break;
                case 'Belize': $translated_text = 'Belize';break;
                case 'Canada': $translated_text = 'Kanada';break;
                case 'Cocos (Keeling) Islands': $translated_text = 'Kokosinseln';break;
                case 'Congo, the Democratic Republic of the': $translated_text = 'Kongo, Demokratische Republik';break;
                case 'Central African Republic': $translated_text = 'Zentralafrikanische Republik';break;
                case 'Congo': $translated_text = 'Kongo, Republik';break;
                case 'Switzerland': $translated_text = 'Schweiz';break;
                case "Côte d'Ivoire": $translated_text = "Cote d'Ivoire";break;
                case 'Cook Islands': $translated_text = 'Cookinseln';break;
                case 'Chile': $translated_text = 'Chile';break;
                case 'Cameroon': $translated_text = 'Kamerun';break;
                case 'China': $translated_text = 'China, Volksrepublik';break;
                case 'Colombia': $translated_text = 'Kolumbien';break;
                case 'Costa Rica': $translated_text = 'Costa Rica';break;
                case 'Serbia and Montenegro': $translated_text = 'Serbien und Montenegro';break;
                case 'Cuba': $translated_text = 'Kuba';break;
                case 'Cape Verde': $translated_text = 'Kap Verde, Republik';break;
                case 'Christmas Island': $translated_text = 'Weihnachtsinsel';break;
                case 'Cyprus': $translated_text = 'Zypern, Republik';break;
                case 'Czech Republic': $translated_text = 'Tschechische Republik';break;
                case 'Germany': $translated_text = 'Deutschland';break;
                case 'Djibouti': $translated_text = 'Dschibuti';break;
                case 'Denmark': $translated_text = 'Dänemark';break;
                case 'Dominica': $translated_text = 'Dominica';break;
                case 'Dominican Republic': $translated_text = 'Dominikanische Republik';break;
                case 'Algeria': $translated_text = 'Algerien';break;
                case 'Ecuador': $translated_text = 'Ecuador';break;
                case 'Estonia': $translated_text = 'Estland';break;
                case 'Egypt': $translated_text = 'Ägypten';break;
                case 'Western Sahara': $translated_text = 'Westsahara';break;
                case 'Eritrea': $translated_text = 'Eritrea';break;
                case 'Spain': $translated_text = 'Spanien';break;
                case 'Ethiopia': $translated_text = 'Äthiopien';break;
                case 'Finland': $translated_text = 'Finnland';break;
                case 'Fiji': $translated_text = 'Fidschi';break;
                case 'Falkland Islands (Malvinas)': $translated_text = 'Falklandinseln';break;
                case 'Micronesia, Federated States of': $translated_text = 'Mikronesien, Föderierte Staaten von';break;
                case 'Faroe Islands': $translated_text = 'Färöer';break;
                case 'France': $translated_text = 'Frankreich';break;
                case 'Gabon': $translated_text = 'Gabun';break;
                case 'United Kingdom': $translated_text = 'Vereinigtes Königreich von Großbritannien und Nordirland';break;
                case 'Grenada': $translated_text = 'Grenada';break;
                case 'Georgia': $translated_text = 'Georgien';break;
                case 'French Guiana': $translated_text = 'Französisch-Guayana';break;
                case 'Guernsey': $translated_text = 'Guernsey, Vogtei';break;
                case 'Ghana': $translated_text = 'Ghana, Republik';break;
                case 'Gibraltar': $translated_text = 'Gibraltar';break;
                case 'Greenland': $translated_text = 'Grönland';break;
                case 'Gambia': $translated_text = 'Gambia';break;
                case 'Guinea': $translated_text = 'Guinea, Republik';break;
                case 'Guadeloupe': $translated_text = 'Guadeloupe';break;
                case 'Equatorial Guinea': $translated_text = 'Äquatorialguinea, Republik';break;
                case 'Greece': $translated_text = 'Griechenland';break;
                case 'South Georgia and the South Sandwich Islands': $translated_text = 'Südgeorgien und die Südlichen Sandwichinseln';break;
                case 'Guatemala': $translated_text = 'Guatemala';break;
                case 'Guam': $translated_text = 'Guam';break;
                case 'Guinea-Bissau': $translated_text = 'Guinea-Bissau, Republik';break;
                case 'Guyana': $translated_text = 'Guyana';break;
                case 'Hong Kong': $translated_text = 'Hongkong';break;
                case 'Heard Island and McDonald Islands': $translated_text = 'Heard und McDonaldinseln';break;
                case 'Honduras': $translated_text = 'Honduras';break;
                case 'Croatia': $translated_text = 'Kroatien';break;
                case 'Haiti': $translated_text = 'Haiti';break;
                case 'Hungary': $translated_text = 'Ungarn';break;
                case 'Indonesia': $translated_text = 'Indonesien';break;
                case 'Ireland': $translated_text = 'Irland, Republik';break;
                case 'Israel': $translated_text = 'Israel';break;
                case 'Isle of Man': $translated_text = 'Insel Man';break;
                case 'India': $translated_text = 'Indien';break;
                case 'British Indian Ocean Territory': $translated_text = 'Britisches Territorium im Indischen Ozean';break;
                case 'Iraq': $translated_text = 'Irak';break;
                case 'Iran, Islamic Republic of': $translated_text = 'Iran';break;
                case 'Iceland': $translated_text = 'Island';break;
                case 'Italy': $translated_text = 'Italien';break;
                case 'Jersey': $translated_text = 'Jersey';break;
                case 'Jamaica': $translated_text = 'Jamaika';break;
                case 'Jordan': $translated_text = 'Jordanien';break;
                case 'Japan': $translated_text = 'Japan';break;
                case 'Kenya': $translated_text = 'Kenia';break;
                case 'Kyrgyzstan': $translated_text = 'Kirgisistan';break;
                case 'Cambodia': $translated_text = 'Kambodscha';break;
                case 'Kiribati': $translated_text = 'Kiribati';break;
                case 'Saint Kitts and Nevis': $translated_text = 'St. Kitts und Nevis';break;
                case 'Korea, Democratic Peoples Republic of': $translated_text = 'Korea, Demokratische Volkrepublik';break;
                case 'Korea, Republic of': $translated_text = 'Korea, Republik';break;
                case 'Kuwait': $translated_text = 'Kuwait';break;
                case 'Cayman Islands': $translated_text = 'Kaimaninseln';break;
                case 'Kazakhstan': $translated_text = 'Kasachstan';break;
                case 'Lao Peoples Democratic Republic': $translated_text = 'Laos';break;
                case 'Lebanon': $translated_text = 'Libanon';break;
                case 'Saint Lucia': $translated_text = 'St. Lucia';break;
                case 'Liechtenstein': $translated_text = 'Liechtenstein, Fürstentum';break;
                case 'Sri Lanka': $translated_text = 'Sri Lanka';break;
                case 'Liberia': $translated_text = 'Liberia, Republik';break;
                case 'Lesotho': $translated_text = 'Lesotho';break;
                case 'Lithuania': $translated_text = 'Litauen';break;
                case 'Luxembourg': $translated_text = 'Luxemburg';break;
                case 'Latvia': $translated_text = 'Lettland';break;
                case 'Libya': $translated_text = 'Libyen';break;
                case 'Morocco': $translated_text = 'Marokko';break;
                case 'Monaco': $translated_text = 'Monaco';break;
                case 'Moldova, Republic of': $translated_text = 'Moldawien';break;
                case 'Montenegro': $translated_text = 'Montenegro';break;
                case 'Madagascar': $translated_text = 'Madagaskar, Republik';break;
                case 'Marshall Islands': $translated_text = 'Marshallinseln';break;
                case 'Macedonia, the former Yugoslav Republic of': $translated_text = 'Mazedonien';break;
                case 'Mali': $translated_text = 'Mali, Republik';break;
                case 'Myanmar': $translated_text = 'Myanmar';break;
                case 'Mongolia': $translated_text = 'Mongolei';break;
                case 'Macao': $translated_text = 'Macao';break;
                case 'Northern Mariana Islands': $translated_text = 'Nördliche Marianen';break;
                case 'Martinique': $translated_text = 'Martinique';break;
                case 'Mauritania': $translated_text = 'Mauretanien';break;
                case 'Montserrat': $translated_text = 'Montserrat';break;
                case 'Malta': $translated_text = 'Malta';break;
                case 'Mauritius': $translated_text = 'Mauritius, Republik';break;
                case 'Maldives': $translated_text = 'Malediven';break;
                case 'Malawi': $translated_text = 'Malawi, Republik';break;
                case 'Mexico': $translated_text = 'Mexiko';break;
                case 'Malaysia': $translated_text = 'Malaysia';break;
                case 'Mozambique': $translated_text = 'Mosambik';break;
                case 'Namibia': $translated_text = 'Namibia, Republik';break;
                case 'New Caledonia': $translated_text = 'Neukaledonien';break;
                case 'Niger': $translated_text = 'Niger';break;
                case 'Norfolk Island': $translated_text = 'Norfolkinsel';break;
                case 'Nigeria': $translated_text = 'Nigeria';break;
                case 'Nicaragua': $translated_text = 'Nicaragua';break;
                case 'Netherlands': $translated_text = 'Niederlande';break;
                case 'Norway': $translated_text = 'Norwegen';break;
                case 'Nepal': $translated_text = 'Nepal';break;
                case 'Nauru': $translated_text = 'Nauru';break;
                case 'Niue': $translated_text = 'Niue';break;
                case 'New Zealand': $translated_text = 'Neuseeland';break;
                case 'Oman': $translated_text = 'Oman';break;
                case 'Panama': $translated_text = 'Panama';break;
                case 'Peru': $translated_text = 'Peru';break;
                case 'French Polynesia': $translated_text = 'Französisch-Polynesien';break;
                case 'Papua New Guinea': $translated_text = 'Papua-Neuguinea';break;
                case 'Philippines': $translated_text = 'Philippinen';break;
                case 'Pakistan': $translated_text = 'Pakistan';break;
                case 'Poland': $translated_text = 'Polen';break;
                case 'Saint Pierre and Miquelon': $translated_text = 'St. Pierre und Miquelon';break;
                case 'Pitcairn': $translated_text = 'Pitcairninseln';break;
                case 'Puerto Rico': $translated_text = 'Puerto Rico';break;
                case 'Palestinian Territory, Occupied': $translated_text = 'Palästinensische Autonomiegebiete';break;
                case 'Portugal': $translated_text = 'Portugal';break;
                case 'Palau': $translated_text = 'Palau';break;
                case 'Paraguay': $translated_text = 'Paraguay';break;
                case 'Qatar': $translated_text = 'Katar';break;
                case 'Réunion': $translated_text = 'Réunion';break;
                case 'Romania': $translated_text = 'Rumänien';break;
                case 'Russian Federation': $translated_text = 'Russische Föderation';break;
                case 'Rwanda': $translated_text = 'Ruanda, Republik';break;
                case 'Saudi Arabia': $translated_text = 'Saudi-Arabien, Königreich';break;
                case 'Solomon Islands': $translated_text = 'Salomonen';break;
                case 'Seychelles': $translated_text = 'Seychellen, Republik der';break;
                case 'Sudan': $translated_text = 'Sudan';break;
                case 'Sweden': $translated_text = 'Schweden';break;
                case 'Singapore': $translated_text = 'Singapur';break;
                case 'Saint Helena, Ascension and Tristan da Cunha': $translated_text = 'Die Kronkolonie St. Helena und Nebengebiete';break;
                case 'Slovenia': $translated_text = 'Slowenien';break;
                case 'Svalbard and Jan Mayen': $translated_text = 'Svalbard und Jan Mayen';break;
                case 'Slovakia': $translated_text = 'Slowakei';break;
                case 'Sierra Leone': $translated_text = 'Sierra Leone, Republik';break;
                case 'San Marino': $translated_text = 'San Marino';break;
                case 'Senegal': $translated_text = 'Senegal';break;
                case 'Somalia': $translated_text = 'Somalia, Demokratische Republik';break;
                case 'Suriname': $translated_text = 'Suriname';break;
                case 'Sao Tome and Principe': $translated_text = 'São Tomé und Príncipe';break;
                case 'El Salvador': $translated_text = 'El Salvador';break;
                case 'Syrian Arab Republic': $translated_text = 'Syrien';break;
                case 'Swaziland': $translated_text = 'Swasiland';break;
                case 'Turks and Caicos Islands': $translated_text = 'Turks- und Caicosinseln';break;
                case 'Chad': $translated_text = 'Tschad, Republik';break;
                case 'French Southern Territories': $translated_text = 'Französische Süd- und Antarktisgebiete';break;
                case 'Togo': $translated_text = 'Togo, Republik';break;
                case 'Thailand': $translated_text = 'Thailand';break;
                case 'Tajikistan': $translated_text = 'Tadschikistan';break;
                case 'Tokelau': $translated_text = 'Tokelau';break;
                case 'Timor-Leste': $translated_text = 'Timor-Leste, Demokratische Republik';break;
                case 'Turkmenistan': $translated_text = 'Turkmenistan';break;
                case 'Tunisia': $translated_text = 'Tunesien';break;
                case 'Tonga': $translated_text = 'Tonga';break;
                case 'Turkey': $translated_text = 'Türkei';break;
                case 'Trinidad and Tobago': $translated_text = 'Trinidad und Tobago';break;
                case 'Tuvalu': $translated_text = 'Tuvalu';break;
                case 'Taiwan, Province of China': $translated_text = 'Taiwan';break;
                case 'Tanzania, United Republic of': $translated_text = 'Tansania, Vereinigte Republik';break;
                case 'Ukraine': $translated_text = 'Ukraine';break;
                case 'Uganda': $translated_text = 'Uganda, Republik';break;
                case 'United States': $translated_text = 'Vereinigte Staaten von Amerika';break;
                case 'Uruguay': $translated_text = 'Uruguay';break;
                case 'Uzbekistan': $translated_text = 'Usbekistan';break;
                case 'Holy See (Vatican City State)': $translated_text = 'Vatikanstadt';break;
                case 'Saint Vincent and the Grenadines': $translated_text = 'St. Vincent und die Grenadinen (GB)';break;
                case 'Venezuela, Bolivarian Republic of': $translated_text = 'Venezuela';break;
                case 'Virgin Islands, British': $translated_text = 'Britische Jungferninseln';break;
                case 'Virgin Islands, U.S.': $translated_text = 'Amerikanische Jungferninseln';break;
                case 'Viet Nam': $translated_text = 'Vietnam';break;
                case 'Vanuatu': $translated_text = 'Vanuatu';break;
                case 'Wallis and Futuna': $translated_text = 'Wallis und Futuna';break;
                case 'Samoa': $translated_text = 'Samoa';break;
                case 'Yemen': $translated_text = 'Jemen';break;
                case 'Mayotte': $translated_text = 'Mayotte';break;
                case 'South Africa': $translated_text = 'Südafrika, Republik';break;
                case 'Zambia': $translated_text = 'Sambia, Republik';break;
                case 'Zimbabwe': $translated_text = 'Simbabwe, Republik';break;

            }

        }

        return $translated_text;
    }