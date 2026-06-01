<script setup>

</script>

<template>

  <body>
   
    <nav class="navbar">
      <div class="nav-title"> student financiering</div>

        <ul class="nav-links">
        <!--dropdown started stoppen en overstappen-->
       <router-link to="/info">
         Info
       </router-link>

       <router-link to="/hbo">
         HBO
       </router-link>

       <router-link to="/opleiding">
         opleiding
       </router-link>

       <router-link to="/home">
         Home
       </router-link>

      </ul>

    </nav>


    <div class="navigators">

      <div class="half-circle">
    <div class="info">
        <h1>INFO</h1>
    </div>

    <h2>Wat is studiefinanciering?</h2>

    <div class="info-text">
        <p>
            Studiefinanciering is financiële ondersteuning van de Nederlandse
            overheid voor studenten in het mbo, hbo en wo. Deze regeling wordt
            uitgevoerd door de Dienst Uitvoering Onderwijs (DUO).
        </p>
    </div>

    <h2>Welke vormen van studiefinancing zijn er?</h2>

      <p>
        Studiefinanciering bestaat uit verschillende onderdelen. Studenten kunnen
        recht hebben op een basisbeurs, een aanvullende beurs, een
        studentenreisproduct en verschillende soorten leningen. Welke onderdelen
        beschikbaar zijn, hangt af van de opleiding die je volgt en je
        persoonlijke situatie.
      </p>

      <p>
        De basisbeurs is bedoeld om studenten te helpen bij hun dagelijkse
        kosten. Daarnaast kunnen studenten waarvan de ouders een lager inkomen
        hebben vaak een aanvullende beurs ontvangen. Hiermee probeert de overheid
        gelijke kansen voor iedereen te creëren.
      </p>

      <h2>studentreisproduct</h2>

      <p>
        Met het studentenreisproduct kunnen studenten gratis of met korting
        reizen met het openbaar vervoer. Studenten kunnen kiezen tussen een
        weekabonnement of een weekendabonnement. Hierdoor wordt het makkelijker
        en goedkoper om naar school, stage of universiteit te reizen.
      </p>

      <h2>Lenen voor je studie</h2>

      <p>
        Wanneer de beurs niet voldoende is, kunnen studenten ervoor kiezen om
        geld te lenen bij DUO. Dit geld moet later worden terugbetaald. Het is
        daarom belangrijk om goed na te denken over hoeveel je leent. Hoe meer
        je leent, hoe hoger je studieschuld na het afronden van je opleiding.
      </p>

    <p>
        Gelukkig biedt DUO vaak gunstige voorwaarden. Zo hoef je meestal pas na
        je studie te beginnen met terugbetalen en wordt er rekening gehouden met
        je inkomen. Hierdoor blijft de terugbetaling voor veel afgestudeerden
        betaalbaar.
    </p>

    <h2>Waarom is studiefinanciering belangrijk?</h2>


    <p>
        Dankzij studiefinanciering krijgen meer mensen de mogelijkheid om een
        opleiding te volgen. Het helpt studenten zich te concentreren op hun
        studie zonder zich voortdurend zorgen te maken over geld. Daarmee draagt
        het systeem bij aan gelijke kansen en een goed opgeleide samenleving.
    </p>

    </div>
    </div>

  
  </body>

</template>

<style>

.body {
  background-color: #26115f;
}
.navbar{
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #a9c9f8;
  padding: 15px 20px;
  position: relative;
  z-index: 10;
  
}

.nav-title {
  color:black;
  font-size: 24px;
  font-weight: bold;
  font-family: Arial, sans-serif;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}   

.nav-links a {
  text-decoration: none;
  color: #26115f;
  font-size: 18px;
  font-family: Arial, sans-serif;
}

.navigators {
  display: grid;
  grid-template-columns: 350px 1fr;
  gap: 20px;
  padding: 20px;
  
}

h1 {
  color: #26115f;
  font-family: Arial, sans-serif;
  text-align: left;
}

.info, .hbo, .opleiding, .lening-schulden {
  background-color: #fdfcfc;
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 20px;
}

.hbo, .lening-schulden {
  display: flex;
  justify-content: flex-end;
}

.half-circle {
  width: 750px;
  height: 350px;
  background: #4b54d2;
  border-bottom-right-radius: 300px;

  position: relative;

  display: flex;
  flex-direction: column;
  justify-content: center;

  padding: 30px;
  box-sizing: border-box;
}

.info h1 {
    margin: 0;
}

h2 {
    margin: 10px 0;
    font-size: 40px;
    font-family: Arial, sans-serif;
}
.hbo {
  grid-column: 2;
  grid-row: 1;
}

.opleiding {
  grid-column: 1;
  grid-row: 2;
}

.lening-schulden {
  grid-column: 2;
  grid-row: 2;
}

.info-text {
    max-width: 400px;
    font-family: Arial, sans-serif;
    font-size: 20px;
}
</style>