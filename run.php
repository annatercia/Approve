<?php
    /**
     * GraphViz rendering example
     *
     * This example demonstrates converting an EasyRdf\Graph into the
     * GraphViz graph file language. Using the 'Use Labels' option, you
     * can have resource URIs replaced with text based labels and using
     * 'Only Labelled' option, only the resources and properties with
     * a label will be displayed.
     *
     * Rending a graph to an image will only work if you have the
     * GraphViz 'dot' command installed.
     *
     * @package    EasyRdf
     * @copyright  Copyright (c) 2012-2014 Nicholas J Humfrey
     * @license    http://unlicense.org/
     */


//__******************ALTEREI ESSE CAMINHO COM /.. A MAIS PRA FUNCIONAR!!!! *******************
    require_once "vendor/autoload.php";
    require_once "easyrdf-1.1.1/examples/html_tag_helpers.php";

    $formats = array(
      'PNG' => 'png',
      'GIF' => 'gif',
      'SVG' => 'svg'
    );

    $format = \EasyRdf\Format::getFormat(
        isset($_REQUEST['format']) ? $_REQUEST['format'] : 'png'
    );

    // Construct a graph of three people
    $graph = new \EasyRdf\Graph();
    $graph->set('foaf:knows', 'rdfs:label', 'knows');
    $anna = $graph->resource('orcid: 0000-0001-7806-0925', 'foaf:Person');
    $alice = $graph->resource('http://www.example.com/alice', 'foaf:Person');
    $carol = $graph->resource('http://www.example.com/carol', 'foaf:Person');
    $anna->set('foaf:name', 'Annatercia Gomes Pinheiro');
    $alice->set('foaf:name', 'Alice');
    $carol->set('foaf:name', 'Carol');
    $anna->add('foaf:knows', $alice);
    $anna->add('foaf:knows', $carol);
    $alice->add('foaf:knows', $anna);
    $alice->add('foaf:knows', $carol);


    // Create a GraphViz serialiser
    $gv = new \EasyRdf\Serialiser\GraphViz();
    $gv->setUseLabels(isset($_REQUEST['ul']));
    $gv->setOnlyLabelled(isset($_REQUEST['ol']));

    // If this is a request for the image, just render it and exit
    if (isset($_REQUEST['image'])) {
        header("Content-Type: ".$format->getDefaultMimeType());
        echo $gv->renderImage($graph, $format);
        exit;
    }
?>
<html>
<head><title>EasyRdf GraphViz Example</title></head>
<body>
<h1>EasyRdf GraphViz Example</h1>

<form action='' method='get'>
<?php
    echo label_tag('format').' '.select_tag('format', $formats).tag('br');
    echo label_tag('ul', 'Use labels:').' '.check_box_tag('ul').tag('br');
    echo label_tag('ol', 'Only labelled:').' '.check_box_tag('ol').tag('br');
    echo submit_tag();
?>
</form>

<div>
    <img src='?image&<?=$_SERVER["QUERY_STRING"]?>' />
</div>

<pre style="margin: 0.5em; padding:0.5em; background-color:#eee; border:dashed 1px grey;">
<?php
    print htmlspecialchars(
        $gv->serialise($graph, 'dot')
    );
?>
</pre>

<?php
$txtrdf="@prefix xsd:  <http://www.w3.org/2001/XMLSchema#> .
@prefix foaf: <http://xmlns.com/foaf/0.1/> .
@prefix prov: <http://www.w3.org/ns/prov#> .
@prefix :     <http://example.org#> .

:bar_chart
   a prov:Entity;
   prov:wasGeneratedBy  :illustrationActivity;
   prov:wasDerivedFrom  :aggregatedByRegions;
   prov:wasAttributedTo :derek;
.

:derek
   a foaf:Person, prov:Agent;
   foaf:givenName       'Derek';
   foaf:mbox            <mailto:derek@example.org>;
   prov:actedOnBehalfOf :natonal_newspaper_inc;
.

:national_newspaper_inc 
   a foaf:Organization, prov:Agent;
   foaf:name 'National Newspaper, Inc.';
.

:illustrationActivity 
   a prov:Activity; 
   prov:used              :aggregatedByRegions;
   prov:wasAssociatedWith :derek;
   prov:wasInformedBy     :aggregationActivity;
.

:aggregatedByRegions
   a prov:Entity;
   prov:wasGeneratedBy  :aggregationActivity;
   prov:wasAttributedTo :derek;
.

:aggregationActivity
   a prov:Activity;
   prov:startedAtTime    '2011-07-14T01:01:01Z'^^xsd:dateTime;
   prov:wasAssociatedWith :derek;
   prov:used              :crimeData;
   prov:used              :nationalRegionsList;
   prov:endedAtTime      '2011-07-14T02:02:02Z'^^xsd:dateTime;
.

:crimeData
   a prov:Entity;
   prov:wasAttributedTo :government;
.
:government a foaf:Organization, prov:Agent .

:nationalRegionsList 
   a prov:Entity;
   prov:wasAttributedTo :civil_action_group;
.
:civil_action_group a foaf:Organization, prov:Agent .";

$prov = new EasyRdf\Graph("http://njh.me/prov.rdf");
$prov->load();
$me = $prov->load();
echo "My name is: ".$me->get('foaf:name')."\n";
?>

</body>
</html>
