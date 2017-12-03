Laddtider
============================
Jag bestämde mig från början att välja stora sajter. Helt ovetenskapligt så blev urvalet **aftonbladet.se**, **hemnet.se** och **blocket.se**. Alla tre är stora sajter (bland de största i Sverge?) och dessutom har de olika affärsmodeller. 

Reklam och prenumerationsavgifter finansierar aftonbladet.se. För att locka läsare och därmed kunna sälja mer reklam så är det viktigt att sajten ger en angenäm upplevelse för läsaren. Den ska laddas snabbt och inte ha *för* mycket reklam. 

Blocket finansieras av att folk köper annonser. Många små mikrotransaktioner ger sammanlagt en betydlig inkomst till sajten. För att sajten ska vara av intresse för köpare så måste den vara lättnavigerad och du ska kunna hitta vad du söker.

På hemnet.se annonseras det för större delen av bostadsaffärerna i Sverige. Likt blocket ska sajten erbjuda lätt navigation och möjligheter att precisera sin sökning för att ge relevanta annonser till potentiella köpare.

Till min hjälp har jag använt mig av Google PageSpeed och Chromes Devtools, mätingar är gjorda med **Disable cache**.


Samtliga sajter har testats tre gånger och det sammanlagda utfallet ger det slutgiltiga resultatet i mätningen. Mätningarna finns sammanställda i en 
**[excelfil](https://docs.google.com/spreadsheets/d/19DQJ-k8TVYmRk8yozhq5fgVyRuXB5-6wDFYGNG4GrN0/edit?usp=sharing)**.

#Aftonbladet
[FIGURE src="image/aftonbladet.png&w=900" caption="Aftonbladet.se Sveriges största nyhetssite."]

**[Aftonbladet](https://www.aftonbladet.se)**.


##Google PageSpeed
| Sida                                     | Mobil                | Desktop               |
| -----------------------------------------|:--------------------:|----------------:|
| https://www.aftonbladet.se               | 83/100 - Need work   | 90/100 - Good   |
| https://www.aftonbladet.se/sportbladet   | 80/100 - Needs work  | 92/100 - Good   |
| https://tv.aftonbladet.se/abtv/          | 68/100 - Needs work  | 92/100 - Good   |

####Möjliga förbättringar
#####Utnyttja webbläsarens caching - Leverage browser caching

"Om du ställer in ett utgångsdatum eller en maximal ålder i HTTP headern för statiska resurser uppmanas webbläsaren att ladda tidigare nedladdade resurser från lokal disk snarare än över nätverket."

Verkar vara typsnitt och mycket som är relaterat till annonser där utgångsdatum inte är satt, eller är satt med en väldigt låg cache-tid.

#####Undvik Javascript eller CSS som hindrar att huvudinnehållet rendreras - Eliminate render-blocking JavaScript and CSS in above-the-fold content

Javascript bör vara asynkrona om möjligt och därmed inte hindra att rendreringen av sidan sker. I aftonbladet.se:s fall var det en stilmall som krånglade.


#####Optimera bilder - Optimize images

På sidan fanns bilder som inte var komprimerade. Totalt kunde bilderna minskas med 52.1Kb, de två bilder detta gällde kunde därmed komprimers med 56%.

###Devtools
| Sida                                     | Laddtid/medelvärde | Storlek   | Resurser |
| -----------------------------------------|:------------------:|----------:|---------:|
| https://www.aftonbladet.se               | 6.673 s            | 3.5mb     | 177 st   |
| https://www.aftonbladet.se/sportbladet   | 13.64 s            | 4.2mb     | 398 st   |
| https://tv.aftonbladet.se/abtv           | 1.61s              | 1.3mb     | 62 st    |


###Förbättingar
Skillnaderna var ganska stora i storlek vilket ledde till långa laddningstider. Den besparing i tid som PageSpeed föreslog genom komprimering skulle inte göra en så stor skillnad. Caching av siten kan däremot göra att stora statiska resurser inte behöver laddas ned flera gånger. Med caching i gång så blev laddtiden dock inte mindre, men storleken blev. Sportbladets 4.2mb blev endast 880kb när caching var på.
Detta pekar på att laddtiden till stor del är själva rendreringen av sidan, hämtningen av resurser är då med dagens bandbredd sekundär när det gäller totala laddningstiden.

#Hemnet
[FIGURE src="image/hemnet.png&w=900" caption="Hemnet."


**[Hemnet](https://www.hemnet.se)**.

##Google PageSpeed

| Sida                                             | Mobil                | Desktop               |
| ------------------------------------------------ |---------------------:|----------------------:|
| https://www.hemnet.se                            | 68/100 - Needs work  | 74/100 - Need work    |
| https://www.hemnet.se/till-salu/blekinge-lan     | 59/100 - Poor        | 73/100 - Needs work   |
| https://www.hemnet.se/till-salu/stockholms-lan   | 60/100 - Poor        | 63/100 - Poor         |


####Möjliga Förbättringar
#####Optimera bilder - Optimize images

Med bättre komprimerade bilder skulle 121.6Kb sparas, 36% av storleken på de 12 bilder där det hade varit möjligt

#####Undvik Javascript eller CSS som hindrar att huvudinnehållet rendreras - Eliminate render-blocking JavaScript and CSS in above-the-fold content

7 scriptresurser och 5 CSSresurser verkar blockerande på laddningen av sidan. Asynkrona versioner eller asynkron laddning av dess skulle kunna snabba på laddningen.
Många scriptnamn har leagacy i titeln vilket jag antar visar på gamla beroenden i koden.

#####Utnyttja webbläsarens caching - Leverage browser caching

Många script saknar caching, ironiskt nog är de flesta googles script för Google Tag manager, Googles API, kartor bland annat samt hotjar.
Google Tag manager tillsammans med Hotjar är verktyg för att spåra användarmönster på webbsidan.

#####Reducera serverns svarstid - Reduce server response time

Servern tog 0.53 sekunder att ens svara, vilket är lång tid i sammanhanget.

#####Prioritera synligt innehåll - Prioritize visible content

Sidan har innehåll som inte laddas i första laddningen av sidan. Detta gäller det synliga innehållet, above-the-fold. Det innebär att det krävs fler än en hämtning för att få visning av det synliga.

#####Tillåt komprimering - Enable compression

Gzip-komprimering av innehållet kunde spara 3Kb data, 75% av filen i fråga.


###Devtools

| Sida                                             | Laddtid/medelvärde | Storlek  | Resurser  |
| -------------------------------------------------|-------------------:|---------:|----------:|
| https://www.hemnet.se                            | 2.33 s             | 989Kb    | 55 st     |
| https://www.hemnet.se/till-salu/blekinge-lan     | 4.27 s             | 1.2Mb    | 101 st    |
| https://www.hemnet.se/till-salu/stockholms-lan   | 5.69 s             | 1.5Mb    | 112       |


###Förbättingar
Serverns initiala svarstid bör kunna kortas ned, en halv sekund för att ens svara. Komprimering av bilderna skulle kunna minska storleken 121Kb av 989Kb är mycket.

Bonus:

Följande meddelande var dolt i siten =)

```
             hhhhhhhh
        hhhhhhhhhhhhhhhhhh
      hhhhh             hhhh
    hhhhh                 hhhh
   hhhh         hhh        hhhh
   hhh       hhhhhhhhh      hhhh
  hhhh     hhhhhhhhhhhh     hhhh
  hhhh     hhhh    hhhh     hhhh
  hhhh     hhhh    hhhh     hhhh
   hhhh                    hhhh
    hhhhh                 hhhh
     hhhhhh            hhhhh
   hhhhh hhhhhhhhhhhhhhhh
  hhhh     hhhhhhhhhhh

  Kul att du hittat hit! Vill du också jobba på en av Sveriges största sajter med miljontals unika besökare?
  Gör en spontanansökan på https://jobba.hemnet.se/
```

#Blocket
[FIGURE src="image/blocket.png&w=900" caption="Blocket."


**[Blocket](https://www.blocket.se)**.

###Google PageSpeed

| Sida                             | Mobil               | Desktop             |
| -------------------------------- |--------------------:|--------------------:|
| https://www.blocket.se           | 69/100 - Needs work | 59/100 - Poor       |
| https://www.blocket.se/blekinge  | 68/100 - Needs work | 77/100 - Needs work |
| https://www.blocket.se/stockholm | 69/100 - Needs work | 78/100 - Needs work |

####Möjliga Förbättringar
#####Optimera bilder - Optimize images

Med bättre komprimering och optimerad storlek på bilderna skulle 512.6Kb sparas, 70% av storleken på de sju bilder där det hade varit möjligt

#####Undvik Javascript eller CSS som hindrar att huvudinnehållet rendreras - Eliminate render-blocking JavaScript and CSS in above-the-fold content

8 scriptresurser och 8 CSSresurser verkar blockerande på laddningen av sidan. Asynkrona versioner eller asynkron laddning av dess skulle kunna snabba på laddningen.


#####Utnyttja webbläsarens caching - Leverage browser caching

Ett fåtal script saknar caching. Alla externa källor, antagligen kopplat till annonser och statistik.

#####Prioritera synligt innehåll - Prioritize visible content

Sidan har innehåll som inte laddas i första laddningen av sidan. Detta gäller det synliga innehållet, above-the-fold. Det innebär att det krävs fler än en hämtning för att få visning av det synliga. Bara 54% av det synliga innehållet kunde rendreras men HTML-svaret.

#####Tillåt komprimering - Enable compression

Gzip-komprimering av innehållet kunde spara 10.9Kb data, 66% av filen i fråga.

###Devtools

| Sida                             | Laddtid/medelvärde | Storlek  | Resurser  |
| ---------------------------------|-------------------:|---------:|----------:|
| https://www.blocket.se           | 2.24 s             | 1.4Mb    | 66 st     |
| https://www.blocket.se/blekinge  | 3.87 s             | 1Mb      | 78 st     |
| https://www.blocket.se/stockholm | 4.05 s             | 1Mb      | 87 st     |


###Förbättingar
Bildoptimering skulle göra mycket för sidans storlek. 512kb av 1.4Mb är ganska mycket att spara genom enkla förbättringar. Annars är det svårt att rekommendera förbättringar att liknande magnitud. Sidan laddas redan snabb nu.



#Sammanfattning
Tre olika sajter, en som sticker ut.  Att **aftonbladet.se** skiljer sig från **blocket.se** och **hemnet.se** är kanske inte så konstigt. Sidornas olika affärsmodeller gör nog mycket för deras laddningstid.

Reklamfinansierade Aftonbladet är nästan *fyra gånger* så stor/tung som Hemnet (resultatet från AftonbladetTV inte inräknat då sidan är annorlunda än vanliga aftonbladet.se). Till stor del beroende på annonserna. Sportbladets medelvärde på över 13 sekunder är i mitt tyckte alldeles för lång tid.

Sammanfattningsvis så verkar det finnas ganska mycket optimering att hämta genom komprimering och optimering av bilderna. Kanske en självklarhet då bilder är större till storleken, men ändå förvånande att så pass stora sidor med så många besökare inte optimerat bättre. Borde finnas stor vinst att hämta där.


#Lista
1. Blocket 2.24s - 4.05s
2. Hemnet 2.33s - 5.69
3. Aftonbladet 1.61s - 13.64s

Vad som är accepterad laddningstid skiljer sig åt i mitt tycke beroende på vilken sida man pratar om och om det gäller "above-the-fold".
Det viktigast i mitt tycke är att siten inte ser inkomplett ut och att man som användare kan börja använda den inom ett par sekunder.

* 2-3 sekunder för navigerbar sida som inte ser inkomplett ut
* 4-6 sekunder för komplett laddning

Hemnet och Blocket klarar laddningstiderna väl, inga problem. Aftonbladet och Sportbladet tar alldeles för lång tid att ladda. En försonande faktor kan var att det är annonserna som tar längst tid, dessa klarar användarna sig väl utan. Men trots detta så känns sidan långsam.

Av Gustav Larsson
