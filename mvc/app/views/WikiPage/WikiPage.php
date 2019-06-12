<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>HTTPCafe - Overview</title>
    <link rel="stylesheet" href="http://localhost/www.httpcafe.com/css/scholarly.min.css">
    <script src="http://localhost/www.httpcafe.com/js/scholarly.min.js"></script>
  </head>
  <body prefix="schema: http://schema.org">
    <header>
      <div class="banner">
        <img src="http://localhost/www.httpcafe.com/scholarly-html.svg" width="227" height="50" alt="Scholarly HTML logo">
        <div class="status">Community Draft</div>
      </div>
      <h1>HTTPCafe</h1>
    </header>

    <div role="contentinfo">
      <dl>
        <dt>Authors</dt>
        <dd>
          Vrabie Alin-Stefan
		  &amp;
		  Adam Cristian
        </dd>
        <dt>License</dt>
        <dd>
          <a href="http://creativecommons.org/licenses/by/4.0/">CC-BY</a>
        </dd>
      </dl>
    </div>
    <section typeof="sa:Abstract" id="abstract" role="doc-abstract">
      <h2>Abstract</h2>
      <p>
        HTTPcafe este o aplicatie web care simuleaza o cafenea reala care se adreseaza cu preponderenta studentilor informaticieni.
      </p>
    </section>
    <section id="introduction" role="doc-introduction">
      <!-- review? -->
      <h2>Introducerea</h2>
      <p>
		Ce poate fi mai placut pentru un tanar informatician decat sa petreaca timpul intr-un loc care dispune de o noua tehnologie destul de interesanta.
		Procesul de a comanda este unul simplu, trebuie ocupata o masa si apoi poti sa comanzi din aplicatie.
		
      </p>
      <p>
        Scopurile acestei aplicatii web sunt:
      </p>
      <ul>
        <li>Imbunatatirea modului traditional de servire.</li>
        <li>Reducerea timpului de asteptare.</li>
        <li>Disponibilitatea vizualizatii locurilor libere chiar si de acasa in timp real.</li>
		<li>Usurinta de a naviga prin meniul virtual fata de unul clasic cat si posibilitatea de a vedea disponibilitatea produselor. </li>
      </ul>
    </section>
    <section id="structure">
      <!-- review? -->
      <h2>Privirea de ansamblu</h2>
      <section id="Technologies">
        <!-- review? -->
        <h3>Tehnologia utilizata</h3>
        <p>
          Pentru partea de back-end am decis sa utilizam <b><code>PHP</code></b> deoarece este un limbaj usor de invatat, care ofera o putere de procesare si manipulare a datelor.
        </p>
        <p>
          Pentru partea de stocare a datelor o sa folosim o baza de date relationala <b><code>MySQL</code></b> datorita usurintei de utilizare si raspandirii acesteia mai ales in domeniul dezvoltarii web.
        </p>
      </section>
      <section id="Architecture">
        <!-- review? -->
        <h3><code>Arhitectura</code></h3>
        <p>
          Aplicatia noastra se va baza pe modelul clasic MVC dupa cum urmeaza in schema:
        </p>
		<a href="http://localhost/www.httpcafe.com/img/MVC.jpg"><img style="width: 60%;" src="img/MVC.jpg" alt="php architecture"/></a>
		<p>
		Baza de date:
		</p>
		<a href="http://localhost/www.httpcafe.com/img/Schema Baze de Date.jpg"><img style="width: 60%;" src="img/Schema Baze de Date.jpg" alt="php architecture"/></a>
        <ul>
		  <li><b><code>Browserul Clientului</code></b> va transmite un request de tipul http/https serverului, iar intr-un timp cat mai scurt serverul va raspunde adecvat incercand sa ii transmita datele cerute</li>
		  <li><b><code>Serverul</code></b> va prelua requestul de la client si il va transmite modulului de control, acesta primeste view-urile care trebuie sa le trimita ca si raspuns inapoi clientului</li>
          <li><b><code>Modelul</code></b> se va ocupa de gestionarea bazei de date, oferind informatiile cerute de controller.</li>
          <li><b><code>Views</code></b> consta intr-un anumit numar de template-uri care vor fi umplute dinamic cu date de catre controler si trimise clientilor.</li>
          <li><b><code>Controler-ul</code></b> reprezinta locul de prelucrare a datelor primite, obtine date din baza de date prin intermediul modelului si completeaza template-urile din View pe care la va trimte la client</li>
		  <ul><code>Controller-ul indexului</code> are rolul de a gestiona resursele legate de crearea utilizatrilor si de "filmul" ocuparii cafenelei.</ul>
		  <ul><code>Controller-ul comenzilor</code> supravegheaza atent cum utilizatorul pargurge in ordine "flow-ul" paginilor si daca comanda este finalizata cu succes sau nu, in cazul in care produsul dorit nu este in stoc sau clientul nu are varsta necesara.</ul>
		  <ul><code>Controller-ul locatiei</code> are sarcina de a verifica daca clientul chiar se afla in cafenea in momentul ocuparii mesei folosind un API oferit de Google</ul>
        </ul>
      </section>
      <section id="Routes & End-points">
        <h3>Flow-ul aplicatie</h3>
        <p>
          HTTPCafe restrictioneaza accesul la paginile care nu sunt accesate printr-o anumita ruta descrisa mai jos:
        </p>
        <a href="http://localhost/www.httpcafe.com/img/Schema Pagini Web.jpg"><img style="width: 60%;" src="img/Schema Pagini Web.jpg" alt="php flow"/></a>
      </section>

      </section>
      <section id="hunk">
        <!-- review? -->
        <h3>Diagrame</h3>
        <p>
          Mai jos sunt niste diagrame care explica modul de functionare al apicatiei:
        </p>

        <section id="useCase">
          <h3>Use Case Diagram</h3>
          <a href="http://localhost/www.httpcafe.com/img/Diagrama Use Case.jpg"><img style="width: 80%;" src="img/Diagrama Use Case.jpg" alt="useCase diagram"/></a>
        </section>

        <section id="UMLdiagram">
          <h3>UML Diagram</h3>
          <a href="http://localhost/www.httpcafe.com/img/Schema MVC.jpg"><img style="width: 120%;" src="img/Schema MVC.jpg" alt="UML diagram"/></a>
        </section>
      </section>
		<section id="etape">
          <h3>Etapele intermediare:</h3>
		  <li><b>Adam Cristian</b> se va ocupa de crearea unui sistem de generare al unui identificator unic pentru fiecare client ce acceseaza aplicatia si implementarea sistemului de gestiune a comenzilor si aprobarea acestora</li>
		  <li><b>Vrabie Alin</b> se va ocupa de implementarea unui mod de a verifica daca utilizatorii care doresc ocuparea unei mese se afla fizic in local cat si de realizarea unui sistem de ocupare in timp real al cafenelei</li>
        </section>
        <section id="conclusion">
          <h3>Concluzie</h3>
		  <p>
		  <b>Dorim sa oferim utilizatorilor o experienta unica!</b>
		  </p>
        </section>
  </body>
</html>
