iso_languages = de es fr it
languages = ${iso_languages} ja nb nl pl pt_PT zh_CN

.SECONDEXPANSION:

.PHONY: pot mos msgmerge ${languages} nmz nmz.lang nmz nmz.onefile nmz.locale

pot: po/POTFILES po/gnucash-htdocs.pot

po/POTFILES: .potfiles
	( find . -maxdepth 1 -type f -name '*.php' -o -name '*.phtml'; find externals -name '*.phtml'; find search/templates -name '*.php_tmpl'; ) > po/POTFILES

.potfiles:

po/gnucash-htdocs.pot: po/POTFILES
	xgettext -f po/POTFILES -L PHP --keyword="T_" -o po/gnucash-htdocs.pot

msgmerge: po/gnucash-htdocs.pot
	for f in ${languages} ; do \
	  msgmerge -U po/$$f.po po/gnucash-htdocs.pot ; \
	done

mos: ${languages}

${languages}: po/$$@.po
	msgfmt $< -o locale/$@/LC_MESSAGES/gnucash-htdocs.mo

####################################################################
#
# Code to build the Namazu templates
#
LOCALFILE=local.php
URLBASE=
FILETAIL=
LOCALE=
FILE=
HOME=http://www.gnucash.org$(URLBASE)
TMPLBASE=search/templates/NMZ.

# add when we have utf-8 translations: iconv -f UTF-8 -t ISO8859-1 

nmz.onefile:
	( echo '<?php $$locale = "$(LOCALE)"; ?>' ; \
	  cat $(TMPLBASE)$(FILE).php_tmpl ) | php -q > \
	  $(TMPLBASE)$(FILE)$(FILETAIL)

nmz.lang:
	for f in head body foot result.normal result.short tips ; do \
	  $(MAKE) nmz.onefile FILE="$$f"; \
	done

nmz.locale:
	# convert to ISO_8859-1
	for f in $(TMPLBASE)*.$(LOCALE); do \
	  iconv -f utf-8 -t ISO_8859-1//TRANSLIT -o $$f.local -c $$f ; \
	  mv $$f.local $$f ; \
	done

nmz:
	$(MAKE) nmz.lang
	# note: PL is only "mostly" translated.  it diff's differently
	for l in en ${languages} ; do \
	  $(MAKE) nmz.lang FILETAIL=.$$l LOCALE=$$l; \
	done
	for l in ${iso_languages} ; do \
	  $(MAKE) nmz.locale LOCALE=$$l; \
	done
