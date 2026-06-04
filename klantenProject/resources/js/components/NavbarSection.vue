<template>
  <nav class="navbar">
    <div class="nav-title">student financiering</div>

    <div class="nav-links">
      <router-link to="/#info-section">Info</router-link>
      <router-link to="/#hbo-section">HBO</router-link>

    <div class="dropdown">
      <span class="dropbtn">Opleiding</span>

      <div class="dropdown-content">
        <router-link to="/#start-opleiding">Starten</router-link>
        <router-link to="/#overstap-opleiding">Overstappen</router-link>
        <router-link to="/#stop-opleiding">Stoppen</router-link>
      </div>
    </div>

      <router-link to="/shop">Shop</router-link>
      <router-link to="/home">Home</router-link>
    </div>
  </nav>
</template>
