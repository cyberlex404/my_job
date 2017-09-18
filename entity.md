Entity Field types, Data types
(BaseFieldDefinition::create types)

+ __string__: A simple string.
+ __string_long__: A log string up To ~4GB
+ __boolean__: A boolean stored as an integer.
+ __integer__: An integer, with settings for min and max value validation (also provided for decimal and float)
+ __decimal__: A decimal with configurable precision and scale.
+ __float__: A float number
+ __language__: Contains a language code and the language as a computed property
+ __timestamp__: A Unix timestamp stored as an integer
+ __created__: A timestamp that uses the current time as default value.
+ __changed__: A timestamp that is automatically updated to the current time if the entity is saved.
+ __date__: A date stored as an ISO 8601 string.
+ __datetime__: A date stored as an ISO 8601 string.
+ __uri__: Contains a URI. The link module also provides a link field type that can include a link title and can point to an internal or external URI/route.
+ __uuid__: A UUID field that generates a new UUID as the default value.
+ __email__: An email, with corresponding validation and widgets and formatters.
+ __entity_reference__: An entity reference with a target_id and a computed entity field property. entity_reference.module provides widgets and formatters when enabled.
+ __map__: Can contain any number of arbitrary properties, stored as a serialized string
+ __text_with_summary__ : Text area field with summery

    $fields['telephone'] = BaseFieldDefinition::create('telephone')
          ->setLabel(t('Display Number'))
          ->setDescription((t('The phone number to display')))
          ->setDefaultValue('')
          ->setDisplayOptions('form', array(
            'type' => 'telephone_default',
            'weight' => 0,
          ))
          ->setDisplayConfigurable('form', TRUE);
