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
<a href="https://ui.adsabs.harvard.edu/abs/2022A&A...657A..30T" target="_blank">
<i>W51 North: A protocluster emerging out of a thermally inhibited fragmenting cloud</i>
</a>
<br/>
<strong>Tang, Mengyao</strong>; <strong>Palau, Aina</strong>; <strong>Zapata, Luis A.</strong>; Qin, Sheng-Li
<br/>
2022/01, Astronomy and Astrophysics, 657, A30
</p></li>
