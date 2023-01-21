<!DOCTYPE html>
<html>
  <head>
    <title>Mein Referat �ber KI in der Industrie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
      function openTab(evt, tabName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
  </head>
  <body>
    <h1>Mein Referat �ber KI in der Industrie</h1>
    <div class="tab">
      <button class="tablinks active" onclick="openTab(event, 'einfuehrung')">Einfuehrung</button>
      <button class="tablinks" onclick="openTab(event, 'anwendung')">Anwendung von KI in der Industrie</button>
        <button class="tablinks" onclick="openTab(event, 'beispiele')">Anwendungsbeispiele</button>
        <button class="tablinks" onclick="openTab(event, 'zusammenfassung')">Zusammenfassung</button>
    </div>
    <div id="einfuehrung" class="tabcontent">
        <h2>Einf�hrung</h2>
        <p>In diesem Abschnitt erkl�re ich, was KI ist und gebe einen �berblick �ber die Arten von KI-Systemen.</p>
    </div>
    <div id="anwendung" class="tabcontent">
        <h2>Anwendung von KI in der Industrie</h2>
        <p>In diesem Abschnitt bespreche ich die verschiedenen Anwendungen von KI in der Industrie und gehe auf die Vorteile und Herausforderungen ein.</p>
    </div>
    <div id="beispiele" class="tabcontent">
        <h2>Anwendungsbeispiele</h2>
        <p>In diesem Abschnitt gebe ich einige spezifische Beispiele f�r den Einsatz von KI in der industriellen Automatisierung und Produktion.</p>
    </div>
    <div id="zusammenfassung" class="tabcontent">
        <h2>Zusammenfassung</h2>
        <p>In diesem Abschnitt fasse ich die wichtigsten Punkte meines Referats zusammen und gebe einen Ausblick auf die Zukunft von KI in der Industrie.</p>
    </div>
  </body>
</html>
