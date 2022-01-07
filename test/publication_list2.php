<script>
function toggleAuthors(bibcode, numAuthors, longList) {
  var x = document.getElementById(bibcode + '.authors');
  var y = document.getElementById(bibcode + '.button');

  var showLess = ' <a href="javascript:void(0)" onclick="toggleAuthors(' + "'" + bibcode + "'" + ', ' + numAuthors + ', 0)" style="margin-left: 6px;"><em>show less</em></a>';
  var showMore = ' <a href="javascript:void(0)" onclick="toggleAuthors(' + "'" + bibcode + "'" + ', ' + numAuthors + ', 1)" style="margin-left: 6px;"><em>show ' + (numAuthors-20) + ' more</em></a>';

  if (longList === 0) {
    x.style.display = 'none';
    y.innerHTML = showMore;
  } else {
    x.style.display = 'inline';
    y.innerHTML = showLess;
  }
};
</script>
<div class="row-fluid">
<div id="sidebar" class="span1">
<ul class="nav nav-pills nav-stacked mod-list">
<li style="width: 58px;"><a href="#2022" data-toggle="pill">2022</a></li>
<li style="width: 58px;"><a href="#2021" data-toggle="pill">2021</a></li>
<li style="width: 58px;"><a href="#2020" data-toggle="pill">2020</a></li>
<li style="width: 58px;"><a href="#2019" data-toggle="pill">2019</a></li>
<li style="width: 58px;"><a href="#2018" data-toggle="pill">2018</a></li>
<li style="width: 58px;"><a href="#2017" data-toggle="pill">2017</a></li>
<li style="width: 58px;"><a href="#2016" data-toggle="pill">2016</a></li>
<li style="width: 58px;"><a href="#2015" data-toggle="pill">2015</a></li>
<li style="width: 58px;"><a href="#2014" data-toggle="pill">2014</a></li>
<li style="width: 58px;"><a href="#2013" data-toggle="pill">2013</a></li>
<li style="width: 58px;"><a href="#2012" data-toggle="pill">2012</a></li>
<li style="width: 58px;"><a href="#2011" data-toggle="pill">2011</a></li>
<li style="width: 58px;"><a href="#2010" data-toggle="pill">2010</a></li>
<li style="width: 58px;"><a href="#2009" data-toggle="pill">2009</a></li>
<li style="width: 58px;"><a href="#2008" data-toggle="pill">2008</a></li>
<li style="width: 58px;"><a href="#2007" data-toggle="pill">2007</a></li>
<li style="width: 58px;"><a href="#2006" data-toggle="pill">2006</a></li>
<li style="width: 58px;"><a href="#2005" data-toggle="pill">2005</a></li>
<li style="width: 58px;"><a href="#2004" data-toggle="pill">2004</a></li>
<li style="width: 58px;"><a href="#2003" data-toggle="pill">2003</a></li>
</ul>
</div>
<div class="tab-content span11">
<div class="tab-pane active" id="2022">
<h4 style="text-indent: 10px;">Publications 2022</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2022A&A...657A..30T" target="_blank">
<i>W51 North: A protocluster emerging out of a thermally inhibited fragmenting cloud</i>
</a>
<br/>
<strong>Tang, Mengyao</strong>; <strong>Palau, Aina</strong>; <strong>Zapata, Luis A.</strong>; Qin, Sheng-Li
<br/>
2022/01, Astronomy and Astrophysics, 657, A30
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2022A&A...657A...3G" target="_blank">
<i>Clustered star formation at early evolutionary stages. Physical and chemical analysis of the young star-forming regions ISOSS J22478+6357 and ISOSS J23053+5953</i>
</a>
<br/>
Gieser, C.; Beuther, H.; Semenov, D.; Suri, S.; Soler, J. D.; Linz, H.; Syed, J.; Henning, Th.; Feng, S.; Möller, T.; <strong>Palau, A.</strong>; Winters, J. M.; Beltrán, M. T.; Kuiper, R.; Moscadelli, L.; Klaassen, P.; Urquhart, J. S.; Peters, T.; Longmore, S. N.; Sánchez-Monge, Á.; <span id="2022A&A...657A...3G.authors" style="display: none;"><strong>Galván-Madrid, R.</strong>; Pudritz, R. E.; Johnston, K. G.</span><span id="2022A&A...657A...3G.button"></span>
<script>
toggleAuthors('2022A&A...657A...3G', 23, 0);
</script>

<br/>
2022/01, Astronomy and Astrophysics, 657, A3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2022MNRAS.509..522O" target="_blank">
<i>Synthetic photometry of OB star clusters with stochastically sampled IMFs: analysis of models and HST observations</i>
</a>
<br/>
Orozco-Duarte, Rogelio; Wofford, Aida; Vidal-García, Alba; <strong>Bruzual, Gustavo</strong>; Charlot, Stephane; Krumholz, Mark R.; Hannon, Stephen; Lee, Janice; Wofford, Timothy; Fumagalli, Michele; Dale, Daniel; Messa, Matteo; Grebel, Eva K.; Smith, Linda; Grasha, Kathryn; Cook, David
<br/>
2022/01, Monthly Notices of the Royal Astronomical Society, 509, 522
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2022MNRAS.509..224M" target="_blank">
<i>Using our newest VLT-KMOS HII galaxies and other cosmic tracers to test the Lambda cold dark matter tension</i>
</a>
<br/>
Mehrabi, Ahmad; Basilakos, Spyros; Tsiapi, Pavlina; Plionis, Manolis; Terlevich, Roberto; Terlevich, Elena; Gonzalez Moran, Ana Luisa; <strong>Chavez, Ricardo</strong>; Bresolin, Fabio; Fernandez Arenas, David; Telles, Eduardo
<br/>
2022/01, Monthly Notices of the Royal Astronomical Society, 509, 224
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2022MNRAS.509..974G" target="_blank">
<i>Planetary nebulae with Wolf-Rayet-type central stars - III. A detailed view of NGC 6905 and its central star</i>
</a>
<br/>
<strong>Gómez-González, V. M. A.</strong>; Rubio, G.; <strong>Toalá, J. A.</strong>; Guerrero, M. A.; Sabin, L.; Todt, H.; Gómez-Llanos, V.; Ramos-Larios, G.; Mayya, Y. D.
<br/>
2022/01, Monthly Notices of the Royal Astronomical Society, 509, 974
</p></li>
</ol>
</div>
<div class="tab-pane" id="2021">
<h4 style="text-indent: 10px;">Publications 2021</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...923..228D" target="_blank">
<i>Radio Proper Motions of the Energetic Pulsar PSR J1813-1749</i>
</a>
<br/>
Dzib, Sergio A.; <strong>Rodríguez, Luis F.</strong>
<br/>
2021/12, The Astrophysical Journal, 923, 228
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...923..204C" target="_blank">
<i>Magnetic Fields in Massive Star-forming Regions (MagMaR). II. Tomography through Dust and Molecular Line Polarization in NGC 6334I(N)</i>
</a>
<br/>
Cortés, Paulo C.; Sanhueza, Patricio; Houde, Martin; Martín, Sergio; Hull, Charles L. H.; Girart, Josep M.; Zhang, Qizhou; Fernandez-Lopez, Manuel; <strong>Zapata, Luis A.</strong>; Stephens, Ian W.; Li, Hua-bai; Wu, Benjamin; Olguin, Fernando; Lu, Xing; Guzmán, Andres E.; Nakamura, Fumitaka
<br/>
2021/12, The Astrophysical Journal, 923, 204
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...923..128M" target="_blank">
<i>The Characterization of the Dust Content in the Ring Around Sz 91: Indications of Planetesimal Formation?</i>
</a>
<br/>
Maucó, Karina; <strong>Carrasco-González, Carlos</strong>; Schreiber, Matthias R.; Sierra, Anibal; Olofsson, Johan; Bayo, Amelia; Caceres, Claudio; Canovas, Hector; <strong>Palau, Aina</strong>
<br/>
2021/12, The Astrophysical Journal, 923, 128
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...923L...5P" target="_blank">
<i>Reading M87's DNA: A Double Helix Revealing a Large-scale Helical Magnetic Field</i>
</a>
<br/>
<strong>Pasetto, Alice</strong>; <strong>Carrasco-González, Carlos</strong>; Gómez, José L.; Martí, José-Maria; Perucho, Manel; O'Sullivan, Shane P.; Anderson, Craig; <strong>Díaz-González, Daniel Jacobo</strong>; Fuentes, Antonio; Wardle, John
<br/>
2021/12, The Astrophysical Journal, 923, L5
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...923...28F" target="_blank">
<i>GASP and MaNGA Surveys Shed Light on the Enigma of the Gas Metallicity Gradients in Disk Galaxies</i>
</a>
<br/>
Franchetto, Andrea; Mingozzi, Matilde; Poggianti, Bianca M.; Vulcani, Benedetta; Bacchini, Cecilia; Gullieuszik, Marco; Moretti, Alessia; Tomičić, Neven; <strong>Fritz, Jacopo</strong>
<br/>
2021/12, The Astrophysical Journal, 923, 28
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...922..157M" target="_blank">
<i>Modeling the Unresolved NIR-MIR SEDs of Local (z &lt; 0.1) QSOs</i>
</a>
<br/>
Martínez-Paredes, M.; <strong>González-Martín, O.</strong>; HyeongHan, K.; Geier, S.; García-Bernete, I.; Ramos Almeida, C.; Alonso-Herrero, A.; Aretxaga, I.; Kim, M.; Sohn, B. W.; Masegosa, J.
<br/>
2021/12, The Astrophysical Journal, 922, 157
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...922..131T" target="_blank">
<i>GASP XXXV: Characteristics of the Diffuse Ionised Gas in Gas-stripped Galaxies</i>
</a>
<br/>
Tomičić, Neven; Vulcani, Benedetta; Poggianti, Bianca M.; Werle, Ariel; Müller, Ancla; Mingozzi, Matilde; Gullieuszik, Marco; Wolter, Anna; Radovich, Mario; Moretti, Alessia; Franchetto, Andrea; Bellhouse, Callum; <strong>Fritz, Jacopo</strong>
<br/>
2021/12, The Astrophysical Journal, 922, 131
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.508.4216M" target="_blank">
<i>Star formation in CALIFA survey perturbed galaxies - II. Star-formation histories and oxygen abundances</i>
</a>
<br/>
Morales-Vargas, A.; Torres-Papaqui, J. P.; Rosales-Ortega, F. F.; Chow-Martínez, M.; Trejo-Alonso, J. J.; <strong>Ortega-Minakata, R. A.</strong>; Robleto-Orús, A. C.; Romero-Cruz, F. J.; Neri-Larios, D. M.; Neri-Larios, D. M.; Califa Survey Collaboration
<br/>
2021/12, Monthly Notices of the Royal Astronomical Society, 508, 4216
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.508.2254R" target="_blank">
<i>Planetary nebulae with Wolf-Rayet-type central stars - II. Dissecting the compact planetary nebula M 2-31 with GTC MEGARA</i>
</a>
<br/>
<strong>Rechy-García, J. S.</strong>; <strong>Toalá, J. A.</strong>; Cazzoli, S.; Guerrero, M. A.; Sabin, L.; <strong>Gómez-González, V. M. A.</strong>; Ramos-Larios, G.
<br/>
2021/12, Monthly Notices of the Royal Astronomical Society, 508, 2254
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.508.1599S" target="_blank">
<i>First deep images catalogue of extended IPHAS PNe</i>
</a>
<br/>
Sabin, L.; Guerrero, M. A.; Ramos-Larios, G.; Boumis, P.; Zijlstra, A. A.; Awang Iskandar, D. N. F.; Barlow, M. J.; <strong>Toalá, J. A.</strong>; Parker, Q. A.; Corradi, R. M. L.; Morris, R. A. H.
<br/>
2021/12, Monthly Notices of the Royal Astronomical Society, 508, 1599
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...655A.104P" target="_blank">
<i>The dust-star interplay in late-type galaxies at z &lt; 0.5: Forecasts for the JWST</i>
</a>
<br/>
Pappalardo, Ciro; Bendo, George J.; Boquien, Mederic; Baes, Maarten; Viaene, Sebastien; Bianchi, Simone; <strong>Fritz, Jacopo</strong>
<br/>
2021/11, Astronomy and Astrophysics, 655, A104
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...922...66R" target="_blank">
<i>Discovery of a Highly Collimated Flow from the High-mass Protostar ISOSS J23053+5953 SMM2</i>
</a>
<br/>
Rodríguez, Tatiana M.; Hofner, Peter; Araya, Esteban D.; Zhang, Qizhou; Linz, Hendrik; <strong>Kurtz, Stanley</strong>; Gomez, Laura; <strong>Carrasco-González, Carlos</strong>; Rosero, Viviana
<br/>
2021/11, The Astrophysical Journal, 922, 66
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...655A..84S" target="_blank">
<i>Disk fragmentation in high-mass star formation. High-resolution observations towards AFGL 2591-VLA 3</i>
</a>
<br/>
Suri, S.; Beuther, H.; Gieser, C.; Ahmadi, A.; Sánchez-Monge, Á.; Winters, J. M.; Linz, H.; Henning, Th.; Beltrán, M. T.; Bosco, F.; Cesaroni, R.; Csengeri, T.; Feng, S.; Hoare, M. G.; Johnston, K. G.; Klaassen, P.; Kuiper, R.; Leurini, S.; Longmore, S.; Lumsden, S.; <span id="2021A&A...655A..84S.authors" style="display: none;">Maud, L.; Moscadelli, L.; Möller, T.; <strong>Palau, A.</strong>; Peters, T.; Pudritz, R. E.; Ragan, S. E.; Semenov, D.; Schilke, P.; Urquhart, J. S.; Wyrowski, F.; Zinnecker, H.</span><span id="2021A&A...655A..84S.button"></span>
<script>
toggleAuthors('2021A&A...655A..84S', 32, 0);
</script>

<br/>
2021/11, Astronomy and Astrophysics, 655, A84
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...921...48S" target="_blank">
<i>A Core Mass Function Indistinguishable from the Salpeter Stellar Initial Mass Function Using 1000 au Resolution ALMA Observations</i>
</a>
<br/>
<strong>Suárez, Genaro</strong>; <strong>Galván-Madrid, Roberto</strong>; Aguilar, Luis; Ginsburg, Adam; <strong>Srinivasan, Sundar</strong>; Liu, Hauyu Baobab; Román-Zúñiga, Carlos G.
<br/>
2021/11, The Astrophysical Journal, 921, 48
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.507.4211E" target="_blank">
<i>The abundance of satellites around Milky Way- and M31-like galaxies with the TNG50 simulation: a matter of diversity</i>
</a>
<br/>
Engler, Christoph; Pillepich, Annalisa; Pasquali, Anna; Nelson, Dylan; <strong>Rodriguez-Gomez, Vicente</strong>; Chua, Kun Ting Eddie; Grebel, Eva K.; Springel, Volker; Marinacci, Federico; Weinberger, Rainer; Vogelsberger, Mark; Hernquist, Lars
<br/>
2021/11, Monthly Notices of the Royal Astronomical Society, 507, 4211
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...919..129L" target="_blank">
<i>Lower-luminosity Obscured AGN Host Galaxies Are Not Predominantly in Major-merging Systems at Cosmic Noon</i>
</a>
<br/>
Lambrides, Erini L.; Chiaberge, Marco; Heckman, Timothy; Kirkpatrick, Allison; Meyer, Eileen T.; Petric, Andreea; Hall, Kirsten; Long, Arianna; Watts, Duncan J.; Gilli, Roberto; Simons, Raymond; Tchernyshyov, Kirill; <strong>Rodriguez-Gomez, Vicente</strong>; Vito, Fabio; de la Vega, Alexander; Davis, Jeffrey R.; Kocevski, Dale D.; Norman, Colin
<br/>
2021/10, The Astrophysical Journal, 919, 129
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.507.3030J" target="_blank">
<i>Dust in RCW 58: Clues to common envelope channel formation?</i>
</a>
<br/>
<strong>Jiménez-Hernández, P.</strong>; <strong>Arthur, S. J.</strong>; <strong>Toalá, J. A.</strong>; Marston, A. P.
<br/>
2021/10, Monthly Notices of the Royal Astronomical Society, 507, 3030
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.506.5039T" target="_blank">
<i>Cosmological constraints using the newest VLT-KMOS H II galaxies and the full Planck CMB spectrum</i>
</a>
<br/>
Tsiapi, Pavlina; Basilakos, Spyros; Plionis, Manolis; Terlevich, Roberto; Terlevich, Elena; Gonzalez Moran, Ana Luisa; <strong>Chavez, Ricardo</strong>; Bresolin, Fabio; Fernandez Arenas, David; Telles, Eduardo
<br/>
2021/10, Monthly Notices of the Royal Astronomical Society, 506, 5039
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.506.4800T" target="_blank">
<i>Erratum: Morphology and star formation in IllustrisTNG: the build-up of spheroids and discs</i>
</a>
<br/>
Tacchella, Sandro; Diemer, Benedikt; Hernquist, Lars; Genel, Shy; Marinacci, Federico; Nelson, Dylan; Pillepich, Annalisa; <strong>Rodriguez-Gomez, Vicente</strong>; Sales, Laura V.; Springel, Volker; Vogelsberger, Mark
<br/>
2021/10, Monthly Notices of the Royal Astronomical Society, 506, 4800
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.506.4687M" target="_blank">
<i>Effect of orbital trapping by bar resonances in the local U-V velocity field</i>
</a>
<br/>
Moreno, Edmundo; Fernández-Trincado, José G.; Schuster, William J.; Pérez-Villegas, Angeles; <strong>Chaves-Velasquez, Leonardo</strong>
<br/>
2021/10, Monthly Notices of the Royal Astronomical Society, 506, 4687
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...919...57H" target="_blank">
<i>ZFIRE: The Beginning of the End for Massive Galaxies at z   2 and Why Environment Matters</i>
</a>
<br/>
Harshan, Anishya; Gupta, Anshu; Tran, Kim-Vy; <strong>Rodriguez-Gomez, Vicente</strong>; Pillepich, Annalisa; Alcorn, Leo Y.; Nanayakkara, Themiya; Kacprzak, Glenn G.; Glazebrook, Karl
<br/>
2021/09, The Astrophysical Journal, 919, 57
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...918L..37F" target="_blank">
<i>APOGEE-2 Discovery of a Large Population of Relatively High-metallicity Globular Cluster Debris</i>
</a>
<br/>
Fernández-Trincado, José G.; Beers, Timothy C.; Queiroz, Anna. B. A.; Chiappini, Cristina; Minniti, Dante; Barbuy, Beatriz; Majewski, Steven R.; Ortigoza-Urdaneta, Mario; Moni Bidin, Christian; Robin, Annie C.; Moreno, Edmundo; <strong>Chaves-Velasquez, Leonardo</strong>; Villanova, Sandro; Lane, Richard R.; Pan, Kaike; Bizyaev, Dmitry
<br/>
2021/09, The Astrophysical Journal, 918, L37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...653A..31B" target="_blank">
<i>The miniJPAS survey: A preview of the Universe in 56 colors</i>
</a>
<br/>
Bonoli, S.; Marín-Franch, A.; Varela, J.; Vázquez Ramió, H.; Abramo, L. R.; Cenarro, A. J.; Dupke, R. A.; Vílchez, J. M.; Cristóbal-Hornillos, D.; González Delgado, R. M.; Hernández-Monteagudo, C.; López-Sanjuan, C.; Muniesa, D. J.; Civera, T.; Ederoclite, A.; Hernán-Caballero, A.; Marra, V.; Baqui, P. O.; Cortesi, A.; Cypriano, E. S.; <span id="2021A&A...653A..31B.authors" style="display: none;">Daflon, S.; de Amorim, A. L.; Díaz-García, L. A.; Diego, J. M.; Martínez-Solaeche, G.; Pérez, E.; Placco, V. M.; Prada, F.; Queiroz, C.; Alcaniz, J.; Alvarez-Candal, A.; Cepa, J.; Maroto, A. L.; Roig, F.; Siffert, B. B.; Taylor, K.; Benitez, N.; Moles, M.; Sodré, L.; Carneiro, S.; Mendes de Oliveira, C.; Abdalla, E.; Angulo, R. E.; Aparicio Resco, M.; Balaguera-Antolínez, A.; Ballesteros, F. J.; Brito-Silva, D.; Broadhurst, T.; Carrasco, E. R.; Castro, T.; Cid Fernandes, R.; Coelho, P.; de Melo, R. B.; Doubrawa, L.; Fernandez-Soto, A.; Ferrari, F.; Finoguenov, A.; García-Benito, R.; Iglesias-Páramo, J.; Jiménez-Teja, Y.; Kitaura, F. S.; Laur, J.; Lopes, P. A. A.; Lucatelli, G.; Martínez, V. J.; Maturi, M.; Overzier, R. A.; Pigozzo, C.; Quartin, M.; Rodríguez-Martín, J. E.; Salzano, V.; Tamm, A.; Tempel, E.; Umetsu, K.; Valdivielso, L.; von Marttens, R.; Zitrin, A.; Díaz-Martín, M. C.; López-Alegre, G.; López-Sainz, A.; Yanes-Díaz, A.; Rueda-Teruel, F.; Rueda-Teruel, S.; Abril Ibañez, J.; L Antón Bravo, J.; Bello Ferrer, R.; Bielsa, S.; Casino, J. M.; Castillo, J.; Chueca, S.; Cuesta, L.; Garzarán Calderaro, J.; Iglesias-Marzoa, R.; Íniguez, C.; Lamadrid Gutierrez, J. L.; Lopez-Martinez, F.; Lozano-Pérez, D.; Maícas Sacristán, N.; Molina-Ibáñez, E. L.; Moreno-Signes, A.; Rodríguez Llano, S.; Royo Navarro, M.; Tilve Rua, V.; Andrade, U.; Alfaro, E. J.; Akras, S.; Arnalte-Mur, P.; Ascaso, B.; Barbosa, C. E.; Beltrán Jiménez, J.; Benetti, M.; Bengaly, C. A. P.; Bernui, A.; Blanco-Pillado, J. J.; Borges Fernandes, M.; Bregman, J. N.; <strong>Bruzual, G.</strong>; Calderone, G.; Carvano, J. M.; Casarini, L.; Chaves-Montero, J.; Chies-Santos, A. L.; Coutinho de Carvalho, G.; Dimauro, P.; Duarte Puertas, S.; Figueruelo, D.; González-Serrano, J. I.; Guerrero, M. A.; Gurung-López, S.; Herranz, D.; Huertas-Company, M.; Irwin, J. A.; Izquierdo-Villalba, D.; Kanaan, A.; Kehrig, C.; Kirkpatrick, C. C.; Lim, J.; Lopes, A. R.; Lopes de Oliveira, R.; Marcos-Caballero, A.; Martínez-Delgado, D.; Martínez-González, E.; Martínez-Somonte, G.; Oliveira, N.; Orsi, A. A.; Penna-Lima, M.; Reis, R. R. R.; Spinoso, D.; Tsujikawa, S.; Vielva, P.; Vitorelli, A. Z.; Xia, J. Q.; Yuan, H. B.; Arroyo-Polonio, A.; Dantas, M. L. L.; Galarza, C. A.; Gonçalves, D. R.; Gonçalves, R. S.; Gonzalez, J. E.; Gonzalez, A. H.; Greisel, N.; Jiménez-Esteban, F.; Landim, R. G.; Lazzaro, D.; Magris, G.; Monteiro-Oliveira, R.; Pereira, C. B.; Rebouças, M. J.; Rodriguez-Espinosa, J. M.; Santos da Costa, S.; Telles, E.</span><span id="2021A&A...653A..31B.button"></span>
<script>
toggleAuthors('2021A&A...653A..31B', 171, 0);
</script>

<br/>
2021/09, Astronomy and Astrophysics, 653, A31
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJS..256....7B" target="_blank">
<i>Search for Collisionally Pumped 1720 MHz OH Masers in Star-forming Regions: A VLA Survey of 18 cm OH Masers toward 80 Class I Methanol Masers</i>
</a>
<br/>
Bayandina, O. S.; Val'tts, I. E.; <strong>Kurtz, S. E.</strong>; Shakhvorostova, N. N.
<br/>
2021/09, The Astrophysical Journal Supplement Series, 256, 7
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...918...27M" target="_blank">
<i>Photoionized Herbig-Haro Objects in the Orion Nebula through Deep High Spectral Resolution Spectroscopy. II. HH 204</i>
</a>
<br/>
Méndez-Delgado, J. E.; <strong>Henney, W. J.</strong>; Esteban, C.; García-Rojas, J.; Mesa-Delgado, A.; Arellano-Córdova, K. Z.
<br/>
2021/09, The Astrophysical Journal, 918, 27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...652C...6D" target="_blank">
<i>Studying the ISM at ∼10 pc scale in NGC 7793 with MUSE. I. Data description and properties of the ionised gas (Corrigendum)</i>
</a>
<br/>
Della Bruna, Lorenza; Adamo, Angela; Bik, Arjan; Fumagalli, Michele; Walterbos, Rene; Östlin, Göran; <strong>Bruzual, Gustavo</strong>; Calzetti, Daniela; Charlot, Stephane; Grasha, Kathryn; Smith, Linda J.; Thilker, David; Wofford, Aida
<br/>
2021/08, Astronomy and Astrophysics, 652, C6
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...652A..99A" target="_blank">
<i>The Galaxy Activity, Torus, and Outflow Survey (GATOS). II. Torus and polar dust emission in nearby Seyfert galaxies</i>
</a>
<br/>
Alonso-Herrero, A.; García-Burillo, S.; Hönig, S. F.; García-Bernete, I.; Ramos Almeida, C.; <strong>González-Martín, O.</strong>; López-Rodríguez, E.; Boorman, P. G.; Bunker, A. J.; Burtscher, L.; Combes, F.; Davies, R.; Díaz-Santos, T.; Gandhi, P.; García-Lorenzo, B.; Hicks, E. K. S.; Hunt, L. K.; Ichikawa, K.; Imanishi, M.; Izumi, T.; <span id="2021A&A...652A..99A.authors" style="display: none;">Labiano, A.; Levenson, N. A.; Packham, C.; Pereira-Santaella, M.; Ricci, C.; Rigopoulou, D.; Roche, P.; Rosario, D. J.; Rouan, D.; Shimizu, T.; Stalevski, M.; Wada, K.; Williamson, D.</span><span id="2021A&A...652A..99A.button"></span>
<script>
toggleAuthors('2021A&A...652A..99A', 33, 0);
</script>

<br/>
2021/08, Astronomy and Astrophysics, 652, A99
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...652A..98G" target="_blank">
<i>The Galaxy Activity, Torus, and Outflow Survey (GATOS). I. ALMA images of dusty molecular tori in Seyfert galaxies</i>
</a>
<br/>
García-Burillo, S.; Alonso-Herrero, A.; Ramos Almeida, C.; <strong>González-Martín, O.</strong>; Combes, F.; Usero, A.; Hönig, S.; Querejeta, M.; Hicks, E. K. S.; Hunt, L. K.; Rosario, D.; Davies, R.; Boorman, P. G.; Bunker, A. J.; Burtscher, L.; Colina, L.; Díaz-Santos, T.; Gandhi, P.; García-Bernete, I.; García-Lorenzo, B.; <span id="2021A&A...652A..98G.authors" style="display: none;">Ichikawa, K.; Imanishi, M.; Izumi, T.; Labiano, A.; Levenson, N. A.; López-Rodríguez, E.; Packham, C.; Pereira-Santaella, M.; Ricci, C.; Rigopoulou, D.; Rouan, D.; Shimizu, T.; Stalevski, M.; Wada, K.; Williamson, D.</span><span id="2021A&A...652A..98G.button"></span>
<script>
toggleAuthors('2021A&A...652A..98G', 35, 0);
</script>

<br/>
2021/08, Astronomy and Astrophysics, 652, A98
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021AJ....162...68O" target="_blank">
<i>Discovery of 22 GHz Water Masers in the Serpens South Region</i>
</a>
<br/>
Ortiz-León, Gisela N.; Plunkett, Adele L.; <strong>Loinard, Laurent</strong>; Dzib, Sergio A.; Rodríguez-Garza, Carolina B.; Pillai, Thushara; Gong, Yan; Brunthaler, Andreas
<br/>
2021/08, The Astronomical Journal, 162, 68
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.505.5260M" target="_blank">
<i>Early science with the Large Millimeter Telescope: a 1.1 mm AzTEC survey of red-Herschel dusty star-forming galaxies</i>
</a>
<br/>
Montaña, A.; Zavala, J. A.; Aretxaga, I.; Hughes, D. H.; Ivison, R. J.; Pope, A.; Sánchez-Argüelles, D.; Wilson, G. W.; Yun, M.; Cantua, O. A.; McCrackan, M.; Michałowski, M. J.; Valiante, E.; Arumugam, V.; Casey, C. M.; <strong>Chávez, R.</strong>; Colín-Beltrán, E.; Dannerbauer, H.; Dunlop, J. S.; Dunne, L.; <span id="2021MNRAS.505.5260M.authors" style="display: none;">Eales, S.; Ferrusca, D.; Gómez-Rivera, V.; Gómez-Ruiz, A. I.; de la Luz, V. H.; Maddox, S. J.; Narayanan, G.; Omont, A.; Rodríguez-Montoya, I.; Serjeant, S.; Schloerb, F. P.; Velázquez, M.; Ventura-González, S.; van der Werf, P.; Zeballos, M.</span><span id="2021MNRAS.505.5260M.button"></span>
<script>
toggleAuthors('2021MNRAS.505.5260M', 35, 0);
</script>

<br/>
2021/08, Monthly Notices of the Royal Astronomical Society, 505, 5260
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.505.2392T" target="_blank">
<i>AzTEC survey of the central molecular zone: data reduction, analysis, and preliminary results</i>
</a>
<br/>
Tang, Yuping; Wang, Q. Daniel; Wilson, Grant W.; Heyer, Mark H.; Gutermuth, Robert A.; Schloerb, Peter; Yun, Min S.; Bally, John; <strong>Loinard, Laurent</strong>; Silich, Sergiy; Chávez, Miguel; Haggard, Daryl; Montaña, Alfredo; Sánchez-Argüelles, David; Zeballos, Milagros; Zavala, Jorge A.; León-Tavares, Jonathan
<br/>
2021/08, Monthly Notices of the Royal Astronomical Society, 505, 2392
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.505.2074A" target="_blank">
<i>Star cluster survival in dark matter haloes: an old cluster in Eridanus II?</i>
</a>
<br/>
<strong>Alzate, Jairo A.</strong>; <strong>Lora, Verónica</strong>; <strong>Bruzual, Gustavo</strong>; Lomelí-Núñez, Luis; <strong>Cervantes Sodi, Bernardo</strong>
<br/>
2021/08, Monthly Notices of the Royal Astronomical Society, 505, 2074
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.505.3883T" target="_blank">
<i>Formation and fate of the born-again planetary nebula HuBi 1</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; <strong>Lora, V.</strong>; Montoro-Molina, B.; Guerrero, M. A.; Esquivel, A.
<br/>
2021/08, Monthly Notices of the Royal Astronomical Society, 505, 3883
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021NewA...8701603T" target="_blank">
<i>Gravitational interaction signatures in isolated galaxy triplet systems: A photometric analysis</i>
</a>
<br/>
Tawfeek, Amira A.; Saha, Kanak; Vaghmare, Kaustubh; Kembhavi, A. K.; Takey, Ali; <strong>Cervantes Sodi, Bernardo</strong>; <strong>Fritz, Jacopo</strong>; Awad, Zainab; Ali, Gamal B.; Hayman, Z. M.
<br/>
2021/08, New Astronomy, 87, 101603
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...651A..98F" target="_blank">
<i>Study of the thermal and nonthermal emission components in M 31: the Sardinia Radio Telescope view at 6.6 GHz</i>
</a>
<br/>
Fatigoni, S.; Radiconi, F.; Battistelli, E. S.; Murgia, M.; Carretti, E.; Castangia, P.; Concu, R.; de Bernardis, P.; <strong>Fritz, J.</strong>; Genova-Santos, R.; Govoni, F.; Guidi, F.; Lamagna, L.; Masi, S.; Melis, A.; Paladini, R.; Perez-Toledo, F. M.; Piacentini, F.; Poppi, S.; Rebolo, R.; <span id="2021A&A...651A..98F.authors" style="display: none;">Rubino-Martin, J. A.; Surcis, G.; Tarchi, A.; Vacca, V.</span><span id="2021A&A...651A..98F.button"></span>
<script>
toggleAuthors('2021A&A...651A..98F', 24, 0);
</script>

<br/>
2021/07, Astronomy and Astrophysics, 651, A98
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...651A..91E" target="_blank">
<i>The dust-gas AGN torus as constrained from X-ray and mid-infrared observations</i>
</a>
<br/>
<strong>Esparza-Arredondo, D.</strong>; <strong>Gonzalez-Martín, O.</strong>; Dultzin, D.; Masegosa, J.; Ramos-Almeida, C.; García-Bernete, I.; <strong>Fritz, J.</strong>; <strong>Osorio-Clavijo, N.</strong>
<br/>
2021/07, Astronomy and Astrophysics, 651, A91
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...651A..86D" target="_blank">
<i>A global view on star formation: The GLOSTAR Galactic plane survey. II. Supernova remnants in the first quadrant of the Milky Way</i>
</a>
<br/>
Dokara, R.; Brunthaler, A.; Menten, K. M.; Dzib, S. A.; Reich, W.; Cotton, W. D.; Anderson, L. D.; Chen, C. -H. R.; Gong, Y.; Medina, S. -N. X.; Ortiz-León, G. N.; Rugel, M.; Urquhart, J. S.; Wyrowski, F.; Yang, A. Y.; Beuther, H.; Billington, S. J.; Csengeri, T.; <strong>Carrasco-González, C.</strong>; Roy, N.
<br/>
2021/07, Astronomy and Astrophysics, 651, A86
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...651A..85B" target="_blank">
<i>A global view on star formation: The GLOSTAR Galactic plane survey. I. Overview and first results for the Galactic longitude range 28° &lt; l &lt; 36°</i>
</a>
<br/>
Brunthaler, A.; Menten, K. M.; Dzib, S. A.; Cotton, W. D.; Wyrowski, F.; Dokara, R.; Gong, Y.; Medina, S. -N. X.; Müller, P.; Nguyen, H.; Ortiz-León, G. N.; Reich, W.; Rugel, M. R.; Urquhart, J. S.; Winkel, B.; Yang, A. Y.; Beuther, H.; Billington, S.; <strong>Carrasco-Gonzalez, C.</strong>; Csengeri, T.; <span id="2021A&A...651A..85B.authors" style="display: none;">Murugeshan, C.; Pandian, J. D.; Roy, N.</span><span id="2021A&A...651A..85B.button"></span>
<script>
toggleAuthors('2021A&A...651A..85B', 23, 0);
</script>

<br/>
2021/07, Astronomy and Astrophysics, 651, A85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...915..115L" target="_blank">
<i>Huffing and Puffing and Blowing Your House In: Strong Stellar Wind Interaction with a Supermassive Black Hole</i>
</a>
<br/>
<strong>Lora, V.</strong>; Raga, A. C.; Cantó, J.; Esquivel, A.
<br/>
2021/07, The Astrophysical Journal, 915, 115
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...915...99I" target="_blank">
<i>Persistent Non-Gaussian Structure in the Image of Sagittarius A* at 86 GHz</i>
</a>
<br/>
Issaoun, S.; Johnson, M. D.; Blackburn, L.; Broderick, A.; Tiede, P.; Wielgus, M.; Doeleman, S. S.; Falcke, H.; Akiyama, K.; Bower, G. C.; Brinkerink, C. D.; Chael, A.; Cho, I.; Gómez, J. L.; Hernández-Gómez, A.; Hughes, D.; Kino, M.; Krichbaum, T. P.; Liuzzo, E.; <strong>Loinard, L.</strong>; <span id="2021ApJ...915...99I.authors" style="display: none;">Markoff, S.; Marrone, D. P.; Mizuno, Y.; Moran, J. M.; Pidopryhora, Y.; Ros, E.; Rygl, K.; Shen, Z. -Q.; Wagner, J.</span><span id="2021ApJ...915...99I.button"></span>
<script>
toggleAuthors('2021ApJ...915...99I', 29, 0);
</script>

<br/>
2021/07, The Astrophysical Journal, 915, 99
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.505..283F" target="_blank">
<i>Constraints on the dust extinction law of the Galaxy with Swift/UVOT, Gaia, and 2MASS</i>
</a>
<br/>
Ferreras, Ignacio; Tress, Mónica; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane; Page, Mat; Yershov, Vladimir; Kuin, Paul; Kawata, Daisuke; Cropper, Mark
<br/>
2021/07, Monthly Notices of the Royal Astronomical Society, 505, 283
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.505.1441G" target="_blank">
<i>Independent cosmological constraints from high-z H II galaxies: new results from VLT-KMOS data</i>
</a>
<br/>
González-Morán, Ana Luisa; <strong>Chávez, Ricardo</strong>; Terlevich, Elena; Terlevich, Roberto; Fernández-Arenas, David; Bresolin, Fabio; Plionis, Manolis; Melnick, Jorge; Basilakos, Spyros; Telles, Eduardo
<br/>
2021/07, Monthly Notices of the Royal Astronomical Society, 505, 1441
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...915L..10S" target="_blank">
<i>Gravity-driven Magnetic Field at  1000 au Scales in High-mass Star Formation</i>
</a>
<br/>
Sanhueza, Patricio; Girart, Josep Miquel; Padovani, Marco; Galli, Daniele; Hull, Charles L. H.; Zhang, Qizhou; Cortes, Paulo; Stephens, Ian W.; Fernández-López, Manuel; Jackson, James M.; Frau, Pau; Kock, Patrick M.; Wu, Benjamin; <strong>Zapata, Luis A.</strong>; Olguin, Fernando; Lu, Xing; Silva, Andrea; Tang, Ya-Wen; Sakai, Takeshi; Guzmán, Andrés E.; <span id="2021ApJ...915L..10S.authors" style="display: none;">Tatematsu, Ken'ichi; Nakamura, Fumitaka; Chen, Huei-Ru Vivien</span><span id="2021ApJ...915L..10S.button"></span>
<script>
toggleAuthors('2021ApJ...915L..10S', 23, 0);
</script>

<br/>
2021/07, The Astrophysical Journal, 915, L10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ExA....51..729F" target="_blank">
<i>Chronos: A NIR spectroscopic galaxy survey to probe the most fundamental stages of galaxy evolution</i>
</a>
<br/>
Ferreras, I.; Cropper, M.; Sharples, R.; Bland-Hawthorn, J.; <strong>Bruzual, G.</strong>; Charlot, S.; Conselice, C. J.; Driver, S.; Dunlop, J.; Hopkins, A. M.; Kaviraj, S.; Kitching, T.; Barbera, F. La; Lahav, O.; Pasquali, A.; Serjeant, S.; Silk, J.; Windhorst, R.
<br/>
2021/06, Experimental Astronomy, 51, 729
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...914...88P" target="_blank">
<i>Spiral Arms and a Massive Dust Disk with Non-Keplerian Kinematics: Possible Evidence for Gravitational Instability in the Disk of Elias 2-27</i>
</a>
<br/>
Paneque-Carreño, T.; Pérez, L. M.; Benisty, M.; Hall, C.; Veronesi, B.; Lodato, G.; Sierra, A.; Carpenter, J. M.; Andrews, S. M.; Bae, Jaehan; Henning, Th.; Kwon, W.; Linz, H.; <strong>Loinard, L.</strong>; Pinte, C.; Ricci, L.; Tazzari, M.; Testi, L.; Wilner, D.
<br/>
2021/06, The Astrophysical Journal, 914, 88
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...914L..24L" target="_blank">
<i>Erratum "A Low-mass Cold and Quiescent Core Population in a Massive Star Protocluster" (2021, ApJL, 912, L7)</i>
</a>
<br/>
Li, Shanghuo; Lu, Xing; Zhang, Qizhou; Lee, Chang-Won; Sanhueza, Patricio; Beuther, Henrik; Jiménez-Serra, Izaskun; Qiu, Keping; <strong>Palau, Aina</strong>; Feng, Siyi; Pillai, Thushara; Kim, Kee-Tae; Liu, Hong-Li; Girart, Josep Miquel.; Liu, Tie; Wang, Junzhi; Wang, Ke; Liu, Hauyu Baobab; Smith, Howard A.; Li, Di; <span id="2021ApJ...914L..24L.authors" style="display: none;">Lee, Jeong-Eun; Li, Fei; Li, Juan; Kim, Shinyoung; Yue, Nannan; Strom, Shaye</span><span id="2021ApJ...914L..24L.button"></span>
<script>
toggleAuthors('2021ApJ...914L..24L', 26, 0);
</script>

<br/>
2021/06, The Astrophysical Journal, 914, L24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021Natur.594..187M" target="_blank">
<i>Anisotropic satellite galaxy quenching modulated by black hole activity</i>
</a>
<br/>
Martín-Navarro, Ignacio; Pillepich, Annalisa; Nelson, Dylan; <strong>Rodriguez-Gomez, Vicente</strong>; Donnari, Martina; Hernquist, Lars; Springel, Volker
<br/>
2021/06, Nature, 594, 187
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...914L...1C" target="_blank">
<i>Zooming into the Collimation Zone in a Massive Protostellar Jet</i>
</a>
<br/>
<strong>Carrasco-González, Carlos</strong>; Sanna, Alberto; <strong>Rodríguez-Kamenetzky, Adriana</strong>; Moscadelli, Luca; Hoare, Melvin; Torrelles, José M.; <strong>Galván-Madrid, Roberto</strong>; Izquierdo, Andrés F.
<br/>
2021/06, The Astrophysical Journal, 914, L1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...914...27V" target="_blank">
<i>GASP. XXXIII. The Ability of Spatially Resolved Data to Distinguish among the Different Physical Mechanisms Affecting Galaxies in Low-density Environments</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Moretti, Alessia; Franchetto, Andrea; Bacchini, Cecilia; McGee, Sean; Jaffé, Yara L.; Mingozzi, Matilde; Werle, Ariel; Tomičić, Neven; <strong>Fritz, Jacopo</strong>; Bettoni, Daniela; Wolter, Anna; Gullieuszik, Marco
<br/>
2021/06, The Astrophysical Journal, 914, 27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...913..117U" target="_blank">
<i>Impact of Differential Dust Settling on the SED and Polarization: Application to the Inner Region of the HL Tau Disk</i>
</a>
<br/>
Ueda, Takahiro; Kataoka, Akimasa; Zhang, Shangjia; Zhu, Zhaohuan; <strong>Carrasco-González, Carlos</strong>; Sierra, Anibal
<br/>
2021/06, The Astrophysical Journal, 913, 117
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.504.2325S" target="_blank">
<i>Modelling H<SUB>2</SUB> and its effects on star formation using a joint implementation of GADGET-3 and KROME</i>
</a>
<br/>
Sillero, Emanuel; Tissera, Patricia B.; Lambas, Diego G.; Bovino, Stefano; Schleicher, Dominik R.; Grassi, Tommaso; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane
<br/>
2021/06, Monthly Notices of the Royal Astronomical Society, 504, 2325
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.504.1733S" target="_blank">
<i>Thermal formaldehyde emission in NGC 7538 IRS 1</i>
</a>
<br/>
Shuvo, Onic I.; Araya, E. D.; Tan, W. S.; Hofner, P.; <strong>Kurtz, S.</strong>; Pihlström, Y. M.; Hoffman, I. M.
<br/>
2021/06, Monthly Notices of the Royal Astronomical Society, 504, 1733
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.504..338P" target="_blank">
<i>A Galactic survey of radio jets from massive protostars</i>
</a>
<br/>
Purser, S. J. D.; Lumsden, S. L.; Hoare, M. G.; <strong>Kurtz, S.</strong>
<br/>
2021/06, Monthly Notices of the Royal Astronomical Society, 504, 338
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.503.6112S" target="_blank">
<i>Ultraviolet spectra of extreme nearby star-forming regions: Evidence for an overabundance of very massive stars</i>
</a>
<br/>
Senchyna, Peter; Stark, Daniel P.; Charlot, Stéphane; Chevallard, Jacopo; <strong>Bruzual, Gustavo</strong>; Vidal-García, Alba
<br/>
2021/06, Monthly Notices of the Royal Astronomical Society, 503, 6112
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...913...29F" target="_blank">
<i>Magnetic Fields in Massive Star-forming Regions (MagMaR). I. Linear Polarized Imaging of the Ultracompact H II Region G5.89-0.39</i>
</a>
<br/>
Fernández-López, M.; Sanhueza, P.; <strong>Zapata, L. A.</strong>; Stephens, I.; Hull, C.; Zhang, Q.; Girart, J. M.; Koch, P. M.; Cortés, P.; Silva, A.; Tatematsu, K.; Nakamura, F.; Guzmán, A. E.; Nguyen Luong, Q.; Guzmán Ccolque, E.; Tang, Y. -W.; Chen, H. -R. V.
<br/>
2021/05, The Astrophysical Journal, 913, 29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...649A.113B" target="_blank">
<i>Fragmentation and kinematics in high-mass star formation. CORE-extension targeting two very young high-mass star-forming regions</i>
</a>
<br/>
Beuther, H.; Gieser, C.; Suri, S.; Linz, H.; Klaassen, P.; Semenov, D.; Winters, J. M.; Henning, Th.; Soler, J. D.; Urquhart, J. S.; Syed, J.; Feng, S.; Möller, T.; Beltrán, M. T.; Sánchez-Monge, Á.; Longmore, S. N.; Peters, T.; Ballesteros-Paredes, J.; Schilke, P.; Moscadelli, L.; <span id="2021A&A...649A.113B.authors" style="display: none;">Palau, A.; Cesaroni, R.; Lumsden, S.; Pudritz, R.; Wyrowski, F.; Kuiper, R.; Ahmadi, A.</span><span id="2021A&A...649A.113B.button"></span>
<script>
toggleAuthors('2021A&A...649A.113B', 27, 0);
</script>

<br/>
2021/05, Astronomy and Astrophysics, 649, A113
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021PhRvD.103j4047K" target="_blank">
<i>Constraints on black-hole charges with the 2017 EHT observations of M87*</i>
</a>
<br/>
Kocherlakota, Prashant; Rezzolla, Luciano; Falcke, Heino; Fromm, Christian M.; Kramer, Michael; Mizuno, Yosuke; Nathanail, Antonios; Olivares, Héctor; Younsi, Ziri; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Algaba, Juan Carlos; Anantua, Richard; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; <span id="2021PhRvD.103j4047K.authors" style="display: none;">Benson, Bradford A.; Bintley, Dan; Blackburn, Lindy; Blundell, Raymond; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Boyce, Hope; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Chesler, Paul M.; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crawford, Thomas M.; Crew, Geoffrey B.; Cruz-Osorio, Alejandro; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Doeleman, Sheperd S.; Eatough, Ralph P.; Farah, Joseph; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Ford, H. Alyson; Fuentes, Antonio; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gómez, José L.; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Haggard, Daryl; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Dong-Jin; Kim, Jae-Young; Kim, Jongsoo; Kim, Junhan; Kino, Motoki; Koay, Jun Yi; Kofuji, Yutaro; Koch, Patrick M.; Koyama, Shoko; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Levis, Aviad; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Lindahl, Greg; Liu, Jun; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Musoke, Gibwa; Mejías, Alejandro Mus; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neilsen, Joseph; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Nowak, Michael A.; Okino, Hiroki; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Pötzl, Felix M.; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Ricarte, Angelo; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Sun, He; Tazaki, Fumie; Tetarenko, Alexandra J.; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Ward-Thompson, Derek; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guang-Yao; Zhao, Shan-Shan; <strong>EHT Collaboration</strong></span><span id="2021PhRvD.103j4047K.button"></span>
<script>
toggleAuthors('2021PhRvD.103j4047K', 237, 0);
</script>

<br/>
2021/05, Physical Review D, 103, 104047
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...912..159P" target="_blank">
<i>Does the Magnetic Field Suppress Fragmentation in Massive Dense Cores?</i>
</a>
<br/>
<strong>Palau, Aina</strong>; Zhang, Qizhou; Girart, Josep M.; Liu, Junhao; Rao, Ramprasad; Koch, Patrick M.; Estalella, Robert; Chen, Huei-Ru Vivien; Liu, Hauyu Baobab; Qiu, Keping; Li, Zhi-Yun; <strong>Zapata, Luis A.</strong>; Bontemps, Sylvain; Ho, Paul T. P.; Beuther, Henrik; Ching, Tao-Chung; Shinnaga, Hiroko; Ahmadi, Aida
<br/>
2021/05, The Astrophysical Journal, 912, 159
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...649A..79G" target="_blank">
<i>The miniJPAS survey. Identification and characterization of galaxy populations with the J-PAS photometric system</i>
</a>
<br/>
González Delgado, R. M.; Díaz-García, L. A.; de Amorim, A.; <strong>Bruzual, G.</strong>; Cid Fernandes, R.; Pérez, E.; Bonoli, S.; Cenarro, A. J.; Coelho, P. R. T.; Cortesi, A.; García-Benito, R.; López Fernández, R.; Martínez-Solaeche, G.; Rodríguez-Martín, J. E.; Magris, G.; Mejía-Narvaez, A.; Brito-Silva, D.; Abramo, L. R.; Diego, J. M.; Dupke, R. A.; <span id="2021A&A...649A..79G.authors" style="display: none;">Hernán-Caballero, A.; Hernández-Monteagudo, C.; López-Sanjuan, C.; Marín-Franch, A.; Marra, V.; Moles, M.; Montero-Dorta, A.; Queiroz, C.; Sodré, L.; Varela, J.; Vázquez Ramió, H.; Vílchez, J. M.; Baqui, P. O.; Benítez, N.; Cristóbal-Hornillos, D.; Ederoclite, A.; Mendes de Oliveira, C.; Civera, T.; Muniesa, D.; Taylor, K.; Tempel, E.; J-PAS Collaboration</span><span id="2021A&A...649A..79G.button"></span>
<script>
toggleAuthors('2021A&A...649A..79G', 42, 0);
</script>

<br/>
2021/05, Astronomy and Astrophysics, 649, A79
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...912...35N" target="_blank">
<i>The Polarized Image of a Synchrotron-emitting Ring of Gas Orbiting a Black Hole</i>
</a>
<br/>
Narayan, Ramesh; Palumbo, Daniel C. M.; Johnson, Michael D.; Gelles, Zachary; Himwich, Elizabeth; Chang, Dominic O.; Ricarte, Angelo; Dexter, Jason; Gammie, Charles F.; Chael, Andrew A.; Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Algaba, Juan Carlos; Anantua, Richard; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; <span id="2021ApJ...912...35N.authors" style="display: none;">Baloković, Mislav; Barrett, John; Benson, Bradford A.; Bintley, Dan; Blackburn, Lindy; Blundell, Raymond; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Boyce, Hope; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Chesler, Paul M.; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crawford, Thomas M.; Crew, Geoffrey B.; Cruz-Osorio, Alejandro; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Farah, Joseph; Fish, Vincent L.; Fomalont, Ed; Ford, H. Alyson; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Fuentes, Antonio; Galison, Peter; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gómez, José L.; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Haggard, Daryl; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Dong-Jin; Kim, Jae-Young; Kim, Jongsoo; Kim, Junhan; Kino, Motoki; Koay, Jun Yi; Kofuji, Yutaro; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Levis, Aviad; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Lindahl, Greg; Liu, Jun; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Mizuno, Yosuke; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Musoke, Gibwa; Mejías, Alejandro Mus; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayanan, Gopal; Natarajan, Iniyan; Nathanail, Antonios; Neilsen, Joey; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Nowak, Michael A.; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Pötzl, Felix M.; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Sun, He; Tazaki, Fumie; Tetarenko, Alexandra J.; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Ward-Thompson, Derek; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guang-Yao; Zhao, Shan-Shan</span><span id="2021ApJ...912...35N.button"></span>
<script>
toggleAuthors('2021ApJ...912...35N', 240, 0);
</script>

<br/>
2021/05, The Astrophysical Journal, 912, 35
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...912L...7L" target="_blank">
<i>A Low-mass Cold and Quiescent Core Population in a Massive Star Protocluster</i>
</a>
<br/>
Li, Shanghuo; Lu, Xing; Zhang, Qizhou; Lee, Chang Won; Sanhueza, Patricio; Beuther, Henrik; Jiménez-Serra, Izaskun,; Qiu, Keping; <strong>Palau, Aina</strong>; Feng, Siyi; Pillai, Thushara; Kim, Kee-Tae; Liu, Hong-Li; Girart, Josep Miquel.; Liu, Tie; Wang, Junzhi; Wang, Ke; Liu, Hauyu Baobab; Smith, Howard A.; Li, Di; <span id="2021ApJ...912L...7L.authors" style="display: none;">Lee, Jeong-Eun; Li, Fei; Li, Juan; Kim, Shinyoung; Yue, Nannan; Strom, Shaye</span><span id="2021ApJ...912L...7L.button"></span>
<script>
toggleAuthors('2021ApJ...912L...7L', 26, 0);
</script>

<br/>
2021/05, The Astrophysical Journal, 912, L7
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021AJ....161..251O" target="_blank">
<i>Erratum: Studies of NGC 6720 with Calibrated HST/WFC3 Emission-line Filter Images. I. Structure and Evolution (2013a, AJ, 145, 92) and II. Physical Conditions (2013b, AJ, 145, 93)</i>
</a>
<br/>
O'Dell, C. R.; Ferland, G. J.; <strong>Henney, W. J.</strong>; Peimbert, M.
<br/>
2021/05, The Astronomical Journal, 161, 251
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...912L...5W" target="_blank">
<i>The First Radio Spectrum of a Rapidly Rotating A-type Star</i>
</a>
<br/>
White, Jacob Aaron; <strong>Tapia-Vázquez, F.</strong>; Hughes, A. G.; Moór, A.; Matthews, B.; Wilner, D.; Aufdenberg, J.; Fehér, O.; Hughes, A. M.; De la Luz, V.; McNaughton, A.; <strong>Zapata, L. A.</strong>
<br/>
2021/05, The Astrophysical Journal, 912, L5
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...649A..18G" target="_blank">
<i>A nearby galaxy perspective on dust evolution. Scaling relations and constraints on the dust build-up in galaxies with the DustPedia and DGS samples</i>
</a>
<br/>
Galliano, Frédéric; Nersesian, Angelos; Bianchi, Simone; De Looze, Ilse; Roychowdhury, Sambit; Baes, Maarten; Casasola, Viviana; Cassará, Letizia P.; Dobbels, Wouter; <strong>Fritz, Jacopo</strong>; Galametz, Maud; Jones, Anthony P.; Madden, Suzanne C.; Mosenkov, Aleksandr; Xilouris, Emmanuel M.; Ysard, Nathalie
<br/>
2021/05, Astronomy and Astrophysics, 649, A18
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.503.1543T" target="_blank">
<i>Carbon dust in the evolved born-again planetary nebulae A 30 and A 78</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; <strong>Jiménez-Hernández, P.</strong>; <strong>Rodríguez-González, J. B.</strong>; <strong>Estrada-Dorado, S.</strong>; Guerrero, M. A.; <strong>Gómez-González, V. M. A.</strong>; Ramos-Larios, G.; García-Hernández, D. A.; Todt, H.
<br/>
2021/05, Monthly Notices of the Royal Astronomical Society, 503, 1543
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...911..144C" target="_blank">
<i>GASP XXXIV: Unfolding the Thermal Side of Ram Pressure Stripping in the Jellyfish Galaxy JO201</i>
</a>
<br/>
Campitiello, M. Giulia; Ignesti, Alessandro; Gitti, Myriam; Brighenti, Fabrizio; Radovich, Mario; Wolter, Anna; Tomičić, Neven; Bellhouse, Callum; Poggianti, Bianca M.; Moretti, Alessia; Vulcani, Benedetta; Jaffé, Yara L.; Paladino, Rosita; Müller, Ancla; <strong>Fritz, Jacopo</strong>; Lourenço, Ana C. C.; Gullieuszik, Marco
<br/>
2021/04, The Astrophysical Journal, 911, 144
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...911L..11E" target="_blank">
<i>Broadband Multi-wavelength Properties of M87 during the 2017 Event Horizon Telescope Campaign</i>
</a>
<br/>
EHT MWL Science Working Group; Algaba, J. C.; Anczarski, J.; Asada, K.; Baloković, M.; Chandra, S.; Cui, Y. -Z.; Falcone, A. D.; Giroletti, M.; Goddi, C.; Hada, K.; Haggard, D.; Jorstad, S.; Kaur, A.; Kawashima, T.; Keating, G.; Kim, J. -Y.; Kino, M.; Komossa, S.; Kravchenko, E. V.; <span id="2021ApJ...911L..11E.authors" style="display: none;">Krichbaum, T. P.; Lee, S. -S.; Lu, R. -S.; Lucchini, M.; Markoff, S.; Neilsen, J.; Nowak, M. A.; Park, J.; Principe, G.; Ramakrishnan, V.; Reynolds, M. T.; Sasada, M.; Savchenko, S. S.; Williamson, K. E.; Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Anantua, Richard; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Barrett, John; Bintley, Dan; Benson, Bradford A.; Blackburn, Lindy; Blundell, Raymond; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Boyce, Hope; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-Kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Chesler, Paul M.; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crawford, Thomas M.; Crew, Geoffrey B.; Cruz-Osorio, Alejandro; Davelaar, Jordy; de Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Farah, Joseph; Fish, Vincent L.; Fomalont, Ed; Ford, H. Alyson; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Fuentes, Antonio; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Gold, Roman; Gómez, José L.; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jiménez-Rosales, Alejandra; Johnson, Michael D.; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kettenis, Mark; Kim, Dong-Jin; Kim, Jongsoo; Kim, Junhan; Koay, Jun Yi; Kofuji, Yutaro; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Kuo, Cheng-Yu; Lauer, Tod R.; Levis, Aviad; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Lindahl, Greg; Liu, Jun; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Mizuno, Yosuke; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Musoke, Gibwa; Mejías, Alejandro Mus; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Nathanail, Antonios; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; Popstefanija, Aleksandar; Porth, Oliver; Pötzl, Felix M.; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ricarte, Angelo; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; Soohoo, Jason; Sun, He; Tazaki, Fumie; Tetarenko, Alexandra J.; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Ward-Thompson, Derek; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guang-Yao; Zhao, Shan-Shan; Fermi Large Area Telescope Collaboration; Principe, G.; Giroletti, M.; D'Ammando, F.; Orienti, M.; H. E. S. S. Collaboration; Abdalla, H.; Adam, R.; Aharonian, F.; Benkhali, F. Ait; Angüner, E. O.; Arcaro, C.; Armand, C.; Armstrong, T.; Ashkar, H.; Backes, M.; Baghmanyan, V.; Barbosa Martins, V.; Barnacka, A.; Barnard, M.; Becherini, Y.; Berge, D.; Bernlöhr, K.; Bi, B.; Böttcher, M.; Boisson, C.; Bolmont, J.; de Lavergne, M. De Bony; Breuhaus, M.; Brun, F.; Brun, P.; Bryan, M.; Büchele, M.; Bulik, T.; Bylund, T.; Caroff, S.; Carosi, A.; Casanova, S.; Chand, T.; Chen, A.; Cotter, G.; Curyło, M.; Damascene Mbarubucyeye, J.; Davids, I. D.; Davies, J.; Deil, C.; Devin, J.; Dewilt, P.; Dirson, L.; Djannati-Ataï, A.; Dmytriiev, A.; Donath, A.; Doroshenko, V.; Duffy, C.; Dyks, J.; Egberts, K.; Eichhorn, F.; Einecke, S.; Emery, G.; Ernenwein, J. -P.; Feijen, K.; Fegan, S.; Fiasson, A.; de Clairfontaine, G. Fichet; Fontaine, G.; Funk, S.; Füßling, M.; Gabici, S.; Gallant, Y. A.; Giavitto, G.; Giunti, L.; Glawion, D.; Glicenstein, J. F.; Gottschall, D.; Grondin, M. -H.; Hahn, J.; Haupt, M.; Hermann, G.; Hinton, J. A.; Hofmann, W.; Hoischen, C.; Holch, T. L.; Holler, M.; Hörbe, M.; Horns, D.; Huber, D.; Jamrozy, M.; Jankowsky, D.; Jankowsky, F.; Jardin-Blicq, A.; Joshi, V.; Jung-Richardt, I.; Kasai, E.; Kastendieck, M. A.; Katarzyński, K.; Katz, U.; Khangulyan, D.; Khélifi, B.; Klepser, S.; Kluźniak, W.; Komin, Nu.; Konno, R.; Kosack, K.; Kostunin, D.; Kreter, M.; Lamanna, G.; Lemière, A.; Lemoine-Goumard, M.; Lenain, J. -P.; Levy, C.; Lohse, T.; Lypova, I.; Mackey, J.; Majumdar, J.; Malyshev, D.; Malyshev, D.; Marandon, V.; Marchegiani, P.; Marcowith, A.; Mares, A.; Martí-Devesa, G.; Marx, R.; Maurin, G.; Meintjes, P. J.; Meyer, M.; Moderski, R.; Mohamed, M.; Mohrmann, L.; Montanari, A.; Moore, C.; Morris, P.; Moulin, E.; Muller, J.; Murach, T.; Nakashima, K.; Nayerhoda, A.; de Naurois, M.; Ndiyavala, H.; Niederwanger, F.; Niemiec, J.; Oakes, L.; O'Brien, P.; Odaka, H.; Ohm, S.; Olivera-Nieto, L.; de Ona Wilhelmi, E.; Ostrowski, M.; Panter, M.; Panny, S.; Parsons, R. D.; Peron, G.; Peyaud, B.; Piel, Q.; Pita, S.; Poireau, V.; Noel, A. Priyana; Prokhorov, D. A.; Prokoph, H.; Pühlhofer, G.; Punch, M.; Quirrenbach, A.; Rauth, R.; Reichherzer, P.; Reimer, A.; Reimer, O.; Remy, Q.; Renaud, M.; Rieger, F.; Rinchiuso, L.; Romoli, C.; Rowell, G.; Rudak, B.; Ruiz-Velasco, E.; Sahakian, V.; Sailer, S.; Sanchez, D. A.; Santangelo, A.; Sasaki, M.; Scalici, M.; Schutte, H. M.; Schwanke, U.; Schwemmer, S.; Seglar-Arroyo, M.; Senniappan, M.; Seyffert, A. S.; Shafi, N.; Shiningayamwe, K.; Simoni, R.; Sinha, A.; Sol, H.; Specovius, A.; Spencer, S.; Spir-Jacob, M.; Stawarz, Ł.; Sun, L.; Steenkamp, R.; Stegmann, C.; Steinmassl, S.; Steppa, C.; Takahashi, T.; Tavernier, T.; Taylor, A. M.; Terrier, R.; Tiziani, D.; Tluczykont, M.; Tomankova, L.; Trichard, C.; Tsirou, M.; Tuffs, R.; Uchiyama, Y.; van der Walt, D. J.; van Eldik, C.; van Rensburg, C.; van Soelen, B.; Vasileiadis, G.; Veh, J.; Venter, C.; Vincent, P.; Vink, J.; Völk, H. J.; Vuillaume, T.; Wadiasingh, Z.; Wagner, S. J.; Watson, J.; Werner, F.; White, R.; Wierzcholska, A.; Wong, Yu Wun; Yusafzai, A.; Zacharias, M.; Zanin, R.; Zargaryan, D.; Zdziarski, A. A.; Zech, A.; Zhu, S. J.; Zorn, J.; Zouari, S.; Żywucka, N.; MAGIC Collaboration; Acciari, V. A.; Ansoldi, S.; Antonelli, L. A.; Engels, A. Arbet; Artero, M.; Asano, K.; Baack, D.; Babić, A.; Baquero, A.; de Almeida, U. Barres; Barrio, J. A.; Becerra González, J.; Bednarek, W.; Bellizzi, L.; Bernardini, E.; Bernardos, M.; Berti, A.; Besenrieder, J.; Bhattacharyya, W.; Bigongiari, C.; Biland, A.; Blanch, O.; Bonnoli, G.; Bošnjak, Ž.; Busetto, G.; Carosi, R.; Ceribella, G.; Cerruti, M.; Chai, Y.; Chilingarian, A.; Cikota, S.; Colak, S. M.; Colombo, E.; Contreras, J. L.; Cortina, J.; Covino, S.; D'Amico, G.; D'Elia, V.; da Vela, P.; Dazzi, F.; de Angelis, A.; de Lotto, B.; Delfino, M.; Delgado, J.; Delgado Mendez, C.; Depaoli, D.; di Pierro, F.; di Venere, L.; Do Souto Espiñeira, E.; Dominis Prester, D.; Donini, A.; Dorner, D.; Doro, M.; Elsaesser, D.; Ramazani, V. Fallah; Fattorini, A.; Ferrara, G.; Fonseca, M. V.; Font, L.; Fruck, C.; Fukami, S.; García López, R. J.; Garczarczyk, M.; Gasparyan, S.; Gaug, M.; Giglietto, N.; Giordano, F.; Gliwny, P.; Godinović, N.; Green, J. G.; Green, D.; Hadasch, D.; Hahn, A.; Heckmann, L.; Herrera, J.; Hoang, J.; Hrupec, D.; Hütten, M.; Inada, T.; Inoue, S.; Ishio, K.; Iwamura, Y.; Jiménez, I.; Jormanainen, J.; Jouvin, L.; Kajiwara, Y.; Karjalainen, M.; Kerszberg, D.; Kobayashi, Y.; Kubo, H.; Kushida, J.; Lamastra, A.; Lelas, D.; Leone, F.; Lindfors, E.; Lombardi, S.; Longo, F.; López-Coto, R.; López-Moya, M.; López-Oramas, A.; Loporchio, S.; Machado de Oliveira Fraga, B.; Maggio, C.; Majumdar, P.; Makariev, M.; Mallamaci, M.; Maneva, G.; Manganaro, M.; Mannheim, K.; Maraschi, L.; Mariotti, M.; Martínez, M.; Mazin, D.; Menchiari, S.; Mender, S.; Mićanović, S.; Miceli, D.; Miener, T.; Minev, M.; Miranda, J. M.; Mirzoyan, R.; Molina, E.; Moralejo, A.; Morcuende, D.; Moreno, V.; Moretti, E.; Neustroev, V.; Nigro, C.; Nilsson, K.; Nishijima, K.; Noda, K.; Nozaki, S.; Ohtani, Y.; Oka, T.; Otero-Santos, J.; Paiano, S.; Palatiello, M.; Paneque, D.; Paoletti, R.; Paredes, J. M.; Pavletić, L.; Peñil, P.; Perennes, C.; Persic, M.; Moroni, P. G. Prada; Prandini, E.; Priyadarshi, C.; Puljak, I.; Rhode, W.; Ribó, M.; Rico, J.; Righi, C.; Rugliancich, A.; Saha, L.; Sahakyan, N.; Saito, T.; Sakurai, S.; Satalecka, K.; Saturni, F. G.; Schleicher, B.; Schmidt, K.; Schweizer, T.; Sitarek, J.; Šnidarić, I.; Sobczynska, D.; Spolon, A.; Stamerra, A.; Strom, D.; Strzys, M.; Suda, Y.; Surić, T.; Takahashi, M.; Tavecchio, F.; Temnikov, P.; Terzić, T.; Teshima, M.; Tosti, L.; Truzzi, S.; Tutone, A.; Ubach, S.; van Scherpenberg, J.; Vanzo, G.; Vazquez Acosta, M.; Ventura, S.; Verguilov, V.; Vigorito, C. F.; Vitale, V.; Vovk, I.; Will, M.; Wunderlich, C.; Zarić, D.; VERITAS Collaboration; Adams, C. B.; Benbow, W.; Brill, A.; Capasso, M.; Christiansen, J. L.; Chromey, A. J.; Daniel, M. K.; Errando, M.; Farrell, K. A.; Feng, Q.; Finley, J. P.; Fortson, L.; Furniss, A.; Gent, A.; Giuri, C.; Hassan, T.; Hervet, O.; Holder, J.; Hughes, G.; Humensky, T. B.; Jin, W.; Kaaret, P.; Kertzman, M.; Kieda, D.; Kumar, S.; Lang, M. J.; Lundy, M.; Maier, G.; Moriarty, P.; Mukherjee, R.; Nieto, D.; Nievas-Rosillo, M.; O'Brien, S.; Ong, R. A.; Otte, A. N.; Patel, S.; Pfrang, K.; Pohl, M.; Prado, R. R.; Pueschel, E.; Quinn, J.; Ragan, K.; Reynolds, P. T.; Ribeiro, D.; Richards, G. T.; Roache, E.; Rulten, C.; Ryan, J. L.; Santander, M.; Sembroski, G. H.; Shang, R.; Weinstein, A.; Williams, D. A.; Williamson, T. J.; Eavn Collaboration; Hirota, Tomoya; Cui, Lang; Niinuma, Kotaro; Ro, Hyunwook; Sakai, Nobuyuki; Sawada-Satoh, Satoko; Wajima, Kiyoaki; Wang, Na; Liu, Xiang; Yonekura, Yoshinori</span><span id="2021ApJ...911L..11E.button"></span>
<script>
toggleAuthors('2021ApJ...911L..11E', 746, 0);
</script>

<br/>
2021/04, The Astrophysical Journal, 911, L11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...648A..66G" target="_blank">
<i>Physical and chemical structure of high-mass star-forming regions. Unraveling chemical complexity with CORE: the NOEMA large program</i>
</a>
<br/>
Gieser, C.; Beuther, H.; Semenov, D.; Ahmadi, A.; Suri, S.; Möller, T.; Beltrán, M. T.; Klaassen, P.; Zhang, Q.; Urquhart, J. S.; Henning, Th.; Feng, S.; <strong>Galván-Madrid, R.</strong>; de Souza Magalhães, V.; Moscadelli, L.; Longmore, S.; Leurini, S.; Kuiper, R.; Peters, T.; Menten, K. M.; <span id="2021A&A...648A..66G.authors" style="display: none;">Csengeri, T.; Fuller, G.; Wyrowski, F.; Lumsden, S.; Sánchez-Monge, Á.; Maud, L.; Linz, H.; <strong>Palau, A.</strong>; Schilke, P.; Pety, J.; Pudritz, R.; Winters, J. M.; Piétu, V.</span><span id="2021A&A...648A..66G.button"></span>
<script>
toggleAuthors('2021A&A...648A..66G', 33, 0);
</script>

<br/>
2021/04, Astronomy and Astrophysics, 648, A66
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...648A..33M" target="_blank">
<i>Characterizing the dust content of disk substructures in TW Hydrae</i>
</a>
<br/>
Macías, E.; <strong>Guerra-Alvarado, O.</strong>; <strong>Carrasco-González, C.</strong>; Ribas, Á.; Espaillat, C. C.; Huang, J.; Andrews, S. M.
<br/>
2021/04, Astronomy and Astrophysics, 648, A33
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...910..119C" target="_blank">
<i>Hard X-Ray Emission Associated with White Dwarfs. IV. Signs of Accretion from Substellar Companions</i>
</a>
<br/>
Chu, You-Hua; <strong>Toalá, Jesús A.</strong>; Guerrero, Martín A.; Bauer, Florian F.; Bilikova, Jana; Gruendl, Robert A.
<br/>
2021/04, The Astrophysical Journal, 910, 119
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.502.4597H" target="_blank">
<i>Raman mapping of photodissociation regions</i>
</a>
<br/>
<strong>Henney, William J.</strong>
<br/>
2021/04, Monthly Notices of the Royal Astronomical Society, 502, 4597
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.502.4963G" target="_blank">
<i>Density profile evolution during prestellar core collapse: collapse starts at the large scale</i>
</a>
<br/>
<strong>Gómez, Gilberto C.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Palau, Aina</strong>
<br/>
2021/04, Monthly Notices of the Royal Astronomical Society, 502, 4963
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.502.4658T" target="_blank">
<i>X-ray observations of the nova shell IPHASX J210204.7+471015</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Rubio, G.; Santamaría, E.; Guerrero, M. A.; <strong>Estrada-Dorado, S.</strong>; Ramos-Larios, G.; Sabin, L.
<br/>
2021/04, Monthly Notices of the Royal Astronomical Society, 502, 4658
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.502.1703M" target="_blank">
<i>Photoionized Herbig-Haro objects in the Orion Nebula through deep high-spectral resolution spectroscopy - I. HH 529 II and III</i>
</a>
<br/>
Méndez-Delgado, J. E.; Esteban, C.; García-Rojas, J.; <strong>Henney, W. J.</strong>; Mesa-Delgado, A.; Arellano-Córdova, K. Z.
<br/>
2021/04, Monthly Notices of the Royal Astronomical Society, 502, 1703
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...910...11O" target="_blank">
<i>FAUST. II. Discovery of a Secondary Outflow in IRAS 15398-3359: Variability in Outflow Direction during the Earliest Stage of Star Formation?</i>
</a>
<br/>
Okoda, Yuki; Oya, Yoko; Francis, Logan; Johnstone, Doug; Inutsuka, Shu-ichiro; Ceccarelli, Cecilia; Codella, Claudio; Chandler, Claire; Sakai, Nami; Aikawa, Yuri; Alves, Felipe O.; Balucani, Nadia; Bianchi, Eleonora; Bouvier, Mathilde; Caselli, Paola; Caux, Emmanuel; Charnley, Steven; Choudhury, Spandan; De Simone, Marta; Dulieu, Francois; <span id="2021ApJ...910...11O.authors" style="display: none;"><strong>Durán, Aurora</strong>; Evans, Lucy; Favre, Cécile; Fedele, Davide; Feng, Siyi; Fontani, Francesco; Hama, Tetsuya; Hanawa, Tomoyuki; Herbst, Eric; Hirota, Tomoya; Imai, Muneaki; Isella, Andrea; Jímenez-Serra, Izaskun; Kahane, Claudine; Lefloch, Bertrand; <strong>Loinard, Laurent</strong>; López-Sepulcre, Ana; Maud, Luke T.; Maureira, María José; Menard, Francois; Mercimek, Seyma; Miotello, Anna; Moellenbrock, George; Mori, Shoji; Murillo, Nadia M.; Nakatani, Riouhei; Nomura, Hideko; Oba, Yasuhiro; O'Donoghue, Ross; Ohashi, Satoshi; Ospina-Zamudio, Juan; Pineda, Jaime E.; Podio, Linda; Rimola, Albert; Sakai, Takeshi; Segura-Cox, Dominique; Shirley, Yancy; Svoboda, Brian; Taquet, Vianney; Testi, Leonardo; Vastel, Charlotte; Viti, Serena; Watanabe, Naoki; Watanabe, Yoshimasa; Witzel, Arezu; Xue, Ci; Zhang, Yichen; Zhao, Bo; Yamamoto, Satoshi</span><span id="2021ApJ...910...11O.button"></span>
<script>
toggleAuthors('2021ApJ...910...11O', 69, 0);
</script>

<br/>
2021/03, The Astrophysical Journal, 910, 11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...910L..14G" target="_blank">
<i>Polarimetric Properties of Event Horizon Telescope Targets from ALMA</i>
</a>
<br/>
Goddi, Ciriaco; Martí-Vidal, Iván; Messias, Hugo; Bower, Geoffrey C.; Broderick, Avery E.; Dexter, Jason; Marrone, Daniel P.; Moscibrodzka, Monika; Nagai, Hiroshi; Algaba, Juan Carlos; Asada, Keiichi; Crew, Geoffrey B.; Gómez, José L.; Impellizzeri, C. M. Violette; Janssen, Michael; Kadler, Matthias; Krichbaum, Thomas P.; Lico, Rocco; Matthews, Lynn D.; Nathanail, Antonios; <span id="2021ApJ...910L..14G.authors" style="display: none;">Ricarte, Angelo; Ros, Eduardo; Younsi, Ziri; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Anantua, Richard; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Benson, Bradford A.; Bintley, Dan; Blackburn, Lindy; Blundell, Raymond; Boland, Wilfred; Bouman, Katherine L.; Boyce, Hope; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Chesler, Paul M.; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crawford, Thomas M.; Cruz-Osorio, Alejandro; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Farah, Joseph; Fish, Vincent L.; Fomalont, Ed; Ford, H. Alyson; Fraga-Encinas, Raquel; Freeman, William T.; Friberg, Per; Fromm, Christian M.; Fuentes, Antonio; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Gold, Roman; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Haggard, Daryl; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Dong-Jin; Kim, Jae-Young; Kim, Jongsoo; Kim, Junhan; Kino, Motoki; Koay, Jun Yi; Kofuji, Yutaro; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Levis, Aviad; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lindahl, Greg; Liu, Jun; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Markoff, Sera; Marscher, Alan P.; Matsushita, Satoki; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Mizuno, Yosuke; Moran, James M.; Moriyama, Kotaro; Müller, Cornelia; Musoke, Gibwa; Mejías, Alejandro Mus; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neilsen, Joey; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Nowak, Michael A.; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Pötzl, Felix M.; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Sun, He; Tazaki, Fumie; Tetarenko, Alexandra J.; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Ward-Thompson, Derek; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guang-Yao; Zhao, Shan-Shan; Bruni, Gabriele; Gopakumar, A.; Hernández-Gómez, Antonio; Herrero-Illana, Ruben; Ingram, Adam; Komossa, S.; Kovalev, Y. Y.; Muders, Dirk; Perucho, Manel; Rösch, Florian; Valtonen, Mauri</span><span id="2021ApJ...910L..14G.button"></span>
<script>
toggleAuthors('2021ApJ...910L..14G', 250, 0);
</script>

<br/>
2021/03, The Astrophysical Journal, 910, L14
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...910L..13E" target="_blank">
<i>First M87 Event Horizon Telescope Results. VIII. Magnetic Field Structure near The Event Horizon</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Algaba, Juan Carlos; Alberdi, Antxon; Alef, Walter; Anantua, Richard; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Benson, Bradford A.; Bintley, Dan; Blackburn, Lindy; Blundell, Raymond; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Boyce, Hope; <span id="2021ApJ...910L..13E.authors" style="display: none;">Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Chesler, Paul M.; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crawford, Thomas M.; Crew, Geoffrey B.; Cruz-Osorio, Alejandro; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Farah, Joseph; Fish, Vincent L.; Fomalont, Ed; Ford, H. Alyson; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Fuentes, Antonio; Galison, Peter; Gammie, Charles F.; García, Roberto; Gelles, Zachary; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gómez, José L.; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Haggard, Daryl; Hecht, Michael H.; Hesper, Ronald; Himwich, Elizabeth; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Dong-Jin; Kim, Jae-Young; Kim, Jongsoo; Kim, Junhan; Kino, Motoki; Koay, Jun Yi; Kofuji, Yutaro; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Levis, Aviad; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Lindahl, Greg; Liu, Jun; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Mizuno, Yosuke; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Musoke, Gibwa; Mus Mejías, Alejandro; Michalik, Daniel; Nadolski, Andrew; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Nathanail, Antonios; Neilsen, Joey; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Nowak, Michael A.; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Pötzl, Felix M.; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ricarte, Angelo; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Sun, He; Tazaki, Fumie; Tetarenko, Alexandra J.; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Ward-Thompson, Derek; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guang-Yao; Zhao, Shan-Shan</span><span id="2021ApJ...910L..13E.button"></span>
<script>
toggleAuthors('2021ApJ...910L..13E', 241, 0);
</script>

<br/>
2021/03, The Astrophysical Journal, 910, L13
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...910L..12E" target="_blank">
<i>First M87 Event Horizon Telescope Results. VII. Polarization of the Ring</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Algaba, Juan Carlos; Alberdi, Antxon; Alef, Walter; Anantua, Richard; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Benson, Bradford A.; Bintley, Dan; Blackburn, Lindy; Blundell, Raymond; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Boyce, Hope; <span id="2021ApJ...910L..12E.authors" style="display: none;">Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Chesler, Paul M.; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crawford, Thomas M.; Crew, Geoffrey B.; Cruz-Osorio, Alejandro; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Farah, Joseph; Fish, Vincent L.; Fomalont, Ed; Ford, H. Alyson; Fraga-Encinas, Raquel; Freeman, William T.; Friberg, Per; Fromm, Christian M.; Fuentes, Antonio; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gómez, José L.; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Haggard, Daryl; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Dong-Jin; Kim, Jae-Young; Kim, Jongsoo; Kim, Junhan; Kino, Motoki; Koay, Jun Yi; Kofuji, Yutaro; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Levis, Aviad; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Lindahl, Greg; Liu, Jun; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Mizuno, Yosuke; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Musoke, Gibwa; Mejías, Alejandro Mus; Michalik, Daniel; Nadolski, Andrew; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Nathanail, Antonios; Neilsen, Joey; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Nowak, Michael A.; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Pötzl, Felix M.; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ricarte, Angelo; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Sun, He; Tazaki, Fumie; Tetarenko, Alexandra J.; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Ward-Thompson, Derek; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guang-Yao; Zhao, Shan-Shan</span><span id="2021ApJ...910L..12E.button"></span>
<script>
toggleAuthors('2021ApJ...910L..12E', 240, 0);
</script>

<br/>
2021/03, The Astrophysical Journal, 910, L12
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...909..214L" target="_blank">
<i>Subarcsecond Imaging of the Complex Organic Chemistry in Massive Star-forming Region G10.6-0.4</i>
</a>
<br/>
Law, Charles J.; Zhang, Qizhou; Öberg, Karin I.; <strong>Galván-Madrid, Roberto</strong>; Keto, Eric; Liu, Hauyu Baobab; Ho, Paul T. P.
<br/>
2021/03, The Astrophysical Journal, 909, 214
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...647A..95P" target="_blank">
<i>The stellar halos of ETGs in the IllustrisTNG simulations. II. Accretion, merger history, and dark halo connection</i>
</a>
<br/>
Pulsoni, C.; Gerhard, O.; Arnaboldi, M.; Pillepich, A.; <strong>Rodriguez-Gomez, V.</strong>; Nelson, D.; Hernquist, L.; Springel, V.
<br/>
2021/03, Astronomy and Astrophysics, 647, A95
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...647A.114M" target="_blank">
<i>Multi-scale view of star formation in IRAS 21078+5211: from clump fragmentation to disk wind</i>
</a>
<br/>
Moscadelli, L.; Beuther, H.; Ahmadi, A.; Gieser, C.; Massi, F.; Cesaroni, R.; Sánchez-Monge, Á.; Bacciotti, F.; Beltrán, M. T.; Csengeri, T.; <strong>Galván-Madrid, R.</strong>; Henning, Th.; Klaassen, P. D.; Kuiper, R.; Leurini, S.; Longmore, S. N.; Maud, L. T.; Möller, T.; <strong>Palau, A.</strong>; Peters, T.; <span id="2021A&A...647A.114M.authors" style="display: none;">Pudritz, R. E.; Sanna, A.; Semenov, D.; Urquhart, J. S.; Winters, J. M.; Zinnecker, H.</span><span id="2021A&A...647A.114M.button"></span>
<script>
toggleAuthors('2021A&A...647A.114M', 26, 0);
</script>

<br/>
2021/03, Astronomy and Astrophysics, 647, A114
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...909...44G" target="_blank">
<i>Tomography of the Unique Ongoing Jet in the Planetary Nebula NGC 2392</i>
</a>
<br/>
Guerrero, M. A.; Cazzoli, S.; <strong>Rechy-García, J. S.</strong>; Ramos-Larios, G.; Montoro-Molina, B.; <strong>Gómez-González, V. M. A.</strong>; <strong>Toalá, J. A.</strong>; Fang, X.
<br/>
2021/03, The Astrophysical Journal, 909, 44
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.502.1070H" target="_blank">
<i>The five axes of the Turtle: symmetry and asymmetry in NGC 6210</i>
</a>
<br/>
<strong>Henney, William J.</strong>; López, J. A.; García-Díaz, Ma T.; Richer, M. G.
<br/>
2021/03, Monthly Notices of the Royal Astronomical Society, 502, 1070
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.501.5197O" target="_blank">
<i>A multi-epoch study of radio continuum emission from massive protostars</i>
</a>
<br/>
Obonyo, W. O.; Lumsden, S. L.; Hoare, M. G.; <strong>Kurtz, S. E.</strong>; Purser, S. J. D.
<br/>
2021/03, Monthly Notices of the Royal Astronomical Society, 501, 5197
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.501.4359Z" target="_blank">
<i>A deep learning approach to test the small-scale galaxy morphology and its relationship with star formation activity in hydrodynamical simulations</i>
</a>
<br/>
Zanisi, Lorenzo; Huertas-Company, Marc; Lanusse, François; Bottrell, Connor; Pillepich, Annalisa; Nelson, Dylan; <strong>Rodriguez-Gomez, Vicente</strong>; Shankar, Francesco; Hernquist, Lars; Dekel, Avishai; Margalef-Bentabol, Berta; Vogelsberger, Mark; Primack, Joel
<br/>
2021/03, Monthly Notices of the Royal Astronomical Society, 501, 4359
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.501.3582S" target="_blank">
<i>Detailed studies of IPHAS sources - I. The disrupted late bipolar IPHASX J193718.6+202102</i>
</a>
<br/>
Sabin, L.; Guerrero, M. A.; Zavala, S.; <strong>Toalá, J. A.</strong>; Ramos-Larios, G.; Gómez-Llanos, V.
<br/>
2021/03, Monthly Notices of the Royal Astronomical Society, 501, 3582
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.501.3605R" target="_blank">
<i>Detailed studies of IPHAS sources - III. The highly extinguished bipolar planetary nebula IPHASX J191104.8+060845</i>
</a>
<br/>
<strong>Rodríguez-González, J. B.</strong>; Sabin, L.; <strong>Toalá, J. A.</strong>; Zavala, S.; Ramos-Larios, G.; Guerrero, M. A.; Parker, Q. A.; Guillén, P. F.; Ritter, A.
<br/>
2021/03, Monthly Notices of the Royal Astronomical Society, 501, 3605
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...908..110M" target="_blank">
<i>On the Thermally Pulsing Asymptotic Giant Branch Contribution to the Light of Nearby Disk Galaxies</i>
</a>
<br/>
Martínez-García, Eric E.; <strong>Bruzual, Gustavo</strong>; <strong>González-Lópezlira, Rosa A.</strong>; Rodríguez-Merino, Lino H.
<br/>
2021/02, The Astrophysical Journal, 908, 110
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...908...39B" target="_blank">
<i>Modeling the Prompt Optical Emission of GRB 180325A: The Evolution of a Spike from the Optical to Gamma Rays</i>
</a>
<br/>
Becerra, R. L.; De Colle, F.; Cantó, J.; <strong>Lizano, S.</strong>; <strong>González, R. F.</strong>; Granot, J.; Klotz, A.; Watson, A. M.; Fraija, N.; Araudo, A. T.; Troja, E.; Atteia, J. L.; Lee, W. H.; Turpin, D.; Bloom, J. S.; Boer, M.; Butler, N. R.; González, J. J.; Kutyrev, A. S.; Prochaska, J. X.; <span id="2021ApJ...908...39B.authors" style="display: none;">Ramirez-Ruiz, E.; Richer, M. G.; Román-Zúñiga, C. G.</span><span id="2021ApJ...908...39B.button"></span>
<script>
toggleAuthors('2021ApJ...908...39B', 23, 0);
</script>

<br/>
2021/02, The Astrophysical Journal, 908, 39
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...907...95G" target="_blank">
<i>MOSEL and IllustrisTNG: Massive Extended Galaxies at z = 2 Quench Later Than Normal-size Galaxies</i>
</a>
<br/>
Gupta, Anshu; Tran, Kim-Vy; Pillepich, Annalisa; Yuan, Tiantian; Harshan, Anishya; <strong>Rodriguez-Gomez, Vicente</strong>; Genel, Shy
<br/>
2021/02, The Astrophysical Journal, 907, 95
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...646A..10S" target="_blank">
<i>ALMA observations of the early stages of substellar formation in the Lupus 1 and 3 molecular clouds</i>
</a>
<br/>
Santamaría-Miranda, A.; de Gregorio-Monsalvo, I.; Plunkett, A. L.; Huélamo, N.; López, C.; Ribas, Á.; Schreiber, M. R.; Mužić, K.; <strong>Palau, A.</strong>; Knee, L. B. G.; Bayo, A.; Comerón, F.; Hales, A.
<br/>
2021/02, Astronomy and Astrophysics, 646, A10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.501.3099G" target="_blank">
<i>The physical and the geometrical properties of simulated cold H I structures</i>
</a>
<br/>
<strong>Gazol, Adriana</strong>; Villagran, Marco A.
<br/>
2021/02, Monthly Notices of the Royal Astronomical Society, 501, 3099
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...645A..94N" target="_blank">
<i>Mass segregation and sequential star formation in NGC 2264 revealed by Herschel</i>
</a>
<br/>
<strong>Nony, T.</strong>; Robitaille, J. -F.; Motte, F.; Gonzalez, M.; Joncour, I.; Moraux, E.; Men'shchikov, A.; Didelon, P.; Louvet, F.; Buckner, A. S. M.; Schneider, N.; Lumsden, S. L.; Bontemps, S.; Pouteau, Y.; Cunningham, N.; Fiorellino, E.; Oudmaijer, R.; André, P.; Thomasson, B.
<br/>
2021/01, Astronomy and Astrophysics, 645, A94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...907...22T" target="_blank">
<i>GASP. XXXII. Measuring the Diffuse Ionized Gas Fraction in Ram-pressure-stripped Galaxies</i>
</a>
<br/>
Tomičić, Neven; Vulcani, Benedetta; Poggianti, Bianca M.; Mingozzi, Matilde; Werle, Ariel; Bettoni, Daniela; Franchetto, Andrea; Gullieuszik, Marco; Moretti, Alessia; <strong>Fritz, Jacopo</strong>; Bellhouse, Callum
<br/>
2021/01, The Astrophysical Journal, 907, 22
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...906L...6R" target="_blank">
<i>MUSE Reveals Extended Circumnuclear Outflows in the Seyfert 1 NGC 7469</i>
</a>
<br/>
Robleto-Orús, A. C.; Torres-Papaqui, J. P.; Longinotti, A. L.; <strong>Ortega-Minakata, R. A.</strong>; Sánchez, S. F.; Ascasibar, Y.; Bellocchi, E.; Galbany, L.; Chow-Martínez, M.; Trejo-Alonso, J. J.; Morales-Vargas, A.; Romero-Cruz, F. J.
<br/>
2021/01, The Astrophysical Journal, 906, L6
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021ApJ...906...42L" target="_blank">
<i>Metal-THINGS: On the Metallicity and Ionization of ULX Sources in NGC 925</i>
</a>
<br/>
Lara-López, Maritza A.; Zinchenko, Igor A.; Pilyugin, Leonid S.; Gunawardhana, Madusha L. P.; López-Cruz, Omar; O'Sullivan, Shane P.; Feltre, Anna; Rosado, Margarita; Sánchez-Cruces, Mónica; Chevallard, Jacopo; De Rossi, Maria Emilia; Dib, Sami; <strong>Fritz, Jacopo</strong>; Fuentes-Carrera, Isaura; Garduño, Luis E.; Ibar, Eduardo
<br/>
2021/01, The Astrophysical Journal, 906, 42
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021A&A...645A..21G" target="_blank">
<i>Multiphase feedback processes in the Sy2 galaxy NGC 5643</i>
</a>
<br/>
García-Bernete, I.; Alonso-Herrero, A.; García-Burillo, S.; Pereira-Santaella, M.; García-Lorenzo, B.; Carrera, F. J.; Rigopoulou, D.; Ramos Almeida, C.; Villar Martín, M.; <strong>González-Martín, O.</strong>; Hicks, E. K. S.; Labiano, A.; Ricci, C.; Mateos, S.
<br/>
2021/01, Astronomy and Astrophysics, 645, A21
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.501..302A" target="_blank">
<i>Star formation history of the solar neighbourhood as told by Gaia</i>
</a>
<br/>
<strong>Alzate, Jairo A.</strong>; <strong>Bruzual, Gustavo</strong>; <strong>Díaz-González, Daniel J.</strong>
<br/>
2021/01, Monthly Notices of the Royal Astronomical Society, 501, 302
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.500.4004D" target="_blank">
<i>Quenched fractions in the IllustrisTNG simulations: the roles of AGN feedback, environment, and pre-processing</i>
</a>
<br/>
Donnari, Martina; Pillepich, Annalisa; Joshi, Gandhali D.; Nelson, Dylan; Genel, Shy; Marinacci, Federico; <strong>Rodriguez-Gomez, Vicente</strong>; Pakmor, Rüdiger; Torrey, Paul; Vogelsberger, Mark; Hernquist, Lars
<br/>
2021/01, Monthly Notices of the Royal Astronomical Society, 500, 4004
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.500.1285B" target="_blank">
<i>GASP XXIX - unwinding the arms of spiral galaxies via ram-pressure stripping</i>
</a>
<br/>
Bellhouse, Callum; McGee, Sean L.; Smith, Rory; Poggianti, Bianca M.; Jaffé, Yara L.; Kraljic, Katarina; Franchetto, Andrea; <strong>Fritz, Jacopo</strong>; Vulcani, Benedetta; Tonnesen, Stephanie; Roediger, Elke; Moretti, Alessia; Gullieuszik, Marco; Shin, Jihye
<br/>
2021/01, Monthly Notices of the Royal Astronomical Society, 500, 1285
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.500.2076G" target="_blank">
<i>Wolf-Rayet stars in the Antennae unveiled by MUSE</i>
</a>
<br/>
<strong>Gómez-González, V. M. A.</strong>; Mayya, Y. D.; <strong>Toalá, J. A.</strong>; <strong>Arthur, S. J.</strong>; Zaragoza-Cardiel, J.; Guerrero, M. A.
<br/>
2021/01, Monthly Notices of the Royal Astronomical Society, 500, 2076
</p></li>
</ol>
</div>
<div class="tab-pane" id="2020">
<h4 style="text-indent: 10px;">Publications 2020</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...905..158W" target="_blank">
<i>Formation of the Hub-Filament System G33.92+0.11: Local Interplay between Gravity, Velocity, and Magnetic Field</i>
</a>
<br/>
Wang, Jia-Wei; Koch, Patrick M.; <strong>Galván-Madrid, Roberto</strong>; Lai, Shih-Ping; Liu, Hauyu Baobab; Lin, Sheng-Jun; Pattle, Kate
<br/>
2020/12, The Astrophysical Journal, 905, 158
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...905...29E" target="_blank">
<i>Active Galactic Nucleus Ghosts: A Systematic Search for Faded Nuclei</i>
</a>
<br/>
<strong>Esparza-Arredondo, Donaji</strong>; <strong>Osorio-Clavijo, Natalia</strong>; <strong>González-Martín, Omaira</strong>; <strong>Victoria-Ceballos, César</strong>; Haro-Corzo, Sinhué A. R.; <strong>Reyes-Amador, Omar Ulises</strong>; López-Sánchez, Jafet; <strong>Pasetto, Alice</strong>
<br/>
2020/12, The Astrophysical Journal, 905, 29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...905...25G" target="_blank">
<i>Multidirectional Mass Accretion and Collimated Outflows on Scales of 100-2000 au in Early Stages of High-mass Protostars</i>
</a>
<br/>
Goddi, C.; Ginsburg, A.; Maud, L. T.; Zhang, Q.; <strong>Zapata, Luis A.</strong>
<br/>
2020/12, The Astrophysical Journal, 905, 25
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...644A.128S" target="_blank">
<i>VLA ammonia observations of L1287. Analysis of the Guitar core and two filaments</i>
</a>
<br/>
Sepúlveda, Inma; Estalella, Robert; Anglada, Guillem; López, Rosario; Riera, Angels; Busquet, Gemma; <strong>Palau, Aina</strong>; Torrelles, José M.; <strong>Rodríguez, Luis F.</strong>
<br/>
2020/12, Astronomy and Astrophysics, 644, A128
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...904..158L" target="_blank">
<i>ALMA Observations and Modeling of the Rotating Outflow in Orion Source I</i>
</a>
<br/>
<strong>López-Vázquez, J. A.</strong>; <strong>Zapata, Luis A.</strong>; <strong>Lizano, Susana</strong>; Cantó, Jorge
<br/>
2020/12, The Astrophysical Journal, 904, 158
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...644A..87W" target="_blank">
<i>Towards a consistent framework of comparing galaxy mergers in observations and simulations</i>
</a>
<br/>
Wang, L.; Pearson, W. J.; <strong>Rodriguez-Gomez, V.</strong>
<br/>
2020/12, Astronomy and Astrophysics, 644, A87
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...644A..52A" target="_blank">
<i>Role of the magnetic field in the fragmentation process: the case of G14.225-0.506</i>
</a>
<br/>
Añez-López, N.; Busquet, G.; Koch, P. M.; Girart, J. M.; Liu, H. B.; Santos, F.; Chapman, N. L.; Novak, G.; <strong>Palau, A.</strong>; Ho, P. T. P.; Zhang, Q.
<br/>
2020/12, Astronomy and Astrophysics, 644, A52
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499.4666F" target="_blank">
<i>Systematic errors in dust mass determinations: insights from laboratory opacity measurements</i>
</a>
<br/>
Fanciullo, Lapo; Kemper, Francisca; Scicluna, Peter; Dharmawardena, Thavisha E.; <strong>Srinivasan, Sundar</strong>
<br/>
2020/12, Monthly Notices of the Royal Astronomical Society, 499, 4666
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499.4370M" target="_blank">
<i>Star formation in CALIFA survey perturbed galaxies - I. Effects of tidal interactions</i>
</a>
<br/>
Morales-Vargas, A.; Torres-Papaqui, J. P.; Rosales-Ortega, F. F.; Sánchez, S. F.; Chow-Martínez, M.; <strong>Ortega-Minakata, R. A.</strong>; Trejo-Alonso, J. J.; Robleto-Orús, A. C.; Romero-Cruz, F. J.; Neri-Larios, D. M.; Califa Survey Collaboration
<br/>
2020/12, Monthly Notices of the Royal Astronomical Society, 499, 4370
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499.3961B" target="_blank">
<i>Probing GLIMPSE Extended Green Objects (EGOs) with hydroxyl masers</i>
</a>
<br/>
Bayandina, O. S.; Colom, P.; <strong>Kurtz, S. E.</strong>; Rudnitskij, G. M.; Shakhvorostova, N. N.; Val'tts, I. E.
<br/>
2020/12, Monthly Notices of the Royal Astronomical Society, 499, 3961
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499.2042C" target="_blank">
<i>Early science with the LMT: molecular torus in UGC 5101</i>
</a>
<br/>
Cruz-González, I.; Gómez-Ruiz, A. I.; Caldú-Primo, A.; Benítez, E.; Rodríguez-Espinosa, J. M.; Krongold, Y.; Aretxaga, I.; Snell, R.; <strong>González-Martin, O.</strong>; Negrete, C. A.; Narayanan, G.; Hughes, D. H.; Yun, M. S.; Fazio, G. G.; Chavushyan, V.; Hiriart, D.; Jiménez-Bailón, E.; Herrera-Endoqui, M.; Martínez-Paredes, M.; González, J. J.
<br/>
2020/12, Monthly Notices of the Royal Astronomical Society, 499, 2042
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...904...77G" target="_blank">
<i>A Photoionized Accretion Disk around a Young High-mass Star</i>
</a>
<br/>
Guzmán, Andrés E.; Sanhueza, Patricio; <strong>Zapata, Luis</strong>; Garay, Guido; <strong>Rodríguez, Luis Felipe</strong>
<br/>
2020/11, The Astrophysical Journal, 904, 77
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...903..136G" target="_blank">
<i>Nonadiabatic Turbulence Driving during Gravitational Collapse</i>
</a>
<br/>
<strong>Guerrero-Gamboa, Rubén</strong>; <strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2020/11, The Astrophysical Journal, 903, 136
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...643A..90N" target="_blank">
<i>High-resolution, 3D radiative transfer modelling. V. A detailed model of the M 51 interacting pair</i>
</a>
<br/>
Nersesian, Angelos; Viaene, Sébastien; De Looze, Ilse; Baes, Maarten; Xilouris, Emmanuel M.; Smith, Matthew W. L.; Bianchi, Simone; Casasola, Viviana; Cassarà, Letizia P.; Clark, Christopher J. R.; Dobbels, Wouter; <strong>Fritz, Jacopo</strong>; Galliano, Frédéric; Madden, Suzanne C.; Mosenkov, Aleksandr V.; Trčka, Ana
<br/>
2020/11, Astronomy and Astrophysics, 643, A90
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...903L...4R" target="_blank">
<i>Discovery of a Fast-expanding Shell in the Inside-out Born-again Planetary Nebula HuBi 1 through High-dispersion Integral Field Spectroscopy</i>
</a>
<br/>
<strong>Rechy-García, J. S.</strong>; Guerrero, M. A.; Santamaría, E.; <strong>Gómez-González, V. M. A.</strong>; Ramos-Larios, G.; <strong>Toalá, J. A.</strong>; Cazzoli, S.; Sabin, L.; Miranda, L. F.; Fang, X.; Liu, J.
<br/>
2020/11, The Astrophysical Journal, 903, L4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...903...46C" target="_blank">
<i>Simultaneous Evolution of the Virial Parameter and Star Formation Rate in Molecular Clumps Undergoing Global Hierarchical Collapse</i>
</a>
<br/>
<strong>Camacho, Vianey</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Palau, Aina</strong>; Busquet, Gemma; Zamora-Avilés, Manuel
<br/>
2020/11, The Astrophysical Journal, 903, 46
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020AJ....160..234D" target="_blank">
<i>Time-variable Radio Recombination Line Emission in W49A</i>
</a>
<br/>
De Pree, C. G.; Wilner, D. J.; Kristensen, L. E.; <strong>Galván-Madrid, R.</strong>; Goss, W. M.; Klessen, R. S.; Mac Low, M. -M.; Peters, T.; Robinson, A.; Sloman, S.; Rao, M.
<br/>
2020/11, The Astronomical Journal, 160, 234
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499.1172Z" target="_blank">
<i>A quantitative demonstration that stellar feedback locally regulates galaxy growth</i>
</a>
<br/>
Zaragoza-Cardiel, Javier; <strong>Fritz, Jacopo</strong>; Aretxaga, Itziar; Mayya, Yalia D.; Rosa-González, Daniel; Beckman, John E.; <strong>Bruzual, Gustavo</strong>; Charlot, Stephane
<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 499, 1172
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.498.5936E" target="_blank">
<i>CHIMPS2: survey description and <SUP>12</SUP>CO emission in the Galactic Centre</i>
</a>
<br/>
Eden, D. J.; Moore, T. J. T.; Currie, M. J.; Rigby, A. J.; Rosolowsky, E.; Su, Y.; Kim, Kee-Tae; Parsons, H.; Morata, O.; Chen, H. -R.; Minamidani, T.; Park, Geumsook; Ragan, S. E.; Urquhart, J. S.; Rani, R.; Tahani, K.; Billington, S. J.; Deb, S.; Figura, C.; Fujiyoshi, T.; <span id="2020MNRAS.498.5936E.authors" style="display: none;">Joncas, G.; Liao, L. W.; Liu, T.; Ma, H.; Tuan-Anh, P.; Yun, Hyeong-Sik; Zhang, S.; Zhu, M.; Henshaw, J. D.; Longmore, S. N.; Kobayashi, M. I. N.; Thompson, M. A.; Ao, Y.; Campbell-White, J.; Ching, T. -C.; Chung, E. J.; Duarte-Cabral, A.; Fich, M.; Gao, Y.; Graves, S. F.; Jiang, X. -J.; Kemper, F.; Kuan, Y. -J.; Kwon, W.; Lee, C. W.; Lee, J. -E.; Liu, M.; Peñaloza, C. H.; Peretto, N.; Phuong, N. T.; Pineda, J. E.; Plume, R.; Puspitaningrum, E.; Samal, M. R.; Soam, A.; Sun, Y.; Tang, X. D.; Traficante, A.; White, G. J.; Yan, C. -H.; Yang, A. Y.; Yuan, J.; Yue, N.; Bemis, A.; Brunt, C. M.; Chen, Z.; Cho, J.; Clark, P. C.; Cyganowski, C. J.; Friberg, P.; Fuller, G. A.; Han, I.; Hoare, M. G.; Izumi, N.; Kim, H. -J.; Kim, J.; Kim, S.; Koch, E. W.; Kuno, N.; Lacialle, K. M.; Lai, S. -P.; Lee, H.; Lee, Y. -H.; Li, D. L.; Liu, S. -Y.; Mairs, S.; Pan, Z.; Qian, L.; Scicluna, P.; Shi, C. -S.; Shi, H.; <strong>Srinivasan, S.</strong>; Tan, Q. -H.; Thomas, H. S.; Torii, K.; Trejo, A.; Umemoto, T.; Violino, G.; Wallström, S.; Wang, B.; Wu, Y.; Yuan, L.; Zhang, C.; Zhang, M.; Zhou, C.; Zhou, J. J.</span><span id="2020MNRAS.498.5936E.button"></span>
<script>
toggleAuthors('2020MNRAS.498.5936E', 106, 0);
</script>

<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 498, 5936
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499..668G" target="_blank">
<i>The effect of photoionizing feedback on the shaping of hierarchically-forming stellar clusters</i>
</a>
<br/>
<strong>González-Samaniego, Alejandro</strong>; <strong>Vazquez-Semadeni, Enrique</strong>
<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 499, 668
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.499..415R" target="_blank">
<i>Unveiling the stellar origin of the Wolf-Rayet nebula NGC 6888 through infrared observations</i>
</a>
<br/>
Rubio, G.; <strong>Toalá, J. A.</strong>; <strong>Jiménez-Hernández, P.</strong>; Ramos-Larios, G.; Guerrero, M. A.; <strong>Gómez-González, V. M. A.</strong>; Santamaría, E.; Quino-Mendoza, J. A.
<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 499, 415
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.498L..87B" target="_blank">
<i>FAUST I. The hot corino at the heart of the prototypical Class I protostar L1551 IRS5</i>
</a>
<br/>
Bianchi, E.; Chandler, C. J.; Ceccarelli, C.; Codella, C.; Sakai, N.; López-Sepulcre, A.; Maud, L. T.; Moellenbrock, G.; Svoboda, B.; Watanabe, Y.; Sakai, T.; Ménard, F.; Aikawa, Y.; Alves, F.; Balucani, N.; Bouvier, M.; Caselli, P.; Caux, E.; Charnley, S.; Choudhury, S.; <span id="2020MNRAS.498L..87B.authors" style="display: none;">De Simone, M.; Dulieu, F.; <strong>Durán, A.</strong>; Evans, L.; Favre, C.; Fedele, D.; Feng, S.; Fontani, F.; Francis, L.; Hama, T.; Hanawa, T.; Herbst, E.; Hirota, T.; Imai, M.; Isella, A.; Jiménez-Serra, I.; Johnstone, D.; Kahane, C.; Lefloch, B.; <strong>Loinard, L.</strong>; Maureira, M. J.; Mercimek, S.; Miotello, A.; Mori, S.; Nakatani, R.; Nomura, H.; Oba, Y.; Ohashi, S.; Okoda, Y.; Ospina-Zamudio, J.; Oya, Y.; Pineda, J.; Podio, L.; Rimola, A.; Cox, D. Segura; Shirley, Y.; Taquet, V.; Testi, L.; Vastel, C.; Viti, S.; Watanabe, N.; Witzel, A.; Xue, C.; Zhang, Y.; Zhao, B.; Yamamoto, S.</span><span id="2020MNRAS.498L..87B.button"></span>
<script>
toggleAuthors('2020MNRAS.498L..87B', 66, 0);
</script>

<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 498, L87
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.498.5367D" target="_blank">
<i>A study of extragalactic planetary nebulae populations based on spectroscopy. I. Data compilation and first findings</i>
</a>
<br/>
Delgado-Inglada, G.; García-Rojas, J.; Stasińska, G.; <strong>Rechy-García, J. S.</strong>
<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 498, 5367
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.498.4721O" target="_blank">
<i>Multiwavelength modelling of the circumstellar environment of the massive protostar AFGL 2591 VLA 3</i>
</a>
<br/>
Olguin, F. A.; Hoare, M. G.; Johnston, K. G.; Motte, F.; Chen, H. -R. V.; Beuther, H.; Mottram, J. C.; Ahmadi, A.; Gieser, C.; Semenov, D.; Peters, T.; <strong>Palau, A.</strong>; Klaassen, P. D.; Kuiper, R.; Sánchez-Monge, Á.; Henning, Th
<br/>
2020/11, Monthly Notices of the Royal Astronomical Society, 498, 4721
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...902L..47Z" target="_blank">
<i>Confirming the Explosive Outflow in G5.89 with ALMA</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Ho, Paul T. P.; Fernández-López, Manuel; Ccolque, Estrella Guzmán; <strong>Rodríguez, Luis F.</strong>; Reyes-Valdés, José; Bally, John; <strong>Palau, Aina</strong>; Saito, Masao; Sanhueza, Patricio; Rivera-Ortiz, P. R.; Rodríguez-González, A.
<br/>
2020/10, The Astrophysical Journal, 902, L47
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.498.1496M" target="_blank">
<i>MEGARA-IFU detection of extended He II λ4686 nebular emission in the central region of NGC 1569 and its ionization budget</i>
</a>
<br/>
Mayya, Y. D.; Carrasco, E.; <strong>Gómez-González, V. M. A.</strong>; Zaragoza-Cardiel, J.; Gil de Paz, A.; Ovando, P. A.; Sánchez-Cruces, M.; Lomelí-Núñez, L.; Rodríguez-Merino, L.; Rosa-González, D.; Silich, S.; Tenorio-Tagle, G.; <strong>Bruzual, G.</strong>; Charlot, S.; Terlevich, R.; Terlevich, E.; Vega, O.; Gallego, J.; Iglesias-Páramo, J.; Castillo-Morales, A.; <span id="2020MNRAS.498.1496M.authors" style="display: none;">García-Vargas, M. L.; Gómez-Alvarez, P.; Pascual, S.; Pérez-Calpena, A.</span><span id="2020MNRAS.498.1496M.button"></span>
<script>
toggleAuthors('2020MNRAS.498.1496M', 24, 0);
</script>

<br/>
2020/10, Monthly Notices of the Royal Astronomical Society, 498, 1496
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.497.4436D" target="_blank">
<i>Ultracompact H II regions with extended emission: the case of G43.89-0.78 and its molecular environment</i>
</a>
<br/>
de la Fuente, Eduardo; Tafoya, Daniel; Trinidad, Miguel A.; Porras, Alicia; Nigoche-Netro, Alberto; Kemp, Simon N.; <strong>Kurtz, Stanley E.</strong>; Franco, José; Rodríguez-Rico, Carlos A.
<br/>
2020/10, Monthly Notices of the Royal Astronomical Society, 497, 4436
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.497.4128J" target="_blank">
<i>Dust in the Wolf-Rayet nebula M 1-67</i>
</a>
<br/>
<strong>Jiménez-Hernández, P.</strong>; <strong>Arthur, S. J.</strong>; <strong>Toalá, J. A.</strong>
<br/>
2020/10, Monthly Notices of the Royal Astronomical Society, 497, 4128
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...901...67W" target="_blank">
<i>Monitoring the Morphology of M87* in 2009-2017 with the Event Horizon Telescope</i>
</a>
<br/>
Wielgus, Maciek; Akiyama, Kazunori; Blackburn, Lindy; Chan, Chi-kwan; Dexter, Jason; Doeleman, Sheperd S.; Fish, Vincent L.; Issaoun, Sara; Johnson, Michael D.; Krichbaum, Thomas P.; Lu, Ru-Sen; Pesce, Dominic W.; Wong, George N.; Bower, Geoffrey C.; Broderick, Avery E.; Chael, Andrew; Chatterjee, Koushik; Gammie, Charles F.; Georgiev, Boris; Hada, Kazuhiro; <span id="2020ApJ...901...67W.authors" style="display: none;"><strong>Loinard, Laurent</strong>; Markoff, Sera; Marrone, Daniel P.; Plambeck, Richard; Weintroub, Jonathan; Dexter, Matthew; MacMahon, David H. E.; Wright, Melvyn; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barausse, Enrico; Barrett, John; Bintley, Dan; Boland, Wilfred; Bouman, Katherine L.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chatterjee, Shami; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; Laurentis, Mariafelicia De; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dzib, Sergio A.; Eatough, Ralph P.; Falcke, Heino; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Galison, Peter; García, Roberto; Gentaz, Olivier; Goddi, Ciriaco; Gold, Roman; Gómez, José L.; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Inoue, Makoto; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; Lonsdale, Colin; MacDonald, Nicholas R.; Mao, Jirong; Marchili, Nicola; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Musoke, Gibwa; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Nathanail, Antonios; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Piétu, Vincent; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; Tsuda, Shuichiro; Bemmel, Ilse van; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Ward-Thompson, Derek; Wex, Norbert; Wharton, Robert; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan</span><span id="2020ApJ...901...67W.button"></span>
<script>
toggleAuthors('2020ApJ...901...67W', 219, 0);
</script>

<br/>
2020/09, The Astrophysical Journal, 901, 67
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...641A.119B" target="_blank">
<i>Nonparametric galaxy morphology from UV to submm wavelengths</i>
</a>
<br/>
Baes, Maarten; Nersesian, Angelos; Casasola, Viviana; Bianchi, Simone; Cassarà, Letizia P.; Clark, Christopher J. R.; De Looze, Ilse; Dobbels, Wouter; <strong>Fritz, Jacopo</strong>; Galametz, Maud; Galliano, Frédéric; Madden, Suzanne C.; Mosenkov, Aleksandr V.; Viaene, Sébastien; Trčka, Ana; Xilouris, Emmanuel M.
<br/>
2020/09, Astronomy and Astrophysics, 641, A119
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...901...24T" target="_blank">
<i>Possible Time Correlation between Jet Ejection and Mass Accretion for RW Aur A</i>
</a>
<br/>
Takami, Michihiro; Beck, Tracy L.; Schneider, P. Christian; Günther, Hans Moritz; White, Marc; Grankin, Konstantin; Karr, Jennifer L.; Ohyama, Youichi; Coffey, Deirdre; Liu, Hauyu Baobab; <strong>Galván-Madrid, Roberto</strong>; Liu, Chun-Fan; Fukagawa, Misato; Manset, Nadine; Chen, Wen-Ping; Pyo, Tae-Soo; Shang, Hsien; Ray, Thomas P.; Otsuka, Masaaki; Chou, Mei-Yin
<br/>
2020/09, The Astrophysical Journal, 901, 24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...900L...3R" target="_blank">
<i>A Radio Pinwheel Emanating from WR 147</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Arthur, Jane</strong>; Montes, Gabriela; <strong>Carrasco-González, Carlos</strong>; <strong>Toalá, Jesús A.</strong>
<br/>
2020/09, The Astrophysical Journal, 900, L3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.497.3251W" target="_blank">
<i>Clues on the history of early-type galaxies from SDSS spectra and GALEX photometry</i>
</a>
<br/>
Werle, A.; Cid Fernandes, R.; Vale Asari, N.; Coelho, P. R. T.; <strong>Bruzual, G.</strong>; Charlot, S.; de Carvalho, R. R.; Herpich, F. R.; Mendes de Oliveira, C.; Sodré, L., Jr.; Ruschel-Dutra, D.; de Amorim, A.; Sampaio, V. M.
<br/>
2020/09, Monthly Notices of the Royal Astronomical Society, 497, 3251
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.497.1884J" target="_blank">
<i>Erratum: The fate of disc galaxies in IllustrisTNG clusters</i>
</a>
<br/>
Joshi, Gandhali D.; Pillepich, Annalisa; Nelson, Dylan; Marinacci, Federico; Springel, Volker; <strong>Rodriguez-Gomez, Vicente</strong>; Vogelsberger, Mark; Hernquist, Lars
<br/>
2020/09, Monthly Notices of the Royal Astronomical Society, 497, 1884
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.497.1348T" target="_blank">
<i>High-sensitivity observations of molecular lines with the Arecibo Telescope</i>
</a>
<br/>
Tan, W. S.; Araya, E. D.; Lee, L. E.; Hofner, P.; <strong>Kurtz, S.</strong>; Linz, H.; Olmi., L.
<br/>
2020/09, Monthly Notices of the Royal Astronomical Society, 497, 1348
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...899...98V" target="_blank">
<i>GASP XXX. The Spatially Resolved SFR-Mass Relation in Stripping Galaxies in the Local Universe</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Tonnesen, Stephanie; McGee, Sean L.; Moretti, Alessia; <strong>Fritz, Jacopo</strong>; Gullieuszik, Marco; Jaffé, Yara L.; Franchetto, Andrea; Tomičić, Neven; Mingozzi, Matilde; Bettoni, Daniela; Wolter, Anna
<br/>
2020/08, The Astrophysical Journal, 899, 98
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...899...94R" target="_blank">
<i>Recombination Lines and Molecular Gas from Hypercompact {H} {II}} regions in W51 A</i>
</a>
<br/>
<strong>Rivera-Soto, Rudy</strong>; <strong>Galván-Madrid, Roberto</strong>; Ginsburg, Adam; <strong>Kurtz, Stan</strong>
<br/>
2020/08, The Astrophysical Journal, 899, 94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...899...85S" target="_blank">
<i>The Morphology-Density Relationship in 1 &lt; z &lt; 2 Clusters</i>
</a>
<br/>
Sazonova, Elizaveta; Alatalo, Katherine; Lotz, Jennifer; Rowlands, Kate; Snyder, Gregory F.; Boone, Kyle; Brodwin, Mark; Hayden, Brian; Lanz, Lauranne; Perlmutter, Saul; <strong>Rodriguez-Gomez, Vicente</strong>
<br/>
2020/08, The Astrophysical Journal, 899, 85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...899...13G" target="_blank">
<i>GASP. XXI. Star Formation Rates in the Tails of Galaxies Undergoing Ram Pressure Stripping</i>
</a>
<br/>
Gullieuszik, Marco; Poggianti, Bianca M.; McGee, Sean L.; Moretti, Alessia; Vulcani, Benedetta; Tonnesen, Stephanie; Roediger, Elke; Jaffé, Yara L.; <strong>Fritz, Jacopo</strong>; Franchetto, Andrea; Omizzolo, Alessandro; Bettoni, Daniela; Radovich, Mario; Wolter, Anna
<br/>
2020/08, The Astrophysical Journal, 899, 13
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...640A..69K" target="_blank">
<i>Event Horizon Telescope imaging of the archetypal blazar 3C 279 at an extreme 20 microarcsecond resolution</i>
</a>
<br/>
Kim, Jae-Young; Krichbaum, Thomas P.; Broderick, Avery E.; Wielgus, Maciek; Blackburn, Lindy; Gómez, José L.; Johnson, Michael D.; Bouman, Katherine L.; Chael, Andrew; Akiyama, Kazunori; Jorstad, Svetlana; Marscher, Alan P.; Issaoun, Sara; Janssen, Michael; Chan, Chi-kwan; Savolainen, Tuomas; Pesce, Dominic W.; Özel, Feryal; Alberdi, Antxon; Alef, Walter; <span id="2020A&A...640A..69K.authors" style="display: none;">Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Boland, Wilfred; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gómez-Ruiz, Arturo I.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; James, David J.; Jannuzi, Buell T.; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Musoke, Gibwa; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Efthalia; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Ward-Thompson, Derek; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Algaba, Juan-Carlos; Allardi, Alexander; Amestica, Rodrigo; Anczarski, Jadyn; Bach, Uwe; Baganoff, Frederick K.; Beaudoin, Christopher; Benson, Bradford A.; Berthold, Ryan; Blanchard, Jay M.; Blundell, Ray; Bustamente, Sandra; Cappallo, Roger; Castillo-Domínguez, Edgar; Chang, Chih-Cheng; Chang, Shu-Hao; Chang, Song-Chu; Chen, Chung-Chen; Chilson, Ryan; Chuter, Tim C.; Rosado, Rodrigo Córdova; Coulson, Iain M.; Crowley, Joseph; Derome, Mark; Dexter, Matthew; Dornbusch, Sven; Dudevoir, Kevin A.; Dzib, Sergio A.; Eckart, Andreas; Eckert, Chris; Erickson, Neal R.; Everett, Wendeline B.; Faber, Aaron; Farah, Joseph R.; Fath, Vernon; Folkers, Thomas W.; Forbes, David C.; Freund, Robert; Gale, David M.; Gao, Feng; Geertsema, Gertie; Graham, David A.; Greer, Christopher H.; Grosslein, Ronald; Gueth, Frédéric; Haggard, Daryl; Halverson, Nils W.; Han, Chih-Chiang; Han, Kuo-Chang; Hao, Jinchi; Hasegawa, Yutaka; Henning, Jason W.; Hernández-Gómez, Antonio; Herrero-Illana, Rubén; Heyminck, Stefan; Hirota, Akihiko; Hoge, James; Huang, Yau-De; Violette Impellizzeri, C. M.; Jiang, Homin; John, David; Kamble, Atish; Keisler, Ryan; Kimura, Kimihiro; Kono, Yusuke; Kubo, Derek; Kuroda, John; Lacasse, Richard; Laing, Robert A.; Leitch, Erik M.; Li, Chao-Te; Lin, Lupin C. -C.; Liu, Ching-Tang; Liu, Kuan-Yu; Lu, Li-Ming; Marson, Ralph G.; Martin-Cocher, Pierre L.; Massingill, Kyle D.; Matulonis, Callie; McColl, Martin P.; McWhirter, Stephen R.; Messias, Hugo; Meyer-Zhao, Zheng; Michalik, Daniel; Montaña, Alfredo; Montgomerie, William; Mora-Klein, Matias; Muders, Dirk; Nadolski, Andrew; Navarro, Santiago; Neilsen, Joseph; Nguyen, Chi H.; Nishioka, Hiroaki; Norton, Timothy; Nowak, Michael A.; Nystrom, George; Ogawa, Hideo; Oshiro, Peter; Oyama, Tomoaki; Parsons, Harriet; Peñalver, Juan; Phillips, Neil M.; Poirier, Michael; Pradel, Nicolas; Primiani, Rurik A.; Raffin, Philippe A.; Rahlin, Alexandra S.; Reiland, George; Risacher, Christopher; Ruiz, Ignacio; Sáez-Madaín, Alejandro F.; Sassella, Remi; Schellart, Pim; Shaw, Paul; Silva, Kevin M.; Shiokawa, Hotaka; Smith, David R.; Snow, William; Souccar, Kamal; Sousa, Don; Sridharan, Tirupati K.; Srinivasan, Ranjani; Stahm, William; Stark, Antony A.; Story, Kyle; Timmer, Sjoerd T.; Vertatschitsch, Laura; Walther, Craig; Wei, Ta-Shun; Whitehorn, Nathan; Whitney, Alan R.; Woody, David P.; Wouterloot, Jan G. A.; Wright, Melvin; Yamaguchi, Paul; Yu, Chen-Yu; Zeballos, Milagros; Zhang, Shuo; Ziurys, Lucy; Event Horizon Telescope Collaboration</span><span id="2020A&A...640A..69K.button"></span>
<script>
toggleAuthors('2020A&A...640A..69K', 353, 0);
</script>

<br/>
2020/08, Astronomy and Astrophysics, 640, A69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.496.5399D" target="_blank">
<i>Constraining X-ray reflection in the low-luminosity AGN NGC 3718 using NuSTAR and XMM-Newton</i>
</a>
<br/>
Diaz, Y.; Arévalo, P.; Hernández-García, L.; Bassani, L.; Malizia, A.; <strong>González-Martín, O.</strong>; Ricci, C.; Matt, G.; Stern, D.; May, D.; Zezas, A.; Bauer, F. E.
<br/>
2020/08, Monthly Notices of the Royal Astronomical Society, 496, 5399
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.496.3128R" target="_blank">
<i>Characterizing the radio continuum nature of sources in the massive star-forming region W75N (B)</i>
</a>
<br/>
Rodríguez-Kamenetzky, A.; <strong>Carrasco-González, C.</strong>; Torrelles, J. M.; Vlemmings, W. H. T.; <strong>Rodríguez, L. F.</strong>; Surcis, G.; Gómez, J. F.; Cantó, J.; Goddi, C.; Kim, J. S.; Kim, S. -W.; Añez-López, N.; Curiel, S.; van Langevelde, H. J.
<br/>
2020/08, Monthly Notices of the Royal Astronomical Society, 496, 3128
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.496.2673J" target="_blank">
<i>The fate of disc galaxies in IllustrisTNG clusters</i>
</a>
<br/>
Joshi, Gandhali D.; Pillepich, Annalisa; Nelson, Dylan; Marinacci, Federico; Springel, Volker; <strong>Rodriguez-Gomez, Vicente</strong>; Vogelsberger, Mark; Hernquist, Lars
<br/>
2020/08, Monthly Notices of the Royal Astronomical Society, 496, 2673
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...639A..43A" target="_blank">
<i>Cold molecular gas and PAH emission in the nuclear and circumnuclear regions of Seyfert galaxies</i>
</a>
<br/>
Alonso-Herrero, A.; Pereira-Santaella, M.; Rigopoulou, D.; García-Bernete, I.; García-Burillo, S.; Domínguez-Fernández, A. J.; Combes, F.; Davies, R. I.; Díaz-Santos, T.; <strong>Esparza-Arredondo, D.</strong>; <strong>González-Martín, O.</strong>; Hernán-Caballero, A.; Hicks, E. K. S.; Hönig, S. F.; Levenson, N. A.; Ramos Almeida, C.; Roche, P. F.; Rosario, D.
<br/>
2020/07, Astronomy and Astrophysics, 639, A43
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...897L..30M" target="_blank">
<i>The High Molecular Gas Content, and the Efficient Conversion of Neutral into Molecular Gas, in Jellyfish Galaxies</i>
</a>
<br/>
Moretti, Alessia; Paladino, Rosita; Poggianti, Bianca M.; Serra, Paolo; Ramatsoku, Mpati; Franchetto, Andrea; Deb, Tirna; Gullieuszik, Marco; Tomičić, Neven; Mingozzi, Matilde; Vulcani, Benedetta; Radovich, Mario; Bettoni, Daniela; <strong>Fritz, Jacopo</strong>
<br/>
2020/07, The Astrophysical Journal, 897, L30
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...897..148G" target="_blank">
<i>Verification of Radiative Transfer Schemes for the EHT</i>
</a>
<br/>
Gold, Roman; Broderick, Avery E.; Younsi, Ziri; Fromm, Christian M.; Gammie, Charles F.; Mościbrodzka, Monika; Pu, Hung-Yi; Bronzwaer, Thomas; Davelaar, Jordy; Dexter, Jason; Ball, David; Chan, Chi-kwan; Kawashima, Tomohisa; Mizuno, Yosuke; Ripperda, Bart; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; <span id="2020ApJ...897..148G.authors" style="display: none;">Baczko, Anne-Kathrin; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broguiere, Dominique; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chatterjee, Koushik; Chatterjee, Shami; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Freeman, Bill; Friberg, Per; Gómez, José L.; Galison, Peter; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jimenez-Rosales, Alejandra; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lico, Rocco; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Markoff, Sera; Mao, Jirong; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Müller, Cornelia; Nagai, Hiroshi; Nakamura, Masanori; Nagar, Neil M.; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Park, Jongho; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Plambeck, Richard; Piétu, Vincent; PopStefanija, Aleksandar; Porth, Oliver; Preciado-López, Jorge A.; Psaltis, Dimitrios; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schuster, Karl-Friedrich; Schloerb, F. Peter; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tiede, Paul; Tazaki, Fumie; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Traianou, Thalia; Trippe, Sascha; Tsuda, Shuichiro; van Langevelde, Huib Jan; van Bemmel, Ilse; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Wex, Norbert; Weintroub, Jonathan; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, Ken; Young, André; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Event Horizon Telescope Collaboration</span><span id="2020ApJ...897..148G.button"></span>
<script>
toggleAuthors('2020ApJ...897..148G', 208, 0);
</script>

<br/>
2020/07, The Astrophysical Journal, 897, 148
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...897..139B" target="_blank">
<i>THEMIS: A Parameter Estimation Framework for the Event Horizon Telescope</i>
</a>
<br/>
Broderick, Avery E.; Gold, Roman; Karami, Mansour; Preciado-López, Jorge A.; Tiede, Paul; Pu, Hung-Yi; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; <span id="2020ApJ...897..139B.authors" style="display: none;">Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gómez, José L.; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Inoue, Makoto; Issaoun, Sara; James, David J.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Jiménez-Rosales, Alejandra; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Lico, Rocco; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Palumbo, Daniel C. M.; Park, Jongho; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Rottmann, Helge; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Traianou, Efthalia; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Yoon, Doosoo; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Event Horizon Telescope Collaboration</span><span id="2020ApJ...897..139B.button"></span>
<script>
toggleAuthors('2020ApJ...897..139B', 194, 0);
</script>

<br/>
2020/07, The Astrophysical Journal, 897, 139
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...897...59M" target="_blank">
<i>Orbital and Mass Constraints of the Young Binary System IRAS 16293-2422 A</i>
</a>
<br/>
Maureira, María José; Pineda, Jaime E.; Segura-Cox, Dominique M.; Caselli, Paola; Testi, Leonardo; Lodato, Giuseppe; <strong>Loinard, Laurent</strong>; <strong>Hernández-Gómez, Antonio</strong>
<br/>
2020/07, The Astrophysical Journal, 897, 59
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJS..249....3A" target="_blank">
<i>The 16th Data Release of the Sloan Digital Sky Surveys: First Release from the APOGEE-2 Southern Survey and Full Release of eBOSS Spectra</i>
</a>
<br/>
Ahumada, Romina; Prieto, Carlos Allende; Almeida, Andrés; Anders, Friedrich; Anderson, Scott F.; Andrews, Brett H.; Anguiano, Borja; Arcodia, Riccardo; Armengaud, Eric; Aubert, Marie; Avila, Santiago; Avila-Reese, Vladimir; Badenes, Carles; Balland, Christophe; Barger, Kat; Barrera-Ballesteros, Jorge K.; Basu, Sarbani; Bautista, Julian; Beaton, Rachael L.; Beers, Timothy C.; <span id="2020ApJS..249....3A.authors" style="display: none;">Benavides, B. Izamar T.; Bender, Chad F.; Bernardi, Mariangela; Bershady, Matthew; Beutler, Florian; Bidin, Christian Moni; Bird, Jonathan; Bizyaev, Dmitry; Blanc, Guillermo A.; Blanton, Michael R.; Boquien, Médéric; Borissova, Jura; Bovy, Jo; Brandt, W. N.; Brinkmann, Jonathan; Brownstein, Joel R.; Bundy, Kevin; Bureau, Martin; Burgasser, Adam; Burtin, Etienne; Cano-Díaz, Mariana; Capasso, Raffaella; Cappellari, Michele; Carrera, Ricardo; Chabanier, Solène; Chaplin, William; Chapman, Michael; Cherinka, Brian; Chiappini, Cristina; Doohyun Choi, Peter; Chojnowski, S. Drew; Chung, Haeun; Clerc, Nicolas; Coffey, Damien; Comerford, Julia M.; Comparat, Johan; da Costa, Luiz; Cousinou, Marie-Claude; Covey, Kevin; Crane, Jeffrey D.; Cunha, Katia; Ilha, Gabriele da Silva; Dai, Yu Sophia; Damsted, Sanna B.; Darling, Jeremy; Davidson, James W., Jr.; Davies, Roger; Dawson, Kyle; De, Nikhil; de la Macorra, Axel; De Lee, Nathan; Queiroz, Anna Bárbara de Andrade; Deconto Machado, Alice; de la Torre, Sylvain; Dell'Agli, Flavia; du Mas des Bourboux, Hélion; Diamond-Stanic, Aleksandar M.; Dillon, Sean; Donor, John; Drory, Niv; Duckworth, Chris; Dwelly, Tom; Ebelke, Garrett; Eftekharzadeh, Sarah; Davis Eigenbrot, Arthur; Elsworth, Yvonne P.; Eracleous, Mike; Erfanianfar, Ghazaleh; Escoffier, Stephanie; Fan, Xiaohui; Farr, Emily; Fernández-Trincado, José G.; Feuillet, Diane; Finoguenov, Alexis; Fofie, Patricia; Fraser-McKelvie, Amelia; Frinchaboy, Peter M.; Fromenteau, Sebastien; Fu, Hai; Galbany, Lluís; Garcia, Rafael A.; García-Hernández, D. A.; Oehmichen, Luis Alberto Garma; Ge, Junqiang; Maia, Marcio Antonio Geimba; Geisler, Doug; Gelfand, Joseph; Goddy, Julian; Gonzalez-Perez, Violeta; Grabowski, Kathleen; Green, Paul; Grier, Catherine J.; Guo, Hong; Guy, Julien; Harding, Paul; Hasselquist, Sten; Hawken, Adam James; Hayes, Christian R.; Hearty, Fred; Hekker, S.; Hogg, David W.; Holtzman, Jon A.; Horta, Danny; Hou, Jiamin; Hsieh, Bau-Ching; Huber, Daniel; Hunt, Jason A. S.; Chitham, J. Ider; Imig, Julie; Jaber, Mariana; Angel, Camilo Eduardo Jimenez; Johnson, Jennifer A.; Jones, Amy M.; Jönsson, Henrik; Jullo, Eric; Kim, Yerim; Kinemuchi, Karen; Kirkpatrick, Charles C., IV; Kite, George W.; Klaene, Mark; Kneib, Jean-Paul; Kollmeier, Juna A.; Kong, Hui; Kounkel, Marina; Krishnarao, Dhanesh; Lacerna, Ivan; Lan, Ting-Wen; Lane, Richard R.; Law, David R.; Le Goff, Jean-Marc; Leung, Henry W.; Lewis, Hannah; Li, Cheng; Lian, Jianhui; Lin, Lihwai; Long, Dan; Longa-Peña, Penélope; Lundgren, Britt; Lyke, Brad W.; Ted Mackereth, J.; MacLeod, Chelsea L.; Majewski, Steven R.; Manchado, Arturo; Maraston, Claudia; Martini, Paul; Masseron, Thomas; Masters, Karen L.; Mathur, Savita; McDermid, Richard M.; Merloni, Andrea; Merrifield, Michael; Mészáros, Szabolcs; Miglio, Andrea; Minniti, Dante; Minsley, Rebecca; Miyaji, Takamitsu; Mohammad, Faizan Gohar; Mosser, Benoit; Mueller, Eva-Maria; Muna, Demitri; Muñoz-Gutiérrez, Andrea; Myers, Adam D.; Nadathur, Seshadri; Nair, Preethi; Nandra, Kirpal; do Nascimento, Janaina Correa; Nevin, Rebecca Jean; Newman, Jeffrey A.; Nidever, David L.; Nitschelm, Christian; Noterdaeme, Pasquier; O'Connell, Julia E.; Olmstead, Matthew D.; Oravetz, Daniel; Oravetz, Audrey; Osorio, Yeisson; Pace, Zachary J.; Padilla, Nelson; Palanque-Delabrouille, Nathalie; Palicio, Pedro A.; Pan, Hsi-An; Pan, Kaike; Parker, James; Paviot, Romain; Peirani, Sebastien; Ramŕez, Karla Peña; Penny, Samantha; Percival, Will J.; Perez-Fournon, Ismael; Pérez-Ràfols, Ignasi; Petitjean, Patrick; Pieri, Matthew M.; Pinsonneault, Marc; Poovelil, Vijith Jacob; Povick, Joshua Tyler; Prakash, Abhishek; Price-Whelan, Adrian M.; Raddick, M. Jordan; Raichoor, Anand; Ray, Amy; Rembold, Sandro Barboza; Rezaie, Mehdi; Riffel, Rogemar A.; Riffel, Rogério; Rix, Hans-Walter; Robin, Annie C.; Roman-Lopes, A.; Román-Zúñiga, Carlos; Rose, Benjamin; Ross, Ashley J.; Rossi, Graziano; Rowlands, Kate; Rubin, Kate H. R.; Salvato, Mara; Sánchez, Ariel G.; Sánchez-Menguiano, Laura; Sánchez-Gallego, José R.; Sayres, Conor; Schaefer, Adam; Schiavon, Ricardo P.; Schimoia, Jaderson S.; Schlafly, Edward; Schlegel, David; Schneider, Donald P.; Schultheis, Mathias; Schwope, Axel; Seo, Hee-Jong; Serenelli, Aldo; Shafieloo, Arman; Shamsi, Shoaib Jamal; Shao, Zhengyi; Shen, Shiyin; Shetrone, Matthew; Shirley, Raphael; Aguirre, Víctor Silva; Simon, Joshua D.; Skrutskie, M. F.; Slosar, Anže; Smethurst, Rebecca; Sobeck, Jennifer; <strong>Sodi, Bernardo Cervantes</strong>; Souto, Diogo; Stark, David V.; Stassun, Keivan G.; Steinmetz, Matthias; Stello, Dennis; Stermer, Julianna; Storchi-Bergmann, Thaisa; Streblyanska, Alina; Stringfellow, Guy S.; Stutz, Amelia; Suárez, Genaro; Sun, Jing; Taghizadeh-Popp, Manuchehr; Talbot, Michael S.; Tayar, Jamie; Thakar, Aniruddha R.; Theriault, Riley; Thomas, Daniel; Thomas, Zak C.; Tinker, Jeremy; Tojeiro, Rita; Toledo, Hector Hernandez; Tremonti, Christy A.; Troup, Nicholas W.; Tuttle, Sarah; Unda-Sanzana, Eduardo; Valentini, Marica; Vargas-González, Jaime; Vargas-Magaña, Mariana; Vázquez-Mata, Jose Antonio; Vivek, M.; Wake, David; Wang, Yuting; Weaver, Benjamin Alan; Weijmans, Anne-Marie; Wild, Vivienne; Wilson, John C.; Wilson, Robert F.; Wolthuis, Nathan; Wood-Vasey, W. M.; Yan, Renbin; Yang, Meng; Yèche, Christophe; Zamora, Olga; Zarrouk, Pauline; Zasowski, Gail; Zhang, Kai; Zhao, Cheng; Zhao, Gongbo; Zheng, Zheng; Zheng, Zheng; Zhu, Guangtun; Zou, Hu</span><span id="2020ApJS..249....3A.button"></span>
<script>
toggleAuthors('2020ApJS..249....3A', 314, 0);
</script>

<br/>
2020/07, The Astrophysical Journal Supplement Series, 249, 3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.496..959G" target="_blank">
<i>Planetary nebulae with Wolf-Rayet-type central stars - I. The case of the high-excitation NGC 2371</i>
</a>
<br/>
<strong>Gómez-González, V. M. A.</strong>; <strong>Toalá, J. A.</strong>; Guerrero, M. A.; Todt, H.; Sabin, L.; Ramos-Larios, G.; Mayya, Y. D.
<br/>
2020/07, Monthly Notices of the Royal Astronomical Society, 496, 959
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.496..442K" target="_blank">
<i>Passive spirals and shock influenced star formation in the merging cluster A3376</i>
</a>
<br/>
Kelkar, Kshitija; Dwarakanath, K. S.; Poggianti, Bianca M.; Moretti, Alessia; Monteiro-Oliveira, Rogério; Machado, Rubens E. G.; Lima-Neto, Gastão B.; <strong>Fritz, Jacopo</strong>; Vulcani, Benedetta; Gullieuszik, Marco; Bettoni, Daniela
<br/>
2020/07, Monthly Notices of the Royal Astronomical Society, 496, 442
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.495.4372T" target="_blank">
<i>Extended X-ray emission from the classic nova DQ Her - on the possible presence of a magnetized jet</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Guerrero, M. A.; Santamaría, E.; Ramos-Larios, G.; Sabin, L.
<br/>
2020/07, Monthly Notices of the Royal Astronomical Society, 495, 4372
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.495.4347B" target="_blank">
<i>Internal kinematics of giant H II regions in M101 with the Keck Cosmic Web Imager</i>
</a>
<br/>
Bresolin, Fabio; Rizzi, Luca; Ho, I. -Ting; Terlevich, Roberto; Terlevich, Elena; Telles, Eduardo; <strong>Chávez, Ricardo</strong>; Basilakos, Spyros; Plionis, Manolis
<br/>
2020/07, Monthly Notices of the Royal Astronomical Society, 495, 4347
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.495.3041T" target="_blank">
<i>The Bubble Nebula NGC 7635 - testing the wind-blown bubble theory</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Guerrero, M. A.; Todt, H.; Sabin, L.; Oskinova, L. M.; Chu, Y. -H.; Ramos-Larios, G.; <strong>Gómez-González, V. M. A.</strong>
<br/>
2020/07, Monthly Notices of the Royal Astronomical Society, 495, 3041
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...638A.150V" target="_blank">
<i>High-resolution, 3D radiative transfer modelling. IV. AGN-powered dust heating in NGC 1068</i>
</a>
<br/>
Viaene, S.; Nersesian, A.; <strong>Fritz, J.</strong>; Verstocken, S.; Baes, M.; Bianchi, S.; Casasola, V.; Cassarà, L.; Clark, C.; Davies, J.; De Looze, I.; De Vis, P.; Dobbels, W.; Galametz, M.; Galliano, F.; Jones, A.; Madden, S.; Mosenkov, A.; Trcka, A.; Xilouris, E. M.; <span id="2020A&A...638A.150V.authors" style="display: none;">Ysard, N.</span><span id="2020A&A...638A.150V.button"></span>
<script>
toggleAuthors('2020A&A...638A.150V', 21, 0);
</script>

<br/>
2020/06, Astronomy and Astrophysics, 638, A150
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...896..132Z" target="_blank">
<i>Tidal Interaction between the UX Tauri A/C Disk System Revealed by ALMA</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Fernández-López, Manuel; <strong>Palau, Aina</strong>; Estalella, Robert; Osorio, Mayra; Anglada, Guillem; Huelamo, Nuria
<br/>
2020/06, The Astrophysical Journal, 896, 132
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...896..110L" target="_blank">
<i>ALMA Observations of NGC 6334S. I. Forming Massive Stars and Clusters in Subsonic and Transonic Filamentary Clouds</i>
</a>
<br/>
Li, Shanghuo; Zhang, Qizhou; Liu, Hauyu Baobab; Beuther, Henrik; <strong>Palau, Aina</strong>; Girart, Josep Miquel; Smith, Howard; Hora, Joseph L.; Lin, Yuxing; Qiu, Keping; Strom, Shaye; Wang, Junzhi; Li, Fei; Yue, Nannan
<br/>
2020/06, The Astrophysical Journal, 896, 110
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020PASA...37...24R" target="_blank">
<i>The bivariate gas-stellar mass distributions and the mass functions of early- and late-type galaxies at z ∼ 0</i>
</a>
<br/>
Rodríguez-Puebla, Aldo; Calette, A. R.; Avila-Reese, Vladimir; <strong>Rodriguez-Gomez, Vicente</strong>; Huertas-Company, Marc
<br/>
2020/06, Publications of the Astronomical Society of Australia, 37, e024
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020SSRv..216...76B" target="_blank">
<i>From Diffuse Gas to Dense Molecular Cloud Cores</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; André, Philippe; Hennebelle, Patrick; Klessen, Ralf S.; Kruijssen, J. M. Diederik; Chevance, Mélanie; Nakamura, Fumitaka; Adamo, Angela; <strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2020/06, Space Science Reviews, 216, 76
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020SSRv..216...70L" target="_blank">
<i>The Origin of the Stellar Mass Distribution and Multiplicity</i>
</a>
<br/>
Lee, Yueh-Ning; Offner, Stella S. R.; Hennebelle, Patrick; André, Philippe; Zinnecker, Hans; <strong>Ballesteros-Paredes, Javier</strong>; Inutsuka, Shu-ichiro; Kruijssen, J. M. Diederik
<br/>
2020/06, Space Science Reviews, 216, 70
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...638A..44B" target="_blank">
<i>Dynamical cloud formation traced by atomic and molecular gas</i>
</a>
<br/>
Beuther, H.; Wang, Y.; Soler, J.; Linz, H.; Henshaw, J.; <strong>Vazquez-Semadeni, E.</strong>; <strong>Gomez, G.</strong>; Ragan, S.; Henning, Th.; Glover, S. C. O.; Lee, M. -Y.; Güsten, R.
<br/>
2020/06, Astronomy and Astrophysics, 638, A44
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...896L...3D" target="_blank">
<i>Hot Corinos Chemical Diversity: Myth or Reality?</i>
</a>
<br/>
De Simone, Marta; Ceccarelli, Cecilia; Codella, Claudio; Svoboda, Brian E.; Chandler, Claire; Bouvier, Mathilde; Yamamoto, Satoshi; Sakai, Nami; Caselli, Paola; Favre, Cecile; <strong>Loinard, Laurent</strong>; Lefloch, Bertrand; Liu, Hauyu Baobab; López-Sepulcre, Ana; Pineda, Jaime E.; Taquet, Vianney; Testi, Leonardo
<br/>
2020/06, The Astrophysical Journal, 896, L3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...895..106F" target="_blank">
<i>GASP XXVII: Gas-phase Metallicity Scaling Relations in Disk Galaxies with and without Ram Pressure Stripping</i>
</a>
<br/>
Franchetto, Andrea; Vulcani, Benedetta; Poggianti, Bianca M.; Gullieuszik, Marco; Mingozzi, Matilde; Moretti, Alessia; Tomičić, Neven; <strong>Fritz, Jacopo</strong>; Bettoni, Daniela; Jaffé, Yara L.
<br/>
2020/06, The Astrophysical Journal, 895, 106
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020SSRv..216...64K" target="_blank">
<i>The Physics of Star Cluster Formation and Evolution</i>
</a>
<br/>
Krause, Martin G. H.; Offner, Stella S. R.; Charbonnel, Corinne; Gieles, Mark; Klessen, Ralf S.; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Ballesteros-Paredes, Javier</strong>; Girichidis, Philipp; Kruijssen, J. M. Diederik; Ward, Jacob L.; Zinnecker, Hans
<br/>
2020/06, Space Science Reviews, 216, 64
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.495.2234G" target="_blank">
<i>Rings and arcs around evolved stars - II. The Carbon Star AFGL 3068 and the Planetary Nebulae NGC 6543, NGC 7009, and NGC 7027</i>
</a>
<br/>
Guerrero, M. A.; Ramos-Larios, G.; <strong>Toalá, J. A.</strong>; Balick, B.; Sabin, L.
<br/>
2020/06, Monthly Notices of the Royal Astronomical Society, 495, 2234
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...895..102L" target="_blank">
<i>Correlations between Black Holes and Host Galaxies in the Illustris and IllustrisTNG Simulations</i>
</a>
<br/>
Li, Yuan; Habouzit, Melanie; Genel, Shy; Somerville, Rachel; Terrazas, Bryan A.; Bell, Eric F.; Pillepich, Annalisa; Nelson, Dylan; Weinberger, Rainer; <strong>Rodriguez-Gomez, Vicente</strong>; Ma, Chung-Pei; Pakmor, Ruediger; Hernquist, Lars; Vogelsberger, Mark
<br/>
2020/06, The Astrophysical Journal, 895, 102
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJS..248...24G" target="_blank">
<i>The MUSTANG Galactic Plane Survey (MGPS90) Pilot</i>
</a>
<br/>
Ginsburg, Adam; Anderson, L. D.; Dicker, Simon; Romero, Charles; Svoboda, Brian; Devlin, Mark; <strong>Galván-Madrid, Roberto</strong>; Indebetouw, Remy; Liu, Hauyu Baobab; Mason, Brian; Mroczkowski, Tony; Armentrout, W. P.; Bally, John; Brogan, Crystal; Butterfield, Natalie; Hunter, Todd R.; Reese, Erik D.; Rosolowsky, Erik; Sarazin, Craig; Shirley, Yancy; <span id="2020ApJS..248...24G.authors" style="display: none;">Sievers, Jonathan; Stanchfield, Sara</span><span id="2020ApJS..248...24G.button"></span>
<script>
toggleAuthors('2020ApJS..248...24G', 22, 0);
</script>

<br/>
2020/06, The Astrophysical Journal Supplement Series, 248, 24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.494.5029D" target="_blank">
<i>GASP XXV: neutral hydrogen gas in the striking jellyfish galaxy JO204</i>
</a>
<br/>
Deb, Tirna; Verheijen, Marc A. W.; Gullieuszik, Marco; Poggianti, Bianca M.; van Gorkom, Jacqueline H.; Ramatsoku, Mpati; Serra, Paolo; Moretti, Alessia; Vulcani, Benedetta; Bettoni, Daniela; Jaffé, L. Yara; Tonnesen, Stephanie; <strong>Fritz, Jacopo</strong>
<br/>
2020/06, Monthly Notices of the Royal Astronomical Society, 494, 5029
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020SSRv..216...62R" target="_blank">
<i>Zooming in on Individual Star Formation: Low- and High-Mass Stars</i>
</a>
<br/>
Rosen, Anna L.; Offner, Stella S. R.; Sadavoy, Sarah I.; Bhandare, Asmita; <strong>Vázquez-Semadeni, Enrique</strong>; Ginsburg, Adam
<br/>
2020/05, Space Science Reviews, 216, 62
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...894...76W" target="_blank">
<i>The MESAS Project: ALMA Observations of the F-type Stars γ Lep, γ Vir A, and γ Vir B</i>
</a>
<br/>
White, Jacob Aaron; <strong>Tapia-Vázquez, F.</strong>; Hughes, A. G.; Moór, A.; Matthews, B.; Wilner, D.; Aufdenberg, J.; Hughes, A. M.; De la Luz, V.; Boley, A. C.
<br/>
2020/05, The Astrophysical Journal, 894, 76
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...637A..25N" target="_blank">
<i>High-resolution, 3D radiative transfer modelling. III. The DustPedia barred galaxies</i>
</a>
<br/>
Nersesian, Angelos; Verstocken, Sam; Viaene, Sébastien; Baes, Maarten; Xilouris, Emmanuel M.; Bianchi, Simone; Casasola, Viviana; Clark, Christopher J. R.; Davies, Jonathan I.; De Looze, Ilse; De Vis, Pieter; Dobbels, Wouter; <strong>Fritz, Jacopo</strong>; Galametz, Maud; Galliano, Frédéric; Jones, Anthony P.; Madden, Suzanne C.; Mosenkov, Aleksandr V.; Trčka, Ana; Ysard, Nathalie
<br/>
2020/05, Astronomy and Astrophysics, 637, A25
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.494.3541H" target="_blank">
<i>Chemodynamics of green pea galaxies - I. Outflows and turbulence driving the escape of ionizing photons and chemical enrichment</i>
</a>
<br/>
Hogarth, L.; Amorín, R.; Vílchez, J. M.; Hägele, G. F.; Cardaci, M.; Pérez-Montero, E.; Firpo, V.; Jaskot, A.; <strong>Chávez, R.</strong>
<br/>
2020/05, Monthly Notices of the Royal Astronomical Society, 494, 3541
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.494.3784T" target="_blank">
<i>Chandra observations of the planetary nebula IC 4593</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Guerrero, M. A.; Bianchi, L.; Chu, Y. -H.; De Marco, O.
<br/>
2020/05, Monthly Notices of the Royal Astronomical Society, 494, 3784
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.494.2823T" target="_blank">
<i>Reproducing the Universe: a comparison between the EAGLE simulations and the nearby DustPedia galaxy sample</i>
</a>
<br/>
Trčka, Ana; Baes, Maarten; Camps, Peter; Meidt, Sharon E.; Trayford, James; Bianchi, Simone; Casasola, Viviana; Cassarà, Letizia P.; De Looze, Ilse; De Vis, Pieter; Dobbels, Wouter; <strong>Fritz, Jacopo</strong>; Galametz, Maud; Galliano, Frédéric; Katsianis, Antonios; Madden, Suzanne C.; Mosenkov, Aleksandr V.; Nersesian, Angelos; Viaene, Sébastien; Xilouris, Emmanuel M.
<br/>
2020/05, Monthly Notices of the Royal Astronomical Society, 494, 2823
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...636A.118M" target="_blank">
<i>From clump to disc scales in W3 IRS4. A case study of the IRAM NOEMA large programme CORE</i>
</a>
<br/>
Mottram, J. C.; Beuther, H.; Ahmadi, A.; Klaassen, P. D.; Beltrán, M. T.; Csengeri, T.; Feng, S.; Gieser, C.; Henning, Th.; Johnston, K. G.; Kuiper, R.; Leurini, S.; Linz, H.; Longmore, S. N.; Lumsden, S.; Maud, L. T.; Moscadelli, L.; <strong>Palau, A.</strong>; Peters, T.; Pudritz, R. E.; <span id="2020A&A...636A.118M.authors" style="display: none;">Ragan, S. E.; Sánchez-Monge, Á.; Semenov, D.; Urquhart, J. S.; Winters, J. M.; Zinnecker, H.</span><span id="2020A&A...636A.118M.button"></span>
<script>
toggleAuthors('2020A&A...636A.118M', 26, 0);
</script>

<br/>
2020/04, Astronomy and Astrophysics, 636, A118
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020SSRv..216...50C" target="_blank">
<i>The Molecular Cloud Lifecycle</i>
</a>
<br/>
Chevance, Mélanie; Kruijssen, J. M. Diederik; <strong>Vazquez-Semadeni, Enrique</strong>; Nakamura, Fumitaka; Klessen, Ralf; <strong>Ballesteros-Paredes, Javier</strong>; Inutsuka, Shu-ichiro; Adamo, Angela; Hennebelle, Patrick
<br/>
2020/04, Space Science Reviews, 216, 50
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...636A..37D" target="_blank">
<i>Dust and gas content of high-redshift galaxies hosting obscured AGN in the Chandra Deep Field-South</i>
</a>
<br/>
D'Amato, Q.; Gilli, R.; Vignali, C.; Massardi, M.; Pozzi, F.; Zamorani, G.; Circosta, C.; Vito, F.; <strong>Fritz, J.</strong>; Cresci, G.; Casasola, V.; Calura, F.; Feltre, A.; Manieri, V.; Rigopoulou, D.; Tozzi, P.; Norman, C.
<br/>
2020/04, Astronomy and Astrophysics, 636, A37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...893...56M" target="_blank">
<i>The Evolution of the Inner Regions of Protoplanetary Disks</i>
</a>
<br/>
<strong>Manzo-Martínez, Ezequiel</strong>; Calvet, Nuria; Hernández, Jesús; <strong>Lizano, Susana</strong>; Hernández, Ramiro Franco; Miller, Christopher J.; Maucó, Karina; Briceño, César; <strong>D'Alessio, Paola</strong>
<br/>
2020/04, The Astrophysical Journal, 893, 56
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...893...60K" target="_blank">
<i>Early Low-mass Galaxies and Star-cluster Candidates at z ∼ 6-9 Identified by the Gravitational-lensing Technique and Deep Optical/Near-infrared Imaging</i>
</a>
<br/>
Kikuchihara, Shotaro; Ouchi, Masami; Ono, Yoshiaki; Mawatari, Ken; Chevallard, Jacopo; Harikane, Yuichi; Kojima, Takashi; Oguri, Masamune; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane
<br/>
2020/04, The Astrophysical Journal, 893, 60
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...892..136S" target="_blank">
<i>Effects of Scattering, Temperature Gradients, and Settling on the Derived Dust Properties of Observed Protoplanetary Disks</i>
</a>
<br/>
<strong>Sierra, Anibal</strong>; <strong>Lizano, Susana</strong>
<br/>
2020/04, The Astrophysical Journal, 892, 136
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...892..146V" target="_blank">
<i>GASP XXIV. The History of Abruptly Quenched Galaxies in Clusters</i>
</a>
<br/>
Vulcani, Benedetta; <strong>Fritz, Jacopo</strong>; Poggianti, Bianca M.; Bettoni, Daniela; Franchetto, Andrea; Moretti, Alessia; Gullieuszik, Marco; Jaffé, Yara; Biviano, Andrea; Radovich, Mario; Mingozzi, Matilde
<br/>
2020/04, The Astrophysical Journal, 892, 146
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...893...23G" target="_blank">
<i>MOSEL Survey: Tracking the Growth of Massive Galaxies at 2 &lt; z &lt; 4 Using Kinematics and the IllustrisTNG Simulation</i>
</a>
<br/>
Gupta, Anshu; Tran, Kim-Vy; Cohn, Jonathan; Alcorn, Leo Y.; Yuan, Tiantian; <strong>Rodriguez-Gomez, Vicente</strong>; Harshan, Anishya; Forrest, Ben; Kewley, Lisa J.; Glazebrook, Karl; Straatman, Caroline M.; Kacprzak, Glenn G.; Nanayakkara, Themiya; Labbé, Ivo; Papovich, Casey; Cowley, Michael
<br/>
2020/04, The Astrophysical Journal, 893, 23
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...636A...5R" target="_blank">
<i>SYMBA: An end-to-end VLBI synthetic data generation pipeline. Simulating Event Horizon Telescope observations of M 87</i>
</a>
<br/>
Roelofs, F.; Janssen, M.; Natarajan, I.; Deane, R.; Davelaar, J.; Olivares, H.; Porth, O.; Paine, S. N.; Bouman, K. L.; Tilanus, R. P. J.; van Bemmel, I. M.; Falcke, H.; Akiyama, K.; Alberdi, A.; Alef, W.; Asada, K.; Azulay, R.; Baczko, A.; Ball, D.; Baloković, M.; <span id="2020A&A...636A...5R.authors" style="display: none;">Barrett, J.; Bintley, D.; Blackburn, L.; Boland, W.; Bower, G. C.; Bremer, M.; Brinkerink, C. D.; Brissenden, R.; Britzen, S.; Broderick, A. E.; Broguiere, D.; Bronzwaer, T.; Byun, D.; Carlstrom, J. E.; Chael, A.; Chan, C.; Chatterjee, S.; Chatterjee, K.; Chen, M.; Chen, Y.; Cho, I.; Christian, P.; Conway, J. E.; Cordes, J. M.; Crew, G. B.; Cui, Y.; De Laurentis, M.; Dempsey, J.; Desvignes, G.; Dexter, J.; Doeleman, S. S.; Eatough, R. P.; Fish, V. L.; Fomalont, E.; Fraga-Encinas, R.; Friberg, P.; Fromm, C. M.; Gómez, J. L.; Galison, P.; Gammie, C. F.; García, R.; Gentaz, O.; Georgiev, B.; Goddi, C.; Gold, R.; Gu, M.; Gurwell, M.; Hada, K.; Hecht, M. H.; Hesper, R.; Ho, L. C.; Ho, P.; Honma, M.; Huang, C. L.; Huang, L.; Hughes, D. H.; Ikeda, S.; Inoue, M.; Issaoun, S.; James, D. J.; Jannuzi, B. T.; Jeter, B.; Jiang, W.; Johnson, M. D.; Jorstad, S.; Jung, T.; Karami, M.; Karuppusamy, R.; Kawashima, T.; Keating, G. K.; Kettenis, M.; Kim, J.; Kim, J.; Kim, J.; Kino, M.; Koay, J. Y.; Koch, P. M.; Koyama, S.; Kramer, M.; Kramer, C.; Krichbaum, T. P.; Kuo, C.; Lauer, T. R.; Lee, S.; Li, Y.; Li, Z.; Lindqvist, M.; Lico, R.; Liu, K.; Liuzzo, E.; Lo, W.; Lobanov, A. P.; <strong>Loinard, L.</strong>; Lonsdale, C.; Lu, R.; MacDonald, N. R.; Mao, J.; Markoff, S.; Marrone, D. P.; Marscher, A. P.; Martí-Vidal, I.; Matsushita, S.; Matthews, L. D.; Medeiros, L.; Menten, K. M.; Mizuno, Y.; Mizuno, I.; Moran, J. M.; Moriyama, K.; Moscibrodzka, M.; Müller, C.; Nagai, H.; Nagar, N. M.; Nakamura, M.; Narayan, R.; Narayanan, G.; Neri, R.; Ni, C.; Noutsos, A.; Okino, H.; Olivares, H.; Ortiz-León, G. N.; Oyama, T.; Özel, F.; Palumbo, D. C. M.; Patel, N.; Pen, U.; Pesce, D. W.; Piétu, V.; Plambeck, R.; PopStefanija, A.; Prather, B.; Preciado-López, J. A.; Psaltis, D.; Pu, H.; Ramakrishnan, V.; Rao, R.; Rawlings, M. G.; Raymond, A. W.; Rezzolla, L.; Ripperda, B.; Rogers, A.; Ros, E.; Rose, M.; Roshanineshat, A.; Rottmann, H.; Roy, A. L.; Ruszczyk, C.; Ryan, B. R.; Rygl, K. L. J.; Sánchez, S.; Sánchez-Arguelles, D.; Sasada, M.; Savolainen, T.; Schloerb, F. P.; Schuster, K.; Shao, L.; Shen, Z.; Small, D.; Won Sohn, B.; SooHoo, J.; Tazaki, F.; Tiede, P.; Titus, M.; Toma, K.; Torne, P.; Traianou, E.; Trent, T.; Trippe, S.; Tsuda, S.; van Langevelde, H. J.; van Rossum, D. R.; Wagner, J.; Wardle, J.; Weintroub, J.; Wex, N.; Wharton, R.; Wielgus, M.; Wong, G. N.; Wu, Q.; Young, A.; Young, K.; Younsi, Z.; Yuan, F.; Yuan, Y.; Zensus, J. A.; Zhao, G.; Zhao, S.; Zhu, Z.</span><span id="2020A&A...636A...5R.button"></span>
<script>
toggleAuthors('2020A&A...636A...5R', 209, 0);
</script>

<br/>
2020/04, Astronomy and Astrophysics, 636, A5
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020RMxAA..56...29N" target="_blank">
<i>The Jet/Counterjet Symmetry of the HH 212 Outflow</i>
</a>
<br/>
Noriega-Crespo, A.; Raga, A. C.; <strong>Lora, V.</strong>; Rodríguez-Ramírez, J. C.
<br/>
2020/04, Revista Mexicana de Astronomia y Astrofisica, 56, 29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020RMxAA..56...55R" target="_blank">
<i>The Properties and Stability of Self-Gravitating, Polytropic Spheres with γ = 1 to 1.4 Specific Heat Ratios</i>
</a>
<br/>
Raga, A. C.; Osorio-Caballero, J. A.; Chan, R. S.; Esquivel, A.; Rodríguez-González, A.; <strong>Lora, V.</strong>; Rodríguez Ramírez, J. C.
<br/>
2020/04, Revista Mexicana de Astronomia y Astrofisica, 56, 55
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.493.5807C" target="_blank">
<i>Supersolar metallicity in G0-G3 main-sequence stars with V &lt; 15. II. An extension of the sample</i>
</a>
<br/>
Chávez, M.; <strong>Tapia-Schiavon, C.</strong>; Bertone, E.; López-Valdivia, R.
<br/>
2020/04, Monthly Notices of the Royal Astronomical Society, 493, 5807
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...892...82R" target="_blank">
<i>Proper Motions of the Radio Source Orion MR, Formerly Known as Orion n, and New Sources with Large Proper Motions in Orion BN/KL</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Dzib, Sergio A.; <strong>Zapata, Luis</strong>; <strong>Lizano, Susana</strong>; <strong>Loinard, Laurent</strong>; Menten, Karl M.; Gómez, Laura
<br/>
2020/04, The Astrophysical Journal, 892, 82
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...892...91H" target="_blank">
<i>Dusty Stellar Birth and Death in the Metal-poor Galaxy NGC 6822</i>
</a>
<br/>
Hirschauer, Alec S.; Gray, Laurin; Meixner, Margaret; Jones, Olivia C.; <strong>Srinivasan, Sundar</strong>; Boyer, Martha L.; Sargent, B. A.
<br/>
2020/04, The Astrophysical Journal, 892, 91
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...892L..23M" target="_blank">
<i>CO, Water, and Tentative Methanol in η Carinae Approaching Periastron</i>
</a>
<br/>
Morris, Patrick W.; Charnley, Steven B.; Corcoran, Michael; Cordiner, Martin; Damineli, Augusto; Groh, Jose H.; Gull, Theodore R.; <strong>Loinard, Laurent</strong>; Madura, Thomas; Mehner, Andrea; Moffat, Anthony; Palmer, Maureen Y.; Rau, Gioia; Richardson, Noel D.; Weigelt, Gerd
<br/>
2020/04, The Astrophysical Journal, 892, L23
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020AJ....159..171F" target="_blank">
<i>A Ringed Pole-on Outflow from DO Tauri Revealed by ALMA</i>
</a>
<br/>
Fernández-López, Manuel; <strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Vazzano, María M.; Guzmán, Andrés E.; López, Rosario
<br/>
2020/04, The Astronomical Journal, 159, 171
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.493.4950S" target="_blank">
<i>Anisotropic infall in the outskirts of OmegaWINGS galaxy clusters</i>
</a>
<br/>
Salerno, Juan Manuel; Martínez, Héctor J.; Muriel, Hernán; Coenda, Valeria; Vulcani, Benedetta; Poggianti, Bianca; Moretti, Alessia; Gullieuszik, Marco; Fritz, Jacopo; Bettoni, Daniela
<br/>
2020/04, Monthly Notices of the Royal Astronomical Society, 493, 4950
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...892...60S" target="_blank">
<i>Angular Expansion of Nova Shells</i>
</a>
<br/>
Santamaría, E.; Guerrero, M. A.; Ramos-Larios, G.; <strong>Toalá, J. A.</strong>; Sabin, L.; Rubio, G.; Quino-Mendoza, J. A.
<br/>
2020/03, The Astrophysical Journal, 892, 60
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...635A.134D" target="_blank">
<i>Studying the ISM at ∼10 pc scale in NGC 7793 with MUSE. I. Data description and properties of the ionised gas</i>
</a>
<br/>
Della Bruna, Lorenza; Adamo, Angela; Bik, Arjan; Fumagalli, Michele; Walterbos, Rene; Östlin, Göran; <strong>Bruzual, Gustavo</strong>; Calzetti, Daniela; Charlot, Stephane; Grasha, Kathryn; Smith, Linda J.; Thilker, David; Wofford, Aida
<br/>
2020/03, Astronomy and Astrophysics, 635, A134
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020PASP..132c5001L" target="_blank">
<i>The Karl G. Jansky Very Large Array Sky Survey (VLASS). Science Case and Survey Design</i>
</a>
<br/>
Lacy, M.; Baum, S. A.; Chandler, C. J.; Chatterjee, S.; Clarke, T. E.; Deustua, S.; English, J.; Farnes, J.; Gaensler, B. M.; Gugliucci, N.; Hallinan, G.; Kent, B. R.; Kimball, A.; Law, C. J.; Lazio, T. J. W.; Marvil, J.; Mao, S. A.; Medlin, D.; Mooley, K.; Murphy, E. J.; <span id="2020PASP..132c5001L.authors" style="display: none;">Myers, S.; Osten, R.; Richards, G. T.; Rosolowsky, E.; Rudnick, L.; Schinzel, F.; Sivakoff, G. R.; Sjouwerman, L. O.; Taylor, R.; White, R. L.; Wrobel, J.; Andernach, H.; Beasley, A. J.; Berger, E.; Bhatnager, S.; Birkinshaw, M.; Bower, G. C.; Brandt, W. N.; Brown, S.; Burke-Spolaor, S.; Butler, B. J.; Comerford, J.; Demorest, P. B.; Fu, H.; Giacintucci, S.; Golap, K.; Güth, T.; Hales, C. A.; Hiriart, R.; Hodge, J.; Horesh, A.; Ivezić, Ž.; Jarvis, M. J.; Kamble, A.; Kassim, N.; Liu, X.; <strong>Loinard, L.</strong>; Lyons, D. K.; Masters, J.; Mezcua, M.; Moellenbrock, G. A.; Mroczkowski, T.; Nyland, K.; O'Dea, C. P.; O'Sullivan, S. P.; Peters, W. M.; Radford, K.; Rao, U.; Robnett, J.; Salcido, J.; Shen, Y.; Sobotka, A.; Witz, S.; Vaccari, M.; van Weeren, R. J.; Vargas, A.; Williams, P. K. G.; Yoon, I.</span><span id="2020PASP..132c5001L.button"></span>
<script>
toggleAuthors('2020PASP..132c5001L', 78, 0);
</script>

<br/>
2020/03, Publications of the Astronomical Society of the Pacific, 132, 035001
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020Ap&SS.365...43A" target="_blank">
<i>Neutron and quark stars: constraining the parameters for simple EoS using the GW170817</i>
</a>
<br/>
<strong>Arroyo-Chávez, Griselda</strong>; Cruz-Osorio, Alejandro; Lora-Clavijo, F. D.; Campuzano Vargas, Cuauhtemoc; García Mora, Luis Alejandro
<br/>
2020/02, Astrophysics and Space Science, 365, 43
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...890..152M" target="_blank">
<i>Modeling the Strongest Silicate Emission Features of Local Type 1 AGNs</i>
</a>
<br/>
Martínez-Paredes, M.; <strong>González-Martín, O.</strong>; <strong>Esparza-Arredondo, D.</strong>; Kim, M.; Alonso-Herrero, A.; Krongold, Y.; Hoang, T.; Ramos Almeida, C.; Aretxaga, I.; Dultzin, D.; Hodgson, J.
<br/>
2020/02, The Astrophysical Journal, 890, 152
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...890..165R" target="_blank">
<i>A Massive Young Runaway Star in W49 North</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Galván-Madrid, Roberto</strong>; Sanchez-Bermudez, Joel; De Pree, Christopher G.
<br/>
2020/02, The Astrophysical Journal, 890, 165
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...890...76N" target="_blank">
<i>ALMA Observations of Two Massive and Dense MALT90 Clumps</i>
</a>
<br/>
Neupane, Sudeep; Garay, Guido; Contreras, Yanett; Guzmán, Andrés E.; <strong>Rodríguez, Luis Felipe</strong>
<br/>
2020/02, The Astrophysical Journal, 890, 76
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...890....5C" target="_blank">
<i>Spatially Resolved Analysis of Neutral Winds, Stars, and Ionized Gas Kinematics with MEGARA/GTC: New Insights on the Nearby Galaxy UGC 10205</i>
</a>
<br/>
Catalán-Torrecilla, C.; Castillo-Morales, Á.; Gil de Paz, A.; Gallego, J.; Carrasco, E.; Iglesias-Páramo, J.; Cedazo, R.; Chamorro-Cazorla, M.; Pascual, S.; García-Vargas, M. L.; Cardiel, N.; Gómez-Alvarez, P.; Pérez-Calpena, A.; Martínez-Delgado, I.; Dullo, B. T.; Coelho, P.; <strong>Bruzual, G.</strong>; Charlot, S.
<br/>
2020/02, The Astrophysical Journal, 890, 5
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...634A..57D" target="_blank">
<i>Predicting the global far-infrared SED of galaxies via machine learning techniques</i>
</a>
<br/>
Dobbels, W.; Baes, M.; Viaene, S.; Bianchi, S.; Davies, J. I.; Casasola, V.; Clark, C. J. R.; <strong>Fritz, J.</strong>; Galametz, M.; Galliano, F.; Mosenkov, A.; Nersesian, A.; Trčka, A.
<br/>
2020/02, Astronomy and Astrophysics, 634, A57
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...889L..31R" target="_blank">
<i>High-resolution Spectral Line Indices Useful for the Analysis of Stellar Populations</i>
</a>
<br/>
Rodríguez-Merino, Lino H.; Mayya, Y. D.; Coelho, Paula R. T.; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane; Carrasco, Esperanza; de Paz, Armando Gil
<br/>
2020/02, The Astrophysical Journal, 889, L31
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020AJ....159...62C" target="_blank">
<i>ALMA Observations of the Extraordinary Carina Pillars: HH 901/902</i>
</a>
<br/>
<strong>Cortes-Rangel, Geovanni</strong>; <strong>Zapata, Luis A.</strong>; <strong>Toalá, Jesús A.</strong>; Ho, Paul T. P.; Takahashi, Satoko; Mesa-Delgado, Adal; Masqué, Josep M.
<br/>
2020/02, The Astronomical Journal, 159, 62
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.492.1957R" target="_blank">
<i>Kinematical investigation of possible fast collimated outflows in twelve planetary nebulae</i>
</a>
<br/>
Rechy-García, J. S.; Guerrero, M. A.; Duarte Puertas, S.; Chu, Y. -H.; <strong>Toalá, J. A.</strong>; Miranda, L. F.
<br/>
2020/02, Monthly Notices of the Royal Astronomical Society, 492, 1957
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.492.2075B" target="_blank">
<i>Galaxy interactions in IllustrisTNG-100, I: The power and limitations of visual identification</i>
</a>
<br/>
Blumenthal, Kelly A.; Moreno, Jorge; Barnes, Joshua E.; Hernquist, Lars; Torrey, Paul; Claytor, Zachary; <strong>Rodriguez-Gomez, Vicente</strong>; Marinacci, Federico; Vogelsberger, Mark
<br/>
2020/02, Monthly Notices of the Royal Astronomical Society, 492, 2075
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.492..895D" target="_blank">
<i>Ultracompact H II regions with extended emission: the complete view</i>
</a>
<br/>
de la Fuente, Eduardo; Porras, Alicia; Trinidad, Miguel A.; <strong>Kurtz, Stanley E.</strong>; Kemp, Simon N.; Tafoya, Daniel; Franco, José; Rodríguez-Rico, Carlos
<br/>
2020/02, Monthly Notices of the Royal Astronomical Society, 492, 895
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...889....9M" target="_blank">
<i>GASP. XXII. The Molecular Gas Content of the JW100 Jellyfish Galaxy at z ∼ 0.05: Does Ram Pressure Promote Molecular Gas Formation?</i>
</a>
<br/>
Moretti, Alessia; Paladino, Rosita; Poggianti, Bianca M.; Serra, Paolo; Roediger, Elke; Gullieuszik, Marco; Tomičić, Neven; Radovich, Mario; Vulcani, Benedetta; Jaffé, Yara L.; <strong>Fritz, Jacopo</strong>; Bettoni, Daniela; Ramatsoku, Mpati; Wolter, Anna
<br/>
2020/01, The Astrophysical Journal, 889, 9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020A&A...633A.100C" target="_blank">
<i>The ISM scaling relations in DustPedia late-type galaxies: A benchmark study for the Local Universe</i>
</a>
<br/>
Casasola, V.; Bianchi, S.; De Vis, P.; Magrini, L.; Corbelli, E.; Clark, C. J. R.; <strong>Fritz, J.</strong>; Nersesian, A.; Viaene, S.; Baes, M.; Cassarà, L. P.; Davies, J.; De Looze, I.; Dobbels, W.; Galametz, M.; Galliano, F.; Jones, A. P.; Madden, S. C.; Mosenkov, A. V.; Trčka, A.; <span id="2020A&A...633A.100C.authors" style="display: none;">Xilouris, E.</span><span id="2020A&A...633A.100C.button"></span>
<script>
toggleAuthors('2020A&A...633A.100C', 21, 0);
</script>

<br/>
2020/01, Astronomy and Astrophysics, 633, A100
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJ...888...41A" target="_blank">
<i>Modeling the Accretion Disk around the High-mass Protostar GGD 27-MM1</i>
</a>
<br/>
Añez-López, N.; Osorio, M.; Busquet, G.; Girart, J. M.; Macías, E.; <strong>Carrasco-González, C.</strong>; Curiel, S.; Estalella, R.; Fernández-López, M.; <strong>Galván-Madrid, R.</strong>; Kwon, J.; Torrelles, J. M.
<br/>
2020/01, The Astrophysical Journal, 888, 41
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020ApJS..246....5T" target="_blank">
<i>Nonlinear Convergence of Solar-like Stars Chromospheres Using Millimeter, Submillimeter, and Infrared Observations</i>
</a>
<br/>
<strong>Tapia-Vázquez, F.</strong>; De la Luz, V.
<br/>
2020/01, The Astrophysical Journal Supplement Series, 246, 5
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020AdSpR..65..763B" target="_blank">
<i>RadioAstron reveals super-compact structures in the bursting H<SUB>2</SUB>O maser source G25.65+1.05</i>
</a>
<br/>
Bayandina, O. S.; Shakhvorostova, N. N.; Alakoz, A. V.; Burns, R. A.; <strong>Kurtz, S. E.</strong>; Val'tts, I. E.
<br/>
2020/01, Advances in Space Research, 65, 763
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.491.4069B" target="_blank">
<i>VLBI observations of the G25.65+1.05 water maser superburst</i>
</a>
<br/>
Burns, R. A.; Orosz, G.; Bayandina, O.; Surcis, G.; Olech, M.; MacLeod, G.; Volvach, A.; Rudnitskii, G.; Hirota, T.; Immer, K.; Blanchard, J.; Marcote, B.; van Langevelde, H. J.; Chibueze, J. O.; Sugiyama, K.; Kim, Kee-Tae; Val`tts, I.; Shakhvorostova, N.; Kramer, B.; Baan, W. A.; <span id="2020MNRAS.491.4069B.authors" style="display: none;">Brogan, C.; Hunter, T.; <strong>Kurtz, S.</strong>; Sobolev, A. M.; Brand, J.; Volvach, L.</span><span id="2020MNRAS.491.4069B.button"></span>
<script>
toggleAuthors('2020MNRAS.491.4069B', 26, 0);
</script>

<br/>
2020/01, Monthly Notices of the Royal Astronomical Society, 491, 4069
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.491.2025C" target="_blank">
<i>To use or not to use synthetic stellar spectra in population synthesis models?</i>
</a>
<br/>
Coelho, Paula R. T.; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane
<br/>
2020/01, Monthly Notices of the Royal Astronomical Society, 491, 2025
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.491..215B" target="_blank">
<i>A kinematically unbiased, all-sky search for nearby, young, low-mass stars</i>
</a>
<br/>
<strong>Binks, Alexander S.</strong>; Chalifour, Matthieu; Kastner, Joel H.; Rodriguez, David; Murphy, Simon J.; Principe, David A.; Punzi, Kristina; Sacco, Germano G.; Hernández, Jesús
<br/>
2020/01, Monthly Notices of the Royal Astronomical Society, 491, 215
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2020MNRAS.491...29O" target="_blank">
<i>The inner view of NGC 1052 using multiple X-ray observations</i>
</a>
<br/>
<strong>Osorio-Clavijo, N.</strong>; <strong>González-Martín, O.</strong>; Papadakis, I. E.; Masegosa, J.; Hernández-García, L.
<br/>
2020/01, Monthly Notices of the Royal Astronomical Society, 491, 29
</p></li>
</ol>
</div>
<div class="tab-pane" id="2019">
<h4 style="text-indent: 10px;">Publications 2019</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...887..244T" target="_blank">
<i>Exploring the Grain Properties in the Disk of HL Tau with an Evolutionary Model</i>
</a>
<br/>
<strong>Tapia, Carlos</strong>; <strong>Lizano, Susana</strong>; <strong>Sierra, Anibal</strong>; <strong>Carrasco-González, Carlos</strong>; <strong>Bayona-Bobadilla, Elly</strong>
<br/>
2019/12, The Astrophysical Journal, 887, 244
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...887..155P" target="_blank">
<i>GASP XXIII: A Jellyfish Galaxy as an Astrophysical Laboratory of the Baryonic Cycle</i>
</a>
<br/>
Poggianti, Bianca M.; Ignesti, Alessandro; Gitti, Myriam; Wolter, Anna; Brighenti, Fabrizio; Biviano, Andrea; George, Koshy; Vulcani, Benedetta; Gullieuszik, Marco; Moretti, Alessia; Paladino, Rosita; Bettoni, Daniela; Franchetto, Andrea; Jaffé, Yara L.; Radovich, Mario; Roediger, Elke; Tomičić, Neven; Tonnesen, Stephanie; Bellhouse, Callum; <strong>Fritz, Jacopo</strong>; <span id="2019ApJ...887..155P.authors" style="display: none;">Omizzolo, Alessandro</span><span id="2019ApJ...887..155P.button"></span>
<script>
toggleAuthors('2019ApJ...887..155P', 21, 0);
</script>

<br/>
2019/12, The Astrophysical Journal, 887, 155
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...886..125E" target="_blank">
<i>Physical Parameters of the Torus for the Type 2 Seyfert IC 5063 from Mid-IR and X-Ray Simultaneous Spectral Fitting</i>
</a>
<br/>
<strong>Esparza-Arredondo, Donaji</strong>; <strong>González-Martín, Omaira</strong>; Dultzin, Deborah; Ramos Almeida, Cristina; <strong>Fritz, Jacopo</strong>; Masegosa, Josefa; <strong>Pasetto, Alice</strong>; Martínez-Paredes, Mariela; <strong>Osorio-Clavijo, Natalia</strong>; <strong>Victoria-Ceballos, Cesar</strong>
<br/>
2019/12, The Astrophysical Journal, 886, 125
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.490.5521B" target="_blank">
<i>Multiwavelength observations of the triple-peaked AGN Mrk 622</i>
</a>
<br/>
Benítez, E.; Cruz-González, I.; Rodríguez-Espinosa, J. M.; <strong>González-Martín, O.</strong>; Negrete, C. A.; Gutiérrez, L.; Jiménez-Bailón, E.; Ruschel-Dutra, D.; <strong>Rodríguez, L. F.</strong>; <strong>Loinard, L.</strong>; Binette, L.
<br/>
2019/12, Monthly Notices of the Royal Astronomical Society, 490, 5521
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.490.3772P" target="_blank">
<i>On the environment of low surface brightness galaxies at different scales</i>
</a>
<br/>
<strong>Pérez-Montaño, Luis Enrique</strong>; <strong>Cervantes Sodi, Bernardo</strong>
<br/>
2019/12, Monthly Notices of the Royal Astronomical Society, 490, 3772
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.490.3061V" target="_blank">
<i>Global hierarchical collapse in molecular clouds. Towards a comprehensive scenario</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; <strong>Palau, Aina</strong>; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Gómez, Gilberto C.</strong>; <strong>Zamora-Avilés, Manuel</strong>
<br/>
2019/12, Monthly Notices of the Royal Astronomical Society, 490, 3061
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.490.2648B" target="_blank">
<i>What is the physics behind the Larson mass-size relation?</i>
</a>
<br/>
<strong>Ballesteros-Paredes, J.</strong>; Román-Zúñiga, C.; <strong>Salomé, Q.</strong>; Zamora-Avilés, M.; Jiménez-Donaire, M. J.
<br/>
2019/12, Monthly Notices of the Royal Astronomical Society, 490, 2648
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019JSWSC...9A...4N" target="_blank">
<i>Numerical simulations of ICME-ICME interactions</i>
</a>
<br/>
Niembro, Tatiana; Lara, Alejandro; <strong>González, Ricardo Francisco</strong>; Cantó, Jorge
<br/>
2019/12, Journal of Space Weather and Space Climate, 9, A4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...886...30T" target="_blank">
<i>A Carbon-rich Hot Bubble in the Planetary Nebula NGC 5189</i>
</a>
<br/>
<strong>Toalá, Jesús A.</strong>; Montez, Rodolfo, Jr.; Karovska, Margarita
<br/>
2019/11, The Astrophysical Journal, 886, 30
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...631A.142G" target="_blank">
<i>Chemical complexity in high-mass star formation. An observational and modeling case study of the AFGL 2591 VLA 3 hot core</i>
</a>
<br/>
Gieser, C.; Semenov, D.; Beuther, H.; Ahmadi, A.; Mottram, J. C.; Henning, Th.; Beltran, M.; Maud, L. T.; Bosco, F.; Leurini, S.; Peters, T.; Klaassen, P.; Kuiper, R.; Feng, S.; Urquhart, J. S.; Moscadelli, L.; Csengeri, T.; Lumsden, S.; Winters, J. M.; Suri, S.; <span id="2019A&A...631A.142G.authors" style="display: none;">Zhang, Q.; Pudritz, R.; <strong>Palau, A.</strong>; Menten, K. M.; <strong>Galvan-Madrid, R.</strong>; Wyrowski, F.; Schilke, P.; Sánchez-Monge, Á.; Linz, H.; Johnston, K. G.; Jiménez-Serra, I.; Longmore, S.; Möller, T.</span><span id="2019A&A...631A.142G.button"></span>
<script>
toggleAuthors('2019A&A...631A.142G', 33, 0);
</script>

<br/>
2019/11, Astronomy and Astrophysics, 631, A142
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...885..116R" target="_blank">
<i>Dissecting the Hot Bubbles in LMC-N57 with XMM-Newton</i>
</a>
<br/>
Ramírez-Ballinas, Isidro; Reyes-Iturbide, Jorge; <strong>Toalá, Jesús A.</strong>; Rosado, Margarita
<br/>
2019/11, The Astrophysical Journal, 885, 116
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...631A..58C" target="_blank">
<i>VLA cm-wave survey of young stellar objects in the Oph A cluster: constraining extreme UV- and X-ray-driven disk photoevaporation. A pathfinder for Square Kilometre Array studies</i>
</a>
<br/>
Coutens, A.; Liu, H. B.; Jiménez-Serra, I.; Bourke, T. L.; Forbrich, J.; Hoare, M.; <strong>Loinard, L.</strong>; Testi, L.; Audard, M.; Caselli, P.; Chacón-Tanarro, A.; Codella, C.; Di Francesco, J.; Fontani, F.; Hogerheijde, M.; Johansen, A.; Johnstone, D.; Maddison, S.; Panić, O.; Pérez, L. M.; <span id="2019A&A...631A..58C.authors" style="display: none;">Podio, L.; Punanova, A.; Rawlings, J. M. C.; Semenov, D.; Tazzari, M.; Tobin, J. J.; van der Wiel, M. H. D.; van Langevelde, H. J.; Vlemmings, W.; Walsh, C.; Wilner, D.</span><span id="2019A&A...631A..58C.button"></span>
<script>
toggleAuthors('2019A&A...631A..58C', 31, 0);
</script>

<br/>
2019/11, Astronomy and Astrophysics, 631, A58
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.490..832J" target="_blank">
<i>The young stellar population of the metal-poor galaxy NGC 6822</i>
</a>
<br/>
Jones, Olivia C.; Sharp, Michael J.; Reiter, Megan; Hirschauer, Alec S.; Meixner, M.; <strong>Srinivasan, Sundar</strong>
<br/>
2019/11, Monthly Notices of the Royal Astronomical Society, 490, 832
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.489.4049H" target="_blank">
<i>A young and obscured AGN embedded in the giant radio galaxy Mrk 1498</i>
</a>
<br/>
Hernández-García, L.; Panessa, F.; Bassani, L.; Bruni, G.; Ursini, F.; Chavushyan, V.; <strong>González-Martín, O.</strong>; Cazzoli, S.; Jiménez-Andrade, E. F.; Arévalo, P.; Díaz, Y.; Bazzano, A.; Ubertini, P.
<br/>
2019/11, Monthly Notices of the Royal Astronomical Society, 489, 4049
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.490..978P" target="_blank">
<i>Constraints on the production and escape of ionizing radiation from the emission-line spectra of metal-poor star-forming galaxies</i>
</a>
<br/>
Plat, A.; Charlot, S.; <strong>Bruzual, G.</strong>; Feltre, A.; Vidal-García, A.; Morisset, C.; Chevallard, J.; Todt, H.
<br/>
2019/11, Monthly Notices of the Royal Astronomical Society, 490, 978
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.489.4429R" target="_blank">
<i>Not so different after all: properties and spatial structure of column density peaks in the pipe and Orion A clouds</i>
</a>
<br/>
Román-Zúñiga, Carlos G.; Alfaro, Emilio; <strong>Palau, Aina</strong>; Hasenberger, Birgit; Alves, João F.; Lombardi, Marco; <strong>Sánchez, G. Paloma S.</strong>
<br/>
2019/11, Monthly Notices of the Royal Astronomical Society, 489, 4429
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.489.3218D" target="_blank">
<i>The nearby evolved stars survey - I. JCMT/SCUBA-2 submillimetre detection of the detached shell of U Antliae</i>
</a>
<br/>
Dharmawardena, Thavisha E.; Kemper, Francisca; <strong>Srinivasan, Sundar</strong>; Scicluna, Peter; Marshall, Jonathan P.; Wouterloot, Jan G. A.; Greaves, Jane; Goldman, Steven R.; van Loon, Jacco Th; Matsuura, Mikako; McDonald, Iain; He, Jinhua; Zijlstra, Albert A.; <strong>Toalá, Jesús A.</strong>; Wallström, Sofia H. J.; Kim, Hyosun; Trejo, Alfonso; Ventura, Paolo; Lagadec, Eric; Boyer, Martha L.; <span id="2019MNRAS.489.3218D.authors" style="display: none;">Liu, Tie; Rau, Gioia; Izumiura, Hideyuki; Cami, Jan; Holland, Wayne; Jones, Olivia; Shinnaga, Hiroko</span><span id="2019MNRAS.489.3218D.button"></span>
<script>
toggleAuthors('2019MNRAS.489.3218D', 27, 0);
</script>

<br/>
2019/11, Monthly Notices of the Royal Astronomical Society, 489, 3218
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...884..134G" target="_blank">
<i>Variable Hard X-Ray Emission from the Central Star of the Eskimo Nebula</i>
</a>
<br/>
Guerrero, Martín A.; <strong>Toalá, Jesús A.</strong>; Chu, You-Hua
<br/>
2019/10, The Astrophysical Journal, 884, 134
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...884..152G" target="_blank">
<i>Asymptotic Giant Branch Stars in the Nearby Dwarf Galaxy Leo P</i>
</a>
<br/>
Goldman, S. R.; Boyer, M. L.; McQuinn, K. B. W.; Sloan, G. C.; McDonald, I.; van Loon, J. Th.; Zijlstra, A. A.; Hirschauer, A. S.; Skillman, E. D.; <strong>Srinivasan, S.</strong>
<br/>
2019/10, The Astrophysical Journal, 884, 152
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...884..140B" target="_blank">
<i>VLA Overview of the Bursting H2O Maser Source G25.65+1.05</i>
</a>
<br/>
Bayandina, O. S.; Burns, R. A.; <strong>Kurtz, S. E.</strong>; Shakhvorostova, N. N.; Val'tts, I. E.
<br/>
2019/10, The Astrophysical Journal, 884, 140
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...884...97L" target="_blank">
<i>Diagnosing 0.1-10 au Scale Morphology of the FU Ori Disk Using ALMA and VLTI/GRAVITY</i>
</a>
<br/>
Liu, Hauyu Baobab; Mérand, Antoine; Green, Joel D.; Pérez, Sebastián; Hales, Antonio S.; Yang, Yao-Lun; Dunham, Michael M.; Hasegawa, Yasuhiro; Henning, Thomas; <strong>Galván-Madrid, Roberto</strong>; Kóspál, Ágnes; Takami, Michihiro; Vorobyov, Eduard I.; Zhu, Zhaohuan
<br/>
2019/10, The Astrophysical Journal, 884, 97
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.489.2142H" target="_blank">
<i>Bow shocks, bow waves, and dust waves - III. Diagnostics</i>
</a>
<br/>
<strong>Henney, William J.</strong>; <strong>Arthur, S. J.</strong>
<br/>
2019/10, Monthly Notices of the Royal Astronomical Society, 489, 2142
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...884...10G" target="_blank">
<i>Exploring the Mid-infrared SEDs of Six AGN Dusty Torus Models. I. Synthetic Spectra</i>
</a>
<br/>
<strong>González-Martín, Omaira</strong>; Masegosa, Josefa; García-Bernete, Ismael; Ramos Almeida, Cristina; Rodríguez-Espinosa, José Miguel; Márquez, Isabel; <strong>Esparza-Arredondo, Donaji</strong>; <strong>Osorio-Clavijo, Natalia</strong>; <strong>Martínez-Paredes, Mariela</strong>; <strong>Victoria-Ceballos, César</strong>; <strong>Pasetto, Alice</strong>; Dultzin, Deborah
<br/>
2019/10, The Astrophysical Journal, 884, 10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...884...11G" target="_blank">
<i>Exploring the Mid-infrared SEDs of Six AGN Dusty Torus Models. II. The Data</i>
</a>
<br/>
<strong>González-Martín, Omaira</strong>; Masegosa, Josefa; García-Bernete, Ismael; Ramos Almeida, Cristina; Rodríguez-Espinosa, José Miguel; Márquez, Isabel; <strong>Esparza-Arredondo, Donaji</strong>; <strong>Osorio-Clavijo, Natalia</strong>; <strong>Martínez-Paredes, Mariela</strong>; <strong>Victoria-Ceballos, César</strong>; <strong>Pasetto, Alice</strong>; Dultzin, Deborah
<br/>
2019/10, The Astrophysical Journal, 884, 11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...630A.137G" target="_blank">
<i>Structure and kinematics of the Taurus star-forming region from Gaia-DR2 and VLBI astrometry</i>
</a>
<br/>
Galli, P. A. B.; <strong>Loinard, L.</strong>; Bouy, H.; Sarro, L. M.; Ortiz-León, G. N.; Dzib, S. A.; Olivares, J.; Heyer, M.; Hernandez, J.; Román-Zúñiga, C.; Kounkel, M.; Covey, K.
<br/>
2019/10, Astronomy and Astrophysics, 630, A137
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.489.1859H" target="_blank">
<i>The Hubble Sequence at z ∼ 0 in the IllustrisTNG simulation with deep learning</i>
</a>
<br/>
Huertas-Company, Marc; <strong>Rodriguez-Gomez, Vicente</strong>; Nelson, Dylan; Pillepich, Annalisa; Bottrell, Connor; Bernardi, Mariangela; Domínguez-Sánchez, Helena; Genel, Shy; Pakmor, Ruediger; Snyder, Gregory F.; Vogelsberger, Mark
<br/>
2019/10, Monthly Notices of the Royal Astronomical Society, 489, 1859
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.489..842X" target="_blank">
<i>A study of stellar orbit fractions: simulated IllustrisTNG galaxies compared to CALIFA observations</i>
</a>
<br/>
Xu, Dandan; Zhu, Ling; Grand, Robert; Springel, Volker; Mao, Shude; van de Ven, Glenn; Lu, Shengdong; Wang, Yougang; Pillepich, Annalisa; Genel, Shy; Nelson, Dylan; <strong>Rodriguez-Gomez, Vicente</strong>; Pakmor, Rüdiger; Weinberger, Rainer; Marinacci, Federico; Vogelsberger, Mark; Torrey, Paul; Naiman, Jill; Hernquist, Lars
<br/>
2019/10, Monthly Notices of the Royal Astronomical Society, 489, 842
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...883...71C" target="_blank">
<i>The Radial Distribution of Dust Particles in the HL Tau Disk from ALMA and VLA Observations</i>
</a>
<br/>
<strong>Carrasco-González, Carlos</strong>; <strong>Sierra, Anibal</strong>; Flock, Mario; Zhu, Zhaohuan; Henning, Thomas; Chandler, Claire; <strong>Galván-Madrid, Roberto</strong>; Macías, Enrique; Anglada, Guillem; Linz, Hendrik; Osorio, Mayra; <strong>Rodríguez, Luis F.</strong>; Testi, Leonardo; Torrelles, José M.; Pérez, Laura; Liu, Yao
<br/>
2019/09, The Astrophysical Journal, 883, 71
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...629A..81T" target="_blank">
<i>Dynamics of cluster-forming hub-filament systems. The case of the high-mass star-forming complex Monoceros R2</i>
</a>
<br/>
Treviño-Morales, S. P.; Fuente, A.; Sánchez-Monge, Á.; Kainulainen, J.; Didelon, P.; Suri, S.; Schneider, N.; <strong>Ballesteros-Paredes, J.</strong>; Lee, Y. -N.; Hennebelle, P.; Pilleri, P.; González-García, M.; Kramer, C.; García-Burillo, S.; Luna, A.; Goicoechea, J. R.; Tremblin, P.; Geen, S.
<br/>
2019/09, Astronomy and Astrophysics, 629, A81
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...629A..10B" target="_blank">
<i>Fragmentation, rotation, and outflows in the high-mass star-forming region IRAS 23033+5951. A case study of the IRAM NOEMA large program CORE</i>
</a>
<br/>
Bosco, F.; Beuther, H.; Ahmadi, A.; Mottram, J. C.; Kuiper, R.; Linz, H.; Maud, L.; Winters, J. M.; Henning, T.; Feng, S.; Peters, T.; Semenov, D.; Klaassen, P. D.; Schilke, P.; Urquhart, J. S.; Beltrán, M. T.; Lumsden, S. L.; Leurini, S.; Moscadelli, L.; Cesaroni, R.; <span id="2019A&A...629A..10B.authors" style="display: none;">Sánchez-Monge, Á.; <strong>Palau, A.</strong>; Pudritz, R.; Wyrowski, F.; Longmore, S.</span><span id="2019A&A...629A..10B.button"></span>
<script>
toggleAuthors('2019A&A...629A..10B', 25, 0);
</script>

<br/>
2019/09, Astronomy and Astrophysics, 629, A10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.488.3406Z" target="_blank">
<i>Flipping-up the field: gravitational feedback as a mechanism for young clusters dispersal</i>
</a>
<br/>
<strong>Zamora-Avilés, Manuel</strong>; <strong>Ballesteros-Paredes, Javier</strong>; Hernández, Jesús; Román-Zúñiga, Carlos; <strong>Lora, Verónica</strong>; Kounkel, Marina
<br/>
2019/09, Monthly Notices of the Royal Astronomical Society, 488, 3406
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.488.1597V" target="_blank">
<i>GASP - XX. From the loose spatially resolved to the tight global SFR-mass relation in local spiral galaxies</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Moretti, Alessia; Franchetto, Andrea; Gullieuszik, Marco; <strong>Fritz, Jacopo</strong>; Bettoni, Daniela; Tonnesen, Stephanie; Radovich, Mario; Jaffé, Yara L.; McGee, Sean; Bellhouse, Callum; Fasano, Giovanni
<br/>
2019/09, Monthly Notices of the Royal Astronomical Society, 488, 1597
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.5416T" target="_blank">
<i>Morphology and star formation in IllustrisTNG: the build-up of spheroids and discs</i>
</a>
<br/>
Tacchella, Sandro; Diemer, Benedikt; Hernquist, Lars; Genel, Shy; Marinacci, Federico; Nelson, Dylan; Pillepich, Annalisa; <strong>Rodriguez-Gomez, Vicente</strong>; Sales, Laura V.; Springel, Volker; Vogelsberger, Mark
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 5416
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.5593I" target="_blank">
<i>Inquiring into the nature of the Abell 2667 brightest cluster galaxy: physical properties from MUSE</i>
</a>
<br/>
Iani, E.; Rodighiero, G.; <strong>Fritz, J.</strong>; Cresci, G.; Mancini, C.; Tozzi, P.; Rodríguez-Muñoz, L.; Rosati, P.; Caminha, G. B.; Zanella, A.; Berta, S.; Cassata, P.; Concas, A.; Enia, A.; Fadda, D.; Franceschini, A.; Liu, A.; Mercurio, A.; Morselli, L.; Pérez-González, P. G.; <span id="2019MNRAS.487.5593I.authors" style="display: none;">Popesso, P.; Sabatini, G.; Vernet, J.; van Weeren, R. J.</span><span id="2019MNRAS.487.5593I.button"></span>
<script>
toggleAuthors('2019MNRAS.487.5593I', 24, 0);
</script>

<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 5593
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...881..159M" target="_blank">
<i>Characterization of Ring Substructures in the Protoplanetary Disk of HD 169142 from Multiwavelength Atacama Large Millimeter/submillimeter Array Observations</i>
</a>
<br/>
Macías, Enrique; Espaillat, Catherine C.; Osorio, Mayra; Anglada, Guillem; Torrelles, José M.; <strong>Carrasco-González, Carlos</strong>; Flock, Mario; Linz, Hendrik; Bertrang, Gesa H. -M.; Henning, Thomas; Gómez, José F.; Calvet, Nuria; Dent, William R. F.
<br/>
2019/08, The Astrophysical Journal, 881, 159
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...628C...1M" target="_blank">
<i>Substructures in the Keplerian disc around the O-type (proto-)star G17.64+0.16 (Corrigendum)</i>
</a>
<br/>
Maud, L. T.; Cesaroni, R.; Kumar, M. S. N.; Rivilla, V. M.; Ginsburg, A.; Klaassen, P. D.; Harsono, D.; Sánchez-Monge, Á.; Ahmadi, A.; Allen, V.; Beltrán, M. T.; Beuther, H.; <strong>Galván-Madrid, R.</strong>; Goddi, C.; Hoare, M. G.; Hogerheijde, M. R.; Johnston, K. G.; Kuiper, R.; Moscadelli, L.; Peters, T.; <span id="2019A&A...628C...1M.authors" style="display: none;">Testi, L.; van der Tak, F. F. S.; de Wit, W. J.</span><span id="2019A&A...628C...1M.button"></span>
<script>
toggleAuthors('2019A&A...628C...1M', 23, 0);
</script>

<br/>
2019/08, Astronomy and Astrophysics, 628, C1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJS..243...26P" target="_blank">
<i>The Event Horizon General Relativistic Magnetohydrodynamic Code Comparison Project</i>
</a>
<br/>
Porth, Oliver; Chatterjee, Koushik; Narayan, Ramesh; Gammie, Charles F.; Mizuno, Yosuke; Anninos, Peter; Baker, John G.; Bugli, Matteo; Chan, Chi-kwan; Davelaar, Jordy; Del Zanna, Luca; Etienne, Zachariah B.; Fragile, P. Chris; Kelly, Bernard J.; Liska, Matthew; Markoff, Sera; McKinney, Jonathan C.; Mishra, Bhupendra; Noble, Scott C.; Olivares, Héctor; <span id="2019ApJS..243...26P.authors" style="display: none;">Prather, Ben; Rezzolla, Luciano; Ryan, Benjamin R.; Stone, James M.; Tomei, Niccolò; White, Christopher J.; Younsi, Ziri; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chatterjee, Shami; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Geoffrey; Crew, B.; Cui, Yuzhu; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Freeman, Bill; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Patrick; Koch, M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; <strong>Lo, Wen-Ping</strong>; Lobanov, Andrei P.; Loinard, Laurent; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, Ken; Young, André; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Event Horizon Telescope Collaboration</span><span id="2019ApJS..243...26P.button"></span>
<script>
toggleAuthors('2019ApJS..243...26P', 221, 0);
</script>

<br/>
2019/08, The Astrophysical Journal Supplement Series, 243, 26
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...880...99R" target="_blank">
<i>Weak and Compact Radio Emission in Early High-mass Star-forming Regions. II. The Nature of the Radio Sources</i>
</a>
<br/>
Rosero, V.; Hofner, P.; <strong>Kurtz, S.</strong>; Cesaroni, R.; <strong>Carrasco-González, C.</strong>; Araya, E. D.; <strong>Rodríguez, L. F.</strong>; Menten, K. M.; Wyrowski, F.; <strong>Loinard, L.</strong>; Ellingsen, S. P.; Molinari, S.
<br/>
2019/08, The Astrophysical Journal, 880, 99
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.4580R" target="_blank">
<i>GASP - XVII. H I imaging of the jellyfish galaxy JO206: gas stripping and enhanced star formation</i>
</a>
<br/>
Ramatsoku, M.; Serra, P.; Poggianti, B. M.; Moretti, A.; Gullieuszik, M.; Bettoni, D.; Deb, T.; <strong>Fritz, J.</strong>; van Gorkom, J. H.; Jaffé, Y. L.; Tonnesen, S.; Verheijen, M. A. W.; Vulcani, B.; Hugo, B.; Józsa, G. I. G.; Maccagni, F. M.; Makhathini, S.; Ramaila, A.; Smirnov, O.; Thorat, K.
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 4580
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.4669G" target="_blank">
<i>Independent cosmological constraints from high-z H II galaxies</i>
</a>
<br/>
González-Morán, Ana Luisa; <strong>Chávez, Ricardo</strong>; Terlevich, Roberto; Terlevich, Elena; Bresolin, Fabio; Fernández-Arenas, David; Plionis, Manolis; Basilakos, Spyros; Melnick, Jorge; Telles, Eduardo
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 4669
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.3102G" target="_blank">
<i>GASP XVIII: star formation quenching due to AGN feedback in the central region of a jellyfish galaxy</i>
</a>
<br/>
George, K.; Poggianti, B. M.; Bellhouse, C.; Radovich, M.; <strong>Fritz, J.</strong>; Paladino, R.; Bettoni, D.; Jaffé, Y.; Moretti, A.; Gullieuszik, M.; Vulcani, B.; Fasano, G.; Stalin, C. S.; Subramaniam, A.; Tandon, S. N.
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 3102
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.2278V" target="_blank">
<i>GASP - XVI. Does cosmic web enhancement turn on star formation in galaxies?</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Moretti, Alessia; Gullieuszik, Marco; <strong>Fritz, Jacopo</strong>; Franchetto, Andrea; Fasano, Giovanni; Bettoni, Daniela; Jaffé, Yara L.
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 2278
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.2730B" target="_blank">
<i>Erratum: Gravity or turbulence? - IV. Collapsing cores in out of virial disguise</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Palau, Aina</strong>; Klessen, Ralf S.
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 2730
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.2200Z" target="_blank">
<i>Structure and expansion law of H II regions in structured molecular clouds</i>
</a>
<br/>
<strong>Zamora-Avilés, Manuel</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>González, Ricardo F.</strong>; Franco, José; Shore, Steven N.; Hartmann, Lee W.; <strong>Ballesteros-Paredes, Javier</strong>; Banerjee, Robi; Körtgen, Bastian
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 2200
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487.1529D" target="_blank">
<i>Atomic and molecular gas in IllustrisTNG galaxies at low redshift</i>
</a>
<br/>
Diemer, Benedikt; Stevens, Adam R. H.; Lagos, Claudia del P.; Calette, A. R.; Tacchella, Sandro; Hernquist, Lars; Marinacci, Federico; Nelson, Dylan; Pillepich, Annalisa; <strong>Rodriguez-Gomez, Vicente</strong>; Villaescusa-Navarro, Francisco; Vogelsberger, Mark
<br/>
2019/08, Monthly Notices of the Royal Astronomical Society, 487, 1529
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...627A.175M" target="_blank">
<i>GLOSTAR: Radio Source Catalog I. 28° &lt; ℓ &lt; 36° and |b| &lt; 1°</i>
</a>
<br/>
Medina, S. -N. X.; Urquhart, J. S.; Dzib, S. A.; Brunthaler, A.; Cotton, B.; Menten, K. M.; Wyrowski, F.; Beuther, H.; Billington, S. J.; <strong>Carrasco-Gonzalez, C.</strong>; Csengeri, T.; Gong, Y.; Hofner, P.; Nguyen, H.; Ortiz-León, G. N.; Ott, J.; Pandian, J. D.; Roy, N.; Sarkar, E.; Wang, Y.; <span id="2019A&A...627A.175M.authors" style="display: none;">Winkel, B.</span><span id="2019A&A...627A.175M.button"></span>
<script>
toggleAuthors('2019A&A...627A.175M', 21, 0);
</script>

<br/>
2019/07, Astronomy and Astrophysics, 627, A175
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...627L...6M" target="_blank">
<i>Substructures in the Keplerian disc around the O-type (proto-)star G17.64+0.16</i>
</a>
<br/>
Maud, L. T.; Cesaroni, R.; Kumar, M. S. N.; Rivilla, V. M.; Ginsburg, A.; Klaassen, P. D.; Harsono, D.; Sánchez-Monge, Á.; Ahmadi, A.; Allen, V.; Beltrán, M. T.; Beuther, H.; <strong>Galván-Madrid, R.</strong>; Goddi, C.; Hoare, M. G.; Hogerheijde, M. R.; Johnston, K. G.; Kuiper, R.; Moscadelli, L.; Peters, T.; <span id="2019A&A...627L...6M.authors" style="display: none;">Testi, L.; van der Tak, F. F. S.; de Wit, W. J.</span><span id="2019A&A...627L...6M.button"></span>
<script>
toggleAuthors('2019A&A...627L...6M', 23, 0);
</script>

<br/>
2019/07, Astronomy and Astrophysics, 627, L6
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...879...42L" target="_blank">
<i>Angular Momentum in Bipolar Outflows: Dynamical Evolutionary Model</i>
</a>
<br/>
<strong>López-Vázquez, J. A.</strong>; Cantó, J.; <strong>Lizano, S.</strong>
<br/>
2019/07, The Astrophysical Journal, 879, 42
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...627A..68C" target="_blank">
<i>IRAS 23385+6053: an embedded massive cluster in the making</i>
</a>
<br/>
Cesaroni, R.; Beuther, H.; Ahmadi, A.; Beltrán, M. T.; Csengeri, T.; <strong>Galván-Madrid, R.</strong>; Gieser, C.; Henning, T.; Johnston, K. G.; Klaassen, P. D.; Kuiper, R.; Leurini, S.; Linz, H.; Longmore, S.; Lumsden, S. L.; Maud, L. T.; Moscadelli, L.; Mottram, J. C.; <strong>Palau, A.</strong>; Peters, T.; <span id="2019A&A...627A..68C.authors" style="display: none;">Pudritz, R. E.; Sánchez-Monge, Á.; Schilke, P.; Semenov, D.; Suri, S.; Urquhart, J. S.; Winters, J. M.; Zhang, Q.; Zinnecker, H.</span><span id="2019A&A...627A..68C.button"></span>
<script>
toggleAuthors('2019A&A...627A..68C', 29, 0);
</script>

<br/>
2019/07, Astronomy and Astrophysics, 627, A68
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...627A...6S" target="_blank">
<i>Physical conditions in Centaurus A's northern filaments. I. APEX mid-J CO observations of CO-bright regions</i>
</a>
<br/>
<strong>Salomé, Q.</strong>; Salomé, P.; Gusdorf, A.; Combes, F.
<br/>
2019/07, Astronomy and Astrophysics, 627, A6
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.487L..61Z" target="_blank">
<i>Detection of the self-regulation of star formation in galaxy discs</i>
</a>
<br/>
Zaragoza-Cardiel, Javier; <strong>Fritz, Jacopo</strong>; Aretxaga, Itziar; Mayya, Divakara; Rosa-González, Daniel; Beckman, John E.; <strong>Bruzual, Gustavo</strong>; Charlot, Stephane; Lomelí-Núñez, Luis
<br/>
2019/07, Monthly Notices of the Royal Astronomical Society, 487, L61
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019AJ....158...18H" target="_blank">
<i>APEX Millimeter Observations of Methanol Emission Toward High-mass Star-forming Cores</i>
</a>
<br/>
<strong>Hernández-Hernández, Vicente</strong>; <strong>Kurtz, Stan</strong>; Kalenskii, Sergei; Golysheva, Polina; Garay, Guido; <strong>Zapata, Luis</strong>; Bergman, Per
<br/>
2019/07, The Astronomical Journal, 158, 18
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486.5567R" target="_blank">
<i>Parameter estimation for scarce stellar populations</i>
</a>
<br/>
<strong>Ramírez-Siordia, V. H.</strong>; <strong>Bruzual, G.</strong>; <strong>Cervantes Sodi, B.</strong>; <strong>Bitsakis, T.</strong>
<br/>
2019/07, Monthly Notices of the Royal Astronomical Society, 486, 5567
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486.4917G" target="_blank">
<i>Torus model properties of an ultra-hard X-ray selected sample of Seyfert galaxies</i>
</a>
<br/>
García-Bernete, I.; Ramos Almeida, C.; Alonso-Herrero, A.; Ward, M. J.; Acosta-Pulido, J. A.; Pereira-Santaella, M.; Hernán-Caballero, A.; Asensio Ramos, A.; <strong>González-Martín, O.</strong>; Levenson, N. A.; Mateos, S.; Carrera, F. J.; Ricci, C.; Roche, P.; Marquez, I.; Packham, C.; Masegosa, J.; Fuller, L.
<br/>
2019/07, Monthly Notices of the Royal Astronomical Society, 486, 4917
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486.4423H" target="_blank">
<i>Bow shocks, bow waves, and dust waves - II. Beyond the rip point</i>
</a>
<br/>
<strong>Henney, William J.</strong>; <strong>Arthur, S. J.</strong>
<br/>
2019/07, Monthly Notices of the Royal Astronomical Society, 486, 4423
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486.3664O" target="_blank">
<i>A search for non-thermal radio emission from jets of massive young stellar objects</i>
</a>
<br/>
Obonyo, W. O.; Lumsden, S. L.; Hoare, M. G.; Purser, S. J. D.; <strong>Kurtz, S. E.</strong>; Johnston, K. G.
<br/>
2019/07, Monthly Notices of the Royal Astronomical Society, 486, 3664
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486.3423H" target="_blank">
<i>Bow shocks, bow waves, and dust waves - I. Strong coupling limit</i>
</a>
<br/>
<strong>Henney, William J.</strong>; <strong>Arthur, S. J.</strong>
<br/>
2019/07, Monthly Notices of the Royal Astronomical Society, 486, 3423
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...878..152L" target="_blank">
<i>Cold, Old, and Metal-poor: New Stellar Substructures in the Milky Way’s Dwarf Spheroidals</i>
</a>
<br/>
<strong>Lora, V.</strong>; Grebel, E. K.; Schmeja, S.; Koch, A.
<br/>
2019/06, The Astrophysical Journal, 878, 152
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...626A.101M" target="_blank">
<i>ROHSA: Regularized Optimization for Hyper-Spectral Analysis. Application to phase separation of 21 cm data</i>
</a>
<br/>
Marchal, Antoine; Miville-Deschênes, Marc-Antoine; Orieux, François; Gac, Nicolas; Soussen, Charles; Lesot, Marie-Jeanne; d'Allonnes, Adrien Revault; <strong>Salomé, Quentin</strong>
<br/>
2019/06, Astronomy and Astrophysics, 626, A101
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...878...90S" target="_blank">
<i>Detection of 4765 MHz OH Emission in a Preplanetary Nebula: CRL 618</i>
</a>
<br/>
Strack, A.; Araya, E. D.; Lebrón, M. E.; Minchin, R. F.; Arce, H. G.; Ghosh, T.; Hofner, P.; <strong>Kurtz, S.</strong>; Olmi, L.; Pihlström, Y.; Salter, C. J.
<br/>
2019/06, The Astrophysical Journal, 878, 90
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...626A..63D" target="_blank">
<i>DustPedia: the relationships between stars, gas, and dust for galaxies residing in different environments</i>
</a>
<br/>
Davies, J. I.; Nersesian, A.; Baes, M.; Bianchi, S.; Casasola, V.; Cassarà, L. P.; Clark, C. J. R.; De Looze, I.; De Vis, P.; Evans, R.; <strong>Fritz, J.</strong>; Galametz, M.; Galliano, F.; Jones, A. P.; Lianou, S.; Madden, S. C.; Mosenkov, A. V.; Smith, M. W. L.; Verstocken, S.; Viaene, S.; <span id="2019A&A...626A..63D.authors" style="display: none;">Vika, M.; Xilouris, E.; Ysard, N.</span><span id="2019A&A...626A..63D.button"></span>
<script>
toggleAuthors('2019A&A...626A..63D', 23, 0);
</script>

<br/>
2019/06, Astronomy and Astrophysics, 626, A63
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...626A..11C" target="_blank">
<i>ALMA survey of Class II protoplanetary disks in Corona Australis: a young region with low disk masses</i>
</a>
<br/>
Cazzoletti, P.; Manara, C. F.; Liu, H. Baobab; van Dishoeck, E. F.; Facchini, S.; Alcalà, J. M.; Ansdell, M.; Testi, L.; Williams, J. P.; <strong>Carrasco-González, C.</strong>; Dong, R.; Forbrich, J.; Fukagawa, M.; <strong>Galván-Madrid, R.</strong>; Hirano, N.; Hogerheijde, M.; Hasegawa, Y.; Muto, T.; Pinilla, P.; Takami, M.; <span id="2019A&A...626A..11C.authors" style="display: none;">Tamura, M.; Tazzari, M.; Wisniewski, J. P.</span><span id="2019A&A...626A..11C.button"></span>
<script>
toggleAuthors('2019A&A...626A..11C', 23, 0);
</script>

<br/>
2019/06, Astronomy and Astrophysics, 626, A11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486L..15Z" target="_blank">
<i>G5.89: an explosive outflow powered by a proto-stellar merger?</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Ho, Paul T. P.; Guzmán Ccolque, Estrella; Fernández-Lopéz, Manuel; <strong>Rodríguez, Luis F.</strong>; Bally, John; Sanhueza, Patricio; <strong>Palau, Aina</strong>; Saito, Masao
<br/>
2019/06, Monthly Notices of the Royal Astronomical Society, 486, L15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486..486R" target="_blank">
<i>GASP - XIX. AGN and their outflows at the centre of jellyfish galaxies</i>
</a>
<br/>
Radovich, Mario; Poggianti, Bianca; Jaffé, Yara L.; Moretti, Alessia; Bettoni, Daniela; Gullieuszik, Marco; Vulcani, Benedetta; <strong>Fritz, Jacopo</strong>
<br/>
2019/06, Monthly Notices of the Royal Astronomical Society, 486, 486
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.486..743D" target="_blank">
<i>Revealing the dust attenuation properties on resolved scales in NGC 628 with SWIFT UVOT data</i>
</a>
<br/>
Decleir, Marjorie; De Looze, Ilse; Boquien, Médéric; Baes, Maarten; Verstocken, Sam; Calzetti, Daniela; Ciesla, Laure; <strong>Fritz, Jacopo</strong>; Kennicutt, Rob; Nersesian, Angelos; Page, Mathew
<br/>
2019/06, Monthly Notices of the Royal Astronomical Society, 486, 743
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...625A.112G" target="_blank">
<i>The XXL Survey. XXXVII. The role of the environment in shaping the stellar population properties of galaxies at 0.1 ≤ z ≤ 0.5</i>
</a>
<br/>
Guglielmo, V.; Poggianti, B. M.; Vulcani, B.; Maurogordato, S.; <strong>Fritz, J.</strong>; Bolzonella, M.; Fotopoulou, S.; Adami, C.; Pierre, M.
<br/>
2019/05, Astronomy and Astrophysics, 625, A112
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ComAC...6....2N" target="_blank">
<i>The IllustrisTNG simulations: public data release</i>
</a>
<br/>
Nelson, Dylan; Springel, Volker; Pillepich, Annalisa; <strong>Rodriguez-Gomez, Vicente</strong>; Torrey, Paul; Genel, Shy; Vogelsberger, Mark; Pakmor, Ruediger; Marinacci, Federico; Weinberger, Rainer; Kelley, Luke; Lovell, Mark; Diemer, Benedikt; Hernquist, Lars
<br/>
2019/05, Computational Astrophysics and Cosmology, 6, 2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019Ap&SS.364...86A" target="_blank">
<i>On the primordial specific frequency of globular clusters in dwarf and giant elliptical galaxies</i>
</a>
<br/>
Abdullah, Ahmed H.; Kroupa, Pavel; Lieberz, Patrick; <strong>González-Lópezlira, Rosa Amelia</strong>
<br/>
2019/05, Astrophysics and Space Science, 364, 86
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...876...39G" target="_blank">
<i>Spectroscopy of NGC 4258 Globular Cluster Candidates: Membership Confirmation and Kinematics</i>
</a>
<br/>
<strong>González-Lópezlira, Rosa A.</strong>; Mayya, Y. D.; <strong>Loinard, Laurent</strong>; Álamo-Martínez, Karla; Heald, George; Georgiev, Iskren Y.; Órdenes-Briceño, Yasna; Lançon, Ariane; Lara-López, Maritza A.; Lomelí-Núñez, Luis; <strong>Bruzual, Gustavo</strong>; Puzia, Thomas H.
<br/>
2019/05, The Astrophysical Journal, 876, 39
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...876....7S" target="_blank">
<i>An Analytical Model of Radial Dust Trapping in Protoplanetary Disks</i>
</a>
<br/>
<strong>Sierra, Anibal</strong>; <strong>Lizano, Susana</strong>; Macías, Enrique; <strong>Carrasco-González, Carlos</strong>; Osorio, Mayra; Flock, Mario
<br/>
2019/05, The Astrophysical Journal, 876, 7
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.485.3600A" target="_blank">
<i>Blazar jet evolution revealed by multi-epoch broad-band radio polarimetry</i>
</a>
<br/>
Anderson, C. S.; O'Sullivan, S. P.; Heald, G. H.; Hodgson, T.; <strong>Pasetto, A.</strong>; Gaensler, B. M.
<br/>
2019/05, Monthly Notices of the Royal Astronomical Society, 485, 3600
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.485.3360T" target="_blank">
<i>Hidden IR structures in NGC 40: signpost of an ancient born-again event</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Ramos-Larios, G.; Guerrero, M. A.; Todt, H.
<br/>
2019/05, Monthly Notices of the Royal Astronomical Society, 485, 3360
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.485.3264P" target="_blank">
<i>From kpcs to the central parsec of NGC 1097: feeding star formation and a black hole at the same time</i>
</a>
<br/>
Prieto, M. Almudena; Fernandez-Ontiveros, Juan A.; <strong>Bruzual, Gustavo</strong>; Burkert, Andreas; Schartmann, Marc; Charlot, Stephan
<br/>
2019/05, Monthly Notices of the Royal Astronomical Society, 485, 3264
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.485.1157B" target="_blank">
<i>GASP. XV. A MUSE view of extreme ram-pressure stripping along the line of sight: physical properties of the jellyfish galaxy JO201</i>
</a>
<br/>
Bellhouse, Callum; Jaffé, Y. L.; McGee, S. L.; Poggianti, B. M.; Smith, R.; Tonnesen, S.; <strong>Fritz, J.</strong>; Hau, G. K. T.; Gullieuszik, M.; Vulcani, B.; Fasano, G.; Moretti, A.; George, K.; Bettoni, D.; D'Onofrio, M.; Omizzolo, A.; Sheen, Y. -K.
<br/>
2019/05, Monthly Notices of the Royal Astronomical Society, 485, 1157
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875..136V" target="_blank">
<i>The Type II-plateau Supernova 2017eaw in NGC 6946 and Its Red Supergiant Progenitor</i>
</a>
<br/>
Van Dyk, Schuyler D.; Zheng, WeiKang; Maund, Justyn R.; Brink, Thomas G.; <strong>Srinivasan, Sundar</strong>; Andrews, Jennifer E.; Smith, Nathan; Leonard, Douglas C.; Morozova, Viktoriya; Filippenko, Alexei V.; Conner, Brody; Milisavljevic, Dan; de Jaeger, Thomas; Long, Knox S.; Isaacson, Howard; Crossfield, Ian J. M.; Kosiarek, Molly R.; Howard, Andrew W.; Fox, Ori D.; Kelly, Patrick L.; <span id="2019ApJ...875..136V.authors" style="display: none;">Piro, Anthony L.; Littlefair, Stuart P.; Dhillon, Vik S.; Wilson, Richard; Butterley, Timothy; Yunus, Sameen; Channa, Sanyum; Jeffers, Benjamin T.; Falcon, Edward; Ross, Timothy W.; Hestenes, Julia C.; Stegman, Samantha M.; Zhang, Keto; Kumar, Sahana</span><span id="2019ApJ...875..136V.button"></span>
<script>
toggleAuthors('2019ApJ...875..136V', 34, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, 136
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875...94H" target="_blank">
<i>On the Nature of the Compact Sources in IRAS 16293-2422 Seen at Centimeter to Submillimeter Wavelengths</i>
</a>
<br/>
<strong>Hernández-Gómez, Antonio</strong>; <strong>Loinard, Laurent</strong>; Chandler, Claire J.; <strong>Rodríguez, Luis F.</strong>; <strong>Zapata, Luis A.</strong>; Wilner, David J.; Ho, Paul T. P.; Caux, Emmanuel; Quénard, David; Bottinelli, Sandrine; Brogan, Crystal L.; Hartmann, Lee; Menten, Karl M.
<br/>
2019/04, The Astrophysical Journal, 875, 94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...624A..80N" target="_blank">
<i>Old and young stellar populations in DustPedia galaxies and their role in dust heating</i>
</a>
<br/>
Nersesian, A.; Xilouris, E. M.; Bianchi, S.; Galliano, F.; Jones, A. P.; Baes, M.; Casasola, V.; Cassarà, L. P.; Clark, C. J. R.; Davies, J. I.; Decleir, M.; Dobbels, W.; De Looze, I.; De Vis, P.; <strong>Fritz, J.</strong>; Galametz, M.; Madden, S. C.; Mosenkov, A. V.; Trčka, A.; Verstocken, S.; <span id="2019A&A...624A..80N.authors" style="display: none;">Viaene, S.; Lianou, S.</span><span id="2019A&A...624A..80N.button"></span>
<script>
toggleAuthors('2019A&A...624A..80N', 22, 0);
</script>

<br/>
2019/04, Astronomy and Astrophysics, 624, A80
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...624A..55S" target="_blank">
<i>A VLBI study of the wind-wind collision region in the massive multiple HD 167971</i>
</a>
<br/>
Sanchez-Bermudez, J.; Alberdi, A.; Schödel, R.; Brandner, W.; <strong>Galván-Madrid, R.</strong>; Guirado, J. C.; Herrero-Illana, R.; Hummel, C. A.; Marcaide, J. M.; Pérez-Torres, M. A.
<br/>
2019/04, Astronomy and Astrophysics, 624, A55
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875L...1E" target="_blank">
<i>First M87 Event Horizon Telescope Results. I. The Shadow of the Supermassive Black Hole</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; <span id="2019ApJ...875L...1E.authors" style="display: none;">Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Freeman, William T.; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, Ken; Young, André; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Algaba, Juan-Carlos; Allardi, Alexander; Amestica, Rodrigo; Anczarski, Jadyn; Bach, Uwe; Baganoff, Frederick K.; Beaudoin, Christopher; Benson, Bradford A.; Berthold, Ryan; Blanchard, Jay M.; Blundell, Ray; Bustamente, Sandra; Cappallo, Roger; Castillo-Domínguez, Edgar; Chang, Chih-Cheng; Chang, Shu-Hao; Chang, Song-Chu; Chen, Chung-Chen; Chilson, Ryan; Chuter, Tim C.; Córdova Rosado, Rodrigo; Coulson, Iain M.; Crawford, Thomas M.; Crowley, Joseph; David, John; Derome, Mark; Dexter, Matthew; Dornbusch, Sven; Dudevoir, Kevin A.; Dzib, Sergio A.; Eckart, Andreas; Eckert, Chris; Erickson, Neal R.; Everett, Wendeline B.; Faber, Aaron; Farah, Joseph R.; Fath, Vernon; Folkers, Thomas W.; Forbes, David C.; Freund, Robert; Gómez-Ruiz, Arturo I.; Gale, David M.; Gao, Feng; Geertsema, Gertie; Graham, David A.; Greer, Christopher H.; Grosslein, Ronald; Gueth, Frédéric; Haggard, Daryl; Halverson, Nils W.; Han, Chih-Chiang; Han, Kuo-Chang; Hao, Jinchi; Hasegawa, Yutaka; Henning, Jason W.; <strong>Hernández-Gómez, Antonio</strong>; Herrero-Illana, Rubén; Heyminck, Stefan; Hirota, Akihiko; Hoge, James; Huang, Yau-De; Impellizzeri, C. M. Violette; Jiang, Homin; Kamble, Atish; Keisler, Ryan; Kimura, Kimihiro; Kono, Yusuke; Kubo, Derek; Kuroda, John; Lacasse, Richard; Laing, Robert A.; Leitch, Erik M.; Li, Chao-Te; Lin, Lupin C. -C.; Liu, Ching-Tang; Liu, Kuan-Yu; Lu, Li-Ming; Marson, Ralph G.; Martin-Cocher, Pierre L.; Massingill, Kyle D.; Matulonis, Callie; McColl, Martin P.; McWhirter, Stephen R.; Messias, Hugo; Meyer-Zhao, Zheng; Michalik, Daniel; Montaña, Alfredo; Montgomerie, William; Mora-Klein, Matias; Muders, Dirk; Nadolski, Andrew; Navarro, Santiago; Neilsen, Joseph; Nguyen, Chi H.; Nishioka, Hiroaki; Norton, Timothy; Nowak, Michael A.; Nystrom, George; Ogawa, Hideo; Oshiro, Peter; Oyama, Tomoaki; Parsons, Harriet; Paine, Scott N.; Peñalver, Juan; Phillips, Neil M.; Poirier, Michael; Pradel, Nicolas; Primiani, Rurik A.; Raffin, Philippe A.; Rahlin, Alexandra S.; Reiland, George; Risacher, Christopher; Ruiz, Ignacio; Sáez-Madaín, Alejandro F.; Sassella, Remi; Schellart, Pim; Shaw, Paul; Silva, Kevin M.; Shiokawa, Hotaka; Smith, David R.; Snow, William; Souccar, Kamal; Sousa, Don; Sridharan, T. K.; Srinivasan, Ranjani; Stahm, William; Stark, Anthony A.; Story, Kyle; Timmer, Sjoerd T.; Vertatschitsch, Laura; Walther, Craig; Wei, Ta-Shun; Whitehorn, Nathan; Whitney, Alan R.; Woody, David P.; Wouterloot, Jan G. A.; Wright, Melvin; Yamaguchi, Paul; Yu, Chen-Yu; Zeballos, Milagros; Zhang, Shuo; Ziurys, Lucy</span><span id="2019ApJ...875L...1E.button"></span>
<script>
toggleAuthors('2019ApJ...875L...1E', 349, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, L1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875...24C" target="_blank">
<i>Filamentary Accretion Flows in the Infrared Dark Cloud G14.225-0.506 Revealed by ALMA</i>
</a>
<br/>
Chen, Huei-Ru Vivien; Zhang, Qizhou; Wright, M. C. H.; Busquet, Gemma; Lin, Yuxin; Liu, Hauyu Baobab; Olguin, F. A.; Sanhueza, Patricio; Nakamura, Fumitaka; <strong>Palau, Aina</strong>; Ohashi, Satoshi; Tatematsu, Ken'ichi; Liao, Li-Wen
<br/>
2019/04, The Astrophysical Journal, 875, 24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875L...4E" target="_blank">
<i>First M87 Event Horizon Telescope Results. IV. Imaging the Central Supermassive Black Hole</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; <span id="2019ApJ...875L...4E.authors" style="display: none;">Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Freeman, William T.; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Farah, Joseph R.; Meyer-Zhao, Zheng; Michalik, Daniel; Nadolski, Andrew; Nishioka, Hiroaki; Pradel, Nicolas; Primiani, Rurik A.; Souccar, Kamal; Vertatschitsch, Laura; Yamaguchi, Paul</span><span id="2019ApJ...875L...4E.button"></span>
<script>
toggleAuthors('2019ApJ...875L...4E', 216, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, L4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875L...5E" target="_blank">
<i>First M87 Event Horizon Telescope Results. V. Physical Origin of the Asymmetric Ring</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; <span id="2019ApJ...875L...5E.authors" style="display: none;">Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Mul̈ler, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Anczarski, Jadyn; Baganoff, Frederick K.; Eckart, Andreas; Farah, Joseph R.; Haggard, Daryl; Meyer-Zhao, Zheng; Michalik, Daniel; Nadolski, Andrew; Neilsen, Joseph; Nishioka, Hiroaki; Nowak, Michael A.; Pradel, Nicolas; Primiani, Rurik A.; Souccar, Kamal; Vertatschitsch, Laura; Yamaguchi, Paul; Zhang, Shuo</span><span id="2019ApJ...875L...5E.button"></span>
<script>
toggleAuthors('2019ApJ...875L...5E', 222, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, L5
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875L...3E" target="_blank">
<i>First M87 Event Horizon Telescope Results. III. Data Processing and Calibration</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; <span id="2019ApJ...875L...3E.authors" style="display: none;">Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Cappallo, Roger; Farah, Joseph R.; Folkers, Thomas W.; Meyer-Zhao, Zheng; Michalik, Daniel; Nadolski, Andrew; Nishioka, Hiroaki; Pradel, Nicolas; Primiani, Rurik A.; Souccar, Kamal; Vertatschitsch, Laura; Yamaguchi, Paul</span><span id="2019ApJ...875L...3E.button"></span>
<script>
toggleAuthors('2019ApJ...875L...3E', 218, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, L3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875L...6E" target="_blank">
<i>First M87 Event Horizon Telescope Results. VI. The Shadow and Mass of the Central Black Hole</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; <span id="2019ApJ...875L...6E.authors" style="display: none;">Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Farah, Joseph R.; Meyer-Zhao, Zheng; Michalik, Daniel; Nadolski, Andrew; Nishioka, Hiroaki; Pradel, Nicolas; Primiani, Rurik A.; Souccar, Kamal; Vertatschitsch, Laura; Yamaguchi, Paul</span><span id="2019ApJ...875L...6E.button"></span>
<script>
toggleAuthors('2019ApJ...875L...6E', 215, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, L6
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...875L...2E" target="_blank">
<i>First M87 Event Horizon Telescope Results. II. Array and Instrumentation</i>
</a>
<br/>
Event Horizon Telescope Collaboration; Akiyama, Kazunori; Alberdi, Antxon; Alef, Walter; Asada, Keiichi; Azulay, Rebecca; Baczko, Anne-Kathrin; Ball, David; Baloković, Mislav; Barrett, John; Bintley, Dan; Blackburn, Lindy; Boland, Wilfred; Bouman, Katherine L.; Bower, Geoffrey C.; Bremer, Michael; Brinkerink, Christiaan D.; Brissenden, Roger; Britzen, Silke; Broderick, Avery E.; <span id="2019ApJ...875L...2E.authors" style="display: none;">Broguiere, Dominique; Bronzwaer, Thomas; Byun, Do-Young; Carlstrom, John E.; Chael, Andrew; Chan, Chi-kwan; Chatterjee, Shami; Chatterjee, Koushik; Chen, Ming-Tang; Chen, Yongjun; Cho, Ilje; Christian, Pierre; Conway, John E.; Cordes, James M.; Crew, Geoffrey B.; Cui, Yuzhu; Davelaar, Jordy; De Laurentis, Mariafelicia; Deane, Roger; Dempsey, Jessica; Desvignes, Gregory; Dexter, Jason; Doeleman, Sheperd S.; Eatough, Ralph P.; Falcke, Heino; Fish, Vincent L.; Fomalont, Ed; Fraga-Encinas, Raquel; Friberg, Per; Fromm, Christian M.; Gómez, José L.; Galison, Peter; Gammie, Charles F.; García, Roberto; Gentaz, Olivier; Georgiev, Boris; Goddi, Ciriaco; Gold, Roman; Gu, Minfeng; Gurwell, Mark; Hada, Kazuhiro; Hecht, Michael H.; Hesper, Ronald; Ho, Luis C.; Ho, Paul; Honma, Mareki; Huang, Chih-Wei L.; Huang, Lei; Hughes, David H.; Ikeda, Shiro; Inoue, Makoto; Issaoun, Sara; James, David J.; Jannuzi, Buell T.; Janssen, Michael; Jeter, Britton; Jiang, Wu; Johnson, Michael D.; Jorstad, Svetlana; Jung, Taehyun; Karami, Mansour; Karuppusamy, Ramesh; Kawashima, Tomohisa; Keating, Garrett K.; Kettenis, Mark; Kim, Jae-Young; Kim, Junhan; Kim, Jongsoo; Kino, Motoki; Koay, Jun Yi; Koch, Patrick M.; Koyama, Shoko; Kramer, Michael; Kramer, Carsten; Krichbaum, Thomas P.; Kuo, Cheng-Yu; Lauer, Tod R.; Lee, Sang-Sung; Li, Yan-Rong; Li, Zhiyuan; Lindqvist, Michael; Liu, Kuo; Liuzzo, Elisabetta; Lo, Wen-Ping; Lobanov, Andrei P.; <strong>Loinard, Laurent</strong>; Lonsdale, Colin; Lu, Ru-Sen; MacDonald, Nicholas R.; Mao, Jirong; Markoff, Sera; Marrone, Daniel P.; Marscher, Alan P.; Martí-Vidal, Iván; Matsushita, Satoki; Matthews, Lynn D.; Medeiros, Lia; Menten, Karl M.; Mizuno, Yosuke; Mizuno, Izumi; Moran, James M.; Moriyama, Kotaro; Moscibrodzka, Monika; Müller, Cornelia; Nagai, Hiroshi; Nagar, Neil M.; Nakamura, Masanori; Narayan, Ramesh; Narayanan, Gopal; Natarajan, Iniyan; Neri, Roberto; Ni, Chunchong; Noutsos, Aristeidis; Okino, Hiroki; Olivares, Héctor; Ortiz-León, Gisela N.; Oyama, Tomoaki; Özel, Feryal; Palumbo, Daniel C. M.; Patel, Nimesh; Pen, Ue-Li; Pesce, Dominic W.; Piétu, Vincent; Plambeck, Richard; PopStefanija, Aleksandar; Porth, Oliver; Prather, Ben; Preciado-López, Jorge A.; Psaltis, Dimitrios; Pu, Hung-Yi; Ramakrishnan, Venkatessh; Rao, Ramprasad; Rawlings, Mark G.; Raymond, Alexander W.; Rezzolla, Luciano; Ripperda, Bart; Roelofs, Freek; Rogers, Alan; Ros, Eduardo; Rose, Mel; Roshanineshat, Arash; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chet; Ryan, Benjamin R.; Rygl, Kazi L. J.; Sánchez, Salvador; Sánchez-Arguelles, David; Sasada, Mahito; Savolainen, Tuomas; Schloerb, F. Peter; Schuster, Karl-Friedrich; Shao, Lijing; Shen, Zhiqiang; Small, Des; Sohn, Bong Won; SooHoo, Jason; Tazaki, Fumie; Tiede, Paul; Tilanus, Remo P. J.; Titus, Michael; Toma, Kenji; Torne, Pablo; Trent, Tyler; Trippe, Sascha; Tsuda, Shuichiro; van Bemmel, Ilse; van Langevelde, Huib Jan; van Rossum, Daniel R.; Wagner, Jan; Wardle, John; Weintroub, Jonathan; Wex, Norbert; Wharton, Robert; Wielgus, Maciek; Wong, George N.; Wu, Qingwen; Young, André; Young, Ken; Younsi, Ziri; Yuan, Feng; Yuan, Ye-Fei; Zensus, J. Anton; Zhao, Guangyao; Zhao, Shan-Shan; Zhu, Ziyan; Algaba, Juan-Carlos; Allardi, Alexander; Amestica, Rodrigo; Bach, Uwe; Beaudoin, Christopher; Benson, Bradford A.; Berthold, Ryan; Blanchard, Jay M.; Blundell, Ray; Bustamente, Sandra; Cappallo, Roger; Castillo-Domínguez, Edgar; Chang, Chih-Cheng; Chang, Shu-Hao; Chang, Song-Chu; Chen, Chung-Chen; Chilson, Ryan; Chuter, Tim C.; Córdova Rosado, Rodrigo; Coulson, Iain M.; Crawford, Thomas M.; Crowley, Joseph; David, John; Derome, Mark; Dexter, Matthew; Dornbusch, Sven; Dudevoir, Kevin A.; Dzib, Sergio A.; Eckert, Chris; Erickson, Neal R.; Everett, Wendeline B.; Faber, Aaron; Farah, Joseph R.; Fath, Vernon; Folkers, Thomas W.; Forbes, David C.; Freund, Robert; Gómez-Ruiz, Arturo I.; Gale, David M.; Gao, Feng; Geertsema, Gertie; Graham, David A.; Greer, Christopher H.; Grosslein, Ronald; Gueth, Frédéric; Halverson, Nils W.; Han, Chih-Chiang; Han, Kuo-Chang; Hao, Jinchi; Hasegawa, Yutaka; Henning, Jason W.; <strong>Hernández-Gómez, Antonio</strong>; Herrero-Illana, Rubén; Heyminck, Stefan; Hirota, Akihiko; Hoge, James; Huang, Yau-De; Impellizzeri, C. M. Violette; Jiang, Homin; Kamble, Atish; Keisler, Ryan; Kimura, Kimihiro; Kono, Yusuke; Kubo, Derek; Kuroda, John; Lacasse, Richard; Laing, Robert A.; Leitch, Erik M.; Li, Chao-Te; Lin, Lupin C. -C.; Liu, Ching-Tang; Liu, Kuan-Yu; Lu, Li-Ming; Marson, Ralph G.; Martin-Cocher, Pierre L.; Massingill, Kyle D.; Matulonis, Callie; McColl, Martin P.; McWhirter, Stephen R.; Messias, Hugo; Meyer-Zhao, Zheng; Michalik, Daniel; Montaña, Alfredo; Montgomerie, William; Mora-Klein, Matias; Muders, Dirk; Nadolski, Andrew; Navarro, Santiago; Nguyen, Chi H.; Nishioka, Hiroaki; Norton, Timothy; Nystrom, George; Ogawa, Hideo; Oshiro, Peter; Oyama, Tomoaki; Padin, Stephen; Parsons, Harriet; Paine, Scott N.; Peñalver, Juan; Phillips, Neil M.; Poirier, Michael; Pradel, Nicolas; Primiani, Rurik A.; Raffin, Philippe A.; Rahlin, Alexandra S.; Reiland, George; Risacher, Christopher; Ruiz, Ignacio; Sáez-Madaín, Alejandro F.; Sassella, Remi; Schellart, Pim; Shaw, Paul; Silva, Kevin M.; Shiokawa, Hotaka; Smith, David R.; Snow, William; Souccar, Kamal; Sousa, Don; Sridharan, T. K.; Srinivasan, Ranjani; Stahm, William; Stark, Antony A.; Story, Kyle; Timmer, Sjoerd T.; Vertatschitsch, Laura; Walther, Craig; Wei, Ta-Shun; Whitehorn, Nathan; Whitney, Alan R.; Woody, David P.; Wouterloot, Jan G. A.; Wright, Melvin; Yamaguchi, Paul; Yu, Chen-Yu; Zeballos, Milagros; Ziurys, Lucy</span><span id="2019ApJ...875L...2E.button"></span>
<script>
toggleAuthors('2019ApJ...875L...2E', 342, 0);
</script>

<br/>
2019/04, The Astrophysical Journal, 875, L2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...623A..77S" target="_blank">
<i>Discovery of a sub-Keplerian disk with jet around a 20 M<SUB>⊙</SUB> young star. ALMA observations of G023.01-00.41</i>
</a>
<br/>
Sanna, A.; Kölligan, A.; Moscadelli, L.; Kuiper, R.; Cesaroni, R.; Pillai, T.; Menten, K. M.; Zhang, Q.; <strong>Caratti o Garatti, A.</strong>; Goddi, C.; Leurini, S.; <strong>Carrasco-González, C.</strong>
<br/>
2019/03, Astronomy and Astrophysics, 623, A77
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...623L...8B" target="_blank">
<i>Unveiling a cluster of protostellar disks around the massive protostar GGD 27 MM1</i>
</a>
<br/>
Busquet, G.; Girart, J. M.; Estalella, R.; Fernández-López, M.; <strong>Galván-Madrid, R.</strong>; Anglada, G.; <strong>Carrasco-González, C.</strong>; Añez-López, N.; Curiel, S.; Osorio, M.; <strong>Rodríguez, L. F.</strong>; Torrelles, J. M.
<br/>
2019/03, Astronomy and Astrophysics, 623, L8
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...623L...3S" target="_blank">
<i>Protostellar Outflows at the EarliesT Stages (POETS). II. A possible radio synchrotron jet associated with the EGO G035.02+0.35</i>
</a>
<br/>
Sanna, A.; Moscadelli, L.; Goddi, C.; Beltrán, M.; Brogan, C. L.; Caratti o Garatti, A.; <strong>Carrasco-González, C.</strong>; Hunter, T. R.; Massi, F.; Padovani, M.
<br/>
2019/03, Astronomy and Astrophysics, 623, L3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.483.3773S" target="_blank">
<i>Measuring the expansion and age of the nova shell IPHASX J210204.7 + 471015</i>
</a>
<br/>
Santamaría, E.; Guerrero, M. A.; Ramos-Larios, G.; Sabin, L.; Vázquez, R.; Gómez-Muñoz, M. A.; <strong>Toalá, J. A.</strong>
<br/>
2019/03, Monthly Notices of the Royal Astronomical Society, 483, 3773
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.483.4525I" target="_blank">
<i>Optical integral field spectroscopy observations applied to simulated galaxies: testing the fossil record method</i>
</a>
<br/>
Ibarra-Medel, Héctor J.; Avila-Reese, Vladimir; Sánchez, Sebastián F.; <strong>González-Samaniego, Alejandro</strong>; Rodríguez-Puebla, Aldo
<br/>
2019/03, Monthly Notices of the Royal Astronomical Society, 483, 4525
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.483.3278C" target="_blank">
<i>Cm-wavelength observations of MWC 758: resolved dust trapping in a vortex</i>
</a>
<br/>
Casassus, Simon; Marino, Sebastián; Lyra, Wladimir; Baruteau, Clément; Vidal, Matías; Wootten, Alwyn; Pérez, Sebastián; Alarcon, Felipe; Barraza, Marcelo; Cárcamo, Miguel; Dong, Ruobing; <strong>Sierra, Anibal</strong>; Zhu, Zhaohuan; Ricci, Luca; Christiaens, Valentin; Cieza, Lucas
<br/>
2019/03, Monthly Notices of the Royal Astronomical Society, 483, 3278
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...872..176Z" target="_blank">
<i>An Asymmetric Keplerian Disk Surrounding the O-type Protostar IRAS 16547-4247</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Garay, Guido; <strong>Palau, Aina</strong>; <strong>Rodríguez, Luis F.</strong>; Fernández-López, Manuel; Estalella, Robert; Guzmán, Andres
<br/>
2019/02, The Astrophysical Journal, 872, 176
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...622A.176C" target="_blank">
<i>J-PLUS: The Javalambre Photometric Local Universe Survey</i>
</a>
<br/>
Cenarro, A. J.; Moles, M.; Cristóbal-Hornillos, D.; Marín-Franch, A.; Ederoclite, A.; Varela, J.; López-Sanjuan, C.; Hernández-Monteagudo, C.; Angulo, R. E.; Vázquez Ramió, H.; Viironen, K.; Bonoli, S.; Orsi, A. A.; Hurier, G.; San Roman, I.; Greisel, N.; Vilella-Rojo, G.; Díaz-García, L. A.; Logroño-García, R.; Gurung-López, S.; <span id="2019A&A...622A.176C.authors" style="display: none;">Spinoso, D.; Izquierdo-Villalba, D.; Aguerri, J. A. L.; Allende Prieto, C.; Bonatto, C.; Carvano, J. M.; Chies-Santos, A. L.; Daflon, S.; Dupke, R. A.; Falcón-Barroso, J.; Gonçalves, D. R.; Jiménez-Teja, Y.; Molino, A.; Placco, V. M.; Solano, E.; Whitten, D. D.; Abril, J.; Antón, J. L.; Bello, R.; Bielsa de Toledo, S.; Castillo-Ramírez, J.; Chueca, S.; Civera, T.; Díaz-Martín, M. C.; Domínguez-Martínez, M.; Garzarán-Calderaro, J.; Hernández-Fuertes, J.; Iglesias-Marzoa, R.; Iñiguez, C.; Jiménez Ruiz, J. M.; Kruuse, K.; Lamadrid, J. L.; Lasso-Cabrera, N.; López-Alegre, G.; López-Sainz, A.; Maícas, N.; Moreno-Signes, A.; Muniesa, D. J.; Rodríguez-Llano, S.; Rueda-Teruel, F.; Rueda-Teruel, S.; Soriano-Laguía, I.; Tilve, V.; Valdivielso, L.; Yanes-Díaz, A.; Alcaniz, J. S.; Mendes de Oliveira, C.; Sodré, L.; Coelho, P.; Lopes de Oliveira, R.; Tamm, A.; Xavier, H. S.; Abramo, L. R.; Akras, S.; Alfaro, E. J.; Alvarez-Candal, A.; Ascaso, B.; Beasley, M. A.; Beers, T. C.; Borges Fernandes, M.; <strong>Bruzual, G. R.</strong>; Buzzo, M. L.; Carrasco, J. M.; Cepa, J.; Cortesi, A.; Costa-Duarte, M. V.; De Prá, M.; Favole, G.; Galarza, A.; Galbany, L.; Garcia, K.; González Delgado, R. M.; González-Serrano, J. I.; Gutiérrez-Soto, L. A.; Hernandez-Jimenez, J. A.; Kanaan, A.; Kuncarayakti, H.; Landim, R. C. G.; Laur, J.; Licandro, J.; Lima Neto, G. B.; Lyman, J. D.; Maíz Apellániz, J.; Miralda-Escudé, J.; Morate, D.; Nogueira-Cavalcante, J. P.; Novais, P. M.; Oncins, M.; Oteo, I.; Overzier, R. A.; Pereira, C. B.; Rebassa-Mansergas, A.; Reis, R. R. R.; Roig, F.; Sako, M.; Salvador-Rusiñol, N.; Sampedro, L.; Sánchez-Blázquez, P.; Santos, W. A.; Schmidtobreick, L.; Siffert, B. B.; Telles, E.; Vilchez, J. M.</span><span id="2019A&A...622A.176C.button"></span>
<script>
toggleAuthors('2019A&A...622A.176C', 123, 0);
</script>

<br/>
2019/02, Astronomy and Astrophysics, 622, A176
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...872...69P" target="_blank">
<i>AGN Torus Detectability at Submillimeter Wavelengths: What to Expect from ALMA Continuum Data</i>
</a>
<br/>
<strong>Pasetto, Alice</strong>; <strong>González-Martín, Omaira</strong>; <strong>Esparza-Arredondo, Donaji</strong>; <strong>Osorio-Clavijo, Natalia</strong>; <strong>Victoria-Ceballos, César Ivan</strong>; <strong>Martínez-Paredes, Mariela</strong>
<br/>
2019/02, The Astrophysical Journal, 872, 69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...622A.132M" target="_blank">
<i>Dust emission profiles of DustPedia galaxies</i>
</a>
<br/>
Mosenkov, A. V.; Baes, M.; Bianchi, S.; Casasola, V.; Cassarà, L. P.; Clark, C. J. R.; Davies, J.; De Looze, I.; De Vis, P.; <strong>Fritz, J.</strong>; Galametz, M.; Galliano, F.; Jones, A. P.; Lianou, S.; Madden, S. C.; Nersesian, A.; Smith, M. W. L.; Trčka, A.; Verstocken, S.; Viaene, S.; <span id="2019A&A...622A.132M.authors" style="display: none;">Vika, M.; Xilouris, E.</span><span id="2019A&A...622A.132M.button"></span>
<script>
toggleAuthors('2019A&A...622A.132M', 22, 0);
</script>

<br/>
2019/02, Astronomy and Astrophysics, 622, A132
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...871..172R" target="_blank">
<i>Flat-spectrum Radio Continuum Emission Associated with ɛ Eridani</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Lizano, Susana</strong>; <strong>Loinard, Laurent</strong>; Chávez-Dagostino, Miguel; Bastian, Timothy S.; Beasley, Anthony J.
<br/>
2019/02, The Astrophysical Journal, 871, 172
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...871..185L" target="_blank">
<i>Investigating Fragmentation of Gas Structures in OB Cluster-forming Molecular Clump G33.92+0.11 with 1000 au Resolution Observations of ALMA</i>
</a>
<br/>
Liu, Hauyu Baobab; Chen, Huei-Ru Vivien; Román-Zúñiga, Carlos G.; <strong>Galván-Madrid, Roberto</strong>; Ginsburg, Adam; Ho, Paul T. P.; Minh, Young Chol; Jiménez-Serra, Izaskun; Testi, Leonardo; Zhang, Qizhou
<br/>
2019/02, The Astrophysical Journal, 871, 185
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...871..190M" target="_blank">
<i>Quantifying Star Formation Activity in the Inner 1 kpc of Local MIR Bright QSOs</i>
</a>
<br/>
<strong>Martínez-Paredes, M.</strong>; Aretxaga, I.; <strong>González-Martín, O.</strong>; Alonso-Herrero, A.; Levenson, N. A.; Ramos Almeida, C.; López-Rodríguez, E.
<br/>
2019/02, The Astrophysical Journal, 871, 190
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJS..240...23A" target="_blank">
<i>The Fifteenth Data Release of the Sloan Digital Sky Surveys: First Release of MaNGA-derived Quantities, Data Visualization Tools, and Stellar Library</i>
</a>
<br/>
Aguado, D. S.; Ahumada, Romina; Almeida, Andrés; Anderson, Scott F.; Andrews, Brett H.; Anguiano, Borja; Aquino Ortíz, Erik; Aragón-Salamanca, Alfonso; Argudo-Fernández, Maria; Aubert, Marie; Avila-Reese, Vladimir; Badenes, Carles; Barboza Rembold, Sandro; Barger, Kat; Barrera-Ballesteros, Jorge; Bates, Dominic; Bautista, Julian; Beaton, Rachael L.; Beers, Timothy C.; Belfiore, Francesco; <span id="2019ApJS..240...23A.authors" style="display: none;">Bernardi, Mariangela; Bershady, Matthew; Beutler, Florian; Bird, Jonathan; Bizyaev, Dmitry; Blanc, Guillermo A.; Blanton, Michael R.; Blomqvist, Michael; Bolton, Adam S.; Boquien, Médéric; Borissova, Jura; Bovy, Jo; Brandt, William Nielsen; Brinkmann, Jonathan; Brownstein, Joel R.; Bundy, Kevin; Burgasser, Adam; Byler, Nell; Cano Diaz, Mariana; Cappellari, Michele; Carrera, Ricardo; <strong>Cervantes Sodi, Bernardo</strong>; Chen, Yanping; Cherinka, Brian; Choi, Peter Doohyun; Chung, Haeun; Coffey, Damien; Comerford, Julia M.; Comparat, Johan; Covey, Kevin; da Silva Ilha, Gabriele; da Costa, Luiz; Dai, Yu Sophia; Damke, Guillermo; Darling, Jeremy; Davies, Roger; Dawson, Kyle; de Sainte Agathe, Victoria; Deconto Machado, Alice; Del Moro, Agnese; De Lee, Nathan; Diamond-Stanic, Aleksandar M.; Domínguez Sánchez, Helena; Donor, John; Drory, Niv; du Mas des Bourboux, Hélion; Duckworth, Chris; Dwelly, Tom; Ebelke, Garrett; Emsellem, Eric; Escoffier, Stephanie; Fernández-Trincado, José G.; Feuillet, Diane; Fischer, Johanna-Laina; Fleming, Scott W.; Fraser-McKelvie, Amelia; Freischlad, Gordon; Frinchaboy, Peter M.; Fu, Hai; Galbany, Lluís; Garcia-Dias, Rafael; García-Hernández, D. A.; Garma Oehmichen, Luis Alberto; Geimba Maia, Marcio Antonio; Gil-Marín, Héctor; Grabowski, Kathleen; Gu, Meng; Guo, Hong; Ha, Jaewon; Harrington, Emily; Hasselquist, Sten; Hayes, Christian R.; Hearty, Fred; Hernandez Toledo, Hector; Hicks, Harry; Hogg, David W.; Holley-Bockelmann, Kelly; Holtzman, Jon A.; Hsieh, Bau-Ching; Hunt, Jason A. S.; Hwang, Ho Seong; Ibarra-Medel, Héctor J.; Jimenez Angel, Camilo Eduardo; Johnson, Jennifer; Jones, Amy; Jönsson, Henrik; Kinemuchi, Karen; Kollmeier, Juna; Krawczyk, Coleman; Kreckel, Kathryn; Kruk, Sandor; Lacerna, Ivan; Lan, Ting-Wen; Lane, Richard R.; Law, David R.; Lee, Young-Bae; Li, Cheng; Lian, Jianhui; Lin, Lihwai; Lin, Yen-Ting; Lintott, Chris; Long, Dan; Longa-Peña, Penélope; Mackereth, J. Ted; de la Macorra, Axel; Majewski, Steven R.; Malanushenko, Olena; Manchado, Arturo; Maraston, Claudia; Mariappan, Vivek; Marinelli, Mariarosa; Marques-Chaves, Rui; Masseron, Thomas; Masters, Karen L.; McDermid, Richard M.; Medina Peña, Nicolás; Meneses-Goytia, Sofia; Merloni, Andrea; Merrifield, Michael; Meszaros, Szabolcs; Minniti, Dante; Minsley, Rebecca; Muna, Demitri; Myers, Adam D.; Nair, Preethi; Correa do Nascimento, Janaina; Newman, Jeffrey A.; Nitschelm, Christian; Olmstead, Matthew D.; Oravetz, Audrey; Oravetz, Daniel; Ortega Minakata, René A.; Pace, Zach; Padilla, Nelson; Palicio, Pedro A.; Pan, Kaike; Pan, Hsi-An; Parikh, Taniya; Parker, James, III; Peirani, Sebastien; Penny, Samantha; Percival, Will J.; Perez-Fournon, Ismael; Peterken, Thomas; Pinsonneault, Marc H.; Prakash, Abhishek; Raddick, M. Jordan; Raichoor, Anand; Riffel, Rogemar A.; Riffel, Rogério; Rix, Hans-Walter; Robin, Annie C.; Roman-Lopes, Alexandre; Rose, Benjamin; Ross, Ashley J.; Rossi, Graziano; Rowlands, Kate; Rubin, Kate H. R.; Sánchez, Sebastián F.; Sánchez-Gallego, José R.; Sayres, Conor; Schaefer, Adam; Schiavon, Ricardo P.; Schimoia, Jaderson S.; Schlafly, Edward; Schlegel, David; Schneider, Donald P.; Schultheis, Mathias; Seo, Hee-Jong; Shamsi, Shoaib J.; Shao, Zhengyi; Shen, Shiyin; Shetty, Shravan; Simonian, Gregory; Smethurst, Rebecca J.; Sobeck, Jennifer; Souter, Barbara J.; Spindler, Ashley; Stark, David V.; Stassun, Keivan G.; Steinmetz, Matthias; Storchi-Bergmann, Thaisa; Stringfellow, Guy S.; Suárez, Genaro; Sun, Jing; Taghizadeh-Popp, Manuchehr; Talbot, Michael S.; Tayar, Jamie; Thakar, Aniruddha R.; Thomas, Daniel; Tissera, Patricia; Tojeiro, Rita; Troup, Nicholas W.; Unda-Sanzana, Eduardo; Valenzuela, Octavio; Vargas-Magaña, Mariana; Vázquez-Mata, José Antonio; Wake, David; Weaver, Benjamin Alan; Weijmans, Anne-Marie; Westfall, Kyle B.; Wild, Vivienne; Wilson, John; Woods, Emily; Yan, Renbin; Yang, Meng; Zamora, Olga; Zasowski, Gail; Zhang, Kai; Zheng, Zheng; Zheng, Zheng; Zhu, Guangtun; Zinn, Joel C.; Zou, Hu</span><span id="2019ApJS..240...23A.button"></span>
<script>
toggleAuthors('2019ApJS..240...23A', 234, 0);
</script>

<br/>
2019/02, The Astrophysical Journal Supplement Series, 240, 23
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.483.2382W" target="_blank">
<i>Simultaneous analysis of SDSS spectra and GALEX photometry with STARLIGHT: method and early results</i>
</a>
<br/>
Werle, A.; Cid Fernandes, R.; Vale Asari, N.; <strong>Bruzual, G.</strong>; Charlot, S.; Gonzalez Delgado, R.; Herpich, F. R.
<br/>
2019/02, Monthly Notices of the Royal Astronomical Society, 483, 2382
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.483.2014H" target="_blank">
<i>Modelling the abundance structure of isocyanic acid (HNCO) towards the low-mass solar type protostar IRAS 16293-2422</i>
</a>
<br/>
<strong>Hernández-Gómez, Antonio</strong>; Sahnoun, Emna; Caux, Emmanuel; Wiesenfeld, Laurent; <strong>Loinard, Laurent</strong>; Bottinelli, Sandrine; Hammami, Kamel; Menten, Karl M.
<br/>
2019/02, Monthly Notices of the Royal Astronomical Society, 483, 2014
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.483..370B" target="_blank">
<i>The integrated properties of the CALIFA galaxies: model-derived galaxy parameters and quenching of star formation</i>
</a>
<br/>
<strong>Bitsakis, T.</strong>; Sánchez, S. F.; Ciesla, L.; Bonfini, P.; Charmandaris, V.; <strong>Cervantes Sodi, B.</strong>; Maragkoudakis, A.; Diaz-Santos, T.; Zezas, A.
<br/>
2019/02, Monthly Notices of the Royal Astronomical Society, 483, 370
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.482.4687R" target="_blank">
<i>Particle acceleration in the Herbig-Haro objects HH 80 and HH 81</i>
</a>
<br/>
Rodríguez-Kamenetzky, Adriana; <strong>Carrasco-González, Carlos</strong>; <strong>González-Martín, Omaira</strong>; Araudo, Anabella T.; <strong>Rodríguez, Luis Felipe</strong>; Vig, Sarita; Hofner, Peter
<br/>
2019/02, Monthly Notices of the Royal Astronomical Society, 482, 4687
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.482.4466P" target="_blank">
<i>GASP XIII. Star formation in gas outside galaxies</i>
</a>
<br/>
Poggianti, Bianca M.; Gullieuszik, Marco; Tonnesen, Stephanie; Moretti, Alessia; Vulcani, Benedetta; Radovich, Mario; Jaffé, Yara; <strong>Fritz, Jacopo</strong>; Bettoni, Daniela; Franchetto, Andrea; Fasano, Giovanni; Bellhouse, Callum; Omizzolo, Alessandro
<br/>
2019/02, Monthly Notices of the Royal Astronomical Society, 482, 4466
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...621A.140J" target="_blank">
<i>Extreme fragmentation and complex kinematics at the center of the L1287 cloud</i>
</a>
<br/>
Juárez, Carmen; Liu, Hauyu Baobab; Girart, Josep M.; <strong>Palau, Aina</strong>; Busquet, Gemma; <strong>Galván-Madrid, Roberto</strong>; Hirano, Naomi; Lin, Yuxin
<br/>
2019/01, Astronomy and Astrophysics, 621, A140
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019A&A...621A.119B" target="_blank">
<i>Micro-arcsecond structure of Sagittarius A<SUP>∗</SUP> revealed by high-sensitivity 86 GHz VLBI observations</i>
</a>
<br/>
Brinkerink, Christiaan D.; Müller, Cornelia; Falcke, Heino D.; Issaoun, Sara; Akiyama, Kazunori; Bower, Geoffrey C.; Krichbaum, Thomas P.; Deller, Adam T.; Castillo, Edgar; Doeleman, Sheperd S.; Fraga-Encinas, Raquel; Goddi, Ciriaco; <strong>Hernández-Gómez, Antonio</strong>; Hughes, David H.; Kramer, Michael; Léon-Tavares, Jonathan; <strong>Loinard, Laurent</strong>; Montaña, Alfredo; Mościbrodzka, Monika; Ortiz-León, Gisela N.; <span id="2019A&A...621A.119B.authors" style="display: none;">Sanchez-Arguelles, David; Tilanus, Remo P. J.; Wilson, Grant W.; Zensus, Anton</span><span id="2019A&A...621A.119B.button"></span>
<script>
toggleAuthors('2019A&A...621A.119B', 24, 0);
</script>

<br/>
2019/01, Astronomy and Astrophysics, 621, A119
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019ApJ...871...30I" target="_blank">
<i>The Size, Shape, and Scattering of Sagittarius A* at 86 GHz: First VLBI with ALMA</i>
</a>
<br/>
Issaoun, S.; Johnson, M. D.; Blackburn, L.; Brinkerink, C. D.; Mościbrodzka, M.; Chael, A.; Goddi, C.; Martí-Vidal, I.; Wagner, J.; Doeleman, S. S.; Falcke, H.; Krichbaum, T. P.; Akiyama, K.; Bach, U.; Bouman, K. L.; Bower, G. C.; Broderick, A.; Cho, I.; Crew, G.; Dexter, J.; <span id="2019ApJ...871...30I.authors" style="display: none;">Fish, V.; Gold, R.; Gómez, J. L.; Hada, K.; <strong>Hernández-Gómez, A.</strong>; Janßen, M.; Kino, M.; Kramer, M.; <strong>Loinard, L.</strong>; Lu, R. -S.; Markoff, S.; Marrone, D. P.; Matthews, L. D.; Moran, J. M.; Müller, C.; Roelofs, F.; Ros, E.; Rottmann, H.; Sanchez, S.; Tilanus, R. P. J.; de Vicente, P.; Wielgus, M.; Zensus, J. A.; Zhao, G. -Y.</span><span id="2019ApJ...871...30I.button"></span>
<script>
toggleAuthors('2019ApJ...871...30I', 44, 0);
</script>

<br/>
2019/01, The Astrophysical Journal, 871, 30
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019AJ....157...20O" target="_blank">
<i>SMA Line Observations of the CH<SUB>3</SUB>OH-maser Outflow in DR21(OH)</i>
</a>
<br/>
Orozco-Aguilera, M. T.; <strong>Hernández-Gómez, A.</strong>; <strong>Zapata, Luis A.</strong>
<br/>
2019/01, The Astronomical Journal, 157, 20
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.482.3454J" target="_blank">
<i>Erratum: GASP. IX. Jellyfish galaxies in phase-space: an orbital study of intense ram-pressure stripping in clusters</i>
</a>
<br/>
Jaffé, Yara L.; Poggianti, Bianca M.; Moretti, Alessia; Gullieuszik, Marco; Smith, Rory; Vulcani, Benedetta; Fasano, Giovanni; <strong>Fritz, Jacopo</strong>; Tonnesen, Stephanie; Bettoni, Daniela; Hau, George; Biviano, Andrea; Bellhouse, Callum; McGee, Sean
<br/>
2019/01, Monthly Notices of the Royal Astronomical Society, 482, 3454
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2019MNRAS.482..881P" target="_blank">
<i>The strong correlation between post-starburst fraction and environment</i>
</a>
<br/>
Paccagnella, A.; Vulcani, B.; Poggianti, B. M.; Moretti, A.; <strong>Fritz, J.</strong>; Gullieuszik, M.; Fasano, G.
<br/>
2019/01, Monthly Notices of the Royal Astronomical Society, 482, 881
</p></li>
</ol>
</div>
<div class="tab-pane" id="2018">
<h4 style="text-indent: 10px;">Publications 2018</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ASPC..517..411L" target="_blank">
<i>A Six-Dimensional Tomographic View of Galactic Star-Formation</i>
</a>
<br/>
<strong>Loinard, L.</strong>; Reid, M. J.
<br/>
2018/12, Science with a Next Generation Very Large Array, 517, 411
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ASPC..517..357H" target="_blank">
<i>Magnetic Fields in Forming Stars with the ngVLA</i>
</a>
<br/>
Hull, C. L. H.; <strong>Carrasco-González, C.</strong>; Williams, P. K. G.; Girart, J. M.; Robishaw, T.; <strong>Galván-Madrid, R.</strong>; Bourke, T.
<br/>
2018/12, Science with a Next Generation Very Large Array, 517, 357
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ASPC..517..309G" target="_blank">
<i>Resolving the Structure and Kinematics of the Youngest HII Regions and Radio Jets from Young Stellar Objects</i>
</a>
<br/>
<strong>Galván-Madrid, R.</strong>; Beltrán, M.; Ginsburg, A.; <strong>Carrasco-González, C.</strong>; Liu, H. B.; <strong>Rodríguez, L. F.</strong>; <strong>Kurtz, S.</strong>
<br/>
2018/12, Science with a Next Generation Very Large Array, 517, 309
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ASPC..517..137A" target="_blank">
<i>Resolved Substructures in Protoplanetary Disks with the ngVLA</i>
</a>
<br/>
Andrews, S. M.; Wilner, D. J.; Macías, E.; <strong>Carrasco-González, C.</strong>; Isella, A.
<br/>
2018/12, Science with a Next Generation Very Large Array, 517, 137
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...869L..33O" target="_blank">
<i>Gaia-DR2 Confirms VLBA Parallaxes in Ophiuchus, Serpens, and Aquila</i>
</a>
<br/>
Ortiz-León, Gisela N.; <strong>Loinard, Laurent</strong>; Dzib, Sergio A.; Kounkel, Marina; Galli, Phillip A. B.; Tobin, John J.; Evans, Neal J., II; Hartmann, Lee; <strong>Rodríguez, Luis F.</strong>; Briceño, Cesar; Torres, Rosa M.; Mioduszewski, Amy J.
<br/>
2018/12, The Astrophysical Journal, 869, L33
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...869L..11T" target="_blank">
<i>On the Apparent Absence of Wolf-Rayet+Neutron Star Systems: The Curious Case of WR124</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Oskinova, L. M.; Hamann, W. -R.; Ignace, R.; Sander, A. A. C.; Shenar, T.; Todt, H.; Chu, Y. -H.; Guerrero, M. A.; Hainich, R.; Torrejón, J. M.
<br/>
2018/12, The Astrophysical Journal, 869, L11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...620A.118N" target="_blank">
<i>Highly accreting quasars: The SDSS low-redshift catalog</i>
</a>
<br/>
Negrete, C. A.; Dultzin, D.; Marziani, P.; <strong>Esparza, D.</strong>; Sulentic, J. W.; del Olmo, A.; Martínez-Aldama, M. L.; <strong>García López, A.</strong>; D'Onofrio, M.; Bon, N.; Bon, E.
<br/>
2018/12, Astronomy and Astrophysics, 620, A118
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.481.3456C" target="_blank">
<i>Morphology rather than environment drives the SFR-mass relation in the local universe</i>
</a>
<br/>
Calvi, R.; Vulcani, B.; Poggianti, B. M.; Moretti, A.; <strong>Fritz, J.</strong>; Fasano, G.
<br/>
2018/12, Monthly Notices of the Royal Astronomical Society, 481, 3456
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...620A..31M" target="_blank">
<i>Chasing discs around O-type (proto)stars. ALMA evidence for an SiO disc and disc wind from G17.64+0.16</i>
</a>
<br/>
Maud, L. T.; Cesaroni, R.; Kumar, M. S. N.; van der Tak, F. F. S.; Allen, V.; Hoare, M. G.; Klaassen, P. D.; Harsono, D.; Hogerheijde, M. R.; Sánchez-Monge, Á.; Schilke, P.; Ahmadi, A.; Beltrán, M. T.; Beuther, H.; Csengeri, T.; Etoka, S.; Fuller, G.; <strong>Galván-Madrid, R.</strong>; Goddi, C.; Henning, Th.; <span id="2018A&A...620A..31M.authors" style="display: none;">Johnston, K. G.; Kuiper, R.; Lumsden, S.; Moscadelli, L.; Mottram, J. C.; Peters, T.; Rivilla, V. M.; Testi, L.; Vig, S.; de Wit, W. J.; Zinnecker, H.</span><span id="2018A&A...620A..31M.button"></span>
<script>
toggleAuthors('2018A&A...620A..31M', 31, 0);
</script>

<br/>
2018/11, Astronomy and Astrophysics, 620, A31
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...868...39G" target="_blank">
<i>On the Effects of Self-obscuration in the (Sub)Millimeter Spectral Indices and the Appearance of Protostellar Disks</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; Liu, Hauyu Baobab; <strong>Izquierdo, Andrés F.</strong>; Miotello, Anna; Zhao, Bo; <strong>Carrasco-González, Carlos</strong>; <strong>Lizano, Susana</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2018/11, The Astrophysical Journal, 868, 39
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...868...50K" target="_blank">
<i>The Role of Gravity in Producing Power-law Mass Functions</i>
</a>
<br/>
Kuznetsova, Aleksandra; Hartmann, Lee; Heitsch, Fabian; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2018/11, The Astrophysical Journal, 868, 50
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...867..151D" target="_blank">
<i>Distances and Kinematics of Gould Belt Star-forming Regions with Gaia DR2 Results</i>
</a>
<br/>
Dzib, Sergio A.; <strong>Loinard, Laurent</strong>; Ortiz-León, Gisela N.; <strong>Rodríguez, Luis F.</strong>; Galli, Phillip A. B.
<br/>
2018/11, The Astrophysical Journal, 867, 151
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...867..116P" target="_blank">
<i>A Transitional Disk around an Intermediate-mass Star in the Sparse Population of the Orion OB1 Association</i>
</a>
<br/>
Pérez-Blanco, Alice; <strong>Maucó, Karina</strong>; Hernández, Jesús; Calvet, Nuria; Espaillat, Catherine; McClure, Melissa; Briceño, Cesar; Robinson, Connor; Feldman, Daniel; Villarreal, Luis; <strong>D'Alessio, Paola</strong>
<br/>
2018/11, The Astrophysical Journal, 867, 116
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...619A...2D" target="_blank">
<i>Planets around evolved intermediate-mass stars. II. Are there really planets around IC 4651 No. 9122, NGC 2423 No. 3, and NGC 4349 No. 127?</i>
</a>
<br/>
Delgado Mena, E.; Lovis, C.; Santos, N. C.; Gomes da Silva, J.; Mortier, A.; <strong>Tsantaki, M.</strong>; Sousa, S. G.; Figueira, P.; Cunha, M. S.; Campante, T. L.; Adibekyan, V.; Faria, J. P.; Montalto, M.
<br/>
2018/11, Astronomy and Astrophysics, 619, A2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...867L..11L" target="_blank">
<i>Early Science with the Large Millimeter Telescope: An Energy-driven Wind Revealed by Massive Molecular and Fast X-Ray Outflows in the Seyfert Galaxy IRAS 17020+4544</i>
</a>
<br/>
Longinotti, A. L.; Vega, O.; Krongold, Y.; Aretxaga, I.; Yun, M.; Chavushyan, V.; Feruglio, C.; Gómez-Ruiz, A.; Montaña, A.; León-Tavares, J.; Olguín-Iglesias, A.; Giroletti, M.; Guainazzi, M.; Kotilainen, J.; Panessa, F.; <strong>Zapata, L. A.</strong>; Cruz-Gonzalez, I.; Patiño-Álvarez, V. M.; Rosa-Gonzalez, D.; Carramiñana, A.; <span id="2018ApJ...867L..11L.authors" style="display: none;">Carrasco, L.; Costantini, E.; Dultzin, D.; Guichard, J.; Puerari, I.; Santos-Lleo, M.</span><span id="2018ApJ...867L..11L.button"></span>
<script>
toggleAuthors('2018ApJ...867L..11L', 26, 0);
</script>

<br/>
2018/11, The Astrophysical Journal, 867, L11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018AJ....156..239Z" target="_blank">
<i>ALMA Reveals a Collision between Protostellar Outflows in BHR 71</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Fernández-López, Manuel; <strong>Rodríguez, Luis F.</strong>; Garay, Guido; Takahashi, Satoko; Lee, Chin-Fei; <strong>Hernández-Gómez, Antonio</strong>
<br/>
2018/11, The Astronomical Journal, 156, 239
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...620A..15G" target="_blank">
<i>The XXL Survey: XXX. Characterisation of the XLSSsC N01 supercluster and analysis of the galaxy stellar populations</i>
</a>
<br/>
Guglielmo, V.; Poggianti, B. M.; Vulcani, B.; Moretti, A.; Fritz, J.; Gastaldello, F.; Adami, C.; Caretta, C. A.; Willis, J.; Koulouridis, E.; Ramos Ceja, M. E.; Giles, P.; Baldry, I.; Birkinshaw, M.; Bongiorno, A.; Brown, M.; Chiappetti, L.; Driver, S.; Elyiv, A.; Evrard, A.; <span id="2018A&A...620A..15G.authors" style="display: none;">Grootes, M.; Guennou, L.; Hopkins, A.; Horellou, C.; Iovino, A.; Maurogordato, S.; Owers, M.; Pacaud, F.; Paltani, S.; Pierre, M.; Plionis, M.; Ponman, T.; Robotham, A.; Sadibekova, T.; Smolčić, V.; Tuffs, R.; Vignali, C.</span><span id="2018A&A...620A..15G.button"></span>
<script>
toggleAuthors('2018A&A...620A..15G', 37, 0);
</script>

<br/>
2018/11, Astronomy and Astrophysics, 620, A15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018PASP..130k7001R" target="_blank">
<i>Nonthermal Emission and Particle Acceleration in Protostellar Jets</i>
</a>
<br/>
<strong>Rodríguez Kamenetzky, Adriana</strong>
<br/>
2018/11, Publications of the Astronomical Society of the Pacific, 130, 117001
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.5092G" target="_blank">
<i>Analytical and numerical models of P Cygni's nebula</i>
</a>
<br/>
<strong>González, R. F.</strong>; Cantó, J.; Raga, A. C.
<br/>
2018/11, Monthly Notices of the Royal Astronomical Society, 480, 5092
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.5495Z" target="_blank">
<i>On estimating angular momenta of infalling protostellar cores from observations</i>
</a>
<br/>
Zhang, Shangjia; Hartmann, Lee; <strong>Zamora-Avilés, Manuel</strong>; Kuznetsova, Aleksandra
<br/>
2018/11, Monthly Notices of the Royal Astronomical Society, 480, 5495
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.3152V" target="_blank">
<i>GASP - XII. The variety of physical processes occurring in a single galaxy group in formation</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Jaffé, Yara L.; Moretti, Alessia; <strong>Fritz, Jacopo</strong>; Gullieuszik, Marco; Bettoni, Daniela; Fasano, Giovanni; Tonnesen, Stephanie; McGee, Sean
<br/>
2018/11, Monthly Notices of the Royal Astronomical Society, 480, 3152
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.2939G" target="_blank">
<i>The magnetic field structure in molecular cloud filaments</i>
</a>
<br/>
<strong>Gómez, Gilberto C.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Zamora-Avilés, Manuel</strong>
<br/>
2018/11, Monthly Notices of the Royal Astronomical Society, 480, 2939
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...618A.128C" target="_blank">
<i>Spectroscopic characterization of the protocluster of galaxies around 7C 1756+6520 at z   1.4</i>
</a>
<br/>
Casasola, V.; Magrini, L.; Combes, F.; Sani, E.; <strong>Fritz, J.</strong>; Rodighiero, G.; Poggianti, B.; Bianchi, S.; Liuzzo, E.
<br/>
2018/10, Astronomy and Astrophysics, 618, A128
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...866L..25V" target="_blank">
<i>Enhanced Star Formation in Both Disks and Ram-pressure-stripped Tails of GASP Jellyfish Galaxies</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Gullieuszik, Marco; Moretti, Alessia; Tonnesen, Stephanie; Jaffé, Yara L.; <strong>Fritz, Jacopo</strong>; Fasano, Giovanni; Bettoni, Daniela
<br/>
2018/10, The Astrophysical Journal, 866, L25
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...866..100D" target="_blank">
<i>The Enigmatic Compact Radio Source Coincident with the Energetic X-Ray Pulsar PSR J1813-1749 and HESS J1813-178</i>
</a>
<br/>
Dzib, Sergio A.; <strong>Rodríguez, Luis F.</strong>; Karuppusamy, Ramesh; <strong>Loinard, Laurent</strong>; Medina, Sac-Nicté X.
<br/>
2018/10, The Astrophysical Journal, 866, 100
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...618A..46A" target="_blank">
<i>Core fragmentation and Toomre stability analysis of W3(H<SUB>2</SUB>O). A case study of the IRAM NOEMA large program CORE</i>
</a>
<br/>
Ahmadi, A.; Beuther, H.; Mottram, J. C.; Bosco, F.; Linz, H.; Henning, Th.; Winters, J. M.; Kuiper, R.; Pudritz, R.; Sánchez-Monge, Á.; Keto, E.; Beltran, M.; Bontemps, S.; Cesaroni, R.; Csengeri, T.; Feng, S.; <strong>Galvan-Madrid, R.</strong>; Johnston, K. G.; Klaassen, P.; Leurini, S.; <span id="2018A&A...618A..46A.authors" style="display: none;">Longmore, S. N.; Lumsden, S.; Maud, L. T.; Menten, K. M.; Moscadelli, L.; Motte, F.; <strong>Palau, A.</strong>; Peters, T.; Ragan, S. E.; Schilke, P.; Urquhart, J. S.; Wyrowski, F.; Zinnecker, H.</span><span id="2018A&A...618A..46A.button"></span>
<script>
toggleAuthors('2018A&A...618A..46A', 33, 0);
</script>

<br/>
2018/10, Astronomy and Astrophysics, 618, A46
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...865L..23F" target="_blank">
<i>HST STIS UV Spectroscopic Observations of the Protoplanetary Nebula Hen3-1475</i>
</a>
<br/>
Fang, Xuan; Gómez de Castro, Ana I.; <strong>Toalá, Jesús A.</strong>; Riera, Angels
<br/>
2018/10, The Astrophysical Journal, 865, L23
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.2508M" target="_blank">
<i>GASP - X. APEX observations of molecular gas in the discs and in the tails of ram-pressure stripped galaxies</i>
</a>
<br/>
Moretti, A.; Paladino, R.; Poggianti, B. M.; D'Onofrio, M.; Bettoni, D.; Gullieuszik, M.; Jaffé, Y. L.; Vulcani, B.; Fasano, G.; <strong>Fritz, J.</strong>; Torstensson, K.
<br/>
2018/10, Monthly Notices of the Royal Astronomical Society, 480, 2508
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.2423I" target="_blank">
<i>The coordinated radio and infrared survey for high-mass star formation - IV. A new radio-selected sample of compact galactic planetary nebulae</i>
</a>
<br/>
Irabor, T.; Hoare, M. G.; Oudmaijer, R. D.; Urquhart, J. S.; <strong>Kurtz, S.</strong>; Lumsden, S. L.; Purcell, C. R.; Zijlstra, A. A.; Umana, G.
<br/>
2018/10, Monthly Notices of the Royal Astronomical Society, 480, 2423
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.480.1106C" target="_blank">
<i>Optical spectroscopy of local type-1 AGN LINERs</i>
</a>
<br/>
Cazzoli, S.; Márquez, I.; Masegosa, J.; del Olmo, A.; Pović, M.; <strong>González-Martín, O.</strong>; Balmaverde, B.; Hernández-García, L.; García-Burillo, S.
<br/>
2018/10, Monthly Notices of the Royal Astronomical Society, 480, 1106
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...865...37M" target="_blank">
<i>Multiple Rings in the Transitional Disk of GM Aurigae Revealed by VLA and ALMA</i>
</a>
<br/>
Macías, Enrique; Espaillat, Catherine C.; Ribas, Álvaro; Schwarz, Kamber R.; Anglada, Guillem; Osorio, Mayra; <strong>Carrasco-González, Carlos</strong>; Gómez, José F.; Robinson, Connor
<br/>
2018/09, The Astrophysical Journal, 865, 37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...865...73O" target="_blank">
<i>The Gould’s Belt Distances Survey (GOBELINS). V. Distances and Kinematics of the Perseus Molecular Cloud</i>
</a>
<br/>
Ortiz-León, Gisela N.; <strong>Loinard, Laurent</strong>; Dzib, Sergio A.; Galli, Phillip A. B.; Kounkel, Marina; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Torres, Rosa M.; Hartmann, Lee; Boden, Andrew F.; Evans, Neal J., II; Briceño, Cesar; Tobin, John J.
<br/>
2018/09, The Astrophysical Journal, 865, 73
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...617A..89C" target="_blank">
<i>Search for high-mass protostars with ALMA revealed up to kilo-parsec scales (SPARKS). I. Indication for a centrifugal barrier in the environment of a single high-mass envelope</i>
</a>
<br/>
Csengeri, T.; Bontemps, S.; Wyrowski, F.; Belloche, A.; Menten, K. M.; Leurini, S.; Beuther, H.; Bronfman, L.; Commerçon, B.; Chapillon, E.; Longmore, S.; <strong>Palau, A.</strong>; Tan, J. C.; Urquhart, J. S.
<br/>
2018/09, Astronomy and Astrophysics, 617, A89
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...864..102M" target="_blank">
<i>Chemical Diagnostics of the Massive Star Cluster-forming Cloud G33.92+0.11. II. HDCS and DCN</i>
</a>
<br/>
Minh, Young Chol; Liu, Hauyu Baobab; <strong>Galvań-Madrid, Roberto</strong>; Sahu, Dipen; He, Jinhua; Hasegawa, Tatsuhiko
<br/>
2018/09, The Astrophysical Journal, 864, 102
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018PASP..130i4202D" target="_blank">
<i>Chemical Abundances of Neutron-capture Elements in Exoplanet-hosting Stars</i>
</a>
<br/>
Delgado Mena, E.; Adibekyan, V. Zh.; Figueira, P.; González Hernández, J. I.; Santos, N. C.; <strong>Tsantaki, M.</strong>; Sousa, S. G.; Faria, J. P.; Suárez-Andrés, L.; Israelian, G.
<br/>
2018/09, Publications of the Astronomical Society of the Pacific, 130, 094202
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.479.4126G" target="_blank">
<i>UVIT view of ram-pressure stripping in action: star formation in the stripped gas of the GASP jellyfish galaxy JO201 in Abell 85</i>
</a>
<br/>
George, K.; Poggianti, B. M.; Gullieuszik, M.; Fasano, G.; Bellhouse, C.; Postma, J.; Moretti, A.; Jaffé, Y.; Vulcani, B.; Bettoni, D.; <strong>Fritz, J.</strong>; Côté, P.; Ghosh, S. K.; Hutchings, J. B.; Mohan, R.; Sreekumar, P.; Stalin, C. S.; Subramaniam, A.; Tandon, S. N.
<br/>
2018/09, Monthly Notices of the Royal Astronomical Society, 479, 4126
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.479.3909G" target="_blank">
<i>The Owl and other strigiform nebulae: multipolar cavities within a filled shell</i>
</a>
<br/>
García-Díaz, Ma T.; Steffen, W.; <strong>Henney, W. J.</strong>; López, J. A.; García-López, F.; González-Buitrago, D.; Áviles, A.
<br/>
2018/09, Monthly Notices of the Royal Astronomical Society, 479, 3909
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.479.2112B" target="_blank">
<i>Gravity or turbulence? - IV. Collapsing cores in out-of-virial disguise</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Palau, Aina</strong>; Klessen, Ralf S.
<br/>
2018/09, Monthly Notices of the Royal Astronomical Society, 479, 2112
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.479.3254V" target="_blank">
<i>Molecular cloud evolution - VI. Measuring cloud ages</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; <strong>Zamora-Avilés, Manuel</strong>; <strong>Galván-Madrid, Roberto</strong>; Forbrich, Jan
<br/>
2018/09, Monthly Notices of the Royal Astronomical Society, 479, 3254
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...616A.120M" target="_blank">
<i>HERschel Observations of Edge-on Spirals (HEROES). IV. Dust energy balance problem</i>
</a>
<br/>
Mosenkov, Aleksandr V.; Allaert, Flor; Baes, Maarten; Bianchi, Simone; Camps, Peter; Clark, Christopher J. R.; Decleir, Marjorie; De Geyter, Gert; De Looze, Ilse; <strong>Fritz, Jacopo</strong>; Gentile, Gianfranco; Holwerda, Benne W.; Hughes, Thomas M.; Lewis, Fraser; Smith, Matthew W. L.; Verstappen, Joris; Verstocken, Sam; Viaene, Sébastien
<br/>
2018/08, Astronomy and Astrophysics, 616, A120
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...863..107D" target="_blank">
<i>A Test of MONDian Gravity in ∼300 Pressure-supported Elliptical Galaxies from the MaNGA Survey</i>
</a>
<br/>
Durazo, R.; Hernandez, X.; <strong>Cervantes Sodi, B.</strong>; Sanchez, S. F.
<br/>
2018/08, The Astrophysical Journal, 863, 107
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...863L...9D" target="_blank">
<i>Flux Density Variations at 3.6 cm in the Massive Star-forming Region W49A</i>
</a>
<br/>
De Pree, C. G.; <strong>Galván-Madrid, R.</strong>; Goss, W. M.; Klessen, R. S.; Mac Low, M. -M.; Peters, T.; Wilner, D.; Bates, J.; Melo, T.; Presler-Marshall, B.; Webb-Forgus, R.
<br/>
2018/08, The Astrophysical Journal, 863, L9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...863...28A" target="_blank">
<i>Shocked POststarburst Galaxy Survey. III. The Ultraviolet Properties of SPOGs</i>
</a>
<br/>
Ardila, Felipe; Alatalo, Katherine; Lanz, Lauranne; Appleton, Philip N.; Beaton, Rachael L.; <strong>Bitsakis, Theodoros</strong>; Cales, Sabrina L.; Falcón-Barroso, Jesús; Kewley, Lisa J.; Medling, Anne M.; Mulchaey, John S.; Nyland, Kristina; Rich, Jeffrey A.; Urry, C. Meg
<br/>
2018/08, The Astrophysical Journal, 863, 28
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.478.2505I" target="_blank">
<i>Radiative transfer modelling of W33A MM1: 3D structure and dynamics of a complex massive star-forming region</i>
</a>
<br/>
Izquierdo, Andrés F.; <strong>Galván-Madrid, Roberto</strong>; Maud, Luke T.; Hoare, Melvin G.; Johnston, Katharine G.; Keto, Eric R.; Zhang, Qizhou; de Wit, Willem-Jan
<br/>
2018/08, Monthly Notices of the Royal Astronomical Society, 478, 2505
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.478.2350L" target="_blank">
<i>The origin of the mid-infrared nuclear polarization of active galactic nuclei</i>
</a>
<br/>
Lopez-Rodriguez, E.; Alonso-Herrero, A.; Diaz-Santos, T.; <strong>Gonzalez-Martin, O.</strong>; Ichikawa, K.; Levenson, N. A.; <strong>Martinez-Paredes, M.</strong>; Nikutta, R.; Packham, C.; Perlman, E.; Ramos Almeida, C.; Rodriguez-Espinosa, J. M.; Telesco, C. M.
<br/>
2018/08, Monthly Notices of the Royal Astronomical Society, 478, 2350
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...615A.141B" target="_blank">
<i>Accelerating infall and rotational spin-up in the hot molecular core G31.41+0.31</i>
</a>
<br/>
Beltrán, M. T.; Cesaroni, R.; Rivilla, V. M.; Sánchez-Monge, Á.; Moscadelli, L.; Ahmadi, A.; Allen, V.; Beuther, H.; Etoka, S.; Galli, D.; <strong>Galván-Madrid, R.</strong>; Goddi, C.; Johnston, K. G.; Klaassen, P. D.; Kölligan, A.; Kuiper, R.; Kumar, M. S. N.; Maud, L. T.; Mottram, J. C.; Peters, T.; <span id="2018A&A...615A.141B.authors" style="display: none;">Schilke, P.; Testi, L.; van der Tak, F.; Walmsley, C. M.</span><span id="2018A&A...615A.141B.button"></span>
<script>
toggleAuthors('2018A&A...615A.141B', 24, 0);
</script>

<br/>
2018/07, Astronomy and Astrophysics, 615, A141
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...615A.103K" target="_blank">
<i>The coordinated radio and infrared survey for high-mass star formation. III. A catalogue of northern ultra-compact H II regions</i>
</a>
<br/>
Kalcheva, I. E.; Hoare, M. G.; Urquhart, J. S.; <strong>Kurtz, S.</strong>; Lumsden, S. L.; Purcell, C. R.; Zijlstra, A. A.
<br/>
2018/07, Astronomy and Astrophysics, 615, A103
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...861...73T" target="_blank">
<i>The Evolution of Protoplanetary Disks: Probing the Inner Disk of Very Low Accretors</i>
</a>
<br/>
Thanathibodee, Thanawuth; Calvet, Nuria; Herczeg, Gregory; Briceño, César; Clark, Catherine; Reiter, Megan; Ingleby, Laura; McClure, Melissa; <strong>Maucó, Karina</strong>; Hernández, Jesús
<br/>
2018/07, The Astrophysical Journal, 861, 73
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.478.1161B" target="_blank">
<i>Modelling dust rings in early-type galaxies through a sequence of radiative transfer simulations and 2D image fitting</i>
</a>
<br/>
<strong>Bonfini, P.</strong>; <strong>González-Martín, O.</strong>; <strong>Fritz, J.</strong>; <strong>Bitsakis, T.</strong>; <strong>Bruzual, G.</strong>; <strong>Cervantes Sodi, B.</strong>
<br/>
2018/07, Monthly Notices of the Royal Astronomical Society, 478, 1161
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.478.1218T" target="_blank">
<i>On the X-ray temperature of hot gas in diffuse nebulae</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; <strong>Arthur, S. J.</strong>
<br/>
2018/07, Monthly Notices of the Royal Astronomical Society, 478, 1218
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.478..146G" target="_blank">
<i>The density-magnetic field relation in the atomic ISM</i>
</a>
<br/>
<strong>Gazol, A.</strong>; <strong>Villagran, M. A.</strong>
<br/>
2018/07, Monthly Notices of the Royal Astronomical Society, 478, 146
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&ARv..26....3A" target="_blank">
<i>Radio jets from young stellar objects</i>
</a>
<br/>
Anglada, Guillem; <strong>Rodríguez, Luis F.</strong>; <strong>Carrasco-González, Carlos</strong>
<br/>
2018/06, Astronomy and Astrophysics Review, 26, 3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...859..144A" target="_blank">
<i>Resolving the Nuclear Obscuring Disk in the Compton-thick Seyfert Galaxy NGC 5643 with ALMA</i>
</a>
<br/>
Alonso-Herrero, A.; Pereira-Santaella, M.; García-Burillo, S.; Davies, R. I.; Combes, F.; Asmus, D.; Bunker, A.; Díaz-Santos, T.; Gandhi, P.; <strong>González-Martín, O.</strong>; Hernán-Caballero, A.; Hicks, E.; Hönig, S.; Labiano, A.; Levenson, N. A.; Packham, C.; Ramos Almeida, C.; Ricci, C.; Rigopoulou, D.; Rosario, D.; <span id="2018ApJ...859..144A.authors" style="display: none;">Sani, E.; Ward, M. J.</span><span id="2018ApJ...859..144A.button"></span>
<script>
toggleAuthors('2018ApJ...859..144A', 22, 0);
</script>

<br/>
2018/06, The Astrophysical Journal, 859, 144
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...613A..74P" target="_blank">
<i>Broadband radio spectro-polarimetric observations of high-Faraday-rotation-measure AGN</i>
</a>
<br/>
<strong>Pasetto, Alice</strong>; <strong>Carrasco-González, Carlos</strong>; O'Sullivan, Shane; Basu, Aritra; Bruni, Gabriele; Kraus, Alex; Curiel, Salvador; Mack, Karl-Heinz
<br/>
2018/06, Astronomy and Astrophysics, 613, A74
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...859..124E" target="_blank">
<i>Circumnuclear Star Formation and AGN Activity: Clues from Surface Brightness Radial Profile of PAHs and [{\rm{S}}\,{\rm{IV}}]</i>
</a>
<br/>
<strong>Esparza-Arredondo, Donaji</strong>; <strong>González-Martín, Omaira</strong>; Dultzin, Deborah; Alonso-Herrero, Almudena; Ramos Almeida, Cristina; Díaz-Santos, Tanio; García-Bernete, Ismael; <strong>Martinez-Paredes, Mariela</strong>; Rodríguez-Espinosa, Jose Miguel
<br/>
2018/06, The Astrophysical Journal, 859, 124
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...859...84H" target="_blank">
<i>SILVERRUSH. V. Census of Lyα, [O III] λ5007, Hα, and [C II] 158 μm Line Emission with ∼1000 LAEs at z = 4.9-7.0 Revealed with Subaru/HSC</i>
</a>
<br/>
Harikane, Yuichi; Ouchi, Masami; Shibuya, Takatoshi; Kojima, Takashi; Zhang, Haibin; Itoh, Ryohei; Ono, Yoshiaki; Higuchi, Ryo; Inoue, Akio K.; Chevallard, Jacopo; Capak, Peter L.; Nagao, Tohru; Onodera, Masato; Faisst, Andreas L.; Martin, Crystal L.; Rauch, Michael; <strong>Bruzual, Gustavo A.</strong>; Charlot, Stephane; Davidzon, Iary; Fujimoto, Seiji; <span id="2018ApJ...859...84H.authors" style="display: none;">Hilmi, Miftahul; Ilbert, Olivier; Lee, Chien-Hsiu; Matsuoka, Yoshiki; Silverman, John D.; Toft, Sune</span><span id="2018ApJ...859...84H.button"></span>
<script>
toggleAuthors('2018ApJ...859...84H', 26, 0);
</script>

<br/>
2018/06, The Astrophysical Journal, 859, 84
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.477.2431T" target="_blank">
<i>True versus apparent shapes of bow shocks</i>
</a>
<br/>
<strong>Tarango-Yong, Jorge A.</strong>; <strong>Henney, William J.</strong>
<br/>
2018/06, Monthly Notices of the Royal Astronomical Society, 477, 2431
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.476.5382Z" target="_blank">
<i>A submillimeter background galaxy projected on the debris disk of HD95086 revealed by ALMA</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Ho, Paul T. P.; <strong>Rodríguez, Luis F.</strong>
<br/>
2018/06, Monthly Notices of the Royal Astronomical Society, 476, 5382
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.476.4753J" target="_blank">
<i>GASP. IX. Jellyfish galaxies in phase-space: an orbital study of intense ram-pressure stripping in clusters</i>
</a>
<br/>
Jaffé, Yara L.; Poggianti, Bianca M.; Moretti, Alessia; Gullieuszik, Marco; Smith, Rory; Vulcani, Benedetta; Fasano, Giovanni; <strong>Fritz, Jacopo</strong>; Tonnesen, Stephanie; Bettoni, Daniela; Hau, George; Biviano, Andrea; Bellhouse, Callum; McGee, Sean
<br/>
2018/06, Monthly Notices of the Royal Astronomical Society, 476, 4753
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...859...76V" target="_blank">
<i>Erratum: “GASP. VII. Signs of Gas Inflow onto a Lopsided Galaxy” (<A href="http://doi.org/10.3847/1538-4357/aa992c">2018, ApJ, 852, 94</A>)</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Moretti, Alessia; Mapelli, Michela; Fasano, Giovanni; <strong>Fritz, Jacopo</strong>; Jaffé, Yara; Bettoni, Daniela; Gullieuszik, Marco; Bellhouse, Callum
<br/>
2018/05, The Astrophysical Journal, 859, 76
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...859...33G" target="_blank">
<i>The Gould's Belt Distances Survey (GOBELINS). IV. Distance, Depth, and Kinematics of the Taurus Star-forming Region</i>
</a>
<br/>
Galli, Phillip A. B.; <strong>Loinard, Laurent</strong>; Ortiz-Léon, Gisela N.; Kounkel, Marina; Dzib, Sergio A.; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Hartmann, Lee; Teixeira, Ramachrisna; Torres, Rosa M.; <strong>Rivera, Juana L.</strong>; Boden, Andrew F.; Evans, Neal J., II; Briceño, Cesar; Tobin, John J.; Heyer, Mark
<br/>
2018/05, The Astrophysical Journal, 859, 33
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...859....1M" target="_blank">
<i>Herschel PACS Observations of 4-10 Myr Old Classical T Tauri Stars in Orion OB1</i>
</a>
<br/>
<strong>Maucó, Karina</strong>; Briceño, César; Calvet, Nuria; Hernández, Jesús; <strong>Ballesteros-Paredes, Javier</strong>; <strong>González, Omaira</strong>; Espaillat, Catherine C.; Li, Dan; Telesco, Charles M.; Downes, Juan José; Macías, Enrique; Qi, Chunhua; Michel, Raúl; <strong>D'Alessio, Paola</strong>; Ali, Babar
<br/>
2018/05, The Astrophysical Journal, 859, 1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018AJ....155..218K" target="_blank">
<i>VLBA Observations of Strong Anisotripic Radio Scattering Toward the Orion Nebula</i>
</a>
<br/>
Kounkel, Marina; Hartmann, Lee; <strong>Loinard, Laurent</strong>; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Ortiz-León, Gisela N.; Johnson, Michael D.; Torres, Rosa M.; Briceño, Cesar
<br/>
2018/05, The Astronomical Journal, 155, 218
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...858....2G" target="_blank">
<i>Update on the X-Ray Variability Plane for Active Galactic Nuclei: The Role of the Obscuration</i>
</a>
<br/>
<strong>González-Martín, Omaira</strong>
<br/>
2018/05, The Astrophysical Journal, 858, 2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.476.3781R" target="_blank">
<i>MHD simulations of ram pressure stripping of a disc galaxy</i>
</a>
<br/>
<strong>Ramos-Martínez, Mariana</strong>; <strong>Gómez, Gilberto C.</strong>; Pérez-Villegas, Ángeles
<br/>
2018/05, Monthly Notices of the Royal Astronomical Society, 476, 3781
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...612A..79B" target="_blank">
<i>Early phases in the stellar and substellar formation and evolution. Infrared and submillimeter data in the Barnard 30 dark cloud</i>
</a>
<br/>
Barrado, D.; de Gregorio Monsalvo, I.; Huélamo, N.; Morales-Calderón, M.; Bayo, A.; <strong>Palau, A.</strong>; Ruiz, M. T.; Rivière-Marichalar, P.; Bouy, H.; Morata, Ó.; Stauffer, J. R.; Eiroa, C.; Noriega-Crespo, A.
<br/>
2018/04, Astronomy and Astrophysics, 612, A79
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...612A..54L" target="_blank">
<i>A 1.3 mm SMA survey of 29 variable young stellar objects</i>
</a>
<br/>
Liu, Hauyu Baobab; Dunham, Michael M.; Pascucci, Ilaria; Bourke, Tyler L.; Hirano, Naomi; Longmore, Steven; Andrews, Sean; <strong>Carrasco-González, Carlos</strong>; Forbrich, Jan; <strong>Galván-Madrid, Roberto</strong>; Girart, Josep M.; Green, Joel D.; Juárez, Carmen; Kóspál, Ágnes; Manara, Carlo F.; <strong>Palau, Aina</strong>; Takami, Michihiro; Testi, Leonardo; Vorobyov, Eduard I.
<br/>
2018/04, Astronomy and Astrophysics, 612, A54
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJS..235...42A" target="_blank">
<i>The Fourteenth Data Release of the Sloan Digital Sky Survey: First Spectroscopic Data from the Extended Baryon Oscillation Spectroscopic Survey and from the Second Phase of the Apache Point Observatory Galactic Evolution Experiment</i>
</a>
<br/>
Abolfathi, Bela; Aguado, D. S.; Aguilar, Gabriela; Allende Prieto, Carlos; Almeida, Andres; Ananna, Tonima Tasnim; Anders, Friedrich; Anderson, Scott F.; Andrews, Brett H.; Anguiano, Borja; Aragón-Salamanca, Alfonso; Argudo-Fernández, Maria; Armengaud, Eric; Ata, Metin; Aubourg, Eric; Avila-Reese, Vladimir; Badenes, Carles; Bailey, Stephen; Balland, Christophe; Barger, Kathleen A.; <span id="2018ApJS..235...42A.authors" style="display: none;">Barrera-Ballesteros, Jorge; Bartosz, Curtis; Bastien, Fabienne; Bates, Dominic; Baumgarten, Falk; Bautista, Julian; Beaton, Rachael; Beers, Timothy C.; Belfiore, Francesco; Bender, Chad F.; Bernardi, Mariangela; Bershady, Matthew A.; Beutler, Florian; Bird, Jonathan C.; Bizyaev, Dmitry; Blanc, Guillermo A.; Blanton, Michael R.; Blomqvist, Michael; Bolton, Adam S.; Boquien, Médéric; Borissova, Jura; Bovy, Jo; Bradna Diaz, Christian Andres; Brandt, William Nielsen; Brinkmann, Jonathan; Brownstein, Joel R.; Bundy, Kevin; Burgasser, Adam J.; Burtin, Etienne; Busca, Nicolás G.; Cañas, Caleb I.; Cano-Díaz, Mariana; Cappellari, Michele; Carrera, Ricardo; Casey, Andrew R.; <strong>Cervantes Sodi, Bernardo</strong>; Chen, Yanping; Cherinka, Brian; Chiappini, Cristina; Choi, Peter Doohyun; Chojnowski, Drew; Chuang, Chia-Hsun; Chung, Haeun; Clerc, Nicolas; Cohen, Roger E.; Comerford, Julia M.; Comparat, Johan; Correa do Nascimento, Janaina; da Costa, Luiz; Cousinou, Marie-Claude; Covey, Kevin; Crane, Jeffrey D.; Cruz-Gonzalez, Irene; Cunha, Katia; da Silva Ilha, Gabriele; Damke, Guillermo J.; Darling, Jeremy; Davidson, James W., Jr.; Dawson, Kyle; de Icaza Lizaola, Miguel Angel C.; de la Macorra, Axel; de la Torre, Sylvain; De Lee, Nathan; de Sainte Agathe, Victoria; Deconto Machado, Alice; Dell'Agli, Flavia; Delubac, Timothée; Diamond-Stanic, Aleksandar M.; Donor, John; Downes, Juan José; Drory, Niv; du Mas des Bourboux, Hélion; Duckworth, Christopher J.; Dwelly, Tom; Dyer, Jamie; Ebelke, Garrett; Davis Eigenbrot, Arthur; Eisenstein, Daniel J.; Elsworth, Yvonne P.; Emsellem, Eric; Eracleous, Michael; Erfanianfar, Ghazaleh; Escoffier, Stephanie; Fan, Xiaohui; Fernández Alvar, Emma; Fernandez-Trincado, J. G.; Fernando Cirolini, Rafael; Feuillet, Diane; Finoguenov, Alexis; Fleming, Scott W.; Font-Ribera, Andreu; Freischlad, Gordon; Frinchaboy, Peter; Fu, Hai; Gómez Maqueo Chew, Yilen; Galbany, Lluís; García Pérez, Ana E.; Garcia-Dias, R.; García-Hernández, D. A.; Garma Oehmichen, Luis Alberto; Gaulme, Patrick; Gelfand, Joseph; Gil-Marín, Héctor; Gillespie, Bruce A.; Goddard, Daniel; González Hernández, Jonay I.; Gonzalez-Perez, Violeta; Grabowski, Kathleen; Green, Paul J.; Grier, Catherine J.; Gueguen, Alain; Guo, Hong; Guy, Julien; Hagen, Alex; Hall, Patrick; Harding, Paul; Hasselquist, Sten; Hawley, Suzanne; Hayes, Christian R.; Hearty, Fred; Hekker, Saskia; Hernandez, Jesus; Hernandez Toledo, Hector; Hogg, David W.; Holley-Bockelmann, Kelly; Holtzman, Jon A.; Hou, Jiamin; Hsieh, Bau-Ching; Hunt, Jason A. S.; Hutchinson, Timothy A.; Hwang, Ho Seong; Jimenez Angel, Camilo Eduardo; Johnson, Jennifer A.; Jones, Amy; Jönsson, Henrik; Jullo, Eric; Khan, Fahim Sakil; Kinemuchi, Karen; Kirkby, David; Kirkpatrick, Charles C., IV; Kitaura, Francisco-Shu; Knapp, Gillian R.; Kneib, Jean-Paul; Kollmeier, Juna A.; Lacerna, Ivan; Lane, Richard R.; Lang, Dustin; Law, David R.; Le Goff, Jean-Marc; Lee, Young-Bae; Li, Hongyu; Li, Cheng; Lian, Jianhui; Liang, Yu; Lima, Marcos; Lin, Lihwai; Long, Dan; Lucatello, Sara; Lundgren, Britt; Mackereth, J. Ted; MacLeod, Chelsea L.; Mahadevan, Suvrath; Maia, Marcio Antonio Geimba; Majewski, Steven; Manchado, Arturo; Maraston, Claudia; Mariappan, Vivek; Marques-Chaves, Rui; Masseron, Thomas; Masters, Karen L.; McDermid, Richard M.; McGreer, Ian D.; Melendez, Matthew; Meneses-Goytia, Sofia; Merloni, Andrea; Merrifield, Michael R.; Meszaros, Szabolcs; Meza, Andres; Minchev, Ivan; Minniti, Dante; Mueller, Eva-Maria; Muller-Sanchez, Francisco; Muna, Demitri; Muñoz, Ricardo R.; Myers, Adam D.; Nair, Preethi; Nandra, Kirpal; Ness, Melissa; Newman, Jeffrey A.; Nichol, Robert C.; Nidever, David L.; Nitschelm, Christian; Noterdaeme, Pasquier; O'Connell, Julia; Oelkers, Ryan James; Oravetz, Audrey; Oravetz, Daniel; Ortíz, Erik Aquino; Osorio, Yeisson; Pace, Zach; Padilla, Nelson; Palanque-Delabrouille, Nathalie; Palicio, Pedro Alonso; Pan, Hsi-An; Pan, Kaike; Parikh, Taniya; Pâris, Isabelle; Park, Changbom; Peirani, Sebastien; Pellejero-Ibanez, Marcos; Penny, Samantha; Percival, Will J.; Perez-Fournon, Ismael; Petitjean, Patrick; Pieri, Matthew M.; Pinsonneault, Marc; Pisani, Alice; Prada, Francisco; Prakash, Abhishek; Queiroz, Anna Bárbara de Andrade; Raddick, M. Jordan; Raichoor, Anand; Barboza Rembold, Sandro; Richstein, Hannah; Riffel, Rogemar A.; Riffel, Rogério; Rix, Hans-Walter; Robin, Annie C.; Rodríguez Torres, Sergio; Román-Zúñiga, Carlos; Ross, Ashley J.; Rossi, Graziano; Ruan, John; Ruggeri, Rossana; Ruiz, Jose; Salvato, Mara; Sánchez, Ariel G.; Sánchez, Sebastián F.; Sanchez Almeida, Jorge; Sánchez-Gallego, José R.; Santana Rojas, Felipe Antonio; Santiago, Basílio Xavier; Schiavon, Ricardo P.; Schimoia, Jaderson S.; Schlafly, Edward; Schlegel, David; Schneider, Donald P.; Schuster, William J.; Schwope, Axel; Seo, Hee-Jong; Serenelli, Aldo; Shen, Shiyin; Shen, Yue; Shetrone, Matthew; Shull, Michael; Silva Aguirre, Víctor; Simon, Joshua D.; Skrutskie, Mike; Slosar, Anže; Smethurst, Rebecca; Smith, Verne; Sobeck, Jennifer; Somers, Garrett; Souter, Barbara J.; Souto, Diogo; Spindler, Ashley; Stark, David V.; Stassun, Keivan; Steinmetz, Matthias; Stello, Dennis; Storchi-Bergmann, Thaisa; Streblyanska, Alina; Stringfellow, Guy S.; Suárez, Genaro; Sun, Jing; Szigeti, Laszlo; Taghizadeh-Popp, Manuchehr; Talbot, Michael S.; Tang, Baitian; Tao, Charling; Tayar, Jamie; Tembe, Mita; Teske, Johanna; Thakar, Aniruddha R.; Thomas, Daniel; Tissera, Patricia; Tojeiro, Rita; Tremonti, Christy; Troup, Nicholas W.; Urry, Meg; Valenzuela, O.; van den Bosch, Remco; Vargas-González, Jaime; Vargas-Magaña, Mariana; Vazquez, Jose Alberto; Villanova, Sandro; Vogt, Nicole; Wake, David; Wang, Yuting; Weaver, Benjamin Alan; Weijmans, Anne-Marie; Weinberg, David H.; Westfall, Kyle B.; Whelan, David G.; Wilcots, Eric; Wild, Vivienne; Williams, Rob A.; Wilson, John; Wood-Vasey, W. M.; Wylezalek, Dominika; Xiao, Ting; Yan, Renbin; Yang, Meng; Ybarra, Jason E.; Yèche, Christophe; Zakamska, Nadia; Zamora, Olga; Zarrouk, Pauline; Zasowski, Gail; Zhang, Kai; Zhao, Cheng; Zhao, Gong-Bo; Zheng, Zheng; Zheng, Zheng; Zhou, Zhi-Min; Zhu, Guangtun; Zinn, Joel C.; Zou, Hu</span><span id="2018ApJS..235...42A.button"></span>
<script>
toggleAuthors('2018ApJS..235...42A', 348, 0);
</script>

<br/>
2018/04, The Astrophysical Journal Supplement Series, 235, 42
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...856..170G" target="_blank">
<i>Tracers of Stellar Mass-loss. II. Mid-IR Colors and Surface Brightness Fluctuations</i>
</a>
<br/>
<strong>González-Lópezlira, Rosa A.</strong>
<br/>
2018/04, The Astrophysical Journal, 856, 170
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018RMxAA..54..217S" target="_blank">
<i>SDSS IV MaNGA - Properties of AGN Host Galaxies</i>
</a>
<br/>
Sánchez, S. F.; Avila-Reese, V.; Hernandez-Toledo, H.; Cortes-Suárez, E.; Rodríguez-Puebla, A.; Ibarra-Medel, H.; Cano-Díaz, M.; Barrera-Ballesteros, J. K.; Negrete, C. A.; <strong>Calette, A. R.</strong>; de Lorenzo-Cáceres, A.; Ortega-Minakata, R. A.; Aquino, E.; Valenzuela, O.; Clemente, J. C.; Storchi-Bergmann, T.; Riffel, R.; Schimoia, J.; Riffel, R. A.; Rembold, S. B.; <span id="2018RMxAA..54..217S.authors" style="display: none;">Brownstein, J. R.; Pan, K.; Yates, R.; Mallmann, N.; Bitsakis, T.</span><span id="2018RMxAA..54..217S.button"></span>
<script>
toggleAuthors('2018RMxAA..54..217S', 25, 0);
</script>

<br/>
2018/04, Revista Mexicana de Astronomia y Astrofisica, 54, 217
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018RMxAA..54...57R" target="_blank">
<i>A Comparison of the Radio and Optical Time-Evolution of HH 1 and 2</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Raga, A. C.; Rodríguez-Kamenetzky, A.; Carrasco-González, C.
<br/>
2018/04, Revista Mexicana de Astronomia y Astrofisica, 54, 57
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018RMxAA..54..129D" target="_blank">
<i>Unveiling the Hot Molecular Core in the Ultracompact H II Region with Extended Emission G12.21-0.10</i>
</a>
<br/>
de la Fuente, E.; Trinidad, M. A.; Porras, A.; Rodríguez-Rico, C.; <strong>Araya, E. D.</strong>; Kurtz, S.; Hofner, P.; Nigoche-Netro, A.
<br/>
2018/04, Revista Mexicana de Astronomia y Astrofisica, 54, 129
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...856L..27G" target="_blank">
<i>Resolving the Polarized Dust Emission of the Disk around the Massive Star Powering the HH 80-81 Radio Jet</i>
</a>
<br/>
Girart, J. M.; Fernández-López, M.; Li, Z. -Y.; Yang, H.; Estalella, R.; Anglada, G.; Áñez-López, N.; Busquet, G.; <strong>Carrasco-González, C.</strong>; Curiel, S.; <strong>Galvan-Madrid, R.</strong>; Gómez, J. F.; de Gregorio-Monsalvo, I.; Jiménez-Serra, I.; Krasnopolsky, R.; Martí, J.; Osorio, M.; Padovani, M.; Rao, R.; <strong>Rodríguez, L. F.</strong>; <span id="2018ApJ...856L..27G.authors" style="display: none;">Torrelles, J. M.</span><span id="2018ApJ...856L..27G.button"></span>
<script>
toggleAuthors('2018ApJ...856L..27G', 21, 0);
</script>

<br/>
2018/04, The Astrophysical Journal, 856, L27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.475.5550V" target="_blank">
<i>Dense gas and star formation in individual Giant Molecular Clouds in M31</i>
</a>
<br/>
Viaene, S.; Forbrich, J.; <strong>Fritz, J.</strong>
<br/>
2018/04, Monthly Notices of the Royal Astronomical Society, 475, 5550
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.475.4055M" target="_blank">
<i>GASP. V. Ram-pressure stripping of a ring Hoag's-like galaxy in a massive cluster</i>
</a>
<br/>
Moretti, A.; Poggianti, B. M.; Gullieuszik, M.; Mapelli, M.; Jaffé, Y. L.; <strong>Fritz, J.</strong>; Biviano, A.; Fasano, G.; Bettoni, D.; Vulcani, B.; D'Onofrio, M.
<br/>
2018/04, Monthly Notices of the Royal Astronomical Society, 475, 4055
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.475.2467F" target="_blank">
<i>Variations of the stellar initial mass function in semi-analytical models - II. The impact of cosmic ray regulation</i>
</a>
<br/>
Fontanot, Fabio; De Lucia, Gabriella; Xie, Lizhi; Hirschmann, Michaela; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane
<br/>
2018/04, Monthly Notices of the Royal Astronomical Society, 475, 2467
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...855..141P" target="_blank">
<i>Herschel Spectroscopy of the Taffy Galaxies (UGC 12914/12915 = VV 254): Enhanced [C II] Emission in the Collisionally Formed Bridge</i>
</a>
<br/>
Peterson, B. W.; Appleton, P. N.; <strong>Bitsakis, T.</strong>; Guillard, P.; Alatalo, K.; Boulanger, F.; Cluver, M.; Duc, P. -A.; Falgarone, E.; Gallagher, S.; Gao, Y.; Helou, G.; Jarrett, T. H.; Joshi, B.; Lisenfeld, U.; Lu, N.; Ogle, P.; Pineau des Forêts, G.; van der Werf, P.; Xu, C. K.
<br/>
2018/03, The Astrophysical Journal, 855, 141
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018SSRv..214...58B" target="_blank">
<i>Partially Ionized Plasmas in Astrophysics</i>
</a>
<br/>
Ballester, José Luis; Alexeev, Igor; Collados, Manuel; Downes, Turlough; Pfaff, Robert F.; Gilbert, Holly; Khodachenko, Maxim; Khomenko, Elena; Shaikhislamov, Ildar F.; Soler, Roberto; <strong>Vázquez-Semadeni, Enrique</strong>; Zaqarashvili, Teimuraz
<br/>
2018/03, Space Science Reviews, 214, 58
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...855...24P" target="_blank">
<i>Thermal Jeans Fragmentation within ∼1000 au in OMC-1S</i>
</a>
<br/>
<strong>Palau, Aina</strong>; <strong>Zapata, Luis A.</strong>; Román-Zúñiga, Carlos G.; Sánchez-Monge, Álvaro; Estalella, Robert; Busquet, Gemma; Girart, Josep M.; Fuente, Asunción; Commerçon, Benoit
<br/>
2018/03, The Astrophysical Journal, 855, 24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.474.4824Z" target="_blank">
<i>Magnetic suppression of turbulence and the star formation activity of molecular clouds</i>
</a>
<br/>
<strong>Zamora-Avilés, Manuel</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; Körtgen, Bastian; Banerjee, Robi; Hartmann, Lee
<br/>
2018/03, Monthly Notices of the Royal Astronomical Society, 474, 4824
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...610A..27M" target="_blank">
<i>Richness of compact radio sources in NGC 6334D to F</i>
</a>
<br/>
Medina, S. -N. X.; Dzib, S. A.; Tapia, M.; <strong>Rodríguez, L. F.</strong>; <strong>Loinard, L.</strong>
<br/>
2018/02, Astronomy and Astrophysics, 610, A27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...854..152A" target="_blank">
<i>The Global and Radial Stellar Mass Assembly of Milky Way-sized Galaxies</i>
</a>
<br/>
Avila-Reese, Vladimir; <strong>González-Samaniego, Alejandro</strong>; <strong>Colín, Pedro</strong>; Ibarra-Medel, Héctor; Rodríguez-Puebla, Aldo
<br/>
2018/02, The Astrophysical Journal, 854, 152
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...853..200P" target="_blank">
<i>Erratum: “GASP. I. Gas Stripping Phenomena in Galaxies with MUSE” (<A href="http://doi.org/10.3847/1538-4357/aa78ed">2017, ApJ, 844, 48</A>)</i>
</a>
<br/>
Poggianti, Bianca M.; Moretti, Alessia; Gullieuszik, Marco; <strong>Fritz, Jacopo</strong>; Jaffé, Yara; Bettoni, Daniela; Fasano, Giovanni; Bellhouse, Callum; Hau, George; Vulcani, Benedetta; Biviano, Andrea; Omizzolo, Alessandro; Paccagnella, Angela; D'Onofrio, Mauro; Cava, Antonio; Sheen, Y. -K.; Couch, Warrick; Owers, Matt
<br/>
2018/02, The Astrophysical Journal, 853, 200
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJS..234...35Z" target="_blank">
<i>Stellar Population Synthesis of Star-forming Clumps in Galaxy Pairs and Non-interacting Spiral Galaxies</i>
</a>
<br/>
Zaragoza-Cardiel, Javier; Smith, Beverly J.; Rosado, Margarita; Beckman, John E.; <strong>Bitsakis, Theodoros</strong>; Camps-Fariña, Artemi; Font, Joan; Cox, Isaiah S.
<br/>
2018/02, The Astrophysical Journal Supplement Series, 234, 35
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...853..199G" target="_blank">
<i>Erratum: “GASP .IV. A Muse View of Extreme Ram-pressure Stripping in the Plane of the Sky: The Case of Jellyfish Galaxy JO204” (<A href="http://doi.org/10.3847/1538-4357/aa8322">2017, ApJ, 846, 27</A>)</i>
</a>
<br/>
Gullieuszik, Marco; Poggianti, Bianca M.; Moretti, Alessia; <strong>Fritz, Jacopo</strong>; Jaffé, Yara L.; Hau, George; Bischko, Jan C.; Bellhouse, Callum; Bettoni, Daniela; Fasano, Giovanni; Vulcani, Benedetta; D'Onofrio, Mauro; Biviano, Andrea
<br/>
2018/02, The Astrophysical Journal, 853, 199
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...853..171G" target="_blank">
<i>Distributed Star Formation throughout the Galactic Center Cloud Sgr B2</i>
</a>
<br/>
Ginsburg, Adam; Bally, John; Barnes, Ashley; Bastian, Nate; Battersby, Cara; Beuther, Henrik; Brogan, Crystal; Contreras, Yanett; Corby, Joanna; Darling, Jeremy; De Pree, Chris; <strong>Galván-Madrid, Roberto</strong>; Garay, Guido; Henshaw, Jonathan; Hunter, Todd; Kruijssen, J. M. Diederik; Longmore, Steven; Lu, Xing; Meng, Fanyi; Mills, Elisabeth A. C.; <span id="2018ApJ...853..171G.authors" style="display: none;">Ott, Juergen; Pineda, Jaime E.; Sánchez-Monge, Álvaro; Schilke, Peter; Schmiedeke, Anika; Walker, Daniel; Wilner, David</span><span id="2018ApJ...853..171G.button"></span>
<script>
toggleAuthors('2018ApJ...853..171G', 27, 0);
</script>

<br/>
2018/02, The Astrophysical Journal, 853, 171
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...853..104B" target="_blank">
<i>The Distribution and Ages of Star Clusters in the Small Magellanic Cloud: Constraints on the Interaction History of the Magellanic Clouds</i>
</a>
<br/>
<strong>Bitsakis, Theodoros</strong>; <strong>González-Lópezlira, R. A.</strong>; <strong>Bonfini, P.</strong>; <strong>Bruzual, G.</strong>; Maravelias, G.; Zaritsky, D.; Charlot, S.; <strong>Ramírez-Siordia, V. H.</strong>
<br/>
2018/02, The Astrophysical Journal, 853, 104
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...853...99D" target="_blank">
<i>VLBA Determination of the Distance to Nearby Star-forming Regions. VIII. The LkHα 101 Cluster</i>
</a>
<br/>
Dzib, Sergio A.; Ortiz-León, Gisela N.; <strong>Loinard, L.</strong>; Mioduszewski, A. J.; <strong>Rodríguez, L. F.</strong>; Medina, S. -N. X.; Torres, R. M.
<br/>
2018/02, The Astrophysical Journal, 853, 99
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.474L..56B" target="_blank">
<i>A possible binary AGN in Mrk 622?</i>
</a>
<br/>
Benítez, E.; Rodríguez-Espinosa, J. M.; Cruz-González, I.; <strong>González-Martín, O.</strong>; Negrete, C. A.; Ruschel-Dutra, D.; Gutiérrez, L.; Jiménez-Bailón, E.
<br/>
2018/02, Monthly Notices of the Royal Astronomical Society, 474, L56
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.474.1862M" target="_blank">
<i>The resolved star formation history of M51a through successive Bayesian marginalization</i>
</a>
<br/>
Martínez-García, Eric E.; <strong>Bruzual, Gustavo</strong>; Magris C., Gladis; <strong>González-Lópezlira, Rosa A.</strong>
<br/>
2018/02, Monthly Notices of the Royal Astronomical Society, 474, 1862
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.473.5066T" target="_blank">
<i>Atmospheric stellar parameters for large surveys using FASMA, a new spectral synthesis package</i>
</a>
<br/>
<strong>Tsantaki, M.</strong>; Andreasen, D. T.; Teixeira, G. D. C.; Sousa, S. G.; Santos, N. C.; Delgado-Mena, E.; <strong>Bruzual, G.</strong>
<br/>
2018/02, Monthly Notices of the Royal Astronomical Society, 473, 5066
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...609A..69G" target="_blank">
<i>Numerical modeling of the 1840s major eruption of η Carinae as an explosion</i>
</a>
<br/>
<strong>González, Ricardo F.</strong>
<br/>
2018/01, Astronomy and Astrophysics, 609, A69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018A&A...609A..37C" target="_blank">
<i>DustPedia: Multiwavelength photometry and imagery of 875 nearby galaxies in 42 ultraviolet-microwave bands</i>
</a>
<br/>
Clark, C. J. R.; Verstocken, S.; Bianchi, S.; <strong>Fritz, J.</strong>; Viaene, S.; Smith, M. W. L.; Baes, M.; Casasola, V.; Cassara, L. P.; Davies, J. I.; De Looze, I.; De Vis, P.; Evans, R.; Galametz, M.; Jones, A. P.; Lianou, S.; Madden, S.; Mosenkov, A. V.; Xilouris, M.
<br/>
2018/01, Astronomy and Astrophysics, 609, A37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018ApJ...852...94V" target="_blank">
<i>GASP. VII. Signs of Gas Inflow onto a Lopsided Galaxy</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; Moretti, Alessia; Mapelli, Michela; Fasano, Giovanni; <strong>Fritz, Jacopo</strong>; Jaffé, Yara; Bettoni, Daniela; Gullieuszik, Marco; Bellhouse, Callum
<br/>
2018/01, The Astrophysical Journal, 852, 94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.473L..94B" target="_blank">
<i>Connecting traces of galaxy evolution: the missing core mass-morphological fine structure relation</i>
</a>
<br/>
<strong>Bonfini, P.</strong>; <strong>Bitsakis, T.</strong>; Zezas, A.; Duc, P. -A.; Iodice, E.; <strong>González-Martín, O.</strong>; <strong>Bruzual, G.</strong>; <strong>González Sanoja, A. J.</strong>
<br/>
2018/01, Monthly Notices of the Royal Astronomical Society, 473, L94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.473.2465B" target="_blank">
<i>Searching for new young stars in the Northern hemisphere: the Pisces moving group</i>
</a>
<br/>
<strong>Binks, A. S.</strong>; Jeffries, R. D.; Ward, J. L.
<br/>
2018/01, Monthly Notices of the Royal Astronomical Society, 473, 2465
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.473.2372K" target="_blank">
<i>Kinematics and structure of star-forming regions: insights from cold collapse models</i>
</a>
<br/>
Kuznetsova, Aleksandra; Hartmann, Lee; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2018/01, Monthly Notices of the Royal Astronomical Society, 473, 2372
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2018MNRAS.473.2222H" target="_blank">
<i>Early science with the Large Millimetre Telescope: fragmentation of molecular clumps in the Galaxy</i>
</a>
<br/>
Heyer, M.; Wilson, G. W.; Gutermuth, R.; <strong>Lizano, S.</strong>; Gomez-Ruiz, A.; <strong>Kurtz, S.</strong>; Luna, A.; Serrano Bernal, E. O.; Schloerb, F. P.
<br/>
2018/01, Monthly Notices of the Royal Astronomical Society, 473, 2222
</p></li>
</ol>
</div>
<div class="tab-pane" id="2017">
<h4 style="text-indent: 10px;">Publications 2017</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.472.2447G" target="_blank">
<i>Deep-down ionization of protoplanetary discs</i>
</a>
<br/>
Glassgold, A. E.; <strong>Lizano, S.</strong>; Galli, D.
<br/>
2017/12, Monthly Notices of the Royal Astronomical Society, 472, 2447
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017FrASS...4...59N" target="_blank">
<i>Quasars as Cosmological Standard Candles</i>
</a>
<br/>
Negrete, C. Alenka; Dultzin, Deborah; Marziani, Paola; <strong>Sulentic, Jack W.</strong>; Esparza-Arredondo, Donají; Martínez-Aldama, Mary L.; Del Olmo, Ascensión
<br/>
2017/12, Frontiers in Astronomy and Space Sciences, 4, 59
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017Sci...358.1570D" target="_blank">
<i>Light curves of the neutron star merger GW170817/SSS17a: Implications for r-process nucleosynthesis</i>
</a>
<br/>
Drout, M. R.; Piro, A. L.; Shappee, B. J.; Kilpatrick, C. D.; Simon, J. D.; Contreras, C.; Coulter, D. A.; Foley, R. J.; Siebert, M. R.; Morrell, N.; Boutsia, K.; Di Mille, F.; Holoien, T. W. -S.; Kasen, D.; Kollmeier, J. A.; Madore, B. F.; Monson, A. J.; Murguia-Berthier, A.; Pan, Y. -C.; Prochaska, J. X.; <span id="2017Sci...358.1570D.authors" style="display: none;">Ramirez-Ruiz, E.; Rest, A.; Adams, C.; Alatalo, K.; Bañados, E.; Baughman, J.; Beers, T. C.; Bernstein, R. A.; <strong>Bitsakis, T.</strong>; Campillay, A.; Hansen, T. T.; Higgs, C. R.; Ji, A. P.; Maravelias, G.; Marshall, J. L.; Moni Bidin, C.; Prieto, J. L.; Rasmussen, K. C.; Rojas-Bravo, C.; Strom, A. L.; Ulloa, N.; Vargas-González, J.; Wan, Z.; Whitten, D. D.</span><span id="2017Sci...358.1570D.button"></span>
<script>
toggleAuthors('2017Sci...358.1570D', 44, 0);
</script>

<br/>
2017/12, Science, 358, 1570
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017Sci...358.1574S" target="_blank">
<i>Early spectra of the gravitational wave source GW170817: Evolution of a neutron star merger</i>
</a>
<br/>
Shappee, B. J.; Simon, J. D.; Drout, M. R.; Piro, A. L.; Morrell, N.; Prieto, J. L.; Kasen, D.; Holoien, T. W. -S.; Kollmeier, J. A.; Kelson, D. D.; Coulter, D. A.; Foley, R. J.; Kilpatrick, C. D.; Siebert, M. R.; Madore, B. F.; Murguia-Berthier, A.; Pan, Y. -C.; Prochaska, J. X.; Ramirez-Ruiz, E.; Rest, A.; <span id="2017Sci...358.1574S.authors" style="display: none;">Adams, C.; Alatalo, K.; Bañados, E.; Baughman, J.; Bernstein, R. A.; <strong>Bitsakis, T.</strong>; Boutsia, K.; Bravo, J. R.; Di Mille, F.; Higgs, C. R.; Ji, A. P.; Maravelias, G.; Marshall, J. L.; Placco, V. M.; Prieto, G.; Wan, Z.</span><span id="2017Sci...358.1574S.button"></span>
<script>
toggleAuthors('2017Sci...358.1574S', 36, 0);
</script>

<br/>
2017/12, Science, 358, 1574
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...851...16R" target="_blank">
<i>The Highly Collimated Radio Jet of HH 80-81: Structure and Nonthermal Emission</i>
</a>
<br/>
<strong>Rodríguez-Kamenetzky, Adriana</strong>; <strong>Carrasco-González, Carlos</strong>; Araudo, Anabella; Romero, Gustavo E.; Torrelles, José M.; <strong>Rodríguez, Luis F.</strong>; Anglada, Guillem; Martí, Josep; Perucho, Manel; Valotto, Carlos
<br/>
2017/12, The Astrophysical Journal, 851, 16
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...850..163V" target="_blank">
<i>GASP. VIII. Capturing the Birth of a Tidal Dwarf Galaxy in a Merging System at z ∼ 0.05</i>
</a>
<br/>
Vulcani, Benedetta; Moretti, Alessia; Poggianti, Bianca M.; Fasano, Giovanni; <strong>Fritz, Jacopo</strong>; Gullieuszik, Marco; Duc, Pierre-Alain; Jaffé, Yara; Bettoni, Daniela
<br/>
2017/12, The Astrophysical Journal, 850, 163
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...850..131F" target="_blank">
<i>Radiation Hydrodynamical Turbulence in Protoplanetary Disks: Numerical Models and Observational Constraints</i>
</a>
<br/>
Flock, Mario; Nelson, Richard P.; Turner, Neal J.; Bertrang, Gesa H. -M.; <strong>Carrasco-González, Carlos</strong>; Henning, Thomas; Lyra, Wladimir; Teague, Richard
<br/>
2017/12, The Astrophysical Journal, 850, 131
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...850..115S" target="_blank">
<i>Dust Concentration and Emission in Protoplanetary Disks Vortices</i>
</a>
<br/>
<strong>Sierra, Anibal</strong>; <strong>Lizano, Susana</strong>; Barge, Pierre
<br/>
2017/12, The Astrophysical Journal, 850, 115
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.472.1286V" target="_blank">
<i>MUSE stares into the shadows: the high-resolution dust attenuation curve of NGC 5626</i>
</a>
<br/>
Viaene, S.; Sarzi, M.; Baes, M.; <strong>Fritz, J.</strong>; Puerari, I.
<br/>
2017/12, Monthly Notices of the Royal Astronomical Society, 472, 1286
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.471.4910R" target="_blank">
<i>A model for a photoionized, conical jet from a young, massive star</i>
</a>
<br/>
Raga, A. C.; Cantó, J.; Tinoco-Arenas, A.; Rodríguez-Ramírez, J. C.; <strong>Rodríguez, L. F.</strong>; <strong>Lizano, S.</strong>
<br/>
2017/11, Monthly Notices of the Royal Astronomical Society, 471, 4910
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017FrASS...4...34M" target="_blank">
<i>The AGN nature of LINER nuclear sources</i>
</a>
<br/>
Márquez, Isabel; <strong>Masegosa, Josefa</strong>; González-Martin, Omaira; Hernández-Garcia, Lorena; Pović, Mirjana; Netzer, Hagai; Cazzoli, Sara; del Olmo, Ascensión
<br/>
2017/11, Frontiers in Astronomy and Space Sciences, 4, 34
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...850L..17L" target="_blank">
<i>Serendipitous Discovery of an Optical Emission-line Jet in NGC 232</i>
</a>
<br/>
López-Cobá, C.; Sánchez, S. F.; Cruz-González, I.; Binette, L.; Galbany, L.; Krühler, T.; <strong>Rodríguez, L. F.</strong>; Barrera-Ballesteros, J. K.; Sánchez-Menguiano, L.; Walcher, C. J.; Aquino-Ortíz, E.; Anderson, J. P.
<br/>
2017/11, The Astrophysical Journal, 850, L17
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...607A..81B" target="_blank">
<i>The concentration-mass relation of clusters of galaxies from the OmegaWINGS survey</i>
</a>
<br/>
Biviano, A.; Moretti, A.; Paccagnella, A.; Poggianti, B. M.; Bettoni, D.; Gullieuszik, M.; Vulcani, B.; Fasano, G.; D'Onofrio, M.; <strong>Fritz, J.</strong>; Cava, A.
<br/>
2017/11, Astronomy and Astrophysics, 607, A81
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...607A..74L" target="_blank">
<i>The properties of the inner disk around HL Tau: Multi-wavelength modeling of the dust emission</i>
</a>
<br/>
Liu, Yao; Henning, Thomas; <strong>Carrasco-González, Carlos</strong>; Chandler, Claire J.; Linz, Hendrik; Birnstiel, Til; van Boekel, Roy; Pérez, Laura M.; Flock, Mario; Testi, Leonardo; <strong>Rodríguez, Luis F.</strong>; <strong>Galván-Madrid, Roberto</strong>
<br/>
2017/11, Astronomy and Astrophysics, 607, A74
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJS..233....4R" target="_blank">
<i>A Catalog of 44 GHz Methanol Masers in Massive Star-forming Regions. IV. The High-mass Protostellar Object Sample</i>
</a>
<br/>
<strong>Rodríguez-Garza, C. B.</strong>; <strong>Kurtz, S. E.</strong>; Gómez-Ruiz, A. I.; Hofner, P.; Araya, E. D.; Kalenskii, S. V.
<br/>
2017/11, The Astrophysical Journal Supplement Series, 233, 4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...849..136T" target="_blank">
<i>Emission from Magnetized Accretion Disks around Young Stars</i>
</a>
<br/>
<strong>Tapia, C.</strong>; <strong>Lizano, S.</strong>
<br/>
2017/11, The Astrophysical Journal, 849, 136
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.472..647Z" target="_blank">
<i>Are fibres in molecular cloud filaments real objects?</i>
</a>
<br/>
<strong>Zamora-Avilés, Manuel</strong>; <strong>Ballesteros-Paredes, Javier</strong>; Hartmann, Lee W.
<br/>
2017/11, Monthly Notices of the Royal Astronomical Society, 472, 647
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.471.4722M" target="_blank">
<i>Galaxy properties from J-PAS narrow-band photometry</i>
</a>
<br/>
Mejía-Narváez, A.; <strong>Bruzual, G.</strong>; Magris, C. G.; Alcaniz, J. S.; Benítez, N.; Carneiro, S.; Cenarro, A. J.; Cristóbal-Hornillos, D.; Dupke, R.; Ederoclite, A.; Marín-Franch, A.; de Oliveira, C. Mendes; Moles, M.; Sodre, L.; Taylor, K.; Varela, J.; Ramió, H. Vázquez
<br/>
2017/11, Monthly Notices of the Royal Astronomical Society, 471, 4722
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017RMxAA..53..477L" target="_blank">
<i>An approximate analytic solution and stability criterion for the logatropic sphere</i>
</a>
<br/>
<strong>Lizano, S.</strong>; Raga, A. C.; Rodríguez-Ramírez, J. C.
<br/>
2017/10, Revista Mexicana de Astronomia y Astrofisica, 53, 477
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJS..232...29A" target="_blank">
<i>Long-term Variability of H<SUB>2</SUB>CO Masers in Star-forming Regions</i>
</a>
<br/>
Andreev, N.; Araya, E. D.; Hoffman, I. M.; Hofner, P.; <strong>Kurtz, S.</strong>; Linz, H.; Olmi, L.; Lorran-Costa, I.
<br/>
2017/10, The Astrophysical Journal Supplement Series, 232, 29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...848..132F" target="_blank">
<i>GASP. III. JO36: A Case of Multiple Environmental Effects at Play?</i>
</a>
<br/>
<strong>Fritz, Jacopo</strong>; Moretti, Alessia; Gullieuszik, Marco; Poggianti, Bianca; <strong>Bruzual, Gustavo</strong>; Vulcani, Benedetta; Nicastro, Fabrizio; Jaffé, Yara; <strong>Cervantes Sodi, Bernardo</strong>; Bettoni, Daniela; Biviano, Andrea; Fasano, Giovanni; Charlot, Stéphane; Bellhouse, Callum; Hau, George
<br/>
2017/10, The Astrophysical Journal, 848, 132
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...606A.108C" target="_blank">
<i>Structural and dynamical modeling of WINGS clusters. I. The distribution of cluster galaxies of different morphological classes within regular and irregular clusters</i>
</a>
<br/>
Cava, A.; Biviano, A.; Mamon, G. A.; Varela, J.; Bettoni, D.; D'Onofrio, M.; Fasano, G.; <strong>Fritz, J.</strong>; Moles, M.; Moretti, A.; Poggianti, B.
<br/>
2017/10, Astronomy and Astrophysics, 606, A108
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...606A..94D" target="_blank">
<i>Chemical abundances of 1111 FGK stars from the HARPS GTO planet search program. II. Cu, Zn, Sr, Y, Zr, Ba, Ce, Nd, and Eu</i>
</a>
<br/>
Delgado Mena, E.; <strong>Tsantaki, M.</strong>; Adibekyan, V. Zh.; Sousa, S. G.; Santos, N. C.; González Hernández, J. I.; Israelian, G.
<br/>
2017/10, Astronomy and Astrophysics, 606, A94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...605A..18C" target="_blank">
<i>Radial distribution of dust, stars, gas, and star-formation rate in DustPedia face-on galaxies</i>
</a>
<br/>
Casasola, V.; Cassarà, L. P.; Bianchi, S.; Verstocken, S.; Xilouris, E.; Magrini, L.; Smith, M. W. L.; De Looze, I.; Galametz, M.; Madden, S. C.; Baes, M.; Clark, C.; Davies, J.; De Vis, P.; Evans, R.; <strong>Fritz, J.</strong>; Galliano, F.; Jones, A. P.; Mosenkov, A. V.; Viaene, S.; <span id="2017A&A...605A..18C.authors" style="display: none;">Ysard, N.</span><span id="2017A&A...605A..18C.button"></span>
<script>
toggleAuthors('2017A&A...605A..18C', 21, 0);
</script>

<br/>
2017/09, Astronomy and Astrophysics, 605, A18
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...847...58G" target="_blank">
<i>The Circumestellar Disk of the B0 Protostar Powering the HH 80-81 Radio Jet</i>
</a>
<br/>
Girart, J. M.; Estalella, R.; Fernández-López, M.; Curiel, S.; Frau, P.; <strong>Galvan-Madrid, R.</strong>; Rao, R.; Busquet, G.; Juárez, C.
<br/>
2017/09, The Astrophysical Journal, 847, 58
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...846...27G" target="_blank">
<i>GASP. IV. A Muse View of Extreme Ram-pressure-stripping in the Plane of the Sky: The Case of Jellyfish Galaxy JO204</i>
</a>
<br/>
Gullieuszik, Marco; Poggianti, Bianca M.; Moretti, Alessia; <strong>Fritz, Jacopo</strong>; Jaffé, Yara L.; Hau, George; Bischko, Jan C.; Bellhouse, Callum; Bettoni, Daniela; Fasano, Giovanni; Vulcani, Benedetta; D'Onofrio, Mauro; Biviano, Andrea
<br/>
2017/09, The Astrophysical Journal, 846, 27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.470.2578G" target="_blank">
<i>A mid-infrared statistical investigation of clumpy torus model predictions</i>
</a>
<br/>
García-González, J.; Alonso-Herrero, A.; Hönig, S. F.; Hernán-Caballero, A.; Ramos Almeida, C.; Levenson, N. A.; Roche, P. F.; <strong>González-Martín, O.</strong>; Packham, C.; Kishimoto, M.
<br/>
2017/09, Monthly Notices of the Royal Astronomical Society, 470, 2578
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.470.3532V" target="_blank">
<i>Modelling ultraviolet-line diagnostics of stars, the ionized and the neutral interstellar medium in star-forming galaxies</i>
</a>
<br/>
Vidal-García, A.; Charlot, S.; <strong>Bruzual, G.</strong>; Hubeny, I.
<br/>
2017/09, Monthly Notices of the Royal Astronomical Society, 470, 3532
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...847...66O" target="_blank">
<i>ALMA Observations of the Archetypal “Hot Core” That Is Not: Orion-KL</i>
</a>
<br/>
Orozco-Aguilera, M. T.; <strong>Zapata, Luis A.</strong>; Hirota, Tomoya; Qin, Sheng-Li; Masqué, Josep M.
<br/>
2017/09, The Astrophysical Journal, 847, 66
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...847...37C" target="_blank">
<i>Do Low Surface Brightness Galaxies Host Stellar Bars?</i>
</a>
<br/>
<strong>Cervantes Sodi, Bernardo</strong>; <strong>Sánchez García, Osbaldo</strong>
<br/>
2017/09, The Astrophysical Journal, 847, 37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...846...76T" target="_blank">
<i>Hot Gas in the Wolf-Rayet Nebula NGC 3199</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Marston, A. P.; Guerrero, M. A.; Chu, Y. -H.; Gruendl, R. A.
<br/>
2017/09, The Astrophysical Journal, 846, 76
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...604A..65A" target="_blank">
<i>Fourier-space combination of Planck and Herschel images</i>
</a>
<br/>
Abreu-Vicente, J.; Stutz, A.; Henning, Th.; Keto, E.; <strong>Ballesteros-Paredes, J.</strong>; Robitaille, T.
<br/>
2017/08, Astronomy and Astrophysics, 604, A65
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017Natur.548..304P" target="_blank">
<i>Ram-pressure feeding of supermassive black holes</i>
</a>
<br/>
Poggianti, Bianca M.; Jaffé, Yara L.; Moretti, Alessia; Gullieuszik, Marco; Radovich, Mario; Tonnesen, Stephanie; <strong>Fritz, Jacopo</strong>; Bettoni, Daniela; Vulcani, Benedetta; Fasano, Giovanni; Bellhouse, Callum; Hau, George; Omizzolo, Alessandro
<br/>
2017/08, Nature, 548, 304
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.469.2720G" target="_blank">
<i>A comparison between the soft X-ray and [O III] morphologies of active galactic nuclei</i>
</a>
<br/>
Gómez-Guijarro, Carlos; <strong>González-Martín, Omaira</strong>; Ramos Almeida, Cristina; Rodríguez-Espinosa, José Miguel; Gallego, Jesús
<br/>
2017/08, Monthly Notices of the Royal Astronomical Society, 469, 2720
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...845...93K" target="_blank">
<i>Star Formation Activity of Barred Spiral Galaxies</i>
</a>
<br/>
Kim, Eunbin; Hwang, Ho Seong; Chung, Haeun; Lee, Gwang-Ho; Park, Changbom; <strong>Cervantes Sodi, Bernardo</strong>; Kim, Sungsoo S.
<br/>
2017/08, The Astrophysical Journal, 845, 93
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...845...56B" target="_blank">
<i>A Novel Method to Automatically Detect and Measure the Ages of Star Clusters in Nearby Galaxies: Application to the Large Magellanic Cloud</i>
</a>
<br/>
<strong>Bitsakis, T.</strong>; <strong>Bonfini, P.</strong>; <strong>González-Lópezlira, R. A.</strong>; <strong>Ramírez-Siordia, V. H.</strong>; <strong>Bruzual, G.</strong>; Charlot, S.; Maravelias, G.; Zaritsky, D.
<br/>
2017/08, The Astrophysical Journal, 845, 56
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...845...10F" target="_blank">
<i>Strongly Misaligned Triple System in SR 24 Revealed by ALMA</i>
</a>
<br/>
Fernández-López, M.; <strong>Zapata, L. A.</strong>; Gabbasov, R.
<br/>
2017/08, The Astrophysical Journal, 845, 10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...843..153L" target="_blank">
<i>Erratum: “Cloud Structure of Three Galactic Infrared Dark Star-forming Regions from Combining Ground and Space-based Bolometric Observations” (<A href="https://doi.org/10.3847/1538-4357/aa6c67">2017, ApJ, 840, 22</A>)</i>
</a>
<br/>
Lin, Yuxin; Liu, Hauyu Baobab; Dale, James E.; Li, Di; Busquet, Gemma; Zhang, Zhi-Yu; Ginsburg, Adam; <strong>Galván-Madrid, Roberto</strong>; Kovács, Attila; Koch, Eric; Qian, Lei; Wang, Ke; Longmore, Steve; Chen, Huei-Ru; Walker, Daniel
<br/>
2017/07, The Astrophysical Journal, 843, 153
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...843...99H" target="_blank">
<i>High-resolution Observations of the Massive Protostar in IRAS 18566+0408</i>
</a>
<br/>
Hofner, P.; Cesaroni, R.; <strong>Kurtz, S.</strong>; Rosero, V.; Anderson, C.; Furuya, R. S.; Araya, E. D.; Molinari, S.
<br/>
2017/07, The Astrophysical Journal, 843, 99
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...844...44J" target="_blank">
<i>Magnetized Converging Flows toward the Hot Core in the Intermediate/High-mass Star-forming Region NGC 6334 V</i>
</a>
<br/>
Juárez, Carmen; Girart, Josep M.; <strong>Zamora-Avilés, Manuel</strong>; Tang, Ya-Wen; Koch, Patrick M.; Liu, Hauyu Baobab; <strong>Palau, Aina</strong>; <strong>Ballesteros-Paredes, Javier</strong>; Zhang, Qizhou; Qiu, Keping
<br/>
2017/07, The Astrophysical Journal, 844, 44
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...844...48P" target="_blank">
<i>GASP. I. Gas Stripping Phenomena in Galaxies with MUSE</i>
</a>
<br/>
Poggianti, Bianca M.; Moretti, Alessia; Gullieuszik, Marco; <strong>Fritz, Jacopo</strong>; Jaffé, Yara; Bettoni, Daniela; Fasano, Giovanni; Bellhouse, Callum; Hau, George; Vulcani, Benedetta; Biviano, Andrea; Omizzolo, Alessandro; Paccagnella, Angela; D'Onofrio, Mauro; Cava, Antonio; Sheen, Y. -K.; Couch, Warrick; Owers, Matt
<br/>
2017/07, The Astrophysical Journal, 844, 48
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...844...49B" target="_blank">
<i>GASP. II. A MUSE View of Extreme Ram-Pressure Stripping along the Line of Sight: Kinematics of the Jellyfish Galaxy JO201</i>
</a>
<br/>
Bellhouse, C.; Jaffé, Y. L.; Hau, G. K. T.; McGee, S. L.; Poggianti, B. M.; Moretti, A.; Gullieuszik, M.; Bettoni, D.; Fasano, G.; D'Onofrio, M.; <strong>Fritz, J.</strong>; Omizzolo, A.; Sheen, Y. -K.; Vulcani, B.
<br/>
2017/07, The Astrophysical Journal, 844, 49
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.469..579B" target="_blank">
<i>A WISE-based search for debris discs amongst M dwarfs in nearby, young, moving groups</i>
</a>
<br/>
<strong>Binks, A. S.</strong>; Jeffries, R. D.
<br/>
2017/07, Monthly Notices of the Royal Astronomical Society, 469, 579
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...843....9A" target="_blank">
<i>Welcome to the Twilight Zone: The Mid-infrared Properties of Post-starburst Galaxies</i>
</a>
<br/>
Alatalo, Katherine; <strong>Bitsakis, Theodoros</strong>; Lanz, Lauranne; Lacy, Mark; Brown, Michael J. I.; French, K. Decker; Ciesla, Laure; Appleton, Philip N.; Beaton, Rachael L.; Cales, Sabrina L.; Crossett, Jacob; Falcón-Barroso, Jesús; Kelson, Daniel D.; Kewley, Lisa J.; Kriek, Mariska; Medling, Anne M.; Mulchaey, John S.; Nyland, Kristina; Rich, Jeffrey A.; Urry, C. Meg
<br/>
2017/07, The Astrophysical Journal, 843, 9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...602A..59C" target="_blank">
<i>Chasing discs around O-type (proto)stars: Evidence from ALMA observations</i>
</a>
<br/>
Cesaroni, R.; Sánchez-Monge, Á.; Beltrán, M. T.; Johnston, K. G.; Maud, L. T.; Moscadelli, L.; Mottram, J. C.; Ahmadi, A.; Allen, V.; Beuther, H.; Csengeri, T.; Etoka, S.; Fuller, G. A.; Galli, D.; <strong>Galván-Madrid, R.</strong>; Goddi, C.; Henning, T.; Hoare, M. G.; Klaassen, P. D.; Kuiper, R.; <span id="2017A&A...602A..59C.authors" style="display: none;">Kumar, M. S. N.; Lumsden, S.; Peters, T.; Rivilla, V. M.; Schilke, P.; Testi, L.; van der Tak, F.; Vig, S.; Walmsley, C. M.; Zinnecker, H.</span><span id="2017A&A...602A..59C.button"></span>
<script>
toggleAuthors('2017A&A...602A..59C', 30, 0);
</script>

<br/>
2017/06, Astronomy and Astrophysics, 602, A59
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.467.4951L" target="_blank">
<i>Star formation driven galactic winds in UGC 10043</i>
</a>
<br/>
López-Cobá, C.; Sánchez, S. F.; Moiseev, A. V.; Oparin, D. V.; <strong>Bitsakis, T.</strong>; Cruz-González, I.; Morisset, C.; Galbany, L.; Bland-Hawthorn, J.; Roth, M. M.; Dettmar, R. -J.; Bomans, D. J.; González Delgado, Rosa M.; Cano-Díaz, M.; Marino, R. A.; Kehrig, C.; Monreal Ibero, A.; Abril-Melgarejo, V.
<br/>
2017/06, Monthly Notices of the Royal Astronomical Society, 467, 4951
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...842...92G" target="_blank">
<i>Thermal Feedback in the High-mass Star- and Cluster-forming Region W51</i>
</a>
<br/>
Ginsburg, Adam; Goddi, Ciriaco; Kruijssen, J. M. Diederik; Bally, John; Smith, Rowan; <strong>Galván-Madrid, Roberto</strong>; Mills, Elisabeth A. C.; Wang, Ke; Dale, James E.; Darling, Jeremy; Rosolowsky, Erik; <strong>Loughnane, Robert</strong>; Testi, Leonardo; Bastian, Nate
<br/>
2017/06, The Astrophysical Journal, 842, 92
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...602A..19L" target="_blank">
<i>A concordant scenario to explain FU Orionis from deep centimeter and millimeter interferometric observations</i>
</a>
<br/>
Liu, Hauyu Baobab; Vorobyov, Eduard I.; Dong, Ruobing; Dunham, Michael M.; Takami, Michihiro; <strong>Galván-Madrid, Roberto</strong>; Hashimoto, Jun; Kóspál, Ágnes; Henning, Thomas; Tamura, Motohide; <strong>Rodríguez, Luis F.</strong>; Hirano, Naomi; Hasegawa, Yasuhiro; Fukagawa, Misato; <strong>Carrasco-Gonzalez, Carlos</strong>; Tazzari, Marco
<br/>
2017/06, Astronomy and Astrophysics, 602, A19
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.468....2M" target="_blank">
<i>The dusty tori of nearby QSOs as constrained by high-resolution mid-IR observations</i>
</a>
<br/>
<strong>Martínez-Paredes, M.</strong>; Aretxaga, I.; Alonso-Herrero, A.; <strong>González-Martín, O.</strong>; Lopéz-Rodríguez, E.; Ramos Almeida, C.; Asensio Ramos, A.; Diaz Santos, T.; Elitzur, M.; Esquej, P.; Hernán-Caballero, A.; Ichikawa, K.; Nikutta, R.; Packham, C.; Pereira-Santaella, M.; Telesco, C.
<br/>
2017/06, Monthly Notices of the Royal Astronomical Society, 468, 2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ARep...61..487B" target="_blank">
<i>H<SUB>2</SUB>O masers and protoplanetary disk dynamics in IC 1396 N</i>
</a>
<br/>
Bayandina, O. S.; Val'tts, I. E.; <strong>Kurtz, S. E.</strong>; Rudnitskij, G. M.; Alakoz, A. V.
<br/>
2017/06, Astronomy Reports, 61, 487
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...602A..65H" target="_blank">
<i>X-ray variability of Seyfert 1.8/1.9 galaxies</i>
</a>
<br/>
Hernández-García, L.; Masegosa, J.; <strong>González-Martín, O.</strong>; Márquez, I.; Guainazzi, M.; Panessa, F.
<br/>
2017/06, Astronomy and Astrophysics, 602, A65
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...601A..68P" target="_blank">
<i>Deep into the Water Fountains. The case of IRAS 18043-2116</i>
</a>
<br/>
<strong>Pérez-Sánchez, A. F.</strong>; Tafoya, D.; García López, R.; Vlemmings, W.; <strong>Rodríguez, L. F.</strong>
<br/>
2017/05, Astronomy and Astrophysics, 601, A68
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...840...36O" target="_blank">
<i>Star Formation Under the Outflow: The Discovery of a Non-thermal Jet from OMC-2 FIR 3 and Its Relationship to the Deeply Embedded FIR 4 Protostar</i>
</a>
<br/>
Osorio, Mayra; Díaz-Rodríguez, Ana K.; Anglada, Guillem; Megeath, S. Thomas; <strong>Rodríguez, Luis F.</strong>; Tobin, John J.; Stutz, Amelia M.; Furlan, Elise; Fischer, William J.; Manoj, P.; Gómez, José F.; González-García, Beatriz; Stanke, Thomas; Watson, Dan M.; <strong>Loinard, Laurent</strong>; Vavrek, Roland; <strong>Carrasco-González, Carlos</strong>
<br/>
2017/05, The Astrophysical Journal, 840, 36
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...840...22L" target="_blank">
<i>Cloud Structure of Three Galactic Infrared Dark Star-forming Regions from Combining Ground- and Space-based Bolometric Observations</i>
</a>
<br/>
Lin, Yuxin; Liu, Hauyu Baobab; Dale, James E.; Li, Di; Busquet, Gemma; Zhang, Zhi-Yu; Ginsburg, Adam; <strong>Galván-Madrid, Roberto</strong>; Kovács, Attila; Koch, Eric; Qian, Lei; Wang, Ke; Longmore, Steve; Chen, Huei-Ru; Walker, Daniel
<br/>
2017/05, The Astrophysical Journal, 840, 22
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.467.2723P" target="_blank">
<i>Complex organic molecules tracing shocks along the outflow cavity in the high-mass protostar IRAS 20126+4104</i>
</a>
<br/>
<strong>Palau, Aina</strong>; Walsh, Catherine; Sánchez-Monge, Álvaro; Girart, Josep M.; Cesaroni, Riccardo; Jiménez-Serra, Izaskun; Fuente, Asunción; <strong>Zapata, Luis A.</strong>; Neri, Roberto
<br/>
2017/05, Monthly Notices of the Royal Astronomical Society, 467, 2723
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.467.1313V" target="_blank">
<i>Hierarchical star cluster assembly in globally collapsing molecular clouds</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; González-Samaniego, Alejandro; <strong>Colín, Pedro</strong>
<br/>
2017/05, Monthly Notices of the Royal Astronomical Society, 467, 1313
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.467L.120M" target="_blank">
<i>The ALMA view of W33A: a spiral filament feeding the candidate disc in MM1-Main</i>
</a>
<br/>
Maud, L. T.; Hoare, M. G.; <strong>Galván-Madrid, R.</strong>; Zhang, Q.; de Wit, W. J.; Keto, E.; Johnston, K. G.; Pineda, J. E.
<br/>
2017/05, Monthly Notices of the Royal Astronomical Society, 467, L120
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...841...37G" target="_blank">
<i>Hints on the Gradual Resizing of the Torus in AGNs through Decomposition of Spitzer/IRS Spectra</i>
</a>
<br/>
<strong>González-Martín, Omaira</strong>; Masegosa, Josefa; Hernán-Caballero, Antonio; Márquez, Isabel; Ramos Almeida, Cristina; Alonso-Herrero, Almudena; Aretxaga, Itziar; Rodríguez-Espinosa, José Miguel; Acosta-Pulido, Jose Antonio; Hernández-García, Lorena; <strong>Esparza-Arredondo, Donaji</strong>; <strong>Martínez-Paredes, Mariela</strong>; <strong>Bonfini, Paolo</strong>; <strong>Pasetto, Alice</strong>; <strong>Dultzin, Deborah</strong>
<br/>
2017/05, The Astrophysical Journal, 841, 37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017AJ....153..221G" target="_blank">
<i>A Search for Water Maser Emission from Brown Dwarfs and Low-luminosity Young Stellar Objects</i>
</a>
<br/>
Gómez, José F.; <strong>Palau, Aina</strong>; Uscanga, Lucero; Manjarrez, Guillermo; Barrado, David
<br/>
2017/05, The Astronomical Journal, 153, 221
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017AJ....153..209R" target="_blank">
<i>JVLA Observations of Young Brown Dwarfs</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Zapata, Luis A.</strong>; <strong>Palau, Aina</strong>
<br/>
2017/05, The Astronomical Journal, 153, 209
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017RMxAA..53...45R" target="_blank">
<i>Limits to the Magnetic Field in the Planetary Nebula NGC 246 from Faraday Rotation</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Carrasco-González, C.; Cantó, J.; Pasetto, A.; Raga, A. C.; Tafoya, D.
<br/>
2017/04, Revista Mexicana de Astronomia y Astrofisica, 53, 45
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...600A..69A" target="_blank">
<i>SWEET-Cat update and FASMA. A new minimization procedure for stellar parameters using high-quality spectra</i>
</a>
<br/>
Andreasen, D. T.; Sousa, S. G.; <strong>Tsantaki, M.</strong>; Teixeira, G. D. C.; Mortier, A.; Santos, N. C.; Suárez-Andrés, L.; Delgado-Mena, E.; Ferreira, A. C. S.
<br/>
2017/04, Astronomy and Astrophysics, 600, A69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...838..148P" target="_blank">
<i>OmegaWINGS: The First Complete Census of Post-starburst Galaxies in Clusters in the Local Universe</i>
</a>
<br/>
Paccagnella, A.; Vulcani, B.; Poggianti, B. M.; <strong>Fritz, J.</strong>; Fasano, G.; Moretti, A.; Jaffé, Yara L.; Biviano, A.; Gullieuszik, M.; Bettoni, D.; Cava, A.; Couch, W.; D'Onofrio, M.
<br/>
2017/04, The Astrophysical Journal, 838, 148
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017PASP..129d4102D" target="_blank">
<i>DustPedia: A Definitive Study of Cosmic Dust in the Local Universe</i>
</a>
<br/>
Davies, J. I.; Baes, M.; Bianchi, S.; Jones, A.; Madden, S.; Xilouris, M.; Bocchio, M.; Casasola, V.; Cassara, L.; Clark, C.; De Looze, I.; Evans, R.; <strong>Fritz, J.</strong>; Galametz, M.; Galliano, F.; Lianou, S.; Mosenkov, A. V.; Smith, M.; Verstocken, S.; Viaene, S.; <span id="2017PASP..129d4102D.authors" style="display: none;">Vika, M.; Wagle, G.; Ysard, N.</span><span id="2017PASP..129d4102D.button"></span>
<script>
toggleAuthors('2017PASP..129d4102D', 23, 0);
</script>

<br/>
2017/04, Publications of the Astronomical Society of the Pacific, 129, 044102
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.466.3353R" target="_blank">
<i>Star formation in AGNs at the hundred parsec scale using MIR high-resolution images</i>
</a>
<br/>
Ruschel-Dutra, Daniel; Rodríguez Espinosa, José Miguel; <strong>González Martín, Omaira</strong>; Pastoriza, Miriani; Riffel, Rogério
<br/>
2017/04, Monthly Notices of the Royal Astronomical Society, 466, 3353
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...838...97M" target="_blank">
<i>Imaging a Central Ionized Component, a Narrow Ring, and the CO Snowline in the Multigapped Disk of HD 169142</i>
</a>
<br/>
Macías, Enrique; Anglada, Guillem; Osorio, Mayra; Torrelles, José M.; <strong>Carrasco-González, Carlos</strong>; Gómez, José F.; <strong>Rodríguez, Luis F.</strong>; <strong>Sierra, Anibal</strong>
<br/>
2017/04, The Astrophysical Journal, 838, 97
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...600L..10C" target="_blank">
<i>ALMA survey of massive cluster progenitors from ATLASGAL. Limited fragmentation at the early evolutionary stage of massive clumps</i>
</a>
<br/>
Csengeri, T.; Bontemps, S.; Wyrowski, F.; Motte, F.; Menten, K. M.; Beuther, H.; Bronfman, L.; Commerçon, B.; Chapillon, E.; Duarte-Cabral, A.; Fuller, G. A.; Henning, Th.; Leurini, S.; Longmore, S.; <strong>Palau, A.</strong>; Peretto, N.; Schuller, F.; Tan, J. C.; Testi, L.; Traficante, A.; <span id="2017A&A...600L..10C.authors" style="display: none;">Urquhart, J. S.</span><span id="2017A&A...600L..10C.button"></span>
<script>
toggleAuthors('2017A&A...600L..10C', 21, 0);
</script>

<br/>
2017/04, Astronomy and Astrophysics, 600, L10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...599A..83M" target="_blank">
<i>Emission line galaxies and active galactic nuclei in WINGS clusters</i>
</a>
<br/>
Marziani, P.; D'Onofrio, M.; Bettoni, D.; Poggianti, B. M.; Moretti, A.; Fasano, G.; <strong>Fritz, J.</strong>; Cava, A.; Varela, J.; Omizzolo, A.
<br/>
2017/03, Astronomy and Astrophysics, 599, A83
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...599A..81M" target="_blank">
<i>OmegaWINGS: spectroscopy in the outskirts of local clusters of galaxies</i>
</a>
<br/>
Moretti, A.; Gullieuszik, M.; Poggianti, B.; Paccagnella, A.; Couch, W. J.; Vulcani, B.; Bettoni, D.; <strong>Fritz, J.</strong>; Cava, A.; Fasano, G.; D'Onofrio, M.; Omizzolo, A.
<br/>
2017/03, Astronomy and Astrophysics, 599, A81
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...599A..64V" target="_blank">
<i>The Herschel Exploitation of Local Galaxy Andromeda (HELGA). VII. A SKIRT radiative transfer model and insights on dust heating</i>
</a>
<br/>
Viaene, S.; Baes, M.; Tamm, A.; Tempel, E.; Bendo, G.; Blommaert, J. A. D. L.; Boquien, M.; Boselli, A.; Camps, P.; Cooray, A.; De Looze, I.; De Vis, P.; Fernández-Ontiveros, J. A.; <strong>Fritz, J.</strong>; Galametz, M.; Gentile, G.; Madden, S.; Smith, M. W. L.; Spinoglio, L.; Verstocken, S.
<br/>
2017/03, Astronomy and Astrophysics, 599, A64
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.465.3741D" target="_blank">
<i>The interstellar medium in Andromeda's dwarf spheroidal galaxies - II. Multiphase gas content and ISM conditions</i>
</a>
<br/>
De Looze, Ilse; Baes, Maarten; Cormier, Diane; Kaneko, Hiroyuki; Kuno, Nario; Young, Lisa; Bendo, George J.; Boquien, Médéric; <strong>Fritz, Jacopo</strong>; Gentile, Gianfranco; Kennicutt, Robert C.; Madden, Suzanne C.; Smith, Matthew W. L.; Wilson, Christine D.
<br/>
2017/03, Monthly Notices of the Royal Astronomical Society, 465, 3741
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.465.3143M" target="_blank">
<i>The challenging task of determining star formation rates: the case of a massive stellar burst in the brightest cluster galaxy of Phoenix galaxy cluster</i>
</a>
<br/>
Mittal, Rupal; McDonald, M.; Whelan, John T.; <strong>Bruzual, Gustavo</strong>
<br/>
2017/03, Monthly Notices of the Royal Astronomical Society, 465, 3143
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...837...60B" target="_blank">
<i>The ALMA View of the OMC1 Explosion in Orion</i>
</a>
<br/>
Bally, John; Ginsburg, Adam; Arce, Hector; Eisner, Josh; Youngblood, Allison; Zapata, Luis; Zinnecker, Hans
<br/>
2017/03, The Astrophysical Journal, 837, 60
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...837..179D" target="_blank">
<i>A Universal Velocity Dispersion Profile for Pressure Supported Systems: Evidence for MONDian Gravity across Seven Orders of Magnitude in Mass</i>
</a>
<br/>
Durazo, R.; Hernandez, X.; <strong>Cervantes Sodi, B.</strong>; Sánchez, S. F.
<br/>
2017/03, The Astrophysical Journal, 837, 179
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.464.3812F" target="_blank">
<i>Variations of the stellar initial mass function in semi-analytical models: implications for the mass assembly and the chemical enrichment of galaxies in the GAEA model</i>
</a>
<br/>
Fontanot, Fabio; De Lucia, Gabriella; Hirschmann, Michaela; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane; Zibetti, Stefano
<br/>
2017/02, Monthly Notices of the Royal Astronomical Society, 464, 3812
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.465..906R" target="_blank">
<i>The complex, dusty narrow-line region of NGC 4388: gas-jet interactions, outflows and extinction revealed by near-IR spectroscopy</i>
</a>
<br/>
Rodríguez-Ardila, A.; Mason, R. E.; Martins, L.; Ramos Almeida, C.; Riffel, R. A.; Riffel, R.; Lira, P.; <strong>González Martín, O.</strong>; Dametto, N. Z.; Flohic, H.; Ho, L. C.; Ruschel-Dutra, D.; Thanjavur, K.; Colina, L.; McDermid, R. M.; Perlman, E.; Winge, C.
<br/>
2017/02, Monthly Notices of the Royal Astronomical Society, 465, 906
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...835..184G" target="_blank">
<i>The Relation between Globular Cluster Systems and Supermassive Black Holes in Spiral Galaxies: The Case Study of NGC 4258</i>
</a>
<br/>
<strong>González-Lópezlira, Rosa A.</strong>; <strong>Lomelí-Núñez, Luis</strong>; Álamo-Martínez, Karla; Órdenes-Briceño, Yasna; <strong>Loinard, Laurent</strong>; Georgiev, Iskren Y.; Muñoz, Roberto P.; Puzia, Thomas H.; <strong>Bruzual A., Gustavo</strong>; Gwyn, Stephen
<br/>
2017/02, The Astrophysical Journal, 835, 184
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...836...96M" target="_blank">
<i>Searching for Compact Radio Sources Associated with UCHII Regions</i>
</a>
<br/>
Masqué, Josep M.; <strong>Rodríguez, Luis F.</strong>; Trinidad, Miguel A.; <strong>Kurtz, Stan</strong>; Dzib, Sergio A.; Rodríguez-Rico, Carlos A.; <strong>Loinard, Laurent</strong>
<br/>
2017/02, The Astrophysical Journal, 836, 96
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...836..133Z" target="_blank">
<i>Molecular Outflows: Explosive versus Protostellar</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Schmid-Burgk, Johannes; <strong>Rodríguez, Luis F.</strong>; <strong>Palau, Aina</strong>; <strong>Loinard, Laurent</strong>
<br/>
2017/02, The Astrophysical Journal, 836, 133
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...597A..99W" target="_blank">
<i>ALMA Compact Array observations of the Fried Egg nebula. Evidence for large-scale asymmetric mass-loss from the yellow hypergiant IRAS 17163-3907</i>
</a>
<br/>
Wallström, S. H. J.; Lagadec, E.; Muller, S.; Black, J. H.; Cox, N. L. J.; <strong>Galván-Madrid, R.</strong>; Justtanont, K.; Longmore, S.; Olofsson, H.; Oudmaijer, R. D.; Quintana-Lacaci, G.; Szczerba, R.; Vlemmings, W.; van Winckel, H.; Zijlstra, A.
<br/>
2017/01, Astronomy and Astrophysics, 597, A99
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...597A.130B" target="_blank">
<i>The Herschel Virgo Cluster Survey. XX. Dust and gas in the foreground Galactic cirrus</i>
</a>
<br/>
Bianchi, S.; Giovanardi, C.; Smith, M. W. L.; <strong>Fritz, J.</strong>; Davies, J. I.; Haynes, M. P.; Giovanelli, R.; Baes, M.; Bocchio, M.; Boissier, S.; Boquien, M.; Boselli, A.; Casasola, V.; Clark, C. J. R.; De Looze, I.; di Serego Alighieri, S.; Grossi, M.; Jones, A. P.; Hughes, T. M.; Hunt, L. K.; <span id="2017A&A...597A.130B.authors" style="display: none;">Madden, S.; Magrini, L.; Pappalardo, C.; Ysard, N.; Zibetti, S.</span><span id="2017A&A...597A.130B.button"></span>
<script>
toggleAuthors('2017A&A...597A.130B', 25, 0);
</script>

<br/>
2017/01, Astronomy and Astrophysics, 597, A130
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.464..178T" target="_blank">
<i>Erratum: Formation and X-ray emission from hot bubbles in planetary nebulae - I. Hot bubble formation</i>
</a>
<br/>
Toalá, J. A.; <strong>Arthur, S. J.</strong>
<br/>
2017/01, Monthly Notices of the Royal Astronomical Society, 464, 178
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...597A..17H" target="_blank">
<i>A search for pre- and proto-brown dwarfs in the dark cloud Barnard 30 with ALMA</i>
</a>
<br/>
Huélamo, N.; de Gregorio-Monsalvo, I.; <strong>Palau, A.</strong>; Barrado, D.; Bayo, A.; Ruiz, M. T.; <strong>Zapata, L.</strong>; Bouy, H.; Morata, O.; Morales-Calderón, M.; Eiroa, C.; Ménard, F.
<br/>
2017/01, Astronomy and Astrophysics, 597, A17
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...834..141O" target="_blank">
<i>The Gould’s Belt Distances Survey (GOBELINS). I. Trigonometric Parallax Distances and Depth of the Ophiuchus Complex</i>
</a>
<br/>
<strong>Ortiz-León, Gisela N.</strong>; <strong>Loinard, Laurent</strong>; Kounkel, Marina A.; Dzib, Sergio A.; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Torres, Rosa M.; <strong>González-Lópezlira, Rosa A.</strong>; <strong>Pech, Gerardo</strong>; <strong>Rivera, Juana L.</strong>; Hartmann, Lee; Boden, Andrew F.; Evans, Neal J., II; Briceño, Cesar; Tobin, John J.; Galli, Phillip A. B.; Gudehus, Donald
<br/>
2017/01, The Astrophysical Journal, 834, 141
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...834..143O" target="_blank">
<i>The Gould’s Belt Distances Survey (GOBELINS). III. The Distance to the Serpens/Aquila Molecular Complex</i>
</a>
<br/>
<strong>Ortiz-León, Gisela N.</strong>; Dzib, Sergio A.; Kounkel, Marina A.; <strong>Loinard, Laurent</strong>; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Torres, Rosa M.; <strong>Pech, Gerardo</strong>; <strong>Rivera, Juana L.</strong>; Hartmann, Lee; Boden, Andrew F.; Evans, Neal J., II; Briceño, Cesar; Tobin, John J.; Galli, Phillip A. B.
<br/>
2017/01, The Astrophysical Journal, 834, 143
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...834..142K" target="_blank">
<i>The Gould’s Belt Distances Survey (GOBELINS) II. Distances and Structure toward the Orion Molecular Clouds</i>
</a>
<br/>
Kounkel, Marina; Hartmann, Lee; <strong>Loinard, Laurent</strong>; <strong>Ortiz-León, Gisela N.</strong>; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Dzib, Sergio A.; Torres, Rosa M.; <strong>Pech, Gerardo</strong>; Galli, Phillip A. B.; <strong>Rivera, Juana L.</strong>; Boden, Andrew F.; Evans, Neal J., II; Briceño, Cesar; Tobin, John J.
<br/>
2017/01, The Astrophysical Journal, 834, 142
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...834..139D" target="_blank">
<i>Radio Measurements of the Stellar Proper Motions in the Core of the Orion Nebula Cluster</i>
</a>
<br/>
Dzib, Sergio A.; <strong>Loinard, Laurent</strong>; <strong>Rodríguez, Luis F.</strong>; Gómez, Laura; Forbrich, Jan; Menten, Karl M.; Kounkel, Marina A.; Mioduszewski, Amy J.; Hartmann, Lee; Tobin, John J.; <strong>Rivera, Juana L.</strong>
<br/>
2017/01, The Astrophysical Journal, 834, 139
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...597A..74J" target="_blank">
<i>A correlation between chemistry, polarization, and dust properties in the Pipe nebula starless core FeSt 1-457</i>
</a>
<br/>
Juárez, Carmen; Girart, Josep M.; Frau, Pau; <strong>Palau, Aina</strong>; Estalella, Robert; Morata, Oscar; Alves, Felipe O.; Beltrán, Maria T.; Padovani, Marco
<br/>
2017/01, Astronomy and Astrophysics, 597, A74
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017MNRAS.464.1762L" target="_blank">
<i>Infrared polarimetry of Mrk 231: scattering off hot dust grains in the central core</i>
</a>
<br/>
Lopez-Rodriguez, E.; Packham, C.; Jones, T. J.; Siebenmorgen, R.; Roche, P. F.; Levenson, N. A.; Alonso-Herrero, A.; Perlman, E.; Ichikawa, K.; Ramos Almeida, C.; <strong>González-Martín, O.</strong>; Nikutta, R.; <strong>Martinez-Paredez, M.</strong>; Shenoy, D.; Gordon, M. S.; Telesco, C. M.
<br/>
2017/01, Monthly Notices of the Royal Astronomical Society, 464, 1762
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017AJ....153...15B" target="_blank">
<i>EPIC 201702477b: A Transiting Brown Dwarf from K2 in a 41 day Orbit</i>
</a>
<br/>
Bayliss, D.; Hojjatpanah, S.; Santerne, A.; Dragomir, D.; Zhou, G.; Shporer, A.; Colón, K. D.; Almenara, J.; Armstrong, D. J.; Barrado, D.; Barros, S. C. C.; Bento, J.; Boisse, I.; Bouchy, F.; Brown, D. J. A.; Brown, T.; Cameron, A.; Cochran, W. D.; Demangeon, O.; Deleuil, M.; <span id="2017AJ....153...15B.authors" style="display: none;">Díaz, R. F.; Fulton, B.; Horne, K.; Hébrard, G.; Lillo-Box, J.; Lovis, C.; Mawet, D.; Ngo, H.; Osborn, H.; Palle, E.; Petigura, E.; Pollacco, D.; Santos, N.; Sefako, R.; Siverd, R.; Sousa, S. G.; <strong>Tsantaki, M.</strong></span><span id="2017AJ....153...15B.button"></span>
<script>
toggleAuthors('2017AJ....153...15B', 37, 0);
</script>

<br/>
2017/01, The Astronomical Journal, 153, 15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...835...93M" target="_blank">
<i>Removing Biases in Resolved Stellar Mass Maps of Galaxy Disks through Successive Bayesian Marginalization</i>
</a>
<br/>
Martínez-García, Eric E.; <strong>González-Lópezlira, Rosa A.</strong>; Magris C., Gladis; <strong>Bruzual A., Gustavo</strong>
<br/>
2017/01, The Astrophysical Journal, 835, 93
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...835...80C" target="_blank">
<i>Stellar, Gas, and Dark Matter Content of Barred Galaxies</i>
</a>
<br/>
<strong>Cervantes Sodi, Bernardo</strong>
<br/>
2017/01, The Astrophysical Journal, 835, 80
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...834..140R" target="_blank">
<i>The Proper Motions of the Double Radio Source n in the Orion BN/KL Region</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Dzib, Sergio A.; <strong>Loinard, Laurent</strong>; <strong>Zapata, Luis</strong>; Gómez, Laura; Menten, Karl M.; <strong>Lizano, Susana</strong>
<br/>
2017/01, The Astrophysical Journal, 834, 140
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017ApJ...834..138Z" target="_blank">
<i>3.3 CM JVLA Observations of Transitional Disks: Searching for Centimeter Pebbles</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Palau, Aina</strong>
<br/>
2017/01, The Astrophysical Journal, 834, 138
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2017A&A...597A..84F" target="_blank">
<i>Chemical distribution of H II regions towards the Galactic anticentre</i>
</a>
<br/>
<strong>Fernández-Martín, A.</strong>; Pérez-Montero, E.; Vílchez, J. M.; Mampaso, A.
<br/>
2017/01, Astronomy and Astrophysics, 597, A84
</p></li>
</ol>
</div>
<div class="tab-pane" id="2016">
<h4 style="text-indent: 10px;">Publications 2016</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...833..209O" target="_blank">
<i>Dense Core Properties in the Infrared Dark Cloud G14.225-0.506 Revealed by ALMA</i>
</a>
<br/>
Ohashi, Satoshi; Sanhueza, Patricio; Chen, Huei-Ru Vivien; Zhang, Qizhou; Busquet, Gemma; Nakamura, Fumitaka; <strong>Palau, Aina</strong>; Tatematsu, Ken'ichi
<br/>
2016/12, The Astrophysical Journal, 833, 209
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.463.3531G" target="_blank">
<i>The nuclear and extended mid-infrared emission of Seyfert galaxies</i>
</a>
<br/>
García-Bernete, I.; Ramos Almeida, C.; Acosta-Pulido, J. A.; Alonso-Herrero, A.; <strong>González-Martín, O.</strong>; Hernán-Caballero, A.; Pereira-Santaella, M.; Levenson, N. A.; Packham, C.; Perlman, E. S.; Ichikawa, K.; Esquej, P.; Díaz-Santos, T.
<br/>
2016/12, Monthly Notices of the Royal Astronomical Society, 463, 3531
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.463.2405A" target="_blank">
<i>The complex evolutionary paths of local infrared bright galaxies: a high-angular resolution mid-infrared view</i>
</a>
<br/>
Alonso-Herrero, A.; Poulton, R.; Roche, P. F.; Hernán-Caballero, A.; Aretxaga, I.; <strong>Martínez-Paredes, M.</strong>; Ramos Almeida, C.; Pereira-Santaella, M.; Díaz-Santos, T.; Levenson, N. A.; Packham, C.; Colina, L.; Esquej, P.; <strong>González-Martín, O.</strong>; Ichikawa, K.; Imanishi, M.; Rodríguez Espinosa, J. M.; Telesco, C.
<br/>
2016/12, Monthly Notices of the Royal Astronomical Society, 463, 2405
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJS..227...25R" target="_blank">
<i>Weak and Compact Radio Emission in Early High-mass Star-forming Regions. I. VLA Observations</i>
</a>
<br/>
Rosero, V.; Hofner, P.; Claussen, M.; <strong>Kurtz, S.</strong>; Cesaroni, R.; Araya, E. D.; <strong>Carrasco-González, C.</strong>; <strong>Rodríguez, L. F.</strong>; Menten, K. M.; Wyrowski, F.; <strong>Loinard, L.</strong>; Ellingsen, S. P.
<br/>
2016/12, The Astrophysical Journal Supplement Series, 227, 25
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.463.4438T" target="_blank">
<i>Formation and X-ray emission from hot bubbles in planetary nebulae - II. Hot bubble X-ray emission</i>
</a>
<br/>
Toalá, J. A.; <strong>Arthur, S. J.</strong>
<br/>
2016/12, Monthly Notices of the Royal Astronomical Society, 463, 4438
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.463.2864A" target="_blank">
<i>Turbulence in the ionized gas of the Orion nebula</i>
</a>
<br/>
<strong>Arthur, S. J.</strong>; Medina, S. -N. X.; <strong>Henney, W. J.</strong>
<br/>
2016/12, Monthly Notices of the Royal Astronomical Society, 463, 2864
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...833...48L" target="_blank">
<i>Spatial Distribution and Kinematics of the Molecular Material Associated with eta Carinae</i>
</a>
<br/>
<strong>Loinard, Laurent</strong>; Kamiński, Tomasz; Serra, Paolo; Menten, Karl M.; <strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2016/12, The Astrophysical Journal, 833, 48
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...833..113C" target="_blank">
<i>Energy Budget of Forming Clumps in Numerical Simulations of Collapsing Clouds</i>
</a>
<br/>
<strong>Camacho, Vianey</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Gómez, Gilberto C.</strong>; Fall, S. Michael; <strong>Mata-Chávez, M. Dolores</strong>
<br/>
2016/12, The Astrophysical Journal, 833, 113
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.462.2618F" target="_blank">
<i>Investigating the dusty torus of Seyfert galaxies using SOFIA/FORCAST photometry</i>
</a>
<br/>
Fuller, L.; Lopez-Rodriguez, E.; Packham, C.; Ramos-Almeida, C.; Alonso-Herrero, A.; Levenson, N. A.; Radomski, J.; Ichikawa, K.; García-Bernete, I.; <strong>González-Martín, O.</strong>; Díaz-Santos, T.; <strong>Martínez-Paredes, M.</strong>
<br/>
2016/11, Monthly Notices of the Royal Astronomical Society, 462, 2618
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...596L...2S" target="_blank">
<i>Momentum-driven outflow emission from an O-type YSO. Comparing the radio jet with the molecular outflow</i>
</a>
<br/>
Sanna, A.; Moscadelli, L.; Cesaroni, R.; Caratti o Garatti, A.; Goddi, C.; <strong>Carrasco-González, C.</strong>
<br/>
2016/11, Astronomy and Astrophysics, 596, L2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...831..189R" target="_blank">
<i>A Multiwavelength Characterization of Proto-brown-dwarf Candidates in Serpens</i>
</a>
<br/>
Riaz, B.; Vorobyov, E.; Harsono, D.; Caselli, P.; Tikare, K.; <strong>Gonzalez-Martin, O.</strong>
<br/>
2016/11, The Astrophysical Journal, 831, 189
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.462..331S" target="_blank">
<i>Far-reaching dust distribution in galaxy discs</i>
</a>
<br/>
Smith, Matthew W. L.; Eales, Stephen A.; De Looze, Ilse; Baes, Maarten; Bendo, George J.; Bianchi, Simone; Boquien, Médéric; Boselli, Alessandro; Buat, Veronique; Ciesla, Laure; Clemens, Marcel; Clements, David L.; Cooray, Asantha R.; Cortese, Luca; Davies, Jonathan I.; <strong>Fritz, Jacopo</strong>; Gomez, Haley L.; Hughes, Thomas M.; Karczewski, Oskar Ł.; Lu, Nanyao; <span id="2016MNRAS.462..331S.authors" style="display: none;">Oliver, Seb J.; Remy-Ruyer, Aurélie; Spinoglio, Luigi; Viaene, Sebastien</span><span id="2016MNRAS.462..331S.button"></span>
<script>
toggleAuthors('2016MNRAS.462..331S', 24, 0);
</script>

<br/>
2016/10, Monthly Notices of the Royal Astronomical Society, 462, 331
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016RMxAA..52..261F" target="_blank">
<i>The abundance discrepancy factor and t^2 in nebulae: are non-thermal electrons the culprits?</i>
</a>
<br/>
Ferland, G. J.; <strong>Henney, W. J.</strong>; O'Dell, C. R.; Peimbert, M.
<br/>
2016/10, Revista Mexicana de Astronomia y Astrofisica, 52, 261
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...595A..15T" target="_blank">
<i>New T<SUB>eff</SUB> and [Fe/H] spectroscopic calibration for FGK dwarfs and GK giants</i>
</a>
<br/>
Teixeira, G. D. C.; Sousa, S. G.; <strong>Tsantaki, M.</strong>; Monteiro, M. J. P. F. G.; Santos, N. C.; Israelian, G.
<br/>
2016/10, Astronomy and Astrophysics, 595, A15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.462.2033G" target="_blank">
<i>The regulation of the cold neutral gas mass fraction by turbulent motions</i>
</a>
<br/>
<strong>Gazol, A.</strong>; <strong>Villagran, M. A.</strong>
<br/>
2016/10, Monthly Notices of the Royal Astronomical Society, 462, 2033
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016IJMPE..2550084A" target="_blank">
<i>Elastic total cross-sections in an RSIIp scenario</i>
</a>
<br/>
Arceo, R.; Pedraza, Omar; López, L. A.; Valencia-Palomo, L.; González-Espinosa, E.; Leon-Soto, G.; <strong>Kurtz, Stan</strong>
<br/>
2016/10, International Journal of Modern Physics E, 25, 1650084-688
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.462..352G" target="_blank">
<i>SMA observations towards the compact, short-lived bipolar water maser outflow in the LkHα234 region</i>
</a>
<br/>
Girart, J. M.; Torrelles, J. M.; Estalella, R.; Curiel, S.; Anglada, G.; Gómez, J. F.; <strong>Carrasco-González, C.</strong>; Cantó, J.; <strong>Rodríguez, L. F.</strong>; Patel, N. A.; Trinidad, M. A.
<br/>
2016/10, Monthly Notices of the Royal Astronomical Society, 462, 352
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...594A..61W" target="_blank">
<i>Self-similarity in the chemical evolution of galaxies and the delay-time distribution of SNe Ia</i>
</a>
<br/>
Walcher, C. J.; Yates, R. M.; Minchev, I.; Chiappini, C.; Bergemann, M.; <strong>Bruzual, G.</strong>; Charlot, S.; Coelho, P. R. T.; Gallazzi, A.; Martig, M.
<br/>
2016/10, Astronomy and Astrophysics, 594, A61
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...595A..27G" target="_blank">
<i>Toward gas exhaustion in the W51 high-mass protoclusters</i>
</a>
<br/>
Ginsburg, A.; Goss, W. M.; Goddi, C.; <strong>Galván-Madrid, R.</strong>; Dale, J. E.; Bally, J.; Battersby, C. D.; Youngblood, A.; Sankrit, R.; Smith, R.; Darling, J.; Kruijssen, J. M. D.; Liu, H. B.
<br/>
2016/10, Astronomy and Astrophysics, 595, A27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016RMxAA..52..317D" target="_blank">
<i>Deep VLA observations of nearby star forming regions I: Barnard 59 and Lupus 1</i>
</a>
<br/>
Dzib, S. A.; <strong>Loinard, L.</strong>; Medina, S. -N. X.; Rodríguez, L. F.; Mioduszewski, A. J.; Torres, R. M.
<br/>
2016/10, Revista Mexicana de Astronomia y Astrofisica, 52, 317
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.462.1382B" target="_blank">
<i>Asymmetric structure in Sgr A* at 3 mm from closure phase measurements with VLBA, GBT and LMT</i>
</a>
<br/>
Brinkerink, Christiaan D.; Müller, Cornelia; Falcke, Heino; Bower, Geoffrey C.; Krichbaum, Thomas P.; Castillo, Edgar; Deller, Adam T.; Doeleman, Sheperd S.; Fraga-Encinas, Raquel; Goddi, Ciriaco; <strong>Hernández-Gómez, Antonio</strong>; Hughes, David H.; Kramer, Michael; Léon-Tavares, Jonathan; <strong>Loinard, Laurent</strong>; Montaña, Alfredo; Mościbrodzka, Monika; <strong>Ortiz-León, Gisela N.</strong>; Sanchez-Arguelles, David; Tilanus, Remo P. J.; <span id="2016MNRAS.462.1382B.authors" style="display: none;">Wilson, Grant W.; Zensus, J. Anton</span><span id="2016MNRAS.462.1382B.button"></span>
<script>
toggleAuthors('2016MNRAS.462.1382B', 22, 0);
</script>

<br/>
2016/10, Monthly Notices of the Royal Astronomical Society, 462, 1382
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.462.1757G" target="_blank">
<i>Modelling the nebular emission from primeval to present-day star-forming galaxies</i>
</a>
<br/>
Gutkin, Julia; Charlot, Stéphane; <strong>Bruzual, Gustavo</strong>
<br/>
2016/10, Monthly Notices of the Royal Astronomical Society, 462, 1757
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...829...98C" target="_blank">
<i>Cosmological simulations of Milky Way-sized galaxies</i>
</a>
<br/>
<strong>Colín, Pedro</strong>; Avila-Reese, Vladimir; Roca-Fàbrega, Santi; Valenzuela, Octavio
<br/>
2016/10, The Astrophysical Journal, 829, 98
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...830..137A" target="_blank">
<i>After the Interaction: an Efficiently Star-forming Molecular Disk in NGC 5195</i>
</a>
<br/>
Alatalo, Katherine; Aladro, Rebeca; Nyland, Kristina; Aalto, Susanne; <strong>Bitsakis, Theodoros</strong>; Gallagher, John S.; Lanz, Lauranne
<br/>
2016/10, The Astrophysical Journal, 830, 137
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...830..107B" target="_blank">
<i>Variable Radio Emission from the Young Stellar Host of a Hot Jupiter</i>
</a>
<br/>
Bower, Geoffrey C.; <strong>Loinard, Laurent</strong>; Dzib, Sergio; Galli, Phillip A. B.; <strong>Ortiz-León, Gisela N.</strong>; Moutou, Claire; Donati, Jean-Francois
<br/>
2016/10, The Astrophysical Journal, 830, 107
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016AJ....152..101R" target="_blank">
<i>The Radio Jet Associated with the Multiple V380 Ori System</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Yam, J. Omar</strong>; <strong>Carrasco-González, Carlos</strong>; Anglada, Guillem; Trejo, Alfonso
<br/>
2016/10, The Astronomical Journal, 152, 101
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.461.1387R" target="_blank">
<i>Upholding the unified model for active galactic nuclei: VLT/FORS2 spectropolarimetry of Seyfert 2 galaxies</i>
</a>
<br/>
Ramos Almeida, C.; Martínez González, M. J.; Asensio Ramos, A.; Acosta-Pulido, J. A.; Hönig, S. F.; Alonso-Herrero, A.; Tadhunter, C. N.; <strong>González-Martín, O.</strong>
<br/>
2016/09, Monthly Notices of the Royal Astronomical Society, 461, 1387
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.461.1719C" target="_blank">
<i>H-ATLAS: a candidate high redshift cluster/protocluster of star-forming galaxies</i>
</a>
<br/>
Clements, D. L.; Braglia, F.; Petitpas, G.; Greenslade, J.; Cooray, A.; Valiante, E.; De Zotti, G.; O'Halloran, B.; Holdship, J.; Morris, B.; Pérez-Fournon, I.; Herranz, D.; Riechers, D.; Baes, M.; Bremer, M.; Bourne, N.; Dannerbauer, H.; Dariush, A.; Dunne, L.; Eales, S.; <span id="2016MNRAS.461.1719C.authors" style="display: none;"><strong>Fritz, J.</strong>; Gonzalez-Nuevo, J.; Hopwood, R.; Ibar, E.; Ivison, R. J.; Leeuw, L. L.; Maddox, S.; Michałowski, M. J.; Negrello, M.; Omont, A.; Oteo, I.; Serjeant, S.; Valtchanov, I.; Vieira, J. D.; Wardlow, J.; van der Werf, P.</span><span id="2016MNRAS.461.1719C.button"></span>
<script>
toggleAuthors('2016MNRAS.461.1719C', 36, 0);
</script>

<br/>
2016/09, Monthly Notices of the Royal Astronomical Society, 461, 1719
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...829....1M" target="_blank">
<i>Imaging the Photoevaporating Disk and Radio Jet of GM Aur</i>
</a>
<br/>
Macías, Enrique; Anglada, Guillem; Osorio, Mayra; Calvet, Nuria; Torrelles, José M.; Gómez, José F.; Espaillat, Catherine; <strong>Lizano, Susana</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Carrasco-González, Carlos</strong>; <strong>Zapata, Luis</strong>
<br/>
2016/09, The Astrophysical Journal, 829, 1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...829...38M" target="_blank">
<i>A Herschel View of Protoplanetary Disks in the σ Ori Cluster</i>
</a>
<br/>
<strong>Maucó, Karina</strong>; Hernández, Jesús; Calvet, Nuria; <strong>Ballesteros-Paredes, Javier</strong>; Briceño, César; McClure, Melissa; <strong>D'Alessio, Paola</strong>; Anderson, Kassandra; Ali, Babar
<br/>
2016/09, The Astrophysical Journal, 829, 38
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...828...32L" target="_blank">
<i>Cloud Structure of Galactic OB Cluster-forming Regions from Combining Ground- and Space-based Bolometric Observations</i>
</a>
<br/>
Lin, Yuxin; Liu, Hauyu Baobab; Li, Di; Zhang, Zhi-Yu; Ginsburg, Adam; Pineda, Jaime E.; Qian, Lei; <strong>Galván-Madrid, Roberto</strong>; McLeod, Anna Faye; Rosolowsky, Erik; Dale, James E.; Immer, Katharina; Koch, Eric; Longmore, Steve; Walker, Daniel; Testi, Leonardo
<br/>
2016/09, The Astrophysical Journal, 828, 32
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ARep...60..702K" target="_blank">
<i>Analytical methods for measuring the parameters of interstellar gas using methanol observations</i>
</a>
<br/>
Kalenskii, S. V.; <strong>Kurtz, S.</strong>
<br/>
2016/08, Astronomy Reports, 60, 702
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...826..208G" target="_blank">
<i>A Protostellar Jet Emanating from a Hypercompact H II Region</i>
</a>
<br/>
Guzmán, Andrés E.; Garay, Guido; <strong>Rodríguez, Luis F.</strong>; Contreras, Yanett; Dougados, Catherine; Cabrit, Sylvie
<br/>
2016/08, The Astrophysical Journal, 826, 208
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...827..107P" target="_blank">
<i>Mid-J CO Shock Tracing Observations of Infrared Dark Clouds. III. SLED Fitting</i>
</a>
<br/>
Pon, A.; Kaufman, M. J.; Johnstone, D.; Caselli, P.; Fontani, F.; Butler, M. J.; Jiménez-Serra, I.; <strong>Palau, A.</strong>; Tan, J. C.
<br/>
2016/08, The Astrophysical Journal, 827, 107
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...826..201D" target="_blank">
<i>VLBA Determination of the Distance to Nearby Star-forming Regions. VII. Monoceros R2</i>
</a>
<br/>
Dzib, Sergio A.; <strong>Ortiz-León, Gisela N.</strong>; <strong>Loinard, Laurent</strong>; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; Torres, Rosa M.; Deller, Adam
<br/>
2016/08, The Astrophysical Journal, 826, 201
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...592A..71M" target="_blank">
<i>HERschel Observations of Edge-on Spirals (HEROES). III. Dust energy balance study of IC 2531</i>
</a>
<br/>
Mosenkov, Aleksandr V.; Allaert, Flor; Baes, Maarten; Bianchi, Simone; Camps, Peter; De Geyter, Gert; De Looze, Ilse; <strong>Fritz, Jacopo</strong>; Gentile, Gianfranco; Hughes, Thomas M.; Lewis, Fraser; Verstappen, Joris; Verstocken, Sam; Viaene, Sébastien
<br/>
2016/07, Astronomy and Astrophysics, 592, A71
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.459.3677L" target="_blank">
<i>Strong gravitational lensing and the stellar IMF of early-type galaxies</i>
</a>
<br/>
Leier, Dominik; Ferreras, Ignacio; Saha, Prasenjit; Charlot, Stéphane; <strong>Bruzual, Gustavo</strong>; La Barbera, Francesco
<br/>
2016/07, Monthly Notices of the Royal Astronomical Society, 459, 3677
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...825L..16M" target="_blank">
<i>Protoplanetary Disks in the Hostile Environment of Carina</i>
</a>
<br/>
Mesa-Delgado, A.; <strong>Zapata, L.</strong>; <strong>Henney, W. J.</strong>; Puzia, T. H.; Tsamis, Y. G.
<br/>
2016/07, The Astrophysical Journal, 825, L16
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.459.3900D" target="_blank">
<i>The interstellar medium in Andromeda's dwarf spheroidal galaxies - I. Content and origin of the interstellar dust</i>
</a>
<br/>
De Looze, Ilse; Baes, Maarten; Bendo, George J.; <strong>Fritz, Jacopo</strong>; Boquien, Médéric; Cormier, Diane; Gentile, Gianfranco; Kennicutt, Robert C.; Madden, Suzanne C.; Smith, Matthew W. L.; Young, Lisa
<br/>
2016/07, Monthly Notices of the Royal Astronomical Society, 459, 3900
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.459.3460K" target="_blank">
<i>Supernova feedback in molecular clouds: global evolution and dynamics</i>
</a>
<br/>
Körtgen, Bastian; Seifried, Daniel; Banerjee, Robi; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Zamora-Avilés, Manuel</strong>
<br/>
2016/07, Monthly Notices of the Royal Astronomical Society, 459, 3460
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...825L..10O" target="_blank">
<i>A Dwarf Transitional Protoplanetary Disk around XZ Tau B</i>
</a>
<br/>
Osorio, Mayra; Macías, Enrique; Anglada, Guillem; <strong>Carrasco-González, Carlos</strong>; <strong>Galván-Madrid, Roberto</strong>; <strong>Zapata, Luis</strong>; Calvet, Nuria; Gómez, José F.; Nagel, Erick; <strong>Rodríguez, Luis F.</strong>; Torrelles, José M.; Zhu, Zhaohuan
<br/>
2016/07, The Astrophysical Journal, 825, L10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.458.4512G" target="_blank">
<i>The nuclear and integrated far-infrared emission of nearby Seyfert galaxies</i>
</a>
<br/>
García-González, J.; Alonso-Herrero, A.; Hernán-Caballero, A.; Pereira-Santaella, M.; Ramos-Almeida, C.; Acosta-Pulido, J. A.; Díaz-Santos, T.; Esquej, P.; <strong>González-Martín, O.</strong>; Ichikawa, K.; López-Rodríguez, E.; Povic, M.; Roche, P. F.; Sánchez-Portal, M.
<br/>
2016/06, Monthly Notices of the Royal Astronomical Society, 458, 4512
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.459.1946P" target="_blank">
<i>The complex high-mass star-forming region IRAS 15507-5359</i>
</a>
<br/>
Persi, P.; Tapia, M.; Roth, M.; Elia, D.; <strong>López-Vázquez, J. A.</strong>
<br/>
2016/06, Monthly Notices of the Royal Astronomical Society, 459, 1946
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016Natur.534..218T" target="_blank">
<i>Cold, clumpy accretion onto an active supermassive black hole</i>
</a>
<br/>
Tremblay, Grant R.; Oonk, J. B. Raymond; Combes, Françoise; Salomé, Philippe; O'Dea, Christopher P.; Baum, Stefi A.; Voit, G. Mark; Donahue, Megan; McNamara, Brian R.; Davis, Timothy A.; McDonald, Michael A.; Edge, Alastair C.; Clarke, Tracy E.; Galván-Madrid, Roberto; <strong>Bremer, Malcolm N.</strong>; Edwards, Louise O. V.; Fabian, Andrew C.; Hamer, Stephen; Li, Yuan; Maury, Anaëlle; <span id="2016Natur.534..218T.authors" style="display: none;">Russell, Helen R.; Quillen, Alice C.; Urry, C. Megan; Sanders, Jeremy S.; Wise, Michael W.</span><span id="2016Natur.534..218T.button"></span>
<script>
toggleAuthors('2016Natur.534..218T', 25, 0);
</script>

<br/>
2016/06, Nature, 534, 218
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...823L..27H" target="_blank">
<i>An Extremely High Velocity Molecular Jet Surrounded by an Ionized Cavity in the Protostellar Source Serpens SMM1</i>
</a>
<br/>
Hull, Charles L. H.; Girart, Josep M.; Kristensen, Lars E.; Dunham, Michael M.; <strong>Rodríguez-Kamenetzky, Adriana</strong>; <strong>Carrasco-González, Carlos</strong>; Cortés, Paulo C.; Li, Zhi-Yun; Plambeck, Richard L.
<br/>
2016/06, The Astrophysical Journal, 823, L27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.458.3851L" target="_blank">
<i>Mid-infrared imaging- and spectro-polarimetric subarcsecond observations of NGC 1068</i>
</a>
<br/>
Lopez-Rodriguez, E.; Packham, C.; Roche, P. F.; Alonso-Herrero, A.; Díaz-Santos, T.; Nikutta, R.; <strong>González-Martín, O.</strong>; Álvarez, C. A.; Esquej, P.; Espinosa, J. M. Rodríguez; Perlman, E.; Ramos Almeida, C.; Telesco, C. M.
<br/>
2016/06, Monthly Notices of the Royal Astronomical Society, 458, 3851
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...824...94R" target="_blank">
<i>GARROTXA Cosmological Simulations of Milky Way-sized Galaxies: General Properties, Hot-gas Distribution, and Missing Baryons</i>
</a>
<br/>
Roca-Fàbrega, Santi; Valenzuela, Octavio; <strong>Colín, Pedro</strong>; Figueras, Francesca; Krongold, Yair; Velázquez, Héctor; Avila-Reese, Vladimir; Ibarra-Medel, Hector
<br/>
2016/06, The Astrophysical Journal, 824, 94
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...824....7H" target="_blank">
<i>Unveiling the Physics of Low-luminosity AGNs through X-Ray Variability: LINER versus Seyfert 2</i>
</a>
<br/>
Hernández-García, L.; Masegosa, J.; <strong>González-Martín, O.</strong>; Márquez, I.; Perea, J.
<br/>
2016/06, The Astrophysical Journal, 824, 7
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...824...40O" target="_blank">
<i>The Intrinsic Shape of Sagittarius A* at 3.5 mm Wavelength</i>
</a>
<br/>
<strong>Ortiz-León, Gisela N.</strong>; Johnson, Michael D.; Doeleman, Sheperd S.; Blackburn, Lindy; Fish, Vincent L.; <strong>Loinard, Laurent</strong>; Reid, Mark J.; Castillo, Edgar; Chael, Andrew A.; <strong>Hernández-Gómez, Antonio</strong>; Hughes, David H.; León-Tavares, Jonathan; Lu, Ru-Sen; Montaña, Alfredo; Narayanan, Gopal; Rosenfeld, Katherine; Sánchez, David; Schloerb, F. Peter; Shen, Zhi-qiang; Shiokawa, Hotaka; <span id="2016ApJ...824...40O.authors" style="display: none;">SooHoo, Jason; Vertatschitsch, Laura</span><span id="2016ApJ...824...40O.button"></span>
<script>
toggleAuthors('2016ApJ...824...40O', 22, 0);
</script>

<br/>
2016/06, The Astrophysical Journal, 824, 40
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...590A..79D" target="_blank">
<i>A submillimetre search for pre- and proto-brown dwarfs in Chamaeleon II</i>
</a>
<br/>
de Gregorio-Monsalvo, I.; Barrado, D.; Bouy, H.; Bayo, A.; <strong>Palau, A.</strong>; Morales-Calderón, M.; Huélamo, N.; Morata, O.; Merín, B.; Eiroa, C.
<br/>
2016/05, Astronomy and Astrophysics, 590, A79
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...590C...1F" target="_blank">
<i>Resolving the chemical substructure of Orion-KL (Corrigendum)</i>
</a>
<br/>
Feng, S.; Beuther, H.; Henning, Th.; Semenov, D.; <strong>Palau, A.</strong>; Mills, E. A. C.
<br/>
2016/05, Astronomy and Astrophysics, 590, C1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...589A..11P" target="_blank">
<i>The Herschel Virgo Cluster Survey. XIX. Physical properties of low luminosity FIR sources at z &lt; 0.5</i>
</a>
<br/>
Pappalardo, Ciro; Bizzocchi, Luca; <strong>Fritz, Jacopo</strong>; Boselli, Alessandro; Boquien, Mederic; Boissier, Samuel; Baes, Maarten; Ciesla, Laure; Bianchi, Simone; Clemens, Marcel; Viaene, Sebastien; Bendo, George J.; De Looze, Ilse; Smith, Matthew W. L.; Davies, Jonathan
<br/>
2016/05, Astronomy and Astrophysics, 589, A11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.458.2288S" target="_blank">
<i>The dust covering factor in active galactic nuclei</i>
</a>
<br/>
Stalevski, Marko; Ricci, Claudio; Ueda, Yoshihiro; Lira, Paulina; <strong>Fritz, Jacopo</strong>; Baes, Maarten
<br/>
2016/05, Monthly Notices of the Royal Astronomical Society, 458, 2288
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...822L..30F" target="_blank">
<i>Phosphorus-bearing Molecules in Massive Dense Cores</i>
</a>
<br/>
Fontani, F.; Rivilla, V. M.; Caselli, P.; Vasyunin, A.; <strong>Palau, A.</strong>
<br/>
2016/05, The Astrophysical Journal, 822, L30
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...820...90F" target="_blank">
<i>Persistent Asymmetric Structure of Sagittarius A* on Event Horizon Scales</i>
</a>
<br/>
Fish, Vincent L.; Johnson, Michael D.; Doeleman, Sheperd S.; Broderick, Avery E.; Psaltis, Dimitrios; Lu, Ru-Sen; Akiyama, Kazunori; Alef, Walter; Algaba, Juan Carlos; Asada, Keiichi; Beaudoin, Christopher; Bertarini, Alessandra; Blackburn, Lindy; Blundell, Ray; Bower, Geoffrey C.; Brinkerink, Christiaan; Cappallo, Roger; Chael, Andrew A.; Chamberlin, Richard; Chan, Chi-Kwan; <span id="2016ApJ...820...90F.authors" style="display: none;">Crew, Geoffrey B.; Dexter, Jason; Dexter, Matt; <strong>Dzib, Sergio A.</strong>; Falcke, Heino; Freund, Robert; Friberg, Per; Greer, Christopher H.; Gurwell, Mark A.; Ho, Paul T. P.; Honma, Mareki; Inoue, Makoto; Johannsen, Tim; Kim, Junhan; Krichbaum, Thomas P.; Lamb, James; León-Tavares, Jonathan; Loeb, Abraham; <strong>Loinard, Laurent</strong>; MacMahon, David; Marrone, Daniel P.; Moran, James M.; Mościbrodzka, Monika; <strong>Ortiz-León, Gisela N.</strong>; Oyama, Tomoaki; Özel, Feryal; Plambeck, Richard L.; Pradel, Nicolas; Primiani, Rurik A.; Rogers, Alan E. E.; Rosenfeld, Katherine; Rottmann, Helge; Roy, Alan L.; Ruszczyk, Chester; Smythe, Daniel L.; SooHoo, Jason; Spilker, Justin; Stone, Jordan; Strittmatter, Peter; Tilanus, Remo P. J.; Titus, Michael; Vertatschitsch, Laura; Wagner, Jan; Wardle, John F. C.; Weintroub, Jonathan; Woody, David; Wright, Melvyn; Yamaguchi, Paul; Young, André; Young, Ken H.; Zensus, J. Anton; Ziurys, Lucy M.</span><span id="2016ApJ...820...90F.button"></span>
<script>
toggleAuthors('2016ApJ...820...90F', 72, 0);
</script>

<br/>
2016/04, The Astrophysical Journal, 820, 90
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.457.3743D" target="_blank">
<i>Pathways to quiescence: SHARDS view on the star formation histories of massive quiescent galaxies at 1.0 &lt; z &lt; 1.5</i>
</a>
<br/>
Domínguez Sánchez, Helena; Pérez-González, Pablo G.; Esquej, Pilar; Eliche-Moral, M. Carmen; Barro, Guillermo; Cava, Antonio; Koekemoer, Anton M.; Alcalde Pampliega, Belén; Alonso Herrero, Almudena; <strong>Bruzual, Gustavo</strong>; Cardiel, Nicolás; Cenarro, Javier; Ceverino, Daniel; Charlot, Stéphane; Hernán Caballero, Antonio
<br/>
2016/04, Monthly Notices of the Royal Astronomical Society, 457, 3743
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...821...41L" target="_blank">
<i>Detection of Linearly Polarized 6.9 mm Continuum Emission from the Class 0 Young Stellar Object NGC 1333 IRAS4A</i>
</a>
<br/>
Liu, Hauyu Baobab; Lai, Shih-Ping; Hasegawa, Yasuhiro; Hirano, Naomi; Rao, Ramprasad; Li, I. -Hsiu; Fukagawa, Misato; Girart, Josep M.; <strong>Carrasco-González, Carlos</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2016/04, The Astrophysical Journal, 821, 41
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.457.4296W" target="_blank">
<i>A comprehensive comparative test of seven widely used spectral synthesis models against multi-band photometry of young massive-star clusters</i>
</a>
<br/>
Wofford, A.; Charlot, S.; <strong>Bruzual, G.</strong>; Eldridge, J. J.; Calzetti, D.; Adamo, A.; Cignoni, M.; de Mink, S. E.; Gouliermis, D. A.; Grasha, K.; Grebel, E. K.; Lee, J. C.; Östlin, G.; Smith, L. J.; Ubeda, L.; Zackrisson, E.
<br/>
2016/04, Monthly Notices of the Royal Astronomical Society, 457, 4296
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.457.4536W" target="_blank">
<i>Comparing young massive clusters and their progenitor clouds in the Milky Way</i>
</a>
<br/>
Walker, D. L.; Longmore, S. N.; Bastian, N.; Kruijssen, J. M. D.; Rathborne, J. M.; <strong>Galván-Madrid, R.</strong>; Liu, H. B.
<br/>
2016/04, Monthly Notices of the Royal Astronomical Society, 457, 4536
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.457.3801P" target="_blank">
<i>The central parsecs of M87: jet emission and an elusive accretion disc</i>
</a>
<br/>
Prieto, M. A.; Fernández-Ontiveros, J. A.; Markoff, S.; Espada, D.; <strong>González-Martín, O.</strong>
<br/>
2016/04, Monthly Notices of the Royal Astronomical Society, 457, 3801
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...821L..16C" target="_blank">
<i>The VLA View of the HL Tau Disk: Disk Mass, Grain Evolution, and Early Planet Formation</i>
</a>
<br/>
<strong>Carrasco-González, Carlos</strong>; Henning, Thomas; Chandler, Claire J.; Linz, Hendrik; Pérez, Laura; <strong>Rodríguez, Luis F.</strong>; <strong>Galván-Madrid, Roberto</strong>; Anglada, Guillem; Birnstiel, Til; van Boekel, Roy; Flock, Mario; Klahr, Hubert; Macias, Enrique; Menten, Karl; Osorio, Mayra; Testi, Leonardo; Torrelles, José M.; Zhu, Zhaohuan
<br/>
2016/04, The Astrophysical Journal, 821, L16
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...820..139T" target="_blank">
<i>Stable and Unstable Regimes of Mass Accretion onto RW Aur A</i>
</a>
<br/>
Takami, Michihiro; Wei, Yu-Jie; Chou, Mei-Yin; Karr, Jennifer L.; Beck, Tracy L.; Manset, Nadine; Chen, Wen-Ping; Kurosawa, Ryuichi; Fukagawa, Misato; White, Marc; <strong>Galván-Madrid, Roberto</strong>; Liu, Hauyu Baobab; Pyo, Tae-Soo; Donati, Jean-Francois
<br/>
2016/04, The Astrophysical Journal, 820, 139
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...587A...1G" target="_blank">
<i>X-ray long-term variations in the low-luminosity AGN NGC 835 and its circumnuclear emission</i>
</a>
<br/>
<strong>González-Martín, O.</strong>; Hernández-García, L.; Masegosa, J.; Márquez, I.; Rodríguez-Espinosa, J. M.; Acosta-Pulido, J. A.; Alonso-Herrero, A.; Dultzin, D.; Esparza Arredondo, D.
<br/>
2016/03, Astronomy and Astrophysics, 587, A1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016AJ....151...78P" target="_blank">
<i>Jellyfish Galaxy Candidates at Low Redshift</i>
</a>
<br/>
Poggianti, B. M.; Fasano, G.; Omizzolo, A.; Gullieuszik, M.; Bettoni, D.; Moretti, A.; Paccagnella, A.; Jaffé, Y. L.; Vulcani, B.; <strong>Fritz, J.</strong>; Couch, W.; D'Onofrio, M.
<br/>
2016/03, The Astronomical Journal, 151, 78
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.456.3212H" target="_blank">
<i>Erratum: Molecular cloud formation as seen in synthetic H I and molecular gas observations</i>
</a>
<br/>
<strong>Heiner, Jonathan S.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2016/03, Monthly Notices of the Royal Astronomical Society, 456, 3212
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.457..809C" target="_blank">
<i>Is the escape velocity in star clusters linked to extended star formation histories? Using NGC 7252: W3 as a test case</i>
</a>
<br/>
Cabrera-Ziri, I.; Bastian, N.; Hilker, M.; Davies, B.; Schweizer, F.; Kruijssen, J. M. D.; Mejía-Narváez, A.; Niederhofer, F.; Brandt, T. D.; Rejkuba, M.; <strong>Bruzual, G.</strong>; Magris, G.
<br/>
2016/03, Monthly Notices of the Royal Astronomical Society, 457, 809
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...587A..47T" target="_blank">
<i>Two-level hierarchical fragmentation in the northern filament of the Orion Molecular Cloud 1</i>
</a>
<br/>
Teixeira, P. S.; Takahashi, S.; <strong>Zapata, L. A.</strong>; Ho, P. T. P.
<br/>
2016/03, Astronomy and Astrophysics, 587, A47
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...819..139B" target="_blank">
<i>What Is Controlling the Fragmentation in the Infrared Dark Cloud G14.225-0.506?: Different Levels of Fragmentation in Twin Hubs.</i>
</a>
<br/>
Busquet, Gemma; Estalella, Robert; <strong>Palau, Aina</strong>; Liu, Hauyu Baobab; Zhang, Qizhou; Girart, Josep Miquel; de Gregorio-Monsalvo, Itziar; Pillai, Thushara; Anglada, Guillem; Ho, Paul T. P.
<br/>
2016/03, The Astrophysical Journal, 819, 139
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...587A..96P" target="_blank">
<i>Mid-J CO shock tracing observations of infrared dark clouds. II. Low-J CO constraints on excitation, depletion, and kinematics</i>
</a>
<br/>
Pon, A.; Johnstone, D.; Caselli, P.; Fontani, F.; <strong>Palau, A.</strong>; Butler, M. J.; Kaufman, M.; Jiménez-Serra, I.; Tan, J. C.
<br/>
2016/03, Astronomy and Astrophysics, 587, A96
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.456.4305T" target="_blank">
<i>X-ray emission from the Wolf-Rayet bubble NGC 6888 - II. XMM-Newton EPIC observations</i>
</a>
<br/>
Toalá, J. A.; Guerrero, M. A.; Chu, Y. -H.; <strong>Arthur, S. J.</strong>; <strong>Tafoya, D.</strong>; Gruendl, R. A.
<br/>
2016/03, Monthly Notices of the Royal Astronomical Society, 456, 4305
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...819..101G" target="_blank">
<i>The Inner Structure of Dwarf-sized Halos in Warm and Cold Dark Matter Cosmologies</i>
</a>
<br/>
González-Samaniego, A.; Avila-Reese, V.; <strong>Colín, P.</strong>
<br/>
2016/03, The Astrophysical Journal, 819, 101
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...820...19T" target="_blank">
<i>Mapping CO Gas in the GG Tauri A Triple System with 50 au Spatial Resolution</i>
</a>
<br/>
Tang, Ya-Wen; Dutrey, Anne; Guilloteau, Stéphane; Chapillon, Edwige; Pietu, Vincent; Di Folco, Emmanuel; Bary, Jeff; Beck, Tracy; Beust, Hervé; Boehler, Yann; Gueth, Fréderic; Huré, Jean-Marc; Pierens, Arnaud; Simon, Michal
<br/>
2016/03, The Astrophysical Journal, 820, 19
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...587A..78H" target="_blank">
<i>The Lyman alpha reference sample. VII. Spatially resolved Hα kinematics</i>
</a>
<br/>
Herenz, Edmund Christian; Gruyters, Pieter; Orlitova, Ivana; Hayes, Matthew; Östlin, Göran; Cannon, John M.; Roth, Martin M.; Bik, Arjan; Pardy, Stephen; <strong>Otí-Floranes, Héctor</strong>; Mas-Hesse, J. Miguel; Adamo, Angela; Atek, Hakim; Duval, Florent; Guaita, Lucia; Kunth, Daniel; Laursen, Peter; Melinder, Jens; Puschnig, Johannes; Rivera-Thorsen, Thøger E.; <span id="2016A&A...587A..78H.authors" style="display: none;">Schaerer, Daniel; Verhamme, Anne</span><span id="2016A&A...587A..78H.button"></span>
<script>
toggleAuthors('2016A&A...587A..78H', 22, 0);
</script>

<br/>
2016/03, Astronomy and Astrophysics, 587, A78
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...587A..69W" target="_blank">
<i>Ongoing star formation in the protocluster IRAS 22134+5834</i>
</a>
<br/>
Wang, Yuan; Audard, Marc; Fontani, Francesco; Sánchez-Monge, Álvaro; Busquet, Gemma; <strong>Palau, Aina</strong>; Beuther, Henrik; Tan, Jonathan C.; Estalella, Robert; Isella, Andrea; Gueth, Frédéric; Jiménez-Serra, Izaskun
<br/>
2016/03, Astronomy and Astrophysics, 587, A69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...586A..13V" target="_blank">
<i>The bolometric and UV attenuation in normal spiral galaxies of the Herschel Reference Survey</i>
</a>
<br/>
Viaene, S.; Baes, M.; Bendo, G.; Boquien, M.; Boselli, A.; Ciesla, L.; Cortese, L.; De Looze, I.; Eales, S.; <strong>Fritz, J.</strong>; Karczewski, O. Ł.; Madden, S.; Smith, M. W. L.; Spinoglio, L.
<br/>
2016/02, Astronomy and Astrophysics, 586, A13
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...818..116P" target="_blank">
<i>The Gould’s Belt Very Large Array Survey. V. The Perseus Region</i>
</a>
<br/>
<strong>Pech, Gerardo</strong>; <strong>Loinard, Laurent</strong>; Dzib, Sergio A.; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; <strong>Ortiz-León, Gisela N.</strong>; <strong>Rivera, Juana L.</strong>; Torres, Rosa M.; Boden, Andrew F.; Hartmann, Lee; Kounkel, Marina A.; Evans, Neal J., II; Briceño, Cesar; Tobin, John; <strong>Zapata, Luis A.</strong>
<br/>
2016/02, The Astrophysical Journal, 818, 116
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJS..222...18G" target="_blank">
<i>A Catalog of Methanol Masers in Massive Star-forming Regions. III. The Molecular Outflow Sample</i>
</a>
<br/>
Gómez-Ruiz, A. I.; <strong>Kurtz, S. E.</strong>; Araya, E. D.; Hofner, P.; <strong>Loinard, L.</strong>
<br/>
2016/02, The Astrophysical Journal Supplement Series, 222, 18
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...818...27R" target="_blank">
<i>Investigating Particle Acceleration in Protostellar Jets: The Triple Radio Continuum Source in Serpens</i>
</a>
<br/>
<strong>Rodríguez-Kamenetzky, Adriana</strong>; <strong>Carrasco-González, Carlos</strong>; Araudo, Anabella; Torrelles, José M.; Anglada, Guillem; Martí, Josep; <strong>Rodríguez, Luis F.</strong>; Valotto, Carlos
<br/>
2016/02, The Astrophysical Journal, 818, 27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016AN....337...91P" target="_blank">
<i>A possible link between high rotation measure and CSS-GPS sources</i>
</a>
<br/>
Pasetto, A.; Kraus, A.; Mack, K. -H.; Bruni, G.; <strong>Carrasco-González, C.</strong>
<br/>
2016/02, Astronomische Nachrichten, 337, 91
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016A&A...586A.117P" target="_blank">
<i>A study of a sample of high rotation-measure AGNs through multifrequency single-dish observations</i>
</a>
<br/>
Pasetto, Alice; Kraus, Alex; Mack, Karl-Heinz; Bruni, Gabriele; <strong>Carrasco-González, Carlos</strong>
<br/>
2016/02, Astronomy and Astrophysics, 586, A117
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016MNRAS.455..563A" target="_blank">
<i>A mid-infrared spectroscopic atlas of local active galactic nuclei on sub-arcsecond resolution using GTC/CanariCam</i>
</a>
<br/>
Alonso-Herrero, A.; Esquej, P.; Roche, P. F.; Ramos Almeida, C.; <strong>González-Martín, O.</strong>; Packham, C.; Levenson, N. A.; Mason, R. E.; Hernán-Caballero, A.; Pereira-Santaella, M.; Alvarez, C.; Aretxaga, I.; López-Rodríguez, E.; Colina, L.; Díaz-Santos, T.; Imanishi, M.; Rodríguez Espinosa, J. M.; Perlman, E.
<br/>
2016/01, Monthly Notices of the Royal Astronomical Society, 455, 563
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...816L..25P" target="_blank">
<i>Slow Quenching of Star Formation in OMEGAWINGS Clusters: Galaxies in Transition in the Local Universe</i>
</a>
<br/>
Paccagnella, A.; Vulcani, B.; Poggianti, B. M.; Moretti, A.; <strong>Fritz, J.</strong>; Gullieuszik, M.; Couch, W.; Bettoni, D.; Cava, A.; D'Onofrio, M.; Fasano, G.
<br/>
2016/01, The Astrophysical Journal, 816, L25
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ASSP...42..177P" target="_blank">
<i>The Wide-Field Nearby Galaxy-Cluster Survey (WINGS) and Its Extension OMEGAWINGS</i>
</a>
<br/>
Poggianti, B. M.; Fasano, G.; Bettoni, D.; Cava, A.; Couch, W.; D'Onofrio, M.; Dressler, A.; <strong>Fritz, J.</strong>; Kjaergaard, P.; Gullieuszik, M.; Moles, M.; Moretti, A.; Omizzolo, A.; Paccagnella, A.; <strong>Varela, J.</strong>; Vulcani, B.
<br/>
2016/00, The Universe of Digital Sky Surveys, 42, 177
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ASSP...42...85C" target="_blank">
<i>The Environment of Barred Galaxies Revisited</i>
</a>
<br/>
<strong>Cervantes Sodi, B.</strong>; Li, C.; Park, C.; Wang, L.
<br/>
2016/00, The Universe of Digital Sky Surveys, 42, 85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...817...35L" target="_blank">
<i>Vertical Structure of Magnetized Accretion Disks around Young Stars</i>
</a>
<br/>
<strong>Lizano, S.</strong>; <strong>Tapia, C.</strong>; <strong>Boehler, Y.</strong>; <strong>D'Alessio, P.</strong>
<br/>
2016/01, The Astrophysical Journal, 817, 35
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...816...64C" target="_blank">
<i>A Study of Radio Polarization in Protostellar Jets</i>
</a>
<br/>
Cécere, Mariana; Velázquez, Pablo F.; Araudo, Anabella T.; De Colle, Fabio; Esquivel, Alejandro; <strong>Carrasco-González, Carlos</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2016/01, The Astrophysical Journal, 816, 64
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2016ApJ...816L..29L" target="_blank">
<i>Absence of Significant Cool Disks in Young Stellar Objects Exhibiting Repetitive Optical Outbursts</i>
</a>
<br/>
Liu, Hauyu Baobab; <strong>Galván-Madrid, Roberto</strong>; Vorobyov, Eduard I.; Kóspál, Ágnes; <strong>Rodríguez, Luis F.</strong>; Dunham, Michael M.; Hirano, Naomi; Henning, Thomas; Takami, Michihiro; Dong, Ruobing; Hashimoto, Jun; Hasegawa, Yasuhiro; <strong>Carrasco-González, Carlos</strong>
<br/>
2016/01, The Astrophysical Journal, 816, L29
</p></li>
</ol>
</div>
<div class="tab-pane" id="2015">
<h4 style="text-indent: 10px;">Publications 2015</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.454.3577M" target="_blank">
<i>A deep look at the nuclear region of UGC 5101 through high angular resolution mid-IR data with GTC/CanariCam</i>
</a>
<br/>
Martínez-Paredes, M.; Alonso-Herrero, A.; Aretxaga, I.; Ramos Almeida, C.; Hernán-Caballero, A.; <strong>González-Martín, O.</strong>; Pereira-Santaella, M.; Packham, C.; Asensio Ramos, A.; Díaz-Santos, T.; Elitzur, M.; Esquej, P.; García-Bernete, I.; Imanishi, M.; Levenson, N. A.; Rodríguez Espinosa, J. M.
<br/>
2015/12, Monthly Notices of the Royal Astronomical Society, 454, 3577
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.454.3679P" target="_blank">
<i>Sub-arcsec mid-IR observations of NGC 1614: Nuclear star formation or an intrinsically X-ray weak AGN?</i>
</a>
<br/>
Pereira-Santaella, M.; Colina, L.; Alonso-Herrero, A.; Usero, A.; Díaz-Santos, T.; García-Burillo, S.; Alberdi, A.; <strong>Gonzalez-Martin, O.</strong>; Herrero-Illana, R.; Imanishi, M.; Levenson, N. A.; Pérez-Torres, M. A.; Ramos Almeida, C.
<br/>
2015/12, Monthly Notices of the Royal Astronomical Society, 454, 3679
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...815...27K" target="_blank">
<i>Signatures of Star Cluster Formation by Cold Collapse</i>
</a>
<br/>
Kuznetsova, Aleksandra; Hartmann, Lee; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2015/12, The Astrophysical Journal, 815, 27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...815..123D" target="_blank">
<i>Evidence of Short Timescale Flux Density Variations of UC HII Regions in Sgr B2 Main and North</i>
</a>
<br/>
De Pree, C. G.; Peters, T.; Mac Low, M. M.; Wilner, D. J.; Goss, W. M.; <strong>Galván-Madrid, R.</strong>; Keto, E. R.; Klessen, R. S.; Monsrud, A.
<br/>
2015/12, The Astrophysical Journal, 815, 123
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ARep...59..998B" target="_blank">
<i>High resolution OH observations of Extended Green Objects</i>
</a>
<br/>
Bayandina, O. S.; Val'tts, I. E.; <strong>Kurtz, S. E.</strong>
<br/>
2015/11, Astronomy Reports, 59, 998
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJS..221...10A" target="_blank">
<i>Formaldehyde Masers: Exclusive Tracers of High-mass Star Formation</i>
</a>
<br/>
Araya, E. D.; Olmi, L.; Morales Ortiz, J.; Brown, J. E.; Hofner, P.; <strong>Kurtz, S.</strong>; Linz, H.; Creech-Eakman, M. J.
<br/>
2015/11, The Astrophysical Journal Supplement Series, 221, 10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...583A.141V" target="_blank">
<i>The XMM deep survey in the CDF-S. IX. An X-ray outflow in a luminous obscured quasar at z ≈ 1.6</i>
</a>
<br/>
Vignali, C.; Iwasawa, K.; Comastri, A.; Gilli, R.; Lanzuisi, G.; Ranalli, P.; Cappelluti, N.; Mainieri, V.; Georgantopoulos, I.; Carrera, F. J.; <strong>Fritz, J.</strong>; Brusa, M.; Brandt, W. N.; Bauer, F. E.; Fiore, F.; Tombesi, F.
<br/>
2015/11, Astronomy and Astrophysics, 583, A141
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...814...44M" target="_blank">
<i>Proper Motions of the Outer Knots of the HH 80/81/80N Radio-jet</i>
</a>
<br/>
<strong>Masqué, Josep M.</strong>; <strong>Rodríguez, Luis F.</strong>; Araudo, Anabella; Estalella, Robert; <strong>Carrasco-González, Carlos</strong>; Anglada, Guillem; Girart, Josep M.; Osorio, Mayra
<br/>
2015/11, The Astrophysical Journal, 814, 44
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.453.3785P" target="_blank">
<i>Gravity or turbulence? - III. Evidence of pure thermal Jeans fragmentation at ∼0.1 pc scale</i>
</a>
<br/>
<strong>Palau, Aina</strong>; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; Sánchez-Monge, Álvaro; Estalella, Robert; Fall, S. Michael; <strong>Zapata, Luis A.</strong>; <strong>Camacho, Vianey</strong>; Gómez, Laura; <strong>Naranjo-Romero, Raúl</strong>; Busquet, Gemma; Fontani, Francesco
<br/>
2015/11, Monthly Notices of the Royal Astronomical Society, 453, 3785
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...814...15F" target="_blank">
<i>Radio Monitoring of the Periodically Variable IR Source LRLL 54361: No Direct Correlation between the Radio and IR Emissions</i>
</a>
<br/>
Forbrich, Jan; <strong>Rodríguez, Luis F.</strong>; <strong>Palau, Aina</strong>; <strong>Zapata, Luis A.</strong>; Muzerolle, James; Gutermuth, Robert A.
<br/>
2015/11, The Astrophysical Journal, 814, 15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...814...48N" target="_blank">
<i>Hierarchical Gravitational Fragmentation. I. Collapsing Cores within Collapsing Clouds</i>
</a>
<br/>
<strong>Naranjo-Romero, Raúl</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Loughnane, Robert M.</strong>
<br/>
2015/11, The Astrophysical Journal, 814, 48
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.452.3776G" target="_blank">
<i>Herschel-ATLAS: the connection between star formation and AGN activity in radio-loud and radio-quiet active galaxies</i>
</a>
<br/>
Gürkan, G.; Hardcastle, M. J.; Jarvis, M. J.; Smith, D. J. B.; Bourne, N.; Dunne, L.; Maddox, S.; Ivison, R. J.; <strong>Fritz, J.</strong>
<br/>
2015/10, Monthly Notices of the Royal Astronomical Society, 452, 3776
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015AJ....150..108O" target="_blank">
<i>The Nature and Frequency of Outflows from Stars in the Central Orion Nebula Cluster</i>
</a>
<br/>
O'Dell, C. R.; Ferland, G. J.; <strong>Henney, W. J.</strong>; Peimbert, M.; García-Díaz, Ma. T.; Rubin, Robert H.
<br/>
2015/10, The Astronomical Journal, 150, 108
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...582A..18A" target="_blank">
<i>HERschel Observations of Edge-on Spirals (HEROES). II. Tilted-ring modelling of the atomic gas disks</i>
</a>
<br/>
Allaert, F.; Gentile, G.; Baes, M.; De Geyter, G.; Hughes, T. M.; Lewis, F.; Bianchi, S.; De Looze, I.; <strong>Fritz, J.</strong>; Holwerda, B. W.; Verstappen, J.; Viaene, S.
<br/>
2015/10, Astronomy and Astrophysics, 582, A18
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...582A..46W" target="_blank">
<i>Abundance patterns in early-type galaxies: is there a "knee" in the [Fe/H] vs. [α/Fe] relation?</i>
</a>
<br/>
Walcher, C. J.; Coelho, P. R. T.; Gallazzi, A.; <strong>Bruzual, G.</strong>; Charlot, S.; Chiappini, C.
<br/>
2015/10, Astronomy and Astrophysics, 582, A46
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.453.1324B" target="_blank">
<i>STARBENCH: the D-type expansion of an H II region</i>
</a>
<br/>
Bisbas, T. G.; Haworth, T. J.; Williams, R. J. R.; Mackey, J.; Tremblin, P.; Raga, A. C.; <strong>Arthur, S. J.</strong>; Baczynski, C.; Dale, J. E.; Frostholm, T.; Geen, S.; Haugbølle, T.; Hubber, D.; Iliev, I. T.; Kuiper, R.; Rosdahl, J.; Sullivan, D.; Walch, S.; Wünsch, R.
<br/>
2015/10, Monthly Notices of the Royal Astronomical Society, 453, 1324
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...582A..66H" target="_blank">
<i>Massive envelopes and filaments in the NGC 3603 star forming region⋆⋆⋆⋆⋆⋆</i>
</a>
<br/>
Hummel, C. A.; Stanke, T.; <strong>Galván-Madrid, R.</strong>; Koribalski, B. S.
<br/>
2015/10, Astronomy and Astrophysics, 582, A66
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.452.1902L" target="_blank">
<i>Near-infrared polarimetric adaptive optics observations of NGC 1068: a torus created by a hydromagnetic outflow wind</i>
</a>
<br/>
Lopez-Rodriguez, E.; Packham, C.; Jones, T. J.; Nikutta, R.; McMaster, L.; Mason, R. E.; Elvis, M.; Shenoy, D.; Alonso-Herrero, A.; Ramírez, E.; <strong>González Martín, O.</strong>; Hönig, S. F.; Levenson, N. A.; Ramos Almeida, C.; Perlman, E.
<br/>
2015/09, Monthly Notices of the Royal Astronomical Society, 452, 1902
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...811...69N" target="_blank">
<i>An Analytical Model of Interplanetary Coronal Mass Ejection Interactions</i>
</a>
<br/>
Niembro, T.; Cantó, J.; Lara, A.; <strong>González, R. F.</strong>
<br/>
2015/09, The Astrophysical Journal, 811, 69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...581A..11M" target="_blank">
<i>Galaxy luminosity functions in WINGS clusters</i>
</a>
<br/>
Moretti, A.; Bettoni, D.; Poggianti, B. M.; Fasano, G.; Varela, J.; D'Onofrio, M.; Vulcani, B.; Cava, A.; <strong>Fritz, J.</strong>; Couch, W. J.; Moles, M.; Kjærgaard, P.
<br/>
2015/09, Astronomy and Astrophysics, 581, A11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...581A..41G" target="_blank">
<i>OmegaWINGS: OmegaCAM-VST observations of WINGS galaxy clusters</i>
</a>
<br/>
Gullieuszik, M.; Poggianti, B.; Fasano, G.; Zaggia, S.; Paccagnella, A.; Moretti, A.; Bettoni, D.; D'Onofrio, M.; Couch, W. J.; Vulcani, B.; <strong>Fritz, J.</strong>; Omizzolo, A.; Baruffolo, A.; Schipani, P.; Capaccioli, M.; Varela, J.
<br/>
2015/09, Astronomy and Astrophysics, 581, A41
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...581A..71F" target="_blank">
<i>Resolving the chemical substructure of Orion-KL</i>
</a>
<br/>
Feng, S.; Beuther, H.; Henning, Th.; Semenov, D.; <strong>Palau, A.</strong>; Mills, E. A. C.
<br/>
2015/09, Astronomy and Astrophysics, 581, A71
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.452..566B" target="_blank">
<i>Bondi-Hoyle-Littleton accretion and the upper-mass stellar initial mass function</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; Hartmann, Lee W.; <strong>Pérez-Goytia, Nadia</strong>; Kuznetsova, Aleksandra
<br/>
2015/09, Monthly Notices of the Royal Astronomical Society, 452, 566
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.452.1353H" target="_blank">
<i>Molecular cloud formation as seen in synthetic H I and molecular gas observations</i>
</a>
<br/>
<strong>Heiner, Jonathan S.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2015/09, Monthly Notices of the Royal Astronomical Society, 452, 1353
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...811L...4Z" target="_blank">
<i>Origin and Kinematics of the Eruptive Flow from XZ Tau Revealed by ALMA</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Galván-Madrid, Roberto</strong>; <strong>Carrasco-González, Carlos</strong>; Curiel, Salvador; <strong>Palau, Aina</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Kurtz, Stan E.</strong>; <strong>Tafoya, Daniel</strong>; <strong>Loinard, Laurent</strong>
<br/>
2015/09, The Astrophysical Journal, 811, L4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.451.1728D" target="_blank">
<i>Dust energy balance study of two edge-on spiral galaxies in the Herschel-ATLAS survey</i>
</a>
<br/>
De Geyter, Gert; Baes, Maarten; De Looze, Ilse; Bendo, George J.; Bourne, Nathan; Camps, Peter; Cooray, Asantha; De Zotti, Gianfranco; Dunne, Loretta; Dye, Simon; Eales, Steve A.; <strong>Fritz, Jacopo</strong>; Furlanetto, Cristina; Gentile, Gianfranco; Hughes, Thomas M.; Ivison, Rob J.; Maddox, Steve J.; Michałowski, Michał J.; Smith, Matthew W. L.; Valiante, Elisabetta; <span id="2015MNRAS.451.1728D.authors" style="display: none;">Viaene, Sébastien</span><span id="2015MNRAS.451.1728D.button"></span>
<script>
toggleAuthors('2015MNRAS.451.1728D', 21, 0);
</script>

<br/>
2015/08, Monthly Notices of the Royal Astronomical Society, 451, 1728
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.451.2922P" target="_blank">
<i>The galactic branches as a possible evidence for transient spiral arms</i>
</a>
<br/>
<strong>Pérez-Villegas, Angeles</strong>; <strong>Gómez, Gilberto C.</strong>; Pichardo, Bárbara
<br/>
2015/08, Monthly Notices of the Royal Astronomical Society, 451, 2922
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...808L..46F" target="_blank">
<i>First Measurements of <SUP>15</SUP>N Fractionation in N<SUB>2</SUB>H<SUP>+</SUP> toward High-mass Star-forming Cores</i>
</a>
<br/>
Fontani, F.; Caselli, P.; <strong>Palau, A.</strong>; Bizzocchi, L.; Ceccarelli, C.
<br/>
2015/08, The Astrophysical Journal, 808, L46
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...807...55M" target="_blank">
<i>First Detection of Thermal Radiojets in a Sample of Proto-brown Dwarf Candidates</i>
</a>
<br/>
Morata, Oscar; <strong>Palau, Aina</strong>; <strong>González, Ricardo F.</strong>; de Gregorio-Monsalvo, Itziar; Ribas, Álvaro; Perger, Manuel; Bouy, Hervé; Barrado, David; Eiroa, Carlos; Bayo, Amelia; Huélamo, Nuria; Morales-Calderón, María; <strong>Rodríguez, Luís F.</strong>
<br/>
2015/07, The Astrophysical Journal, 807, 55
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...579A..90H" target="_blank">
<i>X-ray spectral variability of Seyfert 2 galaxies</i>
</a>
<br/>
Hernández-García, L.; Masegosa, J.; <strong>González-Martín, O.</strong>; Márquez, I.
<br/>
2015/07, Astronomy and Astrophysics, 579, A90
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...808..105T" target="_blank">
<i>Erratum: “The Free-fall Time of Finite Sheets and Filaments” <A href="/abs/2012ApJ...744..190T">(2012, ApJ, 744, 190)</A></i>
</a>
<br/>
<strong>Toalá, Jesús A.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Gómez, Gilberto C.</strong>
<br/>
2015/07, The Astrophysical Journal, 808, 105
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.451..839D" target="_blank">
<i>Consequences of bursty star formation on galaxy observables at high redshifts</i>
</a>
<br/>
Domínguez, Alberto; Siana, Brian; Brooks, Alyson M.; Christensen, Charlotte R.; <strong>Bruzual, Gustavo</strong>; Stark, Daniel P.; Alavi, Anahita
<br/>
2015/07, Monthly Notices of the Royal Astronomical Society, 451, 839
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.450.3490D" target="_blank">
<i>The number fraction of discs around brown dwarfs in Orion OB1a and the 25 Orionis group</i>
</a>
<br/>
Downes, Juan José; Román-Zúñiga, Carlos; <strong>Ballesteros-Paredes, Javier</strong>; Mateu, Cecilia; Briceño, César; Hernández, Jesús; Petr-Gotzens, Monika G.; Calvet, Nuria; Hartmann, Lee; <strong>Mauco, Karina</strong>
<br/>
2015/07, Monthly Notices of the Royal Astronomical Society, 450, 3490
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.450.2749G" target="_blank">
<i>The star formation history of galaxies: the role of galaxy mass, morphology and environment</i>
</a>
<br/>
Guglielmo, Valentina; Poggianti, Bianca M.; Moretti, Alessia; <strong>Fritz, Jacopo</strong>; Calvi, Rosa; Vulcani, Benedetta; Fasano, Giovanni; Paccagnella, Angela
<br/>
2015/07, Monthly Notices of the Royal Astronomical Society, 450, 2749
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...579A.103V" target="_blank">
<i>NGC 4370: a case study for testing our ability to infer dust distribution and mass in nearby galaxies</i>
</a>
<br/>
Viaene, S.; De Geyter, G.; Baes, M.; <strong>Fritz, J.</strong>; Bendo, G. J.; Boquien, M.; Boselli, A.; Bianchi, S.; Cortese, L.; Côté, P.; Cuillandre, J. -C.; De Looze, I.; di Serego Alighieri, S.; Ferrarese, L.; Gwyn, S. D. J.; Hughes, T. M.; Pappalardo, C.
<br/>
2015/07, Astronomy and Astrophysics, 579, A103
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...807..156E" target="_blank">
<i>The Transitional Disk around IRAS 04125+2902</i>
</a>
<br/>
Espaillat, C.; Andrews, S.; Powell, D.; Feldman, D.; Qi, C.; Wilner, D.; <strong>D'Alessio, P.</strong>
<br/>
2015/07, The Astrophysical Journal, 807, 156
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...807..111C" target="_blank">
<i>Dark Matter Halos of Barred Disk Galaxies</i>
</a>
<br/>
<strong>Cervantes Sodi, Bernardo</strong>; Li, Cheng; Park, Changbom
<br/>
2015/07, The Astrophysical Journal, 807, 111
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...807..119R" target="_blank">
<i>Internal and Relative Motions of the Taurus and Ophiuchus Star-forming Regions</i>
</a>
<br/>
<strong>Rivera, Juana L.</strong>; <strong>Loinard, Laurent</strong>; Dzib, Sergio A.; <strong>Ortiz-León, Gisela N.</strong>; <strong>Rodríguez, Luis F.</strong>; Torres, Rosa M.
<br/>
2015/07, The Astrophysical Journal, 807, 119
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...578A.119G" target="_blank">
<i>A search for water maser emission toward obscured post-AGB star and planetary nebula candidates</i>
</a>
<br/>
Gómez, J. F.; Rizzo, J. R.; Suárez, O.; <strong>Palau, A.</strong>; Miranda, L. F.; Guerrero, M. A.; Ramos-Larios, G.; Torrelles, J. M.
<br/>
2015/06, Astronomy and Astrophysics, 578, A119
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...578A..74G" target="_blank">
<i>Nuclear obscuration in LINERs. Clues from Spitzer/IRS spectra on the Compton thickness and the existence of the dusty torus</i>
</a>
<br/>
<strong>González-Martín, O.</strong>; Masegosa, J.; Márquez, I.; Rodríguez-Espinosa, J. M.; Acosta-Pulido, J. A.; Ramos Almeida, C.; Dultzin, D.; Hernández-García, L.; Ruschel-Dutra, D.; Alonso-Herrero, A.
<br/>
2015/06, Astronomy and Astrophysics, 578, A74
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.449.3927F" target="_blank">
<i>Morphological fractions of galaxies in WINGS clusters: revisiting the morphology-density paradigm</i>
</a>
<br/>
Fasano, G.; Poggianti, B. M.; Bettoni, D.; D'Onofrio, M.; Dressler, A.; Vulcani, B.; Moretti, A.; Gullieuszik, M.; <strong>Fritz, J.</strong>; Omizzolo, A.; Cava, A.; Couch, W. J.; Ramella, M.; Biviano, A.
<br/>
2015/06, Monthly Notices of the Royal Astronomical Society, 449, 3927
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...806L..32G" target="_blank">
<i>Pre- and Post-burst Radio Observations of the Class 0 Protostar HOPS 383 in Orion</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; <strong>Rodríguez, Luis F.</strong>; Liu, Hauyu Baobab; Costigan, Gráinne; <strong>Palau, Aina</strong>; <strong>Zapata, Luis A.</strong>; <strong>Loinard, Laurent</strong>
<br/>
2015/06, The Astrophysical Journal, 806, L32
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...805..125T" target="_blank">
<i>A Sub-arcsecond Survey Toward Class 0 Protostars in Perseus: Searching for Signatures of Protostellar Disks</i>
</a>
<br/>
Tobin, John J.; Looney, Leslie W.; Wilner, David J.; Kwon, Woojin; Chandler, Claire J.; Bourke, Tyler L.; <strong>Loinard, Laurent</strong>; Chiang, Hsin-Fang; Schnee, Scott; Chen, Xuepeng
<br/>
2015/06, The Astrophysical Journal, 805, 125
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.449.1309G" target="_blank">
<i>The nuclear and extended infrared emission of the Seyfert galaxy NGC 2992 and the interacting system Arp 245</i>
</a>
<br/>
García-Bernete, I.; Ramos Almeida, C.; Acosta-Pulido, J. A.; Alonso-Herrero, A.; Sánchez-Portal, M.; Castillo, M.; Pereira-Santaella, M.; Esquej, P.; <strong>González-Martín, O.</strong>; Díaz-Santos, T.; Roche, P.; Fisher, S.; Pović, M.; Pérez García, A. M.; Valtchanov, I.; Packham, C.; Levenson, N. A.
<br/>
2015/05, Monthly Notices of the Royal Astronomical Society, 449, 1309
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...805....9O" target="_blank">
<i>The Gould's Belt Very Large Array Survey. II. The Serpens Region</i>
</a>
<br/>
<strong>Ortiz-León, Gisela N.</strong>; <strong>Loinard, Laurent</strong>; Mioduszewski, Amy J.; Dzib, Sergio A.; <strong>Rodríguez, Luis F.</strong>; <strong>Pech, Gerardo</strong>; <strong>Rivera, Juana L.</strong>; Torres, Rosa M.; Boden, Andrew F.; Hartmann, Lee; Evans, Neal J., II; Briceño, Cesar; Tobin, John; Kounkel, Marina A.; <strong>González-Lópezlira, Rosa A.</strong>
<br/>
2015/05, The Astrophysical Journal, 805, 9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...804L...2S" target="_blank">
<i>The Environment of the Strongest Galactic Methanol Maser</i>
</a>
<br/>
Sanna, A.; Menten, K. M.; <strong>Carrasco-González, C.</strong>; Reid, M. J.; Ellingsen, S. P.; Brunthaler, A.; Moscadelli, L.; Cesaroni, R.; Krishnan, V.
<br/>
2015/05, The Astrophysical Journal, 804, L2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...804...37L" target="_blank">
<i>ALMA Resolves the Spiraling Accretion Flow in the Luminous OB Cluster-forming Region G33.92+0.11</i>
</a>
<br/>
Liu, Hauyu Baobab; <strong>Galván-Madrid, Roberto</strong>; Jiménez-Serra, Izaskun; Román-Zúñiga, Carlos; Zhang, Qizhou; Li, Zhiyun; Chen, Huei-Ru
<br/>
2015/05, The Astrophysical Journal, 804, 37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.449.2598R" target="_blank">
<i>The silicate absorption profile in the interstellar medium towards the heavily obscured nucleus of NGC 4418</i>
</a>
<br/>
Roche, P. F.; Alonso-Herrero, A.; <strong>Gonzalez-Martin, O.</strong>
<br/>
2015/05, Monthly Notices of the Royal Astronomical Society, 449, 2598
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...805...14R" target="_blank">
<i>The Lyman Alpha Reference Sample. V. The Impact of Neutral ISM Kinematics and Geometry on Lyα Escape</i>
</a>
<br/>
Rivera-Thorsen, Thøger E.; Hayes, Matthew; Östlin, Göran; Duval, Florent; Orlitová, Ivana; Verhamme, Anne; Mas-Hesse, J. Miguel; Schaerer, Daniel; Cannon, John M.; <strong>Otí-Floranes, Héctor</strong>; Sandberg, Andreas; Guaita, Lucia; Adamo, Angela; Atek, Hakim; Herenz, E. Christian; Kunth, Daniel; Laursen, Peter; Melinder, Jens
<br/>
2015/05, The Astrophysical Journal, 805, 14
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.448.1494K" target="_blank">
<i>Far-infrared observations of an unbiased sample of gamma-ray burst host galaxies</i>
</a>
<br/>
Kohn, S. A.; Michałowski, M. J.; Bourne, N.; Baes, M.; <strong>Fritz, J.</strong>; Cooray, A.; De Looze, I.; De Zotti, G.; Dannerbauer, H.; Dunne, L.; Dye, S.; Eales, S.; Furlanetto, C.; Gonzalez-Nuevo, J.; Ibar, E.; Ivison, R. J.; Maddox, S. J.; Scott, D.; Smith, D. J. B.; Smith, M. W. L.; <span id="2015MNRAS.448.1494K.authors" style="display: none;">Symeonidis, M.; Valiante, E.</span><span id="2015MNRAS.448.1494K.button"></span>
<script>
toggleAuthors('2015MNRAS.448.1494K', 22, 0);
</script>

<br/>
2015/04, Monthly Notices of the Royal Astronomical Society, 448, 1494
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...803..109H" target="_blank">
<i>Resolving the AGN and Host Emission in the Mid-infrared Using a Model-independent Spectral Decomposition</i>
</a>
<br/>
Hernán-Caballero, Antonio; Alonso-Herrero, Almudena; Hatziminaoglou, Evanthia; Spoon, Henrik W. W.; Ramos Almeida, Cristina; Díaz Santos, Tanio; Hönig, Sebastian F.; <strong>González-Martín, Omaira</strong>; Esquej, Pilar
<br/>
2015/04, The Astrophysical Journal, 803, 109
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015Sci...348..114C" target="_blank">
<i>Observing the onset of outflow collimation in a massive protostar</i>
</a>
<br/>
<strong>Carrasco-González, C.</strong>; Torrelles, J. M.; Cantó, J.; Curiel, S.; Surcis, G.; Vlemmings, W. H. T.; van Langevelde, H. J.; Goddi, C.; Anglada, G.; Kim, S. -W.; Kim, J. -S.; Gómez, J. F.
<br/>
2015/04, Science, 348, 114
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...803...28C" target="_blank">
<i>Simulations of Galaxies Formed in Warm Dark Matter Halos of Masses at the Filtering Scale</i>
</a>
<br/>
<strong>Colín, P.</strong>; Avila-Reese, V.; González-Samaniego, A.; Velázquez, H.
<br/>
2015/04, The Astrophysical Journal, 803, 28
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...802..109M" target="_blank">
<i>The Contribution of Spiral Arms to the Thick Disk Along the Hubble Sequence</i>
</a>
<br/>
Martinez-Medina, L. A.; Pichardo, B.; <strong>Pérez-Villegas, A.</strong>; Moreno, E.
<br/>
2015/04, The Astrophysical Journal, 802, 109
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...576A..51G" target="_blank">
<i>The Lyman alpha reference sample. IV. Morphology at low and high redshift</i>
</a>
<br/>
Guaita, L.; Melinder, J.; Hayes, M.; Östlin, G.; Gonzalez, J. E.; Micheva, G.; Adamo, A.; Mas-Hesse, J. M.; Sandberg, A.; <strong>Otí-Floranes, H.</strong>; Schaerer, D.; Verhamme, A.; Freeland, E.; Orlitová, I.; Laursen, P.; Cannon, J. M.; Duval, F.; Rivera-Thorsen, T.; Herenz, E. C.; Kunth, D.; <span id="2015A&A...576A..51G.authors" style="display: none;">Atek, H.; Puschnig, J.; Gruyters, P.; <strong>Pardy, S. A.</strong></span><span id="2015A&A...576A..51G.button"></span>
<script>
toggleAuthors('2015A&A...576A..51G', 24, 0);
</script>

<br/>
2015/04, Astronomy and Astrophysics, 576, A51
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...801...91D" target="_blank">
<i>The Gould's Belt Very Large Array Survey. IV. The Taurus-Auriga Complex</i>
</a>
<br/>
Dzib, Sergio A.; <strong>Loinard, Laurent</strong>; <strong>Rodríguez, Luis F.</strong>; Mioduszewski, Amy J.; <strong>Ortiz-León, Gisela N.</strong>; Kounkel, Marina A.; <strong>Pech, Gerardo</strong>; <strong>Rivera, Juana L.</strong>; Torres, Rosa M.; Boden, Andrew F.; Hartmann, Lee; Evans, Neal J., II; Briceño, Cesar; Tobin, John
<br/>
2015/03, The Astrophysical Journal, 801, 91
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...575A..87F" target="_blank">
<i>Deuteration and evolution in the massive star formation process. The role of surface chemistry</i>
</a>
<br/>
Fontani, F.; Busquet, G.; <strong>Palau, Aina</strong>; Caselli, P.; Sánchez-Monge, Á.; Tan, J. C.; Audard, M.
<br/>
2015/03, Astronomy and Astrophysics, 575, A87
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...575A..54K" target="_blank">
<i>The SiO outflow from IRAS 17233-3606 at high resolution</i>
</a>
<br/>
Klaassen, P. D.; Johnston, K. G.; Leurini, S.; <strong>Zapata, L. A.</strong>
<br/>
2015/03, Astronomy and Astrophysics, 575, A54
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.447..817B" target="_blank">
<i>Echelle spectroscopy and photoionization modelling of the entire planetary nebula NGC 6210</i>
</a>
<br/>
Bohigas, J.; <strong>Escalante, V.</strong>; Rodríguez, M.; Dufour, R. J.
<br/>
2015/02, Monthly Notices of the Royal Astronomical Society, 447, 817
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.446.3820G" target="_blank">
<i>Chemoarchaeological downsizing in a hierarchical universe: impact of a top-heavy IGIMF</i>
</a>
<br/>
Gargiulo, I. D.; Cora, S. A.; Padilla, N. D.; Muñoz Arancibia, A. M.; Ruiz, A. N.; Orsi, A. A.; Tecce, T. E.; Weidner, C.; <strong>Bruzual, G.</strong>
<br/>
2015/02, Monthly Notices of the Royal Astronomical Society, 446, 3820
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.446.3725T" target="_blank">
<i>Inverse Hubble flows in molecular clouds</i>
</a>
<br/>
Toalá, Jesús A.; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Colín, Pedro</strong>; <strong>Gómez, Gilberto C.</strong>
<br/>
2015/02, Monthly Notices of the Royal Astronomical Society, 446, 3725
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...799..162M" target="_blank">
<i>Detections of Trans-Neptunian Ice in Protoplanetary Disks</i>
</a>
<br/>
McClure, M. K.; Espaillat, C.; Calvet, N.; Bergin, E.; <strong>D'Alessio, P.</strong>; Watson, D. M.; Manoj, P.; Sargent, B.; Cleeves, L. I.
<br/>
2015/02, The Astrophysical Journal, 799, 162
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015A&A...573A.109G" target="_blank">
<i>Hot ammonia around young O-type stars. II. JVLA imaging of highly excited metastable NH<SUB>3</SUB> masers in W51-North</i>
</a>
<br/>
Goddi, C.; Henkel, C.; Zhang, Q.; <strong>Zapata, L.</strong>; Wilson, T. L.
<br/>
2015/01, Astronomy and Astrophysics, 573, A109
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...798L...4M" target="_blank">
<i>The Stellar Initial Mass Function at 0.9 &lt; z &lt; 1.5</i>
</a>
<br/>
Martín-Navarro, Ignacio; Pérez-González, Pablo G.; Trujillo, Ignacio; Esquej, Pilar; Vazdekis, Alexandre; Domínguez Sánchez, Helena; Barro, Guillermo; <strong>Bruzual, Gustavo</strong>; Charlot, Stéphane; Cava, Antonio; Ferreras, Ignacio; Espino, Néstor; La Barbera, Francesco; Koekemoer, Anton M.; Cenarro, A. Javier
<br/>
2015/01, The Astrophysical Journal, 798, L4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...798...52V" target="_blank">
<i>From Blue Star-forming to Red Passive: Galaxies in Transition in Different Environments</i>
</a>
<br/>
Vulcani, Benedetta; Poggianti, Bianca M.; <strong>Fritz, Jacopo</strong>; Fasano, Giovanni; Moretti, Alessia; Calvi, Rosa; Paccagnella, Angela
<br/>
2015/01, The Astrophysical Journal, 798, 52
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015PASP..127...16M" target="_blank">
<i>On the Recovery of Galaxy Properties from SED Fitting Solutions</i>
</a>
<br/>
<strong>Magris C., Gladis</strong>; <strong>Mateu P., Juan</strong>; <strong>Mateu, Cecilia</strong>; <strong>Bruzual A., Gustavo</strong>; <strong>Cabrera-Ziri, Ivan</strong>; <strong>Mejía-Narváez, Alfredo</strong>
<br/>
2015/01, Publications of the Astronomical Society of the Pacific, 127, 16
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015MNRAS.446.1140T" target="_blank">
<i>Low-mass galaxy assembly in simulations: regulation of early star formation by radiation from massive stars</i>
</a>
<br/>
Trujillo-Gomez, Sebastian; Klypin, Anatoly; Colín, Pedro; Ceverino, Daniel; Arraki, Kenza S.; Primack, Joel
<br/>
2015/01, Monthly Notices of the Royal Astronomical Society, 446, 1140
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJS..216...13M" target="_blank">
<i>Leaving the Dark Ages with AMIGA</i>
</a>
<br/>
Manrique, Alberto; Salvador-Solé, Eduard; Juan, Enric; Hatziminaoglou, Evanthia; María Rozas, José; Sagristà, Antoni; Casteels, Kevin; <strong>Bruzual, Gustavo</strong>; Magris, Gladis
<br/>
2015/01, The Astrophysical Journal Supplement Series, 216, 13
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2015ApJ...798..131Z" target="_blank">
<i>Kinematics of the Outflow from the Young Star DG Tau B: Rotation in the Vicinities of an Optical Jet</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Lizano, Susana</strong>; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.; <strong>Loinard, Laurent</strong>; Fernández-López, Manuel; <strong>Tafoya, Daniel</strong>
<br/>
2015/01, The Astrophysical Journal, 798, 131
</p></li>
</ol>
</div>
<div class="tab-pane" id="2014">
<h4 style="text-indent: 10px;">Publications 2014</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.445.3803M" target="_blank">
<i>Ionizing stellar population in the disc of NGC 3310 - II. The Wolf-Rayet population</i>
</a>
<br/>
Miralles-Caballero, D.; Rosales-Ortega, F. F.; Díaz, A. I.; <strong>Otí-Floranes, H.</strong>; Pérez-Montero, E.; Sánchez, S. F.
<br/>
2014/12, Monthly Notices of the Royal Astronomical Society, 445, 3803
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.445.1797M" target="_blank">
<i>Turbulence in simulated H II regions</i>
</a>
<br/>
<strong>Medina, S. -N. X.</strong>; <strong>Arthur, S. J.</strong>; <strong>Henney, W. J.</strong>; Mellema, G.; <strong>Gazol, A.</strong>
<br/>
2014/12, Monthly Notices of the Royal Astronomical Society, 445, 1797
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...797...60M" target="_blank">
<i>Very Large Array and Jansky Very Large Array Observations of the Compact Radio Sources in M8</i>
</a>
<br/>
<strong>Masqué, Josep M.</strong>; Dzib, Sergio; <strong>Rodríguez, Luis F.</strong>
<br/>
2014/12, The Astrophysical Journal, 797, 60
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...797...11O" target="_blank">
<i>The Lyα Reference Sample. I. Survey Outline and First Results for Markarian 259</i>
</a>
<br/>
Östlin, Göran; Hayes, Matthew; Duval, Florent; Sandberg, Andreas; Rivera-Thorsen, Thøger; Marquart, Thomas; Orlitová, Ivana; Adamo, Angela; Melinder, Jens; Guaita, Lucia; Atek, Hakim; Cannon, John M.; Gruyters, Pieter; Herenz, Edmund Christian; Kunth, Daniel; Laursen, Peter; Mas-Hesse, J. Miguel; Micheva, Genoveva; <strong>Otí-Floranes, Héctor</strong>; Pardy, Stephen A.; <span id="2014ApJ...797...11O.authors" style="display: none;">Roth, Martin M.; Schaerer, Daniel; Verhamme, Anne</span><span id="2014ApJ...797...11O.button"></span>
<script>
toggleAuthors('2014ApJ...797...11O', 23, 0);
</script>

<br/>
2014/12, The Astrophysical Journal, 797, 11
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...797..100F" target="_blank">
<i>Expansion of Hydrogen-poor Knots in the Born-again Planetary Nebulae A30 and A78</i>
</a>
<br/>
Fang, X.; Guerrero, M. A.; Marquez-Lugo, R. A.; Toalá, J. A.; <strong>Arthur, S. J.</strong>; Chu, Y. -H.; Blair, W. P.; Gruendl, R. A.; Hamann, W. -R.; Oskinova, L. M.; Todt, H.
<br/>
2014/12, The Astrophysical Journal, 797, 100
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...796..130R" target="_blank">
<i>Weak and Compact Radio Emission in Early Massive Star Formation Regions: An Ionized Jet toward G11.11-0.12P1</i>
</a>
<br/>
Rosero, V.; Hofner, P.; McCoy, M.; <strong>Kurtz, S.</strong>; Menten, K. M.; Wyrowski, F.; Araya, E. D.; <strong>Loinard, L.</strong>; <strong>Carrasco-González, C.</strong>; <strong>Rodríguez, L. F.</strong>; Cesaroni, R.; Ellingsen, S. P.
<br/>
2014/12, The Astrophysical Journal, 796, 130
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...796..117G" target="_blank">
<i>The Slow Ionized Wind and Rotating Disklike System that are Associated with the High-mass Young Stellar Object G345.4938+01.4677</i>
</a>
<br/>
Guzmán, Andrés E.; Garay, Guido; <strong>Rodríguez, Luis F.</strong>; Moran, James; Brooks, Kate J.; Bronfman, Leonardo; Nyman, Lars-Åke; Sanhueza, Patricio; Mardones, Diego
<br/>
2014/12, The Astrophysical Journal, 796, 117
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...572A..63I" target="_blank">
<i>Diversity of chemistry and excitation conditions in the high-mass star forming complex W33</i>
</a>
<br/>
Immer, K.; <strong>Galván-Madrid, R.</strong>; König, C.; Liu, H. B.; Menten, K. M.
<br/>
2014/12, Astronomy and Astrophysics, 572, A63
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.444.3756M" target="_blank">
<i>Analysis of the spiral structure in a simulated galaxy</i>
</a>
<br/>
<strong>Mata-Chávez, M. Dolores</strong>; <strong>Gómez, Gilberto C.</strong>; Puerari, Ivânio
<br/>
2014/11, Monthly Notices of the Royal Astronomical Society, 444, 3756
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.444.2571H" target="_blank">
<i>Binary stars and the UVX in early-type galaxies</i>
</a>
<br/>
Hernández-Pérez, Fabiola; <strong>Bruzual, Gustavo</strong>
<br/>
2014/11, Monthly Notices of the Royal Astronomical Society, 444, 2571
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.444.2251L" target="_blank">
<i>Supersolar metallicity in G0-G3 main-sequence stars with V &lt; 15</i>
</a>
<br/>
López-Valdivia, R.; Bertone, E.; Chávez, M.; <strong>Tapia-Schiavon, C.</strong>; Hernández-Águila, J. B.; Valdés, J. R.; Chavushyan, V.
<br/>
2014/11, Monthly Notices of the Royal Astronomical Society, 444, 2251
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014RMxAA..50..285R" target="_blank">
<i>Radio Continuum Sources associated with the HH 92 and HH 34 Jets</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Reipurth, Bo; Chiang, Hsin-Fang
<br/>
2014/10, Revista Mexicana de Astronomia y Astrofisica, 50, 285
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014Natur.514..600D" target="_blank">
<i>Possible planet formation in the young, low-mass, multiple stellar system GG Tau A</i>
</a>
<br/>
Dutrey, Anne; di Folco, Emmanuel; Guilloteau, Stéphane; <strong>Boehler, Yann</strong>; Bary, Jeff; Beck, Tracy; Beust, Hervé; Chapillon, Edwige; Gueth, Fredéric; Huré, Jean-Marc; Pierens, Arnaud; Piétu, Vincent; Simon, Michal; Tang, Ya-Wen
<br/>
2014/10, Nature, 514, 600
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.444..833P" target="_blank">
<i>IC 348-SMM2E: a Class 0 proto-brown dwarf candidate forming as a scaled-down version of low-mass stars</i>
</a>
<br/>
<strong>Palau, Aina</strong>; <strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Bouy, Hervé; Barrado, David; Morales-Calderón, María; Myers, Philip C.; Chapman, Nicholas; Juárez, Carmen; Li, Di
<br/>
2014/10, Monthly Notices of the Royal Astronomical Society, 444, 833
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.444..217U" target="_blank">
<i>H<SUB>2</SUB>O maser emission associated with the planetary nebula IRAS 16333-4807</i>
</a>
<br/>
Uscanga, L.; Gómez, J. F.; Miranda, L. F.; Boumis, P.; Suárez, O.; Torrelles, J. M.; Anglada, G.; <strong>Tafoya, D.</strong>
<br/>
2014/10, Monthly Notices of the Royal Astronomical Society, 444, 217
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.443.3486T" target="_blank">
<i>Formation and X-ray emission from hot bubbles in planetary nebulae - I. Hot bubble formation</i>
</a>
<br/>
Toalá, J. A.; <strong>Arthur, S. J.</strong>
<br/>
2014/10, Monthly Notices of the Royal Astronomical Society, 443, 3486
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...793...84Z" target="_blank">
<i>An Evolutionary Model for Collapsing Molecular Clouds and their Star Formation Activity. II. Mass Dependence of the Star Formation Rate</i>
</a>
<br/>
<strong>Zamora-Avilés, Manuel</strong>; <strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2014/10, The Astrophysical Journal, 793, 84
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...794..101P" target="_blank">
<i>The Lyman Alpha Reference Sample. III. Properties of the Neutral ISM from GBT and VLA Observations</i>
</a>
<br/>
Pardy, Stephen A.; Cannon, John M.; Östlin, Göran; Hayes, Matthew; Rivera-Thorsen, Thøger; Sandberg, Andreas; Adamo, Angela; Freeland, Emily; Herenz, E. Christian; Guaita, Lucia; Kunth, Daniel; Laursen, Peter; Mas-Hesse, J. M.; Melinder, Jens; Orlitová, Ivana; <strong>Otí-Floranes, Héctor</strong>; Puschnig, Johannes; Schaerer, Daniel; Verhamme, Anne
<br/>
2014/10, The Astrophysical Journal, 794, 101
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...570L...9G" target="_blank">
<i>Constraints on photoevaporation models from (lack of) radio emission in the Corona Australis protoplanetary disks</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; Liu, Hauyu Baobab; Manara, Carlo Felice; Forbrich, Jan; Pascucci, Ilaria; <strong>Carrasco-González, Carlos</strong>; Goddi, Ciriaco; Hasegawa, Yasuhiro; Takami, Michihiro; Testi, Leonardo
<br/>
2014/10, Astronomy and Astrophysics, 570, L9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...570L..14R" target="_blank">
<i>The wonderful complexity of the Mira AB system</i>
</a>
<br/>
Ramstedt, S.; Mohamed, S.; Vlemmings, W. H. T.; Maercker, M.; Montez, R.; Baudry, A.; De Beck, E.; Lindqvist, M.; Olofsson, H.; Humphreys, E. M. L.; Jorissen, A.; Kerschbaum, F.; Mayer, A.; Wittkowski, M.; Cox, N. L. J.; Lagadec, E.; Leal-Ferreira, M. L.; Paladini, C.; <strong>Pérez-Sánchez, A.</strong>; Sacuto, S.
<br/>
2014/10, Astronomy and Astrophysics, 570, L14
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...793L..21R" target="_blank">
<i>An Ionized Outflow from AB Aur, a Herbig Ae Star with a Transitional Disk</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Zapata, Luis A.</strong>; Dzib, Sergio A.; <strong>Ortiz-León, Gisela N.</strong>; <strong>Loinard, Laurent</strong>; Macías, Enrique; Anglada, Guillem
<br/>
2014/09, The Astrophysical Journal, 793, L21
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...793L..19M" target="_blank">
<i>The Behavior of the Pitch Angle of Spiral Arms Depending on Optical Wavelength</i>
</a>
<br/>
Martínez-García, Eric E.; Puerari, Ivânio; Rosales-Ortega, F. F.; <strong>González-Lópezlira, Rosa A.</strong>; Fuentes-Carrera, Isaura; Luna, A.
<br/>
2014/09, The Astrophysical Journal, 793, L19
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...792L..23R" target="_blank">
<i>Discovery of a Companion Candidate in the HD 169142 Transition Disk and the Possibility of Multiple Planet Formation</i>
</a>
<br/>
Reggiani, Maddalena; Quanz, Sascha P.; Meyer, Michael R.; Pueyo, Laurent; Absil, Olivier; Amara, Adam; Anglada, Guillem; Avenhaus, Henning; Girard, Julien H.; <strong>Carrasco Gonzalez, Carlos</strong>; Graham, James; Mawet, Dimitri; Meru, Farzana; Milli, Julien; Osorio, Mayra; Wolff, Schuyler; Torrelles, Jose-Maria
<br/>
2014/09, The Astrophysical Journal, 792, L23
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...793...10T" target="_blank">
<i>Circumbinary Ring, Circumstellar Disks, and Accretion in the Binary System UY Aurigae</i>
</a>
<br/>
Tang, Ya-Wen; Dutrey, Anne; Guilloteau, Stéphane; Piétu, Vincent; Di Folco, Emmanuel; Beck, Tracy; Ho, Paul T. P.; Boehler, Yann; Gueth, Fréderic; Bary, Jeff; Simon, Michal
<br/>
2014/09, The Astrophysical Journal, 793, 10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...569A..92V" target="_blank">
<i>From the ashes: JVLA observations of water fountain nebula candidates show the rebirth of IRAS 18455+0448</i>
</a>
<br/>
Vlemmings, W. H. T.; Amiri, N.; van Langevelde, H. J.; <strong>Tafoya, D.</strong>
<br/>
2014/09, Astronomy and Astrophysics, 569, A92
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.442..995M" target="_blank">
<i>The planetary nebula nature and properties of IRAS 18197-1118</i>
</a>
<br/>
Miranda, L. F.; <strong>Rodríguez, L. F.</strong>; Pereira, C. B.; Vázquez, R.
<br/>
2014/08, Monthly Notices of the Royal Astronomical Society, 442, 995
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...791L..36O" target="_blank">
<i>Imaging the Inner and Outer Gaps of the Pre-transitional Disk of HD 169142 at 7 mm</i>
</a>
<br/>
Osorio, Mayra; Anglada, Guillem; <strong>Carrasco-González, Carlos</strong>; Torrelles, José M.; Macías, Enrique; <strong>Rodríguez, Luis F.</strong>; Gómez, José F.; <strong>D'Alessio, Paola</strong>; Calvet, Nuria; Nagel, Erick; Dent, William R. F.; Quanz, Sascha P.; Reggiani, Maddalena; Mayen-Gijon, Juan M.
<br/>
2014/08, The Astrophysical Journal, 791, L36
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...791...27S" target="_blank">
<i>The Identification of Filaments on Far-infrared and Submillimiter Images: Morphology, Physical Conditions and Relation with Star Formation of Filamentary Structure</i>
</a>
<br/>
Schisano, E.; Rygl, K. L. J.; Molinari, S.; Busquet, G.; Elia, D.; Pestalozzi, M.; Polychroni, D.; Billot, N.; Carey, S.; Paladini, R.; Noriega-Crespo, A.; Moore, T. J. T.; Plume, R.; Glover, S. C. O.; <strong>Vázquez-Semadeni, E.</strong>
<br/>
2014/08, The Astrophysical Journal, 791, 27
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...791..124G" target="_blank">
<i>Filaments in Simulations of Molecular Cloud Formation</i>
</a>
<br/>
<strong>Gómez, Gilberto C.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2014/08, The Astrophysical Journal, 791, 124
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...568A..65F" target="_blank">
<i>The hot core towards the intermediate-mass protostar NGC 7129 FIRS 2. Chemical similarities with Orion KL</i>
</a>
<br/>
Fuente, A.; Cernicharo, J.; Caselli, P.; McCoey, C.; Johnstone, D.; Fich, M.; van Kempen, T.; <strong>Palau, Aina</strong>; Yıldız, U. A.; Tercero, B.; López, A.
<br/>
2014/08, Astronomy and Astrophysics, 568, A65
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.442..148T" target="_blank">
<i>A very young, compact bipolar H<SUB>2</SUB>O maser outflow in the intermediate-mass star-forming LkHα 234 region</i>
</a>
<br/>
Torrelles, J. M.; Curiel, S.; Estalella, R.; Anglada, G.; Gómez, J. F.; Cantó, J.; Patel, N. A.; Trinidad, M. A.; Girart, J. M.; <strong>Carrasco-González, C.</strong>; <strong>Rodríguez, L. F.</strong>
<br/>
2014/07, Monthly Notices of the Royal Astronomical Society, 442, 148
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.441.3696Z" target="_blank">
<i>A spider-like outflow in Barnard 5 - IRS 1: the transition from a collimated jet to a wide-angle outflow?</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Arce, Héctor G.; Brassfield, Erin; Palau, Aina; Patel, Nimesh; Pineda, Jaime E.
<br/>
2014/07, Monthly Notices of the Royal Astronomical Society, 441, 3696
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.441.2754C" target="_blank">
<i>Constraining globular cluster formation through studies of young massive clusters - II. A single stellar population young massive cluster in NGC 34</i>
</a>
<br/>
Cabrera-Ziri, I.; Bastian, N.; Davies, B.; Magris, G.; <strong>Bruzual, G.</strong>; Schweizer, F.
<br/>
2014/07, Monthly Notices of the Royal Astronomical Society, 441, 2754
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...790...80R" target="_blank">
<i>JVLA Observations of IC 348 SW: Compact Radio Sources and their Nature</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Zapata, Luis A.</strong>; <strong>Palau, Aina</strong>
<br/>
2014/07, The Astrophysical Journal, 790, 80
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...789...38G" target="_blank">
<i>The Thermal Pressure Distribution of a Simulated Cold Neutral Medium</i>
</a>
<br/>
<strong>Gazol, Adriana</strong>
<br/>
2014/07, The Astrophysical Journal, 789, 38
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014AJ....148...20R" target="_blank">
<i>The Peculiar Radio Source M17 JVLA 35</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; <strong>Carrasco-González, C.</strong>; Montes, G.; Tapia, M.
<br/>
2014/07, The Astronomical Journal, 148, 20
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...788..162D" target="_blank">
<i>Deep VLA Images of the HH 124 IRS Radio Cluster and Its Surroundings, and a New Determination of the Distance to NGC 2264</i>
</a>
<br/>
<strong>Dzib, Sergio A.</strong>; <strong>Loinard, Laurent</strong>; <strong>Rodríguez, Luis F.</strong>; Galli, Phillip
<br/>
2014/06, The Astrophysical Journal, 788, 162
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.440.2357G" target="_blank">
<i>Testing assumptions and predictions of star formation theories</i>
</a>
<br/>
<strong>González-Samaniego, Alejandro</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>González, Ricardo F.</strong>; Kim, Jongsoo
<br/>
2014/05, Monthly Notices of the Royal Astronomical Society, 440, 2357
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...786...38H" target="_blank">
<i>SMA Millimeter Observations of Hot Molecular Cores</i>
</a>
<br/>
<strong>Hernández-Hernández, Vicente</strong>; <strong>Zapata, Luis</strong>; <strong>Kurtz, Stan</strong>; Garay, Guido
<br/>
2014/05, The Astrophysical Journal, 786, 38
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014RMxAA..50....3R" target="_blank">
<i>New Radio Continuum Observations of the Compact Source Projected Inside NGC 6334A</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Masqué, J. M.; Dzib, S. A.; Loinard, L.; Kurtz, S. E.
<br/>
2014/04, Revista Mexicana de Astronomia y Astrofisica, 50, 3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014RMxAA..50..163G" target="_blank">
<i>Obituary - Paola D'Alessio</i>
</a>
<br/>
<strong>González, R. A.</strong>; Kurtz, S.; Lizano, S.
<br/>
2014/04, Revista Mexicana de Astronomia y Astrofisica, 50, 163
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014RMxAA..50..127T" target="_blank">
<i>Periodic Radio Continuum Emission Associated with the beta Cephei Star V2187 Cyg</i>
</a>
<br/>
Tapia, M.; Rodríguez, L. F.; Tovmassian, G.; Rodríguez-Gómez, V.; González-Buitrago, D.; Zharikov, S.; Ortiz-León, G. N.
<br/>
2014/04, Revista Mexicana de Astronomia y Astrofisica, 50, 127
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...785...58G" target="_blank">
<i>Simulations of Isolated Dwarf Galaxies Formed in Dark Matter Halos with Different Mass Assembly Histories</i>
</a>
<br/>
González-Samaniego, A.; <strong>Colín, P.</strong>; Avila-Reese, V.; Rodríguez-Puebla, A.; Valenzuela, O.
<br/>
2014/04, The Astrophysical Journal, 785, 58
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...785...42P" target="_blank">
<i>Fragmentation of Massive Dense Cores Down to &lt;~ 1000 AU: Relation between Fragmentation and Density Structure</i>
</a>
<br/>
Palau, Aina; Estalella, Robert; Girart, Josep M.; Fuente, Asunción; Fontani, Francesco; Commerçon, Benoit; Busquet, Gemma; Bontemps, Sylvain; Sánchez-Monge, Álvaro; <strong>Zapata, Luis A.</strong>; Zhang, Qizhou; Hennebelle, Patrick; di Francesco, James
<br/>
2014/04, The Astrophysical Journal, 785, 42
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014AJ....147...72L" target="_blank">
<i>SMA Submillimeter Observations of HL Tau: Revealing a Compact Molecular Outflow</i>
</a>
<br/>
<strong>Lumbreras, Alba M.</strong>; <strong>Zapata, Luis A.</strong>
<br/>
2014/04, The Astronomical Journal, 147, 72
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...564A..95P" target="_blank">
<i>Faint disks around classical T Tauri stars: Small but dense enough to form planets</i>
</a>
<br/>
Piétu, V.; Guilloteau, S.; Di Folco, E.; Dutrey, A.; Boehler, Y.
<br/>
2014/04, Astronomy and Astrophysics, 564, A95
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.437.3766M" target="_blank">
<i>Signatures of infall motions in the images of the molecular emission of G31.41+0.31 hot molecular core</i>
</a>
<br/>
Mayen-Gijon, J. M.; Anglada, G.; Osorio, M.; <strong>Rodríguez, L. F.</strong>; <strong>Lizano, S.</strong>; Gómez, J. F.; <strong>Carrasco-González, C.</strong>
<br/>
2014/02, Monthly Notices of the Royal Astronomical Society, 437, 3766
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014MNRAS.437.3803T" target="_blank">
<i>Multi-epoch VLBA H<SUB>2</SUB>O maser observations towards the massive YSOs AFGL 2591 VLA 2 and VLA 3</i>
</a>
<br/>
Torrelles, J. M.; Trinidad, M. A.; Curiel, S.; Estalella, R.; Patel, N. A.; Gómez, J. F.; Anglada, G.; <strong>Carrasco-González, C.</strong>; Cantó, J.; Raga, A.; <strong>Rodríguez, L. F.</strong>
<br/>
2014/02, Monthly Notices of the Royal Astronomical Society, 437, 3803
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...562L...9T" target="_blank">
<i>Submillimeter H<SUB>2</SUB>O masers in water-fountain nebulae</i>
</a>
<br/>
<strong>Tafoya, D.</strong>; Franco-Hernández, R.; Vlemmings, W. H. T.; Pérez-Sánchez, A. F.; Garay, G.
<br/>
2014/02, Astronomy and Astrophysics, 562, L9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014ApJ...780..155L" target="_blank">
<i>Time Monitoring of Radio Jets and Magnetospheres in the Nearby Young Stellar Cluster R Coronae Australis</i>
</a>
<br/>
Liu, Hauyu Baobab; Galván-Madrid, Roberto; Forbrich, Jan; <strong>Rodríguez, Luis F.</strong>; Takami, Michihiro; Costigan, Gráinne; Manara, Carlo Felice; Yan, Chi-Hung; Karr, Jennifer; Chou, Mei-Yin; Ho, Paul T. -P.; Zhang, Qizhou
<br/>
2014/01, The Astrophysical Journal, 780, 155
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...561A.148G" target="_blank">
<i>The mass distribution of clumps within infrared dark clouds. A Large APEX Bolometer Camera study</i>
</a>
<br/>
Gómez, L.; Wyrowski, F.; Schuller, F.; Menten, K. M.; <strong>Ballesteros-Paredes, J.</strong>
<br/>
2014/01, Astronomy and Astrophysics, 561, A148
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2014A&A...561A.105G" target="_blank">
<i>Observations of the early stages in the formation of an LBV shell</i>
</a>
<br/>
<strong>González, Ricardo F.</strong>; Koenigsberger, Gloria
<br/>
2014/01, Astronomy and Astrophysics, 561, A105
</p></li>
</ol>
</div>
<div class="tab-pane" id="2013">
<h4 style="text-indent: 10px;">Publications 2013</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.436.3626A" target="_blank">
<i>Gamma-ray emission from massive stars interacting with active galactic nuclei jets</i>
</a>
<br/>
<strong>Araudo, A. T.</strong>; Bosch-Ramon, V.; Romero, G. E.
<br/>
2013/12, Monthly Notices of the Royal Astronomical Society, 436, 3626
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...779...93T" target="_blank">
<i>VLA and CARMA Observations of Protostars in the Cepheus Clouds: Sub-arcsecond Proto-binaries Formed via Disk Fragmentation</i>
</a>
<br/>
Tobin, John J.; Chandler, Claire J.; Wilner, David J.; Looney, Leslie W.; <strong>Loinard, Laurent</strong>; Chiang, Hsin-Fang; Hartmann, Lee; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; Bourke, Tyler L.; Kwon, Woojin
<br/>
2013/12, The Astrophysical Journal, 779, 93
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...779..121G" target="_blank">
<i>MUSCLE W49: A Multi-Scale Continuum and Line Exploration of the Most Luminous Star Formation Region in the Milky Way. I. Data and the Mass Structure of the Giant Molecular Cloud</i>
</a>
<br/>
Galván-Madrid, R.; Liu, H. B.; Zhang, Z. -Y.; Pineda, J. E.; Peng, T. -C.; Zhang, Q.; Keto, E. R.; Ho, P. T. P.; <strong>Rodríguez, L. F.</strong>; <strong>Zapata, L.</strong>; Peters, T.; De Pree, C. G.
<br/>
2013/12, The Astrophysical Journal, 779, 121
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013A&A...559A..36G" target="_blank">
<i>Discovery of WASP-65b and WASP-75b: Two hot Jupiters without highly inflated radii</i>
</a>
<br/>
<strong>Gómez Maqueo Chew, Y.</strong>; Faedi, F.; Pollacco, D.; Brown, D. J. A.; Doyle, A. P.; Collier Cameron, A.; Gillon, M.; Lendl, M.; Smalley, B.; Triaud, A. H. M. J.; West, R. G.; Wheatley, P. J.; Busuttil, R.; Liebig, C.; Anderson, D. R.; Armstrong, D. J.; Barros, S. C. C.; Bento, J.; Bochinski, J.; Burwitz, V.; <span id="2013A&A...559A..36G.authors" style="display: none;">Delrez, L.; Enoch, B.; Fumel, A.; Haswell, C. A.; Hébrard, G.; Hellier, C.; Holmes, S.; Jehin, E.; Kolb, U.; Maxted, P. F. L.; McCormac, J.; Miller, G. R. M.; Norton, A. J.; Pepe, F.; Queloz, D.; Rodríguez, J.; Ségransan, D.; Skillen, I.; Stassun, K. G.; Udry, S.; Watson, C.</span><span id="2013A&A...559A..36G.button"></span>
<script>
toggleAuthors('2013A&A...559A..36G', 41, 0);
</script>

<br/>
2013/11, Astronomy and Astrophysics, 559, A36
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.435.2604P" target="_blank">
<i>The galactocentric radius dependent upper mass limit of young star clusters: stochastic star formation ruled out</i>
</a>
<br/>
Pflamm-Altenburg, Jan; <strong>González-Lópezlira, Rosa A.</strong>; Kroupa, Pavel
<br/>
2013/11, Monthly Notices of the Royal Astronomical Society, 435, 2604
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...778...72F" target="_blank">
<i>Multiple Monopolar Outflows Driven by Massive Protostars in IRAS 18162-2048</i>
</a>
<br/>
Fernández-López, M.; Girart, J. M.; Curiel, S.; <strong>Zapata, L. A.</strong>; Fonfría, J. P.; Qiu, K.
<br/>
2013/11, The Astrophysical Journal, 778, 72
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013RMxAA..49..345D" target="_blank">
<i>Radio Sources Embedded in the Dense Core B59, the ``Mouthpiece'' of the Pipe Nebula</i>
</a>
<br/>
<strong>Dzib, S. A.</strong>; Rodríguez, L. F.; Araudo, A. T.; Loinard, L.
<br/>
2013/10, Revista Mexicana de Astronomia y Astrofisica, 49, 345
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.435..400U" target="_blank">
<i>ATLASGAL - properties of compact H II regions and their natal clumps</i>
</a>
<br/>
Urquhart, J. S.; Thompson, M. A.; Moore, T. J. T.; Purcell, C. R.; Hoare, M. G.; Schuller, F.; Wyrowski, F.; Csengeri, T.; Menten, K. M.; Lumsden, S. L.; <strong>Kurtz, S.</strong>; Walmsley, C. M.; Bronfman, L.; Morgan, L. K.; Eden, D. J.; Russeil, D.
<br/>
2013/10, Monthly Notices of the Royal Astronomical Society, 435, 400
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...775..114M" target="_blank">
<i>Curved Walls: Grain Growth, Settling, and Composition Patterns in T Tauri Disk Dust Sublimation Fronts</i>
</a>
<br/>
McClure, M. K.; <strong>D'Alessio, P.</strong>; Calvet, N.; Espaillat, C.; Hartmann, L.; Sargent, B.; Watson, D. M.; Ingleby, L.; Hernández, J.
<br/>
2013/10, The Astrophysical Journal, 775, 114
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...775...20A" target="_blank">
<i>The Rich Globular Cluster System of Abell 1689 and the Radial Dependence of the Globular Cluster Formation Efficiency</i>
</a>
<br/>
<strong>Alamo-Martínez, K. A.</strong>; Blakeslee, J. P.; Jee, M. J.; Côté, P.; Ferrarese, L.; <strong>González-Lópezlira, R. A.</strong>; Jordán, A.; Meurer, G. R.; Peng, E. W.; West, M. J.
<br/>
2013/09, The Astrophysical Journal, 775, 20
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...775...63D" target="_blank">
<i>The Gould's Belt Very Large Array Survey. I. The Ophiuchus Complex</i>
</a>
<br/>
<strong>Dzib, Sergio A.</strong>; <strong>Loinard, Laurent</strong>; Mioduszewski, Amy J.; <strong>Rodríguez, Luis F.</strong>; <strong>Ortiz-León, Gisela N.</strong>; <strong>Pech, Gerardo</strong>; <strong>Rivera, Juana L.</strong>; Torres, Rosa M.; Boden, Andrew F.; Hartmann, Lee; Evans, Neal J., II; Briceño, Cesar; Tobin, John
<br/>
2013/09, The Astrophysical Journal, 775, 63
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013A&A...556A..35T" target="_blank">
<i>Rapid angular expansion of the ionized core of CRL 618</i>
</a>
<br/>
Tafoya, D.; <strong>Loinard, L.</strong>; Fonfría, J. P.; Vlemmings, W. H. T.; Martí-Vidal, I.; <strong>Pech, G.</strong>
<br/>
2013/08, Astronomy and Astrophysics, 556, A35
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJS..207...12R" target="_blank">
<i>Methyl Cyanide Observations toward Massive Protostars</i>
</a>
<br/>
Rosero, V.; Hofner, P.; <strong>Kurtz, S.</strong>; Bieging, J.; Araya, E. D.
<br/>
2013/07, The Astrophysical Journal Supplement Series, 207, 12
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...771...48T" target="_blank">
<i>Modeling the Resolved Disk around the Class 0 Protostar L1527</i>
</a>
<br/>
Tobin, John J.; Hartmann, Lee; Chiang, Hsin-Fang; Wilner, David J.; Looney, Leslie W.; <strong>Loinard, Laurent</strong>; Calvet, Nuria; <strong>D'Alessio, Paola</strong>
<br/>
2013/07, The Astrophysical Journal, 771, 48
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013AJ....145..170O" target="_blank">
<i>Studies of NGC 6720 with Calibrated HST/WFC3 Emission-line Filter Images. III. Tangential Motions using AstroDrizzle Images</i>
</a>
<br/>
O'Dell, C. R.; Ferland, G. J.; <strong>Henney, W. J.</strong>; Peimbert, M.
<br/>
2013/06, The Astronomical Journal, 145, 170
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013A&A...554A..35L" target="_blank">
<i>Evidence of a SiO collimated outflow from a massive YSO in IRAS 17233-3606</i>
</a>
<br/>
Leurini, S.; Codella, C.; Gusdorf, A.; <strong>Zapata, L.</strong>; Gómez-Ruiz, A.; Testi, L.; Pillai, T.
<br/>
2013/06, Astronomy and Astrophysics, 554, A35
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...770...85G" target="_blank">
<i>Gas Surface Density, Star Formation Rate Surface Density, and the Maximum Mass of Young Star Clusters in a Disk Galaxy. II. The Grand-design Galaxy M51</i>
</a>
<br/>
<strong>González-Lópezlira, Rosa A.</strong>; Pflamm-Altenburg, Jan; Kroupa, Pavel
<br/>
2013/06, The Astrophysical Journal, 770, 85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.431.2612H" target="_blank">
<i>Revisiting binary stars in population synthesis models</i>
</a>
<br/>
Hernández-Pérez, Fabiola; <strong>Bruzual, Gustavo</strong>
<br/>
2013/05, Monthly Notices of the Royal Astronomical Society, 431, 2612
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.431.1573B" target="_blank">
<i>Probing dust settling in proto-planetary discs with ALMA</i>
</a>
<br/>
Boehler, Y.; Dutrey, A.; Guilloteau, S.; Piétu, V.
<br/>
2013/05, Monthly Notices of the Royal Astronomical Society, 431, 1573
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...769...73M" target="_blank">
<i>Characterizing the Stellar Photospheres and Near-infrared Excesses in Accreting T Tauri Systems</i>
</a>
<br/>
McClure, M. K.; Calvet, N.; Espaillat, C.; Hartmann, L.; Hernández, J.; Ingleby, L.; Luhman, K. L.; <strong>D'Alessio, P.</strong>; Sargent, B.
<br/>
2013/05, The Astrophysical Journal, 769, 73
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...768...79G" target="_blank">
<i>The Homogeneous Study of Transiting Systems (HoSTS). I. The Pilot Study of WASP-13</i>
</a>
<br/>
<strong>Gómez Maqueo Chew, Yilen</strong>; Faedi, Francesca; Cargile, Phillip; Doyle, Amanda P.; Ghezzi, Luan; Sousa, Sérgio; Barros, Susana C. C.; Hebb, Leslie; Cunha, Katia; Schuler, Simon C.; Smith, Verne V.; Collier Cameron, Andrew; Pollacco, Don; Santos, Nuno C.; Smalley, Barry; Stassun, Keivan G.
<br/>
2013/05, The Astrophysical Journal, 768, 79
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013AJ....145...92O" target="_blank">
<i>Studies of NGC 6720 with Calibrated HST/WFC3 Emission-line Filter Images. I. Structure and Evolution</i>
</a>
<br/>
O'Dell, C. R.; Ferland, G. J.; <strong>Henney, W. J.</strong>; Peimbert, M.
<br/>
2013/04, The Astronomical Journal, 145, 92
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013AJ....145...93O" target="_blank">
<i>Studies of NGC 6720 with Calibrated HST/WFC3 Emission-line Filter Images. II. Physical Conditions</i>
</a>
<br/>
O'Dell, C. R.; Ferland, G. J.; <strong>Henney, W. J.</strong>; Peimbert, M.
<br/>
2013/04, The Astronomical Journal, 145, 93
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013RMxAA..49...43N" target="_blank">
<i>The Effect of Sublimation Temperature Dependencies on Disk Walls Around T Tauri Stars</i>
</a>
<br/>
Nagel, E.; <strong>D'Alessio, P.</strong>; Calvet, N.; Espaillat, C.; Trinidad, M. A.
<br/>
2013/04, Revista Mexicana de Astronomia y Astrofisica, 49, 43
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013RMxAA..49...37G" target="_blank">
<i>Exploring a thermal model for the time variability of the radio emission from the CEN 1a system</i>
</a>
<br/>
<strong>González, R. F.</strong>; Rodríguez, L. F.; Cantó, J.
<br/>
2013/04, Revista Mexicana de Astronomia y Astrofisica, 49, 37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.430.3406T" target="_blank">
<i>Chemical abundances in Orion protoplanetary discs: integral field spectroscopy and photoevaporation models of HST 10</i>
</a>
<br/>
Tsamis, Y. G.; <strong>Flores-Fajardo, N.</strong>; <strong>Henney, W. J.</strong>; Walsh, J. R.; Mesa-Delgado, A.
<br/>
2013/04, Monthly Notices of the Royal Astronomical Society, 430, 3406
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.430.3010G" target="_blank">
<i>Comparing gaseous and stellar orbits in a spiral potential</i>
</a>
<br/>
<strong>Gómez, Gilberto C.</strong>; Pichardo, Bárbara; Martos, Marco A.
<br/>
2013/04, Monthly Notices of the Royal Astronomical Society, 430, 3010
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.430.2703C" target="_blank">
<i>Shock dynamics in relativistic jets</i>
</a>
<br/>
Cantó, J.; <strong>Lizano, S.</strong>; Fernández-López, M.; <strong>González, R. F.</strong>; Hernández-Gómez, A.
<br/>
2013/04, Monthly Notices of the Royal Astronomical Society, 430, 2703
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.430.1309T" target="_blank">
<i>Formation and evolution of the water maser outflow event in AFGL 2591 VLA 3-N</i>
</a>
<br/>
Trinidad, M. A.; Curiel, S.; Estalella, R.; Cantó, J.; Raga, A.; Torrelles, J. M.; Patel, N. A.; Gómez, J. F.; Anglada, G.; Carrasco-González, C.; <strong>Rodríguez, L. F.</strong>
<br/>
2013/04, Monthly Notices of the Royal Astronomical Society, 430, 1309
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...767L...2M" target="_blank">
<i>Mineral Processing by Short Circuits in Protoplanetary Disks</i>
</a>
<br/>
McNally, Colin P.; Hubbard, Alexander; Mac Low, Mordecai-Mark; Ebel, Denton S.; <strong>D'Alessio, Paola</strong>
<br/>
2013/04, The Astrophysical Journal, 767, L2
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...767L..13R" target="_blank">
<i>Star Formation in the Massive "Starless" Infrared Dark Cloud G0.253+0.016</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Zapata, Luis A.</strong>
<br/>
2013/04, The Astrophysical Journal, 767, L13
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...766..114S" target="_blank">
<i>Deciphering the Ionized Gas Content in the Massive Star-forming Complex G75.78+0.34</i>
</a>
<br/>
<strong>Sánchez-Monge, Álvaro</strong>; <strong>Kurtz, Stan</strong>; Palau, Aina; Estalella, Robert; Shepherd, Debra; <strong>Lizano, Susana</strong>; Franco, José; Garay, Guido
<br/>
2013/04, The Astrophysical Journal, 766, 114
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.429.3584H" target="_blank">
<i>Applying a one-dimensional PDR model to the Taurus molecular cloud and its atomic envelope</i>
</a>
<br/>
<strong>Heiner, J. S.</strong>; <strong>Vázquez-Semadeni, E.</strong>
<br/>
2013/03, Monthly Notices of the Royal Astronomical Society, 429, 3584
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJS..205....1P" target="_blank">
<i>The Coordinated Radio and Infrared Survey for High-mass Star Formation. II. Source Catalog</i>
</a>
<br/>
Purcell, C. R.; Hoare, M. G.; Cotton, W. D.; Lumsden, S. L.; Urquhart, J. S.; Chandler, C.; Churchwell, E. B.; Diamond, P.; Dougherty, S. M.; Fender, R. P.; Fuller, G.; Garrington, S. T.; Gledhill, T. M.; Goldsmith, P. F.; Hindson, L.; Jackson, J. M.; <strong>Kurtz, S. E.</strong>; Martí, J.; Moore, T. J. T.; Mundy, L. G.; <span id="2013ApJS..205....1P.authors" style="display: none;">Muxlow, T. W. B.; Oudmaijer, R. D.; Pandian, J. D.; Paredes, J. M.; Shepherd, D. S.; Smethurst, S.; Spencer, R. E.; Thompson, M. A.; Umana, G.; Zijlstra, A. A.</span><span id="2013ApJS..205....1P.button"></span>
<script>
toggleAuthors('2013ApJS..205....1P', 30, 0);
</script>

<br/>
2013/03, The Astrophysical Journal Supplement Series, 205, 1
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...765L..29Z" target="_blank">
<i>A 10,000 Year Old Explosion in DR21</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Schmid-Burgk, Johannes; <strong>Pérez-Goytia, Nadia</strong>; Ho, Paul T. P.; <strong>Rodríguez, Luis F.</strong>; <strong>Loinard, Laurent</strong>; Cruz-González, Irene
<br/>
2013/03, The Astrophysical Journal, 765, L29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...765...49G" target="_blank">
<i>The Density Distribution in Turbulent Bistable Flows</i>
</a>
<br/>
<strong>Gazol, Adriana</strong>; Kim, Jongsoo
<br/>
2013/03, The Astrophysical Journal, 765, 49
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...765..105M" target="_blank">
<i>Signatures of Long-lived Spiral Patterns</i>
</a>
<br/>
Martínez-García, Eric E.; <strong>González-Lópezlira, Rosa A.</strong>
<br/>
2013/03, The Astrophysical Journal, 765, 105
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.428.3355H" target="_blank">
<i>Hydrogen volume densities in nearby galaxies - I. An automated approach</i>
</a>
<br/>
<strong>Heiner, J. S.</strong>; Sánchez-Gallego, J. R.; Rousseau-Nepton, L.; Knapen, J. H.
<br/>
2013/02, Monthly Notices of the Royal Astronomical Society, 428, 3355
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...764L..14Z" target="_blank">
<i>ALMA 690 GHz Observations of IRAS 16293-2422B: Infall in a Highly Optically Thick Disk</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Loinard, Laurent</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Hernández-Hernández, Vicente</strong>; Takahashi, Satoko; Trejo, Alfonso; Parise, Bérengère
<br/>
2013/02, The Astrophysical Journal, 764, L14
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...762..120P" target="_blank">
<i>Early Stages of Cluster Formation: Fragmentation of Massive Dense Cores down to &lt;~ 1000 AU</i>
</a>
<br/>
Palau, Aina; Fuente, Asunción; Girart, Josep M.; Estalella, Robert; Ho, Paul T. P.; Sánchez-Monge, Álvaro; Fontani, Francesco; Busquet, Gemma; Commerçon, Benoit; Hennebelle, Patrick; Boissier, Jérémie; Zhang, Qizhou; Cesaroni, Riccardo; <strong>Zapata, Luis A.</strong>
<br/>
2013/01, The Astrophysical Journal, 762, 120
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013MNRAS.428..691H" target="_blank">
<i>Mapping the complex kinematics of LL objects in the Orion nebula</i>
</a>
<br/>
<strong>Henney, William J.</strong>; García-Díaz, Ma. T.; O'Dell, C. R.; Rubin, Robert H.
<br/>
2013/01, Monthly Notices of the Royal Astronomical Society, 428, 691
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2013ApJ...763...57T" target="_blank">
<i>Hierarchical Fragmentation of the Orion Molecular Filaments</i>
</a>
<br/>
Takahashi, Satoko; Ho, Paul T. P.; Teixeira, Paula S.; <strong>Zapata, Luis A.</strong>; Su, Yu-Nung
<br/>
2013/01, The Astrophysical Journal, 763, 57
</p></li>
</ol>
</div>
<div class="tab-pane" id="2012">
<h4 style="text-indent: 10px;">Publications 2012</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012Natur.492...83T" target="_blank">
<i>A ~0.2-solar-mass protostar with a Keplerian disk in the very young L1527 IRS system</i>
</a>
<br/>
Tobin, John J.; Hartmann, Lee; Chiang, Hsin-Fang; Wilner, David J.; Looney, Leslie W.; <strong>Loinard, Laurent</strong>; Calvet, Nuria; <strong>D'Alessio, Paola</strong>
<br/>
2012/12, Nature, 492, 83
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.427.2562B" target="_blank">
<i>On the structure of molecular clouds</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>D'Alessio, Paola</strong>; Hartmann, Lee
<br/>
2012/12, Monthly Notices of the Royal Astronomical Society, 427, 2562
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...761..124G" target="_blank">
<i>Gas Surface Density, Star Formation Rate Surface Density, and the Maximum Mass of Young Star Clusters in a Disk Galaxy. I. The Flocculent Galaxy M 33</i>
</a>
<br/>
<strong>González-Lópezlira, Rosa A.</strong>; Pflamm-Altenburg, Jan; Kroupa, Pavel
<br/>
2012/12, The Astrophysical Journal, 761, 124
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.426.2300L" target="_blank">
<i>SPIDER - VII. Revealing the stellar population content of massive early-type galaxies out to 8R<SUB>e</SUB></i>
</a>
<br/>
La Barbera, F.; Ferreras, I.; de Carvalho, R. R.; <strong>Bruzual, G.</strong>; Charlot, S.; Pasquali, A.; Merlin, E.
<br/>
2012/11, Monthly Notices of the Royal Astronomical Society, 426, 2300
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.426.2318E" target="_blank">
<i>Excitation of emission lines by fluorescence and recombination in IC 418</i>
</a>
<br/>
<strong>Escalante, V.</strong>; Morisset, C.; Georgiev, L.
<br/>
2012/11, Monthly Notices of the Royal Astronomical Society, 426, 2318
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...759L..10M" target="_blank">
<i>Probing Dynamical Processes in the Planet-forming Region with Dust Mineralogy</i>
</a>
<br/>
McClure, M. K.; Manoj, P.; Calvet, N.; Adame, L.; Espaillat, C.; Watson, D. M.; Sargent, B.; Forrest, W. J.; <strong>D'Alessio, P.</strong>
<br/>
2012/11, The Astrophysical Journal, 759, L10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012A&A...547L...3G" target="_blank">
<i>ALMA and VLA observations of recombination lines and continuum toward the Becklin-Neugebauer object in Orion</i>
</a>
<br/>
Galván-Madrid, R.; Goddi, C.; <strong>Rodríguez, L. F.</strong>
<br/>
2012/11, Astronomy and Astrophysics, 547, L3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012A&A...546A..15A" target="_blank">
<i>Globular cluster systems in fossil groups: NGC 6482, NGC 1132, and ESO 306-017</i>
</a>
<br/>
<strong>Alamo-Martínez, K. A.</strong>; West, M. J.; Blakeslee, J. P.; <strong>González-Lópezlira, R. A.</strong>; Jordán, A.; Gregg, M.; Côté, P.; Drinkwater, M. J.; van den Bergh, S.
<br/>
2012/10, Astronomy and Astrophysics, 546, A15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.426..614M" target="_blank">
<i>Ionized gas diagnostics from protoplanetary discs in the Orion nebula and the abundance discrepancy problem</i>
</a>
<br/>
Mesa-Delgado, A.; Núñez-Díaz, M.; Esteban, C.; García-Rojas, J.; <strong>Flores-Fajardo, N.</strong>; López-Martín, L.; Tsamis, Y. G.; <strong>Henney, W. J.</strong>
<br/>
2012/10, Monthly Notices of the Royal Astronomical Society, 426, 614
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...758L..10M" target="_blank">
<i>Centimeter Continuum Observations of the Northern Head of the HH 80/81/80N Jet: Revising the Actual Dimensions of a Parsec-scale Jet</i>
</a>
<br/>
Masqué, Josep M.; Girart, Josep M.; Estalella, Robert; <strong>Rodríguez, Luis F.</strong>; Beltrán, Maria T.
<br/>
2012/10, The Astrophysical Journal, 758, L10
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012RMxAA..48..243R" target="_blank">
<i>Radio and Optical Observations of DG Tau B</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Dzib, S. A.; Loinard, L.; Zapata, L. A.; Raga, A. C.; Cantó, J.; Riera, A.
<br/>
2012/10, Revista Mexicana de Astronomia y Astrofisica, 48, 243
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...757..129R" target="_blank">
<i>Kinematics of the CO Gas in the Inner Regions of the TW Hya Disk</i>
</a>
<br/>
Rosenfeld, Katherine A.; Qi, Chunhua; Andrews, Sean M.; Wilner, David J.; Corder, Stuartt A.; Dullemond, C. P.; Lin, Shin-Yi; Hughes, A. M.; <strong>D'Alessio, Paola</strong>; Ho, P. T. P.
<br/>
2012/10, The Astrophysical Journal, 757, 129
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...757...79F" target="_blank">
<i>Pumping up the [N I] Nebular Lines</i>
</a>
<br/>
Ferland, G. J.; <strong>Henney, W. J.</strong>; O'Dell, C. R.; Porter, R. L.; van Hoof, P. A. M.; Williams, R. J. R.
<br/>
2012/09, The Astrophysical Journal, 757, 79
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...756..145P" target="_blank">
<i>Aspect Ratio Dependence of the Free-fall Time for Non-spherical Symmetries</i>
</a>
<br/>
Pon, Andy; <strong>Toalá, Jesús A.</strong>; Johnstone, Doug; <strong>Vázquez-Semadeni, Enrique</strong>; Heitsch, Fabian; <strong>Gómez, Gilberto C.</strong>
<br/>
2012/09, The Astrophysical Journal, 756, 145
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...757...58N" target="_blank">
<i>From Dusty Filaments to Massive Stars: The Case of NGC 7538 S</i>
</a>
<br/>
<strong>Naranjo-Romero, Raul</strong>; <strong>Zapata, Luis A.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; Takahashi, Satoko; Palau, Aina; Schilke, Peter
<br/>
2012/09, The Astrophysical Journal, 757, 58
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...755..177Z" target="_blank">
<i>A Multi-wavelength High-resolution study of the S255 Star-forming Region: General Structure and Kinematics</i>
</a>
<br/>
Zinchenko, I.; Liu, S. -Y.; Su, Y. -N.; <strong>Kurtz, S.</strong>; Ojha, D. K.; Samal, M. R.; Ghosh, S. K.
<br/>
2012/08, The Astrophysical Journal, 755, 177
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.424.2522R" target="_blank">
<i>An analytic model for the strong-/weak-shock transition in a spherical blast wave</i>
</a>
<br/>
Raga, A. C.; Cantó, J.; <strong>Rodríguez, L. F.</strong>; Velázquez, P. F.
<br/>
2012/08, Monthly Notices of the Royal Astronomical Society, 424, 2522
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...755...77T" target="_blank">
<i>X-Ray Emission from the Wolf-Rayet Bubble S 308</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; Guerrero, M. A.; Chu, Y. -H.; Gruendl, R. A.; <strong>Arthur, S. J.</strong>; Smith, R. C.; Snowden, S. L.
<br/>
2012/08, The Astrophysical Journal, 755, 77
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012A&A...544L..19P" target="_blank">
<i>Mid-J CO emission from the Orion BN/KL explosive outflow</i>
</a>
<br/>
Peng, T. -C.; <strong>Zapata, L. A.</strong>; Wyrowski, F.; Güsten, R.; Menten, K. M.
<br/>
2012/08, Astronomy and Astrophysics, 544, L19
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...754...78G" target="_blank">
<i>ERRATUM: "Gravitational Collapse of Magnetized Clouds. I. Ideal Magnetohydrodynamic Accretion Flow" <A href="/abs/2006ApJ...647..374G">(2006, ApJ, 647, 374)</A></i>
</a>
<br/>
Galli, Daniele; <strong>Lizano, Susana</strong>; Shu, Frank H.; Allen, Anthony
<br/>
2012/07, The Astrophysical Journal, 754, 78
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...754L..17Z" target="_blank">
<i>ALMA Observations of the Outflow from Source I in the Orion-KL Region</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Schmid-Burgk, Johannes; <strong>Loinard, Laurent</strong>; Menten, Karl M.; Curiel, Salvador
<br/>
2012/07, The Astrophysical Journal, 754, L17
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.423..900A" target="_blank">
<i>Self-adjusting data acquisition system for Low Layer SCIDAR</i>
</a>
<br/>
Avilés, J. L.; <strong>Avila, R.</strong>; Butterley, T.; Wilson, R.; Chun, M.; Carrasco, E.; Farah, A.; Cuevas, S.
<br/>
2012/06, Monthly Notices of the Royal Astronomical Society, 423, 900
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...752L..29C" target="_blank">
<i>Resolving the Circumstellar Disk around the Massive Protostar Driving the HH 80-81 Jet</i>
</a>
<br/>
Carrasco-González, Carlos; Galván-Madrid, Roberto; Anglada, Guillem; Osorio, Mayra; <strong>D'Alessio, Paola</strong>; Hofner, Peter; <strong>Rodríguez, Luis F.</strong>; Linz, Hendrik; Araya, Esteban D.
<br/>
2012/06, The Astrophysical Journal, 752, L29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...750..170A" target="_blank">
<i>Discovery of 6.035 GHz Hydroxyl Maser Flares in IRAS 18566+0408</i>
</a>
<br/>
Al-Marzouk, A. A.; Araya, E. D.; Hofner, P.; <strong>Kurtz, S.</strong>; Linz, H.; Olmi, L.
<br/>
2012/05, The Astrophysical Journal, 750, 170
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...751...63A" target="_blank">
<i>Resolved Radio Emission from Models of Photoevaporated Disks around Massive Young Stars</i>
</a>
<br/>
<strong>Avalos, Martín</strong>; <strong>Lizano, Susana</strong>
<br/>
2012/05, The Astrophysical Journal, 751, 63
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...751...78P" target="_blank">
<i>A Rotating Molecular Jet from a Perseus Protostar</i>
</a>
<br/>
<strong>Pech, Gerardo</strong>; <strong>Zapata, Luis A.</strong>; Loinard, Laurent; <strong>Rodríguez, Luis F.</strong>
<br/>
2012/05, The Astrophysical Journal, 751, 78
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...751...77Z" target="_blank">
<i>An Evolutionary Model for Collapsing Molecular Clouds and Their Star Formation Activity</i>
</a>
<br/>
<strong>Zamora-Avilés, Manuel</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Colín, Pedro</strong>
<br/>
2012/05, The Astrophysical Journal, 751, 77
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...749L..24A" target="_blank">
<i>First Science Observations with SOFIA/FORCAST: Properties of Intermediate-luminosity Protostars and Circumstellar Disks in OMC-2</i>
</a>
<br/>
Adams, Joseph D.; Herter, Terry L.; Osorio, Mayra; Macias, Enrique; Megeath, S. Thomas; Fischer, William J.; Ali, Babar; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; De Buizer, James M.; Gull, George E.; Henderson, Charles P.; Keller, Luke D.; Morris, Mark R.; Remming, Ian S.; Schoenwald, Justin; Shuping, Ralph Y.; Stacey, Gordon; Stanke, Thomas; Stutz, Amelia; <span id="2012ApJ...749L..24A.authors" style="display: none;">Vacca, William</span><span id="2012ApJ...749L..24A.button"></span>
<script>
toggleAuthors('2012ApJ...749L..24A', 21, 0);
</script>

<br/>
2012/04, The Astrophysical Journal, 749, L24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012RMxAA..48..161L" target="_blank">
<i>Obituary - Yolanda Gómez</i>
</a>
<br/>
<strong>Lizano, S.</strong>; Ballesteros, J.
<br/>
2012/04, Revista Mexicana de Astronomia y Astrofisica, 48, 161
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.421.1283A" target="_blank">
<i>What produces the diffuse X-ray emission from the Orion nebula? I. Simple spherical models</i>
</a>
<br/>
<strong>Arthur, S. J.</strong>
<br/>
2012/04, Monthly Notices of the Royal Astronomical Society, 421, 1283
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012RMxAA..48...85O" target="_blank">
<i>Extended Non-Thermal Emission Possibly Associated with Cyg OB2 #5</i>
</a>
<br/>
<strong>Ortiz-León, G. N.</strong>; Rodríguez, L. F.; Tapia, M.
<br/>
2012/04, Revista Mexicana de Astronomia y Astrofisica, 48, 85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012RMxAA..48...47R" target="_blank">
<i>Radio Continuum Emission from FS CMa Stars</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Báez-Rubio, A.; Miroshnichenko, A. S.
<br/>
2012/04, Revista Mexicana de Astronomia y Astrofisica, 48, 47
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...749L...4L" target="_blank">
<i>Molecules in η Carinae</i>
</a>
<br/>
<strong>Loinard, Laurent</strong>; Menten, Karl M.; Güsten, Rolf; <strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2012/04, The Astrophysical Journal, 749, L4
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...748..101S" target="_blank">
<i>Dark Matter as an Active Gravitational Agent in Cloud Complexes</i>
</a>
<br/>
<strong>Suárez-Madrigal, Andrés</strong>; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Colín, Pedro</strong>; <strong>D'Alessio, Paola</strong>
<br/>
2012/04, The Astrophysical Journal, 748, 101
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...747..139N" target="_blank">
<i>Mid-Infrared Variability of the Binary System CS Cha</i>
</a>
<br/>
Nagel, Erick; Espaillat, Catherine; <strong>D'Alessio, Paola</strong>; Calvet, Nuria
<br/>
2012/03, The Astrophysical Journal, 747, 139
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...747..103E" target="_blank">
<i>On the Transitional Disk Class: Linking Observations of T Tauri Stars and Physical Disk Models</i>
</a>
<br/>
Espaillat, C.; Ingleby, L.; Hernández, J.; Furlan, E.; <strong>D'Alessio, P.</strong>; Calvet, N.; Andrews, S.; Muzerolle, J.; Qi, C.; Wilner, D.
<br/>
2012/03, The Astrophysical Journal, 747, 103
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.419.3338M" target="_blank">
<i>Dense gas and exciting sources of the molecular outflow in the AFGL 437 star-forming region</i>
</a>
<br/>
<strong>Manjarrez, G.</strong>; Gómez, J. F.; de Gregorio-Monsalvo, I.
<br/>
2012/02, Monthly Notices of the Royal Astronomical Society, 419, 3338
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.420.1457H" target="_blank">
<i>Rapid star formation and global gravitational collapse</i>
</a>
<br/>
Hartmann, Lee; <strong>Ballesteros-Paredes, Javier</strong>; Heitsch, Fabian
<br/>
2012/02, Monthly Notices of the Royal Astronomical Society, 420, 1457
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...746...71C" target="_blank">
<i>Multiplicity, Disks, and Jets in the NGC 2071 Star-forming Region</i>
</a>
<br/>
Carrasco-González, Carlos; Osorio, Mayra; Anglada, Guillem; <strong>D'Alessio, Paola</strong>; <strong>Rodríguez, Luis F.</strong>; Gómez, José F.; Torrelles, José M.
<br/>
2012/02, The Astrophysical Journal, 746, 71
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012A&A...538A..12P" target="_blank">
<i>The APEX-CHAMP<SUP>+</SUP> view of the Orion Molecular Cloud 1 core. Constraining the excitation with submillimeter CO multi-line observations</i>
</a>
<br/>
Peng, T. -C.; Wyrowski, F.; <strong>Zapata, L. A.</strong>; Güsten, R.; Menten, K. M.
<br/>
2012/02, Astronomy and Astrophysics, 538, A12
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012MNRAS.419L..39R" target="_blank">
<i>Analytic and numerical models for the expansion of a compact H II region</i>
</a>
<br/>
Raga, A. C.; Cantó, J.; <strong>Rodríguez, L. F.</strong>
<br/>
2012/01, Monthly Notices of the Royal Astronomical Society, 419, L39
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...744...86Z" target="_blank">
<i>Millimeter Multiplicity in DR21(OH): Outflows, Molecular Cores, and Envelopes</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Loinard, Laurent</strong>; Su, Y. -N.; <strong>Rodríguez, Luis F.</strong>; Menten, Karl M.; Patel, Nimesh; <strong>Galván-Madrid, R.</strong>
<br/>
2012/01, The Astrophysical Journal, 744, 86
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012ApJ...744..190T" target="_blank">
<i>The Free-fall Time of Finite Sheets and Filaments</i>
</a>
<br/>
Toalá, Jesús A.; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Gómez, Gilberto C.</strong>
<br/>
2012/01, The Astrophysical Journal, 744, 190
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2012A&A...537A.123R" target="_blank">
<i>Radio continuum emission from knots in the DG Tauri jet</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; <strong>González, R. F.</strong>; Raga, A. C.; Cantó, J.; Riera, A.; <strong>Loinard, L.</strong>; <strong>Dzib, S. A.</strong>; <strong>Zapata, L. A.</strong>
<br/>
2012/01, Astronomy and Astrophysics, 537, A123
</p></li>
</ol>
</div>
<div class="tab-pane" id="2011">
<h4 style="text-indent: 10px;">Publications 2011</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJS..197...39A" target="_blank">
<i>Erratum: "CH<SUB>3</SUB>CN Observations toward Southern Massive Star-forming Regions" <A href="/abs/2005ApJS..157..279A">(2005, ApJS, 157, 279)</A></i>
</a>
<br/>
Araya, Esteban; Hofner, Peter; <strong>Kurtz, Stan</strong>; Bronfman, Leonardo; DeDeo, Simon
<br/>
2011/12, The Astrophysical Journal Supplement Series, 197, 39
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011A&A...536A..33R" target="_blank">
<i>Structure of the hot molecular core G10.47+0.03</i>
</a>
<br/>
Rolffs, R.; Schilke, P.; Zhang, Q.; <strong>Zapata, L.</strong>
<br/>
2011/12, Astronomy and Astrophysics, 536, A33
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...743L..32P" target="_blank">
<i>Intermediate-mass Hot Cores at ~500 AU: Disks or Outflows?</i>
</a>
<br/>
Palau, Aina; Fuente, Asunción; Girart, Josep M.; Fontani, Francesco; Boissier, Jérémie; Piétu, Vincent; Sánchez-Monge, Álvaro; Busquet, Gemma; Estalella, Robert; <strong>Zapata, Luis A.</strong>; Zhang, Qizhou; Neri, Roberto; Ho, Paul T. P.; Alonso-Albi, Tomás; Audard, Marc
<br/>
2011/12, The Astrophysical Journal, 743, L32
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...743..175A" target="_blank">
<i>Magnetic Interactions in Pre-main-sequence Binaries</i>
</a>
<br/>
Adams, Fred C.; Cai, Michael J.; Galli, Daniele; <strong>Lizano, Susana</strong>; Shu, Frank H.
<br/>
2011/12, The Astrophysical Journal, 743, 175
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011AJ....142...97F" target="_blank">
<i>A Rotating Molecular Disk Toward IRAS 18162-2048, the Exciting Source of HH 80-81</i>
</a>
<br/>
Fernández-López, M.; Girart, J. M.; Curiel, S.; <strong>Gómez, Y.</strong>; Ho, P. T. P.; Patel, N.
<br/>
2011/10, The Astronomical Journal, 142, 97
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...740L..19Z" target="_blank">
<i>Disks and Outflows in the Massive Protobinary System W3(OH)TW</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez-Garza, Carolina</strong>; <strong>Rodríguez, Luis F.</strong>; Girart, Josep M.; Chen, Huei-Ru
<br/>
2011/10, The Astrophysical Journal, 740, L19
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...740...84Q" target="_blank">
<i>Resolving the CO Snow Line in the Disk around HD 163296</i>
</a>
<br/>
Qi, Chunhua; <strong>D'Alessio, Paola</strong>; Öberg, Karin I.; Wilner, David J.; Hughes, A. Meredith; Andrews, Sean M.; <strong>Ayala, Sandra</strong>
<br/>
2011/10, The Astrophysical Journal, 740, 84
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...739L..17H" target="_blank">
<i>Expanded Very Large Array Continuum Observations toward Hot Molecular Core Candidates</i>
</a>
<br/>
Hofner, P.; <strong>Kurtz, S.</strong>; Ellingsen, S. P.; Menten, K. M.; Wyrowski, F.; Araya, E. D.; <strong>Loinard, L.</strong>; <strong>Rodríguez, L. F.</strong>; Cesaroni, R.
<br/>
2011/09, The Astrophysical Journal, 739, L17
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.416.1033G" target="_blank">
<i>Time variability in simulated ultracompact and hypercompact H II regions</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; Peters, Thomas; Keto, Eric R.; Mac Low, Mordecai-Mark; Banerjee, Robi; Klessen, Ralf S.
<br/>
2011/09, Monthly Notices of the Royal Astronomical Society, 416, 1033
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.416.1436B" target="_blank">
<i>Gravity or turbulence? - II. Evolving column density probability distribution functions in molecular clouds</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Gazol, Adriana</strong>; Hartmann, Lee W.; Heitsch, Fabian; <strong>Colín, Pedro</strong>
<br/>
2011/09, Monthly Notices of the Royal Astronomical Society, 416, 1436
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...739L...9S" target="_blank">
<i>Searching for New Hypercompact H II Regions</i>
</a>
<br/>
Sánchez-Monge, Álvaro; Pandian, Jagadheep D.; <strong>Kurtz, Stan</strong>
<br/>
2011/09, The Astrophysical Journal, 739, L9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011A&A...532A..91B" target="_blank">
<i>Molecular outflows and hot molecular cores in G24.78+0.08 at sub-arcsecond angular resolution</i>
</a>
<br/>
Beltrán, M. T.; Cesaroni, R.; Zhang, Q.; <strong>Galván-Madrid, R.</strong>; Beuther, H.; Fallscheer, C.; Neri, R.; Codella, C.
<br/>
2011/08, Astronomy and Astrophysics, 532, A91
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...736..134A" target="_blank">
<i>The Specific Star Formation Rate and Stellar Mass Fraction of Low-mass Central Galaxies in Cosmological Simulations</i>
</a>
<br/>
Avila-Reese, V.; <strong>Colín, P.</strong>; González-Samaniego, A.; Valenzuela, O.; Firmani, C.; Velázquez, H.; Ceverino, D.
<br/>
2011/08, The Astrophysical Journal, 736, 134
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...737..100T" target="_blank">
<i>Radiation-hydrodynamic Models of the Evolving Circumstellar Medium around Massive Stars</i>
</a>
<br/>
<strong>Toalá, J. A.</strong>; <strong>Arthur, S. J.</strong>
<br/>
2011/08, The Astrophysical Journal, 737, 100
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJS..195....3F" target="_blank">
<i>The Spitzer Infrared Spectrograph Survey of T Tauri Stars in Taurus</i>
</a>
<br/>
Furlan, E.; Luhman, K. L.; Espaillat, C.; <strong>D'Alessio, P.</strong>; Adame, L.; Manoj, P.; Kim, K. H.; Watson, Dan M.; Forrest, W. J.; McClure, M. K.; Calvet, N.; Sargent, B. A.; Green, J. D.; Fischer, W. J.
<br/>
2011/07, The Astrophysical Journal Supplement Series, 195, 3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.414.3129G" target="_blank">
<i>A distance estimate based on angular expansion for the planetary nebula NGC 6881</i>
</a>
<br/>
Guzmán-Ramírez, Lizette; <strong>Gómez, Yolanda</strong>; <strong>Loinard, Laurent</strong>; Tafoya, Daniel
<br/>
2011/07, Monthly Notices of the Royal Astronomical Society, 414, 3129
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.414.2511V" target="_blank">
<i>Molecular cloud evolution - IV. Magnetic fields, ambipolar diffusion and the star formation efficiency</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; Banerjee, Robi; <strong>Gómez, Gilberto C.</strong>; Hennebelle, Patrick; Duffin, Dennis; Klessen, Ralf S.
<br/>
2011/07, Monthly Notices of the Royal Astronomical Society, 414, 2511
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011A&A...531A..52M" target="_blank">
<i>A model for the thermal radio-continuum emission from radiative shocks in colliding stellar winds</i>
</a>
<br/>
Montes, G.; <strong>González, R. F.</strong>; Cantó, J.; Pérez-Torres, M. A.; Alberdi, A.
<br/>
2011/07, Astronomy and Astrophysics, 531, A52
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.414.1747A" target="_blank">
<i>Radiation-magnetohydrodynamic simulations of H II regions and their associated PDRs in turbulent molecular clouds</i>
</a>
<br/>
<strong>Arthur, S. J.</strong>; <strong>Henney, W. J.</strong>; Mellema, G.; de Colle, F.; <strong>Vázquez-Semadeni, E.</strong>
<br/>
2011/06, Monthly Notices of the Royal Astronomical Society, 414, 1747
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011A&A...530A..53K" target="_blank">
<i>High resolution CO observation of massive star forming regions</i>
</a>
<br/>
Klaassen, P. D.; Wilson, C. D.; Keto, E. R.; Zhang, Q.; <strong>Galván-Madrid, R.</strong>; Liu, H. -Y. B.
<br/>
2011/06, Astronomy and Astrophysics, 530, A53
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011A&A...530A..12L" target="_blank">
<i>On the kinematics of massive star forming regions: the case of IRAS 17233-3606</i>
</a>
<br/>
Leurini, S.; Codella, C.; <strong>Zapata, L.</strong>; Beltrán, M. T.; Schilke, P.; Cesaroni, R.
<br/>
2011/06, Astronomy and Astrophysics, 530, A12
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJS..194...44S" target="_blank">
<i>A Very Large Array Study of Ultracompact and Hypercompact H II Regions from 0.7 to 3.6 cm</i>
</a>
<br/>
Sewiło, M.; Churchwell, E.; <strong>Kurtz, S.</strong>; Goss, W. M.; Hofner, P.
<br/>
2011/06, The Astrophysical Journal Supplement Series, 194, 44
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...734..122M" target="_blank">
<i>The Relation between Dynamics and Star Formation in Barred Galaxies</i>
</a>
<br/>
Martínez-García, Eric E.; <strong>González-Lópezlira, Rosa A.</strong>
<br/>
2011/06, The Astrophysical Journal, 734, 122
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...733...71D" target="_blank">
<i>VLBA Determination of the Distance to Nearby Star-forming Regions. VI. The Distance to the Young Stellar Object HW 9 in Cepheus A</i>
</a>
<br/>
<strong>Dzib, Sergio</strong>; <strong>Loinard, Laurent</strong>; <strong>Rodríguez, Luis F.</strong>; Mioduszewski, Amy J.; Torres, Rosa M.
<br/>
2011/05, The Astrophysical Journal, 733, 71
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011A&A...529A..24Z" target="_blank">
<i>Orion KL: the hot core that is not a "hot core"</i>
</a>
<br/>
<strong>Zapata, L. A.</strong>; Schmid-Burgk, J.; Menten, K. M.
<br/>
2011/05, Astronomy and Astrophysics, 529, A24
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011IAUS..270..297A" target="_blank">
<i>Radiation-MHD Simulations of HII Region Expansion in Turbulent Molecular Clouds</i>
</a>
<br/>
<strong>Arthur, S. J.</strong>; <strong>Henney, W. J.</strong>; Mellema, G.; de Colle, F.; <strong>Vázquez-Semadeni, E.</strong>
<br/>
2011/04, Computational Star Formation, 270, 297
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011IAUS..270..503C" target="_blank">
<i>Cosmological simulations of low-mass galaxies: some potential issues</i>
</a>
<br/>
<strong>Colín, Pedro</strong>; Avila-Reese, Vladimir; Valenzuela, Octavio
<br/>
2011/04, Computational Star Formation, 270, 503
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011IAUS..270..107K" target="_blank">
<i>Modeling High-Mass Star Formation and Ultracompact H ii Regions</i>
</a>
<br/>
Klessen, Ralf S.; Peters, Thomas; Banerjee, Robi; Mac Low, Mordecai-Mark; <strong>Galván-Madrid, Roberto</strong>; Keto, Eric R.
<br/>
2011/04, Computational Star Formation, 270, 107
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011IAUS..270..275V" target="_blank">
<i>Theory of Feedback in Clusters and Molecular Cloud Turbulence</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2011/04, Computational Star Formation, 270, 275
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011AJ....141..113G" target="_blank">
<i>Properties of the H II Region Populations of M51 and NGC 4449 from Hα Images with the Advanced Camera for Surveys on the Hubble Space Telescope</i>
</a>
<br/>
Gutiérrez, Leonel; Beckman, John E.; <strong>Buenrostro, Valeria</strong>
<br/>
2011/04, The Astronomical Journal, 141, 113
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011AJ....141...72F" target="_blank">
<i>Millimeter and Submillimeter High Angular Resolution Interferometric Observations: Dust in the Heart of IRAS 18162-2048</i>
</a>
<br/>
Fernández-López, M.; Curiel, S.; Girart, J. M.; Ho, P. T. P.; Patel, N.; <strong>Gómez, Y.</strong>
<br/>
2011/03, The Astronomical Journal, 141, 72
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011PASJ...63...71T" target="_blank">
<i>Measurement of the Distance and Proper Motions of the H<SUB>2</SUB>O Masers in the Young Planetary Nebula K 3-35</i>
</a>
<br/>
Tafoya, Daniel; Imai, Hiroshi; <strong>Gomez, Yolanda</strong>; Torrelles, Jose M.; Patel, Nimesh A.; Anglada, Guillem; Miranda, Luis F.; Honma, Mareki; Hirota, Tomoya; Miyaji, Takeshi
<br/>
2011/02, Publications of the Astronomical Society of Japan, 63, 71
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.411...65B" target="_blank">
<i>Gravity or turbulence? Velocity dispersion-size relation</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; Hartmann, Lee W.; <strong>Vázquez-Semadeni, Enrique</strong>; Heitsch, Fabian; <strong>Zamora-Avilés, Manuel A.</strong>
<br/>
2011/02, Monthly Notices of the Royal Astronomical Society, 411, 65
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...728...49E" target="_blank">
<i>A Spitzer IRS Study of Infrared Variability in Transitional and Pre-transitional Disks Around T Tauri Stars</i>
</a>
<br/>
Espaillat, C.; Furlan, E.; <strong>D'Alessio, P.</strong>; Sargent, B.; Nagel, E.; Calvet, N.; Watson, Dan M.; Muzerolle, J.
<br/>
2011/02, The Astrophysical Journal, 728, 49
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011MNRAS.410..627T" target="_blank">
<i>A wide-angle outflow with the simultaneous presence of a high-velocity jet in the high-mass Cepheus A HW2 system</i>
</a>
<br/>
Torrelles, J. M.; Patel, N. A.; Curiel, S.; Estalella, R.; Gómez, J. F.; <strong>Rodríguez, L. F.</strong>; Cantó, J.; Anglada, G.; Vlemmings, W.; Garay, G.; Raga, A. C.; Ho, P. T. P.
<br/>
2011/01, Monthly Notices of the Royal Astronomical Society, 410, 627
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011BSRSL..80..704M" target="_blank">
<i>Thermal Radio Emission from Radiative Shocks in Colliding Stellar Winds</i>
</a>
<br/>
Montes, Gabriela; <strong>González, Ricardo F.</strong>; Cantó, Jorge; Pérez-Torres, Miguel A.; Alberdi, Antonio
<br/>
2011/01, Bulletin de la Societe Royale des Sciences de Liege, 80, 704
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011BSRSL..80...42L" target="_blank">
<i>3-D Radiative Transfer Modeling of Structured Winds in Massive Hot Stars with Wind3D</i>
</a>
<br/>
Lobel, A.; <strong>Toalá, J. A.</strong>; Blomme, R.
<br/>
2011/01, Bulletin de la Societe Royale des Sciences de Liege, 80, 42
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...726L..12Z" target="_blank">
<i>Discovery of an Expanding Molecular Bubble in Orion BN/KL</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Loinard, Laurent</strong>; Schmid-Burgk, Johannes; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.; Patel, Nimesh A.
<br/>
2011/01, The Astrophysical Journal, 726, L12
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2011ApJ...726L...3A" target="_blank">
<i>Spitzer Spectroscopy of the Circumprimary Disk in the Binary Brown Dwarf 2MASS J04414489+2301513</i>
</a>
<br/>
Adame, Lucía; Calvet, Nuria; Luhman, K. L.; <strong>D'Alessio, Paola</strong>; Furlan, Elise; McClure, M. K.; Hartmann, Lee; Forrest, William J.; Watson, Dan M.
<br/>
2011/01, The Astrophysical Journal, 726, L3
</p></li>
</ol>
</div>
<div class="tab-pane" id="2010">
<h4 style="text-indent: 10px;">Publications 2010</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJS..191..207G" target="_blank">
<i>A Catalog of CH<SUB>3</SUB>OH 7<SUB>0</SUB>-6<SUB>1</SUB> A <SUP>+</SUP> Maser Sources in Massive Star-forming Regions. II. Masers in NGC 6334F, G8.67-0.36, and M17</i>
</a>
<br/>
<strong>Gómez, Laura</strong>; <strong>Luis, Leticia</strong>; <strong>Hernández-Curiel, Idalia</strong>; <strong>Kurtz, Stan E.</strong>; Hofner, Peter; Araya, Esteban D.
<br/>
2010/12, The Astrophysical Journal Supplement Series, 191, 207
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...725.1091Z" target="_blank">
<i>Extremely Large and Hot Multilayer Keplerian Disk Around the O-type Protostar W51N: The Precursors of the HCH II Regions?</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Tang, Ya-Wen; Leurini, Silvia
<br/>
2010/12, The Astrophysical Journal, 725, 1091
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...724.1561L" target="_blank">
<i>Stability of Magnetized Disks and Implications for Planet Formation</i>
</a>
<br/>
<strong>Lizano, Susana</strong>; Galli, Daniele; Cai, Mike J.; Adams, Fred C.
<br/>
2010/12, The Astrophysical Journal, 724, 1561
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...725...17G" target="_blank">
<i>From the Convergence of Filaments to Disk-outflow Accretion: Massive Star Formation in W33A</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; Zhang, Qizhou; Keto, Eric; Ho, Paul T. P.; <strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Pineda, Jaime E.; <strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2010/12, The Astrophysical Journal, 725, 17
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010Sci...330.1209C" target="_blank">
<i>A Magnetized Jet from a Massive Protostar</i>
</a>
<br/>
<strong>Carrasco-González, Carlos</strong>; <strong>Rodríguez, Luis F.</strong>; Anglada, Guillem; Martí, Josep; Torrelles, José M.; Osorio, Mayra
<br/>
2010/11, Science, 330, 1209
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...723..482G" target="_blank">
<i>Density Power Spectrum in Turbulent Thermally Bistable Flows</i>
</a>
<br/>
<strong>Gazol, Adriana</strong>; Kim, Jongsoo
<br/>
2010/11, The Astrophysical Journal, 723, 482
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010A&A...523A..62B" target="_blank">
<i>Radio and IR study of the massive star-forming region IRAS 16353-4636</i>
</a>
<br/>
Benaglia, P.; Ribó, M.; Combi, J. A.; Romero, G. E.; Chaty, S.; Koribalski, B.; Mirabel, I. F.; <strong>Rodríguez, L. F.</strong>; Bosch, G.
<br/>
2010/11, Astronomy and Astrophysics, 523, A62
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...721L.107S" target="_blank">
<i>IRAS 22198+6336: Discovery of an Intermediate-mass Hot Core</i>
</a>
<br/>
Sánchez-Monge, Álvaro; Palau, Aina; Estalella, Robert; <strong>Kurtz, Stan</strong>; Zhang, Qizhou; Di Francesco, James; Shepherd, Debra
<br/>
2010/10, The Astrophysical Journal, 721, L107
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46..357T" target="_blank">
<i>On the Nature of the Non-Thermal Radio Source at the Center of the Orion Streamers</i>
</a>
<br/>
<strong>Trejo, A.</strong>; Rodríguez, L. F.
<br/>
2010/10, Revista Mexicana de Astronomia y Astrofisica, 46, 357
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46..349T" target="_blank">
<i>Compact Radio Sources Apparently Associated with Extended Galactic Sources</i>
</a>
<br/>
<strong>Trejo, A.</strong>; Rodríguez, L. F.
<br/>
2010/10, Revista Mexicana de Astronomia y Astrofisica, 46, 349
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46..375L" target="_blank">
<i>A reassessment of the kinematics of PV Cephei based on accurate proper motion measurements</i>
</a>
<br/>
<strong>Loinard, L.</strong>; Rodríguez, L. F.; Gómez, L.; Cantó, J.; Raga, A. C.; Goodman, A. A.; Arce, H. G.
<br/>
2010/10, Revista Mexicana de Astronomia y Astrofisica, 46, 375
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46..253N" target="_blank">
<i>Compact radio sources in the vicinity of the ultracompact HII region G78.4+2.6</i>
</a>
<br/>
<strong>Neria, C.</strong>; Gómez, Y.; Rodríguez, L. F.
<br/>
2010/10, Revista Mexicana de Astronomia y Astrofisica, 46, 253
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46..215R" target="_blank">
<i>On the Size of the Non-Thermal Component in the Radio Emission from Cyg OB2 #5</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Gómez, Y.; Loinard, L.; Mioduszewski, A. J.
<br/>
2010/10, Revista Mexicana de Astronomia y Astrofisica, 46, 215
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...722L..12T" target="_blank">
<i>The Inner Envelope and Disk of L1527 Revealed: Gemini L'-band-scattered Light Imaging</i>
</a>
<br/>
Tobin, John J.; Hartmann, Lee; <strong>Loinard, Laurent</strong>
<br/>
2010/10, The Astrophysical Journal, 722, L12
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...722L.100L" target="_blank">
<i>Expanded Very Large Array Observations of the H66α and He66α Recombination Lines Toward MWC 349A</i>
</a>
<br/>
<strong>Loinard, Laurent</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2010/10, The Astrophysical Journal, 722, L100
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...721.1531H" target="_blank">
<i>Competitive Accretion in a Sheet Geometry and the Stellar IMF</i>
</a>
<br/>
Hsu, Wen-Hsin; Hartmann, Lee; Heitsch, Fabian; <strong>Gómez, Gilberto C.</strong>
<br/>
2010/10, The Astrophysical Journal, 721, 1531
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010AJ....140..968R" target="_blank">
<i>A Cluster of Compact Radio Sources in W40</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Rodney, Steven A.; Reipurth, Bo
<br/>
2010/10, The Astronomical Journal, 140, 968
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010AJ....140..913G" target="_blank">
<i>An Expanding H I Photodissociated Region Associated with the Compact H II Region G213.880-11.837 in the GGD 14 Complex</i>
</a>
<br/>
<strong>Gómez, Y.</strong>; Garay, G.; Rodríguez-Rico, C. A.; <strong>Neria, C.</strong>; <strong>Rodríguez, L. F.</strong>; <strong>Escalante, V.</strong>; <strong>Lizano, S.</strong>; Lebrón, M.
<br/>
2010/10, The Astronomical Journal, 140, 913
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010MNRAS.406.1875R" target="_blank">
<i>Dependence of the star formation efficiency on global parameters of molecular clouds</i>
</a>
<br/>
<strong>Rosas-Guevara, Yetli</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Gómez, Gilberto C.</strong>; Jappsen, A. -Katharina
<br/>
2010/08, Monthly Notices of the Royal Astronomical Society, 406, 1875
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...718..610D" target="_blank">
<i>VLBA Determination of the Distance to Nearby Star-forming Regions. IV. A Preliminary Distance to the Proto-Herbig AeBe Star EC 95 in the Serpens Core</i>
</a>
<br/>
<strong>Dzib, Sergio</strong>; <strong>Loinard, Laurent</strong>; Mioduszewski, Amy J.; Boden, Andrew F.; <strong>Rodríguez, Luis F.</strong>; Torres, Rosa M.
<br/>
2010/08, The Astrophysical Journal, 718, 610
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...717L.133A" target="_blank">
<i>Quasi-periodic Formaldehyde Maser Flares in the Massive Protostellar Object IRAS 18566+0408</i>
</a>
<br/>
Araya, E. D.; Hofner, P.; Goss, W. M.; <strong>Kurtz, S.</strong>; Richards, A. M. S.; Linz, H.; Olmi, L.; Sewiło, M.
<br/>
2010/07, The Astrophysical Journal, 717, L133
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...717..441E" target="_blank">
<i>Unveiling the Structure of Pre-transitional Disks</i>
</a>
<br/>
Espaillat, C.; <strong>D'Alessio, P.</strong>; Hernández, J.; Nagel, E.; Luhman, K. L.; Watson, D. M.; Calvet, N.; Muzerolle, J.; McClure, M.
<br/>
2010/07, The Astrophysical Journal, 717, 441
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...715.1302V" target="_blank">
<i>Molecular Cloud Evolution. III. Accretion Versus Stellar Feedback</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; <strong>Colín, Pedro</strong>; <strong>Gómez, Gilberto C.</strong>; <strong>Ballesteros-Paredes, Javier</strong>; Watson, Alan W.
<br/>
2010/06, The Astrophysical Journal, 715, 1302
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010AJ....139.2433C" target="_blank">
<i>A Bright Radio HH Object with Large Proper Motions in the Massive Star-forming Region W75N</i>
</a>
<br/>
<strong>Carrasco-González, Carlos</strong>; <strong>Rodríguez, Luis F.</strong>; Torrelles, José M.; Anglada, Guillem; González-Martín, Omaira
<br/>
2010/06, The Astronomical Journal, 139, 2433
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJS..188...75M" target="_blank">
<i>The Evolutionary State of the Pre-main Sequence Population in Ophiuchus: A Large Infrared Spectrograph Survey</i>
</a>
<br/>
McClure, M. K.; Furlan, E.; Manoj, P.; Luhman, K. L.; Watson, D. M.; Forrest, W. J.; Espaillat, C.; Calvet, N.; <strong>D'Alessio, P.</strong>; Sargent, B.; Tobin, J. J.; Chiang, Hsin-Fang
<br/>
2010/05, The Astrophysical Journal Supplement Series, 188, 75
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46..153D" target="_blank">
<i>A Compact Radio Counterpart to the Energetic X-ray Pulsar Associated with the TeV Gamma-Ray Source J1813-178</i>
</a>
<br/>
<strong>Dzib, S.</strong>; Loinard, L.; Rodríguez, L. F.
<br/>
2010/04, Revista Mexicana de Astronomia y Astrofisica, 46, 153
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010RMxAA..46...29R" target="_blank">
<i>H91α Radio Recombination Line and 3.5 cm Continuum Observations of the Planetary Nebula NGC 3242</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Gómez, Y.; López, J. A.; García-Díaz, M. T.; Clark, D. M.
<br/>
2010/04, Revista Mexicana de Astronomia y Astrofisica, 46, 29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010MNRAS.403.1213G" target="_blank">
<i>Tracers of stellar mass loss - I. Optical and near-IR colours and surface brightness fluctuations</i>
</a>
<br/>
<strong>González-Lópezlira, Rosa A.</strong>; Bruzual-A., Gustavo; Charlot, Stéphane; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Loinard, Laurent</strong>
<br/>
2010/04, Monthly Notices of the Royal Astronomical Society, 403, 1213
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...713..883B" target="_blank">
<i>Sequential Star Formation in RCW 34: A Spectroscopic Census of the Stellar Content of High-Mass Star-Forming Regions</i>
</a>
<br/>
Bik, A.; Puga, E.; Waters, L. B. F. M.; Horrobin, M.; Henning, Th.; Vasyunina, T.; Beuther, H.; Linz, H.; Kaper, L.; van den Ancker, M.; Lenorzer, A.; Churchwell, E.; <strong>Kurtz, S.</strong>; Kouwenhoven, M. B. N.; Stolte, A.; de Koter, A.; Thi, W. F.; Comerón, F.; Waelkens, Ch.
<br/>
2010/04, The Astrophysical Journal, 713, 883
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...713..535C" target="_blank">
<i>Low-mass Galaxy Formation in Cosmological Adaptive Mesh Refinement Simulations: The Effects of Varying the Sub-grid Physics Parameters</i>
</a>
<br/>
<strong>Colín, Pedro</strong>; Avila-Reese, Vladimir; <strong>Vázquez-Semadeni, Enrique</strong>; Valenzuela, Octavio; Ceverino, Daniel
<br/>
2010/04, The Astrophysical Journal, 713, 535
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...713..423G" target="_blank">
<i>The Rare 23.1 GHz Methanol Masers in NGC 7538 IRS 1</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; <strong>Montes, Gabriela</strong>; <strong>Ramírez, Edgar A.</strong>; <strong>Kurtz, Stan</strong>; Araya, Esteban; Hofner, Peter
<br/>
2010/04, The Astrophysical Journal, 713, 423
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...711..881H" target="_blank">
<i>Can Solid Body Destruction Explain Abundance Discrepancies in Planetary Nebulae?</i>
</a>
<br/>
<strong>Henney, William J.</strong>; Stasińska, Grażyna
<br/>
2010/03, The Astrophysical Journal, 711, 881
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...711.1017P" target="_blank">
<i>H II Regions: Witnesses to Massive Star Formation</i>
</a>
<br/>
Peters, Thomas; Banerjee, Robi; Klessen, Ralf S.; Mac Low, Mordecai-Mark; <strong>Galván-Madrid, Roberto</strong>; Keto, Eric R.
<br/>
2010/03, The Astrophysical Journal, 711, 1017
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010JKAS...43....9K" target="_blank">
<i>Association of Infrared Dark Cloud Cores with YSOs: Starless or Starred IRDC Cores</i>
</a>
<br/>
Kim, Gwanjeong; <strong>Lee, Chang Won</strong>; Kim, Jongsoo; Lee, Youngung; Ballesteros-Paredes, Javier; Myers, Philip C.; Kurtz, S.
<br/>
2010/02, Journal of Korean Astronomical Society, 43, 9
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010MNRAS.402.1141G" target="_blank">
<i>Revisiting 2D numerical models for the 19th century outbursts of η Carinae</i>
</a>
<br/>
<strong>González, R. F.</strong>; <strong>Villa, A. M.</strong>; <strong>Gómez, G. C.</strong>; de Gouveia Dal Pino, E. M.; Raga, A. C.; Cantó, J.; Velázquez, P. F.; de La Fuente, E.
<br/>
2010/02, Monthly Notices of the Royal Astronomical Society, 402, 1141
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...710..567G" target="_blank">
<i>Four Highly Luminous Massive Star-forming Regions in the Norma Spiral Arm. I. Molecular Gas and Dust Observations</i>
</a>
<br/>
Garay, Guido; <strong>Mardones, Diego</strong>; Bronfman, Leonardo; May, Jorge; Chavarría, Luis; Nyman, Lars-Åke
<br/>
2010/02, The Astrophysical Journal, 710, 567
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010A&A...509A..50C" target="_blank">
<i>The structure of hot molecular cores over 1000 AU</i>
</a>
<br/>
Cesaroni, R.; Hofner, P.; Araya, E.; <strong>Kurtz, S.</strong>
<br/>
2010/01, Astronomy and Astrophysics, 509, A50
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2010ApJ...708...38N" target="_blank">
<i>Wall Emission in Circumbinary Disks: the Case of Coku Tau/4</i>
</a>
<br/>
<strong>Nagel, Erick</strong>; <strong>D'Alessio, Paola</strong>; Calvet, Nuria; Espaillat, Catherine; Sargent, Ben; Hernández, Jesús; Forrest, William J.
<br/>
2010/01, The Astrophysical Journal, 708, 38
</p></li>
</ol>
</div>
<div class="tab-pane" id="2009">
<h4 style="text-indent: 10px;">Publications 2009</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...706.1036G" target="_blank">
<i>Formation of an O-Star Cluster by Hierarchical Accretion in G20.08-0.14 N</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; Keto, Eric; Zhang, Qizhou; <strong>Kurtz, Stan</strong>; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.
<br/>
2009/12, The Astrophysical Journal, 706, 1036
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...707.1023V" target="_blank">
<i>High- and Low-Mass Star-Forming Regions from Hierarchical Gravitational Fragmentation. High Local Star Formation Rates with Low Global Efficiencies</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; <strong>Gómez, Gilberto C.</strong>; Jappsen, A. -Katharina; <strong>Ballesteros-Paredes, Javier</strong>; Klessen, Ralf S.
<br/>
2009/12, The Astrophysical Journal, 707, 1023
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...707.1650M" target="_blank">
<i>Effects of Non-Circular Motions on Azimuthal Color Gradients</i>
</a>
<br/>
Martínez-García, Eric E.; <strong>González-Lópezlira, Rosa A.</strong>; <strong>Gómez, Gilberto C.</strong>
<br/>
2009/12, The Astrophysical Journal, 707, 1650
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.400..263W" target="_blank">
<i>Diffuse continuum transfer in HII regions</i>
</a>
<br/>
Williams, R. J. R.; <strong>Henney, W. J.</strong>
<br/>
2009/11, Monthly Notices of the Royal Astronomical Society, 400, 263
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...706..244T" target="_blank">
<i>Radio Jets and Disks in the Intermediate-Mass Star-Forming Region NGC2071IR</i>
</a>
<br/>
Trinidad, M. A.; Rodríguez, T.; <strong>Rodríguez, L. F.</strong>
<br/>
2009/11, The Astrophysical Journal, 706, 244
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...705..899M" target="_blank">
<i>Disentangling the Nature of the Radio Emission in Wolf-Rayet Stars</i>
</a>
<br/>
Montes, Gabriela; Pérez-Torres, Miguel A.; Alberdi, Antonio; <strong>González, Ricardo F.</strong>
<br/>
2009/11, The Astrophysical Journal, 705, 899
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...703.1964F" target="_blank">
<i>Disk Evolution in the Three Nearby Star-forming Regions of Taurus, Chamaeleon, and Ophiuchus</i>
</a>
<br/>
Furlan, E.; Watson, Dan M.; McClure, M. K.; Manoj, P.; Espaillat, C.; <strong>D'Alessio, P.</strong>; Calvet, N.; Kim, K. H.; Sargent, B. A.; Forrest, W. J.; Hartmann, L.
<br/>
2009/10, The Astrophysical Journal, 703, 1964
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009RMxAA..45..273R" target="_blank">
<i>The Radio Counterparts to the Binary O4+O4 System CEN 1 in NGC 6618, the Cluster Ionizing M17</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; González, R. F.; Montes, G.
<br/>
2009/10, Revista Mexicana de Astronomia y Astrofisica, 45, 273
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...704L..15M" target="_blank">
<i>Evidence for Dynamical Changes in a Transitional Protoplanetary Disk with Mid-Infrared Variability</i>
</a>
<br/>
Muzerolle, James; Flaherty, Kevin; Balog, Zoltan; Furlan, Elise; Smith, Paul S.; Allen, Lori; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; Megeath, S. Thomas; Muench, August; Rieke, George H.; Sherry, William H.
<br/>
2009/10, The Astrophysical Journal, 704, L15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.399..861L" target="_blank">
<i>Too large and overlooked? Extended free-free emission towards massive star formation regions</i>
</a>
<br/>
Longmore, S. N.; Burton, M. G.; Keto, E.; <strong>Kurtz, S.</strong>; Walsh, A. J.
<br/>
2009/10, Monthly Notices of the Royal Astronomical Society, 399, 861
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...704L..45Z" target="_blank">
<i>Explosive Disintegration of a Massive Young Stellar System in Orion</i>
</a>
<br/>
Zapata, Luis A.; Schmid-Burgk, Johannes; Ho, Paul T. P.; <strong>Rodríguez, Luis F.</strong>; Menten, Karl M.
<br/>
2009/10, The Astrophysical Journal, 704, L45
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...704.1735H" target="_blank">
<i>Gravitational Collapse and Filament Formation: Comparison with the Pipe Nebula</i>
</a>
<br/>
Heitsch, Fabian; <strong>Ballesteros-Paredes, Javier</strong>; Hartmann, Lee
<br/>
2009/10, The Astrophysical Journal, 704, 1735
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009A&A...505..217S" target="_blank">
<i>Water maser detections in southern candidate post-AGB stars and planetary nebulae</i>
</a>
<br/>
Suárez, O.; Gómez, J. F.; Miranda, L. F.; Torrelles, J. M.; <strong>Gómez, Y.</strong>; Anglada, G.; Morata, O.
<br/>
2009/10, Astronomy and Astrophysics, 505, 217
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.398..157H" target="_blank">
<i>Radiation-magnetohydrodynamic simulations of the photoionization of magnetized globules</i>
</a>
<br/>
<strong>Henney, William J.</strong>; <strong>Arthur, S. Jane</strong>; de Colle, Fabio; Mellema, Garrelt
<br/>
2009/09, Monthly Notices of the Royal Astronomical Society, 398, 157
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.398..407C" target="_blank">
<i>Weather at Sierra Negra: 7.3-yr statistics and a new method to estimate the temporal fraction of cloud cover</i>
</a>
<br/>
Carrasco, E.; Carramiñana, A.; <strong>Avila, R.</strong>; Gutiérrez, C.; <strong>Avilés, J. L.</strong>; Reyes, J.; Meza, J.; Yam, O.
<br/>
2009/09, Monthly Notices of the Royal Astronomical Society, 398, 407
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.398.1201D" target="_blank">
<i>The orientations of molecular clouds in the outer Galaxy: evidence for the scale of the turbulence driver?</i>
</a>
<br/>
Dib, Sami; Walcher, C. Jakob; Heyer, Mark; Audit, Edouard; <strong>Loinard, Laurent</strong>
<br/>
2009/09, Monthly Notices of the Royal Astronomical Society, 398, 1201
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.398.1082B" target="_blank">
<i>Clump morphology and evolution in MHD simulations of molecular cloud formation</i>
</a>
<br/>
Banerjee, R.; <strong>Vázquez-Semadeni, E.</strong>; Hennebelle, P.; Klessen, R. S.
<br/>
2009/09, Monthly Notices of the Royal Astronomical Society, 398, 1082
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...702L.182A" target="_blank">
<i>Migration of Extrasolar Planets: Effects from X-wind Accretion Disks</i>
</a>
<br/>
Adams, Fred C.; Cai, Mike J.; <strong>Lizano, Susana</strong>
<br/>
2009/09, The Astrophysical Journal, 702, L182
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...701..677S" target="_blank">
<i>Rotationally Warm Molecular Hydrogen in the Orion Bar</i>
</a>
<br/>
Shaw, Gargi; Ferland, G. J.; <strong>Henney, W. J.</strong>; Stancil, P. C.; Abel, N. P.; Pellegrini, E. W.; Baldwin, J. A.; van Hoof, P. A. M.
<br/>
2009/08, The Astrophysical Journal, 701, 677
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...701..974F" target="_blank">
<i>The Rotating Molecular Structures and the Ionized Outflow Associated with IRAS 16547-4247</i>
</a>
<br/>
<strong>Franco-Hernández, Ramiro</strong>; Moran, James M.; <strong>Rodríguez, Luis F.</strong>; Garay, Guido
<br/>
2009/08, The Astrophysical Journal, 701, 974
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009AJ....138...46G" target="_blank">
<i>Expansion Parallax of the Planetary Nebula IC 418</i>
</a>
<br/>
<strong>Guzmán, Lizette</strong>; <strong>Loinard, Laurent</strong>; <strong>Gómez, Yolanda</strong>; Morisset, Christophe
<br/>
2009/07, The Astronomical Journal, 138, 46
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...698..131H" target="_blank">
<i>A Spatially Resolved Inner Hole in the Disk Around GM Aurigae</i>
</a>
<br/>
Hughes, A. Meredith; Andrews, Sean M.; Espaillat, Catherine; Wilner, David J.; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; Qi, Chunhua; Williams, Jonathan P.; Hogerheijde, Michiel R.
<br/>
2009/06, The Astrophysical Journal, 698, 131
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...698.1422Z" target="_blank">
<i>A Ring/Disk/Outflow System Associated with W51 North: A Very Massive Star in the Making</i>
</a>
<br/>
Zapata, Luis A.; Ho, Paul T. P.; Schilke, Peter; <strong>Rodríguez, Luis F.</strong>; Menten, Karl; Palau, Aina; Garrod, Robin T.
<br/>
2009/06, The Astrophysical Journal, 698, 1422
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...698.1321A" target="_blank">
<i>Radio Continuum and Methanol Observations of DR21(OH)</i>
</a>
<br/>
Araya, Esteban D.; <strong>Kurtz, Stan</strong>; Hofner, Peter; Linz, Hendrik
<br/>
2009/06, The Astrophysical Journal, 698, 1321
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009AJ....137.4330D" target="_blank">
<i>The Polarimetric and Photometric Variability of HH 30</i>
</a>
<br/>
<strong>Durán-Rojas, María Carolina</strong>; <strong>Watson, Alan M.</strong>; Stapelfeldt, Karl R.; Hiriart, David
<br/>
2009/05, The Astronomical Journal, 137, 4330
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009AJ....137.4127T" target="_blank">
<i>The Intermediate-Mass Embedded Cluster GM 24 Revisited: New Infrared and Radio Observations</i>
</a>
<br/>
Tapia, Mauricio; <strong>Rodríguez, Luis F.</strong>; Persi, Paolo; Roth, Miguel; Gómez, Mercedes
<br/>
2009/05, The Astronomical Journal, 137, 4127
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.395L..81B" target="_blank">
<i>Tidal forces as a regulator of star formation in Taurus</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>Gómez, Gilberto C.</strong>; <strong>Loinard, Laurent</strong>; <strong>Torres, Rosa M.</strong>; Pichardo, Bárbara
<br/>
2009/05, Monthly Notices of the Royal Astronomical Society, 395, L81
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009RMxAA..45...91G" target="_blank">
<i>A VLA Archive Observation of the Youngest Known Galactic Supernova Remnant G1.9+0.3</i>
</a>
<br/>
<strong>Gómez, Y.</strong>; Rodríguez, L. F.
<br/>
2009/04, Revista Mexicana de Astronomia y Astrofisica, 45, 91
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009RMxAA..45...85R" target="_blank">
<i>Ionization-bounded and Density-bounded Planetary Nebulae</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Gómez, Y.; Guzmán, L.
<br/>
2009/04, Revista Mexicana de Astronomia y Astrofisica, 45, 85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009RMxAA..45....3D" target="_blank">
<i>Radio Proper Motions of Wolf-Rayet Stars</i>
</a>
<br/>
<strong>Dzib, S.</strong>; Rodríguez, L. F.
<br/>
2009/04, Revista Mexicana de Astronomia y Astrofisica, 45, 3
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.394.1009R" target="_blank">
<i>Three-dimensional numerical model of the Omega Nebula (M17): simulated thermal X-ray emission</i>
</a>
<br/>
Reyes-Iturbide, J.; Velázquez, P. F.; Rosado, M.; Rodríguez-González, A.; <strong>González, R. F.</strong>; Esquivel, A.
<br/>
2009/04, Monthly Notices of the Royal Astronomical Society, 394, 1009
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...695..930G" target="_blank">
<i>The Magnetic Field Toward the Young Planetary Nebula K 3-35</i>
</a>
<br/>
<strong>Gómez, Y.</strong>; <strong>Tafoya, D.</strong>; Anglada, G.; Miranda, L. F.; Torrelles, J. M.; Patel, N. A.; <strong>Hernández, R. Franco</strong>
<br/>
2009/04, The Astrophysical Journal, 695, 930
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009AJ....137.3815O" target="_blank">
<i>Tangential Motions and Spectroscopy Within NGC 6720, the Ring Nebula</i>
</a>
<br/>
O'Dell, C. R.; <strong>Henney, W. J.</strong>; Sabbadin, F.
<br/>
2009/04, The Astronomical Journal, 137, 3815
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...693..656G" target="_blank">
<i>Magnetic and Thermal Pressures in Turbulent Two-Dimensional Bistable Flows</i>
</a>
<br/>
<strong>Gazol, Adriana</strong>; <strong>Luis, Leticia</strong>; Kim, Jongsoo
<br/>
2009/03, The Astrophysical Journal, 693, 656
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.393.1563B" target="_blank">
<i>On the gravitational content of molecular clouds and their cores</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>Gómez, Gilberto C.</strong>; Pichardo, Bárbara; <strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2009/03, Monthly Notices of the Royal Astronomical Society, 393, 1563
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...694..512M" target="_blank">
<i>Spiral Density Wave Triggering of Star Formation in SA and SAB Galaxies</i>
</a>
<br/>
<strong>Martínez-García, Eric E.</strong>; <strong>González-Lópezlira, Rosa A.</strong>; Bruzual-A, Gustavo
<br/>
2009/03, The Astrophysical Journal, 694, 512
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...694...29O" target="_blank">
<i>Collapsing Hot Molecular Cores: A Model for the Dust Spectrum and Ammonia Line Emission of the G31.41+0.31 Hot Core</i>
</a>
<br/>
Osorio, Mayra; Anglada, Guillem; <strong>Lizano, Susana</strong>; <strong>D'Alessio, Paola</strong>
<br/>
2009/03, The Astrophysical Journal, 694, 29
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...693L..86C" target="_blank">
<i>High Angular Resolution Radio Observations of the HL/XZ Tau Region: Mapping the 50 AU Protoplanetary Disk Around HL Tau and Resolving XZ Tau S Into a 13 AU Binary</i>
</a>
<br/>
<strong>Carrasco-González, Carlos</strong>; <strong>Rodríguez, Luis F.</strong>; Anglada, Guillem; Curiel, Salvador
<br/>
2009/03, The Astrophysical Journal, 693, L86
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.393..579M" target="_blank">
<i>Analytic solutions to the accretion of a rotating finite cloud towards a central object - I. Newtonian approach</i>
</a>
<br/>
Mendoza, S.; Tejeda, E.; <strong>Nagel, E.</strong>
<br/>
2009/02, Monthly Notices of the Royal Astronomical Society, 393, 579
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...692..162R" target="_blank">
<i>Resolving the Structure and Kinematics of the BN Object at 0farcs2 Resolution</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Zapata, Luis A.; Ho, Paul T. P.
<br/>
2009/02, The Astrophysical Journal, 692, 162
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009A&A...494..987P" target="_blank">
<i>Triggered star formation on the borders of the Galactic Hii region RCW 82</i>
</a>
<br/>
Pomarès, M.; Zavagno, A.; Deharveng, L.; Cunningham, M.; Jones, P.; <strong>Kurtz, S.</strong>; Russeil, D.; Caplan, J.; Comerón, F.
<br/>
2009/02, Astronomy and Astrophysics, 494, 987
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009AJ....137..367O" target="_blank">
<i>The Three-Dimensional Dynamic Structure of the Inner Orion Nebula</i>
</a>
<br/>
O'Dell, C. R.; <strong>Henney, W. J.</strong>; Abel, N. P.; Ferland, G. J.; <strong>Arthur, S. J.</strong>
<br/>
2009/01, The Astronomical Journal, 137, 367
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJS..180...84W" target="_blank">
<i>Crystalline Silicates and Dust Processing in the Protoplanetary Disks of the Taurus Young Cluster</i>
</a>
<br/>
Watson, Dan M.; Leisenring, Jarron M.; Furlan, Elise; Bohac, C. J.; Sargent, B.; Forrest, W. J.; Calvet, Nuria; Hartmann, Lee; Nordhaus, Jason T.; Green, Joel D.; Kim, K. H.; Sloan, G. C.; Chen, C. H.; Keller, L. D.; <strong>d'Alessio, Paola</strong>; Najita, J.; Uchida, Keven I.; Houck, J. R.
<br/>
2009/01, The Astrophysical Journal Supplement Series, 180, 84
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...690.1084A" target="_blank">
<i>Hypercompact H II Regions: Resolved Images of G34.26+0.15 A and B</i>
</a>
<br/>
<strong>Avalos, Martín</strong>; <strong>Lizano, Susana</strong>; <strong>Franco-Hernández, Ramiro</strong>; <strong>Rodríguez, Luis F.</strong>; Moran, James M.
<br/>
2009/01, The Astrophysical Journal, 690, 1084
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009MNRAS.392..964R" target="_blank">
<i>Multiple clump structures within photoionized regions</i>
</a>
<br/>
Raga, A. C.; <strong>Henney, W.</strong>; Vasconcelos, J.; Cerqueira, A.; Esquivel, A.; Rodríguez-González, A.
<br/>
2009/01, Monthly Notices of the Royal Astronomical Society, 392, 964
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2009ApJ...691..611T" target="_blank">
<i>A Collimated, Ionized Bipolar Structure and a High Density Torus in the Planetary Nebula IRAS 17347-3139</i>
</a>
<br/>
<strong>Tafoya, D.</strong>; <strong>Gómez, Y.</strong>; Patel, N. A.; Torrelles, J. M.; Gómez, J. F.; Anglada, G.; Miranda, L. F.; de Gregorio-Monsalvo, I.
<br/>
2009/01, The Astrophysical Journal, 691, 611
</p></li>
</ol>
</div>
<div class="tab-pane" id="2008">
<h4 style="text-indent: 10px;">Publications 2008</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...689L.145E" target="_blank">
<i>A Slowly Accreting ~10 Myr-old Transitional Disk in Orion OB1a</i>
</a>
<br/>
Espaillat, C.; Muzerolle, J.; Hernández, J.; Briceño, C.; Calvet, N.; <strong>D'Alessio, P.</strong>; McClure, M.; Watson, D. M.; Hartmann, L.; Sargent, B.
<br/>
2008/12, The Astrophysical Journal, 689, L145
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....136.2238C" target="_blank">
<i>Proper Motions of Thermal Radio Sources Near HH 7-11 in the NGC 1333 Star-Forming Region</i>
</a>
<br/>
Carrasco-González, Carlos; Anglada, Guillem; <strong>Rodríguez, Luis F.</strong>; Torrelles, José M.; Osorio, Mayra
<br/>
2008/12, The Astronomical Journal, 136, 2238
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008MNRAS.390.1061W" target="_blank">
<i>A bright, dust-obscured, millimetre-selected galaxy beyond the Bullet Cluster (1E0657-56)</i>
</a>
<br/>
Wilson, G. W.; Hughes, D. H.; Aretxaga, I.; Ezawa, H.; Austermann, J. E.; Doyle, S.; Ferrusca, D.; <strong>Hernández-Curiel, I.</strong>; Kawabe, R.; Kitayama, T.; Kohno, K.; Kuboi, A.; Matsuo, H.; Mauskopf, P. D.; Murakoshi, Y.; Montaña, A.; Natarajan, P.; Oshima, T.; Ota, N.; Perera, T. A.; <span id="2008MNRAS.390.1061W.authors" style="display: none;">Rand, J.; Scott, K. S.; Tanaka, K.; Tsuboi, M.; Williams, C. C.; Yamaguchi, N.; Yun, M. S.</span><span id="2008MNRAS.390.1061W.button"></span>
<script>
toggleAuthors('2008MNRAS.390.1061W', 27, 0);
</script>

<br/>
2008/11, Monthly Notices of the Royal Astronomical Society, 390, 1061
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008MNRAS.390.1127U" target="_blank">
<i>Kinematics of the H<SUB>2</SUB>O masers at the centre of the planetary nebula K3-35</i>
</a>
<br/>
<strong>Uscanga, L.</strong>; <strong>Gómez, Y.</strong>; Raga, A. C.; Cantó, J.; Anglada, G.; Gómez, J. F.; Torrelles, J. M.; Miranda, L. F.
<br/>
2008/11, Monthly Notices of the Royal Astronomical Society, 390, 1127
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....136.1852R" target="_blank">
<i>High-Angular Resolution Observations at 7 MM of the Core of the Quadrupolar HH 111/121 Outflow</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Torrelles, José M.; Anglada, Guillem; Reipurth, Bo
<br/>
2008/11, The Astronomical Journal, 136, 1852
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJS..178..330A" target="_blank">
<i>A Search for H<SUB>2</SUB>CO 6 cm Emission toward Young Stellar Objects. III. VLA Observations</i>
</a>
<br/>
Araya, E. D.; Hofner, P.; Goss, W. M.; Linz, H.; <strong>Kurtz, S.</strong>; Olmi, L.
<br/>
2008/10, The Astrophysical Journal Supplement Series, 178, 330
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...686.1007B" target="_blank">
<i>AGB Connection and Ultraviolet Luminosity Excess in Elliptical Galaxies</i>
</a>
<br/>
Buzzoni, Alberto; <strong>González-Lópezlira, Rosa A.</strong>
<br/>
2008/10, The Astrophysical Journal, 686, 1007
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008RMxAA..44..389W" target="_blank">
<i>The Photometric Variability of HH 30</i>
</a>
<br/>
<strong>Watson, A. M.</strong>; Durán-Rojas, M. C.; Stapelfeldt, K. R.
<br/>
2008/10, Revista Mexicana de Astronomia y Astrofisica, 44, 389
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008MNRAS.390..769V" target="_blank">
<i>The nature of the velocity field in molecular clouds - I. The non-magnetic case</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; <strong>González, Ricardo F.</strong>; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Gazol, Adriana</strong>; Kim, Jongsoo
<br/>
2008/10, Monthly Notices of the Royal Astronomical Society, 390, 769
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....136.1607Z" target="_blank">
<i>Mid-Infrared Spectra of Optically-Selected Type 2 Quasars</i>
</a>
<br/>
Zakamska, Nadia L.; <strong>Gómez, Laura</strong>; Strauss, Michael A.; Krolik, Julian H.
<br/>
2008/10, The Astronomical Journal, 136, 1607
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....136.1566O" target="_blank">
<i>High Spatial Velocity Features in the Orion Nebula,</i>
</a>
<br/>
O'Dell, C. R.; <strong>Henney, W. J.</strong>
<br/>
2008/10, The Astronomical Journal, 136, 1566
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...685..333G" target="_blank">
<i>Monitoring the Large Proper Motions of Radio Sources in the Orion BN/KL Region</i>
</a>
<br/>
<strong>Gómez, Laura</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Loinard, Laurent</strong>; <strong>Lizano, Susana</strong>; Allen, Christine; Poveda, Arcadio; Menten, Karl M.
<br/>
2008/09, The Astrophysical Journal, 685, 333
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...684.1281Z" target="_blank">
<i>Long-Wavelength Excesses of FU Orionis Objects: Flared Outer Disks or Infalling Envelopes?</i>
</a>
<br/>
Zhu, Zhaohuan; Hartmann, Lee; Calvet, Nuria; Hernandez, Jesus; Tannirkulam, Ajay-Kumar; <strong>D'Alessio, Paola</strong>
<br/>
2008/09, The Astrophysical Journal, 684, 1281
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...684..411K" target="_blank">
<i>PAH Emission from Herbig Ae/Be Stars</i>
</a>
<br/>
Keller, Luke D.; Sloan, G. C.; Forrest, W. J.; <strong>Ayala, S.</strong>; <strong>D'Alessio, P.</strong>; Shah, S.; Calvet, N.; Najita, J.; Li, A.; Hartmann, L.; Sargent, B.; Watson, D. M.; Chen, C. H.
<br/>
2008/09, The Astrophysical Journal, 684, 411
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...682L.125E" target="_blank">
<i>Confirmation of a Gapped Primordial Disk around LkCa 15</i>
</a>
<br/>
Espaillat, Catherine; Calvet, Nuria; Luhman, Kevin L.; Muzerolle, James; <strong>D'Alessio, Paola</strong>
<br/>
2008/08, The Astrophysical Journal, 682, L125
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...682L.121S" target="_blank">
<i>The Challenge of Sub-Keplerian Rotation for Disk Winds</i>
</a>
<br/>
Shu, Frank H.; <strong>Lizano, Susana</strong>; Galli, Daniele; Cai, Mike J.; Mohanty, Subhanjoy
<br/>
2008/08, The Astrophysical Journal, 682, L121
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008A&A...486L..43H" target="_blank">
<i>From the warm magnetized atomic medium to molecular clouds</i>
</a>
<br/>
Hennebelle, P.; Banerjee, R.; <strong>Vázquez-Semadeni, E.</strong>; Klessen, R. S.; Audit, E.
<br/>
2008/08, Astronomy and Astrophysics, 486, L43
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...683L.187M" target="_blank">
<i>A Sub-AU Outwardly Truncated Accretion Disk around a Classical T Tauri Star</i>
</a>
<br/>
McClure, M. K.; Forrest, W. J.; Sargent, B. A.; Watson, Dan M.; Furlan, E.; Manoj, P.; Luhman, K. L.; Calvet, N.; Espaillat, C.; <strong>D'Alessio, P.</strong>; Hartmann, L. W.; Tayrien, C.; Harrold, S. T.
<br/>
2008/08, The Astrophysical Journal, 683, L187
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008MNRAS.387.1511A" target="_blank">
<i>LOLAS: an optical turbulence profiler in the atmospheric boundary layer with extreme altitude resolution</i>
</a>
<br/>
<strong>Avila, R.</strong>; <strong>Avilés, J. L.</strong>; Wilson, R. W.; Chun, M.; Butterley, T.; Carrasco, E.
<br/>
2008/07, Monthly Notices of the Royal Astronomical Society, 387, 1511
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...681..350S" target="_blank">
<i>Internal Dynamics of the Hypercompact H II Region G28.20-0.04N</i>
</a>
<br/>
Sewiło, M.; Churchwell, E.; <strong>Kurtz, S.</strong>; Goss, W. M.; Hofner, P.
<br/>
2008/07, The Astrophysical Journal, 681, 350
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....135.2370R" target="_blank">
<i>The Collimated Jet Source in IRAS 16547-4247: Time Variation, Possible Precession, and Upper Limits to the Proper Motions Along the Jet Axis</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Moran, James M.; <strong>Franco-Hernández, Ramiro</strong>; Garay, Guido; Brooks, Kate J.; Mardones, Diego
<br/>
2008/06, The Astronomical Journal, 135, 2370
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...679.1364T" target="_blank">
<i>Constraining the Envelope Structure of L1527 IRS: Infrared Scattered Light Modeling</i>
</a>
<br/>
Tobin, John J.; Hartmann, Lee; Calvet, Nuria; <strong>D'Alessio, Paola</strong>
<br/>
2008/06, The Astrophysical Journal, 679, 1364
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...680..975M" target="_blank">
<i>Searching for Dust in the Intracluster Medium from Reddening of Background Galaxies</i>
</a>
<br/>
Muller, S.; Wu, S. -Y.; Hsieh, B. -C.; <strong>González, R. A.</strong>; <strong>Loinard, L.</strong>; Yee, H. K. C.; Gladders, M. D.
<br/>
2008/06, The Astrophysical Journal, 680, 975
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....135.2074G" target="_blank">
<i>Radio Interferometric Observations of Candidate Water-Maser-Emitting Planetary Nebulae</i>
</a>
<br/>
Gómez, José F.; Suárez, Olga; <strong>Gómez, Yolanda</strong>; Miranda, Luis F.; Torrelles, José M.; Anglada, Guillem; Morata, Óscar
<br/>
2008/06, The Astronomical Journal, 135, 2074
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJS..176..184F" target="_blank">
<i>Spitzer IRS Spectra and Envelope Models of Class I Protostars in Taurus</i>
</a>
<br/>
Furlan, E.; McClure, M.; Calvet, N.; Hartmann, L.; <strong>D'Alessio, P.</strong>; Forrest, W. J.; Watson, D. M.; Uchida, K. I.; Sargent, B.; Green, J. D.; Herter, T. L.
<br/>
2008/05, The Astrophysical Journal Supplement Series, 176, 184
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008A&A...482..585D" target="_blank">
<i>Triggered massive-star formation on the borders of Galactic H II regions. IV. Star formation at the periphery of Sh2-212</i>
</a>
<br/>
Deharveng, L.; Lefloch, B.; <strong>Kurtz, S.</strong>; Nadeau, D.; Pomarès, M.; Caplan, J.; Zavagno, A.
<br/>
2008/05, Astronomy and Astrophysics, 482, 585
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008A&A...481..107V" target="_blank">
<i>The physical structure of the point-symmetric and quadrupolar planetary nebula NGC 6309</i>
</a>
<br/>
Vázquez, R.; Miranda, L. F.; Olguín, L.; <strong>Ayala, S.</strong>; Torrelles, J. M.; Contreras, M. E.; Guillén, P. F.
<br/>
2008/04, Astronomy and Astrophysics, 481, 107
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...676L.143M" target="_blank">
<i>Observations of Disks around Brown Dwarfs in the TW Hydra Association with the Spitzer Infrared Spectrograph</i>
</a>
<br/>
Morrow, A. L.; Luhman, K. L.; Espaillat, C.; <strong>D'Alessio, P.</strong>; Adame, L.; Calvet, N.; Forrest, W. J.; Sargent, B.; Hartmann, L.; Watson, D. M.; Bohac, C. J.
<br/>
2008/04, The Astrophysical Journal, 676, L143
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...676.1073C" target="_blank">
<i>A Multiple System of Radio Sources at the Core of the L723 Multipolar Outflow</i>
</a>
<br/>
Carrasco-González, Carlos; Anglada, Guillem; <strong>Rodríguez, Luis F.</strong>; Torrelles, José M.; Osorio, Mayra; Girart, José M.
<br/>
2008/04, The Astrophysical Journal, 676, 1073
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...675..420A" target="_blank">
<i>Thermal Methanol Observations of the Outflow from the G31.41+0.31 Hot Molecular Core</i>
</a>
<br/>
Araya, E.; Hofner, P.; <strong>Kurtz, S.</strong>; Olmi, L.; Linz, H.
<br/>
2008/03, The Astrophysical Journal, 675, 420
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...674L..33G" target="_blank">
<i>Time Variation in G24.78+0.08 A1: Evidence for an Accreting Hypercompact H II Region?</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.; Keto, Eric
<br/>
2008/02, The Astrophysical Journal, 674, L33
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008AJ....135..575T" target="_blank">
<i>The Non-Thermal Radio Jet Toward the NGC 2264 Star Formation Region</i>
</a>
<br/>
<strong>Trejo, Alfonso</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2008/02, The Astronomical Journal, 135, 575
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008A&A...479L..25Z" target="_blank">
<i>Forming an early O-type star through gas accretion?</i>
</a>
<br/>
Zapata, L. A.; Palau, A.; Ho, P. T. P.; Schilke, P.; Garrod, R. T.; <strong>Rodríguez, L. F.</strong>; Menten, K.
<br/>
2008/02, Astronomy and Astrophysics, 479, L25
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008ApJ...672..423K" target="_blank">
<i>The Early Evolution of Massive Stars: Radio Recombination Line Spectra</i>
</a>
<br/>
Keto, Eric; Zhang, Qizhou; <strong>Kurtz, Stanley</strong>
<br/>
2008/01, The Astrophysical Journal, 672, 423
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2008A&A...477..373G" target="_blank">
<i>A model for the radio-continuum emission from the P Cygni wind</i>
</a>
<br/>
<strong>González, R. F.</strong>; Cantó, J.
<br/>
2008/01, Astronomy and Astrophysics, 477, 373
</p></li>
</ol>
</div>
<div class="tab-pane" id="2007">
<h4 style="text-indent: 10px;">Publications 2007</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...670L.135E" target="_blank">
<i>On the Diversity of the Taurus Transitional Disks: UX Tauri A and LkCa 15</i>
</a>
<br/>
Espaillat, C.; Calvet, N.; <strong>D'Alessio, P.</strong>; Hernández, J.; Qi, C.; Hartmann, L.; Furlan, E.; Watson, D. M.
<br/>
2007/12, The Astrophysical Journal, 670, L135
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...671L.137H" target="_blank">
<i>Merged Ionization/Dissociation Fronts in Planetary Nebulae</i>
</a>
<br/>
<strong>Henney, William J.</strong>; Williams, R. J. R.; Ferland, Gary J.; Shaw, Gargi; O'Dell, C. R.
<br/>
2007/12, The Astrophysical Journal, 671, L137
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007MNRAS.382.1965V" target="_blank">
<i>A precessing jet model for the PN K 3 - 35: simulated radio-continuum emission</i>
</a>
<br/>
Velázquez, Pablo F.; <strong>Gómez, Yolanda</strong>; Esquivel, Alejandro; Raga, Alejandro C.
<br/>
2007/12, Monthly Notices of the Royal Astronomical Society, 382, 1965
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...671.1839S" target="_blank">
<i>TMC-1C: An Accreting Starless Core</i>
</a>
<br/>
Schnee, S.; Caselli, P.; Goodman, A.; Arce, H. G.; <strong>Ballesteros-Paredes, J.</strong>; Kuchibhotla, K.
<br/>
2007/12, The Astrophysical Journal, 671, 1839
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...669.1050A" target="_blank">
<i>An H<SUB>2</SUB>CO 6 cm Maser Pinpointing a Possible Circumstellar Torus in IRAS 18566+0408</i>
</a>
<br/>
Araya, E.; Hofner, P.; Sewiło, M.; Goss, W. M.; Linz, H.; <strong>Kurtz, S.</strong>; Olmi, L.; Churchwell, E.; <strong>Rodríguez, L. F.</strong>; Garay, G.
<br/>
2007/11, The Astrophysical Journal, 669, 1050
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...669..459B" target="_blank">
<i>Continuum Observations at 3 and 12 mm of the High-Mass Protostellar Jet IRAS 16547-4247</i>
</a>
<br/>
Brooks, Kate J.; Garay, Guido; Voronkov, Maxim; <strong>Rodríguez, Luis F.</strong>
<br/>
2007/11, The Astrophysical Journal, 669, 459
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...670..480G" target="_blank">
<i>Statistics of Core Lifetimes in Numerical Simulations of Turbulent, Magnetically Supercritical Molecular Clouds</i>
</a>
<br/>
<strong>Galván-Madrid, Roberto</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; Kim, Jongsoo; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2007/11, The Astrophysical Journal, 670, 480
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...670..471A" target="_blank">
<i>Off-Center H II Regions in Power-Law Density Distributions</i>
</a>
<br/>
<strong>Arthur, S. Jane</strong>
<br/>
2007/11, The Astrophysical Journal, 670, 471
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...670..295R" target="_blank">
<i>VLA H53α Observations of the Central Region of the Super Star Cluster Galaxy NGC 5253</i>
</a>
<br/>
Rodríguez-Rico, C. A.; Goss, W. M.; Turner, J. L.; <strong>Gómez, Y.</strong>
<br/>
2007/11, The Astrophysical Journal, 670, 295
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...669.1042G" target="_blank">
<i>Formation and Collapse of Quiescent Cloud Cores Induced by Dynamic Compressions</i>
</a>
<br/>
<strong>Gómez, Gilberto C.</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; Shadmehri, Mohsen; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2007/11, The Astrophysical Journal, 669, 1042
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....134.1870T" target="_blank">
<i>Multiple Sources toward the High-Mass Young Star S140 IRS 1</i>
</a>
<br/>
Trinidad, Miguel A.; Torrelles, José M.; <strong>Rodríguez, Luis F.</strong>; Curiel, Salvador
<br/>
2007/11, The Astronomical Journal, 134, 1870
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....134.1679O" target="_blank">
<i>The Three-Dimensional Ionization Structure and Evolution of NGC 6720, The Ring Nebula</i>
</a>
<br/>
O'Dell, C. R.; Sabbadin, F.; <strong>Henney, W. J.</strong>
<br/>
2007/10, The Astronomical Journal, 134, 1679
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007RMxAA..43..315G" target="_blank">
<i>Photometry of Polar-Ring Galaxies</i>
</a>
<br/>
<strong>Godínez-Martínez, A.</strong>; Watson, A. M.; Matthews, L. D.; Sparke, L. S.
<br/>
2007/10, Revista Mexicana de Astronomia y Astrofisica, 43, 315
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...666L..37T" target="_blank">
<i>The Circumstellar Structure and Excitation Effects around the Massive Protostar Cepheus A HW 2</i>
</a>
<br/>
Torrelles, J. M.; Patel, N. A.; Curiel, S.; Ho, P. T. P.; Garay, G.; <strong>Rodríguez, L. F.</strong>
<br/>
2007/09, The Astrophysical Journal, 666, L37
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...666.1219L" target="_blank">
<i>Hubble and Spitzer Observations of an Edge-on Circumstellar Disk around a Brown Dwarf</i>
</a>
<br/>
Luhman, K. L.; Adame, Lucía; <strong>D'Alessio, Paola</strong>; Calvet, Nuria; McLeod, Kim K.; Bohac, C. J.; Forrest, William J.; Hartmann, Lee; Sargent, B.; Watson, Dan M.
<br/>
2007/09, The Astrophysical Journal, 666, 1219
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....134..906G" target="_blank">
<i>Very Large Array Observations of Candidate High-Mass Protostellar Objects at 7 Millimeters</i>
</a>
<br/>
Garay, Guido; <strong>Rodríguez, Luis F.</strong>; de Gregorio-Monsalvo, Itziar
<br/>
2007/09, The Astronomical Journal, 134, 906
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007A&A...471L..59Z" target="_blank">
<i>Circumbinary molecular rings around young stars in Orion</i>
</a>
<br/>
<strong>Zapata, L. A.</strong>; Ho, P. T. P.; <strong>Rodríguez, L. F.</strong>; Schilke, P.; <strong>Kurtz, S.</strong>
<br/>
2007/09, Astronomy and Astrophysics, 471, L59
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...664L.111E" target="_blank">
<i>Probing the Dust and Gas in the Transitional Disk of CS Cha with Spitzer</i>
</a>
<br/>
Espaillat, Catherine; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; Bergin, Edwin; Hartmann, Lee; Watson, Dan; Furlan, Elise; Najita, Joan; Forrest, William; McClure, Melissa; Sargent, Ben; Bohac, Chris; Harrold, Samuel T.
<br/>
2007/08, The Astrophysical Journal, 664, L111
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007Natur.448.1026W" target="_blank">
<i>The development of a protoplanetary disk from its natal envelope</i>
</a>
<br/>
Watson, Dan M.; Bohac, C. J.; Hull, C.; Forrest, William J.; Furlan, E.; Najita, J.; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; Hartmann, Lee; Sargent, B.; Green, Joel D.; Kim, Kyoung Hee; Houck, J. R.
<br/>
2007/08, Nature, 448, 1026
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...664.1176F" target="_blank">
<i>HD 98800: A 10 Myr Old Transition Disk</i>
</a>
<br/>
Furlan, E.; Sargent, B.; Calvet, N.; Forrest, W. J.; <strong>D'Alessio, P.</strong>; Hartmann, L.; Watson, D. M.; Green, J. D.; Najita, J.; Chen, C. H.
<br/>
2007/08, The Astrophysical Journal, 664, 1176
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...665..535S" target="_blank">
<i>Mean Field Magnetohydrodynamics of Accretion Disks</i>
</a>
<br/>
Shu, Frank H.; Galli, Daniele; <strong>Lizano, Susana</strong>; Glassgold, Alfred E.; Diamond, Patrick H.
<br/>
2007/08, The Astrophysical Journal, 665, 535
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007A&A...471..193S" target="_blank">
<i>Enrichment of the interstellar medium by metal-rich droplets and the abundance bias in H ii regions</i>
</a>
<br/>
Stasińska, G.; Tenorio-Tagle, G.; Rodríguez, M.; <strong>Henney, W. J.</strong>
<br/>
2007/08, Astronomy and Astrophysics, 471, 193
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...663..857U" target="_blank">
<i>Position-Velocity Diagrams for the Maser Emission Coming from a Keplerian Ring</i>
</a>
<br/>
<strong>Uscanga, Lucero</strong>; Cantó, Jorge; Raga, Alejandro C.
<br/>
2007/07, The Astrophysical Journal, 663, 857
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...663.1083R" target="_blank">
<i>Changes in the Radio Appearance of MWC 349A</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Gómez, Yolanda</strong>; <strong>Tafoya, Daniel</strong>
<br/>
2007/07, The Astrophysical Journal, 663, 1083
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...664..536H" target="_blank">
<i>An Inner Hole in the Disk around TW Hydrae Resolved in 7 mm Dust Emission</i>
</a>
<br/>
Hughes, A. M.; Wilner, D. J.; Calvet, N.; <strong>D'Alessio, P.</strong>; Claussen, M. J.; Hogerheijde, M. R.
<br/>
2007/07, The Astrophysical Journal, 664, 536
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007A&A...469..587L" target="_blank">
<i>Resolving the B[e] star Hen 3-1191 at 10 μm with VLTI/MIDI</i>
</a>
<br/>
<strong>Lachaume, R.</strong>; Preibisch, Th.; Driebe, Th.; Weigelt, G.
<br/>
2007/07, Astronomy and Astrophysics, 469, 587
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...662L..75S" target="_blank">
<i>Formation of OB Associations in Galaxies</i>
</a>
<br/>
Shu, Frank H.; Allen, Ronald J.; <strong>Lizano, Susana</strong>; Galli, Daniele
<br/>
2007/06, The Astrophysical Journal, 662, L75
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....133.2343O" target="_blank">
<i>Determination of the Physical Conditions of the Knots in the Helix Nebula from Optical and Infrared Observations</i>
</a>
<br/>
O'Dell, C. R.; <strong>Henney, W. J.</strong>; Ferland, G. J.
<br/>
2007/05, The Astronomical Journal, 133, 2343
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....133.2192H" target="_blank">
<i>Large-Scale Flows from Orion South</i>
</a>
<br/>
<strong>Henney, W. J.</strong>; O'Dell, C. R.; <strong>Zapata, Luis A.</strong>; <strong>García-Díaz, Ma. T.</strong>; <strong>Rodríguez, Luis F.</strong>; Robberto, Massimo
<br/>
2007/05, The Astronomical Journal, 133, 2192
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...661..361M" target="_blank">
<i>Abundant Crystalline Silicates in the Disk of a Very Low Mass Star</i>
</a>
<br/>
Merín, B.; Augereau, J. -C.; van Dishoeck, E. F.; Kessler-Silacci, J.; Dullemond, C. P.; Blake, G. A.; Lahuis, F.; Brown, J. M.; Geers, V. C.; Pontoppidan, K. M.; Comerón, F.; Frasca, A.; Guieu, S.; Alcalá, J. M.; Boogert, A. C. A.; Evans, N. J., II; <strong>D'Alessio, P.</strong>; Mundy, L. G.; Chapman, N.
<br/>
2007/05, The Astrophysical Journal, 661, 361
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJS..170..152A" target="_blank">
<i>A Search for Formaldehyde 6 cm Emission toward Young Stellar Objects. II. H<SUB>2</SUB>CO and H110α Observations</i>
</a>
<br/>
Araya, E.; Hofner, P.; Goss, W. M.; Linz, H.; <strong>Kurtz, S.</strong>; Olmi, L.
<br/>
2007/05, The Astrophysical Journal Supplement Series, 170, 152
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...661..262D" target="_blank">
<i>The Virial Balance of Clumps and Cores in Molecular Clouds</i>
</a>
<br/>
<strong>Dib, Sami</strong>; Kim, Jongsoo; <strong>Vázquez-Semadeni, Enrique</strong>; Burkert, Andreas; Shadmehri, Mohsen
<br/>
2007/05, The Astrophysical Journal, 661, 262
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...660.1296F" target="_blank">
<i>From Ultracompact to Extended H II Regions. II. Cloud Gravity and Stellar Motion</i>
</a>
<br/>
Franco, José; García-Segura, Guillermo; <strong>Kurtz, Stanley E.</strong>; <strong>Arthur, S. Jane</strong>
<br/>
2007/05, The Astrophysical Journal, 660, 1296
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007A&A...465..197H" target="_blank">
<i>Sub-arcsecond resolution radio continuum observations of IRAS 20126+4104</i>
</a>
<br/>
Hofner, P.; Cesaroni, R.; Olmi, L.; <strong>Rodríguez, L. F.</strong>; Martí, J.; Araya, E.
<br/>
2007/04, Astronomy and Astrophysics, 465, 197
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007RMxAA..43..173R" target="_blank">
<i>Proper Motions of the Ansae in the Planetary Nebula NGC7009</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Gómez, Y.
<br/>
2007/04, Revista Mexicana de Astronomia y Astrofisica, 43, 173
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007RMxAA..43..149R" target="_blank">
<i>Radio Continuum Sources Associated with AB Aur</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Zapata, L.; Ho, P. T. P.
<br/>
2007/04, Revista Mexicana de Astronomia y Astrofisica, 43, 149
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007RMxAA..43..123B" target="_blank">
<i>Remarks on Rapid vs. Slow Star Formation</i>
</a>
<br/>
<strong>Ballesteros-Paredes, J.</strong>; Hartmann, L.
<br/>
2007/04, Revista Mexicana de Astronomia y Astrofisica, 43, 123
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....133..845W" target="_blank">
<i>Asymmetry and Variability in the HH 30 Circumstellar Disk</i>
</a>
<br/>
<strong>Watson, Alan M.</strong>; Stapelfeldt, Karl R.
<br/>
2007/03, The Astronomical Journal, 133, 845
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...657..870V" target="_blank">
<i>Molecular Cloud Evolution. II. From Cloud Formation to the Early Stages of Star Formation in Decaying Conditions</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; <strong>Gómez, Gilberto C.</strong>; Jappsen, A. Katharina; <strong>Ballesteros-Paredes, Javier</strong>; <strong>González, Ricardo F.</strong>; Klessen, Ralf S.
<br/>
2007/03, The Astrophysical Journal, 657, 870
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....133..952G" target="_blank">
<i>Velocity Structure in the Orion Nebula. I. Spectral Mapping in Low-Ionization Lines</i>
</a>
<br/>
<strong>García-Díaz, Ma. T.</strong>; <strong>Henney, W. J.</strong>
<br/>
2007/03, The Astronomical Journal, 133, 952
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007A&A...463..217G" target="_blank">
<i>Discovery of an energetic bipolar molecular outflow towards IRAS 16547-4247</i>
</a>
<br/>
Garay, G.; Mardones, D.; Bronfman, L.; Brooks, K. J.; <strong>Rodríguez, L. F.</strong>; Güsten, R.; Nyman, L. -Å.; Franco-Hernández, R.; Moran, J. M.
<br/>
2007/02, Astronomy and Astrophysics, 463, 217
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007AJ....133..364T" target="_blank">
<i>Detection of HCO<SUP>+</SUP> Emission toward the Planetary Nebula K3-35</i>
</a>
<br/>
<strong>Tafoya, D.</strong>; <strong>Gómez, Y.</strong>; Anglada, G.; <strong>Loinard, L.</strong>; Torrelles, J. M.; Miranda, L. F.; Osorio, M.; <strong>Franco-Hernández, R.</strong>; Nyman, L. -Å.; Nakashima, J.; Deguchi, S.
<br/>
2007/02, The Astronomical Journal, 133, 364
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007JKAS...40..137K" target="_blank">
<i>Triggered High Mass Star Formation</i>
</a>
<br/>
Kurtz, Stan
<br/>
2007/00, Journal of Korean Astronomical Society, 40, 137
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...654L..95A" target="_blank">
<i>First Detection of an H<SUB>2</SUB>CO 6 cm Maser Flare: A Burst in IRAS 18566+0408</i>
</a>
<br/>
Araya, E.; Hofner, P.; Sewiło, M.; Linz, H.; <strong>Kurtz, S.</strong>; Olmi, L.; Watson, C.; Churchwell, E.
<br/>
2007/01, The Astrophysical Journal, 654, L95
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...654L.143R" target="_blank">
<i>Compact Centimeter and Millimeter Sources in NGC 6334 I(N): OB Stars in the Making?</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Zapata, Luis A.</strong>; Ho, Paul T. P.
<br/>
2007/01, The Astrophysical Journal, 654, L143
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2007ApJ...654...53M" target="_blank">
<i>The Dependence of the Mass Assembly History of Cold Dark Matter Halos on Environment</i>
</a>
<br/>
Maulbetsch, Christian; Avila-Reese, Vladimir; <strong>Colín, Pedro</strong>; Gottlöber, Stefan; Khalatyan, Arman; Steinmetz, Matthias
<br/>
2007/01, The Astrophysical Journal, 654, 53
</p></li>
</ol>
</div>
<div class="tab-pane" id="2006">
<h4 style="text-indent: 10px;">Publications 2006</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...653..398Z" target="_blank">
<i>Silicon Monoxide Observations Reveal a Cluster of Hidden Compact Outflows in the OMC 1 South Region</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; Ho, Paul T. P.; <strong>Rodríguez, Luis F.</strong>; O'Dell, C. R.; Zhang, Qizhou; Muench, August
<br/>
2006/12, The Astrophysical Journal, 653, 398
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006AJ....132.2376G" target="_blank">
<i>Errors in Kinematic Distances and Our Image of the Milky Way Galaxy</i>
</a>
<br/>
<strong>Gómez, Gilberto C.</strong>
<br/>
2006/12, The Astronomical Journal, 132, 2376
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006MNRAS.373..391G" target="_blank">
<i>Predicted radio-continuum emission from the little Homunculus of the η Carinae nebula</i>
</a>
<br/>
<strong>González, R. F.</strong>; <strong>Montes, G.</strong>; Cantó, J.; <strong>Loinard, L.</strong>
<br/>
2006/11, Monthly Notices of the Royal Astronomical Society, 373, 391
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006AJ....132.1918T" target="_blank">
<i>Interferometric Observations toward the High-Mass Young Stellar Object IRAS 23139+5939: Radio Continuum and Water Maser Emission</i>
</a>
<br/>
Trinidad, Miguel A.; Curiel, Salvador; Torrelles, José M.; <strong>Rodríguez, Luis F.</strong>; Migenes, Victor; Patel, Nimesh
<br/>
2006/11, The Astronomical Journal, 132, 1918
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006AJ....132.1851A" target="_blank">
<i>Arecibo Observations of Formaldehyde in L1551</i>
</a>
<br/>
Araya, Esteban; Hofner, Peter; Olmi, Luca; <strong>Kurtz, Stan</strong>; Linz, Hendrik
<br/>
2006/11, The Astronomical Journal, 132, 1851
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...652..554B" target="_blank">
<i>Proper Motion of Pulsar B1800-21</i>
</a>
<br/>
Brisken, W. F.; <strong>Carrillo-Barragán, M.</strong>; <strong>Kurtz, S.</strong>; Finley, J. P.
<br/>
2006/11, The Astrophysical Journal, 652, 554
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006MNRAS.372..457S" target="_blank">
<i>Evolution of HII regions in hierarchically structured molecular clouds</i>
</a>
<br/>
Shabala, S. S.; Ellingsen, S. P.; <strong>Kurtz, S. E.</strong>; Forbes, L. K.
<br/>
2006/10, Monthly Notices of the Royal Astronomical Society, 372, 457
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006A&A...458..191D" target="_blank">
<i>Triggered massive-star formation on the borders of Galactic H II regions. III. Star formation at the periphery of Sh2-219</i>
</a>
<br/>
Deharveng, L.; Lefloch, B.; Massi, F.; Brand, J.; <strong>Kurtz, S.</strong>; Zavagno, A.; Caplan, J.
<br/>
2006/10, Astronomy and Astrophysics, 458, 191
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006RMxAA..42..147T" target="_blank">
<i>On the Distance to the Bright Nonthermal Radio Sources in the Direction of an Extraordinarily Massive Cluster of Red Supergiants</i>
</a>
<br/>
<strong>Trejo, A.</strong>; Rodríguez, L. F.
<br/>
2006/10, Revista Mexicana de Astronomia y Astrofisica, 42, 147
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006MNRAS.372..443B" target="_blank">
<i>Six myths on the virial theorem for interstellar clouds</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>
<br/>
2006/10, Monthly Notices of the Royal Astronomical Society, 372, 443
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...648..484H" target="_blank">
<i>Why Do T Tauri Disks Accrete?</i>
</a>
<br/>
Hartmann, Lee; <strong>D'Alessio, Paola</strong>; Calvet, Nuria; Muzerolle, James
<br/>
2006/09, The Astrophysical Journal, 648, 484
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...647..397M" target="_blank">
<i>Dynamical H II Region Evolution in Turbulent Molecular Clouds</i>
</a>
<br/>
Mellema, Garrelt; <strong>Arthur, S. Jane</strong>; <strong>Henney, William J.</strong>; Iliev, Ilian T.; Shapiro, Paul R.
<br/>
2006/08, The Astrophysical Journal, 647, 397
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJS..165..568F" target="_blank">
<i>A Survey and Analysis of Spitzer Infrared Spectrograph Spectra of T Tauri Stars in Taurus</i>
</a>
<br/>
Furlan, E.; Hartmann, L.; Calvet, N.; <strong>D'Alessio, P.</strong>; <strong>Franco-Hernández, R.</strong>; Forrest, W. J.; Watson, D. M.; Uchida, K. I.; Sargent, B.; Green, J. D.; Keller, L. D.; Herter, T. L.
<br/>
2006/08, The Astrophysical Journal Supplement Series, 165, 568
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...647..382S" target="_blank">
<i>Gravitational Collapse of Magnetized Clouds. II. The Role of Ohmic Dissipation</i>
</a>
<br/>
Shu, Frank H.; Galli, Daniele; <strong>Lizano, Susana</strong>; Cai, Mike
<br/>
2006/08, The Astrophysical Journal, 647, 382
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...647..374G" target="_blank">
<i>Gravitational Collapse of Magnetized Clouds. I. Ideal Magnetohydrodynamic Accretion Flow</i>
</a>
<br/>
Galli, Daniele; <strong>Lizano, Susana</strong>; Shu, Frank H.; Allen, Anthony
<br/>
2006/08, The Astrophysical Journal, 647, 374
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006A&A...454..221B" target="_blank">
<i>The high-mass star-forming region IRAS 18182-1433</i>
</a>
<br/>
Beuther, H.; Zhang, Q.; Sridharan, T. K.; Lee, C. -F.; <strong>Zapata, L. A.</strong>
<br/>
2006/07, Astronomy and Astrophysics, 454, 221
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJS..165..283A" target="_blank">
<i>Hydrodynamics of Cometary Compact H II Regions</i>
</a>
<br/>
<strong>Arthur, S. Jane</strong>; Hoare, M. G.
<br/>
2006/07, The Astrophysical Journal Supplement Series, 165, 283
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...645..395S" target="_blank">
<i>Dust Processing in Disks around T Tauri Stars</i>
</a>
<br/>
Sargent, B.; Forrest, W. J.; <strong>D'Alessio, P.</strong>; Li, A.; Najita, J.; Watson, D. M.; Calvet, N.; Furlan, E.; Green, J. D.; Kim, K. H.; Sloan, G. C.; Chen, C. H.; Hartmann, L.; Houck, J. R.
<br/>
2006/07, The Astrophysical Journal, 645, 395
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006NewAR..50..389C" target="_blank">
<i>FRIDA: The infrared imager and integral field spectrograph for the adaptive optics system of GTC</i>
</a>
<br/>
Cuevas, S.; López, J. A.; Eikenberry, S.; Sánchez, B.; <strong>Watson, A.</strong>; Garzón, F.; Prieto, A.; Fuentes, J.; Díaz, J. J.; Espejo, C.; Flores, R.; Bringas, V.; Chapa, O.
<br/>
2006/06, New Astronomy Reviews, 50, 389
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...643.1003M" target="_blank">
<i>24 μm Detections of Circum(sub)stellar Disks in IC 348: Grain Growth and Inner Holes?</i>
</a>
<br/>
Muzerolle, James; Adame, Lucía; <strong>D'Alessio, Paola</strong>; Calvet, Nuria; Luhman, Kevin L.; Muench, August A.; Lada, Charles J.; Rieke, George H.; Siegler, Nick; Trilling, David E.; Young, Erick T.; Allen, Lori; Hartmann, Lee; Megeath, S. Thomas
<br/>
2006/06, The Astrophysical Journal, 643, 1003
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...643..978K" target="_blank">
<i>Occurrence Frequency of CO Outflows in Massive Protostellar Candidates</i>
</a>
<br/>
Kim, Kee-Tae; <strong>Kurtz, S. E.</strong>
<br/>
2006/06, The Astrophysical Journal, 643, 978
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...644..924C" target="_blank">
<i>Chemical and Photometric Evolution of the Local Group Galaxy NGC 6822 in a Cosmological Context</i>
</a>
<br/>
Carigi, Leticia; <strong>Colín, Pedro</strong>; Peimbert, Manuel
<br/>
2006/06, The Astrophysical Journal, 644, 924
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...644..914R" target="_blank">
<i>Very Large Array H53α and H92α Line Observations of the Central Region of NGC 253</i>
</a>
<br/>
<strong>Rodríguez-Rico, C. A.</strong>; Goss, W. M.; Zhao, J. -H.; <strong>Gómez, Y.</strong>; Anantharamaiah, K. R.
<br/>
2006/06, The Astrophysical Journal, 644, 914
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...643L..33A" target="_blank">
<i>A New Galactic 6 cm Formaldehyde Maser</i>
</a>
<br/>
Araya, E.; Hofner, P.; Goss, W. M.; <strong>Kurtz, S.</strong>; Linz, H.; Olmi, L.
<br/>
2006/05, The Astrophysical Journal, 643, L33
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...643..245V" target="_blank">
<i>Molecular Cloud Evolution. I. Molecular Cloud and Thin Cold Neutral Medium Sheet Formation</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; Ryu, Dongsu; Passot, Thierry; <strong>González, Ricardo F.</strong>; <strong>Gazol, Adriana</strong>
<br/>
2006/05, The Astrophysical Journal, 643, 245
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...642..319D" target="_blank">
<i>CCS and NH<SUB>3</SUB> Emission Associated with Low-Mass Young Stellar Objects</i>
</a>
<br/>
de Gregorio-Monsalvo, Itziar; Gómez, José F.; Suárez, Olga; Kuiper, Thomas B. H.; <strong>Rodríguez, Luis F.</strong>; Jiménez-Bailón, Elena
<br/>
2006/05, The Astrophysical Journal, 642, 319
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006RMxAA..42...19W" target="_blank">
<i>Mid-Infrared Observations of V838 Mon</i>
</a>
<br/>
<strong>Watson, A. M.</strong>; Gómez, L.; Costero, R.
<br/>
2006/04, Revista Mexicana de Astronomia y Astrofisica, 42, 19
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...641..406A" target="_blank">
<i>Spectra and Sizes of Hypercompact H II Regions</i>
</a>
<br/>
<strong>Avalos, Martín</strong>; <strong>Lizano, Susana</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Franco-Hernández, Ramiro</strong>; Moran, James M.
<br/>
2006/04, The Astrophysical Journal, 641, 406
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006RMxAA..42..127G" target="_blank">
<i>Expansion Parallax for the Compact Planetary Nebula M2-43</i>
</a>
<br/>
<strong>Guzmán, L.</strong>; Gómez, Y.; Rodríguez, L. F.
<br/>
2006/04, Revista Mexicana de Astronomia y Astrofisica, 42, 127
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006RMxAA..42...15C" target="_blank">
<i>Centimeter Emission in the UY Aur System</i>
</a>
<br/>
<strong>Contreras, M. E.</strong>; Wilkin, F. P.
<br/>
2006/04, Revista Mexicana de Astronomia y Astrofisica, 42, 15
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006PASP..118..503A" target="_blank">
<i>Generalized SCIDAR Measurements at San Pedro Mártir. II. Wind Profile Statistics</i>
</a>
<br/>
<strong>Avila, R.</strong>; Carrasco, E.; <strong>Ibañez, F.</strong>; Vernin, J.; Prieur, J. -L.; Cruz, D. X.
<br/>
2006/03, Publications of the Astronomical Society of the Pacific, 118, 503
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...638..797D" target="_blank">
<i>The Supernova Rate-Velocity Dispersion Relation in the Interstellar Medium</i>
</a>
<br/>
<strong>Dib, Sami</strong>; Bell, Eric; Burkert, Andreas
<br/>
2006/02, The Astrophysical Journal, 638, 797
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...638..314D" target="_blank">
<i>Effects of Dust Growth and Settling in T Tauri Disks</i>
</a>
<br/>
<strong>D'Alessio, Paola</strong>; Calvet, Nuria; Hartmann, Lee; <strong>Franco-Hernández, Ramiro</strong>; <strong>Servín, Hermelinda</strong>
<br/>
2006/02, The Astrophysical Journal, 638, 314
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006AJ....131..939Z" target="_blank">
<i>In Search of Circumstellar Disks around Young Massive Stars</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.; Beuther, Henrik; Zhang, Qizhou
<br/>
2006/02, The Astronomical Journal, 131, 939
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...638..878C" target="_blank">
<i>Large Proper Motions in the Jet of the High-Mass YSO Cepheus A HW2</i>
</a>
<br/>
Curiel, S.; Ho, P. T. P.; Patel, N. A.; Torrelles, J. M.; <strong>Rodríguez, L. F.</strong>; Trinidad, M. A.; Cantó, J.; Hernández, L.; Gómez, J. F.; Garay, G.; Anglada, G.
<br/>
2006/02, The Astrophysical Journal, 638, 878
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...638..897S" target="_blank">
<i>Disk Evolution in Cep OB2: Results from the Spitzer Space Telescope</i>
</a>
<br/>
Sicilia-Aguilar, Aurora; Hartmann, Lee; Calvet, Nuria; Megeath, S. T.; Muzerolle, James; Allen, Lori; <strong>D'Alessio, Paola</strong>; Merín, Bruno; Stauffer, John; Young, Erick; Lada, Charles
<br/>
2006/02, The Astrophysical Journal, 638, 897
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2006ApJ...637..384B" target="_blank">
<i>The Mass Spectra of Cores in Turbulent Molecular Clouds and Implications for the Initial Mass Function</i>
</a>
<br/>
<strong>Ballesteros-Paredes, Javier</strong>; <strong>Gazol, Adriana</strong>; Kim, Jongsoo; Klessen, Ralf S.; Jappsen, Anne-Katharina; <strong>Tejero, Epimenio</strong>
<br/>
2006/01, The Astrophysical Journal, 637, 384
</p></li>
</ol>
</div>
<div class="tab-pane" id="2005">
<h4 style="text-indent: 10px;">Publications 2005</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005MNRAS.364..738G" target="_blank">
<i>Spectral index of the H<SUB>2</SUB>O-maser-emitting planetary nebula IRAS 17347-3139</i>
</a>
<br/>
Gómez, J. F.; de Gregorio-Monsalvo, I.; Lovell, J. E. J.; Anglada, G.; Miranda, L. F.; Suárez, O.; Torrelles, J. M.; <strong>Gómez, Y.</strong>
<br/>
2005/12, Monthly Notices of the Royal Astronomical Society, 364, 738
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...635L..93L" target="_blank">
<i>Discovery of a Planetary-Mass Brown Dwarf with a Circumstellar Disk</i>
</a>
<br/>
Luhman, K. L.; Adame, Lucía; <strong>D'Alessio, Paola</strong>; Calvet, Nuria; Hartmann, Lee; Megeath, S. T.; Fazio, G. G.
<br/>
2005/12, The Astrophysical Journal, 635, L93
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...635.1166G" target="_blank">
<i>Dynamical Decay of a Massive Multiple System in Orion KL?</i>
</a>
<br/>
<strong>Gómez, Laura</strong>; <strong>RodrÍguez, Luis F.</strong>; <strong>Loinard, Laurent</strong>; <strong>Lizano, Susana</strong>; Poveda, Arcadio; Allen, Christine
<br/>
2005/12, The Astrophysical Journal, 635, 1166
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....130.2206T" target="_blank">
<i>Very Large Array Simultaneous 1.3 cm Continuum and H<SUB>2</SUB>O Maser Observations toward IRAS 20126+4104</i>
</a>
<br/>
Trinidad, Miguel A.; Curiel, Salvador; Migenes, Victor; Patel, Nimesh; Torrelles, José M.; Gómez, José F.; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.; Cantó, Jorge
<br/>
2005/11, The Astronomical Journal, 130, 2206
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005MNRAS.363.1279G" target="_blank">
<i>Near-infrared surface brightness fluctuations and optical colours of Magellanic star clusters</i>
</a>
<br/>
<strong>González-Lópezlira, R. A.</strong>; <strong>Albarrán, M. Y.</strong>; Mouhcine, M.; Liu, M. C.; Bruzual-A., G.; de Batz, B.
<br/>
2005/11, Monthly Notices of the Royal Astronomical Society, 363, 1279
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...634...51A" target="_blank">
<i>The Dependence on Environment of Cold Dark Matter Halo Properties</i>
</a>
<br/>
Avila-Reese, Vladimir; <strong>Colín, Pedro</strong>; Gottlöber, Stefan; Firmani, Claudio; Maulbetsch, Christian
<br/>
2005/11, The Astrophysical Journal, 634, 51
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...633..198R" target="_blank">
<i>VLA H53α Radio Recombination Line Observations of the Ultraluminous Infrared Galaxy Arp 220</i>
</a>
<br/>
<strong>Rodríguez-Rico, C. A.</strong>; Goss, W. M.; Viallefond, F.; Zhao, J. -H.; <strong>Gómez, Y.</strong>; Anantharamaiah, K. R.
<br/>
2005/11, The Astrophysical Journal, 633, 198
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...633L..93P" target="_blank">
<i>PKS 1622-253: A Weakly Accreting, Powerful Gamma-Ray Source</i>
</a>
<br/>
Punsly, Brian; <strong>Rodríguez, Luis F.</strong>; Tingay, Steven J.; Cellone, Sergio A.
<br/>
2005/11, The Astrophysical Journal, 633, L93
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....130.2185L" target="_blank">
<i>Stellar Winds and Embedded Star Formation in the Galactic Center Quintuplet and Arches Clusters: Multifrequency Radio Observations</i>
</a>
<br/>
Lang, Cornelia C.; Johnson, Kelsey E.; Goss, W. M.; <strong>Rodríguez, Luis F.</strong>
<br/>
2005/11, The Astronomical Journal, 130, 2185
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005RMxAA..41..435R" target="_blank">
<i>Proper Motions in Cepheus A</i>
</a>
<br/>
<strong>Rodríguez, L. F.</strong>; Torrelles, J. M.; Raga, A. C.; Cantó, J.; Curiel, S.; Garay, G.
<br/>
2005/10, Revista Mexicana de Astronomia y Astrofisica, 41, 435
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...632..956S" target="_blank">
<i>Mid-Infrared Spectra of Polycyclic Aromatic Hydrocarbon Emission in Herbig Ae/Be stars</i>
</a>
<br/>
Sloan, G. C.; Keller, L. D.; Forrest, W. J.; Leibensperger, E.; Sargent, B.; Li, A.; Najita, J.; Watson, D. M.; Brandl, B. R.; Chen, C. H.; Green, J. D.; Markwick-Kemper, F.; Herter, T. L.; <strong>D'Alessio, P.</strong>; Morris, P. W.; Barry, D. J.; Hall, P.; Myers, P. C.; Houck, J. R.
<br/>
2005/10, The Astrophysical Journal, 632, 956
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005MNRAS.362.1208M" target="_blank">
<i>New near-infrared surface brightness fluctuation models</i>
</a>
<br/>
Mouhcine, M.; <strong>González, R. A.</strong>; Liu, M. C.
<br/>
2005/10, Monthly Notices of the Royal Astronomical Society, 362, 1208
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...632..371C" target="_blank">
<i>IRAS 16293-2422: Proper Motions, Jet Precession, the Hot Core, and the Unambiguous Detection of Infall</i>
</a>
<br/>
Chandler, Claire J.; Brogan, Crystal L.; Shirley, Yancy L.; <strong>Loinard, Laurent</strong>
<br/>
2005/10, The Astrophysical Journal, 632, 371
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...630L..85Z" target="_blank">
<i>A Highly Collimated, Young, and Fast CO Outflow in OMC-1 South</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; Ho, Paul T. P.; Zhang, Qizhou; Qi, Chunhua; <strong>Kurtz, S. E.</strong>
<br/>
2005/09, The Astrophysical Journal, 630, L85
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...630L.185C" target="_blank">
<i>Disks in Transition in the Taurus Population: Spitzer IRS Spectra of GM Aurigae and DM Tauri</i>
</a>
<br/>
Calvet, N.; <strong>D'Alessio, P.</strong>; Watson, D. M.; Franco-Hernández, R.; Furlan, E.; Green, J.; Sutter, P. M.; Forrest, W. J.; Hartmann, L.; Uchida, K. I.; Keller, L. D.; Sargent, B.; Najita, J.; Herter, T. L.; Barry, D. J.; Hall, P.
<br/>
2005/09, The Astrophysical Journal, 630, L185
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...630L..49V" target="_blank">
<i>Star Formation Efficiency in Driven, Supercritical, Turbulent Clouds</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; Kim, Jongsoo; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2005/09, The Astrophysical Journal, 630, L49
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...630..911G" target="_blank">
<i>The Pressure Distribution in Thermally Bistable Turbulent Flows</i>
</a>
<br/>
<strong>Gazol, Adriana</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; Kim, Jongsoo
<br/>
2005/09, The Astrophysical Journal, 630, 911
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...629..881H" target="_blank">
<i>IRAC Observations of Taurus Pre-Main-Sequence Stars</i>
</a>
<br/>
Hartmann, Lee; Megeath, S. T.; Allen, Lori; Luhman, Kevin; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; <strong>Franco-Hernandez, Ramiro</strong>; Fazio, Giovanni
<br/>
2005/08, The Astrophysical Journal, 629, 881
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005MNRAS.361..813E" target="_blank">
<i>The NII spectrum of the Orion nebula</i>
</a>
<br/>
<strong>Escalante, Vladimir</strong>; Morisset, Christophe
<br/>
2005/08, Monthly Notices of the Royal Astronomical Society, 361, 813
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...628L.147H" target="_blank">
<i>The Accretion Disk of the Lithium-depleted Young Binary St 34</i>
</a>
<br/>
Hartmann, Lee; Calvet, Nuria; Watson, Dan M.; <strong>D'Alessio, P.</strong>; Furlan, E.; Sargent, B.; Forrest, W. J.; Uchida, K. I.; Green, J. D.; Sloan, G. C.; Chen, C. H.; Najita, J.; Kemper, F.; Herter, T. L.; Morris, P.; Barry, D. J.; Hall, P.
<br/>
2005/08, The Astrophysical Journal, 628, L147
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....130..711K" target="_blank">
<i>Water Masers Toward Ultracompact H II Regions</i>
</a>
<br/>
<strong>Kurtz, S.</strong>; Hofner, P.
<br/>
2005/08, The Astronomical Journal, 130, 711
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....130..172O" target="_blank">
<i>A Multi-Instrument Study of the Helix Nebula Knots with the Hubble Space Telescope</i>
</a>
<br/>
O'Dell, C. R.; <strong>Henney, W. J.</strong>; Ferland, G. J.
<br/>
2005/07, The Astronomical Journal, 130, 172
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...628L..65F" target="_blank">
<i>Colors of Classical T Tauri Stars in Taurus Derived from Spitzer Infrared Spectrograph Spectra: Indication of Dust Settling</i>
</a>
<br/>
Furlan, E.; Calvet, N.; <strong>D'Alessio, P.</strong>; Hartmann, L.; Forrest, W. J.; Watson, D. M.; Uchida, K. I.; Sargent, B.; Green, J. D.; Herter, T. L.
<br/>
2005/07, The Astrophysical Journal, 628, L65
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...627L..65R" target="_blank">
<i>Proper Motions of the BN Object and the Radio Source I in Orion: Where and When Did the BN Object Become a Runaway Star?</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Poveda, Arcadio; <strong>Lizano, Susana</strong>; Allen, Christine
<br/>
2005/07, The Astrophysical Journal, 627, L65
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...627..813H" target="_blank">
<i>Photoevaporation Flows in Blister H II Regions. I. Smooth Ionization Fronts and Application to the Orion Nebula</i>
</a>
<br/>
<strong>Henney, W. J.</strong>; <strong>Arthur, S. J.</strong>; <strong>García-Díaz, Ma. T.</strong>
<br/>
2005/07, The Astrophysical Journal, 627, 813
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005A&A...437..149W" target="_blank">
<i>Sulphur chemistry and molecular shocks: The case of NGC 1333-IRAS 2</i>
</a>
<br/>
Wakelam, V.; Ceccarelli, C.; Castets, A.; Lefloch, B.; <strong>Loinard, L.</strong>; Faure, A.; Schneider, N.; Benayoun, J. -J.
<br/>
2005/07, Astronomy and Astrophysics, 437, 149
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...626..953R" target="_blank">
<i>High Angular Resolution Observations of the Collimated Jet Source Associated with a Massive Protostar in IRAS 16547-4247</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; Garay, Guido; Brooks, Kate J.; Mardones, Diego
<br/>
2005/06, The Astrophysical Journal, 626, 953
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005RMxAA..41...61D" target="_blank">
<i>WWW Database of Models of Accretion Disks Irradiated by the Central Star</i>
</a>
<br/>
<strong>D'Alessio, P.</strong>; Merín, B.; Calvet, N.; Hartmann, L.; Montesinos, B.
<br/>
2005/04, Revista Mexicana de Astronomia y Astrofisica, 41, 61
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJS..157..279A" target="_blank">
<i>CH<SUB>3</SUB>CN Observations toward Southern Massive Star-forming Regions</i>
</a>
<br/>
Araya, Esteban; Hofner, Peter; <strong>Kurtz, Stan</strong>; Bronfman, Leonardo; DeDeo, Simon
<br/>
2005/04, The Astrophysical Journal Supplement Series, 157, 279
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...621..328H" target="_blank">
<i>Self-Consistent Dynamic Models of Steady Ionization Fronts. I. Weak-D and Weak-R Fronts</i>
</a>
<br/>
<strong>Henney, W. J.</strong>; <strong>Arthur, S. J.</strong>; Williams, R. J. R.; Ferland, G. J.
<br/>
2005/03, The Astrophysical Journal, 621, 328
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005MNRAS.357.1003E" target="_blank">
<i>Extended emission associated with young HII regions</i>
</a>
<br/>
Ellingsen, S. P.; Shabala, S. S.; <strong>Kurtz, S. E.</strong>
<br/>
2005/03, Monthly Notices of the Royal Astronomical Society, 357, 1003
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...621..557G" target="_blank">
<i>Erratum: ``Infrared Surface Brightness Fluctuations of Magellanic Star Clusters'' (<A href="/abs/2004ApJ...611..270G">ApJ, 611, 270 [2004]</A>)</i>
</a>
<br/>
<strong>González, Rosa A.</strong>; Liu, Michael C.; Bruzual A., Gustavo
<br/>
2005/03, The Astrophysical Journal, 621, 557
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...621L.129F" target="_blank">
<i>Spitzer IRS Spectra of Young Stars Near the Hydrogen-burning Mass Limit</i>
</a>
<br/>
Furlan, E.; Calvet, N.; <strong>D'Alessio, P.</strong>; Hartmann, L.; Forrest, W. J.; Watson, D. M.; Luhman, K. L.; Uchida, K. I.; Green, J. D.; Sargent, B.; Najita, J.; Sloan, G. C.; Keller, L. D.; Herter, T. L.
<br/>
2005/03, The Astrophysical Journal, 621, L129
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...621..359G" target="_blank">
<i>Evolution of H II Regions inside Hot Molecular Cores</i>
</a>
<br/>
<strong>González-Avilés, Mauricio</strong>; <strong>Lizano, Susana</strong>; Raga, Alejandro C.
<br/>
2005/03, The Astrophysical Journal, 621, 359
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...621..461D" target="_blank">
<i>The Truncated Disk of CoKu Tau/4</i>
</a>
<br/>
<strong>D'Alessio, Paola</strong>; Hartmann, Lee; Calvet, Nuria; <strong>Franco-Hernández, Ramiro</strong>; Forrest, William J.; Sargent, Ben; Furlan, Elise; Uchida, Keven; Green, Joel D.; Watson, Dan M.; Chen, Christine H.; Kemper, F.; Sloan, G. C.; Najita, Joan
<br/>
2005/03, The Astrophysical Journal, 621, 461
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...621L.133R" target="_blank">
<i>IRAS 16293-2422B: A Compact, Possibly Isolated Protoplanetary Disk in a Class 0 Object</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Loinard, Laurent</strong>; <strong>D'Alessio, Paola</strong>; Wilner, David J.; Ho, Paul T. P.
<br/>
2005/03, The Astrophysical Journal, 621, L133
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....129.1396H" target="_blank">
<i>The Opacity of Spiral Galaxy Disks. IV. Radial Extinction Profiles from Counts of Distant Galaxies Seen through Foreground Disks</i>
</a>
<br/>
Holwerda, B. W.; <strong>Gonzalez, R. A.</strong>; Allen, Ronald J.; van der Kruit, P. C.
<br/>
2005/03, The Astronomical Journal, 129, 1396
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....129..935C" target="_blank">
<i>Disk Evolution in the Orion OB1 Association</i>
</a>
<br/>
Calvet, Nuria; Briceño, Cesar; Hernández, Jesus; Hoyer, Sergio; Hartmann, Lee; Sicilia-Aguilar, Aurora; Megeath, S. T.; <strong>D'Alessio, Paola</strong>
<br/>
2005/02, The Astronomical Journal, 129, 935
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...620..786K" target="_blank">
<i>Quiescent and Coherent Cores from Gravoturbulent Fragmentation</i>
</a>
<br/>
Klessen, Ralf S.; <strong>Ballesteros-Paredes, Javier</strong>; <strong>Vázquez-Semadeni, Enrique</strong>; <strong>Durán-Rojas, Carolina</strong>
<br/>
2005/02, The Astrophysical Journal, 620, 786
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005A&A...431..547P" target="_blank">
<i>HDO abundance in the envelope of the solar-type protostar IRAS 16293-2422</i>
</a>
<br/>
Parise, B.; Caux, E.; Castets, A.; Ceccarelli, C.; <strong>Loinard, L.</strong>; Tielens, A. G. G. M.; Bacmann, A.; Cazaux, S.; Comito, C.; Helmich, F.; Kahane, C.; Schilke, P.; van Dishoeck, E.; Wakelam, V.; Walters, A.
<br/>
2005/02, Astronomy and Astrophysics, 431, 547
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005AJ....129..393O" target="_blank">
<i>Hierarchical Triggering of Star Formation by Superbubbles in W3/W4</i>
</a>
<br/>
Oey, M. S.; <strong>Watson, Alan M.</strong>; Kern, Katie; Walth, Gregory L.
<br/>
2005/01, The Astronomical Journal, 129, 393
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...618..339A" target="_blank">
<i>Discovery of an H<SUB>2</SUB>CO 6 Centimeter Maser in IRAS 18566+0408</i>
</a>
<br/>
Araya, E.; Hofner, P.; <strong>Kurtz, S.</strong>; Linz, H.; Olmi, L.; Sewilo, M.; Watson, C.; Churchwell, E.
<br/>
2005/01, The Astrophysical Journal, 618, 339
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2005ApJ...618..344V" target="_blank">
<i>The Lifetimes and Evolution of Molecular Cloud Cores</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>; Kim, Jongsoo; Shadmehri, Mohsen; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2005/01, The Astrophysical Journal, 618, 344
</p></li>
</ol>
</div>
<div class="tab-pane" id="2004">
<h4 style="text-indent: 10px;">Publications 2004</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004JKAS...37..265K" target="_blank">
<i>Hot, Warm, and Cold Cores: Goldilocks Meets Massive Star Formation</i>
</a>
<br/>
<strong>Kurtz, S.</strong>
<br/>
2004/12, Journal of Korean Astronomical Society, 37, 265
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...616..783R" target="_blank">
<i>Very Large Array H92α and H53α Radio Recombination Line Observations of M82</i>
</a>
<br/>
<strong>Rodriguez-Rico, C. A.</strong>; Viallefond, F.; Zhao, J. -H.; Goss, W. M.; Anantharamaiah, K. R.
<br/>
2004/12, The Astrophysical Journal, 616, 783
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..155..149K" target="_blank">
<i>A Catalog of CH<SUB>3</SUB>OH 7<SUB>0</SUB>-6<SUB>1</SUB> A<SUP>+</SUP> Maser Sources in Massive Star-forming Regions</i>
</a>
<br/>
<strong>Kurtz, Stan</strong>; Hofner, Peter; Álvarez, Carlos Vargas
<br/>
2004/11, The Astrophysical Journal Supplement Series, 155, 149
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004RMxAA..40..223T" target="_blank">
<i>In Search of a Radio Counterpart for the Ultraluminous X-Ray Source at the Nucleus of M33</i>
</a>
<br/>
<strong>Trejo, A.</strong>; Rodríguez, L. F.; Martí, J.
<br/>
2004/10, Revista Mexicana de Astronomia y Astrofisica, 40, 223
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..579A" target="_blank">
<i>A Search for H<SUB>2</SUB>CO 6 Centimeter Emission toward Young Massive Stellar Objects</i>
</a>
<br/>
Araya, E.; Hofner, P.; Linz, H.; Sewilo, M.; Watson, C.; Churchwell, E.; Olmi, L.; <strong>Kurtz, S.</strong>
<br/>
2004/10, The Astrophysical Journal Supplement Series, 154, 579
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...614..807L" target="_blank">
<i>Photoevaporated Disks around Massive Young Stars</i>
</a>
<br/>
<strong>Lugo, Jorge</strong>; <strong>Lizano, Susana</strong>; Garay, Guido
<br/>
2004/10, The Astrophysical Journal, 614, 807
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..553S" target="_blank">
<i>Resolution of Distance Ambiguities of Inner Galaxy Massive Star Formation Regions. II.</i>
</a>
<br/>
Sewilo, M.; Watson, C.; Araya, E.; Churchwell, E.; Hofner, P.; <strong>Kurtz, S.</strong>
<br/>
2004/10, The Astrophysical Journal Supplement Series, 154, 553
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...614..211S" target="_blank">
<i>The Circumstellar Environment of the Early B Protostar G192.16-3.84 and the Discovery of a Low-Mass, Protostellar Core</i>
</a>
<br/>
Shepherd, D. S.; Borders, T.; Claussen, M.; Shirley, Y.; <strong>Kurtz, S.</strong>
<br/>
2004/10, The Astrophysical Journal, 614, 211
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...612..921B" target="_blank">
<i>Molecular Cloud Formation behind Shock Waves</i>
</a>
<br/>
Bergin, Edwin A.; Hartmann, Lee W.; Raymond, John C.; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2004/09, The Astrophysical Journal, 612, 921
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..363A" target="_blank">
<i>Infrared Array Camera (IRAC) Colors of Young Stellar Objects</i>
</a>
<br/>
Allen, Lori E.; Calvet, Nuria; <strong>D'Alessio, Paola</strong>; Merin, Bruno; Hartmann, Lee; Megeath, S. Thomas; Gutermuth, Robert A.; Muzerolle, James; Pipher, Judith L.; Myers, Philip C.; Fazio, Giovanni G.
<br/>
2004/09, The Astrophysical Journal Supplement Series, 154, 363
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...613..416T" target="_blank">
<i>Multiple Outflows in the LkHα 234 Region</i>
</a>
<br/>
Trinidad, Miguel A.; Curiel, Salvador; Torrelles, José M.; <strong>Rodríguez, Luis F.</strong>; Cantó, Jorge; Gómez, José F.; Patel, Nimesh; Ho, Paul T. P.
<br/>
2004/09, The Astrophysical Journal, 613, 416
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...612L..69S" target="_blank">
<i>Free-free Radio Emission from Young Stellar Objects</i>
</a>
<br/>
Shang, Hsien; <strong>Lizano, Susana</strong>; Glassgold, Al; Shu, Frank
<br/>
2004/09, The Astrophysical Journal, 612, L69
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..439U" target="_blank">
<i>The State of Protoplanetary Material 10 Million years after Stellar Formation: Circumstellar Disks in the TW Hydrae Association</i>
</a>
<br/>
Uchida, K. I.; Calvet, N.; Hartmann, L.; Kemper, F.; Forrest, W. J.; Watson, D. M.; <strong>D'Alessio, P.</strong>; Chen, C. H.; Furlan, E.; Sargent, B.; Brandl, B. R.; Herter, T. L.; Morris, P.; Myers, P. C.; Najita, J.; Sloan, G. C.; Barry, D. J.; Green, J.; Keller, L. D.; Hall, P.
<br/>
2004/09, The Astrophysical Journal Supplement Series, 154, 439
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..391W" target="_blank">
<i>Mid-infrared Spectra of Class I Protostars in Taurus</i>
</a>
<br/>
Watson, Dan M.; Kemper, F.; Calvet, Nuria; Keller, Luke D.; Furlan, Elise; Hartmann, Lee; Forrest, W. J.; Chen, C. H.; Uchida, Keven I.; Green, Joel D.; Sargent, B.; Sloan, G. C.; Herter, Terry L.; Brandl, Bernhard R.; Houck, J. R.; Najita, J.; <strong>D'Alessio, Paola</strong>; Myers, P. C.; Barry, D. J.; Hall, P.; <span id="2004ApJS..154..391W.authors" style="display: none;">Morris, P. W.</span><span id="2004ApJS..154..391W.button"></span>
<script>
toggleAuthors('2004ApJS..154..391W', 21, 0);
</script>

<br/>
2004/09, The Astrophysical Journal Supplement Series, 154, 391
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..443F" target="_blank">
<i>Mid-infrared Spectroscopy of Disks around Classical T Tauri Stars</i>
</a>
<br/>
Forrest, W. J.; Sargent, B.; Furlan, E.; <strong>D'Alessio, P.</strong>; Calvet, N.; Hartmann, L.; Uchida, K. I.; Green, J. D.; Watson, D. M.; Chen, C. H.; Kemper, F.; Keller, L. D.; Sloan, G. C.; Herter, T. L.; Brandl, B. R.; Houck, J. R.; Barry, D. J.; Hall, P.; Morris, P. W.; Najita, J.; <span id="2004ApJS..154..443F.authors" style="display: none;">Myers, P. C.</span><span id="2004ApJS..154..443F.button"></span>
<script>
toggleAuthors('2004ApJS..154..443F', 21, 0);
</script>

<br/>
2004/09, The Astrophysical Journal Supplement Series, 154, 443
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJS..154..453J" target="_blank">
<i>Mid-Infrared Spectra of Dust Debris around Main-Sequence Stars</i>
</a>
<br/>
Jura, M.; Chen, C. H.; Furlan, E.; Green, J.; Sargent, B.; Forrest, W. J.; Watson, D. M.; Barry, D. J.; Hall, P.; Herter, T. L.; Houck, J. R.; Sloan, G. C.; Uchida, K.; <strong>D'Alessio, P.</strong>; Brandl, B. R.; Keller, L. D.; Kemper, F.; Morris, P.; Najita, J.; Calvet, N.; <span id="2004ApJS..154..453J.authors" style="display: none;">Hartmann, L.; Myers, P. C.</span><span id="2004ApJS..154..453J.button"></span>
<script>
toggleAuthors('2004ApJS..154..453J', 22, 0);
</script>

<br/>
2004/09, The Astrophysical Journal Supplement Series, 154, 453
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004PASP..116..778P" target="_blank">
<i>Automatic Determination of Wind Profiles with Generalized SCIDAR</i>
</a>
<br/>
Prieur, J. -L.; <strong>Avila, R.</strong>; Daigne, G.; Vernin, J.
<br/>
2004/08, Publications of the Astronomical Society of the Pacific, 116, 778
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...610..827T" target="_blank">
<i>Imaging MWC 349 from 7 Millimeters to 90 Centimeters</i>
</a>
<br/>
<strong>Tafoya, D.</strong>; <strong>Gómez, Y.</strong>; <strong>Rodríguez, L. F.</strong>
<br/>
2004/08, The Astrophysical Journal, 610, 827
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004Ap&SS.292..369O" target="_blank">
<i>A Model to Test the Internal Structure of the G31.41+0.31 Hot Molecular Core</i>
</a>
<br/>
Osorio, Mayra; Anglada, Guillem; <strong>and, Susana Lizano</strong>; <strong>D'Alessio, Paola</strong>
<br/>
2004/08, Astrophysics and Space Science, 292, 369
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004Ap&SS.292..187V" target="_blank">
<i>Fragmentation and Structure Formation</i>
</a>
<br/>
<strong>Vázquez-Semadeni, Enrique</strong>
<br/>
2004/08, Astrophysics and Space Science, 292, 187
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...611..270G" target="_blank">
<i>Infrared Surface Brightness Fluctuations of Magellanic Star Clusters</i>
</a>
<br/>
<strong>González, Rosa A.</strong>; Liu, Michael C.; Bruzual A., Gustavo
<br/>
2004/08, The Astrophysical Journal, 611, 270
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...610L.121Z" target="_blank">
<i>A Cluster of 1.3 Centimeter Continuum Sources in OMC-1 South</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Kurtz, Stanley E.</strong>; O'Dell, C. R.; Ho, Paul T. P.
<br/>
2004/08, The Astrophysical Journal, 610, L121
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004PASP..116..682A" target="_blank">
<i>Generalized SCIDAR Measurements at San Pedro Mártir. I. Turbulence Profile Statistics</i>
</a>
<br/>
<strong>Avila, R.</strong>; Masciadri, E.; Vernin, J.; Sánchez, L. J.
<br/>
2004/07, Publications of the Astronomical Society of the Pacific, 116, 682
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...608..282A" target="_blank">
<i>The Effects of Dust on Compact and Ultracompact H II Regions</i>
</a>
<br/>
<strong>Arthur, S. Jane</strong>; <strong>Kurtz, Stanley E.</strong>; Franco, José; <strong>Albarrán, Marna Y.</strong>
<br/>
2004/06, The Astrophysical Journal, 608, 282
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004A&A...419..301M" target="_blank">
<i>Study of the properties and spectral energy distributions of the Herbig AeBe stars HD 34282 and HD 141569</i>
</a>
<br/>
Merín, B.; Montesinos, B.; Eiroa, C.; Solano, E.; Mora, A.; <strong>D'Alessio, P.</strong>; Calvet, N.; Oudmaijer, R. D.; de Winter, D.; Davies, J. K.; Harris, A. W.; Collier Cameron, A.; Deeg, H. J.; Ferlet, R.; Garzón, F.; Grady, C. A.; Horne, K.; Miranda, L. F.; Palacios, J.; Penny, A.; <span id="2004A&A...419..301M.authors" style="display: none;">Quirrenbach, A.; Rauer, H.; Schneider, J.; Wesselius, P. R.</span><span id="2004A&A...419..301M.button"></span>
<script>
toggleAuthors('2004A&A...419..301M', 24, 0);
</script>

<br/>
2004/05, Astronomy and Astrophysics, 419, 301
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...605L.137A" target="_blank">
<i>A Single Circumstellar Disk in the SVS 13 Close Binary System</i>
</a>
<br/>
Anglada, Guillem; <strong>Rodríguez, Luis F.</strong>; Osorio, Mayra; Torrelles, José M.; Estalella, Robert; Beltrán, Maria T.; Ho, Paul T. P.
<br/>
2004/04, The Astrophysical Journal, 605, L137
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004RMxAA..40...31G" target="_blank">
<i>Multiepoch Radio Observations of the Exciting Sources of HH 212 and HH 119</i>
</a>
<br/>
<strong>Galván-Madrid, R.</strong>; Avila, R.; Rodríguez, L. F.
<br/>
2004/04, Revista Mexicana de Astronomia y Astrofisica, 40, 31
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...605..285S" target="_blank">
<i>Broad Radio Recombination Lines from Hypercompact H II Regions</i>
</a>
<br/>
Sewilo, M.; Churchwell, E.; <strong>Kurtz, S.</strong>; Goss, W. M.; Hofner, P.
<br/>
2004/04, The Astrophysical Journal, 605, 285
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004RMxAA..40...53C" target="_blank">
<i>Very Large Array Observations of Winds from Massive Stars</i>
</a>
<br/>
<strong>Contreras, M. E.</strong>; Montes, G.; Wilkin, F. P.
<br/>
2004/04, Revista Mexicana de Astronomia y Astrofisica, 40, 53
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...604L.105F" target="_blank">
<i>Time Variation in the Radio Flux Density from the Bipolar Ultracompact H II Region NGC 7538 IRS 1</i>
</a>
<br/>
<strong>Franco-Hernández, Ramiro</strong>; <strong>Rodríguez, Luis F.</strong>
<br/>
2004/04, The Astrophysical Journal, 604, L105
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004AJ....127.2252Z" target="_blank">
<i>Compact Radio Sources in Orion: New Detections, Time Variability, and Objects in OMC-1S</i>
</a>
<br/>
<strong>Zapata, Luis A.</strong>; <strong>Rodríguez, Luis F.</strong>; <strong>Kurtz, Stanley E.</strong>; O'Dell, C. R.
<br/>
2004/04, The Astronomical Journal, 127, 2252
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...602..860W" target="_blank">
<i>The Visible and Near-Infrared Dust Opacity Law in the HH 30 Circumstellar Disk</i>
</a>
<br/>
<strong>Watson, Alan M.</strong>; Stapelfeldt, Karl R.
<br/>
2004/02, The Astrophysical Journal, 602, 860
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...601..952S" target="_blank">
<i>The Nature of the Massive Young Stars in W75 N</i>
</a>
<br/>
Shepherd, D. S.; <strong>Kurtz, S. E.</strong>; Testi, L.
<br/>
2004/02, The Astrophysical Journal, 601, 952
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...601..921D" target="_blank">
<i>A Survey for Water Maser Emission toward Planetary Nebulae: New Detection in IRAS 17347-3139</i>
</a>
<br/>
de Gregorio-Monsalvo, Itziar; <strong>Gómez, Yolanda</strong>; Anglada, Guillem; Cesaroni, Riccardo; Miranda, Luis F.; Gómez, José F.; Torrelles, José M.
<br/>
2004/02, The Astrophysical Journal, 601, 921
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004BaltA..13..365K" target="_blank">
<i>Gravoturbulent Fragmentation</i>
</a>
<br/>
Klessen, Ralf S.; <strong>Ballesteros-Paredes, Javier</strong>
<br/>
2004/00, Baltic Astronomy, 13, 365
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2004ApJ...600..286D" target="_blank">
<i>Broad Recombination Line Objects in W49 North on 600 AU Scales</i>
</a>
<br/>
De Pree, C. G.; Wilner, D. J.; Mercer, A. J.; Davis, L. E.; Goss, W. M.; <strong>Kurtz, S.</strong>
<br/>
2004/01, The Astrophysical Journal, 600, 286
</p></li>
</ol>
</div>
<div class="tab-pane" id="2003">
<h4 style="text-indent: 10px;">Publications 2003</h4>
<ol>      
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2003ApJ...598L.115T" target="_blank">
<i>Evidence for Evolution of the Outflow Collimation in Very Young Stellar Objects</i>
</a>
<br/>
Torrelles, J. M.; Patel, N. A.; Anglada, G.; Gómez, J. F.; Ho, P. T. P.; Lara, L.; Alberdi, A.; Cantó, J.; Curiel, S.; Garay, G.; <strong>Rodríguez, L. F.</strong>
<br/>
2003/12, The Astrophysical Journal, 598, L115
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2003ApJ...598.1100R" target="_blank">
<i>A Cluster of Compact Radio Sources in NGC 2024 (Orion B)</i>
</a>
<br/>
<strong>Rodríguez, Luis F.</strong>; <strong>Gómez, Yolanda</strong>; Reipurth, Bo
<br/>
2003/12, The Astrophysical Journal, 598, 1100
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2003ApJ...597L.149M" target="_blank">
<i>Unveiling the Inner Disk Structure of T Tauri Stars</i>
</a>
<br/>
Muzerolle, James; Calvet, Nuria; Hartmann, Lee; <strong>D'Alessio, Paola</strong>
<br/>
2003/11, The Astrophysical Journal, 597, L149
</p></li>
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2003ApJ...597..414G" target="_blank">
<i>VLA and BIMA Observations toward the Exciting Source of the Massive HH 80-81 Outflow</i>
</a>
<br/>
<strong>Gómez, Y.</strong>; <strong>Rodríguez, L. F.</strong>; Girart, J. M.; Garay, G.; Martí, J.
<br/>
2003/11, The Astrophysical Journal, 597, 414
</p></li>
</ol>
</div>
</div>
</div>
