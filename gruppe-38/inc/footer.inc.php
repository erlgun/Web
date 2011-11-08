					</div> <!-- END OF #content -->
				</div> <!-- END OF #main -->
				<div id="push"></div>
			</div><!-- END OF #container -->
			<div id="footer">
				<hr class="bottom" />
				<div id="footerspace">
				<p>
					<a title="Hjem" href="./index.php">
						<img src="<?php if($current=='Forsiden'){echo '.';}else{echo '..';} ?>/images/G38sm.png" alt="Logo">
					</a>
				</p>
				</div>
				<div id="footercontent">
					<div id="totop">
					<p class="small">
						<a href="#top" class="constantlink">Til toppen</a>
					</p>						
					</div>
					<div id="copyright">
					<p class="small">
						Copyright &copy; <?php $date=getdate(); echo $date['year'];?> Gruppe 38 Webprosjekt HiOA
					</p>
					</div>
					<div id="validators">
					<p class="tiny">
						<a href="http://validator.w3.org/check?uri=referer" class="constantlink">Valider HTML5 med W3C</a> | 
						<a href="http://jigsaw.w3.org/css-validator/check/referer" class="constantlink">Valider CSS med W3C</a>
					</p>
					</div>
				</div> <!-- END OF #footercontent-->
			</div> <!-- END OF #footer -->
		</div> <!-- END OF #wrapper -->
	</body>
</html>


<!--
<div id="push"></div>
-->