<html lang="en-uk">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>
        <!-- <script type="text/javascript" src="/siteBackEnd/definitionEntry.js"></script> -->
        <script type="text/javascript" src="/blog/getEntries.js"></script>
        <title>Biology Dictionary</title>
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/nav.php"; ?>

        <div class="contentWrapper">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/sidebar.php"; ?>
            <div class="writtenWrapper">
                
                <article>
                    <h1>Biology Dictionary</h1>
                        <p>
                            Welcome to this library of definitions for biology; from the molecular to the macroscopic. This dictionary should serve only as a quick reference and offers short explicative definitions as refreshers or introductions to core concepts in biology. Please do not hesitate to signal any error or suggestion you may have, feel free to use any of the available contact forms on the site with the subject definition and the word you are referencing.
                        </p>
                        <p>
                            For the moment if you are arriving from a website search please simply use the command/control + f to quickly find and reference the desired definition. Hyperlinks are also activated between definitions and other pages on this website
                        </p>
                
                
                    <script>
                        // Sets id attribute to camelcased innerHTML
                            // window.addEventListener("load", function() {
                            //     let taggedStrings = document.querySelectorAll("strong");

                            //     for(let i = 0; i < taggedStrings.length; i++) {
                            //         let word = taggedStrings[i];
                            //         let wordContent = word.innerHTML.replace(/[ ]/gi, '');

                            //         wordContent = wordContent.substr(0, 1).toLowerCase() + wordContent.substr(1);

                            //         word.parentElement.setAttribute("id", "BDic_" + wordContent);
                            //     }
                            // });

                        // Spits out all of the a tags with href attribute onto the dom seperating them by "br"
                            // window.addEventListener("load", function() {
                            //     let allLinks = document.querySelectorAll("a");
                            //     for(let i = 0; i < allLinks.length; i++) {
                            //         document.write(allLinks[i].href + "<br>");
                            //     }
                            // });

                        // Spits out all a tags with id attribute separated by "br"
                            // window.addEventListener("load", function() {
                            //     let allLinks = document.querySelectorAll("a");

                            //     for(let i = 0; i < allLinks.length; i++) {
                            //         document.write(allLinks[i].id + "<br>");
                            //     };
                            // })
                    </script>

                    <div class="sectionDiv">

                        <h1 id="dictionaryDirectory">Dictionary Directory</h1>
                        
                        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/dicDirectory.php"; ?>
                        
                        <ol id="dictionaryList">
                            <h1 class="dicSection" id="theLetter_A">A</h1>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_abdomen"><strong>Abdomen</strong></a> - Region of the body furthest from the mouth. In insects, the third body region behind the head and thorax.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="origDereck">
                                    <a class="dicWord" data-category="ecology" id="BDic_absorbance"><strong>Absorbance</strong></a> - To take in, or ingest water and or dissolved minerals across a cell membrane. Different from <a href="#BDic_ingestion">ingestion</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_activator"><strong>Activator</strong></a> - A <a href="#BDic_protein">protein</a> that binds <a href="#BDic_dna">DNA</a> and <a href="#BDic_promoter">promotes</a> the <a href="#BDic_transcription">transcription</a> of nearby <a href="#BDic_dna">DNA</a> (often directionally, on one side of the binding site, but sometimes bidirectionally). An activator can do this by recruiting <a href="#BDic_rnaPolymerase">RNA polymerase (RNA-P)</a>, opening a cell's <a href="#BDic_chromatin">chromatin</a> allowing access to the <a href="#BDic_promoter">promoter</a> region by <a href="#BDic_rnaPolymerase">RNA-P</a> (in <a href="#BDic_eukaryota">eukaryota</a>). This blocks a <a href="#BDic_repressor">repressor</a> from binding.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_adaptation"><strong>Adaptation</strong></a> - Change in a organism resulting from natural selection; a structure which is the result of such selection.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_adventitiousRoots"><strong>Adventitious Roots</strong></a> - A root that grows from somewhere other than the primary root, for example, roots that arise from stems or leaves.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_aerobic"><strong>Aerobic</strong></a> - Pertaining to the presence of free oxygen. Aerobic organisms require oxygen for their life processes.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_affinity"><strong>Affinity</strong></a> - Another word for attraction. Affinity is often used in reference to the affinity or attraction between a <a href="#BDic_substrate">substrate</a> and an <a href="#BDic_enzyme">enzyme</a> for example.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_agar"><strong>Agar</strong></a> - Agar, not to be confused with <a href="#BDic_agarose">agarose</a> is a jelly like substance extracted from red algae known as <a href="#BDic_agarophytes">agarophytes</a> in the <a href="#BDic_rhodophyta">Rhodophyta</a> <a href="#BDic_phylum">phylum</a>. Agar is a mixture composed of about 30% <a href="#BDic_agaropectin">agaropectin</a> and 70% <a href="#BDic_agarose">agarose</a> (used in <a href="#BDic_electrophoresis">electrophoretic gels</a>). Agar is used as a solid medium for microbiology.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ahl"><strong>AHL</strong></a> - They are a class of homoserine lactones with an acyl group. These are small <a href="#BDic_molecule">molecules</a> that can <a href="#BDic_diffusion">diffuse</a> between cells. They typically act as a <a href="#BDic_quorumSensing">quorum sensing</a> and <a href="#BDic_signal">signaling molecule</a> as it can <a href="#BDic_diffusion">diffuse</a> throughout a <a href="#BDic_bacterialColony">bacterial population</a> such that the knowledge of the <a href="#BDic_concentration">concentration</a> of the AHL is shared between all <a href="#BDic_bacteria">bacteria</a>. The <a href="#BDic_bacteria">bacteria</a> can detect the AHL <a href="#BDic_concentration">concentration</a> by way of a <a href="#BDic_transcriptionFactor">transcription factor</a> that can bind and be modulated by the AHL molecule. For example, the <a href="#BDic_luxSystem">LuxI gene</a> produces an AHL that can then bind <a href="#BDic_luxSystem">LuxR</a>, relieving its <a href="#BDic_repressor">repressor</a> on the corresponding <a href="#BDic_promoter">promoter</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_agaropectin"><strong>Agaropectin</strong></a> - One of the two main components of <a href="#BDic_agar">agar</a>, composing about 30%, mainly composed of D-glucuronic acid and pyruvic acid.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_agarophytes"><strong>Agarophytes</strong></a> - A seeweed typically a red algae. It can be used in biological experiments and for use in the creation of cell cultures.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_agarose"><strong>Agarose</strong></a> - Agarose is a sugar or polysaccharide. It is a main component of <a href="#BDic_agar">agar</a>, which is used a solid medium for microbial cultures. Agarose is used alone for the separation of DNA fragments in <a href="#BDic_electrophoresis">electrophoretic gels</a> and <a href="#BDic_chromatography">chromatographic</a> protein purification.
                                    <figure>
                                        <img class="lazy" data-src="/dictionaries/documents/biology/agarose.svg">
                                        <figcaption>Molecular structure of the Agarose molecule.</figcaption>
                                    </figure>
                                    <p>
                                        The chemical composition of agarose is <span class="chemicalForm">C<sub>12</sub>H<sub>18</sub>O<sub>9</sub></span>, and its molecular weight is <span class="mathsNumbers">306.2659 g/mol</span>.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_alginate"><strong>Alginate</strong></a> - Component of the <a href="#BDic_cellWall">cell walls</a> of many rhodophytes and kelps. Alginates have an affinity for water, and so help to slow dessication when the algae are exposed to the air; they are commercially important in the production of paper, toothpaste, beer, and frozen foods.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_allostericRegulation"><strong>Allosteric Regulation</strong></a> - Allosteric regulation happens when a <a href="#BDic_conformation">conformational change</a> (the allosteric part) affects the function of a <a href="#BDic_protein">protein</a> or <a href="#BDic_enzyme">enzyme</a>. For example, a small <a href="#BDic_molecule">molecule</a> may bind a <a href="#BDic_transcriptionFactor">transcription factor</a> and cause a <a href="#BDic_conformation">conformational change</a> that removes the <a href="#BDic_transcriptionFactor">TF</a>'s ability to bind <a href="#BDic_dna">DNA</a>, rendering it inactive.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_alphaHelix"><strong>Alpha Helix</strong></a> - An alpha helix is an <a href="#BDic_aminoAcid">amino acid</a> sequence pattern that results in a <a href="#BDic_secondaryStructure">secondary structure</a> in the form of a right handed helix. This helix is created by the donation of a hydrogen bond from the backbone <span class="chemical">N-H</a> groups to the <span class="chemical">C=O</a> groups. These interactions happen on average every three to four <a href="#BDic_aminoAcid">amino acids</a> in a sequence, with about 13 atoms involved in one ring. See also <a href="#BDic_betaSheet">&beta;-sheet</a>.
                                    <figure>
                                        <img class="lazy" data-src="/dictionaries/documents/biology/humanGrowthHormone.png">
                                        <figcaption>Human growth hormon cartoon rendition, depicting various alpha helices.</figcaption>
                                    </figure>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_alphaVirus"><strong>Alphavirus</strong></a> - Small, spherical, <a href="#BDic_envelopedVirus">enveloped viruses</a> with a genome of a single <a href="#BDic_positiveRna">positive (sense) RNA</a> strand. Ahphaviruses have been engineered into self replicating <a href="#BDic_rna">RNA</a> and are commonly referred to as replicons.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_alternationOfGenerations"><strong>Alternation of Generations</strong></a> - Life cycle in which <a href="#BDic_haploid">haploid</a> and <a href="#BDic_diploid">diploid</a> generations alternate with each other.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_altricial"><strong>Altricial</strong></a> - Refers to <a href="#BDic_animal">animals</a> with young that are unable to move on their own after hatching or birth, and require extensive parental care.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_ambulacra"><strong>Ambulacra</strong></a> - The rows of feet found in echinoderms.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_aminoAcid"><strong>Amino Acid</strong></a> - Refers to a class or type of molecules which constitute proteins. These molecules are <a href="#BDic_polymerasation">polymerised</a> together to form a string of amino acids known as a <a href="#BDic_polypeptide">polypeptide</a>.
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="tableHeader" colspan="3">The "Natural" Amino Acids</th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <th>Single Letter Code</th>
                                                <th>Multiple Letter Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Alanine</th>
                                                <td>A</td>
                                                <td>[ALA]</td>
                                            </tr>
                                            <tr>
                                                <th>Arginine</th>
                                                <td>R</td>
                                                <td>[ARG]</td>
                                            </tr>
                                            <tr>
                                                <th>Asparagine</th>
                                                <td>N</td>
                                                <td>[ASN]</td>
                                            </tr>
                                            <tr>
                                                <th>Aspartic Acid</th>
                                                <td>D</td>
                                                <td>[ASP]</td>
                                            </tr>
                                            <tr>
                                                <th>Cysteine</th>
                                                <td>C</td>
                                                <td>[CYS]</td>
                                            </tr>
                                            <tr>
                                                <th>Glutamic Acid</th>
                                                <td>E</td>
                                                <td>[GLU]</td>
                                            </tr>
                                            <tr>
                                                <th>Glutamine</th>
                                                <td>Q</td>
                                                <td>[GLN]</td>
                                            </tr>
                                            <tr>
                                                <th>Glycine</th>
                                                <td>G</td>
                                                <td>[GLY]</td>
                                            </tr>
                                            <tr>
                                                <th>Histidine</th>
                                                <td>H</td>
                                                <td>[HIS]</td>
                                            </tr>
                                            <tr>
                                                <th>Isoleucine</th>
                                                <td>I</td>
                                                <td>[ILE]</td>
                                            </tr>
                                            <tr>
                                                <th>Leucine</th>
                                                <td>L</td>
                                                <td>[LEU]</td>
                                            </tr>
                                            <tr>
                                                <th>Lysine</th>
                                                <td>K</td>
                                                <td>[LYS]</td>
                                            </tr>
                                            <tr>
                                                <th>Methionine</th>
                                                <td>M</td>
                                                <td>[MET]</td>
                                            </tr>
                                            <tr>
                                                <th>Phenylalanine</th>
                                                <td>F</td>
                                                <td>[PHE]</td>
                                            </tr>
                                            <tr>
                                                <th>Proline</th>
                                                <td>P</td>
                                                <td>[PRO]</td>
                                            </tr>
                                            <tr>
                                                <th>Serine</th>
                                                <td>S</td>
                                                <td>[SER]</td>
                                            </tr>
                                            <tr>
                                                <th>Threonine</th>
                                                <td>T</td>
                                                <td>[THR]</td>
                                            </tr>
                                            <tr>
                                                <th>Tryptophan</th>
                                                <td>W</td>
                                                <td>[TRP]</td>
                                            </tr>
                                            <tr>
                                                <th>Tyrosine</th>
                                                <td>Y</td>
                                                <td>[TYR]</td>
                                            </tr>
                                            <tr>
                                                <th>Valine</th>
                                                <td>V</td>
                                                <td>[VAL]</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="origDereck">
                                    <a class="dicWord" data-category="zoology" id="BDic_amniote"><strong>Amniote</strong></a> - Any of a group of land-dwelling vertebrates that have an amnion during embryonic development, including reptiles, birds, and mammals. Most extant mammals give live birth, the "egg" is retained inside the body during gestation; in humans the equivalent is known as <thead></thead> amniotic sac.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_amnioticEgg"><strong>Amniotic Egg</strong></a> - An egg that can be laid on land due to the presence of a fluid-filled amniotic sac (amnion) that cushions and protects the developing embryo. 
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_amoeboid"><strong>Amoeboid</strong></a> - Having no definite shape to the cell, able to change shape.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_amphiesma"><strong>Amphiesma</strong></a> - The outer covering of a dinoflagellate, consisting of several membrane layers.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_amphipathic"><strong>Amphipathic</strong></a> - A compound or <a href="#BDic_molecule">molecule</a> that posses both a <a href="#BDic_polar">polar</a> and <a href="#BDic_polar">non-polar</a> component.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_amphoteric"><strong>Amphoteric</strong></a> - A compound or <a href="#BDic_molecule">molecule</a> that can act as both an <a href="#BDic_acid">acid</a> and a <a href="#BDic_base">base</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_amplification"><strong>Amplification</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_anaerobic"><strong>Anaerobic</strong></a> - Pertaining to the absence of free oxygen. Anaerobic organisms do not require oxygen for their life processes, in fact oxygen is toxic to many of them. Most anaerobic organisms are bacteria or archaeans.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_anagensis"><strong>Anagensis</strong></a> - Evolutionary change along an unbranching lineage; change without speciation.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_anapsid"><strong>Anapsid</strong></a> - A vertebrate distinguished by a skull with no openings in the side behind the eyes, e.g. turtles.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_ancestor"><strong>Ancestor</strong></a> - Any organism, population, or species from which some other organism, population, or species is descended by reproduction.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_anemophily"><strong>Anemophily</strong></a> - Seed plants which are pollinated by wind are said to be anemophilous.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_angiosperm"><strong>Angiosperm</strong></a> - A group of plants that produce seeds enclosed within an ovary, which may mature into a fruit; flowering plants.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_anhydrotetracycline"><strong>Anhydrotetracycline (ATC)</strong></a> - A <a href="#BDic_tetracycline">tetracycline</a> analog that binds the TetR protein better than tetracycline.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_anneal"><strong>Anneal</strong></a> - In the context of <a href="#BDic_dnaAssembly">DNA assembly</a> this means the coming together of <a href="#BDic_complementary">complementary</a> (or <a href="#BDic_complementary">near-complementary</a>, in some cases) sequences of <a href="#BDic_dna">DNA</a>. This is often assisted by a change in temperature: two <a href="#BDic_complementary">complementary sequences</a> are often heated up (to say 95°C) and then allowed to cool down. The heating removes self-annealing, which causes <a href="#BDic_secondaryStructure">secondary structures</a> to form in the <a href="#BDic_dna">DNA</a>, which might <a href="#BDic_inhibitor">inhibit</a> annealing to the other <a href="#BDic_molecule">molecule</a>. The cooling down allows the formation of <a href="#BDic_hydrogenBond">hydrogen bonds</a> between the two <a href="#BDic_dna">DNA</a> strands. The opposite process to annealing is melting or <a href="#BDic_denature">denaturing</a> of <a href="#BDic_dna">DNA</a>, which happens at high temperatures.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_anther"><strong>Anther</strong></a> - The pollen producing tip of a stamen; part of a flower.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_antheridium"><strong>Antheridium</strong></a> - The organ on a gametophyte plant which produces the sperm cells.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_anthophyte"><strong>Anthophyte</strong></a> - A flowering plant, or any of its closest relatives, such as the Bennettitales, Gnetales, or Pentoxylales.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_anticodon"><strong>Anticodon</strong></a> - A sequence of <a href="#BDic_nucleotide">nucleotides</a> that are complementary to <a href="#BDic_codon">codons</a>. These are typically found in <a href="#BDic_tRna">tRNA</a> which allows for the matching of an <a href="#BDic_aminoAcid">amino acid</a> to a <a href="#BDic_codon">codon</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antibioticResistanceGene"><strong>Antibiotic Resistance Gene</strong></a> - These <a href="#BDic_gene">genes</a> create a product that confers antibiotic resistance. For example, KanR confers resistance to the antibiotic kanamycin. This is often used for <a href="#BDic_selection">selection</a> of microorganisms or others.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antibiotics"><strong>Antibiotics</strong></a> - Molecules or <a href="#BDic_protein">proteins</a> which inhibit, and kill <a href="#BDic_bacteria">bacteria</a> at given concentrations.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antibody"><strong>Antibody</strong></a> - Also known as an immunoglobulin (Ig), is a large, Y-shaped protein produced mainly by plasma cells that is used by the immune system to identify and neutralise pathogens such as <a href="#BDic_bacteria">bacteria</a> and <a href="#BDic_virus">viruses</a>. <!-- VERIFY --> The average size of an antibody is about 10 nm in length <span class="citation">(Reth 2013: Nature Immunology - Matching cellular dimensions with molecular sizes)</span> and its molecular weight would be about 150 kDa <span class="citation">(Padlan EA. Anatomy of the antibody molecule. Mol. Immunol. 1994;31:169-217)</span>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antigen"><strong>Antigen</strong></a> - Any biological or <a href="#BDic_synthetic">synthetic</a> molecule which causes an <a href="#BDic_immuneSystem">immune response</a> when introduced into the body and is capable of reacting with the products of the <a href="#BDic_immuneSystem">immune system</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antigenicDeterminant"><strong>Antigenic Determinant</strong></a> - See <a href="#BDic_epitope">Epitope</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antigenicity"><strong>Antigenicity</strong></a> - The capacity of a <a href="#BDic_molecule">molecule</a> to be recognised by the <a href="#BDic_immuneSystem">immune system</a>. A substance can be antigenic without being <a href="#BDic_immunogenicity">immunogenic</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_antisenseSequence"><strong>Antisense Sequence</strong></a> - A sequence of <a href="#BDic_nucleotide">nucleotides</a> complementary to a <a href="#BDic_senseSequence">sense coding sequence</a>, which may be either the strand of a <a href="#BDic_dna">DNA</a> that undergoes <a href="#BDic_transcription">transcription</a>, or a <a href="#BDic_mRna">messenger RNA molecule</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_anus"><strong>Anus</strong></a> - End of the digestive tract, or gut, through which waste products of digestion are excreted, as distinct from the mouth.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_aperture"><strong>Aperture</strong></a> - Small opening, for example the opening in the test of a foram.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_apical"><strong>Apical</strong></a> - Referring to the tip or the apex of. 
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_apicalMeristem"><strong>Apical Meristem</strong></a> - Group of cells at the growing tip of a branch or root. It divides cells to create new tissues.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_apoptosis"><strong>Apoptosis</strong></a> - The process of preprogrammed <a href="#BDic_cell">cell</a> death which occurs in <a href="#BDic_multicellular">multicellular</a> organisms. Do not confuse with <a href="#BDic_necrosis">necrosis</a>, which is caused by trauma. Apoptosis is a normal part of an organisms physiology.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_aptamer"><strong>Aptamer</strong></a> - A sequence of <a href="#BDic_rna">RNA</a> (or sometimes <a href="#BDic_dna">DNA</a>) that folds into a particular 3D structure, enabling it to bind some <a href="#BDic_ligand">ligand molecule</a>, <em>exempli gratia</em> caffeine, with high <a href="#BDic_specificity">specificity</a> and strength. Binding of the <a href="#BDic_ligand">ligand</a> can sometimes induce a <a href="#BDic_conformation">conformational change</a> in the aptamer, which can be used as a signal for the binding event in the case of aptamer-based circuits.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_araC"><strong>AraC</strong></a> - AraC gene and AraC protein, components of the L-arabinose operon in <a href="#BDic_eColi"><em>E. coli</em></a>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_archegonium"><strong>Archegonium</strong></a> - The organ on a gametophyte plant which produces the egg cell, and nurtures the young sporophyte.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_assay"><strong>Assay</strong></a> - A name for an investigative analytic lab technique used for gathering <a href="#BDic_qualitative">qualitative</a> or <a href="#BDic_quantitative">quantitative</a> data.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_assembly"><strong>Assembly</strong></a> - Referring to adding genetic components together to form a new desired genetic sequence or genome in a laboratory; see <a href="#BDic_cloning">DNA cloning</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_associationConstant"><strong>Association Constant (Binding constant)</strong></a> - A special case of the equilibrium constant <em>K</em>. It is the inverse of the <a href="#BDic_dissociationConstant">dissociation constant</a>. It describes the binding and unbinding of a receptor (R) and a ligand (L).
                                    <div class="mathsFormula">
                                        $$
                                            R + L \leftrightarrows RL
                                        $$
                                        $$
                                            K_a = \frac{k_{on}}{k_{off}} = \frac{[RL]}{[R][L]}
                                        $$
                                    </div>
                                    <p>
                                        See also <a href="#BDic_dissociationConstant">dissociation constant</a>.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_atp"><strong>ATP (Adenosine Triphosphate)</strong></a> - The primary molecule used by living organisms as fuel. ATP is relatively stable, high energy molecule used to fuel chemical reactions within cells.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_attenuation"><strong>Attenuation</strong></a> - To lessen or weaken the effect of something. For example, noise in a system can be attenuated with certain techniques, such as feedback, which can reduce the amount of noise or lessen its effect on the system.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_attSite"><strong>ATT Site</strong></a> - Regions of <a href="#BDic_dna">DNA</a> required for site-specific <a href="#BDic_recombination">recombination</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_autoregulation"><strong>Autoregulation</strong></a> - Self-regulation. <em>exempli gratia</em>, an electric heater may employ negative autoregulation in order to keep a steady temperature in the room. If it heats the room too much, the room gets hot; a temperature sensor detects this and turns the heater off. Once the room cools down, the sensor detects this event as well and turns the heater on. The heater regulates itself in this way. <a href="#BDic_geneExpression">Gene expression</a> is also autoregulatory; products regulate the expression of the gene (itself).
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_autotroph"><strong>Autotroph</strong></a> - Any organism that is able to manufacture its own food. Most plants are autotrophs, as are many protists and bacteria. Contrast with consumer. Autotrophs may be <strong>Photoautotrophic</strong>, using light energy to manufacture food, or <strong>Chemoautotrophic</strong>, using chemical energy.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_axil"><strong>Axil</strong></a> - The angle formed between a leaf stalk and the stem to which it is attached. In flowering plants, buds develop in the axils of leaves.
                                </li>

                            <h1 class="dicSection" id="theLetter_B">B</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_backbone"><strong>Backbone</strong></a> - Term used in <a href="#BDic_cloning">DNA cloning</a> to refer to a <a href="#BDic_dna">DNA</a> construct that serves as destination for other <a href="#BDic_dna">DNA</a> parts.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_bacteria"><strong>Bacteria</strong></a> - Bacteria are a <a href="#BDic_microOrganism">microorganisms</a>, classified as <a href="#BDic_prokaryota">prokaryotes</a>. They most often present themselves in a <a href="#BDic_uniCellular">unicellular</a> form and always lack a <a href="#BDic_nucleus">nucleus</a>. Their <a href="#BDic_gene">genetic material</a> floats freely inside the cell and can be organised into two different sets, a <a href="#BDic_circularProkaryoteChromosome">central circular chromosome</a> and <a href="#BDic_plasmid">plasmids</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_bacterialColony"><strong>Bacterial Colony</strong></a> - A colony is a point of bacteria growing on a <a href="#BDic_petriDish">Petri dish</a>. If the dishes are prepared correctly then this single point of bacteria should all be issue from the same stock, <em>i.e.</em> one single <a href="#BDic_cell">cell</a> was deposited onto the medium and he is the one who <a href="#BDic_division">divided</a> in order to produce the others in the colony. All cells in a colony should be genetically identical.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_bacteriophage"><strong>Bacteriophage</strong></a> - Virus which infects and destroys a bacterial host. Some phages, however, will incorporate their DNA into that of their host, and remain dormant for an extended period. For this reason, they have become essential tools of genetic engineers.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_basal"><strong>Basal</strong></a> - Baseline level. For example, there might be basal <a href="#BDic_geneExpression">gene expression</a> in the absence of activators or in the presence of repressors. This is the minimum amount of <a href="#BDic_geneExpression">gene expression</a>. The basal expression level can drastically affect the performance of systems, <em>exempli gratia</em> in positive autoregulation.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_basal Group"><strong>Basal Group</strong></a> - The earliest diverging group within a clade; for instance, to hypothesize that sponges are basal animals is to suggest that the lineage(s) leading to sponges diverged from the lineage that gave rise to all other animals.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_base"><strong>Base</strong></a> - For a biological context see <a href="#BDic_nitrogenousBase">nitrogenous base</a>, for a chemical context see pH.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_basePair"><strong>Base Pair (bp)</strong></a> - A unit consiting of two complemtary <a href="#BDic_nucleotide">nucleotides</a> found in a <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a> sequence; these are bound by weak <a href="#BDic_hydrogenBond">hydrogen bonds</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_basepair"><strong>Basepair</strong></a> - In the case of genetic material, a pair formed between two <a href="#BDic_nitrogenousBase">nitrogenous bases</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_benthic"><strong>Benthic</strong></a> - Organisms that live on the bottom of the ocean are called benthic organisms. They are not free-floating like pelagic organisms are.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_bindingConstant"><strong>Binding Constant</strong></a> - Constant associated with the binding and unbinding reaction of <a href="#BDic_receptor">receptor</a> and <a href="#BDic_ligand">ligand molecules</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_biobrick"><strong>BioBrick</strong></a> - <a href="#BDic_dna">DNA sequences</a> which conform to a assembly standard that uses a specific <a href="#BDic_restrictionEnzyme">restriction enzyme</a> based protocol.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_biocad"><strong>BioCAD</strong></a> - Information system that incorporates computer aided design tools for use in <a href="#BDic_syntheticBiology">synthetic biology</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_biocompiler"><strong>BioCompiler</strong></a> - The concept of a computer software compiler applied to the creation of GMOs (genetically modified organisms); see <a href="#BDic_syntheticBiology">synthetic biology</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_biochemistry"><strong>Biochemistry</strong></a> - the study of those molecules used and manufactured by living things.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_bioticFactors"><strong>Biotic Factors</strong></a> - Living factors such as decomposers, scavengers and predators.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_bioluminescence"><strong>Bioluminescence</strong></a> - the production of light by a chemical reaction within an organism. The process occurs in many bacteria and protists, as well as certain animals and fungi.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_biomarker"><strong>Biomarker</strong></a> - A measurable indicator related to a particular state of a biological system.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_biomes"><strong>Biomes</strong></a> - The world's major communities, classified according to the predominant vegetation and characterized by adaptations of organisms to that particular environment. MORE?
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_bipedal"><strong>Bipedal</strong></a> - Describes an animal that walks on two legs.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_bipinnate"><strong>Bipinnate</strong></a> - Describing a pinnate leaf in which the leaflets themselves are further subdivided in a pinnate fashion.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_biramous"><strong>Biramous</strong></a> - Arthropod appendages that are biramous have two branches, an outer branch and an inner branch. These branches may have separate functions; in crustaceans, for instance, the inner branch of a leg is used for walking, while the outer branch may be paddle-shaped or feathery and often functions as a gill. Contrast with uniramous.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_bisporangiate"><strong>Bisporangiate</strong></a> - When a flower or cone produces both megaspores and microspores, it is said to be bisporangiate. Most flowers are bisporangiate.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_bistability"><strong>Bistability</strong></a> - A system with two stable states. The system will also have a third, metastable state by which the system may pass, per the definition of stability.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_blade"><strong>Blade</strong></a> - Any broad and flattened region of a plant or alga, which allows for increased photosynthetic surface area.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_blood"><strong>Blood</strong></a> - Fluid which circulates throughout the body of an animal, distributing nutrients, and often oxygen as well.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_blueFluorescentProtein"><strong>Blue Fluorescent Protein (BFP, eBFP)</strong></a> - A blue <a href="#BDic_fluorescentMarker">fluorescent protein</a>. "E" denotes a newer enhanced version.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_bookLung"><strong>Book Lung</strong></a> - A set of soft overlapping flaps, covered up by a plate on the abdomen, through which oxygen is taken up and carbon dioxide given off. Characteristic of many terrestrial arachnids such as scorpions and spiders.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_boreal"><strong>Boreal</strong></a> - Describes the northern biotic area that is dominated by tundra, taiga, and coniferous forests.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_bract"><strong>Bract</strong></a> - Any reduced leaf-like structure associated with a cone or flower.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_brain"><strong>Brain</strong></a> - Collection of nerve cells usually located at the anterior end of an animal, when present at all. The nerves coordinate information gathered by sense organs, locomotion, and most internal body activities.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_brevitoxin"><strong>Brevitoxin</strong></a> - neurotoxin produced by the dinoflagellate <em>Ptychodiscus brevis</em>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_bryophyte"><strong>Bryophyte</strong></a> - Plants in which the gametophyte generation is the larger, persistent phase; they generally lack conducting tissues. Bryophytes include the Hepaticophyta (liverworts), Anthocerotophyta (hornworts), and Bryophyta (mosses).
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_bsaI"><strong>BsaI</strong></a> - Important <a href="#BDic_restrictionEnzyme">restriction enzyme</a> in <a href="#BDic_dna">DNA cloning</a> protocols such as <a href="#BDic_goldenGate">Golden Gate</a> and <a href="#BDic_moClo">MoClo</a>.
                                </li>

                            <h1 class="dicSection" id="theLetter_C">C</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cDna"><strong>cDNA</strong></a> - Refers to complementary DNA, often used in the context of <a href="#BDic_rtPcr">rtPCR (reverse transcription)</a>; where the complement of a given sequence is generated.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ccdB"><strong>ccdB</strong></a> - A lethal gene that targets <a href="#BDic_dna">DNA</a> gyrase. The lethal gene is useful for ensuring that the <a href="#BDic_plasmid">plasmid</a> containing it cannot be propagated in standard <a href="#BDic_eColi"><em>E. coli</em></a> strains.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cTerminus"><strong>C Terminus (C-ter)</strong></a> - Also called the carboxyl-terminus or the COOH-terminus, this refers to the end of an <a href="#BDic_aminoAcid">amino acid</a> chain which holds the chemical group of COOH. Note this is the end of the chain which is generated last; the <a href="#BDic_nTerminus">N terminus</a> is the first to come out of the <a href="#BDic_ribosome">ribosome</a> during <a href="#BDic_translation">translation</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_g">
                                    <a class="dicWord" data-category="genBio" id="BDic_cagPromoter"><strong>CAG Promoter (pCAG)</strong></a> - The CAG promoter is a strong <a href="#BDic_promoter">promoter</a> for expressing proteins in mammalian cells. It is composed of <a href="#BDic_cmv">Cytolomegalovirus' (CMV)</a> <a href="#BDic_promoter">promoter</a> enhancer region, chicken β-Actin promoter its first <a href="#BDic_intron">intron</a> and <a href="#BDic_exon">exon</a>, finally the rabbit β-Globin splice acceptor. Hence: <strong>C</strong>ytomegalovirus <strong>A</strong>ctin <strong>G</strong>lobin = CAG.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_crisprCas9"><strong>CRISPR Cas9</strong></a> - A new tool based on the bacterial CRISPR-Cas system to target and cut <a href="#BDic_dna">DNA</a>, thus allowing for targeted <a href="#BDic_genome">genome</a> editing. CRISPR stands for clustered regularly interspaced short palindromic repeats.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_calcite"><strong>Calcite</strong></a> - A common crystalline form of natural calcium carbonate, CaCO3, that is the basic constituent of limestone, marble, and chalk. Also called calcspar.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_calciumCarbonate"><strong>Calcium Carbonate</strong></a> - A white compound, CaCO<sub>3</sub>, that occurs naturally as marble, chalk, limestone, and calcite. It is used by many marine invertebrates, such as corals and echinoderms, and by protists, such as coccolithophorids, to construct their exoskeletons. Calcium carbonate, in the form of calcite, is also incorporated into the eggshells of amniotes, except for turtles whose eggs are composed of aragonite (CaCO<sub>3</sub> + magnesium).
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_canopy"><strong>Canopy</strong></a> - Layer of vegetation elevated above the ground, usually of tree braches and epiphytes. In tropical forests, the canopy may be more than 100 feet above the ground.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_capillaryElectrophoresis"><strong>Capillary Electrophoresis</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_capsid"><strong>Capsid</strong></a> - The protein "shell" of a free virus particle.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_carbohydrates"><strong>Carbohydrates</strong></a> - class of biochemical compounds which includes sugars, starch, chitin, and steroids.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_carnivore"><strong>Carnivore</strong></a> - Literally, an organism that eats meat. Most carnivores are animals, but a few fungi, plants, and protists are as well.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_carpel"><strong>Carpel</strong></a> - A unit of the pistil; it is evolutionarily a modified leaf.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cascade"><strong>Cascade</strong></a> - Referring to having two or more sequential functional elements.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cassette"><strong>Cassette</strong></a> - Assembled part of <a href="#BDic_dna">DNA</a>. Gene cassette or expression cassette.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_catalysation"><strong>Catalysation</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_cataphyll"><strong>Cataphyll</strong></a> - In cycads, a scale-like modified leaf which protects the developing true leaves.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_cathodoluminescence"><strong>Cathodoluminescence</strong></a> - An analytical technique used in geology and paleontology to analyze the different minerals in a sample, or diagenetic history of a sample — how crystals grew, were deformed, and were replaced. A beam of electrons is fired at a sample to produce visible light, which can then be used to interpret the mineralogical and diagenetic history of the sample.
                                </li>

                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cell"><strong>Cell</strong></a> - The fundamental structural unit of all life. The cell consists primarily of an outer <a href="#BDic_cellMembrane">plasma membrane</a>, which separates it from the environment; the genetic material (<a href="#BDic_dna">DNA</a>), which encodes <a href="#BDic_heredity">heritable</a> information for the maintainance of life; and the cytoplasm, a heterogeneous assemblage of ions, molecules, and fluid.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cellCulture"><strong>Cell Culture</strong></a> - A cell culture is the act of growing <a href="#BDic_cell">cells</a>. Many different methods for doing so exist. Including <a href="#BDic_petriDish">Petri dish</a> with <a href="#BDic_laMedium">LA medium</a>, (<a href="#BDic_lysogenyBroth">lysogeny broth</a> plus <a href="#BDic_agar">agar</a>), or even pure <a href="#BDic_lysogenyBroth">lysogeny broth medium</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cellCycle"><strong>Cell Cycle</strong></a> - Complete sequence of steps which must be performed by a cell in order to replicate itself, as seen from mitotic event to mitotic event. Most of the cycle consists of a growth period in which the cell takes on mass and replicates its DNA. Arrest of the cell cycle is an important feature in the reproduction of many organisms, including humans.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cellLine"><strong>Cell Line</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cellMembrane"><strong>Cell Membrane</strong></a> - The outer membrane of a cell, which separates it from the environment. Also called a <a href="#BDic_cellMembrane">plasma membrane</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="bioCell" data-src="origDereck">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cellTherapy"><strong>Cell Therapy</strong></a> - 
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cellWall"><strong>Cell Wall</strong></a> - Rigid structure deposited outside the cell membrane. Plants are known for their cell walls of cellulose, as are the green algae and certain protists, while fungi have cell walls of chitin.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_cellulose"><strong>Cellulose</strong></a> - carbohydrate polymer of the simple sugar glucose. It is found in the cell walls of plants and green algae, as well as dinoflagellates. Cellulose is the most abundant compound on earth that is manufactured by living things.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_circularProkaryoteChromosome"><strong>Circular Prokaryote Chromosome</strong></a> - Strictly speaking <a href="#BDic_prokaryota">prokaryotes</a> do not have <a href="#BDic_chromosome">chromosomes</a>. However the central continous mass of <a href="#BDic_genetic">genetic</a> material is referred to as its <a href="#BDic_chromosome">chromosome</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_cephalon"><strong>Cephalon</strong></a> - In trilobites, the head shield bearing the eyes, antennae, and mouth.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_chaetae"><strong>Chaetae</strong></a> - Stiff bristles characteristic of annelids.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_chaperone"><strong>Chaperone</strong></a> - <a href="#BDic_protein">Proteins</a> that assist the <a href="#BDic_colvalentBond">covalent</a> folding or unfolding and the assembly or disassembly of other <a href="#BDic_macromolecule">macromolecular</a> structures.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_character"><strong>Character</strong></a> - Heritable trait possessed by an organism; characters are usually described in terms of their states, for example: "hair present" vs. "hair absent," where "hair" is the character, and "present" and "absent" are its states.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_characterisation"><strong>Characterisation</strong></a> - Referring to a system or element that can be measured and analysed to understand its workings and functions.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_chassis"><strong>Chassis</strong></a> - Cells or strain which can be used for engineering and the creation of <a href="#BDic_syntheticBiology">synthetic organisms</a>. It is important for these organisms to be as <a href="#BDic_minimalOrganism">minimal</a> as possible or to not have any interfering metabolic pathways which those which we may want to insert.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_chela"><strong>Chela</strong></a> - The claw of an arthropod.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_chelicera"><strong>Chelicera</strong></a> - The first pair of appendages of a chelicerate arthropod. Originally a short clawed appendage, the chelicerae of many arachnids are highly modified for feeding; in spiders, for instance, they are modified into poisonous fangs.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_chitin"><strong>Chitin</strong></a> - A carbohydrate polymer found in the cell walls of fungi and in the exoskeletons of arthropods, which provides strength for support and protection.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_chlorophyll"><strong>Chlorophyll</strong></a> - The green-coloured pigment that absorbs light during photosynthesis, often found in plants, algae, and some bacteria; it includes a porphyrin ring, and often has a long hydrophobic tail.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_chloroplast"><strong>Chloroplast</strong></a> - A chlorophyll-containing plastid found in algal and green plant cells.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_chordate"><strong>Chordate</strong></a> - An animal with a notochord (a cartilaginous rod that extends the length of the body), dorsal hollow nerve cord (a fluid-filled tube that runs the length of the body), gill slits or pouches, and a tail at some stage in its life cycle.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_chromatin"><strong>Chromatin</strong></a> - Is a method of organising and highly compacting <a href="#BDic_dna">DNA</a>. It is formed from a <a href="#BDic_complex">complex</a> of various <a href="#BDic_molecule">molecules</a> including <a href="#BDic_protein">proteins</a>, <a href="#BDic_rna">RNA</a>, and of course <a href="#BDic_dna">DNA</a>. Chromatin can be organised into two different forms; one which composes the other. <a href="#BDic_euchromatin">Euchromatin</a> and <a href="#BDic_heteroChromatin">heterochromatin</a> respectively.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_chromatography"><strong>Chromatography</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_chromophore"><strong>Chromophore</strong></a> - The part of a <a href="#BDic_molecule">molecule</a> responsible for its colour.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_chromosome"><strong>Chromosome</strong></a> - Linear piece of eukaryotic DNA, often bound by specialised proteins known as histones.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cistron"><strong>Cistron</strong></a> - A cistron is a <a href="#BDic_gene">gene</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_clade"><strong>Clade</strong></a> - A monophyletic taxon; a group of organisms which includes the most recent common ancestor of all of its members and all of the descendants of that most recent common ancestor. From the Greek word "klados", meaning branch or twig.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_cladogenesis"><strong>Cladogenesis</strong></a> - The development of a new clade; the splitting of a single lineage into two distinct lineages; speciation.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_cladogram"><strong>Cladogram</strong></a> - A diagram, resulting from a cladistic analysis, which depicts a hypothetical branching sequence of lineages leading to the taxa under consideration. The points of branching within a cladogram are called nodes. All taxa occur at the endpoints of the cladogram.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cleavage"><strong>Cleavage</strong></a> - To cut or separate.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_clitellum"><strong>Clitellum</strong></a> - In annelids, a swelling of the body towards the head of the animal, where the gonads are located. Both oligochaetes and leeches have a clitellum.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cloning"><strong>Cloning (Molecular Cloning)</strong></a> - The assembly and replication of new <a href="#BDic_dna">DNA</a> constructs from existing pieces of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_cnidocyst"><strong>Cnidocyst</strong></a> - The "stinging cell" of a cnidarian.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_codon"><strong>Codon</strong></a> - A triplet (three) of <a href="#BDic_ribonucleotide">ribonucleotides</a> in <a href="#BDic_mRna">mRNA</a> that encodes for an <a href="#BDic_aminoAcid">amino acid</a>.
                                    <p>Note that whether or not a codon matches this table depends on the organism. Some organisms, especially <a href="#BDic_microOrganism">microorganisms</a> and <a href="#BDic_bacteria">bacteria</a> often present modified readings of these codons (known as alternative codons). This is dependant on the presence or not of a <a href="#BDic_tRna">tRNA</a> capable of matching the <a href="#BDic_dna">DNA</a> sequence (codon).</p>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="tableHeader" colspan="5">Common Start/Stop Codons</th>
                                            </tr>
                                            <tr>
                                                <th>RNA</th>
                                                <th>DNA</th>
                                                <th>Function</th>
                                                <th>Amino Acid</th>
                                                <th>Organisms</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>AUG</th>
                                                <th>ATG</th>
                                                <td>Start</td>
                                                <td>Methionine</td>
                                                <td>General</td>
                                            </tr>
                                            <tr>
                                                <th>CUG</th>
                                                <th>CTG</th>
                                                <td>Start</td>
                                                <td>Leucine</td>
                                                <td>Mammals Rare</td>
                                            </tr>
                                            <tr>
                                                <th>AUA</th>
                                                <th>ATA</th>
                                                <td>Start</td>
                                                <td>Methionine</td>
                                                <td rowspan="2">Mitochondria</td>
                                            </tr>
                                            <tr>
                                                <th>AUU</th>
                                                <th>ATT</th>
                                                <td>Start</td>
                                                <td>Methionine</td>
                                            </tr>
                                            <tr>
                                                <th>GUG</th>
                                                <th>GTG</th>
                                                <td>Start</td>
                                                <td>Methionine</td>
                                                <td rowspan="2">Prokaryotes</td>
                                            </tr>
                                            <tr>
                                                <th>UUG</th>
                                                <th>TTG</th>
                                                <td>Start</td>
                                                <td>Methionine</td>
                                            </tr>
                                            <tr>
                                                <th>UAA</th>
                                                <th>TAA</th>
                                                <td>Stop</td>
                                                <td>Ochre</td>
                                                <td rowspan="3">Universal</td>
                                            </tr>
                                            <tr>
                                                <th>UAG</th>
                                                <th>TAG</th>
                                                <td>Stop</td>
                                                <td>Amber</td>
                                            </tr>
                                            <tr>
                                                <th>UGA</th>
                                                <th>TGA</th>
                                                <td>Stop</td>
                                                <td>Opal</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_coelom"><strong>Coelom</strong></a> - Fluid-filled cavity within the body of an animal; usually refers to a cavity lined with specialised tissue peritoneum in which the gut is suspended. The structure and development of the coelom is an important character for recognizing major groups of animals.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_coenocytic"><strong>Coenocytic</strong></a> - Condition in which an organism consists of filamentous cells with large central vacuoles, and whose nuclei are not partitioned into separate compartments. The result is a long tube containing many nuclei, with all the cytoplasm at the periphery.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cofactor"><strong>Cofactor</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_collagen"><strong>Collagen</strong></a> - long proteins whose structure is wound into a triple helix. The resulting fibers have a high tensile strength. Collagen is a primary component of mammalian hair.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_colonial"><strong>Colonial</strong></a> - Condition in which many unicellular organisms live together in a somewhat coordinated group. Unlike true multicellular organisms, the individual cells retain their separate identities, and usually, their own membranes and cell walls.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_columella"><strong>Columella</strong></a> - A small column of tissue which runs up through the center of a spore capsule. It is present in hornworts, mosses, and some rhyniophytes.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="CDic_colvalentBond"><strong>Colvalent Bond</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_commensal"><strong>Commensal</strong></a> - Bacteria that live on an organism's body and cause no effect on health.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_competitiveInhibition"><strong>Competitive Inhibition</strong></a> - An inhibitor may compete with another molecule or molecules in the <a href="#BDic_inhibitor">inhibition</a> process.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_complementary"><strong>Complementary</strong></a> - Complementary is refering the physical matching of two corresponding parts, this may be seen simply as two puzzle pieces fitting together. This term is often used when refering to genetic material and more specifically a pair of strands composed of either <a href="#BDic_dna">DNA</a>/<a href="#BDic_dna">DNA</a> or <a href="#BDic_dna">DNA</a>/<a href="#BDic_rna">RNA</a> or <a href="#BDic_rna">RNA</a>/<a href="#BDic_rna">RNA</a>, and even <a href="#BDic_protein">proteins</a> with <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_complex"><strong>Complex</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_compoundEye"><strong>Compound Eye</strong></a> - Found in many but not all arthropods, a compound eye is composed of a large number of small, closely packed simple eyes (ommatidia), each with its own lens and nerve receptors.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_compoundLeaves"><strong>Compound Leaves</strong></a> - Leaves with two or more leaflets attached to a single leaf stem.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_concentration"><strong>Concentration</strong></a> - Concentration is the means by which an amount or <a href="#CDic_mass">mass</a> of a <a href="#CDic_disolution">disolved</a> chemical compound is measured within a certain volume of free flowing fluid; liquid or gas.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_conformation"><strong>Conformation</strong></a> - Is the physical structure and specific three dimensional form a <a href="#BDic_protein">protein</a> takes. These 3D strucutres are key to the function of <a href="#BDic_protein">proteins</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_constitutive"><strong>Constitutive</strong></a> - Produced or active in relatively constant amounts. A constitutive <a href="#BDic_promoter">promoter</a> is constantly active. See also <a href="#BDic_basal">basal</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_construct"><strong>Construct</strong></a> - A pre-assembled part of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_consumer"><strong>Consumer</strong></a> - Any organism which must consume other organisms (living or dead) to satisfy its energy needs. Contrast with autotroph.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_context"><strong>Context</strong></a> - The setting in which something occurs. Context is important in chemical or biochemical reactions, as some proteins or chemicals will not act or demonstrate normal activity relative to their chemical environments. This is often the case with proteins which will <a href="#BDic_denature">denature</a> in the wrong pH.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_contractileVacuole"><strong>Contractile Vacuole</strong></a> - In many protists, a specialised vacuole with associated channels designed to collect excess water in the cell. Microtubules periodically contract to force this excess water out of the cell, regulating the cell's osmotic balance.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_convergence"><strong>Convergence</strong></a> - Similarities which have arisen independently in two or more organisms that are not closely related. Contrast with homology.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cooperativity"><strong>Cooperativity</strong></a> - The ability for binding events to <a href="#BDic_promoter">promote</a> additional binding events. <em>Exempli gratia</em> the binding of the first <a href="#CDic_oxygen">oxygen molecule</a> to <a href="#BDic_hemoglobin">hemoglobin</a> makes the binding of the second <a href="#CDic_oxygen">oxygen molecule</a> much more likely, which in turn makes the binding of the third <a href="#BDic_molecule">molecule</a> much more likely, <em>et cetera</em>. We often want to use <a href="#BDic_repressor">repressors</a> that exhibit cooperativity, as they exhibit a non-linear (<a href="#MDic_exponential">exponential</a>) response useful for creating devices that can be analysed with the digital abstraction.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_cotyledon"><strong>Cotyledon</strong></a> - The "seed leaves" produced by the embryo of a seed plant that serve to absorb nutrients packaged in the seed, until the seedling is able to produce its first true leaves and begin photosynthesis; the number of cotyledons is a key feature for the identification of the two major groups of flowering plants.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_coupling"><strong>Coupling</strong></a> - Connecting or pairing.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_crickStrand"><strong>Crick Strand</strong></a> - A less-often-used nomenclature for the <a href="#BDic_antisenseSequence">anti-sense DNA</a> strand. This is the strand which is <a href="#BDic_transcription">transcribed</a> into <a href="#BDic_mRna">pre-mRNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_crossTalk"><strong>Cross Talk</strong></a> - Interaction between two or more elements generally not meant to interact, this may or may not cause interferences in a system.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_crownGroup"><strong>Crown Group</strong></a> - All the taxa descended from a major cladogenesis event, recognized by possessing the clade's synapomorphy. See: stem group.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_cuticle"><strong>Cuticle</strong></a> - In animals, a multilayered, extracellular, external body covering, usually composed of fibrous molecules such as chitin or collagen, and sometimes strengthened by the deposition of minerals such as calcium carbonate. A waxy layer which seals the outer surface of land plants, helping to retain moisture.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cyanFluorescentProtein"><strong>Cyan Fluorescent Protein (CFP)</strong></a> - A cyan (blue) <a href="#BDic_fluorescence">fluorescent protein</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_cyst"><strong>Cyst</strong></a> - A small, capsule-like sac that encloses an organism in its resting or larval stage, e.g., a resting spore of an alga.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_cytomegaloVirus"><strong>Cytomegalovirus (CMV)</strong></a> - A <a href="#BDic_genus">genus</a> of <a href="#BDic_virus">viruses</a> in the <a href="#BDic_family">family</a> of <a href="#BDic_herpesviridae">Herepesviridae</a>. Its promotor CMV is a strong viral <a href="#BDic_promoter">promoter</a> commonly used in <a href="#ZDic_mammal">mammalian</a> experiments and <a href="#BDic_syntheticBiology">synthetic biology</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cytoplasm"><strong>Cytoplasm</strong></a> - All the contents of a cell, including the plasma membrane,but not including the nucleus.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_cytoskeleton"><strong>Cytoskeleton</strong></a> - Integrated system of molecules within eukaryotic cells which provides them with shape, internal spatial organization, motility, and may assist in communication with other cells and the environment. Red blood cells, for instance, would be spherical instead of flat if it were not for their cytoskeleton.
                                </li>

                            <h1 class="dicSection" id="theLetter_D">D</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dna"><strong>DNA (Desoxyribonucleic Acid)</strong></a> - A <a href="#BDic_molecule">molecule</a> (<a href="#BDic_nucleicAcid">nucleic acid</a>) which carries most of the genetic instructions used in the development, function and reproduction of all known living organisms and many <a href="#BDic_virus">viruses</a>. DNA is the primary compenent of <a href="#BDic_chromosome">chromosomes</a>.
                                    <figure>
                                        <img class="lazy" data-src="/dictionaries/documents/biology/dna.jpg">
                                        <figcaption>DNA a double helix molecule, the current known basis for life.</figcaption>
                                    </figure>
                                    <p>
                                        DNA is composed of two directional strands. The directionality of these strands is dictated by the orientation of the <a href="#BDic_nucleotide">nucleotides</a> that compose it; there is a <a href="#BDic_5Prime">5' end</a> and a <a href="#BDic_5Prime">3' end</a>.
                                    </p>
                                    <p>
                                        Four different <a href="#BDic_nucleotide">nucleotides</a> compose DNA, these are differentiated by the nucleic bases they hold: <a href="#BDic_adenine">adenine (A)</a>, <a href="#BDic_thymine">thymine (T)</a>, <a href="#BDic_guanine">guanine (G)</a>, and <a href="#BDic_cytosine">cytosine (C)</a>. These can grouped together chemically into the purine group A, T, and the pyrimidine group G, C. The two strands come together and bind through weak <a href="#BDic_hydrogenBond">hydrogen bonds</a>; A - T (2 bonds), and C - G (3 bonds).
                                    </p>
                                    
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dnaAssembly"><strong>DNA Assembly</strong></a> - The process of putting together pieces of <a href="#BDic_dna">DNA</a> into larger <a href="#BDic_dna">DNA</a> constructs, <em>exempli gratia</em> <a href="#BDic_plasmid">plasmids</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dnaPolymerase"><strong>DNA Polymerase</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_deNovo"><strong><em>De Novo</em></strong></a> - From scratch. <em>exempli gratia:</em> <em>de novo</em> <a href="#BDic_dna">DNA</a> synthesis is the synthesis of <a href="#BDic_dna">DNA</a> from basic building blocks such as <a href="#BDic_nucleotide">nucleotides</a> or <a href="#BDic_oligonucleotide">oligonucleotides</a>, instead of creating a new <a href="#BDic_dna">DNA molecule</a> that is a copy of an existing <a href="#BDic_dna">DNA molecule</a>; that would be templated synthesis.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_decomposer"><strong>Decomposer</strong></a> - An organism that breaks down the tissue and/or structures of dead organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_decomposition"><strong>Decomposition</strong></a> - The breakdown of dead organic material by detrivores or saprophytes.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_degeneratePrimerLibrary"><strong>Degenerated Primer Library</strong></a> - A degenerate primer library is a mix of primers used in <a href="#BDic_selex">SELEX</a>. These primers are obtained by chemical synthesis; note that in chemistry DNA sequences are generated in the reverse sense, 3' → 5'. These primers should contain common regions and "degenerated regions". These degenerated regions are denoted as N; N meaning any of the 4 nucleotides may occupy that spot. Note that if a sequence is ordered with 40N then that would mean that there are <span class="mathsNumbers">4<sup>40</sup> = 1.2 · 10<sup>24</sup></span> different sequences possible. Note the tube received will contain a mixture of all the different possible sequences and not just specific ones.
                                    <p>
                                        Reminder for mol, M, definition see Concentration, Matter, &amp; Volumes
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_degradation"><strong>Degradation</strong></a> - The condition or process of destruction or being consumed torn apart. Biological material decays because the composing biological <a href="#BDic_molecule">molecules</a> are torn apart over time after seperation from, or death of said organism.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_degredation"><strong>Degredation</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_denature"><strong>Denature</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_2.">
                                    <a class="dicWord" data-category="genBio" id="BDic_derivative"><strong>Derivative</strong></a> - <strong>1.</strong> Represents the rate of change of a function. <strong>2.</strong> Taken from or inspired from, one may derive an idea or information from an original source.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_derived"><strong>Derived</strong></a> - Describes a character state that is present in one or more subclades, but not all, of a clade under consideration. A derived character state is inferred to be a modified version of the primitive condition of that character, and to have arisen later in the evolution of the clade. For example, "presence of hair" is a primitive character state for all mammals, whereas the "hairlessness" of whales is a derived state for one subclade within the Mammalia.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_desiccation"><strong>Desiccation</strong></a> - The process of drying out. In biology, moisture loss in organisms.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_desoxynucleosideTriphosphates"><strong>Desoxynucleoside Triphosphates</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_desoxyribose"><strong>Desoxyribose</strong></a> - Desoxyribose is a form of sugar, this kind is special in that it is included in genetic material of the <a href="#BDic_rna">DNA</a> kind. <a href="#BDic_dna">RNA</a> includes another kind known as <a href="#BDic_ribose">ribose</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_detritus"><strong>Detritus</strong></a> - Accumulated organic debris from dead organisms, often an important source of nutrients in a food web.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_detrivore"><strong>Detrivore</strong></a> - Any organism which obtains most of its nutrients from the detritus in an ecosystem.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dextrose"><strong>Dextrose</strong></a> - Dextrose is a form of sugar otherwise known as glucose. This kind is special in that it is used as fuel for life. The name dextrose denotes specifically the D <a href="#BDic_isomer">isomer</a>. Do not confuse dextrose with <a href="#BDic_desoxyribose">desoxyribose</a>, included in genetic material of <a href="#BDic_dna">DNA</a>. In humans dextrose does not need to be <a href="#BDic_metabolism">metabolised</a> and can be integrated and used directly in its current form by human cells.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_diapsid"><strong>Diapsid</strong></a> - A vertebrate distinguished by a skull with two pairs of openings in the side behind the eyes, e.g., lizards, snakes, crocodiles, dinosaurs, and pterosaurs.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_differentiation"><strong>Differentiation</strong></a> - The action or process of changing or morphing into another biological state. This term is often used in cellular biology for the "evolution" of cells through their developmental stages.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_diffusion"><strong>Diffusion</strong></a> - Diffusion is the act of disolving or mixing a chemical compound through another chemical fluid, either liquid or gas, through natural convection.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_digestion"><strong>Digestion</strong></a> - The process of treating a substance: <em>Exempli gratia</em> <a href="#BDic_dna">DNA</a> with <a href="#BDic_enzyme">enzymes</a> to promote degredation into essential components.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_dikaryotic"><strong>Dikaryotic</strong></a> - Having two different and distinct nuclei per cell; found in the fungi. A dikaryotic individual is called a dikaryon.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dimer"><strong>Dimer</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_dinosteranesDinosteroids"><strong>Dinosteranes (Dinosteroids)</strong></a> - Chemicals found in dinoflagellates, which have been useful in documenting their existence early in the fossil record.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_diploid"><strong>Diploid</strong></a> - Having two different sets of chromosomes in the same nucleus of each cell. Most metazoans and plants are diploid. Compare with haploid.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_disease"><strong>Disease</strong></a> - Organisms suffer from disease when their normal function is impaired by some genetic disorder, or more often from the activity of a parasite or other organism living within them. Many diseases are caused by viruses, bacteria, or fungi.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="CDic_disolution"><strong>Disolution</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dissociationConstant"><strong>Dissociation Constant</strong></a> - The inverse or opposite of the <a href="#BDic_associationConstant">association constant</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_diversity"><strong>Diversity</strong></a> - Term used to describe numbers of taxa, or variation in morphology.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_division"><strong>Division</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="biochem" data-src="origDereck">
                                    <a class="dicWord" data-category="biochem" id="BDic_doubleInverse"><strong>Double inverse/Lineweaver-Burk plot/double reciprocal plot</strong></a> - A graphical reprsentation of the Lineweaver-Burk equation used in enzyme cinetics. The plot allows us to derive useful information as to the nature of a <a href="#BDic_michaelisMentenKinetics">Michaelis-Menten</a> type reaction. The reciprocal of the formula is the following:
                                        <div class="mathsFormula">
                                            $$
                                                V = \frac{V_{max}[S]}{K_m + [S]}
                                            $$
                                            $$
                                                \frac{1}{V} = \frac{K_m + [S]}{V_{max}[S]} = \frac{K_m}{V_{max}} \cdot \frac{1}{[S]} + \frac{1}{V_{max}}
                                            $$
                                        </div>
                                        <figure>
                                            <img class="lazy" data-src="/dictionaries/documents/biology/doubleInverse1.svg">
                                            <figcaption>An example of the double inverse plot. Multiple points must be calculated from the resulting formula. The condition that varies is concetration of the substrate experimentally: 1/[s].</figcaption>
                                        </figure>
                                        <p>
                                            Note that this equation's simplified form comes out to the form Y = Ax + B. This can be described as a linear curve on a graph as shown.
                                        </p>
                                        <p>
                                            This method can be used to determine enzyme cinetics: K<sub>m</sub>, V<sub>max</sub>. The y-intercept of the graph is equivalent to the inverse of V<sub>max</sub>, and the x-intercept represents -1/KV<sub>m</sub>.
                                        </p>
                                        <figure>
                                            <img class="lazy" data-src="/dictionaries/documents/biology/doubleInverse2.gif">
                                            <figcaption>Enzyme inhibition shown using the double inverse. The different motifs formed by the curves allows us to deduce the type of inhibiton.</figcaption>
                                        </figure>
                                        <p>
                                            These representations also allow us to visualise the different forms of <a href="#BDic_inhibition">enzyme inhibition</a>.
                                        </p>
                                        <p class="smallNotes">
                                            See also: <a href="#BDic_michaelisMentenKinetics">Michaelis-Menten Kinetics</a>, and <a href="#BDic_inhibition">Enzyme inhibition</a>.
                                        </p>
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_doubleMembrane"><strong>Double Membrane</strong></a> - In mitochondria and plastids, there is a two-layered membrane which surrounds the organelle. This is believed to be the result of endosymbiosis, with the outer membrane coming from the eukaryotic cell, and the inner membrane belonging to the original prokaryote which was "swallowed".
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_doubleStranded"><strong>Double Stranded (DS)</strong></a> - Used as follows dsDNA or dsRNA, indicating that there are two <a href="#BDic_complementary">complementary</a> strands that are annealed together.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_downstream"><strong>Downstream</strong></a> - Refers to an element, reactant, or location at a later stage in a series of elements or events.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_doxycycline"><strong>Doxycycline (DOX)</strong></a> - An <a href="#BDic_inducer">inducer molecule</a> for <a href="#BDic_tetR">TetR</a>. Also see <a href="#BDic_atc">aTc</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_dysbiotic"><strong>Dysbiotic</strong></a> -
                                </li> -->

                            <h1 class="dicSection" id="theLetter_E">E</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_eColiK12"><strong><em>E. coli, Escherichia coli K12 Strain</em></strong></a> - The <a href="#BDic_strain">strains</a> based on the <a href="#BDic_eColiK12">K-12 strain</a> cannot colonise the human gut and can thus be safely used as organisms in the lab; biosafety level 1 containment, the lowest level. It is for the simple build, fast replication, and banality of the K12 strain that <em>E. coli</em> and especially the K12 strain is favoured by laboratories across the world.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_ecosystem"><strong>Ecosystem</strong></a> - All the organisms in a particular region and the environment in which they live. The elements of an ecosystem interact with each other in some way, and so depend on each other either directly or indirectly.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_ectoderm"><strong>Ectoderm</strong></a> - The outer basic layer of tissue in those animals with true tissues. In vertebrates, for instance, the embryonic ectoderm differentiates into the skin and also the nervous system.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_elater"><strong>Elater</strong></a> - A cell or part of a cell which assists in dispersing spores. The elaters change shape as they lose or acquire water, and they will then push against surrounding spores.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_electrophoresis"><strong>Electrophoresis</strong></a> - From electr(ic) and phoresis the action of carrying. The separation of ions (charged particules) by use of an electrical field. This allows for separation according to differences in mobility which is dependent on the charge/mass ratio. This technique is commonly used to separate pieces of <a href="#BDic_dna">DNA</a> or <a href="#BDic_protein">proteins</a> by size, shape, and charge. This technique can also be used for <a href="#BDic_rna">RNA</a>.
                                    <ul>
                                        <li style="list-style: none; display: inline">
                                            <p>Variants of this technique are the following:</p>
                                        </li>
                                        <li>
                                            <a href="#BDic_northernBlot">Northern Blot</a>
                                        </li>
                                        <li>
                                            <a href="#BDic_southernBlot">Southern Blot</a>
                                        </li>
                                        <li>
                                            <a href="#BDic_westernBlot">Western Blot</a>
                                        </li>
                                        <li>
                                            <a href="#BDic_2dElectrophoresis">Two Dimensional Gel Electrophoresis (2D Gel)</a>
                                        </li>
                                        <li>
                                            <a href="#BDic_capillaryElectrophoresis">Capillary Electrophoresis</a>
                                        </li>
                                        <li>
                                            <a href="#BDic_pulsedFieldElectrophoresis">Pulsed-Field Gel Electrophoresis</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_electroporation"><strong>Electroporation</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_elongation"><strong>Elongation</strong></a> - A stage in <a href="#BDic_translation">translation</a> where <a href="#BDic_aminoAcid">amino acids</a> are added by the formation of peptide bonds. <!--ADD MORE INFORMATION-->
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_embryophyte"><strong>Embryophyte</strong></a> - Synonym for the Plantae, as here defined. It includes all green photosynthetic organisms which begin the development of the sporophyte generation within the archegonium.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_enations"><strong>Enations</strong></a> - Flaps of tissue such as those found on psilophytes.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_endocytosis"><strong>Endocytosis</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_endoderm"><strong>Endoderm</strong></a> - The innermost basic layer of tissue in those animals with true tissues. Forms the gut and its derivatives: in vertebrates, these include the liver, trachea, and lungs.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_endodermis"><strong>Endodermis</strong></a> - Literally "inner skin", this is a layer of cells which surrounds the central core of vascular tissue, and which helps to regulate the flow of water and dissolved substances.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_endogenous"><strong>Endogenous</strong></a> - Present in the cell naturally.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio">
                                    <a class="dicWord" data-category="genBio" id="BDic_endonuclease"><strong>Endonuclease</strong></a> - A nuclease that cuts <strong>within</strong> a given genetic (either <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a>) sequence as compared to an <a href="#BDic_exonuclease">exonuclease</a> which cuts at the <strong>extremity</strong> of the sequence.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_endoplasmicReticulum"><strong>Endoplasmic Reticulum</strong></a> - (ER) network of membranes in eukaryotic cells which helps in control of protein synthesis and cellular organization.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_endosymbiosis"><strong>Endosymbiosis</strong></a> - When one organism takes up permanent residence within another, such that the two become a single functional organism. Mitochondria and plastids are believed to have resulted from endosymbiosis.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_endothermic"><strong>Endothermic</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_enhancer"><strong>Enhancer</strong></a> - Ameliorates <a href="#BDic_transcription">transcription</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_enthalpy"><strong>Enthalpy</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_entomophily"><strong>Entomophily</strong></a> - Seed plants which are pollinated by insects are said to be entomophilous.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_entryVector"><strong>Entry Vector</strong></a> - Part of the Gateway <a href="#BDic_dna">DNA</a> cloning system.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_envelopedVirus"><strong>Enveloped Virus</strong></a> - A <a href="#BDic_virus">virus</a> that has an outer wrapping known as an envelope. These <a href="#BDic_virus">viruses</a> are wrapped in what was before the <a href="#BDic_host">host</a>'s <a href="#BDic_lipidBilayer">plasma membrane</a> which is obtained in a process known as budding-off. Typically enveloped viruses are much weaker when exposed to the environment and need a host to survive. They do not survive on sterile surfaces.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_environment"><strong>Environment</strong></a> - The place in which an organism lives, and the circumstances under which it lives. Environment includes measures like moisture and temperature, as much as it refers to the actual physical place where an organism is found.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_enzyme"><strong>Enzyme</strong></a> - An enzyme is a complex macromolecule in the family of proteins which exhibits a biological activity; <a href="#BDic_catalysation">catalytic</a> properties.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_epidermis"><strong>Epidermis</strong></a> - The outermost layer of cells or skin. This tissue often contains specialised cells for defense, gas exchange, or secretion.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_epiphyte"><strong>Epiphyte</strong></a> - A plant which grows upon another plant. The epiphyte does not "eat" the plant on which it grows, but merely uses the plant for structural support, or as a way to get off the ground and into the canopy environment.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_epithelium"><strong>Epithelium</strong></a> - Layer of cells which lines a body cavity; cells may be ciliated or unciliated, and may be squamous (flat, scale-shaped), cuboidal (cube-shaped), or columnar (column-shaped). Your stomach and cheeks are lined with epithelium.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_epitope"><strong>Epitope (Antigenic Determinant)</strong></a> - Part of the structre of antigens, it is the smallest possible three dimensional structure to which an <a href="#BDic_antibody">antibody</a> can affix itself on said <a href="#BDic_antigen">antigens</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_equilibrium"><strong>Equilibrium</strong></a> - State at which opposing reactions in a biological system are balanced.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_eColi"><strong><em>Escherichia coli (E. coli)</em></strong></a> - A family of <a href="#BDic_bacteria">bacteria</a>. Certain <a href="#BDic_strain">strains</a> of <em>E. coli</em> are favoured by scientist in labs, most often the <a href="#BDic_eColiK12"><em>K12 strain</em></a>. Some <a href="#BDic_strain">strains</a> of <em>E. coli,</em> can be <a href="#BDic_pathogenic">pathogenic</a> to humans. They have a small, ~4.6 <a href="#BDic_basePair">megabasepair</a> circular genome, are easily <a href="#BDic_transformation">transformed</a>, and replicate fast. Cell replication can be made to be limited by controlling <a href="#BDic_dna">DNA</a> replication through predetermined growth conditions.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_esophagus"><strong>Esophagus</strong></a> - That portion of the gut which connects the pharynx to the stomach.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_euchromatin"><strong>Euchromatin</strong></a> - Euchromatin is a form of <a href="#BDic_chromatin">chromatin</a> which is most often most present in active and <a href="#BDic_transcription">transcriptionally</a> competent cells. <a href="#BDic_dna">DNA</a> is wrapped around <a href="#BDic_histone">histone</a> proteins to form what are known as nucleosomes. This DNA/protein structure resembles beads on a string.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_eukaryota"><strong>Eukaryota</strong></a> - Organisms with membrane-bound <a href="#BDic_organelle">organelles</a>, and cytoskeletons. These organisms posses a <a href="#BDic_nucleus">nucleus</a> which contains their genetic material, and is enclosed by the <a href="#BDic_nucleus">nuclear envelope</a>. Protists, plants, animals, and fungi, all fall into this domain of life.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_eustele"><strong>Eustele</strong></a> - When a plant's vascular tissue develops in discrete bundles, it is said to have a eustele. See also protostele and siphonostele.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_evolution"><strong>Evolution</strong></a> - Darwin's definition: descent with modification. The term has been variously used and abused since Darwin to include everything from the origin of man to the origin of life.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_evolutionaryTree"><strong>Evolutionary Tree</strong></a> - A diagram which depicts the hypothetical phylogeny of the taxa under consideration. The points at which lineages split represent ancestor taxa to the descendant taxa appearing at the terminal points of the cladogram.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_exon"><strong>Exon</strong></a> -
                                </li> -->
                                <li>
                                    <a class="dicWord" data-category="genBio" id="BDic_exonuclease"><strong>Exonuclease</strong></a> - A <a href="#BDic_nuclease">nuclease</a> that cuts at the end of a sequence, base by base. Compared to an <a href="#BDic_endonuclease">endonuclease</a> which cuts in the middle of a sequence.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_exoskeleton"><strong>Exoskeleton</strong></a> - An external, often hard, covering or integument that provides support and protection to the body.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_exothermic"><strong>Exothermic</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_expression"><strong>Expression</strong></a> - Expression refers the creation of something. In a biological context by convention it refers to the creation of a protein from a gene. Gene expression thus refers to the amount of a protein being produced from the gene in question.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_expressionVector"><strong>Expression Vector</strong></a> - A <a href="#BDic_dna">DNA</a> vector that expresses a <a href="#BDic_gene">gene</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_extinction"><strong>Extinction</strong></a> - When all the members of a clade or taxon die, the group is said to be extinct.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_extracellularMatrix"><strong>Extracellular Matrix</strong></a> - (ECM) Region outside of metazoan cells which includes compounds attached to the plasma membrane, as well as dissolved substances attracted to the surface charge of the cells. The ECM functions both to keep animal cells adhered together, and well as buffering them from their environment.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_extrapolation"><strong>Extrapolation</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_eyespot"><strong>Eyespot</strong></a> - Light-sensitive organelle found in many groups of protists, and in some metazoans.
                                </li>

                            <h1 class="dicSection" id="theLetter_F">F</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_facs"><strong>FACS</strong></a> - A type offlow cytometry for sorting a mixture of <a href="#BDic_cell">cells</a> into two or more containers, one <a href="#BDic_cell">cell</a> at a time, based upon the <a href="#BDic_fluorescence">fluorescent</a> characteristics of each cell. Cells can be manipulated to express <a href="#BDic_fluorescence">fluorescent</a> properties in order to sort them by FACS.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_family"><strong>Family</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_fauna"><strong>Fauna</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_feedback"><strong>Feedback</strong></a> - Occurs when outputs of a system are routed back as inputs as part of a chain. This idea is related to <a href="#BDic_autoregulation">autoregulation</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_fiber"><strong>Fiber</strong></a> - Elongated and thickened cell found in xylem tissue. It strengthens and supports the surrounding cells.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_filament"><strong>Filament</strong></a> - Long chain of proteins, such as found in hair, muscle, or in flagella.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_fission"><strong>Fission</strong></a> - Division of single-celled organisms, especially prokaryotes, in which mitosis does not occur. Also used to refer to mitosis in certain unicellular fungi.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_flagellin"><strong>Flagellin</strong></a> - protein which is the primary component of prokaryotic flagella.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_flagellum"><strong>Flagellum</strong></a> - Hair-like structure attached to a cell, used for locomotion in many protists and prokaryotes. The prokaryotic flagellum differs from the eukaryotic flagellum in that the prokaryotic flagellum is a solid unit composed primarily of the protein flagellin, while the eukaryotic flagellum is composed of several protein strands bound by a membrane, and does not contain flagellin. The eukaryotic flagellum is sometimes referred to as an undulipodium.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_flora"><strong>Flora</strong></a> - Refers to the plant type organisms of an ecosystem or region. See <a href="#BDic_fauna">fauna</a>, <a href="#BDic_biota">biota</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_flowCytometry"><strong>Flow Cytometry</strong></a> - A laser based technology employed for counting <a href="#BDic_cell">cells</a>, <a href="#BDic_cell">cell</a> sorting, and <a href="#BDic_biomarker">biomarker</a> detection. It works by suspending cells in a stream of fluid and passing them by an electronic detection apparatus.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_flower"><strong>Flower</strong></a> - Collection of reproductive structures found in flowering plants.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_fluorescence"><strong>Fluorescence</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_fluorescentMarker"><strong>Fluorescent Marker</strong></a> - <a href="#BDic_protein">Proteins</a> which <a href="#BDic_fluorescence">fluoresce</a> can be used as <a href="#BDic_Biomarker">biomarkers</a>. A classic example is <a href="#BDic_greenFluorescentProtein">Green Fluorescent Protein (GFP)</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_flux"><strong>Flux</strong></a> - The action or process of flowing in a biological system.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_foodChain"><strong>Food Chain</strong></a> - All the interactions of predator and prey, included along with the exchange of nutrients into and out of the soil. These interactions connect the various members of an ecosystem, and describe how energy passes from one organism to another.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_frugivore"><strong>Frugivore</strong></a> - Animal which primarily eats fruit. Many bats and birds are frugivores.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_fruit"><strong>Fruit</strong></a> - In flowering plants, the structure which encloses the seeds. True fruits develop from the ovary wall, such as bananas and tomatoes, though not all fruits are edible, such as the dry pods of milkweed or the winged fruits of the maple.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_frustule"><strong>Frustule</strong></a> - The mineral "skeleton" of a diatom or other unicellular organism.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_fucoxanthin"><strong>Fucoxanthin</strong></a> - yellowish-brown pigment found in some members of the Chromista, including kelps and diatoms.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_fusionProtein"><strong>Fusion Protein</strong></a> - A single <a href="#BDic_protein">protein</a> composed of two or more originally separate <a href="#BDic_protein">proteins</a>.
                                </li>

                            <h1 class="dicSection" id="theLetter_G">G</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_gal4"><strong>Gal4</strong></a> - A <a href="#BDic_dna">DNA</a> binding <a href="#BDic_protein">protein</a> derived from yeast. Commonly fused with trans-activation domains such as VP16.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_galactose"><strong>Galactose</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_galactosidase"><strong>Galactosidase (GAL)</strong></a> - Part of an <a href="#BDic_assay">assay</a> frequently used in genetics, molecular biology, and other life sciences. An active <a href="#BDic_enzyme">enzyme</a> may be detected using <a href="#BDic_xGal">X-Gal,</a> which forms an intense blue product after <a href="#BDic_cleavage">cleavage</a> by <a href="#BDic_betaGalactosidase">β-Galactosidase</a>, and is easy to identify and quantify.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_gastrodermis"><strong>Gastrodermis</strong></a> - In cnidarians, the endodermis which lines the gut cavity. The term is often used instead of endodermis since cnidarians only have two tissue layers instead of three.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_gene"><strong>Gene</strong></a> - A region of <a href="#BDic_dna">DNA</a> that encodes a functional <a href="#BDic_rna">RNA</a> or protein product. A gene is the <a href="#BDic_molecule">molecular</a> unit of <a href="#BDic_heredity">heredity</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_geneExpression"><strong>Gene Expression</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_geneOfInterest"><strong>Gene of Interest (GOI)</strong></a> - Abbreviation for <a href="#BDic_gene">gene</a> of interest.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_generalist"><strong>Generalist</strong></a> - Organism which can survive under a wide variety of conditions, and does not specialize to live under any particular set of circumstances.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_geneticallyModifiedOrganism"><strong>Genetically Modified Organism (GMO)</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_genome"><strong>Genome</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_genotype"><strong>Genotype</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_genus"><strong>Genus</strong></a> - A category in the classification of plants and animals between species and family; genera- pl.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_gibbsFreeEnergy"><strong>Gibbs Free Energy</strong></a> - A state function discovered by Josiah Willard Gibbs called Gibbs Free Energy, Free <a href="#BDic_enthalpy">Enthalpy</a>, or G. This function is written at a given temperature as such: \( \Delta G = \Delta H - T \Delta S \).
                                    <p><a href="#BDic_exothermic">Exothermic</a> reactions are instances where <a href="#BDic_heat">heat</a> is liberated from the <a href="#BDic_system">system</a>; in this case <a href="#BDic_enthalpy">enthalpy</a> is negative (Δ&lt;H). These systems are inherently unstable and thus spontaneous reactions.</p>
                                    <p><a href="#BDic_endothermic">Endothermic</a> reactions are instances where <a href="#BDic_heat">heat</a> is absorbed by the <a href="#BDic_system">system</a>; in this case <a href="#BDic_enthalpy">enthalpy</a> is positve (Δ&gt;H).</p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_gibsonAssembly"><strong>Gibson Assembly</strong></a> - <a href="#BDic_cloning">DNA cloning</a> method which allows for the joining of multiple <a href="#BDic_dna">DNA</a> fragments in a single, isothermal reaction.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_gill"><strong>Gill</strong></a> - In aquatic animals, highly vascularized tissues with large surface area; these are extended out of the body and into the surrounding water for gas exchange.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_gillArches"><strong>Gill Arches</strong></a> - Stiffenings which support the flesh between the gill slits of chordates. In most vertebrates, the first gill arches have been modified to form the jaw, and in tetrapods, the inner ear bones.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_gillSlit"><strong>Gill Slit</strong></a> - A slitlike or porelike opening connecting the pharynx of a chordate with the outside of the body. Gill slits may contain the gills and be used for gas exchange, as in most fish, but may also be used for filter-feeding, or may be highly modified in land-dwelling vertebrates.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_glucose"><strong>Glucose</strong></a> - simple sugar, and the primary product of photosynthesis. It is polymerized to make cellulose and chitin.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="bioChem" data-src="origDereck">
                                    <a class="dicWord" data-category="bioChem" id="BDic_glycosylation"><strong>Glycosylation</strong></a> - 
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="bioChem" data-src="origDereck">
                                    <a class="dicWord" data-category="bioChem" id="BDic_glycophospholipid"><strong>Glycophospholipid</strong></a> - 
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_glycoprotein"><strong>Glycoprotein</strong></a> - A membrane-bound protein which has attached branching carbohydrates. These may function in cell-cell recognition, such as in human blood groups and immune system response, as well as in resisting compression of cells.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_gnathobase"><strong>Gnathobase</strong></a> - The expanded and hardened base of the appendage of many arthropods, notably trilobites, crustaceans, and marine cheliceramorphs. Used to macerate food items before ingestion.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_goldenGate"><strong>Golden Gate</strong></a> - A <a href="#BDic_cloning">DNA cloning</a> method to simultaneously assemble multiple <a href="#BDic_dna">DNA</a> fragments into a single piece using Type IIs <a href="#BDic_restrictionEnzyme">restriction enzymes</a> and T4 DNA <a href="#BDic_ligase">ligase</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_golgiApparatus"><strong>Golgi Apparatus</strong></a> - Eukaryotic organelle which package cell products, such as enzymes and hormones, and coordinate their transport to the outside of the cell.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_gradualism"><strong>Gradualism</strong></a> - A model of evolution that assumes slow, steady rates of change. Charles Darwin's original concept of evolution by natural selection assumed gradualism. Contrast with punctuated equilibrium.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_grassland"><strong>Grassland</strong></a> - Region in which the climate is dry for long periods of the summer, and freezes in the winter. Grasslands are characterized by grasses and other erect herbs, usually without trees or shrubs. Grasslands occur in the dry temperate interiors of continents, and first appeared in the Miocene.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_greenFluorescentProtein"><strong>Green Fluorescent Protein (GFP, eGFP)</strong></a> - Green fluorescent protein. "E" denotes a newer enhanced version.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_groundwater"><strong>Groundwater</strong></a> - Water found underground as a result of rainfall, ice and snow melt, submerged rivers, lakes, and springs. This water often carries minerals. These minerals can accumulate in the remains of buried organisms and eventually cause fossilization.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_guardCells"><strong>Guard Cells</strong></a> - Pair of cells which surround a stomate and regulate its size by altering their shape.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_gutEnteron"><strong>Gut (enteron)</strong></a> - Body cavity formed between the mouth and anus in which food is digested and nutrients absorbed; it consists of the mouth, pharynx, esophagus, stomach, intestine, and anus, though some animals do not have all these regions.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_gymnosperm"><strong>Gymnosperm</strong></a> - A plant that produces seeds, which are not enclosed; includes any seed plant that does not produce flowers.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_gynostemium"><strong>Gynostemium</strong></a> - The central reproductive stalk of an orchid, which consists of a stamen and pistil fused together.
                                </li>

                            <h1 class="dicSection" id="theLetter_H">H</h1>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_habit"><strong>Habit</strong></a> - The general growth pattern of a plant. A plant's habit may be described as creeping, trees, shrubs, vines, etc.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_habitat"><strong>Habitat</strong></a> - An organism's native environment.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_hairpin"><strong>Hairpin</strong></a> - A loop structure formed in both <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a>. Common type of <a href="#BDic_conformation">secondary structure</a> in <a href="#BDic_rna">RNA molecules</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_halophile"><strong>Halophile</strong></a> - Organism which lives in areas of high salt concentration. These organisms must have special adaptations to permit them to survive under these conditions.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_haploid"><strong>Haploid</strong></a> - Having a single set of chromosomes in the nucleus of each cell. Mosses, and many protists and fungi, are haploid, as are some insects, bryophytes, and the gametes of all organisms. Contrast with diploid.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_haptonema"><strong>Haptonema</strong></a> - Peg-like structure unique to the Prymnesiophyta; its function is not known.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_hBax"><strong>hBax</strong></a> - Human <a href="#BDic_gene">gene</a> involved in the <a href="#BDic_regulation">regulation</a> of <a href="#BDic_apoptosis">apoptosis</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heLa"><strong>HeLa</strong></a> - A commonly used cell line used in scientific research derived from the cervical cancer cells of Henrietta Lacks.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_head"><strong>Head</strong></a> - That part of the body at the "front" end, where the brain, mouth, and most sensory organs are located.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_heart"><strong>Heart</strong></a> - Muscular pump which circulates the blood.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heat"><strong>Heat</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_helicase"><strong>Helicase</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_hemoglobin"><strong>Hemoglobin</strong></a> - An <a href="#CDic_iron">iron</a> containing <a href="#BDic_metalloProtein">metalloprotein</a> which is essential for bonding, transporting, and distributing oxygen throughout the body.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_hemoglobin"><strong>Hemoglobin</strong></a> - protein complex found in the blood of most chordates and the roots of certain legumes. It binds oxgen molecules, and in chordates serves as the means by which the oxygen is supplied to the cells of the body.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_herb"><strong>Herb</strong></a> - Generally any plant which does not produce wood, and is therefore not as large as a tree or shrub, is considered to be an herb.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_herbivore"><strong>Herbivore</strong></a> - Literally, an organism that eats plants or other autotrophic organisms. The term is used primarily to describe animals.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heredity"><strong>Heredity</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_herpesviridae"><strong>Herpesviridae</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heteroChromatin"><strong>Heterochromatin</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heterochromatin"><strong>Heterochromatin</strong></a> - <a href="#BDic_euchromatin">Euchromatin</a> is wrapped into 30nm strcutures to form the megastructure known as heterochromatin. Heterochromatin is most often present in cells which are inactive, <a href="#BDic_senescent">senescent</a>, or otherwise dormant. This 30nm string composes the active <a href="#BDic_chromosome">chromosome</a> during <a href="#BDic_interphase">interphase</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heterodimer"><strong>Heterodimer</strong></a> - Formed by two different <a href="#BDic_macromolecule">macromolecules</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_heterogeneous"><strong>Heterogeneous</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_heterosporangiate"><strong>Heterosporangiate</strong></a> - Producing two different kinds of sporangia, specifically microsporangia and megasporangia. Compare with heterosporous.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_heterosporous"><strong>Heterosporous</strong></a> - Producing two different sizes or kinds of spores. These may come from the same or different sporangia, and may produce similar or different gametophytes. Contrast with homosporous, and compare with heterosporangiate.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_hierarchicalComposition"><strong>Hierarchical Composition</strong></a> - Composition arranged in order or rank of hierarchy.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_hierarchy"><strong>Hierarchy</strong></a> - A series in which each element is categorized into successive ranks or grades with each level subordinate to the one above.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_histones"><strong>Histone</strong></a> - Proteins attached to the DNA of eukaryotes which allows it to be packaged into chromosomes.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_histostructure"><strong>Histostructure</strong></a> - The organization and arrangement of tissue (“histo” is from the Greek word for tissue). Since eggshell is a tissue, eggshell histostructure describes the two- and three-dimensional organization of mineral crystals and shell components.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_holdfast"><strong>Holdfast</strong></a> - Anchoring base of an alga.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_holoenzyme"><strong>Holoenzyme</strong></a> - An active form of an <a href="#BDic_enzyme">enzyme</a> that requires a <a href="#BDic_cofactor">cofactor</a> to be active.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_homeostasis"><strong>Homeostasis</strong></a> - The property of remaining stable in the face of changing external conditions. For example, maintaining a stable population of pancreatic <a href="#BDic_betaCells">β-Cells</a> despite immune system malfunction resulting in Type I diabetes an artificial homeostasis system can be acheived by <a href="#BDic_syntheticBiology">synthetic biology</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_homodimer"><strong>Homodimer</strong></a> - Formed by two <a href="#BDic_macromolecule">macromolecules</a> of the same kind.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_homogeneous"><strong>Homogeneous</strong></a> - A substance or mixture of the same or similar kind or nature, contrary to <a href="#BDic_heterogeneous">heterogeneous</a> which is a mixture of two or more unlike substances.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_homologous"><strong>Homologous</strong></a> - Refers to the similarity in <a href="#BDic_dna">DNA</a> sequences of different <a href="#BDic_dna">DNA</a> fragments or regions.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_homology"><strong>Homology</strong></a> - Two structures are considered homologous when they are inherited from a common ancestor which possessed the structure. This may be difficult to determine when the structure has been modified through descent.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_homosporous"><strong>Homosporous</strong></a> - Producing only one size or kind of spore. Contrast with heterosporous.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_hormone"><strong>Hormone</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_host"><strong>Host</strong></a> - An organism that receives and houses another. Terminology often used when referring to parasites.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_host"><strong>Host</strong></a> - Organism which serves as the habitat for a parasite, or possibly for a symbiont. A host may provide nutrition to the parasite or symbiont, or simply a place in which to live.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_hydrogenBond"><strong>Hydrogen Bond</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_hydrophilic"><strong>Hydrophilic</strong></a> - "Water loving". Hydrophilic compounds dissolve easily in water, and are usually polar.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_hydrophobic"><strong>Hydrophobic</strong></a> - "water fearing". Hydrophobic compounds do not dissolve easily in water, and are usually non-polar. Oils and other long hydrocarbons are hydrophobic.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_hypha"><strong>Hypha</strong></a> - Threadlike filaments that form the mycelium (body) of a fungus; hyphae- pl.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_hypothesis"><strong>Hypothesis</strong></a> - A concept or idea that can be falsified by various scientific methods.
                                </li>

                            <h1 class="dicSection" id="theLetter_I">I</h1>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_immuneSystem"><strong>Immune System</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_immunogenicity"><strong>Immunogenicity</strong></a> - Is the potential of a substance to induce an immune response. This depends on various factors:
                                    <ul>
                                        <li>
                                            The species and state of the animal – its genome, immunological past, and physiological state.
                                        </li>
                                        <li>
                                            The degree of structural similarity of the <a href="#BDic_antigen">antigen</a> to the <a href="#BDic_molecule">molecules</a> of the target animal.
                                        </li>
                                        <li>
                                            The dose of the injected <a href="#BDic_antigen">antigen</a>.
                                        </li>
                                        <li>
                                            The physical and chemical characteristics of the <a href="#BDic_antigen">antigen</a>:
                                            <ul>
                                                <li>
                                                    Its size it must contain at least two <a href="#BDic_epitope">epitopes</a> in order to be fixed by an <a href="#BDic_antibody">antibody</a>.
                                                </li>
                                                <li>
                                                    Its form if it is a particle or not.
                                                </li>
                                                <li>
                                                    Its rigidity in order to be <a href="#BDic_complementary">complementary</a> to other <a href="#BDic_paratope">paratopes</a>.
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_inVitro"><strong><em>In vitro</em></strong></a> - Used to refer to experiments conducted outside of a living animal. <em>Exempli gratia</em> cell cultures are often used in artificial containers to conduct experiments in controlled conditions on living cells.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_inVivo"><strong><em>In vivo</em></strong></a> - Used to refer to experiments conducted in a living animal. <em>Exempli gratia</em> mice are often used in labs to experiment on living organisms as they represent a well known and well defined mammalian analog.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_incubation"><strong>Incubation</strong></a> - In birds and reptiles, the maintaining of a constant temperature during the development of the embryo. Birds incubate their eggs by sitting on them (also called brooding),while other animals, like crocodiles, bury their eggs in organic matter. If eggs are not incubated, the embryos within those eggs generally die. Some dinosaurs may have incubated their eggs by burial in sediment, in organic matter, or by brooding like birds.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_indole"><strong>Indole</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_inducer"><strong>Inducer</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_induction"><strong>Induction</strong></a> - A system that can be induced by another <a href="#BDic_molecule">molecule</a>, called an inducer, is an inducible system. Induction is the process of activating a system.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_inflorescence"><strong>Inflorescence</strong></a> - A cluster of flowers.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_ingestion"><strong>Ingestion</strong></a> - The intake of water or food particles by "swallowing" them, taking them into the body cavity or into a vacuole. Contrast with absorption.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_ingroup"><strong>Ingroup</strong></a> - In a cladistic analysis, the set of taxa which are hypothesized to be more closely related to each other than any are to the outgroup.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_inhibition"><strong>Inhibition</strong></a> - A <a href="#BDic_molecule">molecule</a> that can cause the arrest or tamper the activity of a reaction is called an inhibitor. In the context of biology an inhibitor has a negative effect on a reaction catalysed by an enzyme. There are multiple cases into which an inhibition may be classed:
                                    <figure>
                                        <img class="lazy" data-src="/dictionaries/documents/biology/inhibitionType.svg">
                                        <figcaption>Types of inhibition, the concentration of of the inhibitor is the only thing that changes.</figcaption>
                                    </figure>
                                    <ul>
                                        <li>
                                            Competitive inhibition: K<sub>m</sub> increased, V<sub>max</sub> unaffected. The inhibitor matches the active site and fixes itself there.
                                        </li>
                                        <li>
                                            Un-competitive inhibition: K<sub>m</sub> reduced, V<sub>max</sub> reduced. The inhibitor matches a zone close to the active site and thus impedes the substrate from fixing itself there.
                                        </li>
                                        <li>
                                            Non-competitive: K<sub>m</sub> unaffected, V<sub>max</sub> reduced. The inhibtor fixes itself somewhere else on the enzyme and changes the conformation of the active site.
                                        </li>
                                    </ul>
                                    <p class="smallNotes">
                                        See also: <a href="#BDic_doubleInverse">Double inverse</a>.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_initiation"><strong>Initiation</strong></a> - The first step or the in protein <a href="#BDic_translation">translation</a> ie, converting <a href="#BDic_mRna">mRNA</a> to an <a href="#BDic_polyPeptide">polypeptide</a> chain.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_inorganic"><strong>Inorganic</strong></a> - Not containing carbon. Not from living things, e.g., minerals, water, oxygen, etc.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_inputFluorescentProtein"><strong>Input Fluorescent Protein (IFP)</strong></a> - A fluorescent reporter for a system's input.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_insulator"><strong>Insulator</strong></a> - Genetic boundary element that blocks interaction on a region of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_integrase"><strong>Integrase</strong></a> - An <a href="#BDic_enzyme">enzyme</a> that <a href="#BDic_catalysation">catalyses</a> the integration of a fragment of <a href="#BDic_dna">DNA</a> into another part of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_integration"><strong>Integration</strong></a> - The event of a <a href="#BDic_dna">DNA</a> fragment incorporating into another part of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_integrin"><strong>Integrin</strong></a> - adhesive protein of the extracellular matrix in animals.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_interface"><strong>Interface</strong></a> - A part where two systems or parts interact.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_internode"><strong>Internode</strong></a> - The region of a stem between two nodes, when there is no branching of the vascular tissue.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_interphase"><strong>Interphase</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_intertidal"><strong>Intertidal</strong></a> - The coastal zone measuring from the lowest to the highest tide mark. The intertidal zone is subject to alternating periods of flooding and drying.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_intestine"><strong>Intestine</strong></a> - The portion of the digestive tract between the stomach and anus; it is the region where most of the nutrients and absorbed.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_intron"><strong>Intron</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_ion"><strong>Ion</strong></a> - An atom or small molecule which carries a positive or negative charge.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_iptg"><strong>IPTG (Isopropyl β-D-1-thiogalactopyranoside)</strong></a> - An <a href="#BDic_inducer">inducer molecule</a> for <a href="#BDic_lacI">LacI</a>. Mimics allolactose, a product from the metabolism of lactose (<em>id est</em> a <a href="#BDic_metabolite">metabolite</a>).
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="CDic_iron"><strong>Iron</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_isogenic"><strong>Isogenic</strong></a> - Organisms that have the same or closely similar <a href="#BDic_genotype">genotype</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_isomer"><strong>Isomer</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_isotopicAnalysis"><strong>Isotopic Analysis</strong></a> - The study of the geochemistry of stable isotopes in naturally occurring sediments and biological structures. Stable isotopes are atomic variations of elements that are stable over long periods of time, meaning they do not radioactively decay. Several elements, like oxygen and carbon, have several stable forms. Oxygen, for example, occurs in nature as <sup>16</sup>O and <sup>18</sup>O — these two forms are isotopes. They have different numbers of neutrons (<sup>16</sup>O has two more neutrons than <sup>18</sup>O), and and is therefore heavier. Because the two isotopes have different masses, chemical and physical reactions like bonding, evaporation, and precipitation occur at different frequencies. The ratio of stable isotopes is preserved in chemical compounds like water, ice, and calcium carbonate and provides information on the environmental conditions at the time the compound formed. For example, the ratio of <sup>18</sup>O/<sup>16</sup>O in an ice sample is linked to the water temperature of ancient oceans, which in turn reflects ancient climates.
                                </li>

                            <h1 class="dicSection" id="theLetter_J">J</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_jAnusKinase"><strong>JAnus Kinase (JAK)</strong></a> <span class="BDic_etymology">Janus from Latin and refrencing the two faced god</span>; allusion to the presence of a kinase domain and a pseudokinase domain. The JAK enzyme is part of the cytosolic 4 tryosine kinase familly. <!--Finish-->
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_jaw"><strong>Jaw</strong></a> - Often loosely applied to any movable, toothed structures at or near the mouth of an animal, such as the scolecodonts of annelids. In vertebrates, the jaw is derived from the first gill arch.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_jointed"><strong>Jointed</strong></a> - When stiff body parts are connected by a soft flexible region, the body is said to be jointed.
                                </li>

                            <h1 class="dicSection" id="theLetter_K">K</h1>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_kanamycinResistance"><strong>KanR</strong></a> - A <a href="#BDic_gene">gene</a> which confers resistance to <a href="#BDic_kanamycin">kanamycin</a>.
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_kanamycin"><strong>Kanamycin</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_kelpForest"><strong>Kelp Forest</strong></a> - Marine ecosystem dominated by large kelps. These forests are restricted to cold and temperate waters, and are most common along the western coasts of continents. Kelp forests first appeared in the Miocene.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_kiloBase"><strong>Kilobase (kb)</strong></a> - A set of one thousand <a href="#BDic_nitrogenousBase">DNA bases</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_kinase"><strong>Kinase</strong></a> - An <a href="#BDic_enzyme">enzyme</a> that adds a <a href="#BDic_phosphateGroup">phosphate group</a> to some chemical moiety. For <a href="#BDic_enzyme">enzymes</a>, the resulting change in <a href="#BDic_phosphorylation">phosphorylation</a> state can change the activity of the <a href="#BDic_enzyme">enzyme</a> (reduce or increase it, change the substrate <a href="#BDic_affinity">affinity</a>, or change the reaction being <a href="#BDic_catalysation">catalysed</a>). For <a href="#BDic_dna">DNA</a>, a phosphate on the <a href="#BDic_5Prime">5'</a> end of a piece of <a href="#BDic_dna">DNA</a> is required for it to be ligated to another piece of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_knockout"><strong>Knockout</strong></a> - The removal of a <a href="#BDic_gene">gene</a>. A knockout (KO) organism is used as a lab testbed which is lacking a gene which we want to experiment with.
                                </li>

                            <h1 class="dicSection" id="theLetter_L">L</h1>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_labile"><strong>Labile</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_laMedium"><strong>LA Medium</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lacI"><strong>LacI</strong></a> - A <a href="#BDic_gene">gene</a> encoding for the Lac repressor. In the absence of <a href="#BDic_lactose">lactose</a>, the Lac repressor halts production of the <a href="#BDic_enzyme">enzymes</a> encoded by the <a href="#BDic_lacOperon">lac operon</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lacOperon"><strong>Lac Operon</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lacZ"><strong>LacZ</strong></a> - A <a href="#BDic_gene">gene</a> that encodes for <a href="#BDic_betaGalactosidase">β-Galactosidase</a>, which <a href="#BDic_cleavage">cleaves</a> <a href="#BDic_lactose">lactose</a> into <a href="#BDic_glucose">glucose</a> and <a href="#BDic_galactose">galactose</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lactose"><strong>Lactose</strong></a> - A sugar molecule, disacharide, composed of two different sugars: galactose and glucose. These two are linked by a β-1 → 4 glycosidic bond.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_lamina"><strong>Lamina</strong></a> - Any broad and flattened region of a plant or alga, which allows for increased photosynthetic surface area.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_laminarin"><strong>Laminarin</strong></a> - a beta-glucan polysaccharide produced by many chromists through photosynthesis.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lasI"><strong>LasI</strong></a> - Part of the Las <a href="#BDic_quorumSensing">quorum sensing</a> system. It binds to <a href="#BDic_lasR">LasR</a> to regulate several <a href="#BDic_gene">genes</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lasR"><strong>lasR</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_leaf"><strong>Leaf</strong></a> - An organ found in most vascular plants; it consists of a flat lamina (blade) and a petiole (stalk). Many flowering plants have additionally a pair of small stipules near the base of the petiole.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_leafTrace"><strong>Leaf Trace</strong></a> - The strand of vascular tissue which connects the leaf veins to the central vascular system of the stem.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_leaflet"><strong>Leaflet</strong></a> - In a compound leaf, the individual blades are called leaflets.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_librigenae"><strong>Librigenae</strong></a> - The "free cheeks"; separate, detachable portions of the trilobite cephalon.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ligand"><strong>Ligand</strong></a> - A <a href="#BDic_molecule">molecule</a> (often small) that binds something (often much larger than the ligand) in a specific way. For example, an <a href="#BDic_inducer">inducer molecule</a> that binds a <a href="#BDic_transcriptionFactor">transcription factor</a> is a ligand and caffeine is a ligand for a caffeine-specific <a href="#BDic_rna">RNA</a> <a href="#BDic_aptamer">aptamer</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_5'phosphate">
                                    <a class="dicWord" data-category="genBio" id="BDic_ligase"><strong>Ligase, Ligation</strong></a> - A ligase is an <a href="#BDic_enzyme">enzyme</a> that <a href="#BDic_catalysation">catalyses</a> the formation of a covalent bond between large <a href="#BDic_molecule">molecules</a>, <em>exempli gratia</em> <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a>, for which it catalyses the formation of the phosphodiester bond in the backbone of the nucleic acid <a href="#BDic_polymer">polymer</a> Ligases can use single-stranded or <a href="#BDic_doubleStrand">double-stranded</a> (more common) <a href="#BDic_dna">DNA</a> (or even <a href="#BDic_rna">RNA</a>) as the <a href="#BDic_substrate">substrate</a> but are often <a href="#BDic_substrate">substrate</a> to the type of <a href="#BDic_substrate">substrate</a>, while not being sequence-specific. All commonly used ligases require a <strong>5' phosphate</strong> group on the <a href="#BDic_substrate">substrate</a>, which is absent from most synthetic <a href="#BDic_oligonucleotide">oligonucleotides</a> and thus have to be specifically ordered as such or enzymatically phosphorylated with a <a href="#BDic_pnk">poly-nucleotide kinase (PNK)</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_5'phosphate">
                                    <a class="dicWord" data-category="genBio" id="BDic_ligation"><strong>Ligation</strong></a> - The act of joining to separate objects or components together. See <a href="#BDic_ligase">ligase</a> for information on the joining of <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_limnology"><strong>Limnology</strong></a> - The study of river system ecology and life.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_lineage"><strong>Lineage</strong></a> - Any continuous line of descent; any series of organisms connected by reproduction by parent of offspring.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_linker"><strong>Linker</strong></a> - A linker sequence is inserted between two <a href="#BDic_protein">proteins</a> in a translational fusion in order to allow the two proteins to fold independently. This sequence is typically made of glycines and/or lysines, which are relatively flexible residues, forming a loose chain between the two <a href="#BDic_protein">protein</a> domains.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lipidBilayer"><strong>Lipid Bilayer</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_lipids"><strong>Lipids</strong></a> - a class of biochemical compounds which includes fats, oils, and waxes.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_litter"><strong>Litter</strong></a> - Leaf litter, or forest litter, is the detritus of fallen leaves and bark which accumulate in forests.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_load"><strong>Load (Loading)</strong></a> - A load is a downstream element of a system <em>exempli gratia</em> binding sites for a <a href="#BDic_regulation">regulatory</a> <a href="#BDic_protein">protein</a> that interacts with upstream elements and has an effect on the circuit function.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_loadDriver"><strong>Load Driver</strong></a> - A device used to engineer modularity in biological networks by mitigating <a href="#BDic_retroactive">retroactivity</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_logicGate"><strong>Logic Gate</strong></a> - An element implementing the notion of digital logic. <em>Exempli gratia</em> an AND gate. The behavior of a logic gate can be shown in a simple diagram known as a truth table; search for the name of your particular logic gate + truth table.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_lophophore"><strong>Lophophore</strong></a> - Complex ring of hollow tentacles used as a feeding organ. The tentacles are covered by cilia, which generate a current to bring food particles into the mouth. The structure is only found in the brachiopods, phoronids, and bryozoans.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_lorica"><strong>Lorica</strong></a> - A vase-shaped or cup-shaped outer covering. Found in many protists, including some flagellates, ciliates, chrysophytes, and choanoflagellates, as well as in some animal cells.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_loxSite"><strong>Lox Site</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_luciferase"><strong>Luciferase</strong></a> - enzyme which activates luciferin to produce bioluminescence.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_luciferin"><strong>Luciferin</strong></a> - compound whose activated form emits light.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_luxSystem"><strong>Lux System (LuxI/LuxR)</strong></a> - A family of cell density responsive <a href="#BDic_transcription">transcriptional</a> regulators that act as a <a href="#BDic_quorumSensing">quorum sensing</a> system in <a href="#BDic_bacteria">bacteria</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_lysogenyBroth"><strong>Lysogeny Broth</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_lysosome"><strong>Lysosome</strong></a> - Eukaryotic organelle which carries digestive enzymes. The lyzosome fuses with a vacuolar membrane containing ingested particles, which are then acted upon by the enzymes.
                                </li>

                            <h1 class="dicSection" id="theLetter_M">M</h1>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_mTOC"><strong>MTOC</strong></a> - (microtubule organizing center) MTOCs are bundles of protein tubes which may be found at the base of a eukaryotic flagellum. In animals, they also function in creating the arrays of microtubules that pull the chromosomes apart during mitosis.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_machine"><strong>Machine</strong></a> - A set of parts that use energy to perform an action. A biological example is <a href="#BDic_transcription">transcriptional</a> machinery: a set of <a href="#BDic_protein">proteins</a> harness the energy of nucleotide triphosphate bonds to polymerize <a href="#BDic_rna">RNA</a> transcripts.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_macro"><strong>Macro</strong></a> - A prefix coming from <!-- --> denoting a large scale.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_macromolecule"><strong>Macromolecule</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_macroscopic"><strong>Macroscopic</strong></a> - Objects or organisms that are large enough to be seen with the naked eye.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_magnoliid"><strong>Magnoliid</strong></a> - Any member of the basal assemblage of flowering plants.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_mammilla"><strong>Mammilla</strong></a> - In eggshell, the cone-like structure at the base of the shell unit where the shell unit attaches to the inner organic membrane.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_mannoxylic"><strong>Mannoxylic</strong></a> - Wood in which there is a great deal of parenchyma tissue among the xylem is called mannoxylic. Cycads and pteridosperms have mannoxylic wood. Contrast with pycnoxylic.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_marine"><strong>Marine</strong></a> - Refers to the ocean.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_marker"><strong>Marker</strong></a> - In the context of <a href="#BDic_dna">DNA</a> assembly, a <a href="#BDic_gene">gene</a> that enables the screening or selection of <a href="#BDic_bacteria">bacteria</a> containing our desired marker. This could be a <a href="#BDic_gene">gene</a> that is toxic to the cell (negative selection; <em>exempli gratia</em> <a href="#BDic_ccdB">ccdB</a>), a <a href="#BDic_gene">gene</a> that confers antibiotic resistance (positive selection; <em>exempli gratia</em> <a href="#BDic_kanamycinResistance">KanR</a>), or a <a href="#BDic_gene">gene</a> that turns the bacterial colonies some colour (<em>exempli gratia</em> <a href="#BDic_lacZ">LacZ</a>, or a <a href="#BDic_fluorescence">fluorescent</a> protein such as <a href="#BDic_rfp">RFP</a>).
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_marsupial"><strong>Marsupial</strong></a> - A mammal that gives live birth to young that have gestated for only a short period of time. The young usually crawl into a pouch (the marsupium) or protected area and attach to their mother’s teat to finish developing. Examples of marsupials include kangaroos, opossums, and koalas.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="CDic_mass"><strong>Mass</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_massActionKinetics"><strong>Mass-Action Kinetics</strong></a> - A method of modelling chemical reaction rates. In this kinetic scheme, the rate of a reaction is proportional to the product of the <a href="#BDic_concentration">concentrations</a> of reacting species.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_masterEquation"><strong>Master Equation</strong></a> - A form of chemical kinetic equation that describes the time evolution of all possible states of a chemical system. Master equations are commonly used in stochastic simulations in conjunction with the Gillespie algorithm simulations.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_mastigoneme"><strong>Mastigoneme</strong></a> - Small hair-like filaments found on the "hairy" flagellum of the Chromista.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_megaspore"><strong>Megaspore</strong></a> - In plants which are heterosporous, the larger kind of spore is called a megaspore; it usually germinates into a female (egg-producing) gametophyte. Contrast with microspore.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_meltingTemperature"><strong>Melting Temperature</strong></a> - Melting temperature is referring the the dehybridisation temperature of <a href="#BDic_dna">DNA</a> primers (most often). For calculating these temperatures, which are to be used when designating a <a href="#BDic_pcr">PCR</a> protocol, the following formulas are to be used:
                                    <p class="mathsDescription">
                                        For primers with a length inferiour to 14 nt the following is used:
                                    </p>
                                    <div class="mathsFormulas" id="meltingTempDNA">
                                        $$ Tm = (n(A) + n(T)) \cdot 2 + (n(G) + n(C)) \cdot 4 $$
                                    </div>
                                    <p class="mathsDescription">
                                        For primers with a length superiour to 13 nt the following is used:
                                    </p>
                                    <div class="mathsFormulas" id="meltingTempDNA">
                                        $$ Tm = 64.9 + 41 \cdot \frac{(n(G) + n(C) - 16.4)}{(n(A) + n(T) + n(G) + n(C))} $$
                                    </div>
                                    <p class="mathsDescription">
                                        Both these formulas assume the following: 50 nM primer, 50 mM Na+, and pH 7.0. n(x) designates the number of whichever base.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_membrane"><strong>Membrane</strong></a> - In biology, a boundary layer inside or around a living cell or tissue.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_membraneBound"><strong>Membrane Bound</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_meristem"><strong>Meristem</strong></a> - Group of undifferentiated cells from which new tissues are produced. Most plants have apical meristems which give rise to the primary tissues of plants, and some have secondary meristems which add wood or bark.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_merophytes"><strong>Merophytes</strong></a> - Group of cells which have all been produced from the same initial cell. Leaves and stems in particular are often built from specific patterns of merophytes.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_mesoderm"><strong>Mesoderm</strong></a> - In animals with three tissue layers (i.e. all except sponges and cnidarians), the middle layer of tissue, between the ectoderm and the endoderm. In vertebrates, for instance, the mesoderm forms the skeleton, muscles, heart, spleen, and many other internal organs.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_mesogloea"><strong>Mesogloea</strong></a> - Jellylike material between the outer ectoderm and the inner endoderm of cnidarians. May be very thin or may form a thick layer (as in many jellyfish).
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_mesokaryotic"><strong>Mesokaryotic</strong></a> - Nuclear condition unique to the dinoflagellates in which the chromosomes remain permanently condensed.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_metabolism"><strong>Metabolism</strong></a> - The chemical processes within an organic body that supply the energy necessary for life. The rate of metabolic processes is sometimes used as a way to differentiate organisms. For example, mammals generally have a higher metabolism than reptiles and can thus sustain higher levels of activity for longer periods of time.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_metabolite"><strong>Metabolite</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_metalloProtein"><strong>Metalloprotein</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_methylation"><strong>Methylation</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_michaelisMentenKinetics"><strong>Michaelis-Menten Kinetics</strong></a> - A chemical kinetic scheme for describing the rate of an <a href="#BDic_enzyme">enzyme</a>-<a href="#BDic_catalysation">catalysed</a> processes. It relates the rate of reaction rate V at which the product [P] is formed, to the depletion of the substrate [S] from which it is produced. These are linked by K<sub>m</sub> the Michaelis constant, which corresponds to the substrate [S] concentration at which the speed v is half the v<sub>max</sub>.
                                    <p>
                                        There are a few terms to take into consideration before attacking the formula: v<sub>max</sub> is the maximal speed at which the reaction will take place, (v<sub>max</sub>/2) is half maximal speed, which brings us to k<sub>m</sub> or the substrate concentration at which the rate of reaction will half speed.
                                    </p>
                                    <figure>
                                        <img class="lazy" data-src="/dictionaries/documents/biology/michaelisMenten.svg">
                                        <figcaption>A curve demonstrating a generique enzyme substrate reaction. The graph shows, a reaction rate/speed (<em>concentration/s</em>), in relation to a substrate concentration.</figcaption>
                                    </figure>
                                    <div class="mathsFormulas">
                                        $$
                                            \nu = \frac{d[P]}{dt} = \frac{V_{max} [S]}{K_m + [S]}
                                        $$
                                    </div>
                                    <p>
                                        k<sub>m</sub> can be isolated in the following way:
                                    </p>
                                    <div class="mathsFormulas">
                                        $$
                                            km = \frac{V_{max}[S] - \nu[S]}{\nu}
                                        $$
                                    </div>
                                    <ol class="mathsDescription">
                                        <p>
                                            Its simplest formulation considers three processes:
                                        </p>
                                        <li>
                                            The binding of substrate to enzyme
                                        </li>
                                        <li>
                                            The unbinding of the substrate-enzyme complex
                                        </li>
                                        <li>
                                            The conversion of the enzyme-substrate complex to the product and the enzyme
                                        </li>
                                    </ol>
                                    <p>
                                        Using <a href="#BDic_massActionKinetics">mass-action kinetics</a> and the assumption that <a href="#BDic_enzyme">enzyme</a> <a href="#BDic_concentration">concentrations</a> are much smaller than substrate <a href="#BDic_concentration">concentrations</a>, we get an equation for the rate of product (P) production (initial velocity); where <span class="mathsDescription">V<sub>max</sub></span> is the maximal velocity (saturating substrate conditions) and <span class="mathsDescription">K<sub>m</sub></span> is the Michaelis constant (the substrate <a href="#BDic_concentration">concentration</a> at half-maximal velocity). More complex <a href="#BDic_michaelisMentenKinetics">Michaelis-Menten</a> formulations must be used if the release of the product from the enzyme-product complex is slow, ordered-binding is required, or <a href="#BDic_inhibitor">inhibitors</a> are present.
                                    </p>
                                    <p class="smallNotes">
                                        See also: <a href="#BDic_doubleInverse">Double inverse</a>
                                    </p>
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_microOrganism"><strong>Microorganism</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_microphyll"><strong>Microphyll</strong></a> - A kind of leaf, specifically one which has a single, unbranched vein in it. Microphylls are only found in the lycophytes.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_microscopic"><strong>Microscopic</strong></a> - Objects or organisms that are too small to be seen with the naked eye.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_microspore"><strong>Microspore</strong></a> - In plants which are heterosporous, the smaller kind of spore is called a microspore; it usually germinates into a male (sperm-producing) gametophyte. Contrast with megaspore.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_microstructure"><strong>Microstructure</strong></a> - In eggshell, the shape, size, orientation, and distribution of components of the shell.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_microtubules"><strong>Microtubules</strong></a> - Type of filament in eukaryotic cells composed of units of the protein tubulin. Among other functions, it is the primary structural component of the eukaryotic flagellum.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_microvilli"><strong>Microvilli</strong></a> - Thin fingerlike protrusions from the surface of a cell, often used to increase absorptive capacity or to trap food particles. The "collar" of choanoflagellates is actually composed of closely spaced microvilli.
                                </li>                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_miRNA"><strong>miRNA</strong></a> - A micro <a href="#BDic_rna">RNA</a> is a functional <a href="#BDic_rna">RNA</a> that can <a href="#BDic_inhibitor">inhibit</a> the expression of a <a href="#BDic_gene">gene</a> by either <a href="#BDic_inhibitor">inhibiting</a> <a href="#BDic_translation">translation</a> through mostly unknown mechanisms, or destabilising the <a href="#BDic_mRna">mRNA</a> through the use of <a href="#BDic_enzyme">enzymes</a> in the <a href="#BDic_rnaI">RNA interference (RNAi)</a> pathway. Not all organisms have the <a href="#BDic_rnaI">RNAi</a> pathway. Notable exclusions are all <a href="#BDic_prokaryota">prokaryotes</a> and <a href="#BDic_sCerevisiae">baker's yeast, <em>S. cerevisiae</em></a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_mKate"><strong>mKate</strong></a> - A far-red <a href="#BDic_fluorescentMarker">fluorescent protein</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_minimalOrganism"><strong>Minimal Organism</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_modRna"><strong>modRNA</strong></a> - Modified <a href="#BDic_mRna">mRNA</a>. Synthetic, chemically-modified <a href="#BDic_mRna">mRNA</a> that can be transfected into <a href="#BDic_cell">cells</a> to induce expression of a <a href="#BDic_protein">protein</a> of interest. Chemical modifications at the <a href="#BDic_5Prime">5'</a> end allow the <a href="#BDic_transcription">transcript</a> to evade harmful immune responses and prevent it from being degraded thus allowing prolonged protein expression.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_mRna"><strong>mRNA</strong></a> - Messenger RNA is a functional <a href="#BDic_rna">RNA</a> comprising <a href="#BDic_codon">codons</a> to be <a href="#BDic_translation">translated</a> by <a href="#BDic_ribosome">ribosomes</a> to <a href="#BDic_protein">proteins</a>. In eukaryotic systems, mRNA that has not been processed is referred to as precursor mRNA (pre-mRNA). This pre-mRNA is typically processed through the removal of <a href="#BDic_intron">introns</a>, the addition of a <a href="#BDic_polyATail">polyA tail</a>, and the addition of a <a href="#BDic_5PrimeCap">5' cap</a> to create mature mRNA. Matured mRNA is what is translated by <a href="#BDic_ribosome">ribosomes</a>.
                                    <ol>
                                        <li style="list-style: none; display: inline">
                                            <p>Mature Messenger RNA or mRNA has undergone the following steps.</p>
                                        </li>
                                        <li>
                                            <a href="#BDic_intron">Introns</a> have been removed.
                                        </li>
                                        <li>A <a href="#BDic_PolyATail">PolyA tail</a> has been added to the <a href="#BDic_3Prime">3'</a> end.
                                        </li>
                                        <li>A <a href="#BDic_5PrimeCap">5' cap</a> has been added to the <a href="#BDic_5Prime">5'</a> end.
                                        </li>
                                    </ol>
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_mitochondrion"><strong>Mitochondrion</strong></a> - Complex organelle found in most eukaryotes; believed to be descended from free-living bacteria that established a symbiotic relationship with a primitive eukaryote. Mitochondria are the site of most of the energy production in most eukaryotes; they require oxygen to function. See: double membrane.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_mitosis"><strong>Mitosis</strong></a> - The process of nuclear division in eukaryotes. It is one step in cytokinesis, or cellular division.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_moClo"><strong>MoClo</strong></a> - Modular cloning (MoClo) a hierarchical <a href="#BDic_dna">DNA</a> assembly method built on <a href="#BDic_goldenGate">Golden Gate</a> technology. The use of a parts with standardised cloning sequences creates MoClo modularity. This modularity permits the automated construction of many MoClo constructs.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_molecule"><strong>Molecule</strong></a> - A molecule is a chemical compound composed of two or more atoms joined together by a <a href="#CDic_colvalentBond">covalent bond</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_monomer"><strong>Monomer</strong></a> - The basic unit of a <a href="#BDic_polymer">polymer</a>; monomers compose up polymers. A <a href="#BDic_nucleotide">nucleotide</a> is the <a href="#BDic_monomer">monomer</a> of a strand of <a href="#BDic_dna">DNA</a>, which is a <a href="#BDic_polymer">polymer</a> of <a href="#BDic_dna">desoxyribonucleic acids</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_monophyletic"><strong>Monophyletic</strong></a> - Term applied to a group of organisms which includes the most recent common ancestor of all of its members and all of the descendants of that most recent common ancestor. A monophyletic group is called a clade. More?
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_monotreme"><strong>Monotreme</strong></a> - A mammal that lays eggs rather than giving live birth. Though laying eggs is a primitive reptilian trait, monotremes share many morphological, physiological, and reproductive characteristics with other mammals, making them true mammals. Extant monotremes include the duck-billed platypus and echidna.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_monsoonal"><strong>Monsoonal</strong></a> - Describes a climate pattern with a wind system that changes direction with the seasons; this pattern is dominant over the Arabian Sea and Southeast Asia.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_morphology"><strong>Morphology</strong></a> - The form and structure of anything, usually applied to the shapes, parts, and arrangement of features in living and fossil organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_motif"><strong>Motif</strong></a> - A commonly-reproduced pattern that has a similiar function across multiple systems. Examples of regulatory network motifs are negative <a href="#BDic_autoregulation">autoregulation</a> and <a href="#BDic_ffl">feed-forward loops</a>. <a href="#BDic_nucleotide">Nucleotide</a> sequence motifs are commonly-found sequences of nucleotides that may serve as <a href="#BDic_transcriptionFactor">transcription factor</a> binding sites. <a href="#BDic_aminoAcid">Amino acid</a> sequence motifs may reproduce common <a href="#BDic_protein">protein</a> structures such as <a href="#BDic_alphaHelix">alpha helices</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_mouth"><strong>Mouth</strong></a> - Front opening of the digestive tract, into which food is taken for digestion. In flatworms, the mouth is the only opening into the digestive cavity, and is located on the "belly" of the worm.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_mucus"><strong>Mucus</strong></a> - Sticky secretion used variously for locomotion, lubication, or protection from foreign particles.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_multicellular"><strong>Multicellular</strong></a> - Any organism which is composed of many cells is termed multicellular.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_multimer"><strong>Multimer</strong></a> - A <a href="#BDic_protein">protein</a> made up of multiple <a href="#BDic_monomer">monomers</a>. Notably, many <a href="#BDic_transcriptionFactor">transcription factor</a> are active only in their multimeric form. Multimerisation allows the emergence of cooperativity.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_multipleCloningSite"><strong>Multiple Cloning Site (MCS)</strong></a> - A designed stretch of <a href="#BDic_dna">DNA</a> with recognition sites for many common <a href="#BDic_restrictionEnzyme">restriction enzymes</a>. This region allows for the easy design, management, and <a href="#BDic_cloning">cloning</a> of <a href="#BDic_dna">DNA</a> into larger environments, such as <a href="#BDic_plasmid">plasmids</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_muscle"><strong>Muscle</strong></a> - Bundle of contractile cells which allow animals to move. Muscles must act against a skeleton to effect movement.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_mycorrhizae"><strong>Mycorrhizae</strong></a> - Symbiotic association between a fungus and the roots or rhizoids of a plant.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_myotome"><strong>Myotome</strong></a> - Segment of the body formed by a region of muscle. The myotomes are an important feature for recognizing early chordates.
                                </li>

                            <h1 class="dicSection" id="theLetter_N">N</h1>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_nanometer"><strong>Nanometer</strong></a> - A unit of measure; one millionth (10<sup>-9</sup>) of a meter.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_negativeAutoregulation"><strong>Negative Autoregulation</strong></a> - A common regulatory network motif where the result of a process represses itself. An example would a repressor that represses its own <a href="#BDic_transcription">transcription</a>. Negative autorgulation can be harnessed to achieve faster convergence to steady state without the energetic waste of increased degradation i.e. <a href="#BDic_positveAutoregulation">positive autoregulation</a>. It can also increase the stability of a species <a href="#BDic_concentration">concentrations</a> or induce oscillations depending on parameters.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_nematocyst"><strong>Nematocyst</strong></a> - Older name for a cnidocyst.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_nerve"><strong>Nerve</strong></a> - A bundle of neurons, or nerve cells. More properly, it is a bundle of axons.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_nerveCord"><strong>Nerve Cord</strong></a> - Primary bundle of nerves in chordates, which connects the brain to the major muscles and organs of the body.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_network"><strong>Network</strong></a> - A group of two or more interacting <a href="#BDic_subUnit">sub-units</a>. Each <a href="#BDic_subUnit">sub-units</a> is called a node and the interactions between nodes are termed edges. Networks can be used to describe many different systems. <a href="#BDic_protein">Protein-protein</a> interaction networks have <a href="#BDic_protein">proteins</a> as nodes and the edges between them can be binding interactions. Microbiome studies may describe microbial species as nodes and define the edges as influences on growth rate.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_neuron"><strong>Neuron</strong></a> - A specialised cell that can react to stimuli and transmit impulses. A neuron consists of a body which contains the nucleus; dendrites, which are short branches off the body that receive incoming impulses; and a long axon which carries impulses away from the body and to the next neuron.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_neurotoxin"><strong>Neurotoxin</strong></a> - poison which interferes with nerve function, usually by affecting the flow of ions through the cell membrane.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_nextGenSequencing"><strong>Next Gen Sequencing</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_niche"><strong>Niche</strong></a> - The portion of the environment that a species occupies, defined in terms of the conditions under which an organism can survive, and the presence of other competing organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_nitrogenFixation"><strong>Nitrogen Fixation</strong></a> - The conversion of gaseous nitrogen into a form usable by plants. Ususally by bacteria.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_nitrogenousBase"><strong>Nitrogenous Base</strong></a> - A Nitrogen organic containing <a href="#BDic_molecule">molecule</a>, chemically is <a href="#BDic_base">basic</a> and is used in the structure of genetic material <a href="#BDic_dna">DNA</a> and <a href="#BDic_rna">RNA</a>; those used in heredity and biology are known as: <strong>A (Adenine), G (Guanine), T (Thymine), C (Cytosine), and U (Uracil) [used in RNA instead of T]</strong>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_nocturnal"><strong>Nocturnal</strong></a> - Active only at night.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_node"><strong>Node</strong></a> - The region of a stem between two internodes, where there is branching of the vascular tissue into leaves or other appendages.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_node"><strong>Node</strong></a> - The smallest <a href="#BDic_subUnit">sub-units</a> of a particular network.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_northernBlot"><strong>Northern Blot</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_notochord"><strong>Notochord</strong></a> - Characteristic of chordates, the notochord is a stiff rod of tissue along the back of the body. In vertebrates, the backbone is deposited around the notochord and nerve cord.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_nuclearMembrane"><strong>Nuclear Membrane</strong></a> - The double membrane which surrounds the eukaryotic nucleus. It has many pores in its surface which regulate the flow of large compounds into and out of the nucleus.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_nuclease"><strong>Nuclease</strong></a> - An <a href="#BDic_enzyme">enzyme</a> that creates a cut in the <a href="#BDic_dna">DNA</a> <a href="#BDic_backbone">backbone</a>; <a href="#BDic_rna">RNA</a> in some cases. Some <a href="#BDic_nuclease">nucleases</a> are sequence specific, others are not. Some depend on the <a href="#BDic_methylation">methylation</a> state or other modifications of the substrate <a href="#BDic_dna">DNA</a>. There are two main categories of nucleases, see <a href="#BDic_endonuclease">endonuclease</a>, and  <a href="#BDic_exonuclease">exonuclease</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_nucleicAcid"><strong>Nucleic Acid</strong></a> - class of biochemical compounds which includes DNA and RNA. They are among the largest molecules known. MORE?
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_cytosine(C),Guanine(G),Adenine(A),Thymine(T)andUracil(U)">
                                    <a class="dicWord" data-category="genBio" id="BDic_nucleicBase"><strong>Nucleic Base (Base)</strong></a> - In biology this refers to the basic building blocks of <a href="#BDic_dna">DNA</a> and <a href="#BDic_rna">RNA</a>. The primary nucleobases (nucleic bases) are <strong>Cytosine (C), Guanine (G), Adenine (A), Thymine (T) and Uracil (U)</strong>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_nucleoid"><strong>Nucleoid</strong></a> - Region in prokaryotes where the DNA is concentrated. Unlike a nucleus, it is not bound by a membrane.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_nucleoside"><strong>Nucleoside</strong></a> - A glycosylamine that is can be thought of as a <a href="#BDic_nucleotide">nucleotide</a> without any <a href="#BDic_phosphateGroup">phosphate groups</a>. This term is commonly seen in the form of <a href="#BDic_desoxynucleosideTriphosphates">desoxynucleoside triphosphates (dNTPs)</a>, a necessary reagent for <a href="#BDic_pcr">PCR reactions</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_nucleotide"><strong>Nucleotide</strong></a> - The monomeric unit of <a href="#BDic_dna">DNA</a> and <a href="#BDic_rna">RNA</a>. A nucleotide comprises: A <a href="#BDic_nitrogenousBase">nitrogenous base</a>, a five-carbon <a href="#BDic_sugar">sugar</a> (<a href="#BDic_ribose">ribose</a> or <a href="#BDic_desoxyribose">desoxyribose</a>), and at least one <a href="#BDic_phosphateGroup">phosphate group</a>. See <a href="#BDic_ribonucleotide">ribonucleotide</a> for related.
                                    <ol>
                                        <p>
                                            A nucleotide is made of 3 parts:
                                        </p>
                                        <li>
                                            <a href="#BDic_nitrogenousBase">Nitrogenous base</a>
                                        </li>
                                        <li>
                                            Five-carbon <a href="#BDic_sugar">sugar</a>; <a href="#BDic_ribose">ribose</a> or <a href="#BDic_desoxyribose">desoxyribose</a>
                                        </li>
                                        <li>
                                            One minimum <a href="#BDic_phosphateGroup">phosphate group</a>
                                        </li>
                                    </ol>
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_nucleotide"><strong>Nucleotide</strong></a> - unit from which nucleic acids are constructed by polymerization. It contains a sugar, a phosphate group, and an organic base. ATP is a nucleotide.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_nucleus"><strong>Nucleus</strong></a> - A <a href="#BDic_membraneBound">membrane-bound</a> compartment found in most <a href="#BDic_eukaryota">eukaryotic cells</a>. It typically contains most of the <a href="#BDic_cell">cell</a>'s <a href="#BDic_gene">genetic</a> information and entrance and exit of large <a href="#BDic_molecule">molecules</a> to and from the nucleus is mediated by nuclear pore complexes in the nuclear membrane.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_nucleus"><strong>Nucleus</strong></a> - Membrane-bound organelle which contains the DNA in the form of chromosomes. It is the site of DNA replication, and the site of RNA synthesis.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_nutrient"><strong>Nutrient</strong></a> - Any element or simple compound necessary for the health and survival of an organism. This includes air and water, as well as food.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_nutrientCycling"><strong>Nutrient Cycling</strong></a> - All the processes by which nutrients are transferred from one organism to another. For instance, the carbon cycle includes uptake of carbon dioxide by plants, ingestion by animals, and respiration and decay of the animal.
                                </li>

                            <h1 class="dicSection" id="theLetter_O">O</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_oligo"><strong>Oligo (Oligomer/Oligonucleotide)</strong></a> - Short <a href="#BDic_polymer">polymers</a> of <a href="#BDic_nucleotide">nucleotides</a> usually less than 200 <a href="#BDic_nucleotide">nucleotides</a> in length. They are typically chemically synthesized and have many uses in biotechnology. <a href="#BDic_dna">DNA</a> oligos can be used as <a href="#BDic_primer">primers</a> for <a href="#BDic_pcr">PCR</a>, targets in <a href="#BDic_dna">DNA</a> microarrays, and as probes for <a href="#BDic_southernBlot">Southern blots</a>. Oligonucleotides can also refer to very short strands of <a href="#BDic_dna">DNA</a> composed of some 10 <a href="#BDic_nucleotide">nucleotides</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_oligonucleotide"><strong>Oligonucleotide</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_omnivore"><strong>Omnivore</strong></a> - Literally, an organism that will eat anything. Refers to animals who do not restrict their diet to just plants or other animals.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_oncolytic"><strong>Oncolytic</strong></a> - Onco (Cancer), lytic (killing). used in the context of <a href="#BDic_virus">viruses</a> that have the ability to specifically infect and kill cancerous cells.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_onePotReaction"><strong>One Pot Reaction</strong></a> - A reaction occurring in a single test tube vs. having multi-step reactions that need to be combined appropriately. Preferred, as it reduces the manual work, material losses etc. compared to multi-pot reactions.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_openReadingFrame"><strong>Open Reading Frame (ORF)</strong></a> - The translated part of an <a href="#BDic_rna">RNA moleucule</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_operator"><strong>Operator</strong></a> - The sequence of <a href="#BDic_dna">DNA</a> to which a <a href="#BDic_transcriptionFactor">transcription factor</a> binds. Operators sequences can be varied to alter the binding affinity of their respective <a href="#BDic_transcriptionFactor">transcription factor</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_operon"><strong>Operon</strong></a> - Is a functioning unit of genomic <a href="#BDic_dna">DNA</a> containing a cluster of <a href="#BDic_gene">genes</a> under the control of a single <a href="#BDic_promoter">promoter</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_organ"><strong>Organ</strong></a> - Collection of tissues which performs a particular function or set of functions in an animal or plant's body. The heart, brain, and skin are three organs found in most animals. The leaf, stem, and root are three organs found in most plants. Organs are composed of tissues, and may be organized into larger organ systems.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_organSystem"><strong>Organ System</strong></a> - Collection of organs which have related roles in an organism's functioning. The nervous system, vascular system, and muscle system are all organ systems.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_organelle"><strong>Organelle</strong></a> - A membrane-bound structure in a eukaryotic cell that partitions the cell into regions which carry out different cellular functions, e.g., mitochondria, endoplasmic reticulum, lysosomes.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_organic"><strong>Organic</strong></a> - Pertaining to compounds containing carbon. Also refers to living things or the materials made by living things. ant. - <em>inorganic</em>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ori"><strong>Origin of Replication (ORI)</strong></a> - The location in a genome (or within a replicating <a href="#BDic_plasmid">plasmid</a>) at which <a href="#BDic_dna">DNA</a> replication is initiated. <a href="#BDic_gene">Genes</a> near origins of replication will typically have higher copy numbers on average.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_oscillator"><strong>Oscillator</strong></a> - A biomolecular system characterised by the periodic rise and fall of chemical species. Canonical <a href="#BDic_syntheticBiology">synthetic biology</a> include the metabolator and the repressilator.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_osculum"><strong>Osculum</strong></a> - The main opening through which filtered water is discharged. Found in sponges.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_ossification"><strong>Ossification</strong></a> - The process of bone formation. Special cells called osteoblasts secrete minerals that combine with a network of collagen fibers, forming the hard bone matrix.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_outgroup"><strong>Outgroup</strong></a> - In a cladistic analysis, any taxon used to help resolve the polarity of characters, and which is hypothesized to be less closely related to each of the taxa under consideration than any are to each other.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_outputFluorescentProtein"><strong>Output Fluorescent Protein (OFP)</strong></a> - Output <a href="#BDic_fluorescence">fluorescent protein</a>. A <a href="#BDic_greenFluorescentProtein">fluorescent reporter GFP</a> for a <a href="#BDic_circuit">circuit</a>'s output.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_ovary"><strong>Ovary</strong></a> - In flowering plants, the part of the flower which encloses the ovules. When the ovary matures, it becomes the fruit.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_overhang"><strong>Overhang</strong></a> - A short stretch of single-stranded <a href="#BDic_dna">DNA</a> that "hangs off" a region of double-stranded <a href="#BDic_doubleStrand">double-stranded DNA</a>. Two overhangs are compatible if they can anneal to form a <a href="#BDic_doubleStrand">double-stranded DNA</a> with no gaps (there can be nicks in the <a href="#BDic_backbone">backbone</a> but no missing <a href="#BDic_basePair">basepairs</a>).
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_ovulation"><strong>Ovulation</strong></a> - The process by which an egg (the female gamete) is released from the ovary. In animals other than mammals, with the exception of monotremes, this results in the laying of an egg outside of the body. When female mammals ovulate, the egg, if fertilized, is retained within the uterus.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_ovule"><strong>Ovule</strong></a> - In seed plants, the structure which gives rise to the seed.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="CDic_oxygen"><strong>Oxygen</strong></a> -
                                </li> -->

                            <h1 class="dicSection" id="theLetter_P">P</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_pestTag"><strong>PEST Tag</strong></a> - A <a href="#BDic_cTerminalRegion">C-terminal</a> tag that can be added to <a href="#BDic_protein">proteins</a> to increase their <a href="#BDic_endogenous">endogenous</a> <a href="#BDic_degredation">degradation</a> rate. Termed "PEST" because the peptide is rich in proline (P), glutamate (E), serine (S), and threonine (T).
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_pnk"><strong>PNK</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_paleoherb"><strong>Paleoherb</strong></a> - Any member of a group of basal flowering herbs which may be the closest relatives of the monocots. They include the water lilies, Piperales, and Aristolochiales.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_papilla"><strong>Papilla</strong></a> - Cellular outgrowths. These look like little bumps or fingers on the surface of cells.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_paraphyletic"><strong>Paraphyletic</strong></a> - Term applied to a group of organisms which includes the most recent common ancestor of all of its members, but not all of the descendants of that most recent common ancestor. More?
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_parapodia"><strong>Parapodia</strong></a> - A sort of "false foot" formed by extension of the body cavity. Polychaetes and some insect larvae have parapodia in addition to their legs, and these provide extra help in locomotion.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_parasite"><strong>Parasite</strong></a> - An organism that lives on or within a host (another organism); it obtains nutrients from the host without benefiting or killing (although it may damage) the host.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_paratope"><strong>Paratope (Antigen Binding Site)</strong></a> - This is the part of an antibody which affixes itself to the <a href="#BDic_antigen">antigen</a>, it is composed of a small region of around 5 to 10 <a href="#BDic_aminoAcid">amino acids</a>. For relevent information see <a href="#BDic_epitope">epitope</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_parenchyma"><strong>Parenchyma</strong></a> - A generalized cell or tissue in a plant. These cells may manufacture or store food, and can often divide or differentiate into other kinds of cells.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_parsimony"><strong>Parsimony</strong></a> - Refers to a rule used to choose among possible cladograms, which states that the cladogram implying the least number of changes in character states is the best.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_pathogenic"><strong>Pathogenic</strong></a> - Organism which causes a disease within another organism.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pathology"><strong>Pathology</strong></a> - 1. The study of disease and abnormalities. 2. The manifestation of a disease, injury, or abnormality, as in bone or eggshell for example.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_pathway"><strong>Pathway</strong></a> - A series of interactions among <a href="#BDic_molecule">molecules</a> in a <a href="#BDic_cell">cell</a> that result in a certain product or change in the <a href="#BDic_cell">cell</a>. An example is a metabolic pathway where a linked-set of chemical reactions, <a href="#BDic_catalysation">catalysed</a> by enzymes, result in a product or set of products.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pedipalps"><strong>Pedipalps</strong></a> - The second pair of appendages of cheliceromorphs. In many arachnids, such as spiders, the pedipalps are enlarged in the male and used for copulation.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_pelagic"><strong>Pelagic</strong></a> - Pelagic organisms swim through the ocean, and may rise to the surface, or sink to the bottom. They are not confined to live on the bottom as benthic organisms do.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_peptide"><strong>Peptide</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_peptideBond"><strong>Peptide Bond</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_peptidoglycan"><strong>Peptidoglycan</strong></a> - carbohydrate polymer cross-linked by proteins. It is found in the cell wall of Gram positive bacteria, where it stains with the dye crystal-violet.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_perennial"><strong>Perennial</strong></a> - A plant which continues to grow after it has reproduced, usually meaning that it lives for several years.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_perianth"><strong>Perianth</strong></a> - The sepals and petals of a flower are together called the perianth; literally "around the anthers".
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_peridinin"><strong>Peridinin</strong></a> - carotenoid pigment found in dinoflagellates.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_periphyton"><strong>Periphyton</strong></a> - Dense strands of algal growth that cover the water surface between the emergant aquatic plants. <em>Spirogyra</em> is commonly responsible for this growth.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_peristome"><strong>Peristome</strong></a> - A set of cells or cell parts which surround the opening of a moss sporangium. In many mosses, they are sensitive to humidity, and will alter their shape to aid in spore dispersal.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_petal"><strong>Petal</strong></a> - One of the outer appendages of a flower, located between the outer sepals and the stamens. Petals often display bright colours that serve to attract pollinators.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_petriDish"><strong>Petri Dish</strong></a> - A petri dish is a small container used often for <a href="#BDic_cellCulture">cell cultures</a>. It is cylindrical and short, normally about 8.5 cm in diameter, and 1.5 cm in height. In microbiology Petri dishes are prepared with variants of <a href="#BDic_lysogenyBroth">lysogeny broth</a> with <a href="#BDic_Agar">agar</a> which solidifies the medium into a gell. This is used for growing <a href="#BDic_bacteria">bacterial cells</a>; other mediums are used for <a href="#BDic_eukaryota">eukaryotic</a> or other organisms.<br>
                                    Fo more information on Petri dish preparation follow the link: Petri Dish Preparation.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="CDic_pH"><strong>pH</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pharyngealSlits"><strong>Pharyngeal Slits</strong></a> - Characteristic of chordates, pharyngeal slits are openings through which water is taken into the pharynx, or throat. In primitive chordates the pharyngeal slits are used to strain water and filter out food particles; in fishes they are modified for respiration. Most terrestrial vertebrates have pharyngeal slits only in the embryonic stage.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pharynx"><strong>Pharynx</strong></a> - Cavity in the digestive tract just past the mouth itself. May be muscularized for sucking or swallowing in various animals.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_phenotype"><strong>Phenotype</strong></a> - The set of observable characteristics of an organism resultant of the interactions between an organism's environment and its <a href="#BDic_genotype">genotype</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_phloem"><strong>Phloem</strong></a> - Nutrient-conducting tissue of vascular plants.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_phosphate"><strong>Phosphate</strong></a> - an ion consisting of a phosphorus atom and four oxygen atoms. Among other things, it is used in the constuction of nucleic acids.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_phosphateGroup"><strong>Phosphate Group</strong></a> -
                                </li> -->
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_phosphorylation"><strong>Phosphorylation</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_photicZone"><strong>Photic Zone</strong></a> - Region of the ocean through which light penetrates; and the place where photosynthetic marine organisms live.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_photosynthesis"><strong>Photosynthesis</strong></a> - biochemical process in which light energy is absorbed by chlorophyll, and is used to fuel the building of sugar molecules.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_phragmoplast"><strong>Phragmoplast</strong></a> - The cell plate formed during cell division.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_phycocyanin"><strong>Phycocyanin</strong></a> - blue, water-soluble pigment found in the cyanobacteria and the red algae.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_phycoerythrin"><strong>Phycoerythrin</strong></a> - red, water-soluble pigment found in the cyanobacteria and red algae.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_phylogenetics"><strong>Phylogenetics</strong></a> - Field of biology that deals with the relationships between organisms. It includes the discovery of these relationships, and the study of the causes behind this pattern.More?
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_phylogeny"><strong>Phylogeny</strong></a> - The evolutionary relationships among organisms; the patterns of lineage branching produced by the true evolutionary history of the organisms being considered.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_phylum"><strong>Phylum</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_phylum"><strong>Phylum</strong></a> - A category in the hierarchy of animal classification between class and kingdom; phyla- pl.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_phytomelanin"><strong>Phytomelanin</strong></a> - a papery "sooty" black layer over the seed of plants in the Asparagales, which includes agaves, aloes, onions and hyacinths. It is an important character for defining the group.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_phytoplankton"><strong>Phytoplankton</strong></a> - Tiny, free-floating, photosynthetic organisms in aquatic systems. They include diatoms, desmids, and dinoflagellates.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_pigment"><strong>Pigment</strong></a> - any colourful compound, used by living things to absorb or block sunlight, and in sexual displays.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pinnatelyCompound"><strong>Pinnately Compound</strong></a> - Leaves which are divided up like a feather are said to be pinnately compound.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pistil"><strong>Pistil</strong></a> - The central set of organs in a flower; it is composed of one or more carpels.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pith"><strong>Pith</strong></a> - To severely damage the brain of a frog, also any central region of parenchyma tissue within a plant stem.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pits"><strong>Pits</strong></a> - Thin regions of the cell wall in xylem conducting cells. Their structure is an important characteristic for recognizing different kinds of wood.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_placenta"><strong>Placenta</strong></a> - In mammals, a tissue formed within the uterus through which nutrients are passed from the mother to the embryo (and later the fetus) and its wastes are removed. It is analogous to the protective membranes in the egg of other amniotes. placental. A mammal that gives live birth to well-developed young that have prolonged embryonic development within the mother’s uterus. Marsupial mammals also have a placenta, but the embryo spends less time developing in the uterus before birth. Placentals include animals as diverse as humans, elephants, dogs, and mice.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_plankton"><strong>Plankton</strong></a> - Very small, free-floating organisms of the ocean or other aquatic systems, including phytoplankton, which produce their own nutrients through photosynthesis, or zooplankton, which get their nutrients from organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_plasmaMembrane"><strong>Plasma Membrane</strong></a> - Outer membrane of a cell, sometimes called the cell membrane. The term plasma membrane is used more frequently when discussing prokaryotes.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_plasmid"><strong>Plasmid</strong></a> - A relatively small circular piece of <a href="#BDic_dna">DNA</a>, usually on the order of tens of kilobases or less. Typical features of a plasmid include the <a href="#BDic_ori">origin of replication (ORI)</a>, a multiple cloning site, and a marker; such as an antibiotic resistance gene.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_plasmid"><strong>Plasmid</strong></a> - Circular loop of DNA in prokaryotes. Eukaryotic DNA is organized into chromosomes.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_plasmodesmata"><strong>Plasmodesmata</strong></a> - Cytoplasmic connections between neighboring cells in plant tissues.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_plastid"><strong>Plastid</strong></a> - Any of several pigmented cytoplasmic organelles found in plant cells and other organisms, having various physiological functions, such as the synthesis and storage of food.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_plateReader"><strong>Plate Reader</strong></a> - A device for measuring the <a href="#BDic_absorbance">absorbance</a>, luminescence, or <a href="#BDic_fluorescence">fluorescence</a> of bulk cell culture, <em>exempli gratia</em> suspended <a href="#BDic_bacteria">bacteria</a>. The name comes from reading the values of these properties in standard multi-well plate format, <em>exempli gratia</em> 96-well plates, where each well contains a sample.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_platyspermic"><strong>Platyspermic</strong></a> - Having seeds which are flattened and disc-like. Contrast with radiospermic.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_plesiomorphy"><strong>Plesiomorphy</strong></a> - A primitive character state for the taxa under consideration.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pleurae"><strong>Pleurae</strong></a> - In trilobites and other arthropods, pleurae are elongated flat outgrowths from each body segment, that overlie and protect the appendages.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_plicate"><strong>Plicate</strong></a> - Folded like a paper fan, as in the leaves of palms, cyclanthoids, and some orchids.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_polar"><strong>Polar</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_polarityOfCharacters"><strong>Polarity Of Characters</strong></a> - The states of characters used in a cladistic analysis, either original or derived.Original characters are those acquired by an ancestor deeper in the phylogeny than the most recent common ancestor of the taxa under consideration. Derived characters are those acquired by the most recent common ancestor of the taxa under consideration.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pollen"><strong>Pollen</strong></a> - The microspore of seed plants.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pollenTube"><strong>Pollen Tube</strong></a> - In seed plants, the extension of the male gametophyte as it emerges from the pollen grain in search of the female gametophyte.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pollination"><strong>Pollination</strong></a> - Process of transferring the pollen from its place of production to the place where the egg cell is produced. This may be accomplished by the use of wind, water, insects, birds, bats, or other means. Pollination is usually followed by fertilization, in which sperm are released from the pollen grain to unite with the egg cell.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_pollinator"><strong>Pollinator</strong></a> - Animal which carries pollen from one seed plant to another, unwittingly aiding the plant in its reproduction. Common pollinators include insects, especially bees, butterflies, and moths, birds, and bats.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pollinia"><strong>Pollinia</strong></a> - A mass of fused pollen produced by many orchids.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_polyATail"><strong>Poly-A Tail</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_polyCistronic"><strong>Poly-Cistronic</strong></a> - Relating to the transcription of two or more adjacent <a href="#BDic_cistron">cistrons</a> (<a href="#BDic_gene">genes</a>) into a single <a href="#BDic_mRna">mRNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_polymer"><strong>Polymer</strong></a> - A large molecule constructed from many smaller identical units. These include <a href="#BDic_protein">proteins</a>, nucleic acids, and starches.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_polymerase"><strong>Polymerase</strong></a> - An enzyme that <a href="#BDic_catalysation">catalyses</a> polymerisation (fusion of fibers) from monomers; nucleotides to DNA or RNA.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_pcr"><strong>Polymerase Chain Reaction (PCR)</strong></a> - A thermocycled reaction involving repeated rounds of primer annealing, primer extension and <a href="#BDic_doubleStrand">dsDNA</a> denaturing to amplify and/or modify <a href="#BDic_dna">DNA</a> sequences.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_polyPeptide"><strong>Polypeptide</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_polyphyletic"><strong>Polyphyletic</strong></a> - Term applied to a group of organisms which does not include the most recent common ancestor of those organisms; the ancestor does not possess the character shared by members of the group. More?
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pore"><strong>Pore</strong></a> - Any opening into or through a tissue or body structure.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_positiveAutoregulation"><strong>Positive Autoregulation</strong></a> - A regulatory motif where a <a href="#BDic_gene">gene</a> product activates its own production. This motif can exhibit bistability if a <a href="#BDic_gene">gene</a>'s <a href="#BDic_Basal">basal</a> production rate is below its switching threshold. Compared to <a href="#BDic_negativeAutoregulation">negative autoregulation</a> a system exhibiting positive autoregulation will take longer to converge to a given steady state.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_positiveRna"><strong>Positive RNA (+RNA)</strong></a> - Positive RNA refers to the <a href="#BDic_rna">RNA</a> sequences which can be <a href="#BDic_translation">translated</a> into <a href="#BDic_protein">proteins</a>. See <a href="#BDic_senseSequence">sense sequence</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_positveAutoregulation"><strong>Positve Autoregulation</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_pHi"><strong>Potential Hydrogen Isoelectric Point (pHi)</strong></a> - This term is used when refering to <a href="#BDic_protein">protiens</a>, and denotes the pH at which a <a href="#BDic_protein">protein</a> is charged neutrally.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_precocial"><strong>Precocial</strong></a> - Describes young that are mobile and fairly self-sufficient at birth. Precocial young are generally well-developed (and large) at birth, born with their eyes open, and able to walk. Chickens and grebes are examples of precocial birds; sheep and guinea pigs are examples of precocial mammals.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_predator"><strong>Predator</strong></a> - Organism which hunts and eats other organisms. This includes both carnivores, which eat animals, and herbivores, which eat plants.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_prey"><strong>Prey</strong></a> - Organism hunted and eaten by a predator.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_primer"><strong>Primer</strong></a> - A short, single-stranded <a href="#BDic_dna">DNA</a> used in <a href="#BDic_dna">DNA</a> replication. A primer binds a region of single-stranded <a href="#BDic_dna">DNA</a> to form a primer-template complex which allows <a href="#BDic_dnaPolymerase">DNA polymerase</a> to synthesise the complementary strand (primer extension). Since most <a href="#BDic_polymerase">DNA polymerases</a> are only able to catalyse the addition of a <a href="#BDic_nucleotide">nucleotide</a> to the <a href="#BDic_3Prime">3'</a> end of a <a href="#BDic_dna">DNA</a> strand, primers are necessary for <a href="#BDic_elongation">elongation</a>. Primers are a necessary reagent for <a href="#BDic_pcr">PCR</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_primitive"><strong>Primitive</strong></a> - Describes a character state that is present in the common ancestor of a clade. A primitive character state is inferred to be the original condition of that character within the clade under consideration. For example, "presence of hair" is a primitive character state for all mammals, whereas the "hairlessness" of whales is a derived state for one subclade within the Mammalia.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_proboscis"><strong>Proboscis</strong></a> - Elongated organ, usually associated with the mouth. The proboscis is an important feeding appendage in echiurans.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_processitivity"><strong>Processitivity</strong></a> - An <a href="#BDic_enzyme">enzyme</a> is processive if it acts on a <a href="#BDic_polymer">polymeric substrate</a> and <a href="#BDic_catalysation">catalyses</a> a reaction on several of the monomeric <a href="#BDic_Subunit">subunits</a> after binding the <a href="#BDic_polymer">polymer</a>. For example, <a href="#BDic_dnaPolymerase">DNA polymerase</a> is a processive enzyme, as it binds the <a href="#BDic_primer">primer-template</a> complex and then proceeds to create a new strand of <a href="#BDic_dna">DNA</a> by moving along the template. Higher processivity means that the <a href="#BDic_enzyme">enzyme</a> stays and acts on the <a href="#BDic_polymer">polymer</a> for longer. <em>Exempli gratia</em> a <a href="#BDic_dnaPolymerase">DNA polymerase</a> can process thousands of <a href="#BDic_nucleotide">nucleotides</a> after a single binding event. Other processive <a href="#BDic_enzyme">enzymes</a> include some <a href="#BDic_exonuclease">exonucleases</a> which constantly chew up the <a href="#BDic_dna">DNA</a>, base by base and <a href="#BDic_helicase">helicases</a> which unwind double-stranded <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_producer"><strong>Producer</strong></a> - Any organism which brings energy into an ecosystem from inorganic sources. Most plants and many protists are producers.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_prokaryota"><strong>Prokaryote</strong></a> - An organism without a <a href="#BDic_nucleus">nucleus</a>, <em>exempli gratia</em> <a href="#BDic_bacteria">bacteria</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_prokaryotic"><strong>Prokaryotic</strong></a> - Literally "before the nucleus", the term applies to all bacteria and archaea. Prokaryotic cells have no internal membranes or cytoskeleton. Their DNA is circular, not linear.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_promoter"><strong>Promoter</strong></a> - A region of <a href="#BDic_dna">DNA</a> that drives the <a href="#BDic_expression">expression</a> of a <a href="#BDic_gene">gene</a> following it on a piece of <a href="#BDic_dna">DNA</a>. Most <a href="#BDic_promoter">promoters</a> are directional, meaning they drive the expression of a <a href="#BDic_gene">gene</a> only on one side (<a href="#BDic_3Prime">3'</a>) of it. Some <a href="#BDic_promoter">promoters</a> are bidirectionally driven and will drive the expression on both the <a href="#BDic_5Prime">5'</a> and <a href="#BDic_3Prime">3'</a> side.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_propagation"><strong>Propagation</strong></a> - In terms of <a href="#BDic_plasmid">plasmids</a>, propagation is the ability of a <a href="#BDic_plasmid">plasmid</a> to be replicated by its <a href="#BDic_host">host</a> organism. A properly-propagating <a href="#BDic_plasmid">plasmid</a> will have an <a href="#BDic_ori">origin of replication</a> that is able to recruit the <a href="#BDic_dna">DNA</a> replication machinery of the organism. A <a href="#BDic_plasmid">plasmid</a> that does not propagate will ultimately be diluted out of a replicating <a href="#BDic_cellLine">cell line</a> due to cellular divisions.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_protease"><strong>Protease</strong></a> - An <a href="#BDic_enzyme">enzyme</a> that <a href="#BDic_catalysation">catalyses</a> the <a href="#BDic_cleavage">cleavage</a> of <a href="#BDic_peptideBond">peptide bonds</a>; proteases chew up <a href="#BDic_protein">proteins</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_protein"><strong>Protein</strong></a> - A <a href="#BDic_polymer">polymer</a> of <a href="#BDic_aminoAcid">amino acids</a> that typically folds into a particular shape; though <a href="#BDic_protein">proteins</a> with less-defined shapes exist. Some <a href="#BDic_protein">proteins</a> are multimeric, meaning they are a complex of many copies of the same <a href="#BDic_aminoAcid">amino acid</a> sequences.
                                    <figure>
                                        <img class="lazy" data-src="/dictionaries/documents/biology/protein.png">
                                        <figcaption>Protein strucutre, <a href="#BDic_primaryStructure">primary structure</a> is the sequence of <a href="#BDic_aminoAcid">amino acids</a>, secondary <a href="#BDic_alphaHelix">&alpha; helices</a> and <a href="#BDic_betaSheet">&beta; sheets</a>, <a href="#BDic_tertiaryStructure">tertiary structure</a> the association of <a href="#BDic_secondaryStructure">secondary strucutres</a> and <a href="#BDic_quaternaryStrucutre">quaternary strucutres</a> the association of <a href="#BDic_tertiaryStructure">tertiary structures</a>.</figcaption>
                                    </figure>
                                    <p>
                                        Many <a href="#BDic_protein">proteins</a> are <a href="#BDic_enzyme">enzymes</a>, allowing them to <a href="#BDic_catalysation">catalyse</a> specific reactions, others are structural. <a href="#BDic_protein">Proteins</a> are created in the process of <a href="#BDic_translation">translation</a> using information encoded by <a href="#BDic_codon">codons</a> in a <a href="#BDic_mRna">messenger RNA</a>. Note that "natural" amino acids are L-amino acids (levogyre).
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_proteinaceous"><strong>Proteinaceous</strong></a> - describes any structure which is composed of protein.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_proteoglycan"><strong>Proteoglycan</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_protoplasm"><strong>Protoplasm</strong></a> - All the contents of a cell, including the nucleus. (see: cytoplasm)
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_protostele"><strong>Protostele</strong></a> - When a plant's vascular tissue develops in a solid central bundle, it is said to have a protostele. See also siphonostele and eustele.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pseudoelaters"><strong>Pseudoelaters</strong></a> - Moisture-sensitive cells produced in the sporangium of hornworts.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_pseudoextinction"><strong>Pseudoextinction</strong></a> - The apparent disappearance of a taxon. In cases of pseudoextinction, this disappearance is not due to the death of all members, but the evolution of novel features in one or more lineages, so that the new clades are not recognized as belonging to the paraphyletic ancestral group, whose members have ceased to exist. The Dinosauria, if defined so as to exclude the birds, is an example of a group that has undergone pseudoextinction.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_pseudopodia"><strong>Pseudopodia</strong></a> - Fingerlike extensions from an amoeboid cell; literally "false feet".
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pteridophyte"><strong>Pteridophyte</strong></a> - Plant in which the sporophyte generation is the larger phase and in which the gametophyte lives an existence independent of its parent sporophyte. Pteridophytes are almost all vascular plants, and include the lycophytes, trimerophytes, sphenophytes, and ferns.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pteridosperm"><strong>Pteridosperm</strong></a> - An extinct group of seed plants which bore fern-like leaves.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_pulsedFieldElectrophoresis"><strong>Pulsed Field Electrophoresis</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_punctuatedEquilibrium"><strong>Punctuated Equilibrium</strong></a> - A model of evolution in which change occurs in relatively rapid bursts, followed by longer periods of stasis.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_pycnoxylic"><strong>Pycnoxylic</strong></a> - Wood in which there is little or no parenchyma tissue among the xylem is called pycnoxylic. Conifers and flowering plants have pycnoxylic wood. Contrast with mannoxylic.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_pygidium"><strong>Pygidium</strong></a> - In trilobites, the posterior division of the body, formed by fusion of the telson with one or more posterior pleurae.
                                </li>

                            <h1 class="dicSection" id="theLetter_Q">Q</h1>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_quantitative"><strong>Quantitative</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_qPcr"><strong>Quantitative Polymerase Chain Reaction (qPCR)</strong></a> - <a href="#BDic_quantitative">Quantitative</a> <a href="#BDic_pcr">PCR</a>. A method of determining the amount of a <a href="#BDic_dna">DNA</a> sequence of interest that is present in a sample. By monitoring the <a href="#BDic_amplification">amplification</a> of a strand of <a href="#BDic_dna">DNA</a> during <a href="#BDic_pcr">PCR</a>, the original quantity can be <a href="#BDic_extrapolation">extrapolated</a>. qPCR can be used to monitor <a href="#BDic_geneExpression">gene expression</a> by <a href="#BDic_rtPcr">reverse transcribing</a> <a href="#BDic_rna">mRNA</a> into <a href="#BDic_rtPcr">cDNA</a> and then <a href="#BDic_quantitative">quantifying</a> the <a href="#BDic_cDna">cDNA</a> through qPCR.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_quorumSensing"><strong>Quorum Sensing</strong></a> - The ability of an organism to detect population density of others and or a <a href="#BDic_molecule">molecule</a>. The canonical quorum sensing system is the AHL-Lux system first described in <em>Aliivibrio fischeri</em> (formerly classified as <em>Vibrio fischeri</em>). Quorum sensing systems have been co-opted by <a href="#BDic_syntheticBiology">synthetic biologists</a> to engineer cell-to-cell communication systems.
                                </li>

                            <h1 class="dicSection" id="theLetter_R">R</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rna"><strong>RNA</strong></a> - Ribonucleic acid; <a href="#BDic_polymer">polymeric molecules</a> made up of <a href="#BDic_nucleotide">nucleotide</a> monomers. RNA has many biological functions from information carrying (<a href="#BDic_mRna">mRNA</a>) to <a href="#BDic_catalysation">catalytic</a> activity (<a href="#BDic_ribozyme">ribozymes</a>); its primary function however, is to transmit information from longterm storage (<a href="#BDic_dna">DNA</a>) to active machinery <a href="#BDic_protein">proteins</a>. RNA is often found folded unto itself instead of in a <a href="#BDic_doubleStrand">double strand</a> type; which is often the case with <a href="#BDic_dna">DNA</a>. RNA is composed of 4 different kinds of <a href="#BDic_nucleotide">nucleotides</a> with the <a href="#BDic_nitrogenousBase">nitrogenous bases</a>: A (Adenine), U (Uracil), C (Cytosine), and G (Guanine). RNA notably contains U instead of T (thymine) as <a href="#BDic_dna">DNA</a> does. RNA also does not contain <a href="#BDic_desoxyribose">desoxyribose</a> as <a href="#BDic_dna">DNA</a> does but <a href="#BDic_ribose">ribose</a> instead. The 18S <a href="#BDic_rRna">ribosomal RNA</a> sequence has been used in many groups of organisms to reconstruct <a href="#BDic_phylogeny">phylogeny</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rnaBindingProtein"><strong>RNA Binding Protein (RNA-BP)</strong></a> - A <a href="#BDic_protein">protein</a> that binds to an <a href="#BDic_rna">RNA</a> sequence as its substrate. Naturally, these <a href="#BDic_protein">proteins</a> serve a variety of roles in post-<a href="#BDic_transcription">transcriptional</a> regulation. Recently, bacteriophage coat <a href="#BDic_protein">proteins</a> such as PP7 and MS2 have been used to target <a href="#BDic_rna">RNA</a> sequences that have had RBP binding sites integrated into them. Fusion of these RBPs to <a href="#BDic_greenFluorescentProtein">fluorescent proteins</a> allows the real-time monitoring of <a href="#BDic_mRna">mRNA</a> <a href="#BDic_transcription">transcription</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rnaI"><strong>RNA Interference (RNAi)</strong></a> - A biological process by which <a href="#BDic_doubleStrand">double-stranded</a> <a href="#BDic_rna">RNA</a> (dsRNA) <a href="#BDic_inhibitor">inhibits</a> the expression of <a href="#BDic_gene">genes</a> complementary to its sequence. <a href="#BDic_rnaI">RNAi</a> is thought to have evolved as a defense against <a href="#BDic_virus">viruses</a> (some of which have dsRNA genomes) and it has been shown to have an important role during development. This system can also be exploited to induce artificial gene knockdown through the introduction of synthetic dsRNAs or <a href="#BDic_vector">vectors</a> that express <a href="#BDic_siRna">siRNAs</a>.
                                    <p>While most <a href="#BDic_eukaryota">eukaryotes</a> have <a href="#BDic_rnaI">RNAi</a> machinery, <a href="#BDic_sCerevisiae"><em>S. cerevisiae</em></a> notably lacks it. <a href="#BDic_prokaryota">Prokaryotes</a> also do not possess <a href="#BDic_rnaI">RNAi</a> machinery.</p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rnaPolymerase"><strong>RNA Polymerase (RNA-P)</strong></a> - RNA polymerase; the <a href="#BDic_protein">protein</a> complex that <a href="#BDic_transcription">transcribes</a> <a href="#BDic_rna">RNA</a> from <a href="#BDic_dna">DNA</a>. In prokaryotes RNA-P, <a href="#BDic_promoter">promoter</a> <a href="#BDic_specificity">specificity</a> is determined by the presence of a sigma factor and the complex usually binds to the -35 and -10 elements (35<a href="#BDic_basePair">bp</a> and 10<a href="#BDic_basePair">bp</a> upstream of the start <a href="#BDic_codon">codon</a>) of <a href="#BDic_gene">genes</a>. Occlusion of these sites through <a href="#BDic_transcriptionFactor">transcription factor</a> binding is a common mechanism of genetic <a href="#BDic_repressor">repression</a>. In <a href="#BDic_eukaryota">eukaryotes</a>, <a href="#BDic_mRna">mRNA</a> <a href="#BDic_transcription">transcription</a> is carried out by RNA polymerase II, but other RNA-P types are responsible for the production of <a href="#BDic_tRNA">transfer RNAs (tRNA)</a>, <a href="#BDic_rRna">ribosomal RNAs (rRNA)</a>, and some regulatory <a href="#BDic_regulatoryRna">RNAs</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rnaSeq"><strong>RNA-Seq</strong></a> - <a href="#BDic_rna">RNA</a> <a href="#BDic_sequencing">sequencing</a>. A method of obtaining a snapshot of genetic <a href="#BDic_transcription">transcripts</a> present in an organism. <a href="#BDic_mRna">mRNA</a>s can be isolated from a <a href="#BDic_cell">cell</a> by their <a href="#BDic_PolyATail">polyA tail</a> and then <a href="#BDic_rtPcr">reverse transcribed</a> into <a href="#BDic_rtPcr">cDNA</a>. <a href="#BDic_nextGenSequencing">Next-generation sequencing</a> methods can then be used to <a href="#BDic_sequencing">sequence</a> this <a href="#BDic_rtPcr">cDNA</a>, which allows the reconstruction of the <a href="#BDic_cell">cell</a>'s <a href="#BDic_transcriptome">transcriptome</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_radiation"><strong>Radiation</strong></a> - Event of rapid cladogenesis, believed to occur under conditions where a new feature permits a lineage to move into a new niche or new habitat, and is then called an adaptive radiation.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_radicle"><strong>Radicle</strong></a> - The end of a plant embryo which gives rise to the first root.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_radiospermic"><strong>Radiospermic</strong></a> - Having seeds which are round or ovoid. Contrast with platyspermic.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_rainShadow"><strong>Rain Shadow</strong></a> - The dry region on the leeward side of a mountain range, where rainfall is noticeably less than on the windward side. For example, the White Mountains in east central California are in the rain shadow of the Sierra Nevada.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_rank"><strong>Rank</strong></a> - In traditional taxonomy, taxa are ranked according to their level of inclusiveness. Thus a genus contains one or more species, a family includes one or more genera, and so on.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rateOfChange"><strong>Rate of Change</strong></a> - How much a dependent variable changes for a given change in an independent variable. Graphically, it is the slope of a line where the independent variable is on the x-axis and the dependent variable is on the y. The rate of change at any point can be determined by taking the first derivative of a function with respect to the independent variable.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_rbcL"><strong>RbcL</strong></a> - a gene which is located in the chloroplast of photosynthetic organisms. It codes for the large subunit of the protein rubisco, and its sequence has been useful in plant phylogenies.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_receptor"><strong>Receptor</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_recognitionSite"><strong>Recognition Site</strong></a> - The specific sequence recognised by a <a href="#BDic_dna">DNA</a>-binding protein. Most commonly referred to when discussing the cut sites for <a href="#BDic_restrictionEnzyme">restriction enzymes</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_creRecombinase">
                                    <a class="dicWord" data-category="genBio" id="BDic_recombination"><strong>Recombination</strong></a> - The insertion or deletion of <a href="#BDic_dna">DNA</a> sequence from a strand mediated by recombinases (enzymes which catalyse recombination). <strong>Cre Recombinase</strong>, from a bacteriophage, is a commonly-used recombinase that affects site-specific recombination between two <a href="#BDic_loxSite">LOX sites</a>. Recombination is the basis of <a href="#BDic_goldenGate">Gateway cloning technology</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_redFluorescentProtein"><strong>Red Fluorescent Protein (RFP)</strong></a> - Red <a href="#BDic_fluorescence">fluorescent</a> <a href="#BDic_protein">protien</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_regulation"><strong>Regulation</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_regulatoryElement"><strong>Regulatory Element</strong></a> - Any element that regulates <a href="#BDic_geneExpression">gene expression</a>. Examples of <a href="#BDic_transCis">cis</a>-acting regulatory elements are operators, <a href="#BDic_promoter">promotors</a>, and leader peptides. <a href="#BDic_transCis">Trans</a>-acting regulatory elements are <a href="#BDic_diffusion">diffusible molecules</a> such as <a href="#BDic_transcriptionFactor">transcription factors</a> or <a href="#BDic_transCis">trans</a>-acting <a href="#BDic_rna">RNA</a> in a toehold switch system.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_regulatoryRna"><strong>Regulatory RNA</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_relatedness"><strong>Relatedness</strong></a> - Two clades are more closely related when they share a more recent common ancestor between them than they do with any other clade.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_repeatSequences"><strong>Repeat Sequences</strong></a> - The length of a nucleotide sequence that is repeated in a tandem cluster.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_replication"><strong>Replication</strong></a> - The process of producing two identical copies of <a href="#BDic_dna">DNA</a> from a single <a href="#BDic_doubleStrand">double helix</a>. <a href="#BDic_dna">DNA</a> replication begins at specific sequences termed <a href="#BDic_ori">origins of replication</a> and requires <a href="#BDic_polymerase">polymerases</a>, <a href="#BDic_desoxynucleosideTriphosphates">dNTPs</a>, and other factors.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_replicon"><strong>Replicon</strong></a> - A <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA molecule</a> that replicates from a single <a href="#BDic_ori">origin of replication</a>. Most <a href="#BDic_prokaryota">prokaryotic</a> <a href="#BDic_chromosome">chromosomes</a> are a single replicon, while <a href="#BDic_eukaryota">eukaryotic</a> <a href="#BDic_chromosome">chromosomes</a> typically have multiple replicons. "Replicon" is sometimes used to describe self-amplifying <a href="#BDic_rna">RNA</a>s (RepRNA), which have the ability to replicate themselves within a <a href="#BDic_transfection">transfected</a> <a href="#BDic_cell">cell</a> to provide continuous <a href="#BDic_protein">protein</a> production.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_reporter"><strong>Reporter</strong></a> - In the context of <a href="#BDic_geneExpression">gene expression</a>, a reporter allows the easy determination of <a href="#BDic_transcription">transcription</a> from a given <a href="#BDic_promoter">promoter</a>. Good reporters have an obvious <a href="#BDic_phenotype">phenotype</a> such as the blue <a href="#BDic_phenotype">phenotype</a> for <a href="#BDic_lacZ">LacZ</a> in the presence of <a href="#BDic_xGal">X-gal</a>, or the <a href="#BDic_fluorescence">fluorescence</a> of a <a href="#BDic_greenFluorescentProtein">fluorescent protein</a>. <a href="#BDic_quantitative">Quantification</a> of <a href="#BDic_protein">protein</a> production from a <a href="#BDic_promoter">promoter</a> as a function of reporter <a href="#BDic_fluorescence">fluorescence</a> is also possible.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_repressilator"><strong>Repressilator</strong></a> - One of the earliest oscillating synthetic circuits published by Elowitz and Leibler in 2000. It accomplishes oscillations through the use of a three-repressor ring oscillator circuit topology. The circuit was able to oscillate, but had issues with robustness.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_repressor"><strong>Repressor</strong></a> - The suppression of <a href="#BDic_geneExpression">gene expression</a> from a <a href="#BDic_promoter">promoter</a> by a <a href="#BDic_protein">protein</a>. Important repressors in <a href="#BDic_syntheticBiology">synthetic biology</a> are TetR, <a href="#BDic_lacI">LacI</a>, and cI (lambda repressor). Some repressors are inducible.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_response"><strong>Response</strong></a> - How a system reacts to an input. Much information about a system's internal workings can be gleaned from observing its response to different types of input.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_restrictionEnzyme"><strong>Restriction Enzyme</strong></a> - <a href="#BDic_enzyme">Enzymes</a> that cut <a href="#BDic_dna">DNA</a> in a site-specific manner. Typically, each restriction enzyme has a certain restriction site that it recognises. Standard restriction enzymes that cut within their recognition site are the basis of traditional <a href="#BDic_cloning">cloning</a> methods. Type IIS restriction enzymes, such BsaI, cut at a location outside of their recognition site and enable <a href="#BDic_dna">DNA</a> assembly without the producing scar regions. Type IIS restriction enzymes are the basis of <a href="#BDic_goldenGate">Golden Gate cloning</a> methods.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_reticulate"><strong>Reticulate</strong></a> - Interconnecting, like a network.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_reticulation"><strong>Reticulation</strong></a> - Joining of separate lineages on a phylogenetic tree, generally through hybridization or through lateral gene transfer. Fairly common in certain land plant clades; reticulation is thought to be rare among metazoans.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_reticulopodia"><strong>Reticulopodia</strong></a> - Long thread-like pseudopodia that branch apart and rejoin, forming a fine network. They are characteristic of forams.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_retroactive"><strong>Retroactive</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_retroactivity"><strong>Retroactivity</strong></a> - When the input/output behavior of an upstream model is affected by presence of downstream module(s). Retroactive effects can be reduced through the use of load driver circuits.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rtPcr"><strong>rtPCR</strong></a> - Reverse transcription polymerase chain reaction (see <a href="#BDic_pcr">PCR</a>), this technique uses a special form of <a href="#BDic_polymerase">polymerase</a> to reverse the <a href="#BDic_transcription">transcription</a> process. This allows for us to go from a sample of <a href="#BDic_rna">RNA</a> to the associated <a href="#BDic_rna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rTTA"><strong>Reversed Tetracycline Trans-Activator (r-tTA)</strong></a> - Analogous to tTA, except that the function of <a href="#BDic_doxycycline">DOX</a> is reversed. <a href="#BDic_doxycycline">DOX</a> stabilises the <a href="#BDic_dna">DNA</a> binding domain, facilitating <a href="#BDic_promoter">promoter</a> binding and activation of <a href="#BDic_geneExpression">gene expression</a> of <a href="#BDic_promoter">promoters</a> with tetracycline responsive elements (TREs). Referred to as the DOX-on system.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_rhizoid"><strong>Rhizoid</strong></a> - A cellular outgrowth of a plant that usually aids in anchoring to the surface and increasing surface area to acquire water or nutrients; found in mosses, liverworts, and hornworts.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_rhizome"><strong>Rhizome</strong></a> - A horizontal underground stem, such as found in many ferns, where only the leaves may stick up into the air; sphenophytes (horsetails and their relatives) spread via rhizomes, but also produce erect stems.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ribonucleotide"><strong>Ribonucleotides</strong></a> - Same as a <a href="#BDic_nucleotide">nucleotide</a> yet includes <a href="#BDic_ribose">ribose</a> instead of <a href="#BDic_dextrose">dextrose</a> as the <a href="#BDic_sugar">sugar</a> component to the nucleic material; one is of course <a href="#BDic_dna">DNA</a> and the other <a href="#BDic_rna">RNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ribose"><strong>Ribose</strong></a> - Ribose is a form of sugar, this kind is special in that it is included in genetic material of the <a href="#BDic_rna">RNA</a> kind. <a href="#BDic_dna">DNA</a> includes another kind known as <a href="#BDic_dextrose">dextrose</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ribosome"><strong>Ribosome</strong></a> - A protein-<a href="#BDic_rna">RNA</a> complex that is responsible for <a href="#BDic_translation">translating</a> <a href="#BDic_mRna">mRNA</a> into <a href="#BDic_Polypeptide">polypeptides</a> i.e. <a href="#BDic_protein">proteins</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ribosomeBindingSite"><strong>Ribosome Binding Site (RBS)</strong></a> - A sequence upstream of the start <a href="#BDic_codon">codon</a> that recruits <a href="#BDic_ribosome">ribosomes</a> and allows <a href="#BDic_translation">translation</a>. RBSs are well-defined in <a href="#BDic_prokaryota">prokaryotic</a> systems and are also known as Shine-Dalgarno sequences. Recruitment of <a href="#BDic_ribosome">ribosomes</a> in <a href="#BDic_eukaryota">eukaryotic</a> systems is more complex and less-understood. RBS "strength" is a large factor in <a href="#BDic_protein">protein</a> production rate and is determined by local <a href="#BDic_rna">RNA</a> <a href="#BDic_conformation">secondary</a> and <a href="#BDic_conformation">tertiary</a> structure. RBS calculators allow the control of relative <a href="#BDic_translation">translation</a> rates across different RBSs.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_riboswitch"><strong>Riboswitch</strong></a> - A <a href="#BDic_transCis">cis</a>-acting regulatory element found in <a href="#BDic_mRna">mRNA</a> transcripts. Riboswitches form structures whose <a href="#BDic_conformation">conformations</a> are affected by small <a href="#BDic_molecule">molecules</a>. These <a href="#BDic_conformation">conformational</a> changes have the ability to turn expression of a transcript "ON" or "OFF". This switching is accomplished through a variety of mechanisms.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_ribozyme"><strong>Ribozyme</strong></a> - An <a href="#BDic_rna">RNA molecule</a> that is capable of <a href="#BDic_catalysation">catalysing</a> chemical reactions. Many ribozymes of interest (hammerhead and hairpin) <a href="#BDic_catalysation">catalyse</a> <a href="#BDic_rna">RNA</a> <a href="#BDic_cleavage">cleavage</a> and <a href="#BDic_ligation">ligation</a> reactions.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_riparian"><strong>Riparian</strong></a> - Having to do with the edges of streams or rivers.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_root"><strong>Root</strong></a> - Usually the below ground portion of a plant. Contrast with shoot.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_rosette"><strong>Rosette</strong></a> - A series of whorls of leaves or leaf-like structure produced at the base of the stem, just above the ground.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_rRna"><strong>rRNA</strong></a> - Ribosomal <a href="#BDic_rna">RNA</a> involved in the formation and function of <a href="#BDic_ribosome">ribosomes</a>
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_rubisco"><strong>Rubisco</strong></a> - protein which fixes carbon in photosynthetic organisms. It binds molecules of carbon dioxide to a five-carbon molcule. Rubisco is the most common protein on earth.
                                </li>

                            <h1 class="dicSection" id="theLetter_S">S</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_selex"><strong>SELEX (Systematic Evolution of Ligands by Exponential Enrichment)</strong></a> -
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_sCerevisiae"><strong><em>Sachharomyces cerevisiae</em></strong></a> - A single-<a href="#BDic_cell">celled</a> species of yeast which is commonly used in biology and <a href="#BDic_syntheticBiology">syntetic biology</a>. Notably this <a href="#BDic_eukaryota">eukaryotic</a> organism does not have <a href="#BDic_rnaI">RNAi</a> machinery.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_salinity"><strong>Salinity</strong></a> - A measure of the salt concentration of water. Higher salinity means more dissolved salts.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_saprophyte"><strong>Saprophyte</strong></a> - Organism which feeds on dead and decaying organisms, allowing the nutrients to be recycled into the ecosystem. Fungi and bacteria are two groups with many important saprophytes.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_saxitoxin"><strong>Saxitoxin</strong></a> - neurotoxin found in a variety of dinoflagellates. If ingested, it may cause respiratory failure and cardiac arrest.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_scaffold"><strong>Scaffold</strong></a> - A structure on which elements can be brought together to be close in space. For example, the <a href="#BDic_enzyme">enzymes</a> involved in the same pathway can be brought together in proximity on an <a href="#BDic_rna">RNA scaffold</a> by fusing the <a href="#BDic_enzyme">enzymes</a> with <a href="#BDic_rna">RNA</a>-binding <a href="#BDic_protein">proteins</a> and thus increase the efficiency of the pathway, as <a href="#BDic_substrate">substrates</a> do not need to <a href="#BDic_diffusion">diffuse</a> far to reach the next <a href="#BDic_enzyme">enzyme</a> in the pathway.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_scanningElectronMicroscope"><strong>Scanning Electron Microscope (SEM)</strong></a> - A special kind of microscope that scans samples with a high-energy beam of electrons to produce a high-resolution, detailed, three-dimensional image. An SEM can magnify a sample up to 250 times that of the best light microscopes.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_scarSequence"><strong>Scar Sequence</strong></a> - An unavoidable <a href="#BDic_sequence">sequence</a> arising from technicalities of a <a href="#BDic_dnaAssembly">DNA assembly</a> process. For example, <a href="#BDic_goldenGate">Gateway assembly</a> leaves a scar after the <a href="#BDic_recombination">recombination</a> occurs.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_scavenger"><strong>Scavenger</strong></a> - An organism that feeds upon dead and dying organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_screening"><strong>Screening</strong></a> - A method to obtain a set of organisms <em>exempli gratia</em> a <a href="#BDic_bacterialColony">bacterial colony</a>, with a particular <a href="#BDic_genotype">genotype</a> or <a href="#BDic_phenotype">phenotype</a> by considering many members of a large pool of variants. Each member is assessed for its suitability, causing more work than <a href="#BDic_selection">selection</a>, where the undesired members are eliminated.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_seaweed"><strong>Seaweed</strong></a> - Any large photosynthetic protist, including rhodophytes and kelps. Seaweeds are not true plants, but like plants they can make their own food.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_secondaryGrowth"><strong>Secondary Growth</strong></a> - Growth in a plant which does not occur at the tips of the stems or roots. Secondary growth produces wood and bark in seed plants.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_secondaryStructure"><strong>Secondary Structure</strong></a> - A secondary structure in a protein refers to the the three dimensional form which a <a href="#BDic_protein">polypetidic</a> chain takes: either <a href="#BDic_alphaHelix">&alpha; helices</a>, <a href="#BDic_betaSheet">&beta; sheets</a>, &beta; turns, and even &omega; loops. See <a href="#BDic_protein">protein</a> for an illustration.
                                    <p>
                                        The <a href="#BDic_primaryStructure">primary strucutre</a> refers to the sequence of <a href="#BDic_aminoAcid">amino acids</a> composing the chain, and the <a href="#BDic_tertiaryStructure">tertiary strucutre</a> the association of secondary structures.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_segmentation"><strong>Segmentation</strong></a> - In many animals, the body is divided into repeated subunits called segments, such as those in centipedes, insects, and annelids. Segmentation is the state of having or developing a body plan in this way.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_selection"><strong>Selection</strong></a> - A method to obtain a set of organisms (<em>exempli gratia</em> a bacterial colony) with a particular <a href="#BDic_genotype">genotype</a> or <a href="#BDic_phenotype">phenotype</a> by selectively removing undesired organisms from a large pool of variants. Selection can be positive (organisms with a trait survive to the next round) or negative (organisms that do not have a trait survive to the next round). This approach can be less work than screening, as only the "interesting" organisms have to be analyzed, rather than all organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_selection"><strong>Selection</strong></a> - Process which favors one feature of organisms in a population over another feature found in the population. This occurs through differential reproduction—those with the favored feature produce more offspring than those with the other feature, such that they become a greater percentage of the population in the next generation.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_senescent"><strong>Senescent</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_senseSequence"><strong>Sense Sequence</strong></a> - <a href="#BDic_positiveRna">Positive RNA</a> is the <a href="#BDic_rna">RNA</a> version of sense <a href="#BDic_dna">DNA</a> (also called positive); this strand would be <a href="#BDic_translation">translateable</a> into a <a href="#BDic_protein">protein</a>. A sense sequence of <a href="#BDic_nucleotide">nucleotides</a> is complementary to an <a href="#BDic_antisenseSequence">antisense coding sequence</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_sensing"><strong>Sensing</strong></a> - The process of detecting levels of inputs from the outside or within a <a href="#BDic_cell">cell</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_sensitivity"><strong>Sensitivity</strong></a> - How well a method can pick up true positives; calculated by dividing the number of true positives by the number of true positives added to the number of false negatives.
                                    <div class="mathsFormulas" id="Maths_Specificity">
                                        $$ Sensitivity = \frac{(True Positives)}{(True Positives) + (False Negatives)} $$
                                    </div>
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_sepal"><strong>Sepal</strong></a> - The outermost structures of a flower.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_septum"><strong>Septum</strong></a> - Partition which divides up a larger region into smaller ones, such as in the central body cavity of some anthozoa.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_sequence"><strong>Sequence</strong></a> - A suite of specific or unique values. In biology a sequence refers to a suite of <a href="#BDic_nucleotide">nucleotides</a> in a certain order; which can define a <a href="#BDic_gene">gene</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_sequencing"><strong>Sequencing</strong></a> - The process of determining the <a href="#BDic_nucleicAcid">nucleic acid</a> sequence of a piece of <a href="#BDic_dna">DNA</a> or of a whole organism.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_shoot"><strong>Shoot</strong></a> - Usually, the above ground portion of a plant, bearing the leaves. Contrast with root.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_shRna"><strong>shRNA</strong></a> - Short hairpin <a href="#BDic_rna">RNA</a>, a synthetic mimic of <a href="#BDic_miRna">miRNA</a>. A single <a href="#BDic_molecule">molecule</a> of <a href="#BDic_rna">RNA</a> folds into a stem structure with a hairpin on one end to give rise to an shRNA.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_signal"><strong>Signal</strong></a> - A function conveying information. A signal can take and be encoded in many forms, <em>exempli gratia</em> the voltage of a wire or the concentration of a chemical species. Systems can act on signals to modify them or to produce new signals.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_silica"><strong>Silica</strong></a> - amorphous silicon dioxide (glass). It is a structural component in many organisms, such as diatoms and horsetails.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_siphon"><strong>Siphon</strong></a> - Opening in molluscs or in urochordates which draws water into the body cavity. In many molluscs, the siphon may be used to expel water forcibly, providing a means of propulsion.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_siphonostele"><strong>Siphonostele</strong></a> - When a plant's vascular tissue develops as a central cylinder, it is said to have a siphonostele. See also protostele and eustele.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_siRna"><strong>siRNA</strong></a> - An artificial double-stranded <a href="#BDic_rna">RNA</a> that mimics <a href="#BDic_miRna">miRNA</a>. Sometimes chemically modified to increase the potency of the siRNA.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_sister Group"><strong>Sister Group</strong></a> - The two clades resulting from the splitting of a single lineage.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_skeleton"><strong>Skeleton</strong></a> - Support structure in animals, against which the force of muscles acts. Vertebrates have a skeleton of bone or cartilage; arthropods have one made of chitin; while many other invertebrates use a hydrostatic skeleton, which is merely an incompressible fluid-filled region of their body.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_southernBlot"><strong>Southern Blot</strong></a> - A lab technique used for the detection of specific <a href="#BDic_dna">DNA</a> sequences in a sample. Sothern blotting typically involves a first migration by classic <a href="#BDic_electrophoresis">electrophoresis</a> then a "blotting" step by a membrane which uptakes the <a href="#BDic_dna">DNA</a> from the gell, then the probe which is complementary to the strand of interest is introduced. This probe is typically marked by a radioactive strand or an <a href="#BDic_antibody">antibody</a>. This reveals if the sequence of interest was found in the sample or not.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_specialist"><strong>Specialist</strong></a> - Organism which has adopted a lifestyle specific to a particular set of conditions. Contrast with generalist.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_species"><strong>Species</strong></a> - A slippery concept contested even today. Current consensus states that a species is a group of like individuals which are capable of reproduction typically by sexual reproduction.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_specificity"><strong>Specificity</strong></a> - How well a method can distinguish between true positives and false positives; also called the true negative rate and calculated by dividing the number of true negatives by the number of true negatives added to the number of false positives.
                                    <div class="mathsFormulas" id="Maths_Specificity">
                                        $$ Specificity = \frac{(True Negatives)}{(True Negatives) + (False Positives)} $$
                                    </div>Often at odds with <a href="#BDic_sensitivity">sensitivity</a> (increasing specificity typically decreases <a href="#BDic_sensitivity">sensitivity</a>; this can be observed with a receiver operating characteristic curve, which plots 1 minus specificity against <a href="#BDic_sensitivity">sensitivity</a>).
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_spermatophyte"><strong>Spermatophyte</strong></a> - A seed plant.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_spicule"><strong>Spicule</strong></a> - Crystalline or mineral deposits found in sponges, sea cucumbers, or urochordates. They are structural components in many sponges, and may serve a protective function in other organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_spiracle"><strong>Spiracle</strong></a> - In insects and some other terrestrial arthropods, a small opening through which air is taken into the tracheae. Insects have several spiracles, arranged along the sides of the abdomen.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_spongin"><strong>Spongin</strong></a> - proteinacous compound of which the spicules in Demospongiae are composed.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_spongocoel"><strong>Spongocoel</strong></a> - Central body cavity of sponges.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_sporangiophore"><strong>Sporangiophore</strong></a> - A stalk to which sporangia are attached.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_sporangium"><strong>Sporangium</strong></a> - A chamber inside of which spores are produced through meiosis.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_sporophyll"><strong>Sporophyll</strong></a> - Any leaf which bears sporangia is called a sporophyll.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_stabilityAnalysis"><strong>Stability Analysis</strong></a> - A mathematical technique for determining at which conditions systems are stable.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_stableSteadyState"><strong>Stable Steady State</strong></a> - A steady state to which all systems return to after a small enough perturbation.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_stamen"><strong>Stamen</strong></a> - Part of a flower, the tip of which produces pollen and is called the anther.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="berk">
                                    <a class="dicWord" data-category="bioChem" id="BDic_starch"><strong>Starch</strong></a> - a complex polymer of glucose, used by plants and green algae to store surplus sugar for later use.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_stasis"><strong>Stasis</strong></a> - A period of little or no discernible change in a lineage.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_stateVariable"><strong>State Variable</strong></a> - A variable dedicated to describing a state of a system, <em>exempli gratia</em> the <a href="#BDic_concentration">concentration</a> of a <a href="#BDic_species">species</a>, the volume of a <a href="#BDic_cell">cell</a> or any other measurable quantity.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_stateful"><strong>Stateful</strong></a> - Having a state, having memory. For example, a toggle switch is stateful since it has two states. Combinational <a href="#BDic_logicGate">logic circuits</a> are not stateful, they do not have any memory of previous inputs or states.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_steadyState"><strong>Steady State</strong></a> - A state of the system which does not <a href="#BDic_evolution">evolve</a> over time, given that there are no perturbations. Steady states can be stable or unstable, indicating their response to small perturbations (stable means the system returns to the steady state and unstable means it does not).
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_stem Group"><strong>Stem Group</strong></a> - All the taxa in a clade preceding a major cladogenesis event. They are often difficult to recognize because they may not possess synapomorpies found in the crown group.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_stigma"><strong>Stigma</strong></a> - The sticky tip of a pistil. Or, the dense region of pigments found in many photosynthetic protists which is sensitive to light, and thus functions somewhat like a miniature eye.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_stipe"><strong>Stipe</strong></a> - A scientific term for "stalk".
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_stipules"><strong>Stipules</strong></a> - Paired appendages found at the base of the leaves of many flowering plants.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_stochastic"><strong>Stochastic</strong></a> - Random, non-deterministic. A stochastic model enables modeling of discrete systems containing a small number of species, where deterministic, continuous models may give inappropriate predictions. Stochastic simulations enable predicting properties other than the mean, bulk behaviour of a system. Stochastic simulations can show unexpected properties of systems which deterministic-continuous models might not.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_stomata"><strong>Stomata</strong></a> - Openings in the epidermis of a stem or leaf of a plant which permit gas exchange with the air. In general, all plants except liverworts have stomata in their sporophyte stage.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_strain"><strong>Strain</strong></a> - A particular variant of a <a href="#BDic_bacteria">bacterium</a>, <a href="#BDic_virus">virus</a> or plant. For example, the <a href="#BDic_eColi"><em>E. coli</em></a> strain BL21(DE3) has a particular <a href="#BDic_genotype">genotype</a> setting it apart from other strains and making it useful for some applications and not others.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_strand"><strong>Strand</strong></a> - A single <a href="#BDic_dna">DNA molecule</a> or <a href="#BDic_rna">RNA</a>. Such a strand has directionality, typically depicted as going from <a href="#BDic_5Prime">5'</a> (the end of the strand with the <a href="#BDic_phosphateGroup">phosphate group</a>) to <a href="#BDic_3Prime">3'</a> (the end of the strand with the -OH group).
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_streptophytes"><strong>Streptophytes</strong></a> - The clade consisting of the plants plus their closest relatives, the charophytes.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_strobilus"><strong>Strobilus</strong></a> - A tightly clustered group of sporophylls arranged on a central stalk; commonly termed a "cone" or "flower".
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_style"><strong>Style</strong></a> - The narrow stalk of the pistil, located above the ovary but below the stigma.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_subunit"><strong>Subunit</strong></a> - Subunit refers to a component part of a whole, this can be used when talking of parts of a multichain protein.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_substrate"><strong>Substrate</strong></a> - "Supporting surface" on which an organism grows. The substrate may simply provide structural support, or may provide water and nutrients. A substrate may be inorganic, such as rock or soil, or it may be organic, such as wood.
                                </li>
                                <li class="wordDefined" data-dictionary="bioChem" data-src="origDereck">
                                    <a class="dicWord" data-category="bioChem" id="BDic_sugar"><strong>Sugar</strong></a> - A generic name for soluble <a href="#BDic_carbohydrate">carbohydrate</a> moelcules, often contained in food.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_symbiosis"><strong>Symbiosis</strong></a> - A relationship between two organisms that live in intimate contact with each other; includes mutualism (both organisms benefit, they rely on each other for survival), parasitism (one organism benefits at its host's expense) and commensalism (one partner benefits and the other is neither benefitted nor harmed).
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_synangium"><strong>Synangium</strong></a> - A cluster of sporangia which have become fused in development.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_synapomorphy"><strong>Synapomorphy</strong></a> - A character which is derived, and because it is shared by the taxa under consideration, is used to infer common ancestry.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_synapsid"><strong>Synapsid</strong></a> - A vertebrate distinguished by a skull with one pair of openings in the sidebehind the eyes, e.g., mammals and their close relatives.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_synthetic"><strong>Synthetic</strong></a> - A synonyme of artifical.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_syntheticBiology"><strong>Synthetic Biology</strong></a> - An interdisciplinary domain of study, focused on engineering and creating novel forms of useful life.
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TWOx-E7l1ec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>
                                        Synthetic biology can be applied in industry, medicine, or even artificial intelligence research (wetware). It combines skills from life science, mathematics, engineering, chemistry, physical and computer science. 
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_system"><strong>System</strong></a> - A collection of devices and other components operating together to carry out some set of functions.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_systematics"><strong>Systematics</strong></a> - Field of biology that deals with the diversity of life. Systematics is usually divided into the two areas of phylogenetics and taxonomy.
                                </li>

                            <h1 class="dicSection" id="theLetter_T">T</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck" id="BDic_tALE">
                                    <a class="dicWord" data-category="genBio" id="BDic_talen"><strong>TALE, TALER, TALEN</strong></a> - <a href="#BDic_transcription">Transcription</a> activator-like effectors (<strong>TALEs</strong>) are <a href="#BDic_dna">DNA</a> binding <a href="#BDic_protein">proteins</a> that have a "code" relating just two specific <a href="#BDic_aminoAcid">amino acids</a> in their <a href="#BDic_dna">DNA</a>-binding regions to a <a href="#BDic_nucleotide">nucleotide</a> in the <a href="#BDic_dna">DNA</a> that is recognised. This "code" has been used by researchers to create a variety of <strong>TALE</strong> <a href="#BDic_protein">proteins</a> that bind specific <a href="#BDic_dna">DNA</a> operator sites.
                                    <p id="BDic_tALENs"><strong>TALE</strong> operator sites can be placed near <a href="#BDic_transcription">transcriptional</a> start sites to block <a href="#BDic_rnaPolymerase">RNA polymerase</a> binding and thus repress <a href="#BDic_geneExpression">gene expression</a>. <strong>TALEs</strong> used for this purpose are called <strong>TALE</strong> repressors, or <strong>TALERs</strong>. <strong>TALEs</strong> can also be modified to have <a href="#BDic_nuclease">nuclease activity</a>, and cut <a href="#BDic_dna">DNA</a> at specific locations in the genome. These are refered to <strong>TALE</strong> nucleases, or <strong>TALENs</strong>.</p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tag"><strong>Tag</strong></a> - A tag enables an experimenter to follow or extract a particular <a href="#BDic_molecule">molecule</a>, molecular species or even whole cells. <em>Exempli gratia</em> the His-tag enables experimenters to enrich for species containing said tag using columns (a nickel column for the His-tag). <a href="#BDic_fluorescence">Fluorescent</a> tags enable measurement with devices like plate readers or <a href="#BDic_facs">flow cytometers</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_taxon"><strong>Taxon</strong></a> - Any named group of organisms, not necessarily a clade; a taxon may be designated by a Latin name or by a letter, number, or any other symbol; taxa- pl.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_taxonomy"><strong>Taxonomy</strong></a> - The science of naming and classifying organisms.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_telson"><strong>Telson</strong></a> - The last segment of the abdomen in many arthropods. May be flat and paddlelike, buttonlike, or long and spiny, as in the horseshoe crabs.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_temperate"><strong>Temperate</strong></a> - Region in which the climate undergoes seasonal change in temperature and moisture. Temperate regions of the earth lie primarily between 30 and 60 degrees latitude in both hemispheres.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_tentacles"><strong>Tentacles</strong></a> - Appendages which are flexible, because they have no rigid skeleton. Cnidarians and molluscs are two kinds of orgnaisms which may have tentacles.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_tepal"><strong>Tepal</strong></a> - When the sepals and petals of a flower are indistinguishable, they are referred to as tepals. Tepals are common in many groups of monocots.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_terminator"><strong>Terminator</strong></a> - The process of termination is the stopping of <a href="#BDic_transcription">transcription</a>. This occurs due to particular sequences, terminator sequences, within the <a href="#BDic_dna">DNA</a>. Some terminators cause termination by causing the <a href="#BDic_rna">RNA</a> to fold into structures that cause the <a href="#BDic_rnaPolymerase">RNA</a> to release it. Others recruit <a href="#BDic_protein">proteins</a> which pull the freshly synthesised (nascent) <a href="#BDic_rna">RNA</a> out of the <a href="#BDic_rna">RNA</a> <a href="#BDic_polymerase">polymerase</a> or cause the release by other mechanisms.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_terrestrial"><strong>Terrestrial</strong></a> - Living on land, as opposed to marine or aquatic.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_test"><strong>Test</strong></a> - A hard shelll produced by some unicellular protists; may be made of calcium carbonate, silica, or sand grains.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tetO"><strong>TetO</strong></a> - Operator sequence for <a href="#BDic_tetR">TetR</a> <a href="#BDic_protein">protein</a> binding.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tetR"><strong>TetR</strong></a> - <a href="#BDic_dna">DNA</a> binding <a href="#BDic_protein">protein</a> commonly used for regulation of TRE promoters. Binds <a href="#BDic_tetO">TetO</a> operator sequence in the <a href="#BDic_dna">DNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tetracyclineTransActivator"><strong>Tetracycline Trans-activator (tTA)</strong></a> - Is a fusion of a tetracycline-destabilising <a href="#BDic_dna">DNA</a> binding domain and the <a href="#BDic_vp16">VP16</a> <a href="#BDic_tad">trans-activation domain</a>. Thus, in the presence of <a href="#BDic_doxycycline">DOX</a> (an analog of tetracycline) tTA can no longer bind to its target <a href="#BDic_promoter">promoter</a> - this system is referred to as <a href="#BDic_doxycycline">DOX</a>-off because in the absence of <a href="#BDic_doxycycline">DOX</a>, it activates <a href="#BDic_geneExpression">gene expression</a> at target <a href="#BDic_promoter">promoter</a> with tetracycline-responsive elements (TREs).
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tetracyclineResponsiveElement"><strong>Tetracycline-Responsive Element (TRE/pTRE)</strong></a> - A <a href="#BDic_promoter">promoter</a> that contains operator sequences (<a href="#BDic_tetO">TetO</a>) for a <a href="#BDic_tetR">TetR</a> <a href="#BDic_protein">protein</a> to bind. The TRE <a href="#BDic_promoter">promoter</a> contains multiple <a href="#BDic_tetO">TetO</a> sites and a minimal <a href="#BDic_cytomegaloVirus">CMV</a> core <a href="#BDic_promoter">promoter</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_tetrapod"><strong>Tetrapod</strong></a> - An animal with four limbs that evolved from a common fish ancestor during the Devonian Period (~365 million years ago). Tetrapods include amphibians, reptiles, birds, and mammals. Though "tetrapod" literally translates to "four-footed," many animals in this group have limbs adapted for different modes of transportation. Humans walk upright on two legs; the legs of whales, dolphins, and other marine mammals have evolved into fins and flippers; and snakes have lost their legs all together. Tetrapods are generally thought of as terrestrial animals, but some, like dolphins and whales, have returned to marine habitats.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_thalloid"><strong>Thalloid</strong></a> - Plants which have no roots, stems, or leaves are called thalloid, such as liverworts and hornworts.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_theca"><strong>Theca</strong></a> - General term for any stiff outer covering of a unicellular protist, and usually made up of interlocking plates. dinoflagellates and diatoms are examples of protists with thecae.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_thermocycler"><strong>Thermocycler</strong></a> - A machine that can rapidly change temperatures in a programmable fashion, <em>exempli gratia</em> in loops (cycles of steps). Used for running reactions such as <a href="#BDic_pcr">PCR</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_thermolabile"><strong>Thermolabile</strong></a> - Refers to a <a href="#BDic_protein">protein</a>, <a href="#BDic_enzyme">enzyme</a>, or molecule that is (generally) negatively impacted or destroyed/<a href="#BDic_denatures">denatures</a> by heat. An example would be a thermosensitive <a href="#BDic_oriR">origin of replication</a> or a thermolabile T5 <a href="#BDic_exonuclease">exonuclease</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_thermoStable"><strong>Thermostable</strong></a> - Resistant to high temperature. A thermostable <a href="#BDic_enzyme">enzyme</a> is still active at elevated temperatures (<em>exempli gratia</em> near boiling) and have been found in organisms that live in extreme environments, <em>exempli gratia</em> deep sea thermal vents.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_thorax"><strong>Thorax</strong></a> - In insects, the second body region, between the head and thorax. It is the region where the legs and wings are attached.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tightJunction"><strong>Tight junction</strong></a> - Intercellular structure which forms an almost perfect continuous seal between two adjacent <a href="#BDic_epithelium">epithelial cells</a> close to their <a href="#BDic_apical">apical</a> (side which faces the lumen) side. The tightness of the seal may vary depending on the kind of <a href="#BDic_epithelium">epithelium</a>. It acts as a filter which lets water and some other <a href="#BDic_ion">ions</a> come through and into the organism. These tight junctions are also important in halting the <a href="#BDic_diffusion">diffusion</a> of <a href="#BDic_protein">proteins</a> and cytoplasmique glycolipids from the <a href="#BDic_apical">apical</a> side of the <a href="#BDic_cell">cell</a> to the <a href="#BDic_basolateral">basolateral</a> side.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_timescaleSeparation"><strong>Timescale Separation</strong></a> - A method for simplifying time-dependent systems. It is often the case that a system has processes which have timescales (how long it takes for the system to reach <a href="#BDic_equilibrium">equilibrium</a>) differing by one or more orders of magnitude. For example, the timescale of <a href="#BDic_transcriptionFactor">transcription factors</a> binding to <a href="#BDic_dna">DNA</a> is short, as the binding <a href="#BDic_equilibrium">equilibrium</a> is reached within milliseconds or less. However, the process of producing a mature <a href="#BDic_protein">protein</a> can take minutes or more. Hence, when analysing a system where both processes occur, the binding can be considered to be at <a href="#BDic_equilibrium">equilibrium</a> when discussing how <a href="#BDic_protein">protein</a> dynamics look.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_timingDiagram"><strong>Timing Diagram</strong></a> - A diagram showing how a system behaves and <a href="#BDic_evolution">evolves</a> over time. For digital systems, a timing diagram shows the state of the system (and possibly signals within the system) at each tick of a clock. Often a timing diagram is depicted as a table, where each row shows a signal and each column shows an instance of time. The value in the table is the value of the particular signal at the particular time. Another way to depict the timing diagram is to draw a value trace over time for each signal and stack them such that time flows left to right.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_tissue"><strong>Tissue</strong></a> - A group of cells with a specific function in the body of an organism. Lung tissue, vascular tissues, and muscle tissue are all kinds of tissues found in some animals. Tissues are usually composed of nearly identical cells, and are often organized into larger units called organs.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tissue"><strong>Tissue</strong></a> - An organised collection of similar <a href="#BDic_cell">cells</a> Multiple tissues make up <a href="#BDic_organ">organs</a>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_topology"><strong>Topology</strong></a> - In the context of regulatory networks, the topology refers to the way the <a href="#BDic_node">nodes</a> (<em>exempli gratia</em> <a href="#BDic_gene">genes</a>) are connected (which kinds of arrows go from which <a href="#BDic_node">nodes</a> to which <a href="#BDic_node">nodes</a>). An abstract gene-regulatory network has some topology that could be implemented by many ways by choosing the suitable components for each node.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_toxin"><strong>Toxin</strong></a> - A substance (small <a href="#BDic_molecule">molecule</a>, peptide, <a href="#BDic_protein">protein</a>) that kills cells or even whole organisms. Toxin-antitoxin pairs can be useful in biotechnology where the presence of the antitoxin confers resistance to the toxin, enabling <a href="#BDic_selection">selection</a>. Producing a toxin as the output of a circuit can be used in medical applications, <em>exempli gratia</em> to kill cancerous cells or infectious <a href="#BDic_bacteria">bacteria</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_tracheae"><strong>Tracheae</strong></a> - Internal tubes through which air is taken for respiration. Vertebrates with lungs have a single trachea carrying air to the lungs, while insects and some other land-living arthropods have a complex network of tracheae carrying air from the spiracles to all parts of the body.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_tracheophyte"><strong>Tracheophyte</strong></a> - Any member of the clade of plants possessing vascular tissue; a vascular plant.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transCis"><strong>Trans/Cis</strong></a> - Trans means two things on opposite sides from one another, and cis means to things which are on the same side.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transactivationDomain"><strong>Transactivation Domain, TAD</strong></a> - A domain of a <a href="#BDic_transcriptionFactor">transcription factor</a> that interacts with the <a href="#BDic_transcription">transcriptional</a> machinery, cofactors, and/or <a href="#BDic_chromatin">chromatin</a> modifying machinery (eukaryotes only) in order to facilitate formation of the <a href="#BDic_tightJunction">transcriptional initiation complex (TIC)</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transcription"><strong>Transcription</strong></a> - <a href="#BDic_transcription">Transcription</a> is the process of creating an <a href="#BDic_rna">RNA</a> transcript based on information in <a href="#BDic_dna">DNA</a>. A <a href="#BDic_promoter">promoter</a> drives <a href="#BDic_transcription">transcription</a> and decides when and how much transcript is made. The transcript or resulting <a href="#BDic_mRna">mRNA</a> is then transformed into a <a href="#BDic_protein">protein</a> in a process called <a href="#BDic_translation">translation</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transcriptionFactor"><strong>Transcription Factor, TF</strong></a> - A <a href="#BDic_protein">protein</a> that binds operator sequences in the <a href="#BDic_promoter">promoter</a> or <a href="#BDic_enhancer">enhancer</a> regions distal from the <a href="#BDic_promoter">promoter</a>. Activates or represses <a href="#BDic_transcription">transcription</a> depending on the presence of a <a href="#BDic_tad">trans-activation</a> or trans-repression domain, respectively. Also can contain a signal-sensing domain, which allows for external regulation of <a href="#BDic_dna">DNA</a>-binding or cellular localisation, <em>exempli gratia</em> by small <a href="#BDic_molecule">molecules</a> or <a href="#BDic_hormone">hormones</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transcriptionalFusion"><strong>Transcriptional Fusion</strong></a> - A mechanism for generating several <a href="#BDic_transcription">transcripts</a> from the same input. For example, using the same <a href="#BDic_promoter">promoter</a> for different <a href="#BDic_gene">genes</a> causes all of the <a href="#BDic_gene">genes</a> to be <a href="#BDic_transcription">transcribed</a> if the appropriate input is present. Several <a href="#BDic_transcription">transcripts</a> can sometimes also be produced if processing of a single <a href="#BDic_transcription">transcript</a> creates several, <em>exempli gratia</em> if there is a self-<a href="#BDic_cleavage">cleaving</a> <a href="#BDic_rna">RNA</a> element in the <a href="#BDic_transcription">transcript</a>. These <a href="#BDic_transcription">transcripts</a> are produced in equal amounts, but can contain different information. See <a href="#BDic_translationalFusion">Translational Fusion</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transcriptome"><strong>Transcriptome</strong></a> - Refers to the set of all <a href="#BDic_rna">RNA</a> molecules produced and contained by one <a href="#BDic_cell">cell</a> or population of <a href="#BDic_cell">cells</a>.
                                    <p>
                                        Transcriptomes can be studied and built by <a href="#BDic_dnaMicroarray">DNA microarray assays</a> and <a href="#BDic_rnaSeq">next-gen sequencing</a> such as <a href="#BDic_rnaSeq">RNA seq</a>.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_transduction"><strong>Transduction</strong></a> - Viral transfer of DNA to new host.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transfection"><strong>Transfection</strong></a> - The process of introducing new genetic material into <a href="#BDic_cell">cells</a>, mostly used when talking about <a href="#BDic_mammal">mammalian</a> cells (similar to <a href="#BDic_transformation">transformation</a> in <a href="#BDic_bacteria">bacteria</a>).
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_transformation"><strong>Transformation</strong></a> - The process of introducing new genetic material into cells, mostly used when talking about <a href="#BDic_bacteria">bacterial</a> cells (similar to <a href="#BDic_transfection">transfection</a> in <a href="#BDic_mammal">mammalian</a> cells). Transformation can be performed by electrical and or chemical means, <em>exempli gratia</em> <a href="#BDic_electroporation">electroporation</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_translation"><strong>Translation</strong></a> - The process of creating a <a href="#BDic_peptide">peptide</a> i.e. <a href="#BDic_protein">protein</a> (sequence of <a href="#BDic_aminoAcid">amino acids</a>). <em>Exempli gratia</em> a <a href="#BDic_protein">protein</a> or <a href="#BDic_enzyme">enzyme</a>) based on the sequence of an <a href="#BDic_mRna">mRNA</a>. The <a href="#BDic_ribosome">ribosome</a> is the key <a href="#BDic_enzyme">enzyme</a> in this process, which also requires <a href="#BDic_tRNA">tRNA</a>s charged with <a href="#BDic_aminoAcid">amino acids</a>. <a href="#BDic_aminoAcid">Amino acids</a> are linked together through <a href="#BDic_protein">peptide bonds</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_translationalFusion"><strong>Translational Fusion</strong></a> - A <a href="#BDic_protein">protein</a> fusion where the two <a href="#BDic_protein">proteins</a> are <a href="#BDic_translation">translated</a> together. The coding sequences of <a href="#BDic_translation">translationally</a> fused <a href="#BDic_protein">proteins</a> are on the same <a href="#BDic_mRna">mRNA</a> and form a single <a href="#BDic_polypeptide">polypeptide</a> chain when <a href="#BDic_translation">translated</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_tree"><strong>Tree</strong></a> - Any tall plant, including many conifers and flowering plants, as well as extinct lycophytes and sphenophytes.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_trichocyst"><strong>Trichocyst</strong></a> - Organelle in ciliates and dinoflagellates which releases long filamentous proteins when the cell is disturbed. Used as a defense against would-be predators.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_tropical"><strong>Tropical</strong></a> - Region in which the climate undergoes little seasonal change in either temperature or rainfall. Tropical regions of the earth lie primarily between 30 degrees north and south of the equator.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_tRna"><strong>tRNA</strong></a> - Transfer <a href="#BDic_rna">RNA</a>. These special <a href="#BDic_rna">RNA</a>s have a particular structure and many chemical modifications. They are charged with <a href="#BDic_aminoAcid">amino acids</a>; the charged tRNAs are then used in <a href="#BDic_protein">protein</a> synthesis i.e. <a href="#BDic_translation">translation</a>. The tRNA has a three <a href="#BDic_nucleotide">nucleotide</a> <a href="#BDic_antiCodon">anticodon</a> loop, which complements a three <a href="#BDic_nucleotide">nucleotide</a> <a href="#BDic_codon">codon</a> on an <a href="#BDic_mRna">mRNA</a> in the <a href="#BDic_ribosome">ribosome</a>, enabling the <a href="#BDic_ribosome">ribosome</a> to create a new peptide chain from the sequence of an <a href="#BDic_mRna">mRNA</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_tubeFeet"><strong>Tube Feet</strong></a> - Extensions of the water-vascular system of echinoderms, protruding from the body and often ending in suckers. May be used for locomotion and/or for maintaining a tight grip on prey or on the bottom.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_tuber"><strong>Tuber</strong></a> - An underground stem which has been modified for storage of nutrients, such as a potato.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_tubercle"><strong>Tubercle</strong></a> - Any small rounded protrusion. In pycnogonids and some cheliceramorph arthropods, the central eyes are carried on a tubercle.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_tundra"><strong>Tundra</strong></a> - A vast, mostly flat, treeless Arctic region of Europe, Asia, and North America in which the subsoil is permanently frozen. The dominant vegetation is low-growing lichens, mosses, and stunted shrubs.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_turgorPressure"><strong>Turgor Pressure</strong></a> - Force exerted outward on a cell wall by the water contained in the cell. This force gives the plant rigidity, and may help to keep it erect.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_twoSubstrateEnzyme"><strong>Two Substrate Enzyme</strong></a> - An enzyme mechanism refers to the way a reaction occurs, that is the order of binding. Here we consider an enzyme that intakes two different substrates, the reaction can happen in five different ways:
                                        <figure>
                                            <img class="lazy" data-src="/dictionaries/documents/biology/twoMechanismEnzyme.svg">
                                            <figcaption>Enzyme with two substrates can have various different mechanisms. Described by the diagrams, also shown the double inverses associated to the reactions and the substrates.</figcaption>
                                        </figure>
                                        <ol>
                                            <li>
                                                Sequential random dependent mechanism.
                                            </li>
                                            <li>
                                                Sequential random independant mechanism.
                                            </li>
                                            <li>
                                                Sequential ordered mechanism.
                                            </li>
                                            <li>
                                                Ping-pong mechanism.
                                            </li>
                                            <li>
                                                Theorell-Chance mechanism.
                                            </li>
                                        </ol>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_typeIIRestrictionEnzymes"><strong>Type II Restriction Enzymes</strong></a> - These <a href="#BDic_restrictionEnzyme">restriction enzymes</a> are used to <a href="#BDic_cleavage">cleave</a> double-stranded <a href="#BDic_dna">DNA</a> in a location that is outside the recognition sequence of the <a href="#BDic_enzyme">enzyme</a>. They are particularly useful for <a href="#BDic_dnaAssembly">DNA assembly</a>, as they enable creating arbitrary <a href="#BDic_overhang">overhang</a> sequences. Commonly used Type IIs <a href="#BDic_enzyme">enzymes</a> include BsaI and BbsI, which are both used in <a href="#BDic_goldenGate">Golden Gate</a> or <a href="#BDic_moClo">MoClo assembly</a>.
                                </li>

                            <h1 class="dicSection" id="theLetter_U">U</h1>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_ultrastructure"><strong>Ultrastructure</strong></a> - The detailed structure of a specimen, such as a cell, tissue, or organ, that can be observed only by electron microscopy. Also called fine structure. In eggshell, ultrastructure refers to the three-dimensional arrangement of mineral crystals and organic matter. It is described in terms of calcite or aragonite mineralogy and the transition between different zones of organization within the shell. Distinct zones of organization are called ultrastructure zones.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_undulipodium"><strong>Undulipodium</strong></a> - Another term for a eukaryotic flagellum.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_uniCellular"><strong>Unicellular</strong></a> - A type of organism which is wholly contained inside a <a href="#BDic_cell">single cell</a>. <a href="#BDic_bacteria">Bacteria</a> and <a href="#BDic_yeast">yeast</a> are prime examples of unicellular life.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_uniramious"><strong>Uniramious</strong></a> - Among arthropods, uniramous refers to appendages that have only one branch. Insects, centipedes and millipedes, and their relatives are uniramous arthropods; land-living chelicerates such as scorpions, spiders,and mites are also uniramous but probably descended from ancestors with biramous appendages. Contrast with biramous.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_untranslatedRegion"><strong>Untranslated Region (UTR)</strong></a> - Sequences in the <a href="#BDic_5Prime">5'</a> and <a href="#BDic_3Prime">3'</a> ends of an <a href="#BDic_mRna">mRNA</a> that are <a href="#BDic_transcription">transcribed</a>, but not <a href="#BDic_translation">translated</a>. UTRs often harbor regulatory elements, for example <a href="#BDic_protein">protein</a> binding sites (including the <a href="#BDic_ribosome">ribosome</a> binding site), <a href="#BDic_miRna">miRNA</a> binding sites, <a href="#BDic_conformation">secondary structures</a> <em>exempli gratia</em> <a href="#BDic_riboSwitch">riboswitches</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_upstream"><strong>Upstream</strong></a> - A region of <a href="#BDic_dna">DNA</a> is upstream of a sequence if it is on the <a href="#BDic_5Prime">5'</a> side of the sequence of interest, it is always relative to some reference, <em>exempli gratia</em> the <a href="#BDic_promoter">promoter</a> is upstream of the coding strand of a <a href="#BDic_gene">gene</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_upstreamActivationSequence"><strong>Upstream Activation Sequence (UAS/pUAS)</strong></a> - A specific sequence of <a href="#BDic_dna">DNA</a> recognised by <a href="#BDic_gal4">Gal4</a>. The UAS <a href="#BDic_promoter">promoter</a> contains multiple UAS sites and a minimal <a href="#BDic_cytomegaloVirus">CMV</a> core <a href="#BDic_promoter">promoter</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="ecology" data-src="berk">
                                    <a class="dicWord" data-category="ecology" id="BDic_upwelling"><strong>Upwelling</strong></a> - The raising of benthic nutrients to the surface waters. This occurs in regions where the flow of water brings currents of differing temperatures together, and increases productivity of the ecosystem.
                                </li>

                            <h1 class="dicSection" id="theLetter_V">V</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_vP16"><strong>VP16</strong></a> - Herpes simplex virus (HSV) viral protein 16 (VP16) <a href="#BDic_tad">trans-activation domain (TAD)</a>. Stongly activates <a href="#BDic_geneExpression">gene expression</a> in <a href="#BDic_eukaryota">eukaryotic</a> <a href="#BDic_cell">cells</a> when fused to a <a href="#BDic_dna">DNA</a> binding <a href="#BDic_protein">protein</a>, commonly Gal4.
                                </li>
                                <li class="wordDefined" data-dictionary="bioCell" data-src="berk">
                                    <a class="dicWord" data-category="bioCell" id="BDic_vacuole"><strong>Vacuole</strong></a> - Membrane-bound fluid-filled space within a cell. In most plant cells, there is a single large vacuole filling most of the cell's volume. Some bacterial cells contain gas vacuoles.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_variance"><strong>Variance</strong></a> - A statistical measure describing the spread of a random variable around its mean. A tight distribution has small variance and thus most of the values are close to the mean. The variance is related to the standard deviation by \( Var(x) = \sigma^2 \) Mathematically, <span class="mathsNumbers">\( Var(X) = E[(X – E[X])^2] \);</span> the variance is the expectation of the square of the difference of the random variable from its mean. The variance can also be calculated by taking the difference of the expectation of the square of the variable and the expectation of the variable, squared:
                                        <div class="mathsFormulas">
                                            $$
                                                Var(X) = E[X^2] – (E[X])^2
                                            $$
                                        </div>
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_vascular"><strong>Vascular</strong></a> - Refers to a network of tubes which distribute nutrients and remove wates from the tissues of the body. Large multicellular animals must rely on a vascular system to keep their cells nourished and alive.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_vector"><strong>Vector</strong></a> - A vector is a <a href="#BDic_dna">DNA</a> molecule that can be used as a carrier of an artificial sequence of interest to be <a href="#BDic_clone">cloned</a> into another cell.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_vegetativeGrowth"><strong>Vegetative Growth</strong></a> - Growth of a plant by division of cells, without sexual reproduction.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_venation"><strong>Venation</strong></a> - The arrangement and pattern of veins in a leaf.
                                </li>
                                <li class="wordDefined" data-dictionary="zoology" data-src="berk">
                                    <a class="dicWord" data-category="zoology" id="BDic_vertebra"><strong>Vertebra</strong></a> - A component of the vertebral column, or backbone, found in vertebrates.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_vesicle"><strong>Vesicle</strong></a> - Vesicles are <a href="#BDic_lipidBilayer">lipid bilayer</a> structures that contain liquid and materials of interest. <a href="#BDic_dna">DNA</a>, <a href="#BDic_rna">RNA</a> and <a href="#BDic_protein">proteins</a> can all be delivered to cultured cells using vesicles created in a mixture of the desired payload. As the vesicles form, they encapsulate the <a href="#BDic_nucleicAcid">nucleic acids</a> and <a href="#BDic_protein">proteins</a> in the mixture. The vesicles can merge with the cell outer layer or be <a href="#BDic_endocytosis">endocytosed</a>, both leading to the delivery of the payload (though through different biological mechanisms). Reagents are commercially available for this purpose, optimised for different payload types, amounts, and sizes.
                                </li>
                                <li class="wordDefined" data-dictionary="phyloGenetics" data-src="berk">
                                    <a class="dicWord" data-category="phyloGenetics" id="BDic_vicariance"><strong>Vicariance</strong></a> - Speciation which occurs as a result of the separation and subsequent isolation of portions of an orginal population.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_virus"><strong>Virus</strong></a> - A virus can be simply explained as a <a href="#BDic_protein">protein</a> and <a href="#BDic_gene">genetic</a> material complex. These are pseudoorganisms and there is much debate as to whether they should or not be classified as living. Viruses have no metabolism and are incapable or reproduction without parasitic use of a <a href="#BDic_host">host cell</a>'s biological machinery. Some viruses may contain <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a> in the case of <a href="#BDic_rna">RNA</a> it may be either <a href="#BDic_positiveRna">positive RNA</a> or negative.
                                    <p>Viruses are complex "organisms" with a variety of forms, shapes, and sizes. Some present simple parasitic cycles while others integrate completely into the <a href="#BDic_host">host</a>'s <a href="#BDic_dna">DNA</a> as HIV does. See <a href="#BDic_envelopedVirus">enveloped virus</a>.</p>
                                </li>

                            <h1 class="dicSection" id="theLetter_W">O</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_watsonStrand"><strong>Watson Strand (5' &rarr; 3')</strong></a> - The <a href="#BDic_senseSequence">sense strand</a> complementary to the <a href="#BDic_crickStrand">Crick strand (3' &larr; 5')</a>. This strand matches the <a href="#BDic_mRna">mRNA</a> sequence after T-S are replaced with U-S.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_westernBlot"><strong>Western Blot (immunoblot)</strong></a> - A lab technique used for detecting the expression of specific <a href="#BDic_protein">proteins</a> in a tissue sample or extract.
                                    <p>
                                        The first step is generally to migrate the proteins by a classic <a href="#BDic_electrophoresis">electrophoretic gel</a>, then to "blot" the gel with a membrane (normally nitrocellulose or polyvinyldene fluoride) which holds <a href="#BDic_antibody">antibodies</a> specific to the <a href="#BDic_protein">protein</a> of interest. This will only reveal the bands which contained said <a href="#BDic_protein">protein</a>.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_whorl"><strong>Whorl</strong></a> - An arrangement of appendages, such as branches or leaves, such that all are equally spaced around the stem at the same point, much like the spokes of a wheel or the ribs of an umbrella
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="berk">
                                    <a class="dicWord" data-category="botany" id="BDic_wood"><strong>Wood</strong></a> - A secondary tissue found in seed plants which consists largely of xylem tissue.
                                </li>

                            <h1 class="dicSection" id="theLetter_X">X</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_xGal"><strong>X-Gal</strong></a> - A colourless <a href="#BDic_galactose">galactose</a> <a href="#BDic_derivative">derivative</a>. When <a href="#BDic_cleavage">cleaved</a> by <a href="#BDic_betaGalactosidase">β-galactosidase</a> (encoded by the <a href="#BDic_lacZ">LacZ gene</a>), gives rise to two products: <a href="#BDic_galactose">galactose</a> and an <a href="#BDic_indole">indole</a>. <a href="#BDic_indole">Indole</a> spontaneously forms a <a href="#BDic_dimer">dimer</a> which has a blue colour. This allows to test for the presence of <a href="#BDic_betaGalactosidase">β-galactosidase</a> activity and by extension the activity or presence of the <a href="#BDic_lacZ">LacZ gene</a>.
                                </li>
                                <li class="wordDefined" data-dictionary="botany" data-src="origDereck">
                                    <a class="dicWord" data-category="botany" id="BDic_xylem"><strong>Xylem</strong></a> - Water transporting tissues found in vascular plants.
                                </li>

                            <h1 class="dicSection" id="theLetter_Y">Y</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_yeast"><strong>Yeast</strong></a> - A class of mostly <a href="#BDic_uniCellular">unicellular</a> <a href="#BDic_eukaryota">eukaryotic</a> organisms. These easy-to-culture organisms are often used in biology and <a href="#BDic_syntheticBiology">synthetic biology</a> as test organisms or chassis. Commonly used yeast species include <a href="#BDic_sCerevisiae"><em>Saccharomyces cerevisiae</em></a> (brewer's yeast or baker's yeast; unlike other <a href="#BDic_eukaryota">eukaryotes</a> it is missing the <a href="#BDic_rnaI">RNAi</a> machinery). Some notable species are <em>Kluyveromyces lactis</em> which can convert lactose to lactic acid, and <em>Schizosaccharomyces pombe</em> fission yeast; this yeast has <a href="#BDic_rnaI">RNAi</a> machinery.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_yellowFluorescentProtein"><strong>Yellow Fluorescent Protein (YFP/eYFP)</strong></a> - Yellow <a href="#BDic_fluorescentMarker">fluorescent protein</a>. "E" denotes newer enhanced version.
                                </li>

                            <h1 class="dicSection" id="theLetter_Z">Z</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_zincFinger"><strong>Zinc Finger (ZF)</strong></a> - A <a href="#BDic_dna">DNA</a> binding protein motif, often seen in <a href="#BDic_transcriptionFactor">transcription factors</a>. In the folded motif, a zinc ion is coordinated by <a href="#BDic_aminoAcid">amino acid</a> helices and sheets. Many motifs bind sequence-specifically (3-4 <a href="#BDic_basePair">base pairs</a>) and can be combined together to bind longer sequences (9-12 basepairs). While a "code" exist (mapping of motifs to sequences), technologies like <a href="#BDic_taleS">TALEs</a> or <a href="#BDic_crisprCas9">CRISPR/Cas9</a> are often preferred for engineering <a href="#BDic_dna">DNA</a> binding <a href="#BDic_protein">proteins</a>, as the code is more clear and specific in these; increasing the rate of success.
                                </li>

                            <h1 class="dicSection" id="theLetter_SYMBOLS">#</h1>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_betaCells"><strong>&beta;-Cells</strong></a> - &beta;-cells are a type of <a href="#BDic_cell">cell</a> found in the pancreas, the pancreatic islets more precisely. These <a href="#BDic_cell">cells</a> are responsible for the synthesis and secretion of <a href="#BDic_insulin">insulin</a> and <a href="#BDic_amylin">amylin</a>.
                                    <p>
                                        They make up around 50 - 70% of all the cells in the islets. People with type-I diabetes have their &beta;-cells iradicated and thus produce no insulin.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_betaGalactosidase"><strong>β-Galactosidase (lactase, β-gal, beta-gal)</strong></a> - Is a glycoside hydrolase enzyme which catalyses the breakdown of β-galactosides into monosaccharides. It is commonly used in molecular biology as a <a href="#BDic_reporter">reporter gene</a> to monitor gene expression. Microorganisms, or other, producing this enzyme can break down <a href="#BDic_xGal">x-gal (5-bromo-4-chloro-3-indolyl-β-d-galactopyranoside)</a>, an artificial chromogenic substrate. Cleavage of this substrate produces a blue colour. It can be mixed in <a href="#BDic_petriDish">petri dishes</a>; known as <a href="#BDic_blueWhiteScreening">blue/white screening</a>.
                                    <p>
                                        This enzyme can be split into two complimentary peptides LacZ&alpha; and LacZ&Omega;; neither active by itself but together can break down <a href="#BDic_xGal">x-gal</a>.
                                    </p>
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_2ALinker"><strong>2A Linker</strong></a> - A class of self-<a href="#BDic_cleavage">cleaving</a> peptide linkers placed between two <a href="#BDic_protein">proteins</a>. Used to <a href="#BDic_geneExpression">express</a> multiple <a href="#BDic_protein">proteins</a> from a single <a href="#BDic_transcription">transcription</a> unit.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_2dElectrophoresis"><strong>2D Electrophoresis</strong></a> - A 2D electrophoresis, is a variant of the <a href="#BDic_electrophoresis">electrophoresis</a> lab method. Usually the first <a href="#BDic_electrophoresis">electrophoresis</a> is done to migrate proteins based on their mobility which is dependent on the charge/mass ratio. Then a second migration is done in the other dimension, or perpendicular to the first; now migrating the proteins based on their <a href="#BDic_pHi">potential hydrogen isoelectric point (pHi)</a>. By doing this we can reveal different proteins that might have been hidden all in one band.
                                </li>
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_3Prime"><strong>3 Prime End (3')</strong></a> - The 3' or 3 prime end of a <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a> molecule is the end that holds the hydroxyl group (<sup>-</sup>OH). The other end of a nucleic strand is the <a href="#BDic_5Prime">5' or 5 prime end </a>, which has the phosphate group (<sup>-</sup>PO<sub>4</sub>). For an illustration see the figure for <a href="#BDic_dna">DNA</a>.
                                </li>
                                <!-- <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_5PrimeCap"><strong>5 Prime Cap (5' Cap)</strong></a> -
                                </li> -->
                                <li class="wordDefined" data-dictionary="genBio" data-src="origDereck">
                                    <a class="dicWord" data-category="genBio" id="BDic_5Prime"><strong>5 Prime End (5')</strong></a> - The 5' or 5 prime end of a <a href="#BDic_dna">DNA</a> or <a href="#BDic_rna">RNA</a> molecule is the end that holds the terminal phosphate (<sup>-</sup>PO<sub>4</sub>). This allows for the formation of the <a href="#BDic_phosphodiesterBond">phosphodiester bond</a> between two <a href="#BDic_nucleotide">nucleotides</a>. The other end of a nucleic strand is the <a href="#BDic_3Prime">3' or 3 prime end </a>, which has the hydroxyl group (<sup>-</sup>OH). For an illustration see the figure for <a href="#BDic_dna">DNA</a>.
                                </li>
                        </ol>

                    </div>
                </article>
            </div>
        </div>

    </body>
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>
</html>