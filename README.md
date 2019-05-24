# date
solution for date's quest

Exercices :
1. Tu vas devoir créer une classe TimeTravel qui permettra de réaliser plusieurs calculs. Cette classe possédera deux propriétés, $start et $end, qui seront deux objets DateTime pour la date de départ et la date d'arrivée du voyage temporel !

2. Une première méthode getTravelInfo() servira simplement à donner des informations sur le trajet. Il faudra qu'elle retourne la chaîne de caractères suivante : "Il y a ? années, ? mois, ? jours, ? heures, ? minutes et ? secondes entre les deux dates" en remplaçant bien entendu les points d'interrogation par les valeurs correctes (tu utiliseras les dates données dans le paragraphe suivant).

3. Ajoute la méthode findDate(DateInterval $interval) qui l'aidera à trouver la date en question (donc 1 milliard de seconde avant la propriété $start).

4. Tu dois donc écrire une dernière méthode backToFutureStepByStep(DatePeriod $step) qui devra renvoyer un tableau contenant toutes les dates auxquelles ils devront s'arrêter, afin de pouvoir régler au mieux le convecteur temporel. Les dates renvoyées devront être formatées selon les besoins du convecteur temporel, c'est-à-dire sous la forme 'Jan 22 1984 AM 06:35'.

Critères de validation
La classe s'appelle TimeTravel et prend bien 2 paramètres DateTime à l'instanciation.
La méthode getTravelInfo() renvoie bien une phrase décrivant la différence de temps (de l'année à la seconde) entre les deux propriétés $start et $end.
La méthode findDate() renvoie bien une date d'arrivée qui est $interval secondes avant la $date de départ. Pour une date de départ au 31/12/1985, le résultat renvoie une réponse autour de 1954.
En Option :* La méthode findDate() fonctionne avec n'importe quel intervalle, positif ou négatif, donc pour un voyage dans le passé ou dans le futur.
La méthode backToFutureStepByStep() renvoie un tableau de N objets DateTime correctement formatés.
La méthode backToFutureStepByStep() utilise bien l'objet DatePeriod
