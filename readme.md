#Prise de présence
Le but de l’application est de permettre à un enseignant identifié de :

- gérer des cours ;
- organiser ses cours par année académique
- gérer des élèves (avec photo, email, etc.) ;
- planifier des séances pour les cours (attention aux validations de dates et aux motifs de répétition…) ;
- associer des élèves à ses cours ;
- prendre les présences séance par séance (absence non justifiée ; absence justifiée ; présence) ;
- avoir le bilan des présences d’un élève pour un cours ;

Des bonus sont souhaitables : 

- regrouper des élèves en groupe pour faciliter l’association d’élèves à un cours ;
- afficher des stats de présence par cours ;
- afficher des stats globales de présence d’un élève (donc, pour tous les cours auxquels il est inscrit, pas seulement ceux du prof qui est connecté) ;
- rendre l’interface riche avec JS (par exemple, pour regrouper les élèves par groupe en faisant un glisser-déposer, utilisation d’ajax pour noter le statut de présence, etc.) ;
- envoi d’un rappel à un élève après deux absences injustifiées consécutives ;
- et tout ce que vous pourriez avoir comme idée supplémentaire

Contrainte :

- fait avec Laravel 4.0 ;
- gestion de la DB via migrations ;
- dépôt git privé sur bitbucket mais vous m’y invitez ;
- maquette HTML/CSS à rendre la semaine prochaine.

Pour ceux qui galèrent :

- si l’application vous pose de gros problèmes, je vous conseille de simplifier le problème en ne prenant pas en compte la connexion du prof. Donc, faites l’hypothèse que toutes les requêtes qui sont faites sont celles d’un prof qui ne voit que ses cours, ses élèves, ses séances, sans devoir se connecter. Ceci est un conseil pour vous aider à obtenir un résultat, pas une autorisation d’en faire moins pour le même prix. Les critères d’évaluation restent identiques pour tout le monde, mais il vaut mieux avoir une application qui marche, sans toutes les features du cahier des charges, qu’une application qui ne marche pas du tout.

- des scripts de migration et de seeds sont présents dans l’archive ainsi que des modèles. Il est probable que les modèles soient très incomplets. Il est également possible qu’il y ait des erreurs, je n‘ai pas tout testé. Mais ça vous donne un point de départ. 
