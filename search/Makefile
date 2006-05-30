.PHONY: nmz-templates

nmz-templates: templates/NMZ.head.php_tmpl
	( echo '<?php $$locale = "en"; $$home = "http://www.gnucash.org/beta"; $$top_dir = "."; ?>'; cat templates/NMZ.head.php_tmpl ) | php > templates/NMZ.head;

#	for lang in de es fr ja nb pl; do \
#		( echo "<?php \$$locale = \"$$lang\"; \$$home = \"http://www.gnucash.org/beta\"; \$$top_dir = \".\"; ?>"; \
#		  cat templates/NMZ.head.php_tmpl) | php > templates/NMZ.head.xlated_$$lang; \
#	done
