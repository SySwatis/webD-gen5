<?php 

/* Comment trouver votre Ennéatype en 3 étapes

1ère étape
Pour commencer, il vous faut choisir parmi les 9 textes qui vont
suivre : A,B,C,D,E,F,G,H.ou I

Attention : même si chacun de ces 9 textes peut paraître vous 
décrire partiellement, il ne s’agit pas de panacher mais de choisir
celui qui, dans son ensemble,semble le plus vous correspondre.
Considérez chaque texte comme un tout. N’isolez pas les 
phrases en les sortant de leur contexte.

Important : posez-vous les questions suivantes : 
Est-ce que ce texte dans sa totalité me ressemble ? 
Est-ce que je le retiens comme me décrivant ? 

S’il vous est difficile de choisir quel texte vous correspond le 
plus, demandez-vous : «Quel paragraphe choisirait un proche 
(parent, conjoint, ami) pour me décrire ? »

Notez par ailleurs qu’un autre moyen d’y parvenir est de vous 
demander lequel de ces textes vous aurait le mieux défini vers 
25 ans, les traits de la personnalité étant généralement 
fortement marqués au début de l’âge adulte.


2ème étape

Une fois votre choix établi, reportez-vous enfin à la grille, pour
connaître le type correspondant à la lettre de votre texte.
Ex : le texte F correspond à l’Ennéatype 5.
3ème étape
Pour finir, consultez le descriptif de votre Ennéatype afin de 
valider et confirmer votre choix.

  Bravo, vous pouvez lire la carte de votre Ennéatype !


/* ENNEAGRAMME Trouver votre Ennéatype
Attention : même si chacun de ces neuf paragraphes peut vous paraître vous décrire
partiellement, il ne s'agit pas de panacher mais de choisir les trois qui, dans leur ensemble,
vous semblent le plus vous correspondre.
Considérez chaque paragraphe comme un tout. N'isolez pas les phrases en les sortants
de leur contexte. Posez-vous les questions suivantes : « Est-ce que ce paragraphe dans sa
totalité me ressemble ? Est-ce que je le retiens comme me décrivant ? »
S'il vous est difficile de choisir quel paragraphe vous correspond le plus, demandez-vous «
Quel paragraphe choisirait un proche (parent, conjoint, ami) pour me décrire ? »
Notez par ailleurs qu'un autre moyen d'y parvenir est de vous demander lequel de ces
paragraphes vous aurait le mieux défini vers 25 ans, les traits de la personnalité étant
généralement fortement marqués au début de l'âge adulte.

*/

$dataDescEnneagramme = array(
    
array("1.","Le Perfectionniste est une personne organisée, méthodique, 
respectueuse des règles, des structures et de la hiérarchie. Elle 
considère qu’il n’y a qu’une seule bonne façon de faire les choses."),
array("2.","L’Altruiste est une personne qui a soif d’être aimée, douée pour 
déceler ce dont l’autre a besoin. Adaptable au point de s’oublier, elle 
voit le monde comme un ensemble de personnes à secourir."),
array("3.","Le Battant est une personne dynamique, fière de ses réussites, 
efficace dans ce qu’elle entreprend. Elle est à la fois soucieuse de 
l’atteinte de ses objectifs et de l’image qu’elle renvoie."),
array("4.","L’Artiste est une personne originale qui revendique le fait d’être 
unique, différente, à part. Sensible, elle accorde beaucoup d’importance
à l’expression des émotions, tant les siennes que celles des autres."),
array("5.","L’Observateur est une personne indépendante, soucieuse de son 
espace vital. Elle privilégie la réflexion à l’action et son mental est très 
actif."),
array("6.","Le Loyaliste est une personne fidèle, prudente, souvent en proie au 
doute. Elle a une imagination débordante et anticipe souvent, pour 
mieux se préparer au pire.."),
array("7.","L’Épicurien est une personne joyeuse, optimiste qui s’enthousiasme 
pour la nouveauté. Dynamique, elle planifie de nombreux projets 
qu’elle ne mènera pas forcément tous au bout."),
array("8.","Le Chef est une personne sûre d’elle-même, directe, entière et 
combative. Elle se caractérise par une forte présence qui intimide 
parfois."),
array("9.","Le Médiateur est une personne paisible, à l’écoute des autres, 
recherchant l’harmonie. Diplomate dans l’âme, elle essaye d’éviter les 
conflits et la confrontation.")

);

$dataTextEnneagramme = array(
array("Règle","Choisir parmi les 9 textes qui vont
suivre : A,B,C,D,E,F,G,H.ou I<br><br>

Attention : même si chacun de ces 9 textes peut paraître vous 
décrire partiellement, il ne s’agit pas de panacher mais de choisir
celui qui, dans son ensemble,semble le plus vous correspondre.
Considérez chaque texte comme un tout. N’isolez pas les 
phrases en les sortant de leur contexte.<br><br>

Important : posez-vous les questions suivantes : 
Est-ce que ce texte dans sa totalité me ressemble ? 
Est-ce que je le retiens comme me décrivant ?<br><br>

S’il vous est difficile de choisir quel texte vous correspond le 
plus, demandez-vous : « Quel paragraphe choisirait un proche 
(parent, conjoint, ami) pour me décrire ? »<br><br>

Notez par ailleurs qu’un autre moyen d’y parvenir est de vous 
demander lequel de ces textes vous aurait le mieux défini vers 
25 ans, les traits de la personnalité étant généralement 
fortement marqués au début de l’âge adulte.<br><br>"), 
array("A",
"J'approche les situations, surtout celles qui me tiennent à cœur, de façon entière : « tout ou
rien ». J'attache de la valeur à être quelqu'un de fort, de juste et sur qui on peut compter.
<br><br>
Quand on me rencontre, pas d'embrouille, je suis ce dont j'ai l'air. Je ne fais pas confiance
aux autres avant qu'ils n'aient montré qu'ils étaient fiables. J'aime que les gens soient directs
avec moi, et je sais quand quelqu'un cache son jeu, ment ou essaye de m'avoir. J'ai du mal à
tolérer la faiblesse chez les autres, sauf si j'en comprends la raison ou si je constate qu'ils
essaient de s'améliorer sur ce plan. J'ai aussi du mal à recevoir des ordres, surtout si je ne
respecte pas l'autorité en place ou si je ne suis pas d'accord avec elle. Je préfère nettement
prendre les choses en main. Je trouve difficile de ne pas montrer mes sentiments quand je
suis en colère. Je suis toujours prêt à défendre mes amis et mes proches, surtout si je
considère qu'ils sont traités injustement. Je ne gagne pas toujours les batailles que
j'entreprends mais, en général, les autres se souviennent longtemps de leur rencontre avec
moi."),
array("B",
"J'ai la correction en haute estime, et j'essaie de vivre selon mes principes. Je vois facilement
ce qui ne va pas et comment les choses pourraient être améliorées. Les autres me
considèrent probablement comme trop critique ou en quête de perfection, mais il m'est
difficile de rester indifférent ou d'accepter que les choses ne soient pas comme elles
devraient être. 
<br><br>
Quand je suis responsable de quelque chose, on peut être sûr que je le ferai
convenablement et j'en suis fier. J'éprouve parfois du ressentiment quand les gens n'essaient
pas de faire leur travail correctement ou se comportent de manière irresponsable, même si
je m'efforce de ne pas le leur montrer ouvertement. Pour moi, le travail passe généralement
avant le plaisir et je peux faire taire mes désirs en conséquence, afin que le travail soit fait,
et bien fait."),
array("C",
"J'ai l'impression d'être capable de distinguer l'ensemble des points de vue assez facilement.
Je peux même parfois donner l'impression d'être indécis, parce que je peux discerner les
avantages et les inconvénients de tous les points de vue. Ma facilité à appréhender toutes les
opinions me rend bon à aider les autres à résoudre leurs différends. 
<br><br>
Cette capacité peut
m'amener à être davantage conscient des positions des autres et de leurs priorités que des
miennes. Il m'arrive d'être distrait et de dévier de la tâche que j'accomplissais. Quand ça
arrive, mon attention s'échappe généralement vers des tâches sans importance. J'ai souvent
du mal à savoir ce qui est réellement important pour moi et j'évite le conflit en agissant selon
le désir des autres. On me considère en général comme facile à vivre, agréable et conciliant. Il
en faut beaucoup pour m'amener au point de me mettre ouvertement en colère. J'aime que la
vie soit confortable, harmonieuse et que les autres m'accueillent."),
array("D",
"Je suis très sensible aux sentiments des autres. Je peux voir ce dont ils ont besoin même
quand je ne les connais pas. C'est parfois frustrant d'être autant conscient des besoins des
autres, surtout de leur douleur ou de leur malheur, parce que je ne peux pas faire pour eux
autant que je le voudrais. Il m'est facile de donner de ma personne. J'aurais parfois envie
d'être capable de dire « non » plus facilement, parce que je finis par mettre plus d'énergie à
m'occuper des autres que je n'en mets à m'occuper de moi-même. J'ai de la peine quand les
gens s'imaginent que j'essaie de les manipuler ou de les contrôler, alors que tout ce que
j'essaie de faire, c'est de les comprendre et de les aider. J'aime être considéré comme
quelqu'un de bon et de chaleureux, mais quand je ne suis pas reconnu ou apprécié, je peux
être très affecté émotionnellement. De bons rapports humains sont importants pour moi, et
je suis prêt à me donner du mal pour qu'ils existent. Je n'aime pas la solitude et, même dans
ce cas, je vais probablement penser aux autres."),
array("E",
"Je suis fortement motivé par le fait d'être le meilleur dans ce que je fais et, au fil des ans, mes
réalisations m'ont valu une certaine estime. Je suis très actif et je réussis pratiquement tout
ce que j'entreprends. Je m'identifie à ce que je fais, parce que je pense que la valeur de
chacun dépend de ce qu'il accomplit et de l'approbation qui en résulte. J'ai toujours plus de
choses à faire que mon emploi du temps ne peut en contenir, donc je laisse de côté les
sentiments pour me concentrer sur les objectifs. Parce qu'il y a toujours quelque, chose à
faire, je trouve difficile de prendre le temps de m'asseoir et de me détendre. Je suis contrarié
quand les gens ne savent pas profiter du temps que je leur accorde. Il m'arrive d'avoir envie
de prendre en main le projet que quelqu'un assume trop lentement à mon goût. J'aime la
sensation - et donner l'impression- de pouvoir gérer n'importe quelle situation. J'aime bien la
compétition individuelle, mais je suis également un bon joueur d'équipe."),
array("F",
"Je me définirais comme quelqu'un de calme et d'analytique, qui a besoin de plus de solitude
que la plupart des gens. Je préfère généralement observer ce qui se passe plutôt que d'y
participer. Je n'aime pas que l'on attende beaucoup de moi ou que l'on espère que je
connaisse et que je parle beaucoup de mes sentiments. Je parviens mieux à contacter mes
émotions quand je suis seul et je profite souvent mieux de certaines expériences vécues, en
me les remémorant, plutot que sur l'instant. Je ne m'ennuie jamais quand je suis seul parce
que mon mental est toujours très actif. Il m'est important de protéger mon temps et mon
énergie et donc de mener une vie simple, sans complication et aussi autonome que possible."),
array("G",
"J'ai une imagination fertile, surtout pour ce qui touche à ce qui pourrait menacer la sécurité.
En général, je peux pressentir ce qui pourrait être dangereux, et avoir aussi peur que si ça
arrivait réellement. Face au danger, j'ai l'une ou l'autre de ces deux attitudes : je l'évite ou je
passe mon temps à le provoquer. Mon imagination est vive et me donne un sens de l'humour
assez original, souvent caustique. J'aimerais être plus confiant dans la vie, mais j'ai plutôt
tendance à me méfier des gens et des choses. Je décèle facilement les failles ou les non-dits
dans les arguments avancés. À cause de cette faculté à déceler les obstacles éventuels, je
pense que l'on me considère comme quelqu'un d'avisé. J'ai tendance à me méfier de
l'autorité et je ne me sens pas très à l'aise quand je dois endosser ce rôle. C'est probablement
pourquoi j'ai tendance à m'identifier aux faibles. Une fois que je me suis engagé envers une
personne ou une cause, je suis d'une loyauté à toute épreuve."),
array("H",
"Je suis quelqu'un d'optimiste qui aime entreprendre de nouveaux projets. J'ai un esprit vif qui
passe très vite d'une idée à l'autre. J'aime avoir une vue d'ensemble sur la façon dont
s'enchaînent les idées et je suis particulièrement enthousiaste à l'idée de relier des concepts
qui n'avaient, a priori, pas de point commun. J'aime travailler sur des choses qui
m'intéressent et j'y mets beaucoup d'énergie. J'ai du mal à rester présent sur des tâches
laborieuses et répétitives. J'aime être au démarrage d'un projet, lors de la planification,
quand il y a encore différentes options à considérer. Quand j'ai épuisé mon intérêt pour
quelque chose, il m'est difficile d'y demeurer parce que j'ai envie de passer à une autre qui a
su capter mon attention. Quand quelque chose nie déprime, je préfère tourner mes pensées
vers des idées plus gaies. Je crois que les gens sont en droit de mener une vie joyeuse."),
array("I",
"Je suis quelqu'un de sensible et j'ai une grande intensité de sentiments. Je me sens souvent
incompris et seul parce que je me sens différent des autres. Mon comportement peut
apparaître comme dramatique pour les autres et il arrive que l'on me critique pour mon excès
de sensibilité et ma façon d'amplifier mes émotions. En fait, à l'intérieur de moi, il y a une
éternelle recherche d'une relation affective à la fois profonde et émotionnellement forte. J'ai
du mal à apprécier les relations au présent à cause de ma tendance à toujours vouloir ce que
je n'ai pas et à dédaigner ce que j'ai. La recherche de grandes émotions a toujours existé chez
moi et l'absence d'un lien émotionnel fort m'a régulièrement conduit à la mélancolie, voire à
la dépression. Je me demande parfois comment font les autres pour avoir, plus que moi, une
vie privée facile et joyeuse. J'ai un sens aigu de l'esthétique et je vis dans un univers riche
d'émotions et de sens."));?>