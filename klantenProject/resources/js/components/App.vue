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
          <h3>Basisbeurs</h3>
          <p>Maandelijkse bijdrage voor studenten.</p>
        </div>
        <div class="card">
          <h3>Studentenreisproduct</h3>
          <p>Gratis of goedkoper reizen met het OV.</p>
        </div>
      </div>
    </div>

    <div class="right-panel-blue">
      <h1>HBO</h1>
      <h2>Wat moet je weten over HBO?</h2>
      <p>
        HBO staat voor Hoger Beroepsonderwijs. Het is een type onderwijs in
        Nederland dat zich richt op praktische en beroepsgerichte opleidingen.
        HBO-opleidingen duren meestal vier jaar en leiden op tot een bachelor
        diploma. Na het behalen van een HBO-diploma kunnen studenten vaak direct
        aan de slag in het werkveld of doorstromen naar een masteropleiding aan
        een universiteit.
      </p>
    </div>

    <div class="white-container-hbo">
      <h2>Doorstromen naar het hbo</h2>
      <p>
        Na het behalen van een mbo-diploma kunnen veel studenten doorstromen naar
        het hbo. Deze stap biedt mogelijkheden om meer kennis en vaardigheden te
        ontwikkelen. Het is belangrijk om vooraf te kijken naar de toelatingseisen
        van de gekozen opleiding. Sommige opleidingen vragen aanvullende vakken
        of specifieke voorkennis. Een goede voorbereiding maakt de overstap vaak
        makkelijker. Hierdoor kunnen studenten succesvol verder studeren op een
        hoger niveau.
      </p>

      <h2>Studiefinanciering voor hbo-studenten</h2>
      <p>
        Hbo-studenten kunnen gebruikmaken van verschillende vormen van
        studiefinanciering. Dit helpt bij het betalen van studie- en leefkosten
        tijdens de opleiding. Afhankelijk van de situatie kunnen studenten recht
        hebben op een basisbeurs of aanvullende beurs. Ook bestaat de mogelijkheid
        om geld te lenen via DUO. Daarnaast kunnen studenten gebruikmaken van het
        studentenreisproduct. Deze ondersteuning maakt studeren voor veel mensen
        toegankelijker.
      </p>

      <h2>Stage lopen binnen het hbo</h2>
      <p>
        Stages zijn een belangrijk onderdeel van veel hbo-opleidingen. Tijdens een
        stage passen studenten hun kennis toe in de praktijk. Hierdoor doen zij
        waardevolle werkervaring op binnen hun vakgebied. Ook ontwikkelen studenten
        vaardigheden zoals samenwerken en communiceren. Stagebedrijven bieden vaak
        begeleiding en feedback tijdens deze periode. Dit helpt studenten zich goed
        voor te bereiden op hun toekomstige carrière.
      </p>

      <h2>Na het HBO</h2>
      <p>
        Na het behalen van een hbo-diploma zijn er verschillende mogelijkheden.
        Veel afgestudeerden gaan direct aan het werk binnen hun vakgebied. Anderen
        kiezen ervoor om verder te studeren aan een masteropleiding. Een hbo-diploma
        kan de kansen op de arbeidsmarkt vergroten. Werkgevers waarderen vaak de
        combinatie van theorie en praktijkervaring die hbo-studenten hebben opgedaan.
        Hierdoor vormt het hbo voor veel studenten een goede basis voor hun toekomst.
      </p>

      <h2>Hbo-opleidingen kiezen</h2>
      <p>
        Het kiezen van een hbo-opleiding is een belangrijke beslissing. Het is
        verstandig om rekening te houden met interesses, talenten en
        toekomstplannen. Open dagen kunnen helpen om een beter beeld van een
        opleiding te krijgen. Ook gesprekken met studenten en docenten kunnen
        nuttig zijn. Door verschillende opleidingen te vergelijken maak je een
        beter geïnformeerde keuze. Een passende opleiding vergroot vaak de kans
        op studiesucces.
      </p>
    </div>
  </div>
</template>
