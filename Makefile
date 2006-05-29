
.PHONY: pot mos msgmerge de es fr nb nl pl pt_PT nmz nmz.lang nmz nmz.onefile

pot: po/POTFILES po/gnucash-htdocs.pot

po/POTFILES: .potfiles
	( find . -type f -name '*.php' -o -name '*.phtml' -maxdepth 1; find externals -name '*.phtml'; find search/templates -name '*.php_tmpl'; ) > po/POTFILES

.potfiles:

po/gnucash-htdocs.pot: po/POTFILES
	xgettext -f po/POTFILES -L PHP -o po/gnucash-htdocs.pot

msgmerge: po/gnucash-htdocs.pot
	for f in de en_GB es fr nb nl pl pt_PT ; do \
	  msgmerge -U po/$$f.po po/gnucash-htdocs.pot ; \
	done

mos: de es fr nb nl pl pt_PT

de: po/de.po
	msgfmt po/de.po -o de/LC_MESSAGES/gnucash-htdocs.mo

es: po/es.po
	msgfmt po/es.po -o es/LC_MESSAGES/gnucash-htdocs.mo

fr: po/fr.po
	msgfmt po/fr.po -o fr/LC_MESSAGES/gnucash-htdocs.mo

nb: po/nb.po
	msgfmt po/nb.po -o nb/LC_MESSAGES/gnucash-htdocs.mo

nl: po/nl.po
	msgfmt po/nl.po -o nl/LC_MESSAGES/gnucash-htdocs.mo

pl: po/pl.po
	msgfmt po/pl.po -o pl/LC_MESSAGES/gnucash-htdocs.mo

pt_PT: po/pt_PT.po
	msgfmt po/pt_PT.po -o pt_PT/LC_MESSAGES/gnucash-htdocs.mo


####################################################################
#
# Code to build the Namazu templates
#
LOCALFILE=local.php
HOME=http://www.gnucash.org/beta
FILETAIL=
FILE=

# add when we have utf-8 translations: iconv -f UTF-8 -t ISO8859-1 

nmz.onefile:
	( echo '<?php ; include("$(LOCALFILE)"); $$home = "$(HOME)/$$lang_dir"; $$top_dir="."; ?>'; cat search/templates/NMZ.$(FILE).php_tmpl ) | php | tail +5 > /tmp/NMZ.$(FILE)$(FILETAIL)

nmz.lang:
	$(MAKE) nmz.onefile FILE=head
	for f in body foot result.normal result.short tips ; do \
	  $(MAKE) nmz.onefile FILE="$$f"; \
	done

nmz:
	$(MAKE) nmz.lang
	# other NMZ langs not merged into po system: ja
	# note: PL is only "mostly" translated.  it diff's differently
	for l in de en_GB es fr nb nl pl pt_PT ; do \
	  $(MAKE) nmz.lang LOCALFILE=$$l/local.php FILETAIL=.$$l ; \
	done
