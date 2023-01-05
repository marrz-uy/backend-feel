<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationSeeder extends Seeder
{
    public function run()
    {
        DB::table('translations')->insert([
            'tagName' => 'flag',
            'es'      => 'https://flagcdn.com/h40/uy.png',
            'en'      => 'https://flagcdn.com/h20/gb.png',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'splashScreenTextSup',
            'es'      => 'Arma tu tour',
            'en'      => 'Build your tour',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'splashScreenTextInf',
            'es'      => 'o descubri los del momento',
            'en'      => 'or discover the ones of the moment',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'wellcomeMessage',
            'es'      => 'Bienvenido/a',
            'en'      => 'Wellcome',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'wellcomeMessageUser',
            'es'      => 'invitado',
            'en'      => 'Guest',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'searchPlaceholder',
            'es'      => 'Buscá tu proximo destino',
            'en'      => 'Find your next destiny',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'lenguageFlagLabel',
            'es'      => 'Lenguaje',
            'en'      => 'Lenguage',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerLabel',
            'es'      => 'Registrarse',
            'en'      => 'Register',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'loginLabel',
            'es'      => 'Iniciar Sesion',
            'en'      => 'Login',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'changeLanguageLabel',
            'es'      => 'Cambiar Idioma',
            'en'      => 'Change Lenguage',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'predefinedToursLabel',
            'es'      => 'Tours Predefinidos',
            'en'      => 'Predefined Tours',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'buildMyTourLabel',
            'es'      => 'Armar Mi Tour',
            'en'      => 'Build My Tour',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'lodginLabel',
            'es'      => 'Alojamiento',
            'en'      => 'Lodgin',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'gastronomylabel',
            'es'      => 'Gastronomia',
            'en'      => 'Gastronomy',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'outingLabel',
            'es'      => 'Paseos',
            'en'      => 'Outing',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'transportLabel',
            'es'      => 'Transporte',
            'en'      => 'Transport',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'loginTitle',
            'es'      => 'Ingresar',
            'en'      => 'Login',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'needAnAccountText',
            'es'      => 'Necesitas una cuenta?',
            'en'      => 'Do you need an account?',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'closeButtonValue',
            'es'      => 'Cerrar',
            'en'      => 'Close',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerTitle',
            'es'      => 'Registrarse',
            'en'      => 'Register',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerEmailPlaceholder',
            'es'      => 'Correo electronico',
            'en'      => 'Email',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerPasswordConfirmationPlaceholder',
            'es'      => 'Confirmacion de Password',
            'en'      => 'Password Confirmation',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerNamePlaceholder',
            'es'      => 'Nombre',
            'en'      => 'Name',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerButtonValue',
            'es'      => 'Registro',
            'en'      => 'Register',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'backTologinText',
            'es'      => 'Volver al login',
            'en'      => 'Back to login',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'userNationalityText',
            'es'      => 'Nacionalidad',
            'en'      => 'Nationalty',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'userDateOfBirthText',
            'es'      => 'Fecha de nacimiento',
            'en'      => 'Date of Birth',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'myPreferencesTitle',
            'es'      => 'Mis Preferencias',
            'en'      => 'My Preferences',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'whithoutPreferencesText',
            'es'      => 'Sin preferencias registradas',
            'en'      => 'Whithout Preferences',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'changePreferencesButtonValue',
            'es'      => 'Cambiar Preferencias',
            'en'      => 'Change Preferences',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'enterPreferencesButtonValue',
            'es'      => 'Ingresar Preferencias',
            'en'      => 'Enter Preferences',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesTitleCreateProfile',
            'es'      => 'Crear Perfil',
            'en'      => 'Create Profile',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesTitleUpdateProfile',
            'es'      => 'Actualizar Perfil',
            'en'      => 'Update Profile',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesLodginLabel',
            'es'      => 'Alojamiento',
            'en'      => 'Lodgin',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesGastronomyLabel',
            'es'      => 'Gastronomia',
            'en'      => 'Gastronomy',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesShowsLabel',
            'es'      => 'Espectaculos',
            'en'      => 'Shows',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesOutdoorActivitiesLabel',
            'es'      => 'Paseos',
            'en'      => 'Outdoor Activities',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesNightActivitiesLabel',
            'es'      => 'Actividades Nocturnas',
            'en'      => 'Night Activities',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesTransportLabellabel',
            'es'      => 'Transporte',
            'en'      => 'Transport',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesChildrensActivitiesLabel',
            'es'      => 'Actividades Infantiles',
            'en'      => 'Childrens Activities',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesEssentialsServicesLabel',
            'es'      => 'Servicios Esenciales',
            'en'      => 'Essentials Services',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'prefrencesbtnSendValue',
            'es'      => 'Enviar',
            'en'      => 'Send',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'preferencesBackText',
            'es'      => 'Volver Atras',
            'en'      => 'Back',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'contactText',
            'es'      => 'Contactanos',
            'en'      => 'Contact Us.',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'showsLabel',
            'es'      => 'Espectaculos',
            'en'      => 'Shows',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'nightActivitiesLabel',
            'es'      => 'Actividades Nocturnas',
            'en'      => 'Evening activities',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'esentialsServicesLabel',
            'es'      => 'Servicios Esenciales',
            'en'      => 'Essential Services',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'childActivities',
            'es'      => 'Actividades Infantiles',
            'en'      => 'Children´s activities',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'category',
            'es'      => 'Categoria',
            'en'      => 'Category',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'registerPasswordPlaceholder',
            'es'      => 'Contraseña',
            'en'      => 'Password',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'userProfileLabel',
            'es'      => 'Perfil de Usuario',
            'en'      => 'User profile',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'logoutLabel',
            'es'      => 'Cerrar sesion',
            'en'      => 'Logout',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'emailPlaceholder',
            'es'      => 'Correo Electronico',
            'en'      => 'Email',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'passwordPlaceholder',
            'es'      => 'Contraseña',
            'en'      => 'Password',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'loginLabel',
            'es'      => 'Iniciar Sesion',
            'en'      => 'Login',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'emailUpdateTitle',
            'es'      => 'Actualizar email',
            'en'      => 'Email update',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'updateLabel',
            'es'      => 'Actualizar',
            'en'      => 'Update',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'backToUserProfile',
            'es'      => 'Volver a Perfil de Usuario',
            'en'      => 'Back to user profile',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'nameUpdateTitle',
            'es'      => 'Actualizar nombre',
            'en'      => 'Name update',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'passwordUpdateTitle',
            'es'      => 'Actualizar contraseña',
            'en'      => 'Password update',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'changePassword',
            'es'      => 'Cambiar Contraseña',
            'en'      => 'Change password',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'changename',
            'es'      => 'Cambiar Nombre',
            'en'      => 'Change name',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'changeEmail',
            'es'      => 'Cambiar email',
            'en'      => 'Change email',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'seeMoreCategories',
            'es'      => 'Ver mas Categorias',
            'en'      => 'See more categories',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'seeLessCategories',
            'es'      => 'Ver menos Categorias',
            'en'      => 'See less categories',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'noResults',
            'es'      => 'Sin resultados esta busqueda',
            'en'      => 'No results for this search',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'resultsFor',
            'es'      => 'resultados para',
            'en'      => 'results for',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'serachBtn',
            'es'      => 'Buscar',
            'en'      => 'Search',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'Slider1Title',
            'es'      => 'Descubre Uruguay',
            'en'      => 'Meet Uruguay',
        ]);
        DB::table('translations')->insert([
            'tagName' => 'Slider1Description',
            'es'      => 'Destino populares que eligieron nuestros usuarios',
            'en'      => 'Popular destinations chosen by our users',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'Slider2Title',
            'es'      => 'Recorre ',
            'en'      => 'Travel ',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'Slider2Description',
            'es'      => 'Recorre las principales atracciones de ',
            'en'      => 'Tour the main attractions of ',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'Slider3Title',
            'es'      => 'Conoce nuestros tours',
            'en'      => 'Know our tours',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'Slider3Description',
            'es'      => 'Conoce los principales tours que tenemos preparados para ti',
            'en'      => 'Get to know the main tours we have prepared for you',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'loginWhithGoole',
            'es'      => 'Ingresar con Google',
            'en'      => 'Login whith Google',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeCity',
            'es'      => 'Ciudad',
            'en'      => 'City',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeState',
            'es'      => 'Departamento',
            'en'      => 'State',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeAddress',
            'es'      => 'Dirección',
            'en'      => 'Address',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeDescription',
            'es'      => 'Descripción',
            'en'      => 'Description',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeOpeningTime',
            'es'      => 'Hora de apertura',
            'en'      => 'Opening time',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeClosingTime',
            'es'      => 'Hora de cierre',
            'en'      => 'Closing time',
        ]);

        DB::table('translations')->insert([
            'tagName' => 'placeMoreInformation',
            'es'      => 'Más información',
            'en'      => 'More information',
        ]);
        
        DB::table('translations')->insert([
            'tagName' => 'localizationNotSupported',
            'es'      => 'Localizacion no admitida por el usuario',
            'en'      => 'Localization not supported by user',
        ]);
        
        DB::table('translations')->insert([
            'tagName' => 'reloadApplication',
            'es'      => 'Recargue la aplicacion para volver a activarla',
            'en'      => 'Reload the application to reactivate it.',
        ]);
                
    }
}