# Les: Introductie tot de Z80-processor en zijn belangrijkste componenten
Doelstellingen:
Na het voltooien van deze les kunnen studenten:

Toelichten en schematisch weergeven van de belangrijkste componenten van een processor, zoals het stuurorgaan, het rekenorgaan, registers, klok en cachegeheugen.
Beschrijven van de belangrijkste stappen in de verwerking van eenvoudige instructies, zoals halen, interpreteren en uitvoeren, en de rol van de klok hierbij toelichten.
Uitleggen van verschillende soorten intern geheugen, waaronder cachegeheugen en werkgeheugen.
Toelichten van de basiswerking van het intern geheugen en geheugenadressering.


# 1. Belangrijkste componenten van een processor
## 1.1 Stuurorgaan
Het stuurorgaan, ook wel bekend als de "control unit", coördineert de werking van de processor. Het controleert en regelt de uitvoering van instructies en zorgt voor de juiste volgorde van bewerkingen.

### Hieronder worden de belangrijkste taken en functies van het stuurorgaan toegelicht:

Instructie-ophalen: Het stuurorgaan haalt instructies op uit het geheugen. Het selecteert het juiste geheugenadres waar de volgende instructie zich bevindt en haalt deze op. Het ophalen van instructies gebeurt in de volgorde waarin ze worden uitgevoerd.

Instructie-decodering: Nadat een instructie is opgehaald, decodeert het stuurorgaan deze instructie. Dit houdt in dat het de instructie analyseert en bepaalt welke specifieke bewerking ermee moet worden uitgevoerd. Het bepaalt welke registers, geheugenlocaties of andere componenten bij de uitvoering van de instructie betrokken zijn.

Sequencing en controle: Het stuurorgaan zorgt ervoor dat de instructies in de juiste volgorde worden uitgevoerd. Het controleert de stroom van gegevens en instructies tussen verschillende componenten van de processor. Het regelt ook de timing en synchronisatie van de instructies, zodat ze op het juiste moment worden uitgevoerd.

Sturing van de ALU: Het stuurorgaan stuurt de Arithmetic Logic Unit (ALU) aan, die verantwoordelijk is voor rekenkundige bewerkingen en logische operaties. Het geeft de nodige opdrachten en gegevens door aan de ALU, zodat deze de juiste berekeningen kan uitvoeren.

Sturing van registers en geheugen: Het stuurorgaan communiceert ook met registers en het geheugen. Het kan gegevens vanuit registers naar het geheugen schrijven of gegevens vanuit het geheugen naar registers halen, afhankelijk van de instructie die wordt uitgevoerd.

Het stuurorgaan is verantwoordelijk voor het coördineren van al deze taken en zorgt ervoor dat de instructies correct en efficiënt worden uitgevoerd. Het zorgt ervoor dat de verschillende componenten van de processor samenwerken om de gewenste bewerkingen uit te voeren volgens de instructies die zijn opgehaald uit het geheugen.




## 1.2 Rekenorgaan
Het rekenorgaan, ook wel bekend als de "arithmetic logic unit" (ALU), voert rekenkundige en logische bewerkingen uit, zoals optellen, aftrekken, vermenigvuldigen en logische vergelijkingen.

### 1.2 Hieronder worden de belangrijkste taken en functies van het rekenorgaan toegelicht:

Rekenkundige bewerkingen: Het rekenorgaan voert verschillende rekenkundige bewerkingen uit, zoals optellen, aftrekken, vermenigvuldigen en delen. Het kan ook andere rekenkundige operaties uitvoeren, zoals modulo (rest bij deling) en exponentiële berekeningen. Deze bewerkingen worden uitgevoerd op gegevens die in registers zijn opgeslagen.

Logische operaties: Naast rekenkundige bewerkingen kan het rekenorgaan ook logische operaties uitvoeren, zoals logische AND, OR, XOR en NOT. Deze operaties worden toegepast op bits binnen registers om bijvoorbeeld bitgewijze vergelijkingen of logische schakelingen te realiseren.

Vergelijkingen: Het rekenorgaan kan vergelijkingen uitvoeren, zoals het controleren op gelijkheid, ongelijkheid, groter dan of kleiner dan. Deze vergelijkingen kunnen worden toegepast op gegevens in registers om te bepalen welke acties moeten worden ondernomen op basis van de resultaten.

Bewerkingen met binaire getallen: Aangezien een processor werkt met binaire gegevens, kan het rekenorgaan ook binaire bewerkingen uitvoeren, zoals verschuivingen (links of rechts) en rotaties van bits. Deze bewerkingen zijn nuttig voor verschillende toepassingen, zoals het vermenigvuldigen of delen van getallen met machten van 2.

Wiskundige en logische instructies: Het rekenorgaan voert instructies uit die rekenkundige of logische bewerkingen vereisen. Deze instructies worden gecodeerd in de machinecode van het programma en worden door het stuurorgaan naar het rekenorgaan gestuurd voor uitvoering.

Het rekenorgaan werkt nauw samen met het stuurorgaan en ontvangt instructies en gegevens vanuit registers en het geheugen. Het voert de vereiste bewerkingen uit op deze gegevens en stuurt het resultaat terug naar registers of het geheugen, afhankelijk van de instructies en de verdere verwerking die nodig is.

Door het uitvoeren van rekenkundige bewerkingen, logische operaties en vergelijkingen speelt het rekenorgaan een essentiële rol in het verwerken van gegevens en het uitvoeren van berekeningen binnen de processor.


## 1.3 Registers
Registers zijn kleine geheugeneenheden binnen de processor die worden gebruikt voor het opslaan van tijdelijke gegevens en instructies tijdens de verwerking. Voorbeelden van registers zijn het instructieregister (IR), het gegevensregister (DR) en het adresregister (AR).

### Hieronder worden de belangrijkste aspecten van registers toegelicht:

Opslag van gegevens: Registers dienen als opslaglocaties voor gegevens binnen de processor. Ze zijn snel toegankelijk en worden gebruikt om tijdelijke gegevens op te slaan, zoals operanden, tussenresultaten en eindresultaten van berekeningen. Registers hebben een veel kleinere opslagcapaciteit dan het hoofdgeheugen, maar hun snelle toegangstijd maakt ze ideaal voor veelvoorkomende bewerkingen.

Gegevensmanipulatie: Registers kunnen worden gebruikt voor het uitvoeren van rekenkundige bewerkingen en logische operaties. Ze bevatten de gegevens waarop de bewerkingen worden uitgevoerd en kunnen het resultaat van de bewerkingen opslaan. De ALU kan bijvoorbeeld gegevens uit registers halen, deze bewerken en het resultaat weer terugplaatsen in registers.

Opslag van adresgegevens: Naast het opslaan van gegevens kunnen registers ook worden gebruikt om geheugenadressen op te slaan. Dit stelt de processor in staat om snel toegang te krijgen tot specifieke geheugenlocaties tijdens het uitvoeren van instructies. Door het opslaan van adresgegevens in registers kan de processor efficiënter werken bij het ophalen en opslaan van gegevens in het geheugen.

Speciale registers: Naast de algemene registers die worden gebruikt voor gegevensopslag, bevat een processor vaak speciale registers met specifieke functies. Dit kunnen bijvoorbeeld instructieregisters zijn die de huidige instructie opslaan tijdens de uitvoering, of programmatellers die bijhouden welke instructie er vervolgens moet worden opgehaald. Speciale registers spelen een cruciale rol bij de controle van de instructiestroom en de synchronisatie van de processoractiviteiten.

Registers zijn snel toegankelijke opslaglocaties die een belangrijke rol spelen bij het opslaan en manipuleren van gegevens tijdens de verwerking van instructies. Ze dienen als tijdelijke opslagplaatsen voor gegevens en kunnen rekenkundige bewerkingen uitvoeren. Door hun snelle toegangstijd dragen registers bij aan de efficiënte werking van de processor.

## 1.4 Klok
De klok is een essentieel onderdeel van een processor en zorgt voor de timing en synchronisatie van de verschillende bewerkingen. Het reguleert de snelheid waarmee instructies worden uitgevoerd en de timing van gegevensoverdracht.






### 1.2.4 De belangrijkste stappen van de verwerking van eenvoudige instructies
De verwerking van instructies in een processor omvat een reeks belangrijke stappen. Hieronder worden de belangrijkste stappen toegelicht:

Halenvan instructies: De eerste stap is het ophalen van instructies uit het geheugen. De instructies bevinden zich in het hoofdgeheugen en worden een voor een naar de processor gehaald. De processor maakt gebruik van het adresregister om de juiste instructie op te halen op basis van het huidige programmateller.

Interpreteren van instructies: Nadat een instructie is opgehaald, wordt deze geïnterpreteerd door de processor. De processor begrijpt de instructie en bepaalt welke bewerking ermee moet worden uitgevoerd.

Uitvoeren van instructies: Zodra de instructie is geïnterpreteerd, voert de processor de bijbehorende bewerking uit. Dit kan variëren van eenvoudige rekenkundige operaties tot complexe gegevensmanipulaties. De ALU (Arithmetic Logic Unit) voert de berekeningen uit en slaat het resultaat op in registers.

Bijwerken van programmateller: Na het uitvoeren van een instructie wordt de programmateller bijgewerkt om aan te geven welke instructie als volgende moet worden uitgevoerd. De programmateller bevat het geheugenadres van de volgende instructie. Door de programmateller bij te werken, kan de processor sequentieel de instructies volgen in het programma.

De klok speelt een cruciale rol bij het coördineren van deze stappen. De klok zorgt voor een regelmatige pulserende signaalstroom die de processor aangeeft wanneer elke stap moet worden uitgevoerd. Elke puls van de klok vertegenwoordigt een tik en geeft de processor de timinginformatie die nodig is om de instructies stap voor stap te verwerken.

De verwerking van instructies in een processor omvat het halen, interpreteren en uitvoeren van instructies. Dit proces wordt gestuurd door de klok en maakt gebruik van registers en de ALU om gegevens te manipuleren. Door deze stappen sequentieel uit te voeren, kan de processor complexe taken uitvoeren en instructies verwerken volgens de instructiestroom van het programma.
## 1.5 Cachegeheugen
Cachegeheugen is een klein, snel geheugentype dat wordt gebruikt om vaak gebruikte gegevens en instructies op te slaan. Het bevindt zich dichtbij de processor en zorgt voor snelle toegang tot veelgebruikte informatie, waardoor de totale verwerkingstijd wordt verkort.

## 2. Verwerking van eenvoudige instructies
Bij de verwerking van eenvoudige instructies door de processor zijn er enkele belangrijke stappen:

## 2.1 Halen
De processor haalt de instructie uit het geheugen door het juiste geheugenadres op te vragen. Het haalt de instructie op en plaatst deze in het instructieregister (IR) voor verdere verwerking.

## 2.2 Interpreteren
In deze stap interpreteert de processor de opgehaalde instructie en bepaalt welke bewerking moet worden uitgevoerd en welke gegevens moeten worden gebruikt.

## 2.3 Uitvoeren
Bij het uitvoeren voert de processor de vereiste bewerking uit op de gegevens in de registers of het geheugen, afhankelijk van de instructie. Dit kan rekenkundige bewerkingen, logische bewerkingen, gegevensoverdracht, etc. omvatten.

De klok speelt een cruciale rol bij het reguleren van de timing van elke stap in de verwerking, waardoor de instructies op de juiste volgorde worden uitgevoerd.

## 3. Soorten intern geheugen
### 3.1 Cachegeheugen
Cachegeheugen is een snel en klein geheugentype dat wordt gebruikt om frequent gebruikte gegevens en instructies op te slaan. Het helpt de verwerkingssnelheid te verbeteren door snelle toegang tot deze gegevens mogelijk te maken.

### 3.2 Werkgeheugen
Werkgeheugen, ook bekend als RAM (Random Access Memory), is een vorm van intern geheugen dat tijdelijk gegevens en instructies opslaat die actief worden gebruikt door de processor. Het biedt een snelle lees- en schrijftoegang voor de processor.

## 4. Basiswerking van het intern geheugen en geheugenadressering
Het intern geheugen bestaat uit een reeks geheugenlocaties met elk een uniek geheugenadres. De processor gebruikt deze adressen om gegevens en instructies op te halen en op te slaan.

Geheugenadressering is het proces waarbij de processor een specifiek geheugenadres selecteert om gegevens te halen of op te slaan. Door het juiste geheugenadres te specificeren, kan de processor communiceren met het gewenste geheugenlocatie.

De grootte van het geheugenadres bepaalt het maximale geheugenbereik dat door de processor kan worden aangesproken. Bijvoorbeeld, een 8-bits processor kan 256 (2^8) verschillende geheugenlocaties adresseren.

Het correct begrijpen van de werking van het intern geheugen en geheugenadressering is essentieel voor het juist uitvoeren van instructies en het opslaan van gegevens tijdens de verwerking.

## Conclusie:
In deze les hebben we de belangrijkste componenten van een processor besproken, zoals het stuurorgaan, het rekenorgaan, registers, klok en cachegeheugen. We hebben ook de belangrijkste stappen in de verwerking van eenvoudige instructies beschreven en de rol van de klok daarbij toegelicht. Daarnaast hebben we verschillende soorten intern geheugen behandeld, waaronder cachegeheugen en werkgeheugen, en de basiswerking van het intern geheugen en geheugenadressering toegelicht. Het begrijpen van deze concepten is cruciaal voor een diepgaand inzicht in de werking van een processor.

Aanvullende bronnen en oefeningen kunnen worden verstrekt om de studenten verder te laten oefenen en het begrip van de behandelde onderwerpen te versterken.
