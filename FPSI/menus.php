<?php
return [
  'menus' => [
      'id' => [
          'main' => [
              [
                  'label' => 'Beranda',
                  'href' => '/id',
              ],
              [
                  'label' => 'Tentang',
                  'href' => '/id/tentang-kami',
              ],
              [
                  'label' => 'Pendidikan',
                  'href' => '/id/pendidikan',
              ],
              [
                  'label' => 'Penelitian',
                  'href' => '/id/penelitian',
              ],
              [
                  'label' => 'Pengabdian',
                  'href' => '/id/pengabdian-masyarakat',
              ],
              [
                'label' => 'Arsip',
                'href' => '/id/arsip'
            ]
          ],
          'sub' => [
            [
                'label' => 'USU Official',
                'href' => 'https://usu.ac.id/id',
                'external' => true
            ],
            [
              'label' => 'Calon Mahasiswa',
              'href' => 'https://www.usu.ac.id/id/penerimaan',
              'external'=> true
            ],
            [
              'label' => 'Mahasiswa',
              'href' => 'https://www.usu.ac.id',
              'external'=> true
            ],
              [
                  'label' => 'Dosen & Staff',
                  'href' => '/id/dosen-staff'
              ],
            [
                'label' => 'Kunjungan Luar Negeri',
                'href' => 'https://www.usu.ac.id',
                'external'=> true
            ],
            [
                'label' => 'Media & Mitra',
                'href' => '/id/media-mitra'
            ],
            [
                'label' => 'Layanan',
                'href' => '/id/layanan'
            ],
            [
                'label' => 'Akreditasi & Prestasi',
                'href' => '/id/akreditasi-prestasi'
            ],
            [
                'label' => 'Majalah Digital',
                'href' => 'https://www.usu.ac.id',
                'external'=> true
            ]
            ]


      ],
      'en' => [
          'main' => [
              [
                  'label' => 'Home',
                  'href' => '/en',
              ],
              [
                  'label' => 'About Us',
                  'href' => '/en/about-us',
              ],
              [
                  'label' => 'Academic',
                  'href' => '/en/academic',
              ],
              [
                  'label' => 'Research',
                  'href' => '/en/research',
              ],
              [
                  'label' => 'Public Service',
                  'href' => '/en/public-service'
              ],
              [
                'label' => 'Archive',
                'href' => '/en/archive'
            ],
          ],
          'sub' => [
            [
                'label' => 'USU Official',
                'href' => 'https://usu.ac.id/id',
                'external' => true
            ],
            [
              'label' => 'Student Candidate',
              'href' => 'https://www.usu.ac.id/id/penerimaan',
              'external'=> true
            ],
            [
              'label' => 'Student',
              'href' => 'https://www.usu.ac.id',
              'external'=> true
            ],
            [
                'label' => 'Lecturer & Staff',
                'href' => '/en/lecturer-staff'
            ],
            [
              'label' => 'Foreign Visit',
              'href' => 'https://www.usu.ac.id',
              'external'=> true
          ],
          [
              'label' => 'Media and Partner',
              'href' => '/en/media-partner'
          ],
          [
              'label' => 'Service',
              'href' => '/en/service'
          ],
          [
              'label' => 'Accreditation and Achievement',
              'href' => '/en/accreditation-achievement'
          ],
          [
              'label' => 'Digital Magazine',
              'href' => 'https://www.usu.ac.id',
              'external'=> true
          ]
          ]
      ]
  ],
  'footer' => [
    'address' => 'Jl. Universitas No.4 Kampus USU Padang Bulan',
    'city' => 'Medan',
    'province' => [
        'id' => 'Sumatera Utara',
        'en' => 'North Sumatra'
    ],
    'country' => 'Indonesia',
    'zip' => '20155',
    'contact' => [
        'phone'=>['+0618213571'],
        'envelope' => ['fpsi@usu.ac.id']
    ],
    'social_medias' => [
        'facebook-f' => 'https://www.facebook.com/dozen.dozen.167?mibextid=ZbWKwL',
        'instagram' => 'https://instagram.com/official.fpsiusu?igshid=MDM4ZDc5MmU=',
        'youtube' => 'https://www.youtube.com/@officialfpsiusu5913'
    ],
    'columns' => [
        // Col 1
        [
            [
                'id' => [
                    'label' => 'Link Up',
                    'link' => '#'
                ],
                'en' => [
                    'label' => 'Link-Up',
                    'link' => '#'
                ]
            ],
            [
                'id' => [
                    'label' => 'FAQ',
                    'link' => 'faqs'
                ],
                'en' => [
                    'label' => 'FAQ',
                    'link' => 'faqs-en'
                ]
            ],
        ],
        // Col 2
        [
            [
                'id' => [
                    'label' => 'Aturan Penggunaan',
                    'link' => '#'
                ],
                'en' => [
                    'label' => 'Rules of Use',
                    'link' => '#'
                ]
            ],
            [
                'id' => [
                    'label' => 'Peta Situs',
                    'link' => 'peta-situs'
                ],
                'en' => [
                    'label' => 'Sitemap',
                    'link' => 'sitemap'
                ]
            ],
        ],
        // Col 3
        [
            [
                'id' => [
                    'label' => 'Hak Cipta Website',
                    'link' => '#'
                ],
                'en' => [
                    'label' => 'Website Copyright',
                    'link' => '#'
                ]
            ],
            [
                'id' => [
                    'label' => 'Lapor USU',
                    'link' => 'https://wbs.usu.ac.id',

                ],
                'en' => [
                    'label' => 'Wistleblower',
                    'link' => 'https://wbs.usu.ac.id',

                ]
            ]
        ]
    ]
  ],
];
?>
