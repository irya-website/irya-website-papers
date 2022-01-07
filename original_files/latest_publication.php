
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
<li><p><a href="https://ui.adsabs.harvard.edu/abs/2021MNRAS.507.4211E" target="_blank"><i>The abundance of satellites around Milky Way- and M31-like galaxies with the TNG50 simulation: a matter of diversity</i></a><br/>Engler, Christoph; Pillepich, Annalisa; Pasquali, Anna; Nelson, Dylan; <strong>Rodriguez-Gomez, Vicente</strong>; Chua, Kun Ting Eddie; Grebel, Eva K.; Springel, Volker; Marinacci, Federico; Weinberger, Rainer; Vogelsberger, Mark; Hernquist, Lars<span id="2021MNRAS.507.4211E.authors" style="display: none;"></span><br/>2021/11, Monthly Notices of the Royal Astronomical Society, 507, 4211</p></li>