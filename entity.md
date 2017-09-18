Entity Field types, Data types
(BaseFieldDefinition::create types)

string: A simple string.
string_long: A log string up To ~4GB
boolean: A boolean stored as an integer.
integer: An integer, with settings for min and max value validation (also provided for decimal and float)
decimal: A decimal with configurable precision and scale.
float: A float number
language: Contains a language code and the language as a computed property
timestamp: A Unix timestamp stored as an integer
created: A timestamp that uses the current time as default value.
changed: A timestamp that is automatically updated to the current time if the entity is saved.
date: A date stored as an ISO 8601 string.
datetime: A date stored as an ISO 8601 string.
uri: Contains a URI. The link module also provides a link field type that can include a link title and can point to an internal or external URI/route.
uuid: A UUID field that generates a new UUID as the default value.
email: An email, with corresponding validation and widgets and formatters.
entity_reference: An entity reference with a target_id and a computed entity field property. entity_reference.module provides widgets and formatters when enabled.
map: Can contain any number of arbitrary properties, stored as a serialized string
text_with_summary : Text area field with summery
