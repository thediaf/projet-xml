<?php

$xmlstr = <<<XML
<?xml version='1.0'?>
    <!DOCTYPE examen SYSTEM "examen.dtd">
        <examen coursCode="M1GLSI">
            <titre>Examen programmation M1 GLSI</titre>
            <date mois="07" annee="2022" />
            <questions>
                <question>
                    <partie>
                        1.La question 1 ici
                    </partie>
                </question>
                <question>
                    <partie>
                        2.En vous référant aux notes de cours, répondez aux questions ci-après :
                        <partie>
                            2.1.La sous-partie 1
                        </partie>
                        <partie>
                            2.1.La sous-partie 2
                        </partie>
                    </partie>
                </question>
                <question>
                    <partie>
                        3.La question 3 ici
                    </partie>
                </question>
                <question>
                    <partie>
                        4.La question 4 ici
                    </partie>
                </question>
                <question>
                    <partie>
                        5.Tenir compte de la fiche en annexe :
                        <partie>
                            5.1.Identifier les erreurs :
                            <partie>
                                5.1.1.***
                            </partie>
                            <partie>
                                5.1.2.***
                            </partie>
                        </partie>
                    </partie>
                </question>
            </questions>
        </examen>
XML;
?>