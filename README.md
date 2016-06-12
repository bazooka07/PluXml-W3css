# W3css: Thème pour PluXml

Le thème W3css reprend le framework du même nom. La structure et l'organisation du thème (articles, pages, catégories, tags, archives, ...) est proche du thème d'origine de PluXml. L'objectif est de fournir un thème élégant tout en profitant des fonctions et de la simplicité de W3css pour aboutir à un site/blog homogène.

Le thème est disponible sous la licence MIT.

## Fonctions principales

*    Thème responsive design pour s'adpater à tous les écrans
*    Intégration de la police d'icônes FontAwesome
*    Un menu déroulant pour les pages statiques
*    Différents thèmes de couleur disponibles (avec le plugin plxW3cssThemeSelect)
*    La possibilité de créer un thème de couleur facilement
*    Une pagination simplifiée (avec le plugin plxSimplePager)

## Pré-requis

* PluXml 5.5
* Plugin plxFontAwesome
* Plugin plxSimplePager

## Documentation

### Installation du thème

Pour installer le thème w3css, il faut préalablement télécharger l'archive .

Une fois l'archive décompressée, envoyer le dossier "w3css" (renommer le si besoin) via FTP sur votre site et le déposer dans "/themes".

Après avoir copié le thème dans votre PluXml, il ne vous reste plus qu’à l’activer. Pour ça, il faut se connecter sur le site en tant qu'administrateur et aller dans le menu: Paramètres > Thèmes.


## Modifier la couleur du thème

Il existe deux solutions pour modifier la couleur de votre thème: modifier directement la feuille de style ou utiliser le plugin plxW3cssThemeSelect.

plxW3cssThemeSelect est un plugin qui permet de choisir le thème à utiliser directement depuis l'administration du site.

Pour installer le plugin, il faut préalablement par télécharger l'archive.
Une fois l'archive décompressé, envoyer le dossier "plxW3cssThemeSelect" (renommer le si besoin) via FTP sur votre site et le déposer dans "/plugins"
Une fois le thème activé, il faut aller dans la configuration du plugin et sélectionner la couleur.
Une fois validé, il faut recharger la page de votre site pour que les modifications s'appliquent.

Il est possible de créer différents thèmes de couleur avec W3.CSS Color Themes.

Une fois le thème créer, il suffit de récupérer le CSS qui a été généré.
Avec le plugin plxW3cssThemeSelect, copier le CSS dans un fichier que l'on pourra nommer "couleur.css". Il faut ensuite envoyer le fichier "couleur.css" via FTP sur votre site et le déposer dans "/plugins/plxW3cssThemeSelect/themes" .
Sans plugin, il faut ajouter le CSS généré dans la feuille de style "/themes/w3css/css/w3-custom.css". Une fois les modifications effectuées, il faut recharger la page de votre site pour que les modifications s'appliquent. Cette solution à l'avantge de ne pas charger de feuille de style supplémentaire.

## Ressources

*    La documentation complète de W3css
*    Créer d'un thème avec W3.CSS Color Themes
*    Le site du projet PluXml
*    La discussion autour du thème sur le forum PluXml
*    La documentation complète de PluXml

## Télécharger

*    PluXml 5.5
*    Thème w3css
*    Plugin plxFontAwesome
*    Plugin plxSimplePager
*    Plugin plxW3cssThemeSelect
*    Sur Github: PluXml, Thème w3css, Plugin plxFontAwesome, Plugin plxSimplePager, Plugin plxW3cssThemeSelect
