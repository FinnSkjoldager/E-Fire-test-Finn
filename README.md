# Løsning på Basic Screening Test.
    Udført af Finn Skjoldager 2022-12-09 kl 8-17

# Enable SSL
    composer config -g -- disable-tls false

# Create model
    php artisan make:migration create_person_table
    php artisan make:migration create_sko_table
    php artisan make:migration create_personsko_table
    php artisan migrate

    Person.php
    public function personsko(): BelongsToMany
    {
        return $this->belongsToMany(Sko::class, 'personsko', 'person_id', 'sko_id');
    }

# Create application
    php artisan make:model Person
    php artisan make:livewire personer
    php artisan make:model Sko
    php artisan make:livewire skos

# Create testdata
    php artisan make:factory PersonFactory
    php artisan make:seeder PersonSeeder
    php artisan make:factory UserFactory --model=Person
    php artisan db:seed

# Fetch data form database
    php artisan person:list

# Run application
    php artisan serve
    npm run dev

# Test deploy
    Da jeg hentede app fra https://github.com/FinnSkjoldager/E-Fire-test-Finn.git
    kunne den ikke køre fra prompten.
    Det er nødvendigt at køre app fra VSCode