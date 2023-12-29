
  // JavaScript zur Erkennung der Browsersprache und Anpassung der Textausrichtung
  const rtlLanguages = ['ar', 'he']; // Liste der Sprachen, die von rechts nach links geschrieben werden
  const browserLanguage = navigator.language.slice(0, 2); // Erhalten der ersten zwei Zeichen der Browser-Sprache

  if (rtlLanguages.includes(browserLanguage)) {
      document.documentElement.setAttribute('dir', 'rtl');
  } else {
      document.documentElement.setAttribute('dir', 'ltr');
  }
