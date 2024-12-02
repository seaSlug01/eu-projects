<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\EuPost;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EuPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    const PROJECTS = [
        [
            "title" => "GreenComp School – Διαθεματική εκπαίδευση Ανάπτυξης Πράσινων Δεξιοτήτων των συμμετεχόντων στο δημοτικό σχολείο (δάσκαλοι, μαθητές, γονείς), για την προώθηση μιας νοοτροπίας βιωσιμότητας",
            "startsFrom" => "2023-01-01",
            "endsAt" => "2026-03-31",
            "partners" => [
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "UTH (University of Thessaly)", "country" => "Ελλάδα"],
                ["name" => "P.D.E.Th (The Regional Directorate for Primary and Secondary Education of Thessaly)", "country" => "Ελλάδα"],
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "FREDERICK University", "country" => "Κύπρος"],
                ["name" => "TUCEP", "country" => "Ιταλία"],
                ["name" => "Direzione Didattica Secondo Circolo Perugia", "country" => "Ιταλία"],
                ["name" => "University of Perugia", "country" => "Ιταλία"],
                ["name" => "Folkuniversitet", "country" => "Σουηδία"]
            ],
            "website" => "https://www.greencomp-project.com",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+ – EACEA",
            "description" => "Στόχος του έργου είναι να αναπτύξει τις ικανότητες των εκπαιδευτικών των δημοτικών σχολείων, των φοιτητών ΑΕΙ που φιλοδοξούν να γίνουν εκπαιδευτικοί δημοτικών σχολείων, των μαθητών δημοτικών σχολείων και των γονέων, προκειμένου να αποκτήσουν μια βιώσιμη νοοτροπία. Επιπλέον, το GreenComp School στοχεύει να συμβάλει στην ενίσχυση της ικανότητας καινοτομίας της Ευρώπης με την προώθηση της καινοτομίας στην εκπαίδευση και την κατάρτιση.",
            "image" => "greencomp.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "SUSEDI – Διαδρομή προς τον μετασχηματισμό των εκπαιδευτικών ιδρυμάτων μέσω μιας προσέγγισης της βιωσιμότητας σε ολόκληρο το ίδρυμα",
            "startsFrom" => "2022-11-01",
            "endsAt" => "2025-10-31",
            "partners" => [
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "CPI", "country" => "Κύπρος"],
                ["name" => "FU", "country" => "Κύπρος"],
                ["name" => "CCC", "country" => "Κύπρος"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "PELOPPDE", "country" => "Ελλάδα"],
                ["name" => "NUI GALWAY", "country" => "Ιρλανδία"],
                ["name" => "ITEE", "country" => "Πολωνία"],
                ["name" => "ASNOR", "country" => "Ιταλία"],
                ["name" => "UM", "country" => "Μάλτα"],
                ["name" => "LODZ", "country" => "Πολωνία"],
                ["name" => "SAPIENZA", "country" => "Ιταλία"],
                ["name" => "INNO HUB", "country" => "Ισπανία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+ – EACEA",
            "description" => "Στόχος του SUSEDI είναι να υποστηρίξει τα Εκπαιδευτικά Ιδρύματα να υιοθετήσουν την προσέγγιση ολόκληρου του ιδρύματος (WIA ) μέσω μιας σειράς μετασχηματιστικών βημάτων και να τα πιστοποιήσει για την επίτευξη ορόσημων. Επιπλέον, το SUSEDI στοχεύει στην ανάπτυξη της ικανότητας βιωσιμότητας των εκπαιδευτικών/ηγετών/διοικητικού προσωπικού, καθώς ο ρόλος τους είναι κρίσιμος για τα ιδρύματα όσον αφορά την υιοθέτηση της προσέγγισης ολόκληρου του ιδρύματος. Τα κύρια παραδοτέα του έργου είναι ένας ανοικτός εκπαιδευτικός πόρος για την ανάπτυξη της ικανότητας βιωσιμότητας του προσωπικού των ΑΕΙ, ο οδηγός μεθοδολογίας «Χάρτης διαδρομής για τη μετατροπή των εκπαιδευτικών ιδρυμάτων σε WIA προς τη βιωσιμότητα» που θα περιλαμβάνει τα βήματα για τη μετατροπή και τις προτεινόμενες δραστηριότητες στους πυλώνες και τους τομείς του συστημικού πλαισίου για WIA προς τη βιωσιμότητα, καθώς και ένα πρότυπο πιστοποίησης ευθυγραμμισμένο με το ISO για τα ΑΕΙ ώστε να πιστοποιούν τη μετατροπή τους σε WIA προς τη βιωσιμότητα σε τρία διαφορετικά επίπεδα: Ενημέρωση, σε δράση και WIA προς την αειφορία.",
            "image" => "susedi.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "MORAL- Μικροπιστοποιητικά: Διαβατήριο για την απασχόληση και την ένταξη",
            "startsFrom" => "2024-01-01",
            "endsAt" => "2026-12-31",
            "partners" => [
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "OEB", "country" => "Κύπρος"],
                ["name" => "CCC", "country" => "Κύπρος"],
                ["name" => "FEH", "country" => "Ισπανία"],
                ["name" => "CAMARA VALENCIA", "country" => "Ισπανία"],
                ["name" => "CCIAA DI BASILICATA", "country" => "Ιταλία"],
                ["name" => "ASNOR", "country" => "Ιταλία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "SVETH", "country" => "Ελλάδα"],
                ["name" => "ITEE", "country" => "Πολωνία"],
                ["name" => "IPHZR", "country" => "Πολωνία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο MORAL αποσκοπεί στη διευκόλυνση της πρόσβασης των μακροχρόνια ανέργων, με έμφαση στις γυναίκες και τους νέους, των οικονομικά μη ενεργών γυναικών και των ενηλίκων με χαμηλή ειδίκευση στην αγορά εργασίας μέσω της ανάπτυξης του «Διαβατηρίου για την Απασχόληση» [PTE], το οποίο είναι ένα σύνολο στοιβαζόμενων μικροπιστοποιητικών που υποδεικνύουν ότι το άτομο διαθέτει τις απαραίτητες βασικές δεξιότητες για την είσοδο στην αγορά εργασίας. Θα καταβληθούν προσπάθειες ώστε το διαβατήριο (καθώς και τα επιμέρους μικροπιστοποιητικά) να είναι διαθέσιμα μέσω των Ευρωπαϊκών Ψηφιακών Πιστοποιητικών Μάθησης. Επικεντρώνεται στον προσδιορισμό, την ανάπτυξη και την επικύρωση με τη χρήση μικροπιστοποιητικών των βασικών δεξιοτήτων λαμβάνοντας υπόψη διάφορα πλαίσια ικανοτήτων που αναπτύχθηκαν από την Ευρωπαϊκή Επιτροπή, όπως το LifeComp, το DigComp, το Green Comp και το EntreComp. Πρέπει να τονίσουμε ότι δεν στοχεύουμε στην ανάπτυξη όλων των ικανοτήτων που αναφέρονται στα τέσσερα πλαίσια, αλλά στην επιλογή και προσαρμογή στο κατάλληλο επίπεδο εκείνων που αποτελούν βασικές δεξιότητες και είναι κατάλληλες για την ομάδα-στόχο του έργου MORAL, καθώς και για την είσοδο στην αγορά εργασίας σε θέση κατώτερου επιπέδου (entry level position).",
            "image" => "moral.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "FoodConscious- Προς την αποτελεσματική διαχείριση των αποβλήτων τροφίμων και την πρόληψη των αποβλήτων τροφίμων στον τομέα της εστίασης",
            "startsFrom" => "2022-11-01",
            "endsAt" => "2025-10-31",
            "partners" => [
                ["name" => "SGGW", "country" => "Πολωνία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "TUCEP", "country" => "Ιταλία"],
                ["name" => "INFODEF", "country" => "Ισπανία"],
                ["name" => "SOLSKI CENTER VELENJE", "country" => "Σλοβενία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος αυτού του έργου είναι να ευαισθητοποιήσει τους ενδιαφερόμενους στον τομέα της εστίασης, να προσδιορίσει τις απαραίτητες δεξιότητες που πρέπει να αναπτύξουν οι επιχειρήσεις και οι εργαζόμενοι στον τομέα και να τους παράσχει καθοδήγηση σχετικά με το πώς μπορούν να συμβάλουν στη μείωση των αποβλήτων τροφίμων. Παράλληλα, να δημιουργηθεί ένα ισχυρό πρόγραμμα κατάρτισης, ώστε οι μελλοντικοί εργαζόμενοι στον τομέα να γνωρίζουν την ανάγκη μείωσης των αποβλήτων τροφίμων και να εργαστούν για τη βιωσιμότητα του συστήματος τροφίμων, ενώ παράλληλα να ευαισθητοποιηθούν οι καταναλωτές και οι πελάτες στον τομέα της εστίασης.",
            "image" => "FoodConscious-Horizontal-Logo.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "WEntre – Ενδυνάμωση των γυναικών μέσω της επιχειρηματικότητας",
            "startsFrom" => "2023-12-01",
            "endsAt" => "2025-11-30",
            "partners" => [],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "",
            "image" => "we-entre.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "EMSA- Κοινή ανάπτυξη, πιλοτική εφαρμογή και επικύρωση προγραμμάτων σπουδών επιχειρηματικής νοοτροπίας και βασικών δεξιοτήτων / εκπαιδευτικού υλικού για τρίτες χώρες",
            "startsFrom" => "2023-01-01",
            "endsAt" => "2025-12-31",
            "partners" => [
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "KYPRIAKI ETAIREIA PISTOPOIHSHS", "country" => "Κύπρος"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "JYIF", "country" => "Ιορδανία"],
                ["name" => "ΑΙΝ", "country" => "Ισπανία"],
                ["name" => "ACAS", "country" => "Παλαιστίνη"],
                ["name" => "HAVE A DREAM", "country" => "Αίγυπτος"],
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+ - EACEA",
            "description" => "Το έργο EMSA προωθεί τη συνεργασία μεταξύ ευρωπαϊκών και τρίτων χωρών με στόχο την ανάπτυξη, πιλοτική εφαρμογή και επικύρωση προγραμμάτων κατάρτισης για τις «Βασικές ικανότητες του ΕΕΣ» και «ικανότητες του ENTRECOMP». Εστιάζει στη διεθνοποίηση και καινοτομία, βελτιώνοντας τις δεξιότητες τόσο των παρόχων ΕΕΚ όσο και των εκπαιδευομένων.",
            "image" => "emsa.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "FOLLOWAPP– Ψηφιακά υποστηριζόμενη παρακολούθηση της απασχόλησης και εξέλιξη της σταδιοδρομίας των μαθητευομένων για τη διασφάλιση της ποιότητας στην ΕΕΚ",
            "startsFrom" => "2022-11-01",
            "endsAt" => "2025-10-31",
            "partners" => [
                ["name" => "INFODEF", "country" => "Ισπανία"],
                ["name" => "CSF", "country" => "Ιταλία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "FOR.SEO", "country" => "Ιταλία"],
                ["name" => "ΑΙΝ", "country" => "Ισπανία"],
                ["name" => "VALILIGI", "country" => "Τουρκία"],
                ["name" => "INNOQUALITY", "country" => "Ιρλανδία"],
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το FOLLOWAPP στοχεύει στη δημιουργία και δοκιμή ψηφιακών εργαλείων για την παρακολούθηση της επαγγελματικής εξέλιξης μαθητευομένων, βελτιώνοντας την ανταπόκριση της ΕΕΚ στις απαιτήσεις της αγοράς εργασίας.",
            "image" => "follow-up-1024x1024.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "BuSYouth – Επιχειρηματικές δεξιότητες για τους νέους στον τομέα των πολιτιστικών και δημιουργικών βιομηχανιών",
            "startsFrom" => "2022-11-01",
            "endsAt" => "2025-04-30",
            "partners" => [
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "DISRUPTIA", "country" => "Ισπανία"],
                ["name" => "ΣΙΒΙΤΑΝΙΔΕΙΟΣ ΣΧΟΛΗ", "country" => "Ελλάδα"],
                ["name" => "FOLK", "country" => "Σουηδία"],
            ],
            "website" => "https://www.busyouth.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το BuSYouth ενισχύει τις επιχειρηματικές δεξιότητες νέων που επιθυμούν να δραστηριοποιηθούν στις πολιτιστικές και δημιουργικές βιομηχανίες, παρέχοντας εκπαιδευτικά προγράμματα και εργαλεία δικτύωσης.",
            "image" => "busyouth.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "FLER- Μάθηση μέσω της εμπειρίας σε δωμάτια διαφυγής: Οικονομικός αλφαβητισμός για ενήλικες",
            "startsFrom" => "2022-11-01",
            "endsAt" => "2024-12-31",
            "partners" => [
                ["name" => "SGGW", "country" => "Πολωνία"],
                ["name" => "ASSEFFEBI", "country" => "Ιταλία"],
                ["name" => "IEFWEB", "country" => "Ισπανία"],
                ["name" => "EURODIMENSIONS", "country" => "Μάλτα"],
                ["name" => "FOLKUNIVERSITET", "country" => "Σουηδία"],
                ["name" => "VIRTUAL CAMPUS", "country" => "Πορτογαλία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
            ],
            "website" => "https://flerproject.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το FLER προσφέρει ψηφιακά εργαλεία μάθησης για ενήλικες με χαμηλό οικονομικό αλφαβητισμό σε αγροτικές περιοχές, παρέχοντας ένα εκπαιδευτικό πλαίσιο μέσα από Virtual Escape Rooms.",
            "image" => "fler.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "ESTour- Εισαγωγή επιδημικού ασφαλούς τουρισμού (μετά την ανάκαμψη από το COVID) για την ενίσχυση των ΜΜΕ στον τομέα της φιλοξενίας",
            "startsFrom" => "2021-02-28",
            "endsAt" => "2024-06-27",
            "partners" => [
                ["name" => "SGGW", "country" => "Πολωνία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "INFODEF", "country" => "Ισπανία"],
                ["name" => "AEICE", "country" => "Ισπανία"],
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "LTB", "country" => "Κύπρος"],
                ["name" => "UNITOV", "country" => "Ιταλία"],
                ["name" => "ACTA", "country" => "Ελλάδα"],
                ["name" => "EEIEP", "country" => "Ελλάδα"],
            ],
            "website" => "https://estour.projectlibrary.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το ESTour στοχεύει στην κατάρτιση ατόμων στον τομέα της φιλοξενίας για ασφαλή τουρισμό μετά από επιδημικές κρίσεις, εστιάζοντας σε πρωτόκολλα ασφάλειας και υγιεινής.",
            "image" => "ES-1.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "GEGS – Good E-Guidance Stories -Ανάπτυξη της συμβουλευτικής στην απασχόληση",
            "startsFrom" => "2021-02-28",
            "endsAt" => "2024-06-27",
            "partners" => [
                ["name" => "METROPOLISNET", "country" => "Γερμανία"],
                ["name" => "AUTONOMUS REGION Of SARDINIA", "country" => "Ιταλία"],
                ["name" => "SENATE of BERLIN – INTEGRATION and LABOUR MARKET DEPARTMENT", "country" => "Γερμανία"],
                ["name" => "PERIFERIA THESSALIAS", "country" => "Ελλάδα"],
                ["name" => "I.O.F.S. FORMAZIONE PROFESSIONALE", "country" => "Ιταλία"],
                ["name" => "GSUB – GESELLSCHAFT FUR SOZIALE UNTERNEHMENSBERATUNG MBH", "country" => "Γερμανία"],
                ["name" => "B", "country" => "Ιρλανδία"],
                ["name" => "RINOVA LTD", "country" => "Ισπανία"],
                ["name" => "EUROCIRCLE", "country" => "Γαλλία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "JOB4U SRL", "country" => "Ιταλία"],
                ["name" => "SÖSTRA SOZIALOKONOMISCHE STRUKTURANALYSEN GmbH", "country" => "Γερμανία"]
            ],
            "website" => "https://goodeguidance.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+ -EACEA",
            "description" => "Η πρωτοβουλία «Good E-Guidance Stories» (GEGS) αποσκοπεί στον εκσυγχρονισμό των λειτουργιών πληροφόρησης, συμβουλών και καθοδήγησης στο πλαίσιο των ευρωπαϊκών συστημάτων επαγγελματικής εκπαίδευσης και κατάρτισης (ΕΕΚ). Ενσωματώνει καινοτόμες μεθοδολογίες, όπως η μελέτη περίπτωσης «Οδηγός» και τα εργαλεία Jobi που βασίζονται στην τεχνητή νοημοσύνη, υποστηριζόμενα από την υψηλού επιπέδου συνηγορία των δημόσιων αρχών και τις δοκιμές πεδίου. Αυτή η ολιστική προσέγγιση ενισχύει τις ικανότητες των επαγγελματιών και τις πελατοκεντρικές υπηρεσίες, ζωτικής σημασίας για την ψηφιακή στροφή που αναδεικνύεται από την πανδημία Covid-19. Αντιμετωπίζοντας τις προκλήσεις διακυβέρνησης σε διάφορες περιοχές της ΕΕ, το GEGS καθοδηγείται από αρχές από τη Σαρδηνία, τη Θεσσαλία και το Βερολίνο, προωθώντας τη διακρατική συνεργασία για την εισαγωγή ευέλικτων, τεκμηριωμένων λύσεων στα συστήματα επαγγελματικής εκπαίδευσης και κατάρτισης.",
            "image" => "gegs.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "HABITABLE- Συμμαχία των Κέντρων Αριστείας στην επαγγελματική κατάρτιση για Αειφόρο Οικισμό",
            "startsFrom" => "2023-06-01",
            "endsAt" => "2027-05-31",
            "partners" => [
                ["name" => "AEICE", "country" => "Ισπανία"],
                ["name" => "EDUCACYL", "country" => "Ισπανία"],
                ["name" => "CIFP PICO Frentes", "country" => "Ισπανία"],
                ["name" => "CIFP", "country" => "Ισπανία"],
                ["name" => "INFODEF", "country" => "Ισπανία"],
                ["name" => "ICCL", "country" => "Ισπανία"],
                ["name" => "CESEFOR", "country" => "Ισπανία"],
                ["name" => "CETEM", "country" => "Ισπανία"],
                ["name" => "CENTRO HABITAT", "country" => "Ισπανία"],
                ["name" => "CTCV", "country" => "Πορτογαλία"],
                ["name" => "UAVR", "country" => "Πορτογαλία"],
                ["name" => "HCS", "country" => "Αυστρία"],
                ["name" => "FHS,", "country" => "Αυστρία"],
                ["name" => "CLUBE", "country" => "Ελλάδα"],
                ["name" => "DIMITRA,", "country" => "Ελλάδα"],
                ["name" => "UTH,", "country" => "Ελλάδα"],
                ["name" => "IP CEEE", "country" => "Μολδαβία"],
                ["name" => "C", "country" => "Γεωργία"],
                ["name" => "FLC", "country" => "Ισπανία"],
                ["name" => "IBW", "country" => "Αυστρία"]
            ],
            "website" => "https://habitable-cove.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+ – EACEA",
            "description" => "Το έργο HABITABLE στοχεύει να ανταποκριθεί στις προκλήσεις και τις ανάγκες του τομέα των οικοτόπων όσον αφορά την έλλειψη δεξιοτήτων και τις αναντιστοιχίες που απορρέουν από την ψηφιακή και πράσινη μετάβαση, βελτιώνοντας την ανταπόκριση των συστημάτων επαγγελματικής εκπαίδευσης και κατάρτισης σε αυτές τις αλλαγές και προωθώντας παράλληλα την ένταξη και την ισότητα στην εκπαίδευση. Για τον σκοπό αυτό, το έργο θα συν-δημιουργήσει μια πλατφόρμα κέντρων επαγγελματικής αριστείας για τους βιώσιμους οικοτόπους, δημιουργώντας ένα «οικοσύστημα δεξιοτήτων» μαζί με ένα ευρύ φάσμα άλλων τοπικών και περιφερειακών εταίρων, συνεργαζόμενο επίσης με κέντρα επαγγελματικής αριστείας σε άλλες χώρες μέσω δικτύων διεθνούς συνεργασίας.",
            "image" => "habitable-1024x1024.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "DDBSL- Εκμάθηση δεξιοτήτων με βάση την εξ’ αποστάσεως επίδειξη",
            "startsFrom" => "2022-02-01",
            "endsAt" => "2024-01-31",
            "partners" => [
                ["name" => "GSI – GESELLSCHAFT FUR", "country" => "Γερμανία"],
                ["name" => "SCHWEISSTECHNIK", "country" => "Γερμανία"],
                ["name" => "TIHC- KEK TEHNIKES SHOLES", "country" => "Ελλάδα"],
                ["name" => "EPIMELITIRIOU IRAKLEIOU", "country" => "Ελλάδα"],
                ["name" => "INFODEF – INSTITUTO PARA EL FOMENTO", "country" => "Ισπανία"],
                ["name" => "DEL DESARROLLO Y LA", "country" => "Ισπανία"],
                ["name" => "A & A EMPHASYS INTERACTIVE", "country" => "Κύπρος"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"]
            ],
            "website" => "https://ddbsl-project.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος αυτού του έργου είναι η εισαγωγή μιας μεθόδου για αποτελεσματική και υπεύθυνη εξ αποστάσεως μάθηση δεξιοτήτων με βάση την επίδειξη (DDBSL). Αποσκοπεί στην ενίσχυση των ψηφιακών και διδακτικών δεξιοτήτων και ικανοτήτων, με τη μέθοδο DDBSL, των παρόχων εκπαίδευσης ενηλίκων, των παρόχων ΕΕΚ και των εκπαιδευτικών που απαιτείται να διαθέτουν στην πράξη τα πιο πρόσφατα, καινοτόμα και επαγγελματικά εργαλεία της σύγχρονης αγοράς εργασίας. Το έργο αποσκοπεί στην ανάπτυξη μιας πλατφόρμας, κατάρτισης και εργαλείων που να ενισχύουν τις ψηφιακές ικανότητες και να προάγουν τις καινοτομίες στην εκπαίδευση.",
            "image" => "ddbs-learning.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "EQAVET-4-INCLUSION- για την ένταξη και την πρόληψη της εγκατάλειψης της επαγγελματικής εκπαίδευσης",
            "startsFrom" => "2022-11-01",
            "endsAt" => "2025-10-31",
            "partners" => [
                ["name" => "STIFTELSEN KURSVERKSAMHETEN VID U-AUNIVERSITET – FU", "country" => "Σουηδία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "VAN DE WINKEL CONSULTANCY BV – REVALENTO", "country" => "Ολλανδία"],
                ["name" => "UFFICIO SCOLASTICO REGIONALE PER IL VENETO – USRV", "country" => "Ιταλία"],
                ["name" => "ILNIOLAVORO srl", "country" => "Ιταλία"],
                ["name" => "RINOVA", "country" => "Ισπανία"],
                ["name" => "COLEGIUL MIHAI EMINESCU din SOROCA", "country" => "Μολδαβία"],
                ["name" => "VINNYTSIA STATE MYKHAYLO KOTSYUBYNSKIY PEDAGOGICAL UNIVERSITY", "country" => "Ουκρανία"]
            ],
            "website" => "https://eqavet4inclusion.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος αυτού του έργου είναι να εκπονηθεί ένας μηχανισμός για την ένταξη ή ένα μεθοδολογικό εγχειρίδιο με εκπαιδευτικό υλικό που θα επιτρέπει στα σχολεία επαγγελματικής εκπαίδευσης και κατάρτισης να εντοπίζουν τους μαθητές που κινδυνεύουν να εγκαταλείψουν το σχολείο σε όσο το δυνατόν πιο πρώιμο στάδιο και να λαμβάνουν τα κατάλληλα μέτρα για την πρόληψη της εγκατάλειψης. Το έργο EQAVET-4-INCLUSION στοχεύει να δώσει τη δυνατότητα στα επαγγελματικά σχολεία να επεξεργαστούν μια ολιστική προσέγγιση για την ένταξη και την πρόληψη της εγκατάλειψης, συμπεριλαμβάνοντας αυτές τις δύο πτυχές στο σύστημα διασφάλισης ποιότητας σύμφωνα με το EQAVET.",
            "image" => "EQAVET-1024x289.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "MAAS- Match, Attach και Sustain: Νέες μέθοδοι για την εργασία της Ευρώπης. Μεσίτες που υποστηρίζουν τουριστικές επιχειρήσεις, Ουκρανούς πρόσφυγες και άτομα που αναζητούν εργασία",
            "startsFrom" => "2023-09-01",
            "endsAt" => "2025-08-31",
            "partners" => [
                ["name" => "TRIM TAB", "country" => "Σουηδία"],
                ["name" => "VINNUMALASTOF NUN", "country" => "Ισλανδία"],
                ["name" => "VINNITSIA INSTITUTE of TRADE and ECONOMICS SUTE UKRAINE", "country" => "Ισπανία"],
                ["name" => "STIFTELSEN KURSVERKSAMHETEN VID U-AUNIVERSITET", "country" => "Σουηδία"],
                ["name" => "LARNACA TOURISM BOARD", "country" => "Κύπρος"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "BAMEN S. COOP AND SPAIN", "country" => "Ισπανία"],
                ["name" => "STIFTELSEN KURSVERKSAMHETEN VID UAUNIVERSITET", "country" => "Σουηδία"],
                ["name" => "SZKOLA GLOWNA GOSPODARSTWA WIEJSKIEGO", "country" => "Πολωνία"]
            ],
            "website" => "https://www.maas-project.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο “MAAS: Match, Attach and Sustain” αποτελεί μια καινοτόμος πρωτοβουλία που στοχεύει στην ενδυνάμωση των ευρωπαίων διαμεσολαβητών απασχόλησης με νέες μεθόδους και τη βελτίωση των δεξιοτήτων τους, προκειμένου να ανταποκρίνονται αποτελεσματικότερα στις ανάγκες πληροφόρησης, συμβουλευτικής και καθοδήγησης, με ειδική έμφαση στην υποστήριξη Ουκρανών προσφύγων και άλλων ατόμων που αναζητούν εργασία σε κατάσταση επείγουσας ανάγκης. Εστιάζοντας στις ευκαιρίες απασχόλησης και καριέρας που προκύπτουν στον τουριστικό τομέα της Ευρώπης, καθώς αυτός ανακάμπτει από την πανδημία COVID-19, το έργο προωθεί την ανάπτυξη και την εφαρμογή καινοτόμων προσεγγίσεων στον τομέα της εργασίας και της καθοδήγησης.",
            "image" => "Dimitra-Social-Media-3-1024x1024.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "LEARNING FOR ALL- Εκπαίδευση ενηλίκων χωρίς αποκλεισμούς",
            "startsFrom" => "2023-09-01",
            "endsAt" => "2025-08-31",
            "partners" => [
                ["name" => "FU", "country" => "Σουηδία"],
                ["name" => "OUTSIDE MEDIA & KNOWLEDGE", "country" => "Γερμανία"],
                ["name" => "MOMENTUM MARKETING SERVICES", "country" => "Ιρλανδία"],
                ["name" => "RINOVA", "country" => "Ισπανία"],
                ["name" => "EUEI", "country" => "Δανία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το “LEARNING FOR ALL” είναι ένα φιλόδοξο έργο που αποσκοπεί στην προώθηση της συμπεριληπτικής εκπαίδευσης ενηλίκων μέσα από μια σειρά στοχευμένων δράσεων και καινοτόμων προσεγγίσεων. Με διάρκεια 24 μήνες, από τον Σεπτέμβριο του 2023 έως τον Αύγουστο του 2025, αυτή η πρωτοβουλία στοχεύει στη μεταμόρφωση των κέντρων εκπαίδευσης ενηλίκων, καθιστώντας τα αποτελεσματικότερα στον τομέα της προώθηση της ένταξης και της ποικιλομορφίας. Το έργο προβλέπει την εφαρμογή μιας σειράς δραστηριοτήτων που επικεντρώνονται στη συμμετοχική αξιολόγηση, την κοινοτική προσέγγιση, την ανάπτυξη ικανοτήτων και τη διατήρηση και διάδοση των αποτελεσμάτων.\nΠιο συγκεκριμένα, το έργο αναμένεται να επιτύχει τέσσερα κύρια αποτελέσματα: τη δημιουργία ενός ψηφιακού εργαλείου αξιολόγησης για να βοηθήσει πάνω από 120 λήπτες αποφάσεων να αξιολογήσουν τις πρακτικές και να δημιουργήσουν σχέδια δράσης, ενός Εργαλείου Προσέγγισης Κοινότητας για να βελτιώσει τις δεξιότητες διαπολιτισμικής μάρκετινγκ και τις συνδέσεις με την κοινότητα πάνω από 300 μελών του προσωπικού, την ανάπτυξη ενός διαδικτυακού μαθήματος για να εξοπλίσει 250 μέλη του προσωπικού σε διάφορους ρόλους για να προωθήσουν τις αλλαγές στον οργανισμό, την πολιτική και την πρακτική, και τέλος, μια διακαναλική εκστρατεία μάρκετινγκ που θα οδηγήσει σε περισσότερους από 250 οργανισμούς εκπαίδευσης ενηλίκων να χρησιμοποιήσουν τα αποτελέσματα του έργου για να προωθήσουν την ένταξη.\nΟι δραστηριότητες του έργου αναμένεται να συμβάλουν στην ενδυνάμωση των ενηλίκων μέσω της βελτίωσης της πρόσληψης, της διατήρησης και της επιμόρφωσης, προάγοντας έτσι ένα περισσότερο ειρηνικό, δημοκρατικό και ευημερούντα Ευρώπη μέσα στο πλαίσιο των αναδυόμενων προκλήσεων.",
            "image" => "learning-for-all.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "SELCERT – Ανάπτυξη δεξιοτήτων και πιστοποίηση για εκπαιδευτές σύγχρονης ηλεκτρονικής μάθησης",
            "startsFrom" => "2022-03-01",
            "endsAt" => "2024-06-01",
            "partners" => [
                ["name" => "EURO-IDEA FUNDACJA SPOLECZNO"],
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "KYPRIAKI ETAIREIA PISTOPOIISIS LTD", "country" => "Κύπρος"],
                ["name" => "ASNOR", "country" => "Ιταλία"],
                ["name" => "FU", "country" => "Σουηδία"],
                ["name" => "THEOFANIS ALEXANDRIDIS & SIA EE", "country" => "Ελλάδα"]
            ],
            "website" => "https://selcert.projectsgallery.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο αποσκοπεί στη βελτίωση της ποιότητας της σύγχρονης ηλεκτρονικής μάθησης, αξιοποιώντας τα περιβαλλοντικά της οφέλη, όπως η μειωμένη χρήση μεταφοράς και χαρτιού, και τις δυνατότητές της να προάγει την ενσωμάτωση ατόμων με κινητικές δυσκολίες. Οι βασικοί στόχοι περιλαμβάνουν την ανάπτυξη ενός πλαισίου προσόντων για τους διαδικτυακούς εκπαιδευτές, τη δημιουργία προγραμμάτων σπουδών και ψηφιακών εργαλείων που ευθυγραμμίζονται με τις αρχές της Εκπαίδευσης Ενηλίκων και την υποστήριξη των εκπαιδευτών για την απόκτηση πιστοποίησης ISO17024. Επιπλέον, το έργο θα αναπτύξει ένα ψηφιακό εργαλείο αξιολόγησης, ένα κέντρο πόρων για δικτύωση και ανταλλαγή εργαλείων, έναν οδηγό πολυμέσων για την προσαρμογή τεχνικών διδασκαλίας σε διάφορες διαδικτυακές πλατφόρμες και έναν οδηγό βέλτιστων πρακτικών για την αποτελεσματική παροχή διαδικτυακής μάθησης. Οι πρωτοβουλίες αυτές αποσκοπούν στο να εξοπλίσουν τους εκπαιδευτές με τις απαραίτητες δεξιότητες και πόρους για την παροχή υψηλής ποιότητας, δια δραστικής και χωρίς αποκλεισμούς διαδικτυακής εκπαίδευσης.",
            "image" => "selcert.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "DEO4PA- Πιστοποιημένο εκπαιδευτικό πρόγραμμα για τον υπεύθυνο ψηφιακής δεοντολογίας για Ευρωπαϊκή Δημόσια Διοίκηση",
            "startsFrom" => "2023-12-01",
            "endsAt" => "2026-07-31",
            "partners" => [
                ["name" => "MEF", "country" => "Ιταλία"],
                ["name" => "ALLAI", "country" => "Ολλανδία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "EDHEC", "country" => "Γαλλία"],
                ["name" => "UNINETTUNO", "country" => "Ιταλία"],
                ["name" => "EIPA", "country" => "Ολλανδία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το DEO4PA αποσκοπεί στη μείωση των ηθικών, κοινωνικών και νομικών κινδύνων στη διαδικασία ψηφιοποίησης των προσωπικών δεδομένων, εξασφαλίζοντας διαφανείς και ασφαλείς λειτουργίες, σεβασμό των δημοκρατικών αρχών, θεμελιώδη δικαιώματα όπως το δικαίωμα στην ιδιωτική ζωή και την προστασία των δεδομένων, ηθική εποπτεία των ψηφιακών διαδικασιών και κουλτούρα δεοντολογίας μεταξύ των δημοσίων υπαλλήλων.",
            "image" => "deo4pa.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "BRIDGES- Εισαγωγή και ανάπτυξη καλών εκπαιδευτικών συστημάτων",
            "startsFrom" => "2023-12-01",
            "endsAt" => "2026-11-30",
            "partners" => [
                ["name" => "TIBER UMBRIA", "country" => "Ιταλία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "ARTES SRL", "country" => "Ιταλία"],
                ["name" => "ASSOCIACIO EMPRESARIAL L’ALQUERIA PROJECTES EDUCATIUS", "country" => "Ισπανία"],
                ["name" => "GROUPEMENT D’INTERET PUBLIC D’INSTITUTION INTER-UNIVERSITAIRE", "country" => "Γαλλία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο BRIDGES επικεντρώνεται στην ανάπτυξη καινοτόμων προσεγγίσεων για την εκπαίδευση μέσω νέων εργαλείων και προγραμμάτων, συμπεριλαμβανομένων της υποστήριξης μικρών και μεσαίων επιχειρήσεων, της προώθησης της ποιότητας των εκπαιδευτικών διαδικασιών και της προώθησης της εκπαίδευσης ενσωμάτωσης.",
            "image" => "bridges.jpg",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "FATIMA II – Πρόληψη της βίας κατά των γυναικών που σχετίζεται με την τιμή μέσω προγραμμάτων κοινωνικού αντίκτυπου και μάθησης από ομότιμους υπό την καθοδήγηση νέων ανδρών",
            "startsFrom" => "2022-02-01",
            "endsAt" => "2024-01-31",
            "partners" => [
                ["name" => "FU-UPPSALA", "country" => "Σουηδία"],
                ["name" => "RINOVA", "country" => "Ισπανία"],
                ["name" => "GAF (Gender Alternatives Foundation)", "country" => "Βουλγαρία"],
                ["name" => "FISPE", "country" => "Γαλλία"],
                ["name" => "Refugee team B.V", "country" => "Ολλανδία"],
                ["name" => "ZRS", "country" => "Σλοβενία"],
                ["name" => "ARCI APS", "country" => "Ιταλία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "HABITEMUS", "country" => "Σουηδία"]
            ],
            "website" => "https://fatima2.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+ – EACEA",
            "description" => "Η βία που συνδέεται με την τιμή, συμπεριλαμβανομένων των δολοφονιών προς τιμήν, των αναγκαστικών γάμων και του ακρωτηριασμού των γυναικείων γεννητικών οργάνων, είναι εγκλήματα που διαπράττονται με την αντίληψη ότι η πράξη θα προστατεύσει ή θα υπερασπιστεί την τιμή ενός ατόμου, μιας οικογένειας ή/και μιας κοινότητας με αναφορά σε έναν κώδικα συμπεριφοράς, αξιών και πεποιθήσεων.",
            "image" => "Fatima-2-3.png",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "Critical Balance– Αποτρέποντας τους νέους από το να πέσουν σε αδιέξοδο",
            "startsFrom" => "2022-02-01",
            "endsAt" => "2024-01-31",
            "partners" => [
                ["name" => "STIFTELSEN KURSVERKSAMHETEN VID UAUNIVERSITET- FU", "country" => "Γερμανία"],
                ["name" => "BUPNET BILDUNG UND PROJEKT", "country" => "Γερμανία"],
                ["name" => "NETZWERKGMBH", "country" => "Γερμανία"],
                ["name" => "FUNDATIA CENTRUL EDUCATIONAL SPEKTRUM / NGO -NF", "country" => "Ρουμανία"],
                ["name" => "FO/ NGO -NFP – VET & IAG", "country" => "Δανία"],
                ["name" => "ZEMGALES NEVALSTISKO", "country" => "Λετονία"],
                ["name" => "ORGANIZACIJU ATBALSTA CENTRS BIEDRIBA", "country" => "Λετονία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"]
            ],
            "website" => "https://criticalbalance.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος αυτού του έργου είναι η εισαγωγή μιας μεθόδου για αποτελεσματική και υπεύθυνη εξ αποστάσεως μάθηση δεξιοτήτων με βάση την επίδειξη (DDBSL). Αποσκοπεί στην ενίσχυση των ψηφιακών και διδακτικών δεξιοτήτων και ικανοτήτων, με τη μέθοδο DDBSL, των παρόχων εκπαίδευσης ενηλίκων, των παρόχων ΕΕΚ και των εκπαιδευτικών.",
            "image" => "Critical-Balance-01-version-RGB-1024x358.png",
            "eu_categories" => [2, 3]
        ],
        [
            "title" => "Περιγραφή",
            "startsFrom" => "01-09-2020",
            "endsAt" => "31-08-2023",
            "partners" => [
                ["name" => "ACH", "country" => "Αγγλία"],
                ["name" => "Metropolisnet", "country" => "Γερμανία"],
                ["name" => "DIMITRA Education & Consulting", "country" => "Ελλάδα"],
                ["name" => "Rinova", "country" => "Αγγλία"],
                ["name" => "Folksuniversitetet", "country" => "Σουηδία"],
                ["name" => "Videojuegos", "country" => "Ισπανία"]
            ],
            "website" => "https://euieedo.wordpress.com/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το IEEDO αναπτύσσει καινοτόμους εξατομικευμένους πόρους ηλεκτρονικής μάθησης που προωθούν την ανθεκτικότητα και την αποτελεσματικότητα της ψηφιακής αυτοεκπαίδευσης για τους πρόσφυγες και τους μετανάστες.",
            "image" => "IEEDO-FINAL-002.png"
        ],
        [
            "title" => "Sectoral EQAVET for design and delivery of VET",
            "startsFrom" => "01-12-2014",
            "endsAt" => "09-12-2024",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "DIMITRA Education & Consulting", "country" => "Ελλάδα"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "Effebi Association", "country" => "Ιταλία"],
                ["name" => "FACO", "country" => "Δανία"],
                ["name" => "BenPO", "country" => "Ολλανδία"]
            ],
            "website" => "https://sectoraleqavet.projectlibrary.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο αποσκοπεί στην ανάπτυξη ενός οικοσυστήματος που θα υποστηρίζεται από μια ψηφιακή πλατφόρμα για την απόκτηση και την αξιολόγηση της ψηφιακής ικανότητας με τη χρήση μικρο-διαπιστευτηρίων για τους 5 τομείς ψηφιακής ικανότητας σύμφωνα με το πλαίσιο DigiComp.",
            "image" => "dsw-Logo.png"
        ],
        [
            "title" => "DigitalSkillsWallet, Απόκτηση και αξιολόγηση ψηφιακής επάρκειας με τη χρήση μικρο-διαπιστευτηρίων",
            "startsFrom" => "2023-01-01",
            "endsAt" => "2026-08-31",
            "partners" => [
                ["name" => "EDITC", "country" => "Κύπρος"],
                ["name" => "OMEGATECH", "country" => "Ελλάδα"],
                ["name" => "UNINETTUNO", "country" => "Ιταλία"],
                ["name" => "UNIVERSITATEA DUNAREA DE JOS DIN GALATI", "country" => "Ιταλία"],
                ["name" => "MUNSTER TECHNOLOGICAL UNIVERSITY", "country" => "Ιρλανδία"],
                ["name" => "CYPRUS HOTEL ASSOCIATION", "country" => "Ιρλανδία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "CYPRUS COMPUTER SOCIETY", "country" => "Κύπρος"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "DigitalSkillsWallet",
            "image" => "dsw-Logo.png"
        ],
        [
            "title" => "NEARVET, Δίκτυο Αριστείας για την εφαρμοσμένη έρευνα στην ΕΕΚ",
            "startsFrom" => "2023-01-01",
            "endsAt" => "2024-12-31",
            "partners" => [
                ["name" => "METROPOLISNET, ", "country" => "Γερμανία"],
                ["name" => "DIMITRA Education and Consulting", "country" => "Ελλάδα"],
                ["name" => "FACHHOCHSCHULE DES MITTELSTANDES GMBH, "],
                ["name" => "ASSOCIATION OF THESSALIAN ENTERPRISES AND INDUSTRIES,", "country" => "Ελλάδα"],
                ["name" => "MMC", "country" => "Κύπρος\n"],
                ["name" => "CYPRUS HOTEL ASSOCIATION, ", "country" => "Κύπρος"],
                ["name" => "FU-UPPSALA", "country" => "Σουηδία"],
                ["name" => "CAMARA OFICIAL DE COMERCIO E INDUSTRIA DE ZARAGOZA", "country" => "Ισπανία"],
                ["name" => "CRESFB", "country" => "Ιταλία"],
                ["name" => "CIOFS-F, ", "country" => "Ιταλία"],
                ["name" => "ASSOLOMBARDA CONFINDUSTRIA MILANO, ", "country" => "Ιταλία"],
                ["name" => "RINOVA MÁLAGA, ", "country" => "Ισπανία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το NEARVET έχει στόχο να αναπτύξει ένα νέο μηχανισμό συστηματικής διερεύνησης και ανάπτυξης της εφαρμοσμένης έρευνας στην ΕΕΚ, αξιοποιώντας σύγχρονες μεθόδους ανάπτυξης και επικύρωσης τοπικών οικοσυστημάτων καινοτομίας εφαρμοσμένης έρευνας. Αντιμετωπίζει ένα ερώτημα που συχνά μένει αναπάντητο – “αν η εφαρμοσμένη έρευνα στην ΕΕΚ είναι κρίσιμη – ποιοι είναι οι εφαρμοσμένοι ερευνητές;”, καθορίζοντας έτσι την ομάδα-στόχο του εντός της ευρωπαϊκής κοινότητας των επαγγελματιών της ΕΕΚ και των επιχειρήσεων. Το NEARVET θα απευθυνθεί άμεσα σε +200 επαγγελματίες της ΕΕΚ, τοπικές επιχειρήσεις και ακαδημαϊκό προσωπικό. Το έργο σκοπεύει να υλοποιήσει τις φιλοδοξίες του μέσω ενός αλληλοεξαρτώμενου, άκρως συμμετοχικού προγράμματος εργασίας, το οποίο:\n - θα επεξεργαστεί μια μεθοδολογική αντίληψη, στο πλαίσιο της οποίας θα αξιοποιήσει τις πλέον σύγχρονες μεθόδους ανάπτυξης και επικύρωσης των μεθόδων εφαρμοσμένης έρευνας στην ΕΕΚ μέσω της ανδραγωγικής φιλοσοφίας και των μεθόδων και τεχνικών που καθοδηγούνται και επικυρώνονται από τους χρήστε\n - θα προσδιορίσει, θα ορίσει και θα εξειδικεύσει τις ικανότητες που απαιτούνται για την αποτελεσματική διεξαγωγή εφαρμοσμένης έρευνας στην ΕΕΚ, συμπεριλαμβανομένης της εκπόνησης προτύπων και των κριτηρίων απόδοσης και των επιπέδων επίτευξης σε σχέση με τις γνώσεις και τις δεξιότητες για τη διεξαγωγή αποτελεσματικής εφαρμοσμένης έρευνας στην ΕΕ\n - θα παρέχει και θα καλλιεργεί μια κοινότητα πρακτικών που εδράζεται σε ένα ευρύ και σχετικό δίκτυο, προωθώντας την ανταλλαγή γνώσεων και την καινοτομία μέσω της εφαρμοσμένης έρευνας και της συνεργασίας μεταξύ επαγγελματιών της ΕΕΚ, ενδιαφερόμενων φορέων, εργοδοτών, ενισχύοντας το ρόλο της ΕΕΚ στην καινοτομία, την έρευνα και την ανάπτυξη στην Ε\n - θα αναπτύξει και θα επικυρώσει ένα σύνολο πρακτικών πόρων και μεθόδων, μέσω της δημιουργίας μιας διακρατικής πλατφόρμας και ενός κόμβου με ψηφιακές δυνατότητε\n - θα αναπτύξει ένα ολοκληρωμένο πλαίσιο κληρονομιάς, το οποίο θα υποστηρίζει τη δυνατότητα μεταφοράς και τη βιωσιμότητα με μακροπρόθεσμη προοπτική, συμπεριλαμβανομένης της αξιοποίησης των αποτελεσμάτων του σε 5 επιπλέον χώρες εκτός από τις 6 που συμμετέχουν στο εταρικό σχήμα",
            "image" => "NEARVET-logo-claim_transparent-background-1024x320.png"
        ],
        [
            "title" => "QA-HEVET – Ευθυγράμμιση των μέσων ΑΕΙ και ΕΕΚ",
            "startsFrom" => "2022-05-31",
            "endsAt" => "2024-09-30",
            "partners" => [
                ["name" => "SGGW, ", "country" => "Πολωνία"],
                ["name" => "DIMITRA Education & Consulting", "country" => "Ελλάδα"],
                ["name" => "FU, ", "country" => "Σουηδία"],
                ["name" => "Tucep, "],
                ["name" => "Emphasys", "country" => "Κύπρος"]
            ],
            "website" => "qahevet.projectlibrary.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος αυτού του έργου είναι να διερευνήσει τη δυνατότητα εφαρμογής των στοιχείων που περιλαμβάνονται στο ESG (Περιβαλλοντική, Κοινωνική και Εταιρική Διακυβέρνηση) στο πλαίσιο EQAVET και αντίστροφα. Προς το παρόν, δεν υπάρχει συστηματική ανταλλαγή μεταξύ των δύο συστημάτων, παρά το γεγονός ότι υπάρχουν ορισμένες ομοιότητες μεταξύ τους. Το έργο QA-HEVET βασίζεται στη διακρατική προσέγγιση μέσω προηγούμενων έργων στον τομέα του EQAVET, όπως τα EQAVET in Practice, QSE-VET, QC-VET που υλοποιήθηκαν από μέλη της ομάδας έργου, τα οποία έχουν διερευνήσει, δοκιμάσει και εφαρμόσει εργαλεία και κατευθυντήριες γραμμές στο πλαίσιο EQAVET για τη βελτίωση της πρακτικής της ΕΕΚ. Η εμπειρία αυτή πρόκειται να μεταφερθεί στον τομέα της τριτοβάθμιας εκπαίδευσης.",
            "image" => "qa-hevet.png"
        ],
        [
            "title" => "RENOUVAL: ΣΥΜΜΕΤΟΧH ΣE ΕΚΠΑΙΔΕΥΤΙΚO ΠΡOΓΡΑΜΜΑ",
            "description" => "Το VET for NAI έχει σκοπό τη διευκόλυνση και την προώθηση της έγκαιρης και αποτελεσματικής ένταξης των νεοαφιχθέντων μεταναστών στην αγορά εργασίας μέσω προσαρμοσμένης επαγγελματικής καθοδήγησης, μέσω της ενίσχυσης της γώσης της γλώσσας της χώρας υποδοχής, καθώς και της δικτύωσης με εργοδότες οι οποίοι θα συμμετέχουν ενεργά στις δραστηριότητες του έργου.\nΤο έργο στοχεύει στη δημιουργία μιας εργαλειοθήκης καθοδήγησης, η οποία θα παρέχει στους νεοαφιχθέντες μετανάστες συμπληρωματικές δεξιότητες και ικανότητες (τεχνικές και γλωσσικές), ώστε να μπορέσουν να ανταποκριθούν καλύτερα στις απαιτήσεις των αναγκών της αγοράς εργασίας στις νέες τους χώρες. Αυτό θα αυξήσει την προσβασιμότητά τους στην αγορά εργασίας της Ευρώπης και θα προωθήσει την ένταξή τους στις κοινωνίες των χωρών υποδοχής τους.",
            "website" => "https://renouval-project.eu/index.php/el/home-gc/",
            "image" => "Logo_RENOUVAL-1024x819.jpg",
            "program_managing_entity" => "",
            "authority" => "",
            "partners" => [],
            "startsFrom" => "2021-01-01",
            "endsAt" => "2024-12-31"
        ],
        [
            "title" => "VET for NAI – Διευκόλυνση της ένταξης των νεοαφιχθέντων μεταναστών στην αγορά εργασίας μέσω προσαρμοσμένων επαγγελματικών προγραμμάτων και καθοδήγησης",
            "startsFrom" => "2022-01-20",
            "endsAt" => "2024-07-19",
            "partners" => [
                ["name" => "Trim tab AB", "country" => "Σουηδία"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτικός Οργανισμός", "country" => "Ελλάδα"],
                ["name" => "FISPE", "country" => "Γαλλία"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "Effebi", "country" => "Ιταλία"]
            ],
            "website" => "https://vetfornai.projectlibrary.eu/el/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το VET for NAI έχει σκοπό τη διευκόλυνση και την προώθηση της έγκαιρης και αποτελεσματικής ένταξης των νεοαφιχθέντων μεταναστών στην αγορά εργασίας μέσω προσαρμοσμένης επαγγελματικής καθοδήγησης, μέσω της ενίσχυσης της γώσης της γλώσσας της χώρας υποδοχής, καθώς και της δικτύωσης με εργοδότες οι οποίοι θα συμμετέχουν ενεργά στις δραστηριότητες του έργου.\nΤο έργο στοχεύει στη δημιουργία μιας εργαλειοθήκης καθοδήγησης, η οποία θα παρέχει στους νεοαφιχθέντες μετανάστες συμπληρωματικές δεξιότητες και ικανότητες (τεχνικές και γλωσσικές), ώστε να μπορέσουν να ανταποκριθούν καλύτερα στις απαιτήσεις των αναγκών της αγοράς εργασίας στις νέες τους χώρες. Αυτό θα αυξήσει την προσβασιμότητά τους στην αγορά εργασίας της Ευρώπης και θα προωθήσει την ένταξή τους στις κοινωνίες των χωρών υποδοχής τους.",
            "image" => "VET-for-NAI-logo-e1661239589622.png"
        ],
        [
            "title" => "CREATIVE AGORA – ενδυνάμωση και εκπαίδευση μέσω συμμετοχικών και συλλογικών τεχνών",
            "startsFrom" => "2022-01-01",
            "endsAt" => "2024-02-29",
            "partners" => [
                ["name" => "FU Lund", "country" => "Σουηδία"],
                ["name" => "ARTERIA", "country" => "Πολωνία"],
                ["name" => "RINOVA", "country" => "Ισπανία"],
                ["name" => "URBANI SEPARE", "country" => "Κροατία"],
                ["name" => "DIMITRA", "country" => "Ελλάδα"],
                ["name" => "UNISONS", "country" => "Γαλλία"],
                ["name" => "PRO PROGRESSIONE", "country" => "Ουγγαρία"]
            ],
            "website" => "www.creativeagora.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος της AGORA είναι να σχεδιάσει και να αναπτύξει σύγχρονες και καινοτόμες πρακτικές στην ευρωπαϊκή εκπαίδευση ενηλίκων που απευθύνονται σε ενήλικες οι οποίοι αποξενώνονται ή αποκλείονται από τις παραδοσιακές εκπαιδευτικές πρακτικές, μέσω της ανάπτυξης εκπαιδευτών που ασχολούνται με ενήλικες σε μειονεκτικές κοινότητες μέσω της συμμετοχικής και συλλογικής μη τυπικής μάθησης με βάση τις τέχνες.\nΗ AGORA θα εισάγει μεθοδολογίες στο πλαίσιο της δημιουργικής συμμετοχικής καλλιτεχνικής πρακτικής ως ισχυρά καινοτόμα εργαλεία για την προώθηση των στόχων της ΕΕ στην εκπαίδευση ενηλίκων για την αντιστροφή της φθίνουσας συμμετοχής στην εκπαίδευση ενηλίκων, ιδίως μεταξύ εκπαιδευομένων με χαμηλά προσόντα, με ελλιπή προσόντα και εκείνων που τα επίσημα εκπαιδευτικά ιδρύματα δυσκολεύονται να προσεγγίσουν, όχι μόνο για την αποτελεσματική εμπλοκή με μια σειρά περιθωριοποιημένων και μειονεκτούντων εκπαιδευομένων που τα πιο επίσημα και παιδαγωγικά ιδρύματα και μεθοδολογίες εκπαίδευσης ενηλίκων δυσκολεύονται να προσεγγίσουν, αλλά και για την ενδυνάμωση των κοινοτήτων και τη βελτίωση της κοινωνικής συνοχής και της ενεργού συμμετοχής των πολιτών.",
            "image" => "Creative-Agora-logo-1024x950.jpg"
        ],
        [
            "title" => "e-Eupa – Επικύρωση τυπικής, μη τυπικής και άτυπης μάθησης για διοικητικό προσωπικό μέσω ασύγχρονης ηλεκτρονικής μάθησης και ηλεκτρονικής αξιολόγησης",
            "startsFrom" => "2022-02-01",
            "endsAt" => "2024-09-01",
            "partners" => [
                ["name" => "MMC", "country" => "Κύπρος"],
                ["name" => "DIMITRA Education & Consulting", "country" => "Ελλάδα"],
                ["name" => "VOLKSHOCHSCHULE IM LANDKREIS CHAM EV", "country" => "Γερμανία"],
                ["name" => "KYPRIAKI ETAIREIA PISTOPOIISIS", "country" => "Κύπρος"],
                ["name" => "Rinova Málaga Sociedad Limitada Unipersona", "country" => "Ισπανία"],
                ["name" => "UNIVERSITA TELEMATICA INTERNAZIONALE-UNINETTUNO", "country" => "Ιταλία"]
            ],
            "website" => "https://e-eupa.projectsgallery.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το E-EUPA στοχεύει να μετατρέψει όλα τα υλικά του EUPA_NEXT σε ένα σύγχρονο υλικό για ασύγχρονη μάθηση με τη μορφή πλατφόρμας που θα υποστηρίζει τη μάθηση μέσω καλά εκπαιδευμένων εκπαιδευτών.",
            "image" => "e-EUPA-1024x346.jpg"
        ],
        [
            "title" => "Distance Education Quality Framework – DEQF",
            "startsFrom" => "2021-11-01",
            "endsAt" => "2023-11-01",
            "partners" => [
                ["name" => "IIS Di Savoia Chieti", "country" => "Ιταλία"],
                ["name" => "Ufficio Scolastico Regionale Abruzzo", "country" => "Ιταλία"],
                ["name" => "FU", "country" => "Σουηδία"],
                ["name" => "DIMITRA Education & Consulting", "country" => "Ελλάδα"],
                ["name" => "DIE BERATER", "country" => "Αυστρία"]
            ],
            "website" => "https://deqf.projectlibrary.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο σκοπεύει να αναπτύξει ένα πλαίσιο ποιότητας για την εξ αποστάσεως εκπαίδευση, εστιάζοντας στην κεντρική θέση του μαθητή και στον καθηγητή ως διευκολυντή.",
            "image" => "Copy-of-DEQF_vertical-1024x1024.png"
        ],
        [
            "title" => "iSurvive – Ψηφιακός χάρτης πορείας για το σχεδιασμό διαδραστικού περιεχομένου στο διαδίκτυο",
            "startsFrom" => "2021-06-01",
            "endsAt" => "2023-05-31",
            "partners" => [
                ["name" => "SGGW", "country" => "Πολωνία"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτικός Οργανισμός", "country" => "Ελλάδα"],
                ["name" => "CRES", "country" => "Ιταλία"],
                ["name" => "UNINETTUNO", "country" => "Ιταλία"],
                ["name" => "ITPIO", "country" => "Βουλγαρία"],
                ["name" => "UNWE", "country" => "Βουλγαρία"],
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"]
            ],
            "website" => "https://www.isurviveproject.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο 'iSurvive' προετοιμάζει τους ακαδημαϊκούς να αναπτύξουν διαδικτυακό περιεχόμενο για τα αναμενόμενα μαθησιακά αποτελέσματα.",
            "image" => "iSurvive-logo.png"
        ],
        [
            "title" => "iCREATE – Ενίσχυση της Πολιτιστικής και Δημιουργικής Επιχειρηματικής Νοοτροπίας",
            "startsFrom" => "2021-03-01",
            "endsAt" => "2023-02-28",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτική Συμβουλευτική", "country" => "Ελλάδα"],
                ["name" => "CERI Centre For Education", "country" => "Research And Innovations"],
                ["name" => "INFODEF Instituto Para El Fomento Del Desarrollo Y La Formacion", "country" => "Ισπανία"],
                ["name" => "RINOVA LIMITED", "country" => "Ηνωμένο Βασίλειο"],
                ["name" => "ITPIO", "country" => "Βουλγαρία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο iCREATE στοχεύει να αναπτύξει ένα Προσαρμοσμένο Πλαίσιο Κατάρτισης για νέους επιχειρηματίες στον τομέα της πολιτιστικής κληρονομιάς.",
            "image" => "Transparent-1-e1632303769220-1024x346.png"
        ],
        [
            "title" => "dTour – Εισάγοντας την ψηφιοποίηση για την ανάπτυξη των Μικρομεσαίων Επιχειρήσεων στον τομέα του Τουρισμού και της Φιλοξενίας",
            "startsFrom" => "2020-12-01",
            "endsAt" => "2023-04-30",
            "partners" => [
                ["name" => "DIMITRA EDUCATION & CONSULTING", "country" => "Ελλάδα"],
                ["name" => "ACTA: ARISTOTLE CERTIFICATION TRAINING & ASSESSMENT", "country" => "Ελλάδα"],
                ["name" => "MMC: MEDITERRANEAN MANAGEMENT CENTER", "country" => "Κύπρος"],
                ["name" => "LTB: LARNAKA TOURISM BOARD", "country" => "Κύπρος"],
                ["name" => "RINOVA Ltd", "country" => "Ηνωμένο Βασίλειο"],
                ["name" => "CHAMBER OF MAGNESIA", "country" => "Ελλάδα"],
                ["name" => "FU", "country" => "Σουηδία"],
                ["name" => "INVAT-TUR: VALENCIAN INSTITUTE OF TOURISM TECHNOLOGIES", "country" => "Ισπανία"]
            ],
            "website" => "https://dtour.projectlibrary.eu/el/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο dTour προωθεί την ψηφιοποίηση στις ΜΜΕ του τομέα Τουρισμού και Φιλοξενίας μέσω της εκπαίδευσης και πιστοποίησης συμβούλων.",
            "image" => "dTour2.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "WeSkill – Ανάπτυξη Τομεακών Δεξιοτήτων στον Τουρισμό Ευεξίας και Σπα",
            "startsFrom" => "2020-11-01",
            "endsAt" => "2023-10-31",
            "partners" => [
                ["name" => "ITPIO: Institute for Training of Personnel in International Organisationsundefined Βουλγαρία", "country" => "Βουλγαρία"],
                ["name" => "BTC: Bulgarian Tourist Chamberundefined Βουλγαρία", "country" => "Βουλγαρία\n"],
                ["name" => "Βουλγαρία", "country" => "Βουλγαρία\n"],
                ["name" => "CPI: Institute of the Republic of Slovenia for Vocational Education and Training", "country" => "Σλοβενία\n"],
                ["name" => "SSGZ: Savinjsko-saleska Chamber of Commerce and Industryundefined Σλοβενία", "country" => "Σλοβενία\n"],
                ["name" => "CHT: College of Hospitality and Tourism Marimor", "country" => "Σλοβενία"],
                ["name" => "VISC: National Centre for Educationundefined Λετονία", "country" => "Λετονία"],
                ["name" => "LRA: Latvian Resorts’ Assocationundefined Λετονία", "country" => "Λετονία\n"],
                ["name" => "RSMT: Riga Style and Fashion Technical School", "country" => "Λετονία"],
                ["name" => "ΔΗΜΗΤΡΑ: Εκπαιδευτικός Οργανισμός", "country" => "Ελλάδα"],
                ["name" => "ΣΔΙΠΕ: Σύνδεσμος Δήμων Ιαματικών Πηγών Ελλάδας", "country" => "Ελλάδα"],
                ["name" => "ZVST: Serbian Health", "country" => "Wellness and Spa Tourism Cluster"],
                ["name" => "FFS: Pharmaceutical-Physiotherapeutic School", "country" => "Σερβία"],
                ["name" => "TUCEP: Tiber Umbria Comett Education Programme", "country" => "Ιταλία"],
                ["name" => "FC: Federturismo Confindustria", "country" => "Ιταλία"],
                ["name" => "AFORMAC: Groupe Aformac", "country" => "Γαλλία"],
                ["name" => "UMIH: Union des Metiers des Industries de l’ Hotelerie du Puy de Dome", "country" => "Γαλλία"],
                ["name" => "Inthecity: Inthecity Project Development", "country" => "Ολλανδία"],
                ["name" => "FEMTEC: World Federation of Hydrotherapy and Climatotherapy", "country" => "Ιταλία"]
            ],
            "website" => "https://weskill.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο WeSkill φιλοδοξεί να εφοδιάσει τους σπουδαστές επαγγελματικής εκπαίδευσης και κατάρτισης και τους ενήλικες/εργαζόμενους του τομέα με τις απαιτούμενες δεξιότητες και σύγχρονα εκπαιδευτικά και διδακτικά εργαλεία, καθιστώντας τον τομέα του τουρισμού ευεξίας και σπα πιο ελκυστικό, βιώσιμο, προηγμένο και ανταγωνιστικό στην περιοχή της ΕΕ.",
            "image" => "WeSkill_Logo_RGB_Big-1024x624.png"
        ],
        [
            "title" => "EcoMentor – Εφαρμογή μοντέλου πιστοποίησης για μέντορες στον τομέα της οικολογικής βιομηχανίας",
            "startsFrom" => "01-11-2016",
            "endsAt" => "31-10-2018",
            "partners" => [
                ["name" => "IOS-PIB-INSTITUTE OF ENVIRONMENTAL PROTECTION-NATIONAL RESEARCH INSTITUTE IOS PIEP", "country" => "Πολωνία"],
                ["name" => "ITeE-PIB – INSTYTUT TECHNOLOGII EKSPLOATACJI-PIB", "country" => "Πολωνία"],
                ["name" => "SINERGIE Soc. Cons. a r.l.", "country" => "Ιταλία"],
                ["name" => "ICERMS Ltd. – International Centre for the Environment", "country" => "Resource Management & Sustainability Limited"]
            ],
            "website" => "tbc",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο EcoMentor θα επικεντρωθεί στη μάθηση με βάση την εργασία (WBL) στον επαγγελματικό τομέα της οικολογικής βιομηχανίας. Τα κύρια αποτελέσματα του έργου θα είναι η ανάπτυξη ενός συστήματος πιστοποίησης των δεξιοτήτων του μέντορα στον τομέα της οικολογικής βιομηχανίας και ενός προγράμματος επαγγελματικής εκπαίδευσης και κατάρτισης για τους μέντορες/συμβούλους στον τομέα της οικολογικής βιομηχανίας. Η εφαρμογή τους θα βοηθήσει τους ειδικευμένους και έμπειρους επαγγελματίες της οικολογικής βιομηχανίας που έχουν αρμοδιότητες μέντορα, να οικοδομήσουν μια σχέση μέντορα-εκπαιδευόμενου με τους εκπαιδευόμενους στο χώρο εργασίας, μεγιστοποιώντας τις δυνατότητές τους, αναπτύσσοντας τις δεξιότητές τους και βελτιώνοντας τις επιδόσεις τους. Επιπλέον, το έργο θα αναβαθμίσει τις ικανότητες των επαγγελματιών της οικολογικής βιομηχανίας με αποτέλεσμα την αύξηση της ανταγωνιστικότητάς τους για την αγορά εργασίας και θα δημιουργήσει αυξημένες ευκαιρίες για απασχόληση ή για διατήρηση των ήδη υπαρχόντων θέσεων εργασίας (ιδιαίτερα για τους εργαζόμενους άνω των 50 ετών). Πώς θα επιτευχθεί αυτό μέσω του προγράμματος εκπαίδευσης και της πλατφόρμας τηλεκατάρτισης που είναι διαθέσιμη στα ελληνικά στον παρακάτω σύνδεσμο: http://ecomentor.itee.radom.pl/",
            "image" => "EcoMentor.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "QUASER – Διαφανή προσόντα για την ενίσχυση της ποιότητας των υπηρεσιών που απευθύνονται σε αιτούντες άσυλο και πρόσφυγες",
            "startsFrom" => "01-09-2016",
            "endsAt" => "31-08-2019",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "Effebi Association Banking", "country" => "Ιταλία"],
                ["name" => "UNITOV-UNIVERSITA DEGLI STUDI DI ROMA TORVERGATA", "country" => "Ιταλία"],
                ["name" => "CITTALIA-CENTRO EUROPEO DI STUDI ERICERCHE PER I COMUNI E LE CITTAFONDAZIONE DI RICERCHE DELL’ ANCI", "country" => "Ιταλία"],
                ["name" => "Inercia Digital", "country" => "Ισπανία"],
                ["name" => "Κέντρο Πρώτης Υποδοχής", "country" => "Ελλάδα"]
            ],
            "website" => "www.quaser-asr.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος του προγράμματος είναι η ενίσχυση και αναγνώριση των προσόντων των ατόμων που εργάζονται σε κέντρα πρώτης υποδοχής και φιλοξενίας με απώτερο σκοπό τη βελτίωση της ποιότητας των υπηρεσιών που απευθύνονται στους αιτούντες άσυλο και τους πρόσφυγες. Ειδικότερα, το έργο προτείνει την ανάπτυξη μιας πρακτικής εργαλειοθήκης και των σχετικών κατευθυντήριων γραμμών για τη διευκόλυνση της διαφάνειας, την επικύρωση και την αναγνώριση των δεξιοτήτων, των ικανοτήτων και των προσόντων των ατόμων που εργάζονται με τους αιτούντες άσυλο και τους πρόσφυγες. Επιπλέον, για την εκπαιδευτική διαδικασία του έργου, η οποία συνδέεται με την κατηγοριοποίηση των θέσεων εργασίας, δημιουργείται μία νέα διαδραστική πλατφόρμα και μια διαδραστική βάση δεδομένων με στόχο να ενισχυθεί η αποτελεσματικότητα και η ποιότητα της εκπαίδευσης του προσωπικού που εργάζεται στον τομέα της υποδοχής και υποστήριξης των αιτούντων άσυλο και προσφύγων.",
            "image" => "a5563-logo_quaser_final.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "ED2VET – Συμμετοχή των Εργοδοτών στο Σχεδιασμό και την Ανάπτυξη της Επαγγελματικής Εκπαίδευσης και Κατάρτισης",
            "startsFrom" => "01-10-2016",
            "endsAt" => "30-09-2018",
            "partners" => [
                ["name" => "BDA – Bulgarian Development Agency", "country" => "Βουλγαρία"],
                ["name" => "ECCTIS", "country" => "Μεγάλη Βρετανία"],
                ["name" => "Pisces Learning Innovations Ltd.", "country" => "Μεγάλη Βρετανία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο ED2-VET θα διερευνήσει τους παράγοντες που καθορίζουν την έκταση και τις επιπτώσεις της συμμετοχής του εργοδότη στο σχεδιασμό της Επαγγελματικής Εκπαίδευσης και Κατάρτισης (ΕΕΚ) και θα εντοπίσει τις βέλτιστες πρακτικές για κοινή χρήση ανάμεσα σε φορείς και χώρες. Το έργο θα οδηγήσει σε απτά αποτελέσματα που θα διαδοθούν για να υποστηρίξει τους σχετικούς φορείς και άτομα, με στόχο την ανάπτυξη της ΕΕΚ όπου θα συμμετέχουν οι εργοδότες.\n",
            "image" => "3d8df-white-back.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Q4ADHD – Διασφάλιση Ποιότητας στην Επαγγελματική Εκπαίδευση και Κατάρτιση για εκπαιδευόμενους με Διαταραχή Ελλειμματικής Προσοχής – Υπερκινητικότητας",
            "startsFrom" => "01-09-2016",
            "endsAt" => "31-08-2019",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "Effebi Association Banking", "country" => "Ιταλία"],
                ["name" => "SU-NIS – SOFIISKI UNIVERSITET SVETI KLIMENT OHRIDSKI", "country" => "Βουλγαρία"],
                ["name" => "NART-National association of resource teachers", "country" => "Βουλγαρία"],
                ["name" => "UNIVERSITA TELEMATICA INTERNAZIONALE-UNINETTUNO", "country" => "Ιταλία"],
                ["name" => "FTF-FORO TECNICO DE FORMACION", "country" => "Ισπανία"],
                ["name" => "Επιστήμη για Σένα", "country" => "Ελλάδα"]
            ],
            "website" => "http://qa-adhd.uni-sofia.bg/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος του προγράμματος είναι η βελτίωση της ποιότητας της Επαγγελματικής Εκπαίδευσης και Κατάρτισης (ΕΕΚ) για τους μαθητές με ειδικές εκπαιδευτικές ανάγκες, με ιδιαίτερη έμφαση σε μαθητές με ΔΕΠΥ, μέσω της εφαρμογής των αρχών διασφάλισης της ποιότητας στην ΕΕΚ, σύμφωνα με τη σύσταση EQAVET. Η κοινοπραξία θα καθορίσει το πλαίσιο και τα εργαλεία για την αποτελεσματική υποστήριξη των παρόχων ΕΕΚ στο σχεδιασμό, την εφαρμογή, παρακολούθηση και αξιολόγηση της κατάρτισης και της στρατηγικής τους για την αντιμετώπιση των προκλήσεων όσον αφορά στη συμμετοχή τόσο στην Αρχική Επαγγελματική Εκπαίδευση όσο και στη Συνεχιζόμενη Επαγγελματική Εκπαίδευση.",
            "image" => "f1872-q4adhd_logo_min.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "Igma-Femina – Πρόσβαση στην εκπαίδευση/ αγορά εργασίας για γυναίκες πρόσφυγες και μετανάστριες μέσω της τοπικής συνεργασίας και της συμβουλευτικής επί της διάστασης του φύλου",
            "startsFrom" => "01-09-2016",
            "endsAt" => "31-08-2019",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "Rinova Ltd", "country" => "Αγγλία"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "Διεθνής ΜΚΟ “Ουκρανία-Πολωνία-Γερμανία»", "country" => "περιφερειακό τμήμα Vinnytsia"],
                ["name" => "15billion", "country" => "Μεγάλη Βρετανία"],
                ["name" => "Κέντρο Σπουδών Φύλου", "country" => "Πανεπιστήμιο της Ουψάλα"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "'Η δυνατότητα πρόσβασης των μεταναστριών και προσφύγων στην εκπαίδευση και την απασχόληση μέσω της εμπλοκής των ενδιαφερόμενων φορέων (συμπεριλαμβανομένων των εργοδοτών, στη διαδικασία προσανατολισμού και συμβουλευτικής, προκειμένου να υπάρχουν προσαρμοσμένες ευκαιρίες μάθησης / σταδιοδρομίας, αποτελεί προϋπόθεση για την επίλυση των προκλήσεων της ανεργίας και των προκαταλήψεων λόγω φύλου ή/και εθνικότητας.\nΗ σύμπραξη του έργου Igma-Femina έχει μακρά εμπειρία στην ένταξη των ευάλωτων κοινωνικά ομάδων στην αγορά εργασίας μέσω της συμβουλευτικής μέσα από τα προηγούμενα έργα igma, igma2 και igma3. Αρχικά η μεθοδολογία IGMA αναπτύχθηκε με έμφαση στις ανάγκες των ανειδίκευτων μεταναστών, πράγμα που σημαίνει ότι οι ενδιαφερόμενοι φορείς περιλάμβαναν γραφεία μετανάστευσης, κοινωνικής πρόνοιας, φορείς παροχής εκπαίδευσης ενηλίκων, δημόσιες υπηρεσίες απασχόλησης (ΔΥΑ), μονάδες ένταξη στο δήμο, μαθήματα ξένων γλωσσών. Η ομάδα “γυναίκες μετανάστριες/πρόσφυγες” χρειάζεται πρόσθετες υπηρεσίες, καθώς εμπίπτουν θέματα (αναπαραγωγικής) υγείας, ψυχολογικής υποστήριξης και φροντίδας των παιδιών. Το έργο IGMA-Femina θα χαρτογραφήσει όλες τις οργανώσεις που σχετίζονται με αυτή τη διαδικασία σε κάθε χώρα με στόχο να τους συμπεριλάβει στα δίκτυα των ενδιαφερομένων φορέων. Τέλος, σε επίπεδο ΕΕ θα αναπτυχθούν κατευθυντήριες γραμμές ως μέρος των ευρύτερων μεταρρυθμίσεων στις πολιτικές για τη μετανάστευση / ένταξη εστιάζοντας στη διάσταση του φύλου.",
            "image" => "d26de-igmafemina_logo_2a.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "SY-CULTour – Συνέργεια του πολιτισμού και του τουρισμού: αξιοποίηση του πολιτιστικού δυναμικού στις λιγότερο ευνοημένες αγροτικές περιοχές",
            "startsFrom" => "02-08-2012",
            "endsAt" => "01-06-2014",
            "partners" => [
                ["name" => "Scientific Research Centre of the Slovenian Academy of Sciences and Arts", "country" => "Anton Melik Geographical Institute (ZRC SAZU)"],
                ["name" => "Mountain Community Sirentina (CMS)", "country" => "Ιταλία"],
                ["name" => "Εμπορικό και Βιομηχανικό Επιμελητήριο Ηρακλείου", "country" => "Ελλάδα"],
                ["name" => "Central Transdanubian Regional Innovation Agency Nonprofit Ltd. (CTRIA)", "country" => "Ουγγαρία"],
                ["name" => "Municipality of Jesenice", "country" => "Σλοβενία"],
                ["name" => "Pazardzhik Regional Administration (PRA)", "country" => "Βουλγαρία"],
                ["name" => "Autonomous Province of Trento – Division for the Surveillance and Promotion of Agricultural Activities (PAT)", "country" => "Ιταλία"],
                ["name" => "University of Novi Sad", "country" => "Faculty of Sciences (UNSPMF)"],
                ["name" => "Chamber of Economy of Vojvodina", "country" => "Σερβία"]
            ],
            "website" => "www.sycultour.eu",
            "authority" => "Περιφέρεια Θεσσαλίας",
            "program_managing_entity" => "South East Europe, Transnational Cooperation Programme",
            "description" => "Ο στόχος του έργου SY_CULTour ήταν η βελτίωση της διαχείρισης των πολιτιστικών αξιών στις αγροτικές περιοχές, προκειμένου να αυξήσουν την οικονομική και κοινωνική τους ανάπτυξη. Στο πλαίσιο του έργου αναπτύχθηκε και εφαρμόστηκε μια κοινή μεθοδολογία για τη διαχείριση των πολιτιστικών αξιών στις αγροτικές περιοχές με βάση τη συμμετοχή των ενδιαφερόμενων φορέων.\nΗ συγκεκριμένη μεθοδολογία συνέβαλε στη δημιουργία νέων μη-μαζικών αγροτικών προορισμών πολιτιστικού τουρισμού, προκειμένου να δημιουργήσει νέα έσοδα και θέσεις εργασίας στον τομέα του τουρισμού. Εφαρμόστηκε και δοκιμάστηκε πιλοτικά σε περιοχές όπου ιδρύθηκαν διατομεακά δίκτυα τοπικών και περιφερειακών δημόσιων φορέων και παρόχων τουρισμού.\nΤο έργο υλοποιήθηκε για λογαριασμό της Περιφέρειας Θεσσαλίας.",
            "image" => "1ee5d-sy_cultour_logo_color_png.png",
            "eu_categories" => [9]
        ],
        [
            "title" => "ACT.Work – Ενεργός συμμετοχή του πολίτη και αξιοπρεπή εργασία",
            "startsFrom" => "01-10-2015",
            "endsAt" => "01-10-2017",
            "partners" => [
                ["name" => "FOREM – Fundación Formación y Empleo Miguel Escalera", "country" => "Ισπανία"],
                ["name" => "MU – Masarykova univerzita", "country" => "Τσεχία"],
                ["name" => "Education Joniskio zemes ukio mokykla", "country" => "Λιθουανία"],
                ["name" => "Consorzio Lavoro e Ambiente", "country" => "Ιταλία"],
                ["name" => "FOREM Navarra", "country" => "Ισπανία"]
            ],
            "website" => "www.active-citizenship.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Στόχος του προγράμματος είναι η υποστήριξη των νέων με λιγότερες ευκαιρίες, βοηθώντας τους να αξιοποιήσουν πλήρως τις δυνατότητές τους, κάνοντάς τους ενεργά μέλη στην κοινωνία. Κύριος στόχος είναι η ανάπτυξη μεθόδων ενεργητικής μάθησης, παιδαγωγικών προσεγγίσεων και εκπαιδευτικού υλικού ειδικά σχεδιασμένο για τη βελτίωση των ικανοτήτων Νο 6: Κοινωνικές ικανότητες και ικανότητες που σχετίζονται με την ιδιότητα του πολίτη, καθώς και την ανάπτυξη της ικανότητας Νο 7 Αίσθημα πρωτοβουλίας και επιχειρηματικότητα.",
            "image" => "f0238-logo.aact_.work_.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Job Broker – Ανάπτυξη Ικανοτήτων Συμβούλων Εργασίας",
            "startsFrom" => "01-09-2015",
            "endsAt" => "31-08-2018",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "SODALITAS", "country" => "Ιταλία"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "Lio A/S", "country" => "Δανία"]
            ],
            "website" => "www.jobbroker.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο στόχος του έργου είναι η βελτίωση της ικανότητας των συμβούλων για την ένταξη των νέων στην αγορά εργασίας. Η κύρια δραστηριότητα του έργου είναι η ανάπτυξη εκπαιδευτικών εργαλείων και η εφαρμογή τους σε πιστοποιημένα προγράμματα εκπαίδευσης και κατάρτισης, που στοχεύουν στην ενίσχυση της γνώσης των συμβούλων σχετικά με την αγορά εργασίας και τη διεθνή συνεργασία.",
            "image" => "86989-job.broker-logo.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Τα Ανθρώπινα δικαιώματα στην πράξη – Τα ανθρώπινα δικαιώματα, ως μέρος της γλωσσικής κατάρτισης για την πρόληψη βίαιων πρακτικών που σχετίζονται με εγκλήματα τιμής στις κοινότητες",
            "startsFrom" => "01-01-2016",
            "endsAt" => "31-12-2017",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "KERIGMA", "country" => "Innovation and Social Development"],
                ["name" => "Iranian and Kurdish Women’s Rights Organisation (IKWRO)", "country" => "Αγγλία"],
                ["name" => "Papatya", "country" => "Γερμανία"],
                ["name" => "Πάντειον Πανεπιστήμιο Κοινωνικών και Πολιτικών Επιστημών", "country" => "Ελλάδα"]
            ],
            "website" => "https://hrinpractice.projectlibrary.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Daphne",
            "description" => "",
            "image" => "95335-hr-logo_aceite_small.png",
            "eu_categories" => [1]
        ],
        [
            "title" => "MESSE – Μηχανισμός για την ενίσχυση της συνέργειας και της βιώσιμης ανάπτυξης μεταξύ επιχειρήσεων",
            "startsFrom" => "01-01-2012",
            "endsAt" => "31-12-2014",
            "partners" => [
                ["name" => "Περιφέρεια Αττικής", "country" => "Ελλάδα"],
                ["name" => "Επαρχία της Βενετίας", "country" => "Ιταλία"],
                ["name" => "Andalucian Government", "country" => "Ισπανία"],
                ["name" => "Ministry of Labor", "country" => "Family"],
                ["name" => "Pannon Business Network Association", "country" => "Ουγγαρία"],
                ["name" => "Sofia Municipality", "country" => "Βουλγαρία"],
                ["name" => "East Sweden Region", "country" => "Σουηδία"],
                ["name" => "Adult Education Centre of Hannover", "country" => "Γερμανία"],
                ["name" => "Community Action Hampshire", "country" => "Αγγλία"]
            ],
            "website" => "www.messe-project.eu",
            "authority" => "Περιφέρεια Αττικής",
            "program_managing_entity" => "INTERREG IVC",
            "description" => "",
            "image" => "2c31f-messe.jpg",
            "eu_categories" => [5]
        ],
        [
            "title" => "SusTEn – Βιώσιμη Τουριστική Επιχειρηματικότητα: προσεγγίζοντας την εδαφική βιωσιμότητα μέσω ανάπτυξης του τουρισμού και με βάση τη πολιτισμική επιχειρηματικότητα",
            "startsFrom" => "01-04-2012",
            "endsAt" => "30-09-2012",
            "partners" => [
                ["name" => "Εργαστήριο Έρευνας και Λογαριασμών Τουρισμού – Πανεπιστήμιο Πατρών", "country" => "Ελλάδα"],
                ["name" => "Περιφέρεια Αττικής", "country" => "Ελλάδα"],
                ["name" => "IRECOOP VENETO", "country" => "Ιταλία"],
                ["name" => "Επαρχία της Ragusa", "country" => "Ιταλία"],
                ["name" => "Επαρχία της Βενετίας", "country" => "Ιταλία"],
                ["name" => "Πανεπιστημιακό Ίδρυμα-Επιχειρήσεις των Βαλεαρίδων Νήσων (FUEIB)", "country" => "Ισπανία"],
                ["name" => "Επιμελητήριο Εμπορίου και Βιομηχανίας του Primorska", "country" => "Σλοβενία"],
                ["name" => "Δημοτικό Συμβούλιο της Πάλμα της Μαγιόρκα", "country" => "Ισπανία"],
                ["name" => "Επιμελητήριο Εμπορίου και Βιομηχανίας της Λυών", "country" => "Γαλλία"]
            ],
            "website" => "http://www.sustenmechanism.com/",
            "authority" => "Πανεπιστήμιο Πατρών",
            "program_managing_entity" => "MED Programme European Territorial Cooperation 2007-2013",
            "description" => "Η ολοκληρωμένη και βιώσιμη διαχείριση των φυσικών πόρων (και της πολιτιστικής κληρονομιάς) ήταν το αντικείμενο του έργου SusTEn. Κύριος στόχος ήταν ο σχεδιασμός και η εφαρμογή ενός ολοκληρωμένου πλαισίου το οποίο παρείχε μια συστημική και συστηματική προσέγγιση για τον ορθολογικό σχεδιασμό και την υλοποίηση των στρατηγικών, πολιτικών και μέτρων για την αποτελεσματική διαχείριση των φυσικών και πολιτιστικών πόρων και για την εξυπηρέτηση της βιώσιμης κοινωνικο-οικονομικής ανάπτυξης σε τοπικό / περιφερειακό επίπεδο.\nΤο έργο έδωσε έμφαση στη προστιθέμενη αξία που απορρέει από τη συνεργασία και τις συνέργειες μεταξύ των τοπικών φορέων του τουρισμού και των περιοχών με παρόμοιες ανάγκες και τουριστικά προϊόντα.\nΤο έργο υλοποιήθηκε για λογαριασμό του Πανεπιστημίου Πατρών.\n",
            "image" => "c6a64-susten.jpg",
            "eu_categories" => [8]
        ],
        [
            "title" => "G.S.R. MODEL – Κυβερνητικό Μοντέλο Κοινωνικής Ευθύνης: μια καινοτόμος προσέγγιση της Ποιότητας των κυβερνητικών δραστηριοτήτων και τα αποτελέσματα τους",
            "startsFrom" => "02-04-2012",
            "endsAt" => "28-09-2012",
            "partners" => [
                ["name" => "ΕΛΟΤ – Ελληνικός Οργανισμός Τυποποίησης", "country" => "Ελλάδα"],
                ["name" => "Κέντρο Επιχείρησης και Καινοτομίας Αττική", "country" => "Ελλάδα"],
                ["name" => "Πανεπιστήμιο Πατρών", "country" => "Τμήμα Διοίκησης Επιχειρήσεων"],
                ["name" => "Νομαρχιακή Αυτοδιοίκηση Πειραιά", "country" => "Ελλάδα"],
                ["name" => "Υπουργείο Υγείας της Βουλαρίας", "country" => "Ελλάδα"],
                ["name" => "UBBSLA – Union Of Bulgarian Black Sea Local Authorities", "country" => "Βουλγαρία"],
                ["name" => "City Hall of Iasi", "country" => "Ρουμανία"],
                ["name" => "Πανεπιστήμιο του Salento – Τμήμα Καινοτομίας Μηχανικής", "country" => "Ιταλία"],
                ["name" => "Περιφέρεια Basilicata", "country" => "Ιταλία"],
                ["name" => "Δήμος του Μπάρι", "country" => "Ιταλία"],
                ["name" => "INNOSTART National Business and Innovation Centre", "country" => "Ουγγαρία"],
                ["name" => "Business Service Centre of Government of Zenica-Doboj Canton", "country" => "Βοσνία Εργεγοβίνη"]
            ],
            "website" => "www.gsrmodel.eu",
            "authority" => "Αποκεντρωμένη Διοίκηση Αττικής",
            "program_managing_entity" => "South East Europe, Transnational Cooperation Programme",
            "description" => "–\n",
            "image" => "8e169-gsr_logo.jpg",
            "eu_categories" => [9]
        ],
        [
            "title" => "WISAR – Τοπικές στρατηγικές οικονομίας με γνώμονα τη Δια Βίου Μάθηση",
            "startsFrom" => "01-03-2010",
            "endsAt" => "28-02-2011",
            "partners" => [
                ["name" => "ITEE-PIB – Institute for Sustainable Technologies – National Research Institute", "country" => "Πολωνία"],
                ["name" => "Schulungszentrum Fonhsdorf", "country" => "Αυστρία"],
                ["name" => "Vzdelávací inštitút COOP", "country" => "Πολωνία"],
                ["name" => "School Center of Ptuj", "country" => "Σλοβενία"]
            ],
            "website" => "www.wisar.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Education, Audiovisual and Culture Executive Agency (EACEA)",
            "description" => "",
            "image" => "52a32-logo-wisar.png",
            "eu_categories" => [2]
        ],
        [
            "title" => "STEP – Πρόγραμμα υποστήριξης του ταλέντου με στόχο την απασχόληση",
            "startsFrom" => "01-10-2008",
            "endsAt" => "30-09-2010",
            "partners" => [
                ["name" => "COLLAGE ARTS", "country" => "Αγγλία"],
                ["name" => "Associazione Culturale Mulab", "country" => "Ιταλία"],
                ["name" => "WAC Performing Arts & Media College", "country" => "Αγγλία"],
                ["name" => "Prevista Ltd", "country" => "Αγγλία"],
                ["name" => "ArtQuimia S Coop A", "country" => "Ισπανία"],
                ["name" => "Institute of Social Studies – University of HAN", "country" => "Ολλανδία"]
            ],
            "website" => "www.cross-step.org",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "–\n",
            "image" => "701c9-step.png",
            "eu_categories" => [7]
        ],
        [
            "title" => "Conscious Senior e-Citizen – Conscious Senior e-Citizen",
            "startsFrom" => "01-10-2009",
            "endsAt" => "30-11-2011",
            "partners" => [
                ["name" => "Omer Turkmen Educators Association", "country" => "Τουρκία"],
                ["name" => "International TEFL Certificate", "country" => "Τσεχία"],
                ["name" => "E-SENIORS association", "country" => "Γαλλία"],
                ["name" => "Fundacion Cibervoluntarios", "country" => "Ισπανία"]
            ],
            "website" => "http://csc.bee.gr",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Education, Audiovisual and Culture Executive Agency (EACEA)",
            "description" => "Χωρίς αμφιβολία, η συνεχής ανάπτυξης της ψηφιακής κοινωνίας καθιστά δύσκολο για τα άτομα της Τρίτης Ηλικίας να ακολουθήσουν την αλλαγή με αυτή την ταχύτητα. Ο κύριος στόχος του έργου ήταν να κάνει τη ζωή των ατόμων της Τρίτης Ηλικίας στο σύγχρονο κόσμο της τεχνολογίας ευκολότερη και πιο άνετη. Μια σειρά διαδικτυακών μαθημάτων για τα άτομα της Τρίτης Ηλικίας, όπου καλύπτονταν θέματα όπως βασικές δεξιότητες ηλεκτρονικών υπολογιστών, το Διαδικτύου, Επικοινωνία, e-banking και e-shopping.\nΟι συμμετέχοντες του προγράμματος ήταν σε θέση να λάβουν ενεργό ρόλο στην ανταλλαγή της Ευρωπαϊκή εμπειρίας καθώς συμμετείχαν σε μια σειρά επισκέψεων μελέτης η οποία περιελάμβανε μαθησιακές δραστηριότητες με χρήση ΤΠΕ μεταξύ των χωρών εταίρων. Τέλος, η σύμπραξη του έργου δημιούργησε το «Senior Olympics» ήταν ένα καινοτόμο κουίζ για την αξιολόγηση την ανάπτυξης του προγράμματος σπουδών και κατάρτισης.\n",
            "image" => "65850-csc.png",
            "eu_categories" => [2]
        ],
        [
            "title" => "EQLEARN – Μάθηση για την Ισότητα και την Ενδυνάμωση – Μάθηση για όλους",
            "startsFrom" => "01-12-2009",
            "endsAt" => "30-11-2011",
            "partners" => [
                ["name" => "EDIT C ", "country" => "Κύπρος"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Schulungszentrum Fonhsdorf", "country" => "Αυστρία"],
                ["name" => "Vzdelávací inštitút COOP", "country" => "Πολωνία"]
            ],
            "website" => "www.eqlearn.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "Ένα βασικό πρόβλημα που εντοπίστηκε σε αρκετές χώρες της ΕΕ είναι το γεγονός ότι η αγορά εργασίας δεν είναι εύκολα προσβάσιμη σε όλους. Ο κύριος στόχος αυτού του έργου ήταν η ανάπτυξη βασικών δεξιοτήτων και ικανοτήτων προκειμένου να διευκολύνει την πρόσβαση των μειονεκτουσών ομάδων στην αγορά εργασίας.\nΤο EQLEARN είχε ως στόχο να βελτιωθεί η ενσωμάτωση του Ευρωπαϊκού Πλαισίου Αναφοράς στις Βασικές ικανότητες για την προσωπική ολοκλήρωση, την ενεργό συμμετοχή του πολίτη, την κοινωνική συνοχή και την απασχολησιμότητα σε μια κοινωνία της γνώσης που βασίζεται στα υπάρχοντα προγράμματα σπουδών Συνεχιζόμενης Επαγγελματικής Εκπαίδευσης και στο υλικό κατάρτισης. Για να επιτευχθεί αυτό, χρησιμοποιήθηκε μια καινοτόμος μέθοδος για να παρέχει τη δυνατότητα στους Οργανισμούς ΕΕΚ και στους εκπαιδευτές να παραδίδουν το ίδιο πρόγραμμα σπουδών, αλλά προσαρμοσμένο στις συγκεκριμένες ανάγκες της κάθε ομάδας στόχου. Τέλος, μια διαδραστική πλατφόρμα εξ αποστάσεως εκπαίδευσης για τα μειονεκτούντα άτομα αναπτύχθηκε στο πλαίσιο των δραστηριοτήτων του έργου. Το EQLEARN κατάφερε όχι μόνο να βοηθήσει τις μειονεκτούσες ομάδες, αλλά γενικά να βελτιώσει της ποιότητας της εκπαίδευσης, με την ενσωμάτωση των ΤΠΕ στη δια βίου μάθηση.\n",
            "image" => "83b84-eqlearn.png",
            "eu_categories" => [7]
        ],
        [
            "title" => "JS TOOLBOX – Μεθοδολογική Εργαλειοθήκη για την ανάπτυξη νέων δεξιοτήτων για την απασχόληση",
            "startsFrom" => "01-10-2010",
            "endsAt" => "30-09-2012",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "Staropolska Chamber of Industry & commerce", "country" => "Πολωνία"]
            ],
            "website" => "www.jstoolbox.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "Η αναντιστοιχία μεταξύ ζήτησης και προσφοράς δεξιοτήτων έχει υψηλό οικονομικό και κοινωνικό κόστος και συμβάλλει στη διαρθρωτική ανεργία. Ο έγκαιρος εντοπισμός των μελλοντικών αναγκών σε δεξιότητες επιτρέπει στους οργανισμούς κατάρτισης να προβλέψουν ποιες δεξιότητες θα είναι σε ζήτηση, έτσι ώστε να εξασφαλιστεί η καλύτερη αντιστοίχιση θέσεων εργασίας και δεξιοτήτων. Για το λόγο αυτό, το έργο JS TOOLBOX έχει ως στόχο να αναπτύξει ένα σύνολο μεθοδολογικών εργαλείων προκειμένου να αντιστοιχεί με την προσφορά της επαγγελματικής κατάρτισης, με τις μελλοντικές ανάγκες δεξιοτήτων, σε τοπικό και περιφερειακό επίπεδο.\nΤο έργο αναβάθμισε τη συνεργασία και το συντονισμό της περιφερειακής εργασιακής πολιτικής των ενδιαφερόμενων φορέων, λαμβάνοντας υπόψη την υψηλότερη απασχολησιμότητα και τη μείωση του κινδύνου για τη μελλοντική αναντιστοιχία δεξιοτήτων. Το αποτέλεσμα ήταν μια εργαλειοθήκη που περιλαμβάνει τη διαδικασία από την ερμηνεία των προβλέψεων σχετικές με το προφίλ θέσεων εργασίας / ικανοτήτων μέχρι την αναβάθμιση προγραμμάτων κατάρτισης.\n",
            "image" => "4b020-jstoolbox.jpg",
            "eu_categories" => [7]
        ],
        [
            "title" => "DIGEM – Ψηφιακή Ενδυνάμωση",
            "startsFrom" => "01-11-2009",
            "endsAt" => "30-04-2012",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "EDIT C ", "country" => "Κύπρος"],
                ["name" => "ΑΡΣΙΣ – Κοινωνική οργάνωση υποστήριξης νέων", "country" => "Ελλάδα"],
                ["name" => "DIGITALES LTD", "country" => "Αγγλία"],
                ["name" => "MULTIMEDIA EDUCATION CENTER AT WARSAW UNIV – SGGW", "country" => "Πολωνία"],
                ["name" => "ATHENA – Association for Education and Development of Women", "country" => "Τσεχία"],
                ["name" => "SOCIALINES IR EKONOMINES PLETROS CENTRAS", "country" => "Λιθουανία"]
            ],
            "website" => "http://digem.projectlibrary.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Development of Innovation",
            "description" => "",
            "image" => "82c97-digem_logo_final.jpg",
            "eu_categories" => [6]
        ],
        [
            "title" => "European Outplacement Framework – Επαγγελματική Υποστήριξη για Άτομα με δυσκολία στην πρόσβαση στην απασχόληση",
            "startsFrom" => "01-10-2009",
            "endsAt" => "30-09-2011",
            "partners" => [
                ["name" => "ITEE-PIB – Institute for Sustainable Technologies – National Research Institute", "country" => "Πολωνία"],
                ["name" => "Schulungszentrum Fonhsdorf", "country" => "Αυστρία"],
                ["name" => "Randers Bo- og Erhvervstræning ", "country" => "Δανία"],
                ["name" => "University Rehabilitation Institute", "country" => "Σλοβενία"],
                ["name" => "Vzdelávací inštitút COOP", "country" => "Πολωνία"],
                ["name" => "School Center of Ptuj", "country" => "Σλοβενία"],
                ["name" => "Centro de Estudos para a Inverncão Social", "country" => "Πορτογαλία"]
            ],
            "website" => "www.eu-eof.net",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "",
            "image" => "a039e-logo_eof_2.jpg",
            "eu_categories" => [7]
        ],
        [
            "title" => "INMA – Στέλεχος Διαχείρισης Καινοτομίας",
            "startsFrom" => "01-10-2010",
            "endsAt" => "31-12-2012",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "The West Pomeranian Business School", "country" => "Πολωνία"],
                ["name" => "Centre Européen d’Entreprise et d’Innovation multipolaire des Bouches-du-Rhône", "country" => "Γαλλία"],
                ["name" => "GTIR S.L", "country" => "Ισπανία"],
                ["name" => "Santurban -Agencia de Desarrollo del Ayuntamiento de Santander", "country" => "Ισπανία"]
            ],
            "website" => "http://www.inma-project.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "",
            "image" => "bbb7f-inmacolor.png",
            "eu_categories" => [7]
        ],
        [
            "title" => "EUPA – Επικύρωση της τυπικής, μη τυπικής και άτυπης μάθησης: Η περίπτωση των προσωπικών βοηθών",
            "startsFrom" => "01-10-2009",
            "endsAt" => "31-08-2012",
            "partners" => [
                ["name" => "EDIT C ", "country" => "Κύπρος"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Orbis Institute ", "country" => "Σλοβακία"],
                ["name" => "Εμπορικό και Βιομηχανικό Επιμελητήριο Κύπρου", "country" => "Κύπρος"],
                ["name" => "European Management Assistants", "country" => "Κύπρος"],
                ["name" => "Konrad Associates International", "country" => "Αγγλία"]
            ],
            "website" => "www.llpeupa.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Development of Innovation",
            "description" => "Κύριος στόχος του EUPA ήταν η ανάπτυξη ενός μοντέλου για την αναγνώριση και επικύρωση των προσόντων των Προσωπικών Βοηθών (ΠΒ), μέσω της ανάπτυξης ενός πλαισίου προσόντων που βασίζεται στα μαθησιακά αποτελέσματα, και ένα εργαλείο αξιολόγησης για να εκτιμηθεί η κατάσταση του ΠΒ σε κάθε ένα από τα μαθησιακά αποτελέσματα που εντοπίστηκαν. Το εργαλείο αξιολόγησης και το αναλυτικό πρόγραμμα κατάρτισης για την εκπαίδευση των αξιολογητών, μαζί με την ανάπτυξη ενός αρθρωτού προγράμματος σπουδών και του εκπαιδευτικού υλικού για την κατάρτιση των ΠΒ διευκόλυνε την ανάπτυξη ενός Ευρωπαϊκού προτύπου πιστοποίησης για γραμματείς και Προσωπικούς Βοηθούς.\nΤο έργο EUPA ενίσχυσε την ευαισθητοποίηση στο θέμα της αναγνώρισης των προσόντων στις χώρες εταίρους, ενώ ανέπτυξε την αξιολόγηση και τα μεθοδολογικά εργαλεία, υλικά κλπ για την υποστήριξη της αναγνώρισης των επαγγελματικών προσόντων.\n",
            "image" => "0e742-eupalogo1.jpg"
        ],
        [
            "title" => "Certi.MenTu – Πιστοποίηση Μεντόρων και Συμβούλων",
            "startsFrom" => "01-10-2012",
            "endsAt" => "30-09-2014",
            "partners" => [
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "ITEE-PIB – Institute for Sustainable Technologies – National Research Institute", "country" => "Πολωνία"],
                ["name" => "Schulungszentrum Fonhsdorf", "country" => "Αυστρία"],
                ["name" => "Institutionen för pedagogik och specialpedagogik", "country" => "Σουηδία"],
                ["name" => "Tjörns kommun", "country" => "Barn och utbildningsförvaltningen"],
                ["name" => "Vocational Rehabilitation Consultants Ltd", "country" => "Αγγλία"]
            ],
            "website" => "www.certimentu.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "",
            "image" => "c0a64-logo-certi-mentu-rgb-1.jpg",
            "eu_categories" => [7]
        ],
        [
            "title" => "CQAF VET – Λειτουργικό μοντέλο του “Κοινού Πλαισίου Διασφάλισης Ποιότητας” σε επίπεδο παρόχων ΕΕΚ",
            "startsFrom" => "01-10-2009",
            "endsAt" => "30-11-2011",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Revalento", "country" => "Ολλανδία"]
            ],
            "website" => "www.cqafvet.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "",
            "image" => "91f64-cqafvet.jpg",
            "eu_categories" => [6, 7]
        ],
        [
            "title" => "CQAF-online – Κοινό Πλαίσιο Διασφάλισης Ποιότητας-ΕΕΚ, ένα μοντέλο για παρόχους",
            "startsFrom" => "01-10-2011",
            "endsAt" => "30-09-2013",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "EDIT C ", "country" => "Κύπρος"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "Myndigheten för yrkeshögskolan", "country" => "Σουηδία"]
            ],
            "website" => "www.cqaf-online.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Development of Innovation",
            "description" => "",
            "image" => "e251d-common-quality-assurance_logo.jpg"
        ],
        [
            "title" => "MUVI – Ανάπτυξη στρατηγικών για άνδρες που χρησιμοποιούν βία στις προσωπικές τους σχέσεις",
            "startsFrom" => "01-02-2007",
            "endsAt" => "28-02-2009",
            "partners" => [
                ["name" => "Comune di Bologna", "country" => "Ιταλία"],
                ["name" => "Casa delle donne per non subire violenza ONLUS", "country" => "Ιταλία"],
                ["name" => "Centro ATV – Alternative to Violence", "country" => "Ιταλία"],
                ["name" => "Società ITD -Innovacion", "country" => "Trasferencia y Desarrollo "],
                ["name" => "ΕΑΤΑ", "country" => "Εταιρεία Ανάπτυξης και Τουριστικής Προβολής Αθηνών"]
            ],
            "website" => "http://www.comune.bologna.it/iperbole/muvi/index.php?option=com_content&task=view&id=16&Itemid=30",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Daphne",
            "description" => "",
            "image" => "71711-muvi.png",
            "eu_categories" => [1]
        ],
        [
            "title" => "EMKIT – Empowerment Kit for Immigrant Women with Low Educational / Working Experience",
            "startsFrom" => "01-10-2010",
            "endsAt" => "30-09-2012",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Revalento", "country" => "Ολλανδία"],
                ["name" => "AKSES", "country" => "spol. s r.o."],
                ["name" => "FDEP – Fondation pour le Développement de l’Education Permanente", "country" => "Ελβετία"],
                ["name" => "Folkuniversitetet Kursverksamheten Lunds Universitetet", "country" => "Σουηδία"]
            ],
            "website" => "www.socialempowerment.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Education, Audiovisual and Culture Executive Agency (EACEA)",
            "description" => "Το έργο Em-Kit είχε ως στόχο τη βελτίωση της πρόσβασης στην επαγγελματική εκπαίδευση των μεταναστριών, ιδίως εκείνων με χαμηλή εκπαιδευτική / εργασιακή εμπειρία, ώστε να τις βοηθήσει να εισέλθουν στην αγορά εργασίας και να γίνουν πιο ενεργά μέλη της κοινωνίας. Το έργο είχε ως αποτέλεσμα ένα Εργαλείο Ενδυνάμωσης (empowerment kit) σε δεξιότητες-κλειδιά με βάση τις ανάγκες της ομάδας-στόχου. Το Εργαλείο (kit) περιλαμβάνει ένα σύνολο από ενότητες που απαιτούνται για την είσοδο στην επαγγελματική εκπαίδευση των μεταναστριών με χαμηλή εκπαιδευτική/εργασιακή εμπειρία και αποτελεί ένα σημαντικό βήμα για την πρόσβαση των μεταναστριών στην απασχόληση και την ενεργό συμμετοχή μέσω της συνειδητής επιλογής του επαγγέλματος, την ανάπτυξη εξατομικευμένου σχεδίου δράσης και την απόκτηση των ικανοτήτων που απαιτούνται για επιτυχή παρακολούθηση των προγραμμάτων κατάρτισης στη χώρα υποδοχής. Οι κύριοι χρήστες ήταν σύμβουλοι/ εκπαιδευτές που εργάζονται με μετανάστριες σε διάφορους οργανισμούς, όπως δημόσιες υπηρεσίες απασχόλησης, ΜΚΟ και φορείς κατάρτισης.\n",
            "image" => "c62c7-em-kit.jpg",
            "eu_categories" => [2]
        ],
        [
            "title" => "LEXOP – Lex-Operators. Όλοι μαζί για τις γυναίκες- θύματα της βίας μεταξύ συντρόφων",
            "startsFrom" => "01-03-2011",
            "endsAt" => "28-02-2013",
            "partners" => [
                ["name" => "Alma Mater Studiorum – Università di Bologna ", "country" => "Ιταλία"],
                ["name" => "Municipality of Bologna ", "country" => "Ιταλία"],
                ["name" => "Bologna Orlando Association ", "country" => "Ιταλία"],
                ["name" => "Torino Association Donne & Futuro", "country" => "Ιταλία"],
                ["name" => "Landkreis Fulda – Freisausschuss Violence and Protection Assessment Centre ", "country" => "Γερμανία"],
                ["name" => "Milano Fondazione IRCCS Ca’ Granda Ospedale Maggiore Policlinico ", "country" => "Ιταλία"],
                ["name" => "Municipality of Torino", "country" => "Young People Division"],
                ["name" => "Κέντρο Γυναικείων Μελετών και Ερευνών “ΔΙΟΤΙΜΑ”", "country" => "Ελλάδα"],
                ["name" => "Barcelona Generalitat of Catalunia – Secretariat of Security", "country" => "Ισπανία"]
            ],
            "website" => "www.lexop.org",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Daphne",
            "description" => "Ο γενικός σκοπός του έργου LEXOP ήταν να δημιουργήσει ένα διεπιστημονικό δίκτυο φορέων που ασχολούνται, σε διάφορα επίπεδα, με την καταπολέμηση της συντροφικής βίας (βίας μεταξύ ερωτικών συντρόφων), προκειμένου να παράσχει μια συντονισμένη απάντηση από τα θεσμικά όργανα, ώστε να μπορούν να εργαστούν από κοινού για την προστασία των θυμάτων και την δίωξη των παραβατών.\nΟ κύριος στόχος αυτού του έργου ήταν διττός:\nΠρώτον, ένα υψηλού επιπέδου στρατηγικό cross-training (εκπαίδευση εργαζομένων σε διαφορετικούς ρόλους) που απευθυνόταν σε νομοθέτες, αστυνομικούς λειτουργούς, εισαγγελείς, δικαστικούς λειτουργούς, ιατροδικαστικούς επαγγελματίες και δικηγόρους. Το τελικό εγχειρίδιο είναι ένα αποτελεσματικό εργαλείο, ειδικά σχεδιασμένο για τις ομάδες-στόχους.\nΔεύτερον, το έργο συνέκρινε τα ήδη υπάρχοντα δίκτυα και ανέπτυξε ένα κοινό πρωτόκολλο. Οι έμμεσοι δικαιούχοι ήταν τόσο το δικαστικό σύστημα όσο και όλα τα πραγματικά ή πιθανά θύματα.\n",
            "image" => "09354-lexop.logo_.png",
            "eu_categories" => [1]
        ],
        [
            "title" => "AQUA.TS – Ολοκληρωμένο Σύστημα Ελέγχου Ποιότητας της ΕΕΚ",
            "startsFrom" => "01-10-2013",
            "endsAt" => "31-12-2015",
            "partners" => [
                ["name" => "SUPERFICIE 8 S.R.L.", "country" => "Ιταλία"],
                ["name" => "ARTES srl ", "country" => "Ιταλία"],
                ["name" => "IF Italia Forma SRL", "country" => "Ιταλία"],
                ["name" => "Provincia di Perugia ", "country" => "Ιταλία"],
                ["name" => "Centre for Tourism Training", "country" => "University Babes-Bolyai"],
                ["name" => "Agentia Judeteana Pentru Ocuparea Fortei de Munca Covasna", "country" => "Ρουμανία"],
                ["name" => "University of Maribor ", "country" => "Σλοβενία"],
                ["name" => "OZARA storitveno in invalidsko podjetje d.o.o. ", "country" => "Σλοβενία"],
                ["name" => "Landkreis Ostprignitz Ruppin – Der Landrat ", "country" => "Γερμανία"],
                ["name" => "OSZ – Oberstufenzentrum Ostprignitz-Ruppin", "country" => "Γερμανία"],
                ["name" => "Μεσογειακό Αγρονομικό Ινστιτούτο Χανίων", "country" => "Ελλάδα"],
                ["name" => "Tourism Training Center", "country" => "Τουρκία"],
                ["name" => "Hotel School Ljubljana", "country" => "Σλοβενία"],
                ["name" => "Zukunftswerkstatt Berlin e.V.", "country" => "Γερμανία"]
            ],
            "website" => "www.aquats.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Leonardo da Vinci",
            "description" => "Το έργο AQUA.TS έχει ως στόχο την ανάπτυξη ενός πρωτοποριακού εργαλείου για τη βελτίωση της ποιότητας της επαγγελματικής κατάρτισης στον τομέα του τουρισμού, των υπηρεσιών και των πρακτικών, που θα συμβάλει στη βελτίωση της πρόσβασης και της συμμετοχής όλων των ομάδων στόχων στην κατάρτιση και τη βιωσιμότητα των οργανισμών κατάρτισης.\nΤο έργο περιλαμβάνει τη δημιουργία μιας μεθόδου που θα επιτρέπει την παρακολούθηση και την αξιολόγηση της ποιότητας των εκπαιδευτικών ιδρυμάτων που προσφέρουν κατάρτιση στον τομέα του τουρισμού, των υπηρεσιών και της φιλοξενίας, καθώς και την αξιολόγηση της απόδοσης των προγραμμάτων που προσφέρουν.\n",
            "image" => "eefca-aqua_final.jpg",
            "eu_categories" => [6]
        ],
        [
            "title" => "igma – Στέλεχος Υπηρεσιών Ένταξης – Καινοτόμος μεθοδολογία καθοδήγησης για την ένταξη των ανειδίκευτων μεταναστών στην εκπαίδευση ενηλίκων",
            "startsFrom" => "01-12-2011",
            "endsAt" => "28-02-2014",
            "partners" => [
                [
                    "name" => "Folkuniversitetet",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo",
                    "country" => "Ισπανία"
                ],
                [
                    "name" => "EDIT C",
                    "country" => "Κύπρος"
                ],
                [
                    "name" => "Revalento",
                    "country" => "Ολλανδία"
                ],
                [
                    "name" => "IREA–Romanian Institute for Adult Education",
                    "country" => "Ρουμανία"
                ]
            ],
            "website" => "www.integrationagent.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Education, Audiovisual and Culture Executive Agency (EACEA)",
            "description" => "Το έργο “Στέλεχος Υπηρεσιών Ένταξης” (EU Integration Agent) ανέπτυξε μια νέα μεθοδολογία για τη βελτίωση των συμβουλευτικών υπηρεσιών και των προσόντων του προσωπικού του δικτύου των φορέων που ασχολούνται με διάφορες πτυχές της ένταξης, ειδικότερα, α) Υπαλλήλους Δημόσιων Υπηρεσιών Απασχόλησης, β)φορείς εκπαίδευσης ενηλίκων, γ) ΜΚΟ που ασχολούνται με διάφορες μειονεκτούσες ομάδες, δ) διάφοροι τύποι εθελοντικών οργανώσεων. Ο ειδικότερος στόχος αυτού του προγράμματος ήταν η ανάπτυξη νέων μεθόδων για την ενεργητική συνεργασία μεταξύ των φορέων για την αποτελεσματική ένταξη των ανέργων μεταναστών στην εκπαίδευση ενηλίκων, μέσα της έμφασης σε 3 κύρια ζητήματα, συγκεκριμένα: (α) σχέδιο εξατομικευμένης ενσωμάτωσης, (β) δέσμευση μεταξύ των φορέων και (γ) προσέγγιση της διαχείρισης της προόδου ως στρατηγική συνεργασία. Εστιάζοντας σε αυτά τα τρία βασικά θέματα, το έργο προσέφερε στους μετανάστες καθοδήγηση μέσω της βελτίωσης των υπηρεσιών ένταξης στο δίκτυο των φορέων που εργάζονται με αυτή την ομάδα-στόχο.",
            "image" => "82849-new_igma-logo.jpg",
            "eu_categories" => [2]
        ],
        [
            "title" => "igma2 – Ευρωπαϊκό Στέλεχος Ένταξης: Ανάπτυξη του ευρωπαϊκού επαγγελματικού προτύπου για την αποτελεσματική παροχή συμβουλευτικής σε ανειδίκευτους με στόχο την αγορά εργασίας μέσω της εκπαίδευσης ενηλίκων",
            "startsFrom" => "01-01-2014",
            "endsAt" => "30-06-2016",
            "partners" => [
                [
                    "name" => "Folkuniversitetet",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "Revalento",
                    "country" => "Ολλανδία"
                ],
                [
                    "name" => "ECWT European Centre For Women And Technology",
                    "country" => "Νορβηγία"
                ],
                [
                    "name" => "Bekir Gokdag Anadolu Lisesi",
                    "country" => "Τουρκία"
                ]
            ],
            "website" => "www.igma2.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Education, Audiovisual and Culture Executive Agency (EACEA)",
            "description" => "Ο γενικός σκοπός του έργου IGMA-ΙΙ ήταν η βελτίωση της κουλτούρας της ποιότητας στην εκπαίδευση ενηλίκων και η συμβουλευτική των εκπαιδευομένων με χαμηλά τυπικά προσόντα, δίνοντας ιδιαίτερη προσοχή στην επαγγελματική ανάπτυξη του προσωπικού των επαγγελματιών του χώρου. Επιπλέον, οι ειδικότεροι στόχοι αφορούσαν την ανάπτυξη ενός Ευρωπαϊκού Επαγγελματικού Προτύπου “EU Integration Agent” για τους επαγγελματίες στον τομέα της συμβουλευτικής σταδιοδρομίας/ καθοδήγησης μέσω της εκπαίδευσης ενηλίκων, ένα Πρόγραμμα Σπουδών Κατάρτισης “EU Integration Agent” για την επαγγελματοποίηση του προσωπικού της εκπαίδευσης ενηλίκων και άλλων επαγγελματιών που εργάζονται με την ενσωμάτωση και ένα Σύστημα Διαχείρισης Πληροφοριών που βασιζόταν στις Τεχνολογίες της Πληροφορίας και των Επικοινωνιών (ΤΠΕ) ως μια πλατφόρμα για τη σωστή διακυβέρνηση από διάφορους φορείς της περιοχής.",
            "image" => "7d132-logo-igmaii.jpg",
            "eu_categories" => [2]
        ],
        [
            "title" => "NEW START – Συμβουλευτική και καθοδήγηση για τη χειραφέτηση γυναικών για ένα νέο ξεκίνημα",
            "startsFrom" => "01-09-2014",
            "endsAt" => "30-06-2016",
            "partners" => [
                [
                    "name" => "Agentia pentru Dezvoltare Regionala Sud Muntenia",
                    "country" => "Ρουμανία"
                ],
                [
                    "name" => "Cork Institute of Technology",
                    "country" => "Ιρλανδία"
                ],
                [
                    "name" => "Institute of Women",
                    "country" => "Ισπανία"
                ],
                [
                    "name" => "Le Monde des Possibles ASBL",
                    "country" => "Βέλγιο"
                ],
                [
                    "name" => "Coopérative Sud Concept",
                    "country" => "Γαλλία"
                ],
                [
                    "name" => "Promidea Social Cooperative",
                    "country" => "Ιταλία"
                ]
            ],
            "website" => "www.newstart-project.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Daphne",
            "description" => "Το έργο NEW START είχε ως στόχο την ανάπτυξη και εφαρμογή ενός προγράμματος κατάρτισης για τις γυναίκες, θύματα βίας λόγω φύλου. Βασιζόταν σε τεχνικές life coaching (ψυχολογικής ενδυνάμωσης) και καθοδήγησης (mentoring). Το έργο παρείχε στα θύματα εργαλεία με σκοπό την ενίσχυση της αυτοπεποίθησης, της αυτοεκτίμησης και δεξιότητες επίλυσης προβλημάτων, και την ανάπτυξη των επιχειρηματικών ικανοτήτων τους, προκειμένου να βοηθηθούν εκ νέου να εισέλθουν στην αγορά εργασίας αλλά και να διευκολυνθεί η καλύτερη κοινωνική ένταξη.",
            "image" => "6d480-newstart-logo.png",
            "eu_categories" => [1]
        ],
        [
            "title" => "Q-Spirit – Ευρωπαϊκό Δίκτυο για τη Διασφάλιση της Ποιότητας στην Επαγγελματική Εκπαίδευση και Κατάρτιση στην πράξη",
            "startsFrom" => "01-09-2015",
            "endsAt" => "31-08-2018",
            "partners" => [
                [
                    "name" => "Folkuniversitetet",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "USRV – Ufficio Scolastico Regionale per il Veneto",
                    "country" => "Ιταλία"
                ],
                [
                    "name" => "Yrkeshögskoleförbundet i Sverige",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "IES Hermanos Machado",
                    "country" => "Ισπανία"
                ],
                [
                    "name" => "Revalento",
                    "country" => "Ολλανδία"
                ],
                [
                    "name" => "Effebi Association Banking",
                    "country" => "Ιταλία"
                ],
                [
                    "name" => "FACO",
                    "country" => "Δανία"
                ],
                [
                    "name" => "SEPIE",
                    "country" => "Ισπανία"
                ],
                [
                    "name" => "BAFF",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "EUROPEAN PLATFORM",
                    "country" => "Βέλγιο"
                ]
            ],
            "website" => "www.q-spirit.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Erasmus+",
            "description" => "Το έργο Q-Spirit είχε στόχο τη δημιουργία και ανάπτυξη ενός Ευρωπαϊκού Δικτύου Διασφάλισης Ποιότητας στην Επαγγελματική Εκπαίδευση και Κατάρτιση στην πράξη. Το έργο θα υποστηρίξει την προώθηση της ποιότητας και της καινοτομίας στην επαγγελματική εκπαίδευση μέσω της συνεργασίας και της ανταλλαγής εμπειριών ανάμεσα στους εταίρους της Ευρωπαϊκής Ένωσης και τα μέλη της ακαδημαϊκής κοινότητας στον τομέα της διασφάλισης ποιότητας. Οι εταίροι θα αναπτύξουν εργαλεία για τη διασφάλιση της ποιότητας των υπηρεσιών επαγγελματικής εκπαίδευσης και κατάρτισης, καθώς και συστήματα αναγνώρισης και πιστοποίησης των πιστοποιητικών ποιότητας.",
            "image" => "f206a-q-spirit_logo_r.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "igma3 – Πρόσβαση στην αγορά εργασίας για νέους που απειλούνται από την ανεργία και τον κοινωνικό αποκλεισμό – Εξ αποστάσεως εκπαίδευση για τη λήψη συντονισμένων μέτρων από περιφερειακά δίκτυα ενδιαφερομένων μερών",
            "startsFrom" => "01-09-2015",
            "endsAt" => "31-08-2018",
            "partners" => [
                [
                    "name" => "Folkuniversitetet ",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo",
                    "country" => "Ισπανία"
                ],
                [
                    "name" => "M.M.C Management Center Limited",
                    "country" => "Κύπρος"
                ],
                [
                    "name" => "Revalento",
                    "country" => "Ολλανδία"
                ],
                [
                    "name" => "ECWT European Centre For Women And Technology ",
                    "country" => "Νορβηγία"
                ],
                [
                    "name" => "UYOVR – Union of Youth Organizations of Vinnytsia region",
                    "country" => "Ουκρανία"
                ]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Η δυνατότητα πρόσβασης των νέων στην απασχόληση μέσω της εμπλοκής των περιφερειακών δικτύων των ενδιαφερόμενων μερών (συμπεριλαμβανομένων των εργοδοτών), στη διαδικασία προσανατολισμού, προκειμένου να υπάρχουν προσαρμοσμένες ευκαιρίες μάθησης / σταδιοδρομίας αποτελεί προϋπόθεση για την επίλυση των προκλήσεων της ανεργίας. Η σύμπραξη του έργου igma3, έχοντας υλοποιήσει τα έργα igma και igma2, διαθέτει μακρά εμπειρία στην ένταξη στην αγορά εργασίας μέσω της συμβουλευτικής σταδιοδρομίας. Η μεθοδολογία για την ένταξη στην αγορά εργασίας μέσω της αποτελεσματικής συνεργασίας των ενδιαφερομένων περιφερειακών δικτύων αναπτύχθηκε κατά τη διάρκεια του προγράμματος igma ενώ το αναλυτικό πρόγραμμα για την κατάρτιση των περιφερειακών δικτύων αναπτύχθηκε στο igma2. Ο καινοτόμος χαρακτήρας του έργου igma3 έγκειται στο ότι η μεθοδολογία igma θα αναπτυχθεί περαιτέρω και θα ενσωματωθεί στα επίπεδα πολιτικής στις χώρες εταίρους.",
            "image" => "d3751-igma-3.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "EUPA_NEXT – Επικύρωση της τυπικής, μη-τυπικής και άτυπης μάθησης: η περίπτωση του προσωπικού διοίκησης",
            "startsFrom" => "01-09-2015",
            "endsAt" => "31-08-2018",
            "partners" => [
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Orbis Institute ", "country" => "Σλοβακία"],
                ["name" => "CIPFP- Centro Integrado Público de Formación Profesional Misericordia ", "country" => "Ισπανία"],
                ["name" => "NUCZV – Narodny Ustav Celozivotneho Vzdelavania", "country" => "Σλοβακία"],
                ["name" => "Κυπριακή Εταιρεία Πιστοποίησης", "country" => "Κύπρος"],
                ["name" => "Εμπορικό και Βιομηχανικό Επιμελητήριο Κύπρου", "country" => "Κύπρος"],
                ["name" => "European Management Assistants", "country" => "Κύπρος"],
                ["name" => "Volkshochschule im Landkreis Cham e.V.", "country" => "Γερμανία"]
            ],
            "website" => "http://www.eupanext.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το πρόγραμμα EUPA_NEXT επικεντρώνεται στην επικύρωση της μη τυπικής και της άτυπης μάθησης και τη διαπερατότητά της με την επίσημη εκπαίδευση μέσω της χρήσης ενός συστήματος πιστοποίησης (ISO). Στόχος του είναι να αναπτύξει μια μεθοδολογία για την πιστοποίηση της μη τυπικής και άτυπης μάθησης των μη ρυθμιζόμενων επαγγελμάτων και την ίδια στιγμή να αναπτύξει ένα ευρωπαϊκό πιστοποιητικό για το διοικητικό προσωπικό. Το EUPA_NEXT έχει ως στόχο τη δημιουργία πιστωτικών μονάδων στο πλαίσιο επαγγελματικών προσόντων (επίπεδα 3-5) με τη χρήση του Ευρωπαϊκού Συστήματος Πιστωτικών Μονάδων (ECVET) και την ανάπτυξη προγραμμάτων σπουδών και εκπαιδευτικού υλικού για τον εκπαιδευτή για τα ίδια επίπεδα, καθώς και ηλεκτρονικά βιβλία για τους εκπαιδευόμενους. Επιπλέον το πρόγραμμα στοχεύει να αναπτύξει μια αξιολόγηση για την πιστοποίηση των επιπέδων 2, 3, 4 και 5. Η διαδικασία της αξιολόγησης θα πιστοποιηθεί με ένα σχετικά νέο πρότυπο, το ISO170324 το οποίο πιστοποιεί τις προσωπικές ικανότητες.",
            "image" => "e9b1a-eupa_next_logo.jpg",
            "eu_categories" => [3, 6]
        ],
        [
            "title" => "GETIR – Ευρωπαϊκό στέλεχος για τις ευφυείς και υπεύθυνες περιοχές",
            "startsFrom" => "01-01-2011",
            "endsAt" => "31-12-2012",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "BDA – Bulgarian Development Agency", "country" => "Βουλγαρία"],
                ["name" => "IREA–Romanian Institute for Adult Education", "country" => "Ρουμανία"]
            ],
            "website" => "http://www.getir.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "",
            "image" => "a5431-getircolor.png",
            "eu_categories" => [7]
        ],
        [
            "title" => "MYBUSINESS – Ενδυνάμωση των επιχειρηματικών δεξιοτήτων και απελευθέρωση της δυναμικής ανέργων άνω των 50 ετών",
            "startsFrom" => "01-09-2014",
            "endsAt" => "31-08-2016",
            "partners" => [
                ["name" => "Agentia pentru Dezvoltare Regionala Sud Muntenia", "country" => "Ρουμανία"],
                ["name" => "Cork Institute of Technology ", "country" => "Ιρλανδία"],
                ["name" => "Fias-ACFI – Association Coordonnée de Formation et d’Insertion", "country" => "Βέλγιο"],
                ["name" => "BEST Institut fur Berufsbezogene Weiterbildung und Personaltraining Gmbh ", "country" => "Αυστρία"],
                ["name" => "INFODEF- Instituto para el Fomento del Desarrollo y la Formación", "country" => "Ισπανία"]
            ],
            "website" => "http://mybusiness-project.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "",
            "image" => "dfebf-logo_mybusiness.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "INMATOUR – Μάνατζερ για Ευφυείς και Υπεύθυνους Τουριστικούς προορισμούς",
            "startsFrom" => "01-09-2014",
            "endsAt" => "31-08-2016",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "Rinova Ltd ", "country" => "Αγγλία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Kύριος στόχος του INMATOUR είναι να συμβάλει στην προσαρμογή των γνώσεων, δεξιοτήτων και ικανοτήτων των επαγγελματιών της τουριστικής βιομηχανίας με τις τρέχουσες ανάγκες της αγοράς, μειώνοντας το χάσμα μεταξύ της ζήτησης εργασίας και των αναγκών εκπαίδευσης μέσω του σχεδιασμού ενός προφίλ και ενός προγράμματος σπουδών για την καινοτόμο διαχείριση σε τουριστικούς προορισμούς. Το προφίλ αυτό στοχεύει στην επίτευξη τριών στόχων: 1. Ενίσχυση των δεσμών μεταξύ της εκπαίδευσης / κατάρτισης στον τομέα του τουρισμού και της αγοράς εργασίας εργασίας, 2. Χρήση της διαχείρισης της καινοτομίας ως εργαλείο για τη βελτίωση της ανταγωνιστικότητας των επιχειρήσεων και των τουριστικών προορισμών 3. Προσαρμογή της κατάρτισης στον τομέα της γνώσης και των δεξιοτήτων των επαγγελματιών του τουρισμού για τις ανάγκες και τις τρέχουσες στρατηγικές ανάπτυξης της τουριστικής αγοράς.",
            "image" => "1f765-logoinmatour.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "CS.Tour – Πολιτισμική Επίγνωση και Κοινωνικές Δεξιότητες ως βασικά εφόδια στον Τουρισμό",
            "startsFrom" => "01-09-2015",
            "endsAt" => "30-04-2018",
            "partners" => [
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Rinova Ltd ", "country" => "Αγγλία"],
                ["name" => "ACTA- Τεχνοβλαστός Αριστοτελείου Πανεπιστημίου Θεσσαλονίκης", "country" => "Ελλάδα"],
                ["name" => "LTR- Learn Train Recruit ", "country" => "Αγγλία"],
                ["name" => "LTB – Larnaca Tourism Board", "country" => "Κύπρος"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "FPME – Fundación Patronato Montañés de Enseñanza", "country" => "ΙΣΠΑΝΙΑ"]
            ],
            "website" => "www.cstour.projectlibrary.eu",
            "authority" => "Ίδρυμα Κρατικών Υποτροφιών – ΙΚΥ",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το πρόγραμμα CS.Tour στοχεύει στην ανάπτυξη ενός εκπαιδευτικού προγράμματος προσαρμοσμένο στις ανάγκες όσων εργάζονται ή ενδιαφέρονται να εργαστούν στον τομέα του τουρισμού και της φιλοξενίας. Μέσα από τις δραστηριότητες του προγράμματος οι συμμετέχοντες θα αναπτύξουν τις κατάλληλες διαπροσωπικές ικανότητες και την απαραίτητη πολιτιστική γνώση ώστε να αναγνωρίζουν τις πολιτισμικές διαφορές στις προσωπικές αξίες και τη συμπεριφορά και να διαχειρίζονται τη πολιτισμική διαφορετικότητα.\nΑναφορικά με την Πολιτισμική Γνώση & τις Κοινωνικές Ικανότητες στον τομέα του τουρισμού και της Φιλοξενίας, η εταιρική σύμπραξη του CS.Tour θα αναπτύξει τα ακόλουθα:\n\nΑνάλυση των Εκπαιδευτικών Αναγκών για τον εντοπισμό των φραγμών και των απαιτήσεων του τομέα του Τουρισμού και της Φιλοξενίας.\nΈνα Πρόγραμμα Σπουδών  που θα περιλαμβάνει:\nΜεθοδολογικό Οδηγό και Εργαλειοθήκη για τους Εκπαιδευτές\nΕκπαιδευτικό Υλικό\nΗλεκτρονική πλατφόρμα με εκπαιδευτικό υλικό και πηγές\nΠιστοποιητικό επί της Πολιτιστικής Γνώσης & των Κοινωνικών Ικανοτήτων στον Τουρισμό στο επίπεδο προσόντων 4-5 με βάση το Ευρωπαϊκό Πλαίσιο Επαγγελματικών Προσόντων.",
            "image" => "eac6f-cslogo.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "ONSCENE – Ανάπτυξη Δεξιοτήτων για τις Επιχειρήσεις και τα Δίκτυα του Δημιουργικού τομέα στην Ευρώπη",
            "startsFrom" => "01-11-2012",
            "endsAt" => "31-01-2015",
            "partners" => [
                ["name" => "COLLAGE ARTS", "country" => "Αγγλία"],
                ["name" => "Universita’ Delgi Studi di Perugia", "country" => "Ιταλία"],
                ["name" => "Associazione Culturale MULAB", "country" => "Ιταλία"],
                ["name" => "Scenografia International", "country" => "Ιταλία"],
                ["name" => "Enfap Uil Toscana", "country" => "Ιταλία"],
                ["name" => "Euromedia Production Services", "country" => "Ισπανία"]
            ],
            "website" => "www.onscene.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "“Σκοπός του προγράμματος ONSCENE ήταν η εκτίμηση και βελτίωση του εκπαιδευτικού και πολιτιστικού δυναμικού του τομέα της σκηνογραφίας και της θεατρικής τέχνης και η συμβολή στην ενίσχυση των ευκαιριών κατάρτισης και απασχόλησης σε έναν ιδιαίτερα πειθαρχημένο τομέα, εντός των οργανισμών του δημιουργικού τομέα. Τα κύρια αποτελέσματα του έργου ήταν: -Να συμβάλει στην ανάπτυξη της πολιτιστικής και εκπαιδευτικής συνείδησης σχετικά με τα επαγγέλματα της σκηνογραφίας και της θεατρικής τέχνης. -Βελτίωση των δεξιοτήτων υπό το φως του πλαισίου επαγγελματικών προσόντων (ΕΠΕΠ) και του Συστήματος Αναγνώρισης Ευρωπαϊκών Πιστώσεων (ECVET), – Πειραματισμός μεθόδων διδασκαλίας και μάθησης για την προώθηση προσεγγίσεων μεταξύ γενεών, αντιστοιχίζοντας τις βασικές γνώσεις με τις νέες τεχνολογίες. “\n",
            "image" => "b3aae-onscene.png",
            "eu_categories" => [7]
        ],
        [
            "title" => "ECLN – European Cultural Learning Network",
            "startsFrom" => "01-10-2012",
            "endsAt" => "30-09-2015",
            "partners" => [
                ["name" => "Rinova Ltd", "country" => "Αγγλία"],
                ["name" => "COLLAGE ARTS", "country" => "Αγγλία"],
                ["name" => "VIA University College", "country" => "Δανία"],
                ["name" => "Foundation ARTERIA", "country" => "Πολωνία"],
                ["name" => "CEPS – Centro de Estudios Políticos y Sociales", "country" => "Ισπανία"],
                ["name" => "Associazione Culturale Mulab", "country" => "Ιταλία"],
                ["name" => "New Arts Collège", "country" => "Ολλανδία"],
                ["name" => "MITRA", "country" => "Σλοβενία"],
                ["name" => "Association Prostor Plus", "country" => "Κροατία"],
                ["name" => "KAU Academy", "country" => "Εσθονία"],
                ["name" => "Hope for Children UNCRC Policy Centre", "country" => "Κύπρος"]
            ],
            "website" => "www.ecln-network.com",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "“Το Ευρωπαϊκό Δίκτυο Πολιτιστικού Μάθησης (ECLN) έχει συσταθεί για να μελετήσει τα θέματα που έχουν σχέση με τους ασκούμενους πολιτιστικής μάθησης. Με τον όρο «Πολιτιστική μάθηση» εννοούμε το σύνολο των καλλιτεχνικών και πολιτιστικών πρακτικών που παραδίδεται από τους καλλιτέχνες και ανθρώπους του δημιουργικού τομέα τόσο εντός όσο και μεταξύ άτυπων, μη-επίσημων και επίσημων καταστάσεων. Το ECLN διερεύνησε και δοκίμασε νέους τρόπους υποστήριξης των επαγγελματιών της Ευρωπαϊκής Πολιτιστικής Μάθησης και των οργανισμών τους, ενισχύοντας το προφίλ και την συνδεσιμότητα του τομέα, υποστηρίζοντας την επαγγελματική εκπαίδευση και τις εκπαιδευτικές ανάγκες. Το έργο δημιούργησε ένα Πολυμερές Δίκτυο Επαγγελματικής Εκπαίδευσης και Κατάρτισης για την πολιτιστική μάθηση το οποίο έχει αρχίσει να εξερευνά την συνεργασία στη δια βίου μάθηση, μέσα από τις τέχνες και τον πολιτισμό σε ευρωπαϊκό επίπεδο. “\n",
            "image" => "014d8-untitled.png",
            "eu_categories" => [7]
        ],
        [
            "title" => "EGNATIA VAE – Cross-Border Vertical Axes of Entrepreneurship in Support of Youth and Women",
            "startsFrom" => "01-02-2011",
            "endsAt" => "15-02-2013",
            "partners" => [
                ["name" => "Υπεργολάβος", "country" => "Ελλάδα"]
            ],
            "website" => "www.egnatia-vae.eu",
            "authority" => "Αποκεντρωμένη Διοίκηση Μακεδονίας – Θράκης",
            "program_managing_entity" => "European territorial cooperation Programe GREECE-BULGARIA 2007-2013",
            "description" => "Το EGNATIA VAE είναι ένα έργο Ευρωπαϊκής Εδαφικής Συνεργασίας διετούς διαρκείας για την ενίσχυση της ανταγωνιστικότητας καθώς και την εισαγωγή των εναλλακτικών μορφών επιχειρηματικού πνεύματος που συμβάλλουν στην αναδημιουργία των οικονομιών στους κάθετους οδικούς άξονες του αυτοκινητόδρομου ΕΓΝΑΤΑΤΙΑ. Απώτερος στόχος του είναι η ενδυνάμωση της προοπτικής για την ενίσχυση της ανταγωνιστικότητας και η εισαγωγή εναλλακτικών μορφών επιχειρηματικότητας, συμβάλλοντας έτσι στην ανασυγκρότηση των οικονομιών στη διασυνοριακή περιοχή. Το έργο αποσκοπεί στήριξη και προώθηση της επιχειρηματικότητας στις επιλέξιμες περιοχές που γειτνιάζουν με τους κάθετους οδικούς άξονες της Εγνατίας Οδού, μέσω της παροχής κατάλληλων και ουσιαστικών μέτρων διασφάλισης (μεθόδων, εργαλείων, βάση γνώσεων κλπ) και την ανάπτυξη νέων δομών στήριξης των επιχειρήσεων. Ο τελικός στόχος είναι η αναδιάρθρωση και ο εκσυγχρονισμός των τοπικών επιχειρηματικών κοινοτήτων, κυρίως μέσω της αναβάθμισης των δεξιοτήτων του ανθρώπινου δυναμικού με την ταυτόχρονη ενίσχυση των προϋποθέσεων για την απασχόληση και την αντιστροφή του μεταναστευτικού κύματος στη διασυνοριακή περιοχή.\n",
            "image" => "a002c-company_logo.png",
            "eu_categories" => [4]
        ],
        [
            "title" => "PR-ERF – Πρακτική Μεθοδολογία για την Απόκτηση Βασικών Ικανοτήτων του Ευρωπαϊκού Πλαισίου Αναφοράς μέσω της Συνεχιζόμενης Επαγγελματικής Εκπαίδευσης",
            "startsFrom" => "01-12-2013",
            "endsAt" => "30-11-2015",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Rinova Ltd", "country" => "Αγγλία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Revalento", "country" => "Ολλανδία"]
            ],
            "website" => "www.prerf.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "Το έργο ΠΡΟΣΩΠΙΚΟ ΕΡΓΑΣΙΑΣ και το νέο σύστημα Επαγγελματικών Δεξιοτήτων ανήκει σε μια ομάδα προγραμμάτων της Ευρωπαϊκής Επιτροπής, και έχει ως σκοπό την ανάπτυξη εργαλεία που θα συμβάλλουν στην ενίσχυση της διαδικασίας του επαγγελματικού προσανατολισμού και της κατάρτισης στις βασικές δεξιότητες που απαιτούνται για τη διασφάλιση της απασχόλησης.\n",
            "image" => "d2bd3-pr_erf_200.gif",
            "eu_categories" => [7]
        ],
        [
            "title" => "FATIMA – Πρόληψη και αποτροπή βίαιων πρακτικών που σχετίζονται με εγκλήματα τιμής μέσω της εκπαίδευσης και του διαλόγου μεταναστευτικών ΜΚΟ",
            "startsFrom" => "01-10-2014",
            "endsAt" => "30-09-2016",
            "partners" => [
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "The Angelou Centre", "country" => "Αγγλία"],
                ["name" => "Örebro University", "country" => "Σουηδία"],
                ["name" => "KERIGMA", "country" => "Innovation and Social Development"],
                ["name" => "Örebro Περιφερειακό Διοικητικό Συμβούλιο", "country" => "Σουηδία"]
            ],
            "website" => "https://fatima.projectlibrary.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Daphne",
            "description" => "Το έργο FATIMA στοχεύει στην καταπολέμηση της βίας που σχετίζεται με ζητήματα τιμής. Τα εγκλήματα τιμής περιλαμβάνουν αναγκαστικούς ή πρόωρους γάμους ή καταναγκαστικές σεξουαλικές σχέσεις, ακρωτηριασμούς γυναικείων γεννητικών οργάνων, φόνους γυναικών, νέων και παιδιών. Ο στόχος του προγράμματος θα επιτευχθεί μέσω δράσεων εκπαίδευσης και ευαισθητοποίησης σε ζητήματα βίαιων πρακτικών σχετικά με τις Ευρωπαϊκές Συμβάσεις για τα Ανθρώπινα Δικαιώματα, τη Σύμβαση του Συμβουλίου της Ευρώπης για την Πρόληψη και Καταπολέμηση της Βίας κατά των Γυναικών και της Ενδοοικογενειακής Βίας, τη Σύμβαση των Ηνωμένων Εθνών για τα Δικαιώματα του Παιδιού και τη Σύμβαση των Ηνωμένων Εθνών για την Εξάλειψη όλων των Μορφών Διακρίσεων Κατά των Γυναικών.\nΟ στόχος του έργου είναι να διευκολύνει τον κοινωνικό διάλογο μεταξύ των εθνοτικών μειονοτήτων που υιοθετούν πατριαρχικές συμπεριφορές μέσω της εκπαίδευσης στελεχών ΜΚΟ σε θέματα ανθρωπίνων δικαιωμάτων και δικαιωμάτων των γυναικών και των παιδιών. Ο διάλογος θα περιλαμβάνει την άμεση συμμετοχή των κοινοτήτων, συμπεριλαμβανομένης την ευαισθητοποίηση, εκπαίδευση και κατάρτιση ειδικών.\nΟ σκοπός του έργου είναι να εκπαιδεύσει ΜΚΟ που εργάζονται με εθνοτικές μειονότητες στη διεξαγωγή δραστηριοτήτων ευαισθητοποίησης, καθιερώνοντας κοινωνικό διάλογο σε ότι αφορά στα ζητήματα εγκλημάτων τιμής. Ο στόχος θα επιτευχθεί μέσα από τα ακόλουθα:\n\nΑνάπτυξη επαγγελματικού προφίλ των ΜΚΟ που εργάζονται με εθνοτικές μειονότητες και ιδιωτών που σχετίζονται με Εγκλήματα τιμής.\nΑνάπτυξη εκπαιδευτικού υλικού βάσει των Ευρωπαϊκών συμβάσεων και συμβάσεων των Ηνωμένων Εθνών για τα Ανθρώπινα Δικαιώματα και τα Δικαιώματα του Παιδιού.\nΗ ανάπτυξη κατευθυντήριων γραμμών για την διατομεακή συνεργασία και δικτύωση μεταξύ των ΜΚΟ που εργάζονται με εθνοτικές μειονότητες και άλλων ενδιαφερόμενων φορέων (αρχές, σχολεία, αστυνομία και κοινωνική πρόνοια / υγειονομική περίθαλψη), σε ζητήματα εγκλημάτων τιμής.\nΕκπαίδευση ΜΚΟ που εργάζονται με εθνοτικές μειονότητες σε θέματα χρηματοδότησης, διαχείρισης έργων και βιωσιμότητας όσον αφορά στα ζητήματα αποτροπής βίαιων πρακτικών που σχετίζονται με ζητήματα τιμής.\n\nΤέλος, το έργο αποσκοπεί στη δημιουργία ενός ευρωπαϊκού δικτύου των ΜΚΟ που εργάζονται με εθνοτικές μειονότητες για την ανταλλαγή ιδεών, γνώσεων, εμπειριών και πρακτικών, όσον αφορά τα εγκλήματα τιμής. Κύριος στόχος του έργου είναι να συμβάλει στην προσπάθεια ευαισθητοποίησης ώστε να αναδείξει τη σημασία της λήψης προληπτικών μέτρων κατά των βίαιων πρακτικών που σχετίζονται με ζητήματα τιμής.\nΗ κοινοπραξία FATIMA αποτελείται από οργανισμούς από τέσσερις ευρωπαϊκές χώρες (Ελλάδα, Σουηδία, Πορτογαλία, Ηνωμένο Βασίλειο), που έχουν επιλεγεί ανάλογα με τους στόχους του έργου. Όλοι οι εταίροι έχουν την εμπειρία σε θέματα έρευνας σχετικά με τη βία κατά των γυναικών και την ισότητα των φύλων και έχουν συνεργαστεί με ΜΚΟ που εργάζονται με εθνοτικές μειονότητες αναφορικά με ζητήματα κοινωνικής ένταξης, επεξεργασίας και εφαρμογής εκπαιδευτικών πακέτων για ΜΚΟ. Όλοι τους εργάζονται σε καθημερινή βάση σε συνεργασία με άλλους οργανισμούς (ιδιωτικές και δημόσιες) και Δίκτυα σε τοπικό, εθνικό και ευρωπαϊκό επίπεδο, κάτι που θα βοηθήσει στην αποτελεσματική υλοποίηση του έργου.",
            "image" => "23e09-fatima-logo.png",
            "eu_categories" => [1]
        ],
        [
            "title" => "CERF – Ανάπτυξη και πιστοποίηση των βασικών δεξιοτήτων από το Ευρωπαϊκό Πλαίσιο Αναφοράς ERF",
            "startsFrom" => "01-09-2012",
            "endsAt" => "22-12-2014",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "I – SKILLS", "country" => "Ελλάδα"],
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "Rinova Ltd", "country" => "Αγγλία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Επιμελητήριο Λάρισας", "country" => "Ελλάδα"]
            ],
            "website" => "www.cerf.gr",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Lifelong Learning Program, Leonardo da Vinci, Transfer of Innovation",
            "description" => "Το CERF είναι ένα διετές έργο Λεονάρντο Ντα Βίντσι (Transfer of Innovation), το οποίο στοχεύει στην ανάπτυξη καινοτόμων εκπαιδευτικών μεθοδολογιών και ενός αναλυτικού προγράμματος για πέντε Βασικές Ικανότητες του ΕΠΑ. Θα αναπτύξει επίσης ένα Πολυμέσο Εκπαιδευτικό Εργαλείο και ένα μοντέλο πιστοποίησης για την απόκτηση γνώσης, δεξιοτήτων και συμπεριφορών για τη βασική δεξιότητα «Πρωτοβουλία και Επιχειρηματικότητα». Η καινοτομία του έργου CERF είναι βασισμένη στο γεγονός ότι αναπτύσσει και εισάγει μια εκπαιδευτική μεθοδολογία και ένα πρότυπο πιστοποίησης, όχι μόνο για πιθανούς εκπαιδευόμενους αλλά επίσης και για τον επιχειρηματικό κόσμο, ούτως ώστε η έννοια του ΕΠΑ να χρησιμοποιηθεί με ένα ολοκληρωμένο τρόπο από όλους τους παράγοντες οι οποίοι εμπλέκονται στο όραμα μιας συνεκτικής και ανταγωνιστικής Ευρωπαϊκής οικονομίας σε μια κοινωνία βασισμένη στη γνώση.",
            "image" => "3fb2c-fc34f61d23b74be53ee07d469bd32064_generic.jpg",
            "eu_categories" => [7]
        ],
        [
            "title" => "Skills Swap – Ανταλλαγή Δεξιοτήτων μέσω Μάθησης Βασισμένης στην Εργασία στον Τομέα της Φιλοξενίας στην Ευρώπη",
            "startsFrom" => "2020-09-01",
            "endsAt" => "2023-08-31",
            "partners" => [
                ["name" => "RINOVA Limitedundefined", "country" => "Ηνωμένο Βασίλειο"],
                ["name" => "Folkuniversitetet (FU)undefined", "country" => "Σουηδία"],
                ["name" => "DIMITRA Education and Consulting", "country" => "Ελλάδα"],
                ["name" => "Camara Oficial de Comercio e Industria de Zaragoza (CAMARAZARAGOZA)undefined", "country" => "Ισπανία"],
                ["name" => "EditC Limitedundefined (EditC),", "country" => "(EditC)"],
                ["name" => "Bamen S. Coop. And. (Sextaplanta)", "country" => "Ισπανία"]
            ],
            "website" => "https://skills-swap.projectsgallery.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος του έργου Skills Swap είναι ο σχεδιασμός και η δοκιμή μιας νέας μάθησης βασισμένη στην εργασία στον τομέα της φιλοξενίας στην Ευρώπη. Το έργο μας ασχολείται με μια νέα προσέγγιση στην κατάρτιση βασισμένη στην εργασία – την «ανταλλαγή δεξιοτήτων». Με τον όρο «ανταλλαγή δεξιοτήτων», εννοούμε δομημένες ευκαιρίες που εστιάζουν στην μάθηση στο χώρο εργασίας, όπου οι εργαζόμενοι και οι μαθητευόμενοι αποσπώνται από τους τρέχοντες ρόλους τους με έναν εργοδότη για μια προσωρινή περίοδο (συνήθως μισή ημέρα έως 2 εβδομάδες) για να μάθουν δεξιότητες που παρέχονται από άλλο εργοδότη. Με τη δημιουργία ενός δικτύου εταιρειών που συνεργάζονται με αυτόν τον τρόπο, οι εργοδότες και το προσωπικό τους επωφελούνται από την «αποστολή» και τη «λήψη» για βραχυπρόθεσμη εκπαίδευση – πραγματοποιώντας νέες επαφές και οικοδόμηση εμπιστοσύνης, ενώ υποστηρίζονται από τους συντονιστές μας και τα συμφέροντα τους προστατεύονται από συμφωνίες. Η ιδέα μας είναι να υποστηρίξουμε τις εταιρείες ώστε να ανταποκρίνονται όσο το δυνατόν περισσότερο στις δικές τους ανάγκες, συνεργαζόμενες μεταξύ τους καθώς και με εκπαιδευτικούς οργανισμούς. Σε αυτό το μοντέλο, υποστηρίζουμε εταιρείες – μεγάλες και μικρές – να δικτυωθούν μεταξύ τους, για να χαρτογραφήσουν τις ανάγκες κατάρτισης και πρόσληψης προσωπικού και να συνεργαστούν μαζί μας.",
            "image" => "Skills_Swap_Logo_EN-1024x692.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "INSPIRE – Εμπνέοντας την επιχειρηματική σκέψη των μαθητών με στόχο την ανακάλυψη, τη δημιουργικότητα και την καινοτομία",
            "startsFrom" => "2020-09-01",
            "endsAt" => "2022-06-30",
            "partners" => [
                ["name" => "SGGW", "country" => "Warsaw University of Life Sciences"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτικός Οργανισμός", "country" => "Ελλάδα"],
                ["name" => "ACTA: Aristotle Certification Training and Assessment", "country" => "Ελλάδα"],
                ["name" => "TUCEP: Tiber Umbria Comett Education Programme", "country" => "Ιταλία"],
                ["name" => "FHJ", "country" => "FH JOANNEUM GESELLSCHAFT MBH"],
                ["name" => "BFU", "country" => "Burgas Free University"]
            ],
            "website" => "https://www.inspire-erasmusproject.eu/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο INSPIRE έχει ως στόχο την ανάπτυξη της επιχειρηματικής σκέψης με σκοπό την ανακάλυψη, τη δημιουργικότητα και την καινοτομία κυρίως για σπουδαστές Ανώτερης Εκπαίδευσης αλλά και σπουδαστές ΚΕΚ-ΙΕΚ. Το έργο θα εκπαιδεύσει 120 σπουδαστές Ανώτερης Εκπαίδευσης και ΚΕΚ-ΙΕΚ που θα είναι επιλέξιμοι για πιστοποίηση, σύμφωνα με το πρότυπο πιστοποίησης 17024, όπως και αναγνώρισης της παρεχόμενης εκπαίδευσης, μέσω απόκτησης μονάδων ECTS. Σκοπός του έργου αυτού είναι η παραγωγή ενός συνόλου προτύπων, εκπαιδευτικού υλικού, πόρων και ενός συστήματος πιστοποίησης βασισμένο στο Ευρωπαϊκό Πλαίσιο Επιχειρηματικών Ικανοτήτων (EntreComp) που θα συνεχίσουν να χρησιμοποιούνται από τους εταίρους μετά την ολοκλήρωση του έργου, καθώς και να είναι διαθέσιμα σε όλους τους εκπαιδευτικούς οργανισμούς που επιθυμούν να τα χρησιμοποιήσουν.",
            "image" => "inspire_logo-removebg-preview.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "ILDE - Χρήση ψηφιακών τεχνολογιών στην διδασκαλία γλωσσών",
            "startsFrom" => "27-09-2020",
            "endsAt" => "30-08-2022",
            "partners" => [
                ["name" => "Ufficio Scolastico Regionale Abruzzo", "country" => "Ιταλία"],
                ["name" => "Folkuniversitetet", "country" => "Σουηδία"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτική Συμβουλευτική", "country" => "Ελλάδα"],
                ["name" => "DIE BERATER", "country" => "Αυστρία"],
                ["name" => "Académie d’Orléans-Tours", "country" => "Γαλλία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο ILDE ερευνά την χρήση ψηφιακών εργαλείων στην εκπαίδευση και επαγγελματική κατάρτιση. Ειδικότερα, εστιάζει στη διδασκαλία της μητρικής γλώσσας και των ξένων γλωσσών στις διάφορες βαθμίδες της δευτεροβάθμιας εκπαίδευσης και της επαγγελματικής κατάρτισης.",
            "image" => "Transparent-e1632293874809-1024x325.png"
        ],
        [
            "title" => "LEARN – Προς μια ολιστική μεταμόρφωση των οργανισμών σε εκπαιδευτικούς χώρους εργασίας",
            "startsFrom" => "26-02-2020",
            "endsAt" => "27-01-2023",
            "partners" => [
                ["name" => "Κυπριακή Εταιρεία Πιστοποίησης", "country" => "Κύπρος"],
                ["name" => "Κυπριακό Εμπορικό και Βιομηχανικό Επιμελητήριο", "country" => "Κύπρος"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτική Συμβουλευτική", "country" => "Ελλάδα"],
                ["name" => "Θεσσαλικό Κέντρο Ανάπτυξης, Καινοτομίας και Επιχειρηματικότητας", "country" => "Ελλάδα"],
                ["name" => "Fundacion Equipo Humano", "country" => "Ισπανία"],
                ["name" => "FH Joanneum Gesellschaft MBH", "country" => "Αυστρία"],
                ["name" => "Campus 02 Fachhochschule Der Wirtschaft GHBH", "country" => "Αυστρία"],
                ["name" => "Servicios Y Navegacion De Valencia", "country" => "Ισπανία"],
                ["name" => "Eurocircle", "country" => "Γαλλία"],
                ["name" => "Chambre de Commerce et d’Industrie de la Région Provence-Alpes-Côte d’Azur", "country" => "Γαλλία"]
            ],
            "website" => "",
            "authority" => "M.M.C. Management Center Limited (Κύπρος)",
            "program_managing_entity" => "",
            "description" => "Το έργο LEARN αναπτύσσει μία προσέγγιση για την μετατροπή των οργανισμών σε εκπαιδευτικούς χώρους εργασίας μέσω σχεδιασμού και ανάπτυξης μίας πιστοποίησης κατά ISO μέσω της οποίας οι οργανισμοί αυτοί μπορούν να πιστοποιηθούν.",
            "image" => "vc_gitem_image.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "IIoTNet – Δίκτυο Παρόχων ΕΕΚ για το Βιομηχανικό Δίκτυο των Πραγμάτων",
            "startsFrom" => "2019-10-01",
            "endsAt" => "2021-09-30",
            "partners" => [
                ["name" => "Institute for Training of Personnel in International Organisations (ITPIO)", "country" => "Βουλγαρία"],
                ["name" => "Vocational Education Association (PBI)", "country" => "Λετονία"],
                ["name" => "Tiber Umbria Comett Education Programme (TUCEP)", "country" => "Ιταλία"],
                ["name" => "Halsingland Education Association", "country" => "Σουηδία"],
                ["name" => "Anonimi Ekpaideftiki Etairia (AKMI)", "country" => "Ελλάδα"],
                ["name" => "DIMITRA Education and Consulting", "country" => "Ελλάδα"],
                ["name" => "Institute for Postgraduate Studies (IPS)", "country" => "Βουλγαρία"],
                ["name" => "Research Innovation and Development Lab P.C. (ReadLab)", "country" => "ReadLab"],
                ["name" => "Center for Social Innovation (CSI)", "country" => "Κύπρος"]
            ],
            "website" => "https://www.iiot-network.eu/el/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο IIoTNet έχει σχεδιαστεί ώστε να συμβάλλει στην ενημέρωση και ανάπτυξη του εργατικού δυναμικού, μέσω της κατάρτισης και επανεκπαίδευσης εργαζομένων σε Ευρωπαϊκές επιχειρήσεις (συμπεριλαμβανομένων των πολύ μικρών και μικρομεσαίων επιχειρήσεων), επαγγελματιών και παρόχων Επαγγελματικής Εκπαίδευσης και Κατάρτισης (ΕΕΚ), σχετικά με τις δυνατότητες και εφαρμογές των τεχνολογιών ΙΙοΤ. Κατά την διάρκεια του έργου αναμένονται τα εξής αποτελέσματα: Ενίσχυση της συνεργασίας μεταξύ των εταίρων, πάροχων ΕΕΚ, του ΙΙοΤNet μέσω ενός κοινού στρατηγικού σχεδιασμού διεθνούς συνεργασίας και την ανάπτυξη προγραμμάτων που θα προωθούν την αμοιβαία γνώση και ανάπτυξη ικανοτήτων. Σχεδιασμός και ανάπτυξη ενός εξειδικευμένου μέσου κοινωνικής δικτύωσης για τη διαχείριση και λειτουργία του ΙΙοΤΝet. Έχει προβλεφθεί επίσης η δημιουργία μιας διαδικτυακής πλατφόρμας με σκοπό την ενίσχυση της συνεργασίας όχι μόνο μεταξύ των εταίρων, αλλά και παρόχων ΕΕΚ που δεν έχουν συμμετάσχει σε κάποια μορφή Ευρωπαϊκής συνεργασίας. Σύστημα οργανωσιακής ανάλυσης παρόχων ΕΕΚ και σχεδιασμού δράσεων με σκοπό τον προσδιορισμό ελλείψεων και τον εξορθoλογισμό των παρεχόμενων υπηρεσιών, συμπεριλαμβανομένου του επιπέδου συμμετοχής σε διεθνείς συνεργασίες. Αξιολόγηση της προόδου των καταρτιζόμενων στο ΙΙοΤ σε σχέση με την υπάρχουσα γνώση στον τομέα. Ο ορισμός των μονάδων των μαθησιακών αποτελεσμάτων και των περιγραφών τους που θα πραγματοποιηθεί σύμφωνα με τις αρχές και τις τεχνικές προδιαγραφές του ECVET και τα εργαλεία που αναπτύχθηκαν από το δίκτυο ECVET της ΕΕ. Δημιουργία ενός συστήματος πιστοποίησης για το Βιομηχανικό ΙοΤ. Εφαρμογή του μοντέλου Λογικού Πλαισίου που αναπτύχθηκε από την ΕΕ κατά τον σχεδιασμό των στόχων και δράσεων του ΙΙοΤΝet, που θα λαμβάνει υπόψη πιθανούς κινδύνους. Δημιουργία και διάχυση κατευθυντήριων γραμμών σχετικά με την κινητικότητα, τη δια βίου μάθηση και τις δυνατότητες Ευρωπαϊκής χρηματοδότησης στον τομέα του Βιομηχανικού ΙοΤ και παρουσίαση βέλτιστων πρακτικών και εμπειριών που αντλήθηκαν από την υλοποίηση του ΙιοΤΝet. Εκπαιδευτικές ημερίδες με θέμα την αποτελεσματική χρήση του IIoTNet θα διοργανωθούν σε κάθε χώρα όπου υλοποιείται το έργο για παρόχους ΕΕΚ που δεν έχουν συμμετάσχει σε Ευρωπαϊκά προγράμματα συνεργασίας, για την ενίσχυση της ικανότητας δικτύωσης και πρόσβασής τους σε χρηματοδοτικά μέσα της ΕΕ.",
            "image" => "internet-of-things-logo-5-01_small_2.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "MaYFAir – Κινητικότητα για όλους: η Δίκαιη Επιλογή",
            "startsFrom" => "2019-09-01",
            "endsAt" => "2022-04-30",
            "partners" => [
                ["name" => "ALPHABET FORMATION", "country" => "Βέλγιο"],
                ["name" => "ERIFO: ENTE DI RICERCA E FORMAZIONE", "country" => "Ιταλία"],
                ["name" => "UNITELMA: UNIVERSITA DEGLI STUDI DI ROMA UNITELMA SAPIENZA", "country" => "Ιταλία"],
                ["name" => "FYG CONSULTORES: INSTALOFI LEVANTE SL", "country" => "Ισπανία"],
                ["name" => "CENTRO SAN VIATOR", "country" => "Ισπανία"],
                ["name" => "ΔΗΜΗΤΡΑ Εκπαιδευτικός Οργανισμός", "country" => "Ελλάδα"],
                ["name" => "CESFOR: CENTRO STUDI FORMAZIONE ORIENTAMENTO", "country" => "Ιταλία"],
                ["name" => "IFAPME: CENTRE DE FORMATION PERMANENTE DESCLASSES MOYENNES ET DES PME DE LIEGE", "country" => "HUY"],
                ["name" => "ΣΕΒΙΤΑΝΙΔΕΙΟΣ ΔΗΜΟΣΙΑ ΣΧΟΛΗ ΤΕΧΝΩΝ & ΕΠΑΓΓΕΛΜΑΤΩΝ", "country" => "Ελλάδα"]
            ],
            "website" => "https://mayfair.projectlibrary.eu/el/",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το έργο MaYFAir σχεδιάζει, αναπτύσσει και δοκιμάζει ένα μεθοδολογικό εργαλείο και μια πλατφόρμα MOOC για τους φορείς προώθησης της κινητικότητας, προκειμένου να προωθήσει την κεφαλαιοποίηση των μαθησιακών αποτελεσμάτων που επιτυγχάνονται κατά τη διάρκεια μιας κινητικότητας με σκοπό να επιτραπεί η πιστοποίηση των ικανοτήτων στα εθνικά συστήματα. Στο έργο συμμετέχουν 9 οργανισμοί από 4 χώρες: 1 πάροχο υπηρεσιών ΕΕΚ που συμμετέχει στο εθνικό σύστημα πιστοποίησης και έναν κάτοχο χάρτη κινητικότητας υπηρεσιών ΕΕΚ ανά χώρα. Επιπλέον, το έργο περιλαμβάνει τη συμμετοχή του UNITELMA, ενός ιταλικού διαδικτυακού πανεπιστημίου, το οποίο θα εγγυηθεί την επιστημονική αξία των αποτελεσμάτων του έργου και θα επιτρέψει την έκδοση πιστοποίησης με νομική ισχύ σε ευρωπαϊκό επίπεδο στους συμμετέχοντες σε MOOC. Το έργο θα βασιστεί σε μια συνεργατική συμμετοχική προσέγγιση που έχει ως στόχο να αξιοποιήσει στο έπακρο τη συμμετοχή των παρόχων ΕΕΚ και των ιδιοκτητών Χάρτη κινητικότητας ΕΕΚ. Καθ’ όλη τη διάρκεια και τις φάσεις του έργου, όλοι οι οργανισμοί-εταίροι θα συνεργαστούν στενά για τη δημιουργία καινοτόμων μεθοδολογιών και ενός συνόλου εργαλείων για την υποστήριξη της επαγγελματικής ανάπτυξης του προσωπικού που εμπλέκεται σε προγράμματα μάθησης μέσω της εργασίας για την κινητικότητα. Οι οργανισμοί που συμμετέχουν στο έργο θα συνεργαστούν επίσης με έναν εξωτερικό εμπειρογνώμονα για την ανάπτυξη εργαλείων αξιολόγησης της ποιότητας, τα οποία θα επιτρέψουν την πλήρη αναγνώριση των αποτελεσμάτων της κινητικότητας και τη σύνδεση των μαθησιακών αποτελεσμάτων με τα υπάρχοντα εθνικά συστήματα πιστοποίησης. Το έργο έχει σχεδιαστεί και θα επιτύχει τη διασύνδεση των οργανισμών και τη βελτίωση της συνεργασίας τους, με στόχο τη συνεχιζόμενη υποστήριξη των συμμετεχόντων, προκειμένου να ενισχυθεί η συμμετοχή και να ενθαρρυνθεί η συνεχής μάθηση και η κινητικότητα.",
            "image" => "LOGO-3-1024x925.png",
            "eu_categories" => [3]
        ],
        [
            "title" => "e – STEP – Αναβάθμιση και κινητοποίηση νέων με χαμηλή ειδίκευση, μέσω βασικών ικανοτήτων για την απελευθέρωση των δυνατοτήτων απασχόλησης και κοινωνικοποίησης τους.",
            "startsFrom" => "01-09-2019",
            "endsAt" => "28-02-2022",
            "partners" => [
                ["name" => "CRIJ Occitanie: Centre Régional Information Jeunesse Occitanie Pyrénées Méditerranéeundefined France", "country" => "France"],
                ["name" => "DEX: DESARROLLO DE ESTRATEGIAS EXTERIORES SAundefined Spain", "country" => "Spain"],
                ["name" => "FU", "country" => "Σουηδία"],
                ["name" => "Rinova Ltd:"],
                ["name" => "DIMITRA: DIMITRA EDUCATION & CONSULTINGundefined Greece", "country" => "Greece"],
                ["name" => "SOC: SERVICIO DE EMPLEO DE CATALUNYAundefined Spain", "country" => "Spain"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Tο Ευρωπαϊκό πρόγραμμα E-STEP στοχεύει στην αναβάθμιση και υποστήριξη νεαρών ενηλίκων από μειονεκτούντα περιβάλλοντα και με λιγότερες ευκαιρίες στην απόκτηση βασικών ικανοτήτων για την επαγγελματική και προσωπική τους ζωή.\nΤο πρόγραμμα E-STEP προτείνει το σχεδιασμό και τη δοκιμή ενός προγράμματος διδασκαλίας και καθοδήγησης σχετικά με τις βασικές ικανότητες για τους χαμηλής ειδίκευσης και ευάλωτους νέους ενήλικες, μέσω της χρήσης ψηφιακών εργαλείων και μάθησης. Οι κύριες ικανότητες στις οποίες θα εστιάσει το έργο θα περιλαμβάνουν κυρίως ψηφιακές, επικοινωνιακές και κοινωνικές δεξιότητες, καθώς και μεταγνωστική ικανότητα, επιχειρηματικότητα και πολιτιστική ευαισθητοποίηση και έκφραση. Η ιδιαιτερότητα του έργου έγκειται στο ότι το εκπαιδευτικό περιεχόμενο θα επιλεγεί ειδικά με βάση τις ανάγκες των τελικών δικαιούχων και τις εκπαιδευτικές τους ελλείψεις.\n",
            "image" => "e-step-logo.png"
        ],
        [
            "title" => "Μαθαίνοντας να Δημιουργώ – Προώθηση της Μάθησης με Βάση την Εργασία στις Δημιουργικές και Πολιτισμικές Βιομηχανίες της Ευρώπης – L2C",
            "startsFrom" => "31-12-2018",
            "endsAt" => "31-08-2019",
            "partners" => [
                ["name" => "Rinova Ltd ", "country" => "Αγγλία"],
                ["name" => "Foundation ARTERIA ", "country" => "Πολωνία"],
                ["name" => "MATERAHUB", "country" => "Ιταλία"],
                ["name" => "Innogate to Europe", "country" => "Ισπανία"],
                ["name" => "Regional Development Agency Senec – Pezinok", "country" => "Slovakia"]
            ],
            "website" => "https://www.learn2create.eu/",
            "authority" => "Διαχειριστική Αρχή Πολωνία",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος του έργου Learn to Create – Μαθαίνοντας να Δημιουργώ, είναι να προωθήσει τη Μάθηση με Βάση την Εργασία στις Δημιουργικές και Πολιτισμικές Βιομηχανίες της Ευρώπης.\nΟι ειδικοί στόχοι του L2C είναι να:\n\nΑναπτύξει ένα νέο και ειδικά προσαρμοσμένο μοντέλο για την αποδοτική Μάθηση με Βάση την Εργασία στις Δημιουργικές και Πολιτισμικές Βιομηχανίες\nΝα εκπαιδεύσει τους εκπαιδευτές και δασκάλους Επαγγελματικής Εκπαίδευσης και Κατάρτισης (ΕΕΚ) σχετικά με το πως να προετοιμάζουν αποτελεσματικά για Εκπαίδευση στην Εργασία στις Δημιουργικές και Πολιτισμικές Βιομηχανίες, πως να τους παρέχουν την κατάλληλη υποστήριξη και πώς να συνδέονται με βιώσιμο τρόπο με τους εργοδότες των Δημιουργικών Πολιτισμικών Βιομηχανιών\nΝα δοκιμάσει το πρόγραμμα μικτής εκπαίδευσης για τους δασκάλους και τους εκπαιδευτές της ΕΕΚ στις χώρες που συμμετέχουν στο πιλοτικό πρόγραμμα προκειμένου να προωθήσουν ενεργά και να εξασφαλίσουν την αναπαραγωγή του σε άλλες ευρωπαϊκές χώρες και εκτός της συγκεκριμένης εταιρικής σύμπραξης\nΝα επικυρώνει την εκπαιδευτική πρόοδο που σημειώνουν οι εκπαιδευτικοί και δάσκαλοι\nΝα παρέχει στους εργοδότες των Δημιουργικών και Πολιτισμικών Βιομηχανιών καθοδήγηση σχετικά με τον τρόπο δημιουργίας, δομής και υποστήριξης αποτελεσματικών και ωφέλιμων ευκαιριών Μάθησης με βάση την Εργασία στους εκπαιδευόμενους\nΝα δημιουργήσει συνδέσεις μεταξύ ομάδων που ανήκουν στις Δημιουργικές και Πολιτισμικές Βιομηχανίες, προκειμένου να δοκιμάσει ένα καινοτόμο πρόγραμμα καθοδήγησης που θα απευθύνεται στους εργοδότες των βιομηχανιών αυτών, σχετικά με τον τρόπο δημιουργίας και υποστήριξης της Μάθησης με Βάση την Εργασία, χρησιμοποιώντας σωστά τους περιορισμένους πόρους τους με τη βοήθεια ομάδων και διαχειριστών των ομάδων\n\n",
            "image" => "L2C.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "In2C – Ένταξη των υπηκόων τρίτων χωρών στον τομέα των κατασκευών",
            "startsFrom" => "01-12-2018",
            "endsAt" => "31-12-2021",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Δήμος Λαρισαίων", "country" => "Ελλάδα"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Τεχνικό Επιμελητήριο Ελλάδος Κεντρικής και Δυτικής Θεσσαλίας", "country" => "Ελλάδα"],
                ["name" => "FUNDACION LABORAL DE LA COSTRUCCION", "country" => "Ισπανία"],
                ["name" => "Ομοσπονδία Συνδέσμων Εργολάβων Οικοδομών Κύπρου", "country" => "Κύπρος"],
                ["name" => "SVERIGE STROJ AB", "country" => "Σουηδία"]
            ],
            "website" => "https://in2c.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Ευρωπαϊκό Ταμείο Ασύλου, Μετανάστευσης και Ένταξης",
            "description" => "Οι υπήκοοι τρίτων χωρών (ΥΤΧ) που επιθυμούν να εισέλθουν ως εργάτες στον κατασκευαστικό τομέα πρόκειται να υποστηριχθούν ώστε να ξεπεράσουν πολιτισμικές διαφορές και γλωσσικά εμπόδια. Θα εξοικειωθούν με τις τοπικές πολιτικές για την εργασία και τους κανονισμούς υγιεινής και ασφάλειας στην εργασία οι οποίοι εφαρμόζονται στις χώρες που τους φιλοξενούν, βελτιώνοντας έτσι τις πιθανότητες για απασχόληση τους στον κατασκευαστικό τομέα.\nΟι κατασκευαστικές εργασίες, ολοένα και πιο πολύ στελεχώνονται από υπηκόους τρίτων χωρών, οι οποίοι προσλαμβάνονται είτε για συγκεκριμένες εργασίες είτε/και για ανειδίκευτη εργασία από υπεργολάβους. Για πολλούς ΥΤΧ οι κατασκευαστικές εργασίες συνιστούν τη δίοδο εισόδου στην αγορά εργασίας. Εξαιτίας πολιτισμικών διαφορών, γλωσσικών εμποδίων και γνώσεων εθνικών πολιτικών αυτοί οι εργάτες έχουν μεγαλύτερες πιθανότητες να εκτεθούν σε εργασιακούς κινδύνους και σε αποκλεισμό από την αγορά εργασίας.\nΠοιοι είναι οι στόχοι του έργου In2C;\n\nΤο έργο In2C στοχεύει στην ενσωμάτωση των ΥΤΧ στον κατασκευαστικό τομέα. Φιλοδοξεί να παρέχει μια καινοτόμα δέσμη εργαλείων και υλικού, σημαντικών για την ενσωμάτωση των ΥΤΧ στον κατασκευαστικό τομέα, στοχεύοντας όχι μόνο στη βελτίωση των γλωσσικών δεξιοτήτων και την ενημέρωση σχετικά με εργασιακά θέματα, αλλά δικτυώνοντας ΥΤΧ και εργοδότες.\n\n",
            "image" => "In2C.jpg",
            "eu_categories" => [10]
        ],
        [
            "title" => "Ανάπτυξη της επιχειρηματικής νοοτροπίας με τη χρήση μίας ολιστικής προσέγγισης για δασκάλους και μαθητές. – EnterSchoolMind",
            "startsFrom" => "01-11-2018",
            "endsAt" => "31-10-2021",
            "partners" => [
                [
                    "name" => "Rinova Ltd ",
                    "country" => "Αγγλία"
                ],
                [
                    "name" => "M.M.C Management Center Limited",
                    "country" => "Κύπρος"
                ],
                [
                    "name" => "Κυπριακή Εταιρεία Πιστοποίησης",
                    "country" => "Κύπρος"
                ],
                [
                    "name" => "15billion",
                    "country" => "Μεγάλη Βρετανία"
                ],
                [
                    "name" => "GRUPPO4",
                    "country" => "Ιταλία"
                ],
                [
                    "name" => "4o Δημοτικό Σχολείο Τυρνάβου",
                    "country" => "Ελλάδα"
                ],
                [
                    "name" => "Δημοτικό Σχολείο Απόστολου Βαρνάβα",
                    "country" => "Κύπρος"
                ]
            ],
            "website" => "",
            "authority" => "Διαχειριστική Αρχή Κύπρος",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Στόχος του έργου είναι η ανάπτυξη της επιχειρηματικής νοοτροπίας των εκπαιδευτικών, λαμβάνοντας υπόψη τις βασικές ικανότητες που εντοπίστηκαν από την Ευρωπαϊκή Επιτροπή, και επικυρώνοντας εκείνες οι οποίες προσδιορίζονται ως οι πιο σημαντικές για τον καθορισμό της πρωτοβάθμιας εκπαίδευσης. Αναμένεται ότι στην περίπτωση των δημοτικών σχολείων θα επικεντρωθούμε περισσότερο στις γενικές ικανότητες. Η εκπαίδευση που θα λάβουν οι δάσκαλοι θα είναι διαπιστευμένη κατά ISO και μέσω αξιολόγησης θα πιστοποιηθούν και οι ίδιοι. Με άλλα λόγια, η συμμετοχή στο έργο σημαίνει ότι αναβαθμίσουν το δικό τους προφίλ με ένα διεθνώς αναγνωρισμένο πιστοποιητικό.\nΣτο 2ο επίπεδο, το πρόγραμμα αναπτύσσει εργαλεία για τους δασκάλους ώστε να καλλιεργούν την επιχειρηματική νοοτροπία των μαθητών τους. Αυτά τα εργαλεία περιλαμβάνουν:\n1. Ένα on-line καινοτόμο εργαλείο αξιολόγησης που πρέπει να χρησιμοποιείται πριν και μετά την υλοποίηση των καλλιεργητικών δραστηριοτήτων\n2. Μια σειρά μη παραδοσιακών δραστηριοτήτων που θα καλλιεργήσουν την επιχειρηματική νοοτροπία των μαθητών. Οι δραστηριότητες θα λαμβάνουν υπόψη την ηλικία των μαθητών, θα έχουν εμπειρικό χαρακτήρα και μερικές από αυτές θα σχεδιαστούν για να υλοποιηθούν ως δραστηριότητες στο διαδίκτυο.\nΣε ένα τρίτο επίπεδο οι γονείς συμμετέχουν σε αυτή την προσπάθεια μέσω εξωσχολικών δραστηριοτήτων που αναπτύσσονται επίσης από το πρόγραμμα.\n",
            "image" => "EnterSchoolMind.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Ενίσχυση των δεξιοτήτων απασχόλησης και εκπαίδευσης με σκοπό την ένταξη προσφύγων, μεταναστών/τριών και αιτούντων/ουσών άσυλο – SEESI",
            "startsFrom" => "01-11-2018",
            "endsAt" => "31-10-2020",
            "partners" => [
                [
                    "name" => "Rinova Ltd ",
                    "country" => "Αγγλία"
                ],
                [
                    "name" => "Folkuniversitetet Kursverksamheten Lunds Universitetet",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "ASHLEY HOUSING",
                    "country" => "Ηνωμένο Βασίλειο"
                ],
                [
                    "name" => "FISPE",
                    "country" => "Γαλλία"
                ],
                [
                    "name" => "Ballymun Job Centre Co-operative Society Limited",
                    "country" => "Ιρλανδία"
                ]
            ],
            "website" => "",
            "authority" => "Διαχειριστική Αρχή Ηνωμένο Βασίλειο",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος του Ευρωπαϊκού Έργου SEESI είναι να δημιουργήσει ένα κοινωνικοοικονομικό τοπίο που να προσφέρει ταχέως ολοκληρωμένες ευκαιρίες ένταξης μέσω της προώθησης της «ενδοκοινοτικής» υποστήριξης, σε αντίθεση με την «εξωκοινοτική» υποστήριξη, η οποία σήμερα επιβραδύνει την ένταξη και την είσοδο στην αγορά εργασίας των προσφύγων και των μεταναστών/τριών τουλάχιστον 9 μήνες ή μέχρι να μάθουν αρκετά από τη γλώσσα της χώρας υποδοχής τους για να εργαστούν, κάτι που για μερικούς/ες δεν θα μπορούσε ποτέ να γίνει. Το SEESI στοχεύει να φέρει καινοτόμες προσεγγίσεις στις διαδικασίες ένταξης στα ευρωπαϊκά κράτη μέσω της στρατηγικής προσέγγισης «δεξιότητες πριν την εκμάθηση της γλώσσας» (μεθοδολογία που θα εξασφαλίσει ότι οι πρόσφυγες και οι ανθρωπιστικοί/ές μετανάστες/τριες έχουν επίσης την ευκαιρία να αναπτύξουν τις δεξιότητές τους, τις γνώσεις και τις ευρύτερες ικανότητες τους από την πρώτη μέρα εισόδου στις χώρες υποδοχής).\n",
            "image" => "SEESI-Logo-1024x1024.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Ανάπτυξη Δεξιοτήτων και Πιστοποίηση για Συμβούλους Απασχόλησης – CQJB",
            "startsFrom" => "01-10-2018",
            "endsAt" => "30-09-2020",
            "partners" => [
                [
                    "name" => "Folkuniversitetet ",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "Rinova Ltd ",
                    "country" => "Αγγλία"
                ],
                [
                    "name" => "M.M.C Management Center Limited",
                    "country" => "Κύπρος"
                ],
                [
                    "name" => "Vinnumálastofnun",
                    "country" => "Ισλανδία"
                ],
                [
                    "name" => "GSUB – Gesellschaft für soziale Unternehmensberatung mbH",
                    "country" => "Γερμανία"
                ],
                [
                    "name" => "abif – analysis",
                    "country" => "consulting and interdisciplinary research"
                ],
                [
                    "name" => "ACTA- Τεχνοβλαστός Αριστοτελείου Πανεπιστημίου Θεσσαλονίκης",
                    "country" => "Ελλάδα"
                ],
                [
                    "name" => "Zaragosa Chamber of Commerce and Industry ",
                    "country" => "Ισπανία"
                ]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "ο έργο έχει ως στόχο να στηρίξει τη δημιουργία ενός νέου επαγγελματικού προφίλ (περιγράμματος) για την πιστοποίηση, την προώθηση της εργασίας και της κινητικότητας των νέων Ευρωπαίων Job Brokers. Οι ευρωπαϊκες δημόσιες υπηρεσίες απασχόλησης πρέπει να συμβαδίζουν με τις ολοένα και πιο γρήγορες αλλαγές στον κόσμο της εργασίας, δεδομένης της αποστολής τους, ώστε να φέρνουν σε επαφή τους νέους και τους αναζητούντες εργασία, παρέχοντας τους ευκαιρίες εργασίας, πρακτικής άσκησης και μαθητείας. Αυτό έχει γίνει ένα περίπλοκο καθήκον, όπου οι «δεξιότητες» έχουν κεντρικό ρόλο. Το επαγγελματικό προφίλ του Job Broker έχει ξεκάθαρες προτεραιότητες που πρέπει να εξυπηρετηθούν και αυτό τονίζει την ανάγκη να δοθεί επίσημη αναγνώριση μιας επαγγελματικής κατηγορίας η οποία γίνεται ολοένα και πιο επίκαιρη.\nΗ προετοιμασία των ατόμων για το ρόλο αυτό απαιτεί ευρύτερη γνώση πέρα από την παραδοσιακή συμβουλευτική. Το έργο θα αναπτύξει ως εκ τούτου ένα νέο πρόγραμμα σπουδών, επιπέδου 6 του Ευρωπαϊκού Πλαισίου Προσόντων (ΕΠΠ), και ένα σχήμα πιστοποίησης του επαγγελματικού προφίλ το οποίο θα είναι διαπιστευμένο κατά ISO 17024. Στοχεύοντας στους σημερινούς επαγγελματίες, το πρόγραμμα σπουδών θα αναπτυχθεί με βάση μια ειδικά σχεδιασμένη σειρά μαθησιακών αποτελεσμάτων, εκφρασμένα σε γνώσεις, δεξιότητες και ικανότητες, βασισμένων στην εργασία. Αυτή η ενεργεία θα συμπληρωθεί με την ανάπτυξη ενός νέου Ευρωπαϊκού Συνδέσμου για την πιστοποίηση των Job Brokers.\n",
            "image" => "CQJB.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "EMKIT2: Μια εργαλειοθήκη ενδυνάμωσης για εκπαιδευτές για την ανάπτυξη της κοινωνικής και πολιτιστικής ικανότητας και του αλφαβητισμού στα μέσα επικοινωνίας για τις μετανάστριες γυναίκες χαμηλής ειδίκευσης",
            "startsFrom" => "01-09-2018",
            "endsAt" => "31-08-2021",
            "partners" => [
                [
                    "name" => "DIMITRA: DIMITRA EDUCATION & CONSULTINGundefined Ελλάδα",
                    "country" => "Ελλάδα"
                ],
                [
                    "name" => "FOLKUNIVERSITETETundefined Σουηδία",
                    "country" => "Σουηδία"
                ],
                [
                    "name" => "EDITCundefined Κύπρος",
                    "country" => "Κύπρος"
                ],
                [
                    "name" => "RINOVA Ltdundefined Ηνωμένο Βασίλειο",
                    "country" => "Ηνωμένο Βασίλειο"
                ],
                [
                    "name" => "REVALENTOundefined Ολλανδία",
                    "country" => "Ολλανδία "
                ]
            ],
            "website" => "http://emkit2.projectsgallery.eu",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Το EMIKT2 στοχεύει:\n1. Στην ανάπτυξη τριών πλαισίων προσόντων για την Κοινωνική, Πολιτική, και Πολιτιστική\nευαισθητοποίηση και προώθηση της γνώσης των Μέσων Ενημέρωσης (ΚΠΕ δεξιότητες), προσαρμοσμένη στην συγκεκριμένη ομάδα-στόχο και σε μέσα σε συγκεκριμένο πλαίσιο (βλ. στοιχεία καινοτομίας).\n2. Με βάση τα μαθησιακά αποτελέσματα που προέκυψαν από τα τρία πλαίσια δεξιοτήτων, αναπτύχθηκαν εμπλουτισμένες δραστηριότητες που θα εφαρμοστούν μέσα από 42νέα εργαστήρια για την ανάπτυξη των δεξιοτήτων της ομάδας στόχου.\n3. Στη δημιουργία 42 ψηφιακών εργαλείων για τους εκπαιδευτές, έτσι ώστε να αναπτυχθούν οι δεξιότητες «ΚΠΕ» και στη συνέχεια να ενσωματωθεί το υλικό αυτό στο υπάρχον ηλεκτρονικό εργαλείο EMKIT.\n4. Στην ανάπτυξη ενός εργαλείου ψηφιακής αξιολόγησης που θα είναι ενσωματωμένο στο υπάρχον εργαλείο EMKIT. Το EMKIT αναπτύχθηκε για γυναίκες που ζουν απομονωμένες και πρέπει να προχωρήσουν στο επόμενο βήμα έτσι ώστε να επιτύχουν την ομαλή κοινωνική τους ένταξη.\n",
            "image" => "EMKIT2_logo_Fin.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Γεφυρώνοντας το χάσμα: νέες μεθόδους καθοδήγησης για νέους επιχειρηματίες στο δημιουργικό τομέα στην Ευρώπη – BtG",
            "startsFrom" => "01-09-2018",
            "endsAt" => "31-08-2021",
            "partners" => [
                ["name" => "Rinova Ltd ", "country" => "Αγγλία"],
                ["name" => "Foundation ARTERIA ", "country" => "Πολωνία"],
                ["name" => "MATERAHUB", "country" => "Ιταλία"],
                ["name" => "RDA – REGIONALNA ROZVOJOVA AGENTURA SENEC-PEZINOK", "country" => "Σλοβακία"],
                ["name" => "Promalaga – Empresa Municipal De Iniciativas Y Actividades Empresariales De Malaga SA", "country" => "Ισπανία"]
            ],
            "website" => "https://www.bridgingthegapeurope.com/",
            "authority" => "Διαχειριστική Αρχή Ηνωμένο Βασίλειο",
            "program_managing_entity" => "ERASMUS+",
            "description" => "Ο γενικός στόχος τoυ έργου BtG είναι να ενισχύσει το επαγγελματικό προφίλ και την επαγγελματική εξέλιξη των μεντόρων στις δημιουργικές επιχειρήσεις μέσω της επαγγελματικής εκπαίδευσης και κατάρτισης στην Ευρώπη.\nΟι ειδικοί στόχοι του BtG είναι να:\n\nΣχεδιαστεί και επικυρωθεί συγκεκριμένο, καινοτόμο εκπαιδευτικό υλικό με χρήση συμβατικών και ψηφιακών μέσων σε μια διαδικτυακή πύλη ανοικτής εκπαίδευσης\nΑναπτυχθεί το επαγγελματικό προφίλ και πρότυπα επάρκειας για τους μέντορες στο δημιουργικό τομέα σύμφωνα με το Ευρωπαϊκό Πλαίσιο Προσόντων\nΑναπτύξουν και δοκιμαστεί πιλοτικά ένα πρόγραμμα σπουδών για τους μέντορες στο δημιουργικό τομέα\nΔημιουργηθεί μια μεθοδολογική και οργανωτική επιτομή της εμπειρίας των χρηστών για μέντορες στο δημιουργικό τομέα\nΔημιουργηθεί ένα δίκτυο των δημιουργικών επιχειρήσεων με σκοπό τη διακρατική επικοινωνία και καινοτομία\nΔημιουργηθεί ένας οδηγός καθοδήγησης για την επικύρωση των μεντόρων στο δημιουργικό τομέα και την ευρεία διάχυση της μαθησιακής εμπειρίας και των αποτελεσμάτων.\n",
            "image" => "BtG.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Καινοτόμος Κατάρτιση Εκπαιδευτικών για θέματα Κοινωνικής Επιχειρηματικότητας – EnSoEd",
            "startsFrom" => "01-09-2018",
            "endsAt" => "31-05-2021",
            "partners" => [
                ["name" => "Effebi Association Banking ", "country" => "Ιταλία"],
                ["name" => "I.T.T. “C.COLOMBO” – ISTITUTO TECNICO STATALE PER IL TURISMO “CRISTOFORO COLOMBO”", "country" => "Ιταλία"],
                ["name" => "CNGL – Gheorghe Lazar National College", "country" => "Ρουμανία"],
                ["name" => "INCUBATOR LEEUWARDEN", "country" => "Ολλανδία"],
                ["name" => "Dideas S.L.", "country" => "Ισπανία"],
                ["name" => "EMPHASYS Centre", "country" => "Κύπρος"],
                ["name" => "HMA – Hellenic Management Association", "country" => "Ελλάδα"],
                ["name" => "SciFY – SCIENCE FOR YOU", "country" => "Ελλάδα"]
            ],
            "website" => "",
            "authority" => "Διαχειριστική Αρχή Ιταλία",
            "program_managing_entity" => "ERASMUS+",
            "description" => "O κύριος στόχος του έργου EnSoEd την περαιτέρω ανάπτυξη του επαγγελματικού προφίλ των εκπαιδευτικών μέσω της εφαρμογής πρακτικών και καινοτόμων εκπαιδευτικών εργαλείων προκειμένου να προωθήσουν την εκπαίδευση σε θέματα κοινωνικής επιχειρηματικότητας σε γυμνάσια. Το πρόγραμμα κατάρτισης των εκπαιδευτικών θα αναπτυχθεί λαμβάνοντας σοβαρά υπόψη τις διαπιστωμένες ανάγκες για εκπαίδευση στην κοινωνική επιχειρηματικότητα και πιο συγκεκριμένα:\n\nΑνάγκη για πρακτική προσέγγιση που παρέχει καινοτόμες πηγές και συνεργατικές πρακτικές\nΈλλειψη μιας ανοικτής, χωρίς αποκλεισμούς προσέγγιση που θεωρεί ότι η εκπαίδευση στην κοινωνική επιχειρηματικότητα είναι αποτελεσματική μόνο εάν διδαχθεί και για την κοινότητα\nΑνάγκη προώθησης και ανάπτυξης ψηφιακού μαθησιακού περιβάλλοντος.\n",
            "image" => "EnSoEd.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Ανάπτυξη νεανικής επιχειρηματικότητας μέσω ευέλικτων διαδρομών μάθησης – YEAP!",
            "startsFrom" => "01-06-2018",
            "endsAt" => "31-05-2020",
            "partners" => [
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "Rinova Ltd ", "country" => "Αγγλία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Ομοσπονδία Ελληνικών Συνδέσμων Νέων Επιχειρηματιών", "country" => "Ελλάδα"]
            ],
            "website" => "tbc",
            "authority" => "Διαχειριστική Αρχή Σουηδία",
            "program_managing_entity" => "ERASMUS+",
            "description" => "O κύριος στόχος του έργου YEAP! είναι να αναπτύξει ευέλικτες διαδρομές μάθησης που θα προσφέρουν εξατομικευμένη εκπαίδευση σε νέους/ες και να υποστηρίξει την ένταξή τους στην αγορά εργασίας είτε ως αυτοαπασχολούμενοι/ες είτε ως επιχειρηματίες. Το σημαντικότερο παραδοτέο θα είναι η “Ευέλικτη Διαδρομή Μάθησης” που θα συνοδεύεται από ένα Μεθοδολογικό Οδηγό και μια Εργαλειοθήκη για εργαζόμενους με νέους, καθώς επίσης και έναν Οδηγό Αξιολόγησης Επιχειρηματικών Ιδεών. Τέλος, θα δημιουργηθεί μια βάση δεδομένων με ηλεκτρονικά εργαλεία και μεθόδους που σκοπό θα έχει την ενίσχυση των ικανοτήτων των νέων επιχειρηματιών προκειμένου να συστήσουν μια επιχείρηση.",
            "image" => "YEAP.jpg",
            "eu_categories" => [3]
        ],
        [
            "title" => "Δημιουργία Kοινωνικού και Ανθρώπινου Κεφαλαίου για την ενσωμάτωση υπηκόων τρίτων χωρών – MINGLE",
            "startsFrom" => "01-01-2018",
            "endsAt" => "31-12-2019",
            "partners" => [
                ["name" => "DOCUMENTA- Instituto Europeo de Estudios para la Formación y el Desarrollo", "country" => "Ισπανία"],
                ["name" => "Δήμος Λαρισαίων", "country" => "Ελλάδα"],
                ["name" => "Folkuniversitetet ", "country" => "Σουηδία"],
                ["name" => "M.M.C Management Center Limited", "country" => "Κύπρος"],
                ["name" => "Πολυδύναμο Δημοτικό Κέντρο Λευκωσίας", "country" => "Κύπρος"],
                ["name" => "SANTURBAN", "country" => "Ισπανία"],
                ["name" => "Integrationslyftet ", "country" => "Σουηδία"],
                ["name" => "GFBM gGmbH", "country" => "Γερμανία"],
                ["name" => "METROPOLISNET", "country" => "Γερμανία"]
            ],
            "website" => "",
            "authority" => "Ευρωπαϊκή Επιτροπή",
            "program_managing_entity" => "Ευρωπαϊκό Ταμείο Ασύλου, Μετανάστευσης και Ένταξης",
            "description" => "Στόχος: Να διευκολύνουν την ενεργό πολιτότητα, αναπτύσσοντας κοινωνικό (SC) και ανθρώπινο κεφάλαιο (HC), για τους υπηκόους τρίτων χωρών (TCNs) και ενθαρρύνουν την ένταξή τους μέσω παρεμβάσεων σε 500 ντόπιοι και 500 TCN στις 5 χώρες του έργου.\nΣτόχοι του έργου:\n1. Εργαστήρια για την εκμάθηση της Γλώσσας, για την ανάπτυξη των κοινωνικών δεξιοτήτων και των δεξιοτήτων που αφορούν στην ενεργό πολιτότητα, της διαπολιτισμικής ικανότητας, ανάπτυξη εγχειριδίων και εκπαιδευτικό υλικό\n2. Εμπειρίες γνωριμιών “MINGLING” και η ανάπτυξη ενός οδηγού διευκόλυνσης για την οργάνωση και την παροχή των εμπειριών\n3. Το EMKIT, το οποίο αποτελεί ένα εργαλείο αξιολόγησης της κοινωνικής θέσης των αξιολογούμενων καθώς και των δεξιοτήτων και των γνώσεων τους,   καθώς και από ένα σύνολο δραστηριοτήτων με οδηγίες για την εφαρμογή τους από τους καθοδηγητές στους καθοδηγούμενούς τους\n4. Συναντήσεις καθοδήγησης, συμπεριλαμβανομένου του εκπαιδευτικού υλικού για το εργαστήριο “Αποτελεσματική πολυπολιτισμική επικοινωνία & καθοδήγηση”\n5. Η πλατφόρμα How-to MINGLE (HtM) και ο βήμα προς βήμα οδηγός ο οποίος θα είναι διαθέσιμος σε μια διαδραστική online πλατφόρμα, με πληροφορίες σχετικά με τον τρόπο εφαρμογής των δραστηριοτήτων του έργου σε διαφορετικά πλαίσια. Όλοι οι πόροι (εκπαιδευτικό υλικό, βέλτιστες πρακτικές, οδηγός διευκόλυνσης κ.λπ.) θα είναι επίσης διαθέσιμοι για λήψη από την πλατφόρμα\n",
            "image" => "MINGLE-1.jpg",
            "eu_categories" => [10]
        ]
    ];
    public function run(): void
    {

        foreach (self::PROJECTS as $project) {
            EuPost::create([
                'title' => $project['title'],
                'starts_from' => Carbon::parse(trim($project['startsFrom']))->format('Y-m-d'),
                'ends_at' => Carbon::parse(trim($project['endsAt']))->format('Y-m-d'),
                'partners' => json_encode($project['partners']),
                'website' => $project['website'],
                'authority' => $project['authority'],
                'program_managing_entity' => $project['program_managing_entity'],
                'description' => $project['description'],
                'image' => $project['image'],
                'eu_categories' => $project['eu_categories'] ?? []
            ]);
        }
    }
}
