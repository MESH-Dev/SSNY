<?php 
/**
Template Name:Feedback Form
 *
 * Template for the feedback page of the site
 *
 */
 ?>
<?php get_header() ?>



</div><!-- .top-block -->

<div id="content">
	<div class="content-shadow"></div>

	<?php the_post() ?>
				<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class() ?>">
	    			<h2 class="entry-title"><?php the_title(); ?></h2>
					<div class="entry-content">
	<?php the_content() ?>
	
<!-- CSS -->

<style type="text/css">
span.label,span.spacer,span.multiple span {width:120px;float:left;} 
span.multiple {float:left;} 
span.button {padding-left:120px;} 
div.clear {clear:both;padding-top:5px;} 
</style> 

<!-- Form -->

<form action="http://amail.altumdesign.com/t/r/s/yheuil/" method="post" id="subForm">
<div>
  <span class="label"><label for="name">Name:</label></span>
  <span><input type="text" name="cm-name" id="name" size="25" /></span>
</div>
<div>
<span class="label"><label for="yheuil-yheuil">Email Address:</label></span>
<span><input type="text" name="cm-yheuil-yheuil" id="yheuil-yheuil" size="25" /></span>
</div>
<div>

<div>
  <span class="label"><label for="Address">Address:</label></span>
  <span><input type="text" name="cm-f-zlktuy" id="Address" size="25" /></span>
</div>
<div>
  <span class="label"><label for="City">City:</label></span>
  <span><input type="text" name="cm-f-zlktuj" id="City" size="25" /></span>
</div>
<div>
  <span class="label"><label for="State">State:</label></span>
  <span><select name="cm-fo-zlktut">
<option value="2979463">Alabama</option>
<option value="2979464">Alaska</option>
<option value="2979465">Arizona</option>
<option value="2979466">Arkansas</option>
<option value="2979467">California</option>
<option value="2979468">Colorado</option>
<option value="2979469">Connecticut</option>
<option value="2979470">Delaware</option>
<option value="2979471">District of Columbia</option>
<option value="2979472">Florida</option>
<option value="2979473">Georgia</option>
<option value="2979474">Hawaii</option>
<option value="2979475">Idaho</option>
<option value="2979476">Illinois</option>
<option value="2979477">Indiana</option>
<option value="2979478">Iowa</option>
<option value="2979479">Kansas</option>
<option value="2979480">Kentucky</option>
<option value="2979481">Louisiana</option>
<option value="2979482">Maine</option>
<option value="2979483">Maryland</option>
<option value="2979484">Massachusetts</option>
<option value="2979485">Michigan</option>
<option value="2979486">Minnesota</option>
<option value="2979487">Mississippi</option>
<option value="2979488">Missouri</option>
<option value="2979489">Montana</option>
<option value="2979490">Nebraska</option>
<option value="2979491">Nevada</option>
<option value="2979492">New Hampshire</option>
<option value="2979493">New Jersey</option>
<option value="2979494">New Mexico</option>
<option value="2979495">New York</option>
<option value="2979496">North Carolina</option>
<option value="2979497">North Dakota</option>
<option value="2979498">Ohio</option>
<option value="2979499">Oklahoma</option>
<option value="2979500">Oregon</option>
<option value="2979501">Pennsylvania</option>
<option value="2979502">Rhode Island</option>
<option value="2979503">South Carolina</option>
<option value="2979504">South Dakota</option>
<option value="2979505">Tennessee</option>
<option value="2979506">Texas</option>
<option value="2979507">Utah</option>
<option value="2979508">Vermont</option>
<option value="2979509">Virginia</option>
<option value="2979510">Washington</option>
<option value="2979511">West Virginia</option>
<option value="2979512">Wisconsin</option>
<option value="2979513">Wyoming</option>
</select></span>
</div>
<div>
  <span class="label"><label for="Phone">Phone:</label></span>
  <span><input type="text" name="cm-f-zlktud" id="Phone" size="25" /></span>
</div>
<div>
  <span class="label"><label for="Zip">Zip:</label></span>
  <span><input type="text" name="cm-f-vtuiiy" id="Zip" size="25" /></span>
</div>
<div>
  <span class="label"><label for="Esthetician">Esthetician:</label></span>
  <span><input type="text" name="cm-f-vtuiij" id="Esthetician" size="25" /></span>
</div>
<div>
  <span class="label"><label for="Date of your visit">Date of your visit:</label></span>
  <span><select name="cm-fd-vtuiit-mn" id="Dateofyourvisit-mn"><option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select> <select name="cm-fd-vtuiit-dy" id="Dateofyourvisit-dy"><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> <select name="cm-fd-vtuiit-yr" id="Dateofyourvisit-yr"><option value="1900">1900</option><option value="1901">1901</option><option value="1902">1902</option><option value="1903">1903</option><option value="1904">1904</option><option value="1905">1905</option><option value="1906">1906</option><option value="1907">1907</option><option value="1908">1908</option><option value="1909">1909</option><option value="1910">1910</option><option value="1911">1911</option><option value="1912">1912</option><option value="1913">1913</option><option value="1914">1914</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012" selected>2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option></select></span>
</div>
<div>
  <span class="label"><label for="Your Feedback">Your Feedback:</label></span>
  <span><input type="text" name="cm-f-vtuiii" id="YourFeedback" size="25" /></span>
</div>
</div>
<div>
<span class="button"><input type="submit" value="Submit" /></span>
</div>
</form>
		
	<?php edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div>
				</div><!-- .post -->

</div>

<?php get_footer() ?>