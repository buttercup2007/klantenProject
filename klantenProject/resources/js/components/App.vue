<script setup>
import '../../css/app-component.css'
</script>

<template>
  <nav class="navbar">
    <div class="nav-title">student financiering</div>

    <div class="nav-links">
      <router-link to="/info">Info</router-link>
      <router-link to="/hbo">HBO</router-link>
      <router-link to="/opleiding">Opleiding</router-link>
      <router-link to="/shop">Shop</router-link>
      <router-link to="/home">Home</router-link>
    </div>
  </nav>

  <div class="layout">
    
    <div class="half-circle">
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

    <div class="white-container-info">
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

    <div class="right-panel-blue">

      <div class="hbo-blue-container">
        <h2>HBO</h2>
        <p>
          HBO staat voor Hoger Beroepsonderwijs. Het is een type onderwijs in
          Nederland dat zich richt op praktische en beroepsgerichte opleidingen.
          HBO-opleidingen duren meestal vier jaar en leiden op tot een bachelor
          diploma. Na het behalen van een HBO-diploma kunnen studenten vaak
          direct aan de slag in het werkveld of doorstromen naar een masteropleiding
          aan een universiteit.
        </p>

      </div>
     
   </div>

  </div>
</template>