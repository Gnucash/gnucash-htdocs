
.PHONY: pot mos de fr nl pt_PT

pot: po/POTFILES po/gnucash-htdocs.pot

po/POTFILES: .potfiles
	( find . -name '*.php' -o -name '*.phtml' -maxdepth 1; find externals -name '*.phtml' ) > po/POTFILES

.potfiles:

po/gnucash-htdocs.pot: po/POTFILES
	xgettext -f po/POTFILES -L PHP -o po/gnucash-htdocs.pot

mos: de fr nl pt_PT

de: po/de.po
	msgfmt po/de.po -o de/LC_MESSAGES/gnucash-htdocs.mo

fr: po/fr.po
	msgfmt po/fr.po -o fr/LC_MESSAGES/gnucash-htdocs.mo

nl: po/nl.po
	msgfmt po/nl.po -o nl/LC_MESSAGES/gnucash-htdocs.mo

pt_PT: po/pt_PT.po
	msgfmt po/pt_PT.po -o pt_PT/LC_MESSAGES/gnucash-htdocs.mo
