<?php
$product = [
  "productName"=> "banners",
  "imageName"=> "banners.png",
  "imageAlt"=> "banners",
  "selects"=> [
    "sides-x"=> [
      "options"=> [
        "single"=> "Single Sided",
        "double"=> "Double Sided" 
      ],
      "label"=>"# of Sides"
    ],
    "material"=> [
      "options"=>[
        "matte"=> "13 oz. Matte Vinyl Banner - 56' max",
        "glossy"=> "13 oz. Glossy Vinyl Banner - 56' max"
      ],
      "label"=> "Material "
    ],
    "grommets" => [
      "options"=>[
        "none"=> "--NONE--",
        "standard"=> "Every 2 ft (all 4 sides)",
        "top_bottom"=> "Every 2 ft (top & bottom)",
        "left_right"=> "Every 2 ft (left & right)",
        "top"=> "Top only",
        "bottom"=> "Bottom only",
        "left"=> "Left only",
        "right"=> "Right only",
        "corners"=> "Corners only"
      ],
      "label"=> "Grommets "
    ],
    "hemming"=> [
      "options"=> [
        "none"=> "--NONE--",
        "yes"=> "Yes, all sides"
      ],
      "label"=> "Hemming "
    ]
  ]
  ];

  ?>
<section class='<?php echo $product['productName'] ?>__section'>
  <h1>Custom <?php echo $product['productName']?></h1>
  <div id='error'></div>
  <div class='row'>

  <!-- LEFT SIDE -->
  <div class='col s12 m12 l4 product-left'>
    <img src='../img/<?php echo $product['imageName']?>' alt='<?php echo $product['imageAlt']?>' class='responsive-img p2'>
  </div>

  <!-- RIGHT SIDE -->
  <form 
    autocomplete='off'
    class='col s12 m12 l8 product-right'
    action='../includes/product_calc.inc.php'
    id='product-form'
    method='POST'
  >
    <input type='text' hidden id='total' name='total'>
    <div class='row'>
      <h5 id='totalStr'>Total: $20.00</h5>
      <p class='red-text'>* Required Fields</p>
    </div>
    <div class='input-field col s6'>
      <input autocomplete='off' required id='length' value='12' type='text' name='length'>
      <label for='length'>Length In Inches <span class='red-text'>*</span> </label>
    </div>
    <div class='input-field col s6'>
      <input autocomplete='off' required id='width' type='text' value='12' name='width'>
      <label for='width'>Width In Inches <span class='red-text'>*</span> </label>
    </div>


    <?php foreach($product['selects'] as $key=>$value): ?>
      <div class='input-field col s6'>
        <select required name='<?php echo $key ?>' 
        id='<?php echo $key ?>'>


          <?php foreach($value['options'] as $option=>$content): ?>
            <option value='<?php echo $option ?>'><?php echo $content ?></option>
          <?php endforeach; ?>


        </select>
        <label><?php echo $product['selects'][$key]['label']?> <span class='red-text'>*</span> </label>
      </div>
    <?php endforeach; ?>    
    
    
    <div class='input-field col s6'>
      <select required name='proof' id='proof'>
        <option value='none' selected>--None--</option>
        <option value='email'>Email Proof</option>
      </select>
      <label>Design Proof <span class='red-text'>*</span> </label>
    </div>
    <div class='input-field col s6'>
      <select required name='turnaround-x' id='turnaround-x'>
        <option value='standard' selected>2 - 3 Day</option>
        <option value='same'>Same Day</option>
      </select>
      <label>Turnaround <span class='red-text'>*</span> </label>
    </div>
    <div class='input-field col s6'>
      <input required id='jobid' type='text' name='jobid'>
      <label for='jobid'>Job Name <span class='red-text'>*</span> </label>
    </div>
    <div class='input-field col s6'>
      <input autocomplete='off' required id='quantity' type='text' name='quantity' value='1'>
      <label for='quantity'>Quantity <span class='red-text'>*</span> </label>
    </div>
    <button 
      disabled
      class='btn waves-effect waves-light yellow black-text'
      type='submit'
      id='product-cart'>
      Add To Cart
    </button>
  </form>
  </div>
</section>

<script src="/js/product_calc.js"></script>