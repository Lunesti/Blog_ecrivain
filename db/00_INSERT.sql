
/*Insertion des commentaires*/

INSERT INTO `comment` (`id`, `post_id`, `author`, `comment`, `comment_date`, `report`) VALUES
(73, 177, 'benny', 'Hey', '2020-12-09 14:28:42', 1),
(74, 174, 'Ghost', 'Cool', '2020-12-10 09:15:43', 1),
(75, 177, 'Ghost', 'Yo !', '2020-12-10 10:00:42', 1),
(78, 174, 'NewMember', 'Bonjour', '2020-12-21 18:33:22', 0),
(79, 174, 'NewMember', '<b>bonjour</b>', '2020-12-21 18:33:56', 1);


/*Insertion des posts*/

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(174, 'Chapitre 1 : Intro à l\'Alaska', 'L\'Alaska (prononcé [a.las.ka] Écouter (Fr.) en français et [ə.ˈlæ.skə] Écouter (É.-U.A) en anglais) est le 49e État des États-Unis, dont la capitale est Juneau et la plus grande ville Anchorage, où habite environ 40 % de la population de l\'État. Avec une superficie totale de 1 717 854 km2, il est l\'État le plus étendu et le plus septentrional du pays, mais l\'un des moins peuplés, ne comptant que 731 449 habitants en 20121.\r\n\r\nComme Hawaï, l\'Alaska est séparé du Mainland et se situe au nord-ouest du Canada. Bordé par l\'océan Arctique au nord et la mer de Béring et l\'océan Pacifique au sud, ce territoire est séparé de l\'Asie par le détroit de Béring. En outre, ses divisions administratives ne sont pas des comtés mais des boroughs.\r\n\r\nAlaska signifie « grande Terre » ou « continent » en aléoute3. Cette région, que l\'on appelait au xixe siècle l\'« Amérique russe », tire son nom d\'une longue presqu\'île, au nord-ouest du continent américain, à environ 1 000 km au sud du détroit de Bering, et qui se lie, vers le sud, aux îles Aléoutiennes. Le surnom de l\'Alaska est « la dernière frontière » ou « la terre du soleil de minuit ».\r\n\r\nPeuplé par des Aléoutes, Esquimaux (notamment Iñupiak et Yupiks) et peut-être d\'autres Amérindiens depuis plusieurs millénaires, le territoire est colonisé par des trappeurs russes à la fin du xviiie siècle. L\'Alaska vit alors essentiellement du commerce du bois et de la traite des fourrures. En 1867, les États-Unis l\'achètent à la Russie pour la somme de 7,2 millions de dollars (environ 120 millions de dollars actuels), et celui-ci adhère à l\'Union le 3 janvier 1959. Les domaines économiques prédominants aujourd\'hui sont la pêche, le tourisme, et surtout la production d\'hydrocarbures (pétrole, gaz) depuis la découverte de gisements à Prudhoe Bay dans les années 1970.\r\n\r\nLe Denali (6 168 mètres d\'altitude), point culminant des États-Unis, se trouve dans la chaîne d\'Alaska et constitue le cœur du Parc national de Denali.\r\n\r\nLe climat y est de type polaire, et la faune caractéristique des milieux froids (grizzli, caribou, élan, ours blanc).\r\n\r\nLes territoires limitrophes sont le territoire du Yukon et la province de Colombie-Britannique au Canada. Le Kraï du Kamtchatka et le district autonome de Tchoukotka en Russie se trouvent à quelques dizaines de kilomètres, de l\'autre côté du détroit de Bering.\r\n\r\nBastion du Parti républicain, l\'Alaska fut gouverné de 2006 à 2009 par Sarah Palin, candidate à la vice-présidence des États-Unis en 2008 et égérie du mouvement des Tea Party.', '2020-12-02 09:44:09'),
(175, 'Chapitre 2 : Histoire des peuples', 'L\'Alaska est un ancien territoire russe d\'Amérique, vendu aux États-Unis en 1867 pour la somme de 7,2 millions de dollars. Ce chiffre est à comparer avec les 15 millions de USD déboursés par les États-Unis pour l\'achat de la Louisiane.\r\n\r\nCultures autochtones de l\'Alaska\r\nLes savoirs et savoir-faire traditionnels font l\'objet de recherches et colportage, notamment coordonnés par l\'Alaska Native Science Commission.\r\n\r\nCulture de Denbigh en Alaska (3000 à 1000 av. J.-C.)\r\nLe territoire\r\nLes gens de Denbigh vivaient dans le nord de l\'Alaska, il y a 5 000 ans. Leur principale ressource était les animaux qu\'ils chassaient dans la toundra, pour leur nourriture, leurs vêtements et leurs abris. En 1948, l\'archéologue américain Louis Giddings (en) excave, au Cap Denbigh, sur la côte de la mer de Béring, des microlames de chert et d\'obsidienne, qui ressemblent à celles trouvées précédemment dans le désert de Gobi (Paléo et mésolithique asiatique). Giddings remarque également que les pointes de projectiles ont des similitudes avec celles des Paléoindiens et des cultures archaïques du Nouveau-Monde. Le nom de cette culture, comme beaucoup d\'autres d\'ailleurs, nous vient donc de la situation géographique de cette première découverte.\r\n\r\nRessources naturelles et activités de subsistance\r\nCes peuplades passaient l\'été sur les côtes de la mer de Béring et durant les autres saisons, à l\'intérieur des terres à la recherche de caribou et de poissons anadromes.\r\n\r\nOrganisation sociale\r\nCe groupe culturel est connu pour ses outils de pierre taillée, comme les grattoirs, les pointes de projectile, les outils pour le travail de l\'os, les lames et les gouges.\r\n\r\nOrigines et descendances\r\nLe Denbighien est très proche culturellement des trois autres entités formant ce que l\'on appelle les Paléoesquimaux anciens, que nous avons décrits précédemment. Les origines exactes de cette culture ne sont pas très bien connues. La technologie microlithique a sûrement pris racine dans la tradition paléolithique de l\'Alaska et plus sûrement dans la culture paléosibérienne. En revanche, les Denbighiens sont les ancêtres de toute une série de cultures alaskaines : baleinières anciennes, Choris et Norton.\r\n\r\nPendant que les Paléoesquimaux développaient leur culture dans le Canada arctique et au Groenland, une évolution fort différente se poursuivait en Alaska dans la région du détroit de Béring. De leur côté, les îles Aléoutiennes ont connu un développement graduel qui a débouché sur la culture des Aléoutes d\'aujourd\'hui. La côte pacifique de l\'Alaska, quant à elle, a connu une évolution technologique fondée sur l\'ardoise polie, qui a pu être à l\'origine des cultures esquimaudes de cette région. Les côtes nord et ouest étaient occupées par des gens de la tradition des outils microlithiques de l\'Arctique, la même culture que ceux de l\'Arctique canadien. Vers 1000 av. J.-C., l\'activité humaine en Alaska a connu un arrêt de plusieurs siècles. Après cette pause, apparaît une série de groupes comme les cultures baleinières anciennes, Choris et Norton qui sont un mélange complexe de microlithisme de l\'Arctique, de culture de la côte du Pacifique et de groupes du Néolithique de la Sibérie orientale de la même époque.\r\n\r\nCultures baleinières anciennes (1000 av. J.-C. à 120 av. J.-C.)\r\nNous savons très peu de choses sur les cultures baleinières anciennes. En fait, il n\'y a qu\'un seul village de cinq maisons qui a été découvert au cap Krusenstern (en), au nord du détroit de Béring. Il y avait des os de phoque dans les maisons et des os de baleine étendus sur les plages environnantes. On peut considérer cette culture comme une tentative éphémère de mixité, des Aléoutes peut-être, des Esquimaux ou des Amérindiens.\r\n\r\nCulture de Choris (1000 av. J.-C. à l\'an 1)\r\nLes gens de la culture de Choris vivaient dans de grandes maisons semi-souterraines ovales et chassaient le phoque et le caribou. Ils fabriquaient aussi des outils de pierre taillée qui rappellent passablement ceux de la Tradition microlithique de l\'Arctique. Comme pour les cultures baleinières anciennes, l\'origine des gens de Choris reste nébuleuse pour l\'instant. Ces petits groupes de chasseurs étaient peut-être Esquimaux du sud de l\'Alaska, ou des Aléoutes qui migrèrent vers le nord, ou des Amérindiens qui avaient adopté des coutumes esquimaudes, voire des immigrants sibériens.', '2020-12-02 09:46:55'),
(176, 'Chapitre 3 : Traite des fourrures', 'À partir de 1784, les trappeurs russes établissent des comptoirs de traite permanents sur les îles Aléoutiennes et sur la côte américaine du Pacifique, jusqu\'à la Californie (fort Ross, à moins de 160 kilomètres au nord de San Francisco). Pour commencer, des postes côtiers sont établis à Attu, Agattu (en) et Unalaska, dans les îles Aléoutiennes, ainsi que dans l\'île de Kodiak, au large de l\'embouchure du golfe de Cook. Dix-huit mois plus tard, une colonie est établie sur le continent, en face de l\'anse Cook. L\'objectif est de chasser la loutre de mer, dont la fourrure se vend à prix d\'or sur les marchés chinois. Comme en Sibérie, les Russes embauchent, alcoolisent et cherchent à convertir à l\'orthodoxie les populations locales : la communauté orthodoxe alaskane est aléoute ou kodiak. On comptait environ 25 000 Aléoutes à l\'arrivée des Russes, mais seulement 3 892 en 1885, après 122 ans de domination russe (au pied du volcan Mont Redoubt, haut de 3 100 mètres, la présence de l\'église russe orthodoxe de Ninilchik rappelle que l\'Alaska fut une colonie russe), puis américaine… vodka, bourbon et grippe ont eu ici les mêmes effets qu\'ailleurs6. Dès la fin du xviiie siècle, des marchands et des missionnaires américains et anglais viennent concurrencer les activités russes.\r\n\r\nEn 1787, Aleksandr Andreïevitch Baranov fonde un poste de traite sur l\'île Sitka, où il implante des serfs russes et aléoutes ; de 1799 à 1804, il est le gouverneur et administrateur résidant de l\'Amérique russe et décide d\'y construire sa capitale. Le fort est détruit par les Tlingits en 1802. Baranov reprend les lieux deux ans plus tard : l\'île est rebaptisée de son nom actuel et la capitale prend le nom de Novo-Arkhangelsk (actuelle « Sitka »). En 1807, le gouverneur réside au château Baranov. En 1811, c\'est lui qui établit le poste de fort Ross en Californie. Au total, on peut compter une quarantaine de forts russes en Amérique, dans la première moitié du xixe siècle. La Russie déclare que l\'Amérique russe s\'étend jusqu\'au détroit de la Reine-Charlotte (actuel Canada) et que les étrangers n\'ont pas droit de passage. La Californie étant espagnole, alors que l\'Oregon et la Colombie-Britannique (comprenant encore l\'actuel État de Washington) sont anglais, l\'accès au Pacifique et à ses fourrures semble impossible aux États-Unis. Face à ce blocage, le président américain James Monroe rédige sa célèbre doctrine qui vise à éliminer les influences européennes du continent. Les États-Unis, le Royaume-Uni et la Russie finissent par s\'entendre, et un traité est signé en 1824, par le biais duquel la frontière russe est déplacée du sud (Californie) vers le nord (actuel Alaska), tandis que les Anglais renoncent à l\'Orégon et au sud de la Colombie-Britannique (désormais territoire de Washington). Par ce traité, l\'établissement de nouveaux forts russes hors Alaska est prohibé et, en 1825, le Royaume-Uni obtient un droit de passage le long de l\'étroite bande côtière alaskane. Finalement, l\'achat de l\'Alaska par les Américains, en 1867, met un terme à la présence russe en Amérique.', '2020-12-02 09:47:19'),
(177, 'Chapitre 4 : Géographie', 'Situation et caractéristiques générales\r\n\r\nComparaison de la surface de l\'Alaska avec celle des 48 États contigus.\r\nL\'Alaska ne possède de frontière commune avec aucun autre État américain. Il partage cette caractéristique avec Hawaï. Il est bordé à l\'est par le territoire du Yukon et la Colombie-Britannique, une province du Canada. La frontière entre l\'Alaska et le Canada s\'étend sur 2 477 km8. Ailleurs, trois ensembles maritimes entourent l\'Alaska : le golfe d\'Alaska, qui se trouve au nord de l\'océan Pacifique ; la mer de Béring et la mer des Tchouktches, qui le sépare de l\'Asie à l\'ouest ; la mer de Beaufort enfin, qui borde les côtes nord et fait partie de l\'océan Arctique. Le détroit de Béring sépare naturellement l\'Alaska de la Russie.\r\n\r\nL\'Alaska est de loin le plus vaste État des États-Unis : une superficie de 1 717 854 km2 dont 1 481 305 km2 de terres, ce qui représente 18,7 % du territoire américain et trois fois la superficie de la France métropolitaine9. Le territoire de l\'Alaska s\'étire sur 3 700 km d\'est en ouest et 2 200 km du nord au sud, couvrant 4 fuseaux horaires. Il s\'étale sur environ 43 ° de longitude (130/173 ° W) et 16 ° de latitude (71/55 ° N) : c\'est donc en Alaska que se trouvent le lieu le plus occidental (île Attu) et le lieu le plus septentrional (Barrow) des États-Unis. Le centre géographique de l\'État se situe à 63°50\' de latitude nord et 152°00\' de longitude ouest10.\r\n\r\nSelon une étude du Bureau de gestion du territoire datant de 1998, environ 65 % du territoire est la propriété du Gouvernement fédéral des États-Unis, qui gère les forêts, les parcs et les réserves naturelles nationales de l\'Alaska. Le reste est géré par l\'État d\'Alaska (25 %) et par les Corganisations indigènes créées par l’Alaska Native Claims Settlement Act de 1971 (10 %).\r\n\r\nLittoral et hydrologie\r\nCôtes et îles\r\n\r\nLe rivage alaskien est découpé et accidenté : les chaînes côtières plongent dans l\'océan. Les côtes de l\'Alaska sont baignées par la mer de Béring, la mer des Tchouktches, l\'Océan Arctique et l\'Océan Pacifique. Ce littoral, long d\'environ 50 000 km, présente des paysages très différents: des plages au nord en passant par des falaises et des fjords majestueux. La transgression flandrienne a provoqué une remontée du niveau des eaux et formé des fjords impressionnants. Parmi eux, le Lynn Canal, qui, avec ses 150 km de long, est le plus long fjord d\'Amérique du Nord.\r\n\r\nLa navigation est rendue difficile par la présence d\'obstacles permanents (îles, écueils) ou temporaires (icebergs). Le fait que la côte soit fortement découpée a permis l\'installation de plusieurs ports. L\'Alaska comprend de très nombreuses îles (1800 en tout), en particulier au sud (archipel Alexandre) et à l\'ouest (îles Aléoutiennes), ce qui explique la grande longueur du littoral. Les deux plus grandes îles sont l\'île Kodiak et l\'île du Prince-de-Galles. L\'archipel des Aléoutes s\'étend sur plusieurs centaines de kilomètres.\r\n\r\nLe Passage Intérieur est utilisé pour la navigation : il mesure 860 km de long et compte 70 grands glaciers entre les 55e et 61e parallèles, le continent et l\'archipel Alexandre11\r\n\r\nLacs et rivières\r\nLe nombre de lacs est estimé à plus de 3 millions. 94 dépassent 26 km2, les plus grands étant le lac Illiamna (3 000 km2), le lac Becharof (1 200 km2), le lac Teshekpuk (800 km2) et le lac Naknek (630 km2). Par comparaison, le lac Léman fait 580 km2. Le nombre de cours d\'eau est estimé à 3 00012. Parmi ces fleuves, le Yukon est le plus célèbre. Il serpente sur 2 000 km, de la frontière canadienne à la mer de Béring, charriant encore les pépites de la ruée vers l\'or : une voie légendaire et historique. Ses principaux affluents font également partie des plus longues rivières, comme la Porcupine (890 km), la Koyukuk (890 km), la Kuskokwin (870 km) ou la Tanana (850 km). La plupart sont navigables. Le nom d\'Alaska vient d\'un mot de la langue aléoute qui veut dire la grande terre ; pourtant, l\'immense réseau fluvial et les 3 millions (?) de lacs en font plutôt un monde aquatique où l\'hydravion est roi.\r\n\r\nRelief et géologie\r\n\r\nAvec ses glaciers qui produisent des icebergs, ses volcans qui sculptent des vallées lunaires, ses montagnes qui continuent de s\'élever vers le ciel, l\'Alaska, aux paysages en perpétuel devenir, est le contraire d\'une terre ferme. Ce coin de la planète, terre d\'élection pour les géologues, est le théâtre de vastes mouvements tectoniques : failles, éruptions, séismes sillonnent et secouent ce « bloc fantastique venu d\'ailleurs »[réf. nécessaire].\r\n\r\nVolcans\r\nL\'Alaska est une grande zone sismique. Deux des trois plus violents tremblements de terre jamais enregistrés ont touché l\'État américain :\r\n\r\nà Prince William Sound, en 1964 (séisme de magnitude 9,2)\r\ndans les îles Andreanof, en 1957 (magnitude 9,1)\r\nLa péninsule de l\'Alaska compte 80 volcans, dont 41 encore en activité. Sur la partie nord-est de la Ceinture de feu du Pacifique, les volcans Mont Pavlof (2 518 mètres), Augustine (1 227 mètres), mont Redoubt (3 108 mètres), Mont Spurr (3 374 mètres). Le chapelet des îles Aléoutiennes témoignent du choc tectonique : elles ont une forme pointue (exemple : le volcan Mont Shishaldin, (2 857 mètres) et prolonge la cordillère de la chaîne des Aléoutiennes. En 1912, une violente explosion a décoiffé le mont Katmai de ses 600 derniers mètres. Plusieurs tonnes d\'oxyde de soufre ont été projetées dans l\'atmosphère, à plus de 15 kilomètres du sol et ont perturbé la mousson en Asie. Haut-lieu mondial de la volcanologie, la vallée des Dix Mille Fumées a été recouverte par les cendres sur une surface de 100 km2.\r\n\r\nLa fosse des Kouriles borde le plateau continental de l\'Alaska au sud et atteint une profondeur maximale de 10 498 mètres13.\r\n\r\nGlaciers\r\nEnviron 100 000 glaciers sont présents sur l\'ensemble de l\'Alaska. Ils recouvrent plus de 70 000 km2 (4 % de la surface totale) et se trouvent en majorité dans le sud du pays, car les chutes de neige y sont beaucoup plus importantes qu\'au nord. Le plus grand glacier est celui de Béring, long de 160 km et recouvrant 5 850 km2. Le plus impressionnant est l\'ensemble de glaciers formant le « Glacier Bay » : dans un fjord de 100 km de long se trouvent une douzaine de glaciers déversant leurs icebergs dans la baie. Certains glaciers s\'étalent en plaine, comme le glacier de Malaspina et ses 2 200 km2.', '2020-12-02 09:47:40');
COMMIT;