(*s: view_overlays.mli *)

val draw_searched_rectangles:
  dw:Model2.drawing -> unit

val motion_notify:
  < as_widget : [> `widget ] Gtk.obj; .. > ->
  Model2.world -> GdkEvent.Motion.t -> bool

(*e: view_overlays.mli *)
