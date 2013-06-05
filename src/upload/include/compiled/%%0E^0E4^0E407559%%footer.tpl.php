<?php /* Smarty version 2.6.26, created on 2013-06-03 15:36:08
         compiled from footer.tpl */ ?>
                    
	
					<footer>
                        <hr>
                        <p class="pull-right">A <a href="http://osadmin.org/" target="_blank">Basic Backstage Management System for China Only.</a> by <a href="http://wenqiyu.com" target="_blank">SomewhereYu</a></p>

                        <p>&copy; 2013 <a href="http://osadmin.org" target="_blank">OSAdmin</a></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @ADMIN_URL; ?>
/assets/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
	
<!--- + -快捷方式的提示 --->
	
<script type="text/javascript">	
	
alertDismiss("alert-success",3);
alertDismiss("alert-info",10);
	
listenShortCut("icon-plus");
listenShortCut("icon-minus");

</script>
  </body>
</html>