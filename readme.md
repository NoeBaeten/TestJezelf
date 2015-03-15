# PHP1 - Test Jezelf

Deze repository dient om de wekelijkse taken, of test jezelf's, van het vak PHP1 bij te houden.

#### 1 - [Timeline](https://github.com/dirixtom/TestJezelf/tree/master/1%20Timeline)

In Test Jezelf 1 was het de bedoeling dat we heel basic
de checkins van op een tijdlijn als Facebook of Twitter bouwden
op basis van een array. Met deze test jezelf konden we onze kennis en vaardigheden van arrays testen en tegelijkertijd ook oefenen.


#### 2 - [Include](https://github.com/dirixtom/TestJezelf/tree/master/2%20Include)

In Test Jezelf 2 moesten we een **home.php** en een **contact.php** maken met daarin een herbruikbare navigatie en footer. Dus via een include.

#### 3 - [To-do list](https://github.com/dirixtom/TestJezelf/tree/master/3%20To-do)

Voor Test Jezelf 3 moesten we een to-do lijstje maken van een paar taken. De taken die binnen de twee uur van de deadline waren moesten een rode kleur krijgen, tussen de twee en de 24 uur een oranje en diegenen met meer dan 24 uur te gaan tot de deadline moesten een groene kleur krijgen.

Hier heb ik de items in een multidimensionele array gestopt en gecontroleerd op hun deadline. Op basis van die deadline heb ik dan de items afgeprint met of te wel een class die een rode kleur aan het item gaf, een die één oranje kleur gaf of één die een groene kleur gaf.

#### 4 - [Shopping Basket](https://github.com/dirixtom/TestJezelf/tree/master/4%20Winkelmandje)

In de vierde Test Jezelf moesten we een mini-webwinkel bouwen met enkele producten. In **products.php** moeten de producten getoond worden. In **detail.php** moeten de productdetails van één enkel product zitten en een *nu kopen* knop. In **cart.inc.php** wordt het winkelmandje afgedrukt en in **products.inc.php** wordt de array met alle producten bewaard. Er moesten ook een paar extra functionaliteiten in zitten.

#### 5 - [Login](https://github.com/dirixtom/TestJezelf/tree/master/5%20Login%20(Ello))

In Test Jezelf 5 kregen we beginbestanden vak een login pagina en moesten we met behulp van cookies die pagina functioneel maken. Dus succesvol inloggen en terug uitloggen. In **nav.inc.php** gebeurt het grootste deel van de login, daar wordt er gechecked of er iemand wil inloggen, deze logingegevens worden gecontroleerd, versleuteld met een minimalistische encryptie, in een cookie gestopt en doorverwezen. Daarna kan je op *logout* klikken, wat je naar een pagina verwijst die de login cookie verwijderd.

#### 6 - [Blogposts](https://github.com/dirixtom/TestJezelf/tree/master/6%20Blogpost)

In Test Jezelf 6 was het de bedoeling dat we een mini cms maakten. Hier moest je een blogpost kunnen posten.
De connectie met de database moest met PDO. (Work in progress, ik moet mijn MAMP settings nog aanpassen om PDO toe te staan) Ik heb hier met classes gewerkt, de connectie wordt gelegd in **Connectie.class.php**, de posts worden opgeslagen in de database via de class **Post.class.php** en via de pagina **print.php** afgeprint op de **index.php** pagina.

#### 7 - [Voertuig](https://github.com/dirixtom/TestJezelf/tree/master/7%20Voertuig)

Test Jezelf 7 was het de bedoeling dat we de basics van OOP onder de knie kregen. We moesten met magic methods werken om een output te creëeren. Er moest een class **Voertuig.class.php** aangemaakt worden waar m_sMerk, m_iAantalDeuren en m_iAantPassagiers via de magic method set worden ingevuld en via via een methode *reserveer()* worden afgedrukt. Er moesten ook controles uitgevoerd worden. Het aantal passagiers van het voertuig mocht bijvoorbeeld maximum 6 bedragen. Deze is in de getters uitgevoerd en wordt via een *try-catch* weergegeven.


