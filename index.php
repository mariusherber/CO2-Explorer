<?php include 'header.html'; ?>
<br />
<div class="container">
    <div class="card shadow ">
        <h5 class="card-header">Willkommen auf CO² Explorer!</h5>
        <div class="card-body">
            <h6 class="card-title">Wir wollen die CO² Emissionen von Ländern und Unternehmen transparent machen!</h6>
            <p class="card-text">
                Über viele Jahre hinweg haben wir als gemeinnützige Organisation umfassende Erfahrungen im Bereich
                Klimawandel gesammelt. Im Laufe der Zeit haben wir eine umfangreiche Datenbank zu den CO₂-Emissionen von
                Ländern und Unternehmen aufgebaut. Nutzen Sie den CO₂ Explorer, um zu erkunden, welche Unternehmen
                welchen CO²-Footprint haben.</p>
            <a href="ueberuns.php" class="btn btn-success btn-sm">mehr erfahren</a>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card shadow ">
                <div class="card-body">
                    <h5 class="card-title">Projekte aktiv unterstützen</h5>
                    <p class="card-text">Möchten Sie sich aktiv im Bereich Klimawandel engagieren? Wir sind stets auf
                        der Suche nach engagierten Personen, die unsere Projekte aktiv unterstützen möchten.</p>
                    <a href="mitmachen.php" class="btn btn-success btn-sm">Jetzt aktiv werden!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card shadow ">
                <div class="card-body">
                    <h5 class="card-title">... oder durch Spenden unterstützen</h5>
                    <p class="card-text">Unterstützen Sie unsere Klimaschutzprojekte finanziell! Ihre Spende ermöglicht
                        es uns, positive Veränderungen voranzutreiben. Jeder Beitrag zählt.
                    </p>
                    <a href="mitmachen.php" class="btn btn-success btn-sm">Jetzt spenden!</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow ">
        <h5 class="card-header"> CO2 Emissions Daten</h5>
        <div class="card-body">
            <table class="table" data-toggle="table" data-pagination="true" data-search="true" data-url="data/data.json"
                data-escape="true">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" data-field="country" data-sortable="true">Land</th>
                        <th scope="col" data-field="company" data-sortable="true">Unternehmen</th>
                        <th scope="col" data-field="emission" data-sortable="true">Emission*</th>
                        <th scope="col" data-field="year" data-sortable="true">Jahr</th>

                    </tr>
                </thead>
            </table>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
            <br />
            *Angabe in Tonnen
            <br />
        </div>
    </div>
</div>
<?php include 'footer.html'; ?>