<div class="wrapper">
    
    <x-navigation />

    <main>
        <section class="hero" id="hero">
            <div class="hero__container">
                <div class="hero__header">
                    <div class="hero__header__box">
                        <h1>Projects Eu Library</h1>
                        <p>Το Projects EU Library είναι μια πλατφόρμα του εκπαιδευτικου οργανισμού <strong>Δήμητρα</strong> για τη δημιουργία προτάσεων και την καταγραφή έργων. Αποτελεί ένα χρήσιμο εργαλείο για την οργάνωση και διαχείριση έργων σε επίπεδο οργανισμού.</p>
                        <a href="/admin/login" class="login-link"><span class="login-link__icon"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>Σύνδεση στον Πίνακα Ελέγχου</a>
                    </div>
                    <span class="hero__borderline"></span>
                </div>
                <div class="hero__image">
                    <div class="hero__image__box">
                        <img src="{{asset("/images/unsplash-free-europe-flag-img.jpg")}}" alt="image">
                    </div>
                </div>
            </div>
        </section>

        <div class="breaking-content" style="background-image: url('{{asset("/images/europeans.jpg")}}')"></div>
    
        <section class="about-us" id="about-us">
            <div class="about-us__content">
                <div class="about-us__description">
                    <h3>Η Συμβολή της “ΔΗΜΗΤΡΑ” σε Ευρωπαϊκά Ερευνητικά και Αναπτυξιακά Έργα</h3>
                    <p>Με στόχο τη συνεχή αναβάθμιση των προσφερόμενων υπηρεσιών, η εταιρεία “ΔΗΜΗΤΡΑ” Εκπαιδευτική Συμβουλευτική Α.Ε. διατηρεί ένα ισχυρό ευρωπαϊκό προφίλ συμμετέχοντας ενεργά στην υλοποίηση Προγραμμάτων και Κοινοτικών Πρωτοβουλιών, σε συνεργασία με αντίστοιχους φορείς με κοινούς προγραμματικούς στόχους ανά την Ευρώπη.</p>
                    <p>Από το 1990 μέχρι σήμερα έχει συμμετάσχει σε περισσότερα από εκατό (100) ερευνητικά και αναπτυξιακά έργα τα οποία χρηματοδοτούνται από ευρωπαϊκούς πόρους, με στόχο την ανάπτυξη και μεταφορά τεχνογνωσίας σε ένα εύρος θεμάτων όπως μεταξύ άλλων η Απασχόληση, η Δια βίου Μάθηση, η Επιχειρηματικότητα, η Καινοτομία, οι Νέες Τεχνολογίες, ο Πολιτισμός, ο Τουρισμός, η Ποιότητα, η Ενδυνάμωση των Ευάλωτων Κοινωνικά Ομάδων και τα Ανθρώπινα Δικαιώματα.</p>
                    <p>Ένας μεγάλος αριθμός Ευρωπαϊκών Προγραμμάτων των οποίων την ευθύνη του σχεδιασμού και της υλοποίησης φέρει ο οργανισμός μας έχουν διακριθεί και παρουσιάζονται σε εκδόσεις της Ευρωπαϊκής Ένωσης και πλατφόρμες Καλών Πρακτικών.</p>
                    <a class="styled-link" href="#projects">Δείτε τα Ευρωπαϊκά Έργα που συμμετέχει ο φορέας μας:</a>
                </div>
                <div class="about-us__image">
                    <img src="{{asset("/images/euprojects_el.png")}}" alt="image">
                </div>
            </div>
        </section>
    
        
        <section class="projects-wrapper" id="projects" wire:init="renderComplete" x-data="{ euPosts: @js($euPosts), euCategories: @js($euCategories) }">
            <div class="content">
                <div class="sidebar-container">
                    <ul class="sidebar">
                        <li class="filterOpt active" data-category="*">Όλα</li>
                        @foreach ($euCategories as $category)
                        <li wire:key="euCategory-{{ $category->id }}" data-category="{{$category->id}}" class="filterOpt">{{$category->name}}</li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="items-wrapper">
                    <div class="items-header">
                        <h2>Προγράμματα (Όλα)</h2>
                    </div>
                    <div class="items" >

                    @foreach ($euPosts as $post)
                        <a 
                        wire:key="euPost-{{ $post->id }}" 
                        class="card" 
                        href="{{ route('eu-single-post-page.show', $post->id) }}" 
                        target="_blank"
                        >
                            <div class="image">
                                <img src="{{asset("/images/$post->image") }}" alt="{{ $post->title }}" />
                            </div>
                            <div class="title">
                                <p>{{ $post->title }}</p>
                            </div>
                        </a>
                    @endforeach

                        
                    </div>
                </div>
                
            </div>
        </section>
    </main>

</div>


<script>
    const rootImagePath = "\{{ asset('/images') }}" + "/"
</script>
@vite('resources/js/guest/home/index.js')

