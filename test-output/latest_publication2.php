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
<li><p>
<a href="https://ui.adsabs.harvard.edu/abs/2022MNRAS.509.2654V" target="_blank">
<i>The building up of observed stellar scaling relations of massive galaxies and the connection to black hole growth in the TNG50 simulation</i>
</a>
<br/>
Varma, S.; Huertas-Company, M.; Pillepich, A.; Nelson, D.; <strong>Rodriguez-Gomez, V.</strong>; Dekel, A.; Faber, S. M.; Iglesias-Navarro, P.; Koo, D. C.; Primack, J.
<br/>
2022/01, Monthly Notices of the Royal Astronomical Society, 509, 2654
</p></li>
