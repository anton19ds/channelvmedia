$( document ).ready(function() {
	$(window).on('resize', function(e) {
		if ($(window).width() <= 767) {
			$('#map').remove();
		}
	});
	$('.marker.carvajal').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.carvajal').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.carvajal').css('display','block');
	});
	$('.marker.procomm').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.procomm').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.procomm').css('display','block');
	}); 
	$('.marker.luna').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.luna').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.luna').css('display','block');
	}); 
	$('.marker.textual').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.textual').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.textual').css('display','block');
	}); 
	$('.marker.headline').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.headline').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.headline').css('display','block');
	}); 
	$('.marker.blue-focus').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.blue-focus').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.blue-focus').css('display','block');
	}); 
	$('.marker.high-results').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.high-results').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.high-results').css('display','block');
	}); 
	$('.marker.crest-communications').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.crest-communications').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.crest-communications').css('display','block');
	});  
	$('.marker.kragelund-kommunikation').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.kragelund-kommunikation').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.kragelund-kommunikation').css('display','block');
	}); 
	$('.marker.pro-concept').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.pro-concept').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.pro-concept').css('display','block');
	}); 
	$('.marker.harkonsalo-vesa').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.harkonsalo-vesa').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.harkonsalo-vesa').css('display','block');
	});  
	$('.marker.monet-associes').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.monet-associes').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.monet-associes').css('display','block');
	});  
	$('.marker.passerelles').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.passerelles').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.passerelles').css('display','block');
	});   
	$('.marker.autocom-deutschland').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.autocom-deutschland').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.autocom-deutschland').css('display','block');
	});   
	$('.marker.jpkom').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.jpkom').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.jpkom').css('display','block');
	});  
	$('.marker.presigno').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.presigno').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.presigno').css('display','block');
	});
	$('.marker.primo-pr').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.primo-pr').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.primo-pr').css('display','block');
	});
	$('.marker.schwan-communications').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.schwan-communications').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.schwan-communications').css('display','block');
	});
	$('.marker.tdub').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.tdub').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.tdub').css('display','block');
	});
	$('.marker.extrovert').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.extrovert').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.extrovert').css('display','block');
	});
	$('.marker.crotty-communications').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.crotty-communications').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.crotty-communications').css('display','block');
	});
	$('.marker.catalyst').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.catalyst').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.catalyst').css('display','block');
	});
	$('.marker.l45').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.l45').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.l45').css('display','block');
	});
	$('.marker.axess-pr').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.axess-pr').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.axess-pr').css('display','block');
	}); 
	$('.marker.inc-comunicazione').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.inc-comunicazione').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.inc-comunicazione').css('display','block');
	});
	$('.marker.true-relazione-pubbliche').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.true-relazione-pubbliche').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.true-relazione-pubbliche').css('display','block');
	});
	$('.marker.kaiba').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.kaiba').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.kaiba').css('display','block');
	});
	$('.marker.binsfeld').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.binsfeld').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.binsfeld').css('display','block');
	});
	$('.marker.gribnau-communicatie').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.gribnau-communicatie').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.gribnau-communicatie').css('display','block');
	});
	$('.marker.stratego').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.stratego').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.stratego').css('display','block');
	});
	$('.marker.public-dialog').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.public-dialog').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.public-dialog').css('display','block');
	});
	$('.marker.central-de-informacao').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.central-de-informacao').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.central-de-informacao').css('display','block');
	});
	$('.marker.lopito-ileana-howie').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.lopito-ileana-howie').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.lopito-ileana-howie').css('display','block');
	});
	$('.marker.the-house-pr-agency').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.the-house-pr-agency').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.the-house-pr-agency').css('display','block');
	});
	$('.marker.pr-partner').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.pr-partner').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.pr-partner').css('display','block');
	});
	$('.marker.w7-worldwide').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.w7-worldwide').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.w7-worldwide').css('display','block');
	});
	$('.marker.mango-omc').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.mango-omc').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.mango-omc').css('display','block');
	});
	$('.marker.alana-consultores').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.alana-consultores').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.alana-consultores').css('display','block');
	});
	$('.marker.comunicacion-iberoamericana').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.comunicacion-iberoamericana').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.comunicacion-iberoamericana').css('display','block');
	});
	$('.marker.evercom').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.evercom').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.evercom').css('display','block');
	});
	$('.marker.publik').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.publik').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.publik').css('display','block');
	});
	$('.marker.yardstick-marketing').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.yardstick-marketing').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.yardstick-marketing').css('display','block');
	});
	$('.marker.mconie-thunderbird').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.mconie-thunderbird').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.mconie-thunderbird').css('display','block');
	});
	$('.marker.nexus-communications-group').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.nexus-communications-group').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.nexus-communications-group').css('display','block');
	});
	$('.marker.the-maggie-fox-consultancy').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.the-maggie-fox-consultancy').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.the-maggie-fox-consultancy').css('display','block');
	});
	$('.marker.redwood-consulting').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.redwood-consulting').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.redwood-consulting').css('display','block');
	}); 
	$('.marker.houston-thunderbird').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.houston-thunderbird').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.houston-thunderbird').css('display','block');
	});
	$('.marker.akhia-public-relations').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.akhia-public-relations').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.akhia-public-relations').css('display','block');
	});
	$('.marker.cvm').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.cvm').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.cvm').css('display','block');
	});
	$('.marker.jpa-health-communications').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.jpa-health-communications').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.jpa-health-communications').css('display','block');
	});
	$('.marker.mekky-media').mouseover(function() { 
		$('.info-wrap').css('display','block');
		$('.info').css('display','none'); 
		$('.info.mekky-media').css('display','block'); 
		$(this).css('display','none');
		$('.marker-ring.mekky-media').css('display','block');
	}); 
	$('.marker-wrap').mouseleave(function() { 
		$('.info-wrap').css('display','none');
		$('.info').css('display','none'); 
		$(this).find('.marker').css('display','block');
		$(this).find('.marker-ring').css('display','none');
	}); 
 });   