languages = de es fr it nb nl pl pt_PT zh_CN
languages_with_template = ja
all_languages = ${languages} ${languages_with_template}

.SECONDEXPANSION:

.PHONY: pot mos msgmerge ${all_languages} nmz nmz.lang nmz nmz.onefile

pot: po/POTFILES po/gnucash-htdocs.pot

po/POTFILES: .potfiles
	( find . -maxdepth 1 -type f -name '*.php' -o -name '*.phtml'; find externals -name '*.phtml'; find search/templates -name '*.php_tmpl'; ) > po/POTFILES

.potfiles:

po/gnucash-htdocs.pot: po/POTFILES
	xgettext -f po/POTFILES -L PHP -o po/gnucash-htdocs.pot

msgmerge: po/gnucash-htdocs.pot
	for f in ${all_languages} ; do \
	  msgmerge -U po/$$f.po po/gnucash-htdocs.pot ; \
	done

mos: ${all_languages}

${all_languages}: po/$$@.po
	msgfmt $< -o locale/$@/LC_MESSAGES/gnucash-htdocs.mo

####################################################################
#
# Code to build the Namazu templates
#
LOCALFILE=local.php
URLBASE=
FILETAIL=
FILE=
HOME=http://www.gnucash.org$(URLBASE)
TMPLBASE=search/templates/NMZ.

# add when we have utf-8 translations: iconv -f UTF-8 -t ISO8859-1 

nmz.onefile:
	( echo '$$text_dir = "."; ?>'; \
	  cat $(TMPLBASE)$(FILE).php_tmpl ) | php -q > \
	  $(TMPLBASE)$(FILE)$(FILETAIL)

nmz.lang:
	for f in head body foot result.normal result.short tips ; do \
	  $(MAKE) nmz.onefile FILE="$$f"; \
	done

nmz:
	$(MAKE) nmz.lang
	# other NMZ langs not merged into po system: ja
	# note: PL is only "mostly" translated.  it diff's differently
	for l in en ${languages} ; do \
	  $(MAKE) nmz.lang FILETAIL=.$$l ; \
	done
