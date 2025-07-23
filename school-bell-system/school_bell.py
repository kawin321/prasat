import tkinter as tk
from tkinter import messagebox
import datetime
import time
import threading
import json
import os
import pygame
import requests
import csv

# ========== CONFIG ==========
LINE_TOKEN = "96bd96bbd5742a9c03bcebce574aed19"
SOUND_CONFIG = {
    "เข้าแถว": "bell.mp3",
    "เข้าเรียน": "bell.mp3",
    "พัก": "bell.mp3",
    "เลิกเรียน": "bell.mp3"
}
SCHEDULE_FILE = "schedule.json"
LOG_FILE = "bell_log.csv"

# ========== INITIAL SETUP ==========
pygame.mixer.init()
if not os.path.exists("sounds"):
    os.makedirs("sounds")

# ========== FUNCTIONS ==========
def play_sound(file_path):
    try:
        pygame.mixer.music.load(file_path)
        pygame.mixer.music.play()
        while pygame.mixer.music.get_busy():
            time.sleep(1)
    except Exception as e:
        print(f"Error playing sound: {e}")

def send_line_notify(message):
    url = "https://notify-api.line.me/api/notify"
    headers = {"Authorization": f"Bearer {LINE_TOKEN}"}
    data = {"message": message}
    try:
        requests.post(url, headers=headers, data=data)
    except:
        print("Error sending LINE notify")

def log_bell(time_str, label):
    with open(LOG_FILE, mode="a", newline="", encoding="utf-8") as file:
        writer = csv.writer(file)
        writer.writerow([time_str, label])

def save_schedule(schedule):
    with open(SCHEDULE_FILE, "w") as f:
        json.dump(schedule, f)

def load_schedule():
    if not os.path.exists(SCHEDULE_FILE):
        return []
    with open(SCHEDULE_FILE, "r") as f:
        return json.load(f)

def bell_thread():
    played_today = set()
    while True:
        now = datetime.datetime.now()
        current = now.strftime("%H:%M")
        schedule = load_schedule()

        for item in schedule:
            if item["time"] == current and current not in played_today:
                label = item["label"]
                sound_file = SOUND_CONFIG.get(label, "sounds/default.mp3")
                print(f"🔔 {label} - {current}")
                play_sound(sound_file)
                send_line_notify(f"🔔 {label} - {current}")
                log_bell(current, label)
                played_today.add(current)

        if current == "00:00":
            played_today.clear()

        time.sleep(10)

# ========== GUI ==========
class BellApp:
    def __init__(self, root):
        self.root = root
        self.root.title("ระบบออดโรงเรียน")
        self.schedule = load_schedule()

        self.time_var = tk.StringVar()
        self.label_var = tk.StringVar()

        tk.Label(root, text="เวลา (HH:MM)").grid(row=0, column=0)
        tk.Entry(root, textvariable=self.time_var).grid(row=0, column=1)

        tk.Label(root, text="ประเภท").grid(row=1, column=0)
        tk.OptionMenu(root, self.label_var, *SOUND_CONFIG.keys()).grid(row=1, column=1)

        tk.Button(root, text="เพิ่มเวลา", command=self.add_schedule).grid(row=2, column=0, columnspan=2, pady=5)
        self.schedule_list = tk.Listbox(root, width=40)
        self.schedule_list.grid(row=3, column=0, columnspan=2)

        tk.Button(root, text="ลบรายการ", command=self.remove_selected).grid(row=4, column=0, columnspan=2, pady=5)
        self.refresh_list()

    def add_schedule(self):
        time_str = self.time_var.get()
        label = self.label_var.get()
        if not time_str or not label:
            messagebox.showwarning("แจ้งเตือน", "กรอกข้อมูลให้ครบ")
            return
        self.schedule.append({"time": time_str, "label": label})
        save_schedule(self.schedule)
        self.refresh_list()

    def remove_selected(self):
        selected = self.schedule_list.curselection()
        if not selected:
            return
        index = selected[0]
        del self.schedule[index]
        save_schedule(self.schedule)
        self.refresh_list()

    def refresh_list(self):
        self.schedule_list.delete(0, tk.END)
        for item in self.schedule:
            self.schedule_list.insert(tk.END, f"{item['time']} - {item['label']}")

# ========== MAIN ==========
if __name__ == "__main__":
    threading.Thread(target=bell_thread, daemon=True).start()
    root = tk.Tk()
    app = BellApp(root)
    root.mainloop()

