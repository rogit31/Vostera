<!doctype html>
<html lang="en">

<head>
  <?php include('../../../head.php') ?>
</head>

<body>
  <div id="wrapper">
    <header id="1">
      <?php include('../../../header.php') ?>
    </header>

    <ul class="breadcrumb">
      <li><a href="../../../index.php">Home</a></li>
      <li><a href="../../lore.php">Lore</a></li>
      <li><a href="meta.php">Meta</a></li>
      <li>Aetheric Disturbance</li>
    </ul>
    <main>
      <div class="article-tile">
        <h1>Aetheric Disturbance</h1>
        <p>An aetheric disturbance is an event that usually follows an unusual amount of aether being released. The surrounding geography can have unexpected characteristics such as different geology, biology, or arcane effects for years or decades to come depending on the intensity of the release of aether.</p>
        <?php if (isset($_SESSION['loggedin'])) : ?>
          <h2 id="2">Effect table</h2>
          <hr class="solid">
          <table>
            <tr>
              <th>Roll</th>
              <th>Wild Magic Effect</th>
            </tr>
            <tr>
              <td>1</td>
              <td><b>Benevolent Transformation:</b> The spell casts but also causes a burst of wildflowers to appear in the caster's hand.</td>
            </tr>
            <tr>
              <td>2</td>
              <td><b>Temporal Flux:</b> Time briefly distorts, causing the spell to manifest seconds earlier or later than intended.</td>
            </tr>
            <tr>
              <td>3</td>
              <td><b>Elemental Surge:</b> The spell's energy takes on an elemental aspect, inflicting additional elemental damage or producing unusual elemental effects. Roll a d6, (acid, cold, fire, poison, lightning, thunder), the spell does an additional d6 of that type of damage.</td>
            </tr>
            <tr>
              <td>4</td>
              <td><b>Colorful Consequences:</b> The spell's effects are visually enhanced, manifesting in a brilliant display of colors and lights.</td>
            </tr>
            <tr>
              <td>5</td>
              <td><b>Voice of Nature:</b> The spell is accompanied by the sounds of the wild, like birdsong or the rustling of leaves.</td>
            </tr>
            <tr>
              <td>6</td>
              <td><b>Twisted Reality:</b> The spell's target or area of effect is temporarily altered, creating unusual or surreal environmental changes. If the spell is targeted, it is diverted to the nearest target of the same type (foe or friend). If the spell is AoE, the AoE is increased by 15 feet.</td>
            </tr>
            <tr>
              <td>7</td>
              <td><b>Aetheric Recoil:</b> The spell casts but causes the caster to levitate up to 10 feet up and 5 feet backward from where the spell was cast for a turn.</td>
            </tr>
            <tr>
              <td>8</td>
              <td><b>Elemental Conversion:</b> If the spell is elemental in nature, the nature of damage changes. Roll a d6, (acid, cold, fire, poison, lightning, thunder).</td>
            </tr>
            <tr>
              <td>9</td>
              <td><b>Gravity Defiance:</b> The spell's energy creates a brief area of altered gravity, making objects or creatures float momentarily.</td>
            </tr>
            <tr>
              <td>10</td>
              <td><b>Animal Affinity:</b> The caster briefly gains an empathetic connection with local animals, who may offer guidance or assistance. For 30 minutes, the caster is able to speak with animals.</td>
            </tr>
            <tr>
              <td>11</td>
              <td><b>Astral Echo:</b> A ghostly duplicate of the caster appears nearby, performing the spell's effects in tandem. 30 feet in a random spot around the caster, a duplicate casts the spell as well. The spell is cast twice at the same target.</td>
            </tr>
            <tr>
              <td>12</td>
              <td><b>Spatial Error:</b> The spell's geometry changes, and is distorted as it is cast. The spell misses its target and is cast to a random spot 10 feet away from the target. Roll a d4 for direction (NWSE).</td>
            </tr>
            <tr>
              <td>13</td>
              <td><b>Sudden Silence:</b> The area becomes eerily quiet, stifling all sound except for the caster's actions.</td>
            </tr>
            <tr>
              <td>14</td>
              <td><b>Localized Weather:</b> The spell briefly influences the weather, creating a small storm or area of calm within its radius.</td>
            </tr>
            <tr>
              <td>15</td>
              <td><b>Arcane Surge:</b> The spell's energy surges, making it more potent or affecting a larger area than intended. For targeted spells, add a d10 of the spell's main damage/healing to the spell, to AoE add an extra 10 feet of AoE. The caster must save a DC 10 Wisdom saving throw or be exhausted for the next turn.</td>
            </tr>
            <tr>
              <td>16</td>
              <td><b>Transmutation:</b> The caster's spell is cast and immediately polymorphs into a cat.</td>
            </tr>
            <tr>
              <td>17</td>
              <td><b>Forced Teleportation:</b> You are forcefully teleported 60 feet closer to the aetheric disturbance or in a random direction. Roll a d4 for direction (NWSE).</td>
            </tr>
            <tr>
              <td>18</td>
              <td><b>Shifting Realities:</b> The caster briefly glimpses alternate dimensions, you are confused.</td>
            </tr>
            <tr>
              <td>19</td>
              <td><b>Aetheric Gag:</b> As you cast your spell, the air is sucked out of your lungs forcefully. You are silenced for the next turn.</td>
            </tr>
            <tr>
              <td>20</td>
              <td><b>Aetheric Pattern Baldness:</b> Your hair falls out, all of it. It grows back over the next few days.</td>
            </tr>
          </table>
        <?php endif; ?>
      </div>
    </main>
    <div class="button-wrapper">
      <a class="backbutton" href="meta.php">Back to meta</a>
      <a class="backbutton" href="../../lore.php">Back to lore</a>
    </div>

    <?php include('../../../footer.php') ?>
  </div>
</body>

</html>