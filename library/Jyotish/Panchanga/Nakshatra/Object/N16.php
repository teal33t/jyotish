<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Nakshatra\Object;

use Jyotish\Panchanga\Nakshatra\Nakshatra;
use Jyotish\Graha\Graha;
use Jyotish\Tattva\Jiva\Deva;
use Jyotish\Tattva\Jiva\Manusha;
use Jyotish\Tattva\Maha\Guna;
use Jyotish\Tattva\Ayurveda\Prakriti;

/**
 * Class of nakshatra 16.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N16 extends NakshatraObject {
	/**
	 * Nakshatra key
	 * 
	 * @var int
	 */
	protected $nakshatraKey = 16;
	
	/**
	 * Devanagari title 'vishakha' in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	protected $nakshatraTranslit = array(
		 'va','i','sha','aa','kha','aa'
	);
	
	/**
	 * Type of nakshatra.
	 * 
	 * @var string
	 * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 11.
	 */
	protected $nakshatraType = Nakshatra::TYPE_SADHARANA;
	
	protected $nakshatraDeva = array(
		Deva::DEVA_INDRA,
		Deva::DEVA_AGNI,
	);
	protected $nakshatraEnergy = Nakshatra::ENERGY_SRISHTI;
	protected $nakshatraGana = Manusha::GANA_RAKSHASA;
	protected $nakshatraGender = Manusha::GENDER_FEMALE;
	protected $nakshatraGraha = Graha::GRAHA_GU;
	protected $nakshatraGuna = Guna::GUNA_SATTVA;
	protected $nakshatraPurushartha = Manusha::PURUSHARTHA_DHARMA;
	protected $nakshatraVarna = Manusha::VARNA_MLECHHA;
	protected $nakshatraPrakriti = Prakriti::PRAKRITI_KAPHA;

	public function __construct($options) {
		parent::__construct($options);
	}

}