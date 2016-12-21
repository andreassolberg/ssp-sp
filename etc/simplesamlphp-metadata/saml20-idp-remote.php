<?php
$metadata = [];

$metadata['https://idp.andreas.labs.uninett.no/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://idp.andreas.labs.uninett.no/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.andreas.labs.uninett.no/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.andreas.labs.uninett.no/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIEFTCCAv2gAwIBAgIJANFJfBJducptMA0GCSqGSIb3DQEBBQUAMGQxCzAJBgNVBAYTAk5PMRIwEAYDVQQIEwlUcm9uZGhlaW0xEjAQBgNVBAcTCVRyb25kaGVpbTEQMA4GA1UEChMHVU5JTkVUVDEbMBkGA1UEAxMSdGVzdGlkcC51bmluZXR0Lm5vMB4XDTE2MTEyMjEyMTkzMVoXDTI2MTEyMjEyMTkzMVowZDELMAkGA1UEBhMCTk8xEjAQBgNVBAgTCVRyb25kaGVpbTESMBAGA1UEBxMJVHJvbmRoZWltMRAwDgYDVQQKEwdVTklORVRUMRswGQYDVQQDExJ0ZXN0aWRwLnVuaW5ldHQubm8wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCjQzpoIPCrjL0Qf/MF2Ft6cYk2FghAXUIhj9FLh9MqTnqNJos+62afUA4ofmrSakZTX9JMkxWgqUnyIGDLw049maVizjfOgT1LII8bQ+uxLs5jfsCcHCK5FRtuscVe7G2KRPNwyIk28LQL4lEd075IPGEtB4tVIw491I4ABck/F+URNENXkkhxwLi0tXuh5QIjBJQBRXnLatpxbaBymUPNOlOCtEPCTBR/a4MrtefHF6W2FDvlpEQc6LLHKQz2Kw6KP57HlaNKE5352fxOGzwEsFyDwaVqDE1+OAgN3qaCqIpmUOaYIogBel93Df50mKS7AqRmneO8GL5vcsZujKMfAgMBAAGjgckwgcYwHQYDVR0OBBYEFAk/wnC7/5u4MKNJLoehUSv8AGXrMIGWBgNVHSMEgY4wgYuAFAk/wnC7/5u4MKNJLoehUSv8AGXroWikZjBkMQswCQYDVQQGEwJOTzESMBAGA1UECBMJVHJvbmRoZWltMRIwEAYDVQQHEwlUcm9uZGhlaW0xEDAOBgNVBAoTB1VOSU5FVFQxGzAZBgNVBAMTEnRlc3RpZHAudW5pbmV0dC5ub4IJANFJfBJducptMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAGjnK7umLlaJlK+eKniHN8IGrK7EVpdtuhpGf9DhmUOvMVlAz14asGe98QBG0uAjay1cJ1bCfqDR+JA9oY28o39vcJ+p18g45tA7tf64nBsUQ4Fb2LXq875aJTFCPMN2fcgkch7C4qgBFLVKN9ptrHmpj28UYwd7++du45SqmskNyhJzlnKGDlttYTs/sqS0w0nyX3yoEi0rL5qD3FCFqpMnoD6hY5uZlcn9dDxdbWCw2M5lsdOVTxXQEfJvIaXcNxUTUTsC8BnGNlMLqB3tUrmbm1zPyTxaB3mZujIxdGh3/y+7JPIzMpGbOn6kMEuEcuOZCeZSVcG5Px+aZl2QpQE=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'OrganizationName' =>
  array (
    'en' => 'Feide',
    'no' => 'Feide',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' => 'Feide - Norwegian educational institutions',
    'no' => 'Feide - Norske utdanningsinstitusjoner',
  ),
  'OrganizationURL' =>
  array (
    'en' => 'http://www.feide.no/introducing-feide',
    'no' => 'http://www.feide.no/',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'emailAddress' => 'moria-drift@uninett.no',
      'contactType' => 'technical',
      'givenName' => 'Feide',
      'surName' => 'Support',
    ),
  ),
);


$metadata['http://testidp.example.org/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'http://testidp.example.org/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://testidp.example.org/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' =>
  array (
    0 =>
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://testidp.example.org/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIEFTCCAv2gAwIBAgIJANFJfBJducptMA0GCSqGSIb3DQEBBQUAMGQxCzAJBgNVBAYTAk5PMRIwEAYDVQQIEwlUcm9uZGhlaW0xEjAQBgNVBAcTCVRyb25kaGVpbTEQMA4GA1UEChMHVU5JTkVUVDEbMBkGA1UEAxMSdGVzdGlkcC51bmluZXR0Lm5vMB4XDTE2MTEyMjEyMTkzMVoXDTI2MTEyMjEyMTkzMVowZDELMAkGA1UEBhMCTk8xEjAQBgNVBAgTCVRyb25kaGVpbTESMBAGA1UEBxMJVHJvbmRoZWltMRAwDgYDVQQKEwdVTklORVRUMRswGQYDVQQDExJ0ZXN0aWRwLnVuaW5ldHQubm8wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCjQzpoIPCrjL0Qf/MF2Ft6cYk2FghAXUIhj9FLh9MqTnqNJos+62afUA4ofmrSakZTX9JMkxWgqUnyIGDLw049maVizjfOgT1LII8bQ+uxLs5jfsCcHCK5FRtuscVe7G2KRPNwyIk28LQL4lEd075IPGEtB4tVIw491I4ABck/F+URNENXkkhxwLi0tXuh5QIjBJQBRXnLatpxbaBymUPNOlOCtEPCTBR/a4MrtefHF6W2FDvlpEQc6LLHKQz2Kw6KP57HlaNKE5352fxOGzwEsFyDwaVqDE1+OAgN3qaCqIpmUOaYIogBel93Df50mKS7AqRmneO8GL5vcsZujKMfAgMBAAGjgckwgcYwHQYDVR0OBBYEFAk/wnC7/5u4MKNJLoehUSv8AGXrMIGWBgNVHSMEgY4wgYuAFAk/wnC7/5u4MKNJLoehUSv8AGXroWikZjBkMQswCQYDVQQGEwJOTzESMBAGA1UECBMJVHJvbmRoZWltMRIwEAYDVQQHEwlUcm9uZGhlaW0xEDAOBgNVBAoTB1VOSU5FVFQxGzAZBgNVBAMTEnRlc3RpZHAudW5pbmV0dC5ub4IJANFJfBJducptMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAGjnK7umLlaJlK+eKniHN8IGrK7EVpdtuhpGf9DhmUOvMVlAz14asGe98QBG0uAjay1cJ1bCfqDR+JA9oY28o39vcJ+p18g45tA7tf64nBsUQ4Fb2LXq875aJTFCPMN2fcgkch7C4qgBFLVKN9ptrHmpj28UYwd7++du45SqmskNyhJzlnKGDlttYTs/sqS0w0nyX3yoEi0rL5qD3FCFqpMnoD6hY5uZlcn9dDxdbWCw2M5lsdOVTxXQEfJvIaXcNxUTUTsC8BnGNlMLqB3tUrmbm1zPyTxaB3mZujIxdGh3/y+7JPIzMpGbOn6kMEuEcuOZCeZSVcG5Px+aZl2QpQE=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'OrganizationName' =>
  array (
    'en' => 'Feide',
    'no' => 'Feide',
  ),
  'OrganizationDisplayName' =>
  array (
    'en' => 'Feide - LOCALHOST',
    'no' => 'Feide - LOCALHOST',
  ),
  'OrganizationURL' =>
  array (
    'en' => 'http://www.feide.no/introducing-feide',
    'no' => 'http://www.feide.no/',
  ),
  'contacts' =>
  array (
    0 =>
    array (
      'emailAddress' => 'moria-drift@uninett.no',
      'contactType' => 'technical',
      'givenName' => 'Feide',
      'surName' => 'Support',
    ),
  ),
);
