<script setup>
</script>

<template>
  <nav class="navbar">
    <div class="nav-title">student financiering</div>

    <div class="nav-links">
      <router-link to="/info">Info</router-link>
      <router-link to="/hbo">HBO</router-link>
      <router-link to="/opleiding">Opleiding</router-link>
      <router-link to="/home">Home</router-link>
    </div>
  </nav>

  <div class="layout">
    <!-- LEFT BLUE SECTION -->
    <div class="left-panel">
      <h1>INFO</h1>

      <h2>Wat is studiefinanciering?</h2>

      <p>
         Studiefinanciering is een financiële regeling van de Nederlandse overheid
        die studenten ondersteunt tijdens hun opleiding. Het doel is om studeren
        toegankelijk te maken voor iedereen, ongeacht de financiële situatie van
        de student of diens ouders. De regeling wordt uitgevoerd door DUO
        (Dienst Uitvoering Onderwijs).
      </p>
    </div>

    <div class="right-panel">
      <h2>Welke vormen van studiefinanciering zijn er?</h2>

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

      <h2>Studentenreisproduct</h2>
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

      <h2>Waarom is het belangrijk?</h2>
      <p>
         Dankzij studiefinanciering krijgen meer mensen de mogelijkheid om een
        opleiding te volgen. Het helpt studenten zich te concentreren op hun
        studie zonder zich voortdurend zorgen te maken over geld. Daarmee draagt
        het systeem bij aan gelijke kansen en een goed opgeleide samenleving.
      </p>

      <div class="cards">
        <div class="card">
          <h3> Basisbeurs</h3>
          <p>Maandelijkse bijdrage voor studenten.</p>
        </div>

        <div class="card">
          <h3> Studentenreisproduct</h3>
          <p>Gratis of goedkoper reizen met het OV.</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #d7e7f3;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #7fb3d5;
  padding: 15px 30px;
}

.nav-title {
  font-size: 22px;
  font-weight: bold;
  color: #000;
}

.nav-links {
  display: flex;
  gap: 20px;
}

.nav-links a {
  text-decoration: none;
  color: #1d1d5c;
  font-weight: 500;
}

.layout {
  display: grid;
  grid-template-columns: 380px 1fr;
  height: calc(100vh - 70px);
}

.left-panel {
  background: linear-gradient(135deg, #005b96, #4f9de8);
  color: white;
  padding: 40px;
  border-top-right-radius: 200px;
  border-bottom-right-radius: 200px;

  display: flex;
  flex-direction: column;
  justify-content: center;
}

.left-panel h1 {
  font-size: 40px;
  margin-bottom: 10px;
}

.left-panel h2 {
  font-size: 22px;
  margin-bottom: 10px;
}

.right-panel {
  background: white;
  margin: 40px;
  padding: 40px;
  border-radius: 20px;
  overflow-y: auto;
}

.right-panel h2 {
  color: #1d1d5c;
  margin-top: 20px;
}

.right-panel p {
  color: #333;
  line-height: 1.6;
}

/* CARDS */
.cards {
  display: flex;
  gap: 20px;
  margin-top: 20px;
}

.card {
  background: #f3f7ff;
  padding: 20px;
  border-radius: 16px;
  flex: 1;
  transition: 0.2s;
}

.card:hover {
  transform: translateY(-5px);
}
</style>