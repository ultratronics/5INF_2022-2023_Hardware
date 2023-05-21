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

## 1.3 Registers
Registers zijn kleine geheugeneenheden binnen de processor die worden gebruikt voor het opslaan van tijdelijke gegevens en instructies tijdens de verwerking. Voorbeelden van registers zijn het instructieregister (IR), het gegevensregister (DR) en het adresregister (AR).

## 1.4 Klok
De klok is een essentieel onderdeel van een processor en zorgt voor de timing en synchronisatie van de verschillende bewerkingen. Het reguleert de snelheid waarmee instructies worden uitgevoerd en de timing van gegevensoverdracht.

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
