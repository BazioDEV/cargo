<?php

return [
    'plugin' => [
        'name' => 'Location',
        'description' => 'Location basierte Features, z.B. Länder and Staaten.',
    ],
    'permissions' => [
        'settings' => 'Location Verwaltung',
    ],
    'location' => [
        'label' => 'Location',
        'new' => 'Neue Location',
        'create_title' => 'Location erstellen',
        'update_title' => 'Location bearbeiten',
        'preview_title' => 'Location Vorschau',
    ],
    'locations' => [
        'menu_label' => 'Länder & Staaten',
        'menu_description' => 'Verwalte für Nutzer verfügbare Länder and Staaten.',
        'disabled_label' => 'Deaktiviert',
        'enabled_label' => 'Aktiv',
        'enabled_help' => 'Deaktivierte Locations sind im Frontend nicht sichtbar.',
        'enable_or_disable_title' => 'Aktiviere oder deaktiviere Locations',
        'enable_or_disable' => 'Aktiviere oder Deaktiviere',
        'selected_amount' => 'Locations augewählt: :amount',
        'enable_success' => 'Locations wurden erfolgreich aktiviert.',
        'disable_success' => 'Locations wurden erfolgreich deaktiviert.',
        'disable_confirm' => 'Bist du sicher?',
        'unpin_label' => 'Nicht gepinnt',
        'pinned_label' => 'Gepinnt',
        'pinned_help' => 'Gepinnte locations erscheinen zuerst in der Liste.',
        'pin_or_unpin_title' => 'Pinne der Entpinne Locations',
        'pin_or_unpin' => 'Pinne oder Entpinne',
        'pin_success' => 'Locations wurden erfolgreich gepinnt.',
        'unpin_success' => 'Locations wurden erfolgreich entpinnt.',
        'unpin_confirm' => 'Bist du sicher?',
        'list_title' => 'Locations Verwalten',
        'delete_confirm' => 'Willst du diese Location wirklich löschen?',
        'return_to_list' => 'Zur Location Übersicht zurückkehren',
        'default_country' => 'Standard Land',
        'default_country_comment' => 'Dieses Land wird verwendet, wenn ein User keine Location explizit auswählt.',
        'default_state' => 'Standard Staat',
        'default_state_comment' => 'Dieser Staat wird verwendet, wenn ein User keine Location explizit auswählt.',
    ],
    'settings' => [
        'menu_label' => 'Location Einstellungen',
        'menu_description' => 'Location Einstellungen verwalten.',
        'google_maps_key' => 'Google Maps API Key',
        'google_maps_key_comment' => 'Wenn du den Google Maps Service verwenden willst, gib hier den API Key ein.',
        'credentials_tab' => 'Zugangsdaten',
    ],
    'state' => [
        'label' => 'Staat',
        'name' => 'Name',
        'select' => '-- Staat auswählen --',
        'name_comment' => 'Anzeigename für diesen Staat.',
        'code' => 'Code',
        'code_comment' => 'Eindeutiger Code für diesen Staat.',
    ],
    'country' => [
        'label' => 'Land',
        'name' => 'Name',
        'select' => '-- Land auswählen --',
        'code' => 'Code',
        'code_comment' => 'Eindeutiger Code für dieses Land.',
        'enabled' => 'Aktiv',
        'pinned' => 'Gepinnt',
    ],
];
