TaskBoxx = {
	
	initialize : function() {
		//this.toggleKanbans();
		this.dragKanbans();
	},
	
	toggleKanbans : function() {
		$('.kanban-expand').toggle(function() {
			$('.kanban-description', $(this)[0].parentNode.parentNode.parentNode).slideDown('fast');
		}, function() {
			$('.kanban-description', $(this)[0].parentNode.parentNode.parentNode).slideUp('fast');
		});
		$('.kanban-description').hide();
	},
	
	dragKanbans : function() {
		$(".board-item-container").draggable({
			helper: 'clone',
			opacity: .50
		});
		$("board-colum-items").droppable({
			accept: function(draggable) {
				//return $(this).attr('stage') !== (draggable).attr('stage');
                                return true;
			},
			hoverClass: 'droppable-hover',
			tolerance: 'intersect',
			drop: function(ev, ui) {
				//$('.move-stageId', ui.draggable).val($(this).attr('stage'));
				//$('.move-stage-form', ui.draggable).submit();
			}
		});
	}
	
}
$(function() { TaskBoxx.initialize(); });