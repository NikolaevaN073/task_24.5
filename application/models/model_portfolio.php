<?php

class Model_Portfolio extends Model 
{
    public function get_data() {
        return [
            [
                'img' => '../images/cleaning1.jpg',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Duis gravida, sem vel pretium varius, eros diam ullamcorper odio, 
                quis molestie augue diam ac enim. Nam pretium ipsum nisl, 
                at rhoncus lacus sodales quis. Sed aliquam cursus fringilla.'
            ],
            [
                'img' => '../images/cleaning2.jpg',
                'desc' => 'Maecenas ullamcorper ex eget libero vestibulum, ut suscipit justo 
                laoreet. Mauris bibendum diam vel cursus sodales. Orci varius 
                natoque penatibus et magnis dis parturient montes, nascetur 
                ridiculus mus.'
            ],
            [
                'img' => '../images/cleaning3.jpg',
                'desc' => 'Maecenas ullamcorper ex eget libero vestibulum, ut suscipit justo 
                laoreet. Mauris bibendum diam vel cursus sodales. Orci varius 
                natoque penatibus et magnis dis parturient montes, nascetur 
                ridiculus mus.'
            ],
        ];
    }
}
