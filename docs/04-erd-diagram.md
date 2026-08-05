# ERPOS Documentation

Document: ER Diagram
Version: 1.0
Status: Draft
Last Updated: 2026-08-06
Author: Md. Anisur Rahman

---

# Business Flow

Customer

↓

Receive Device

↓

Create Repair Ticket

↓

Assign Technician

↓

Diagnosis

↓

Repair

↓

Payment

↓

Delivery

↓

Repair History

---

# Relationship Overview

Customer
    │
    └──────── Repair Ticket
                    │
                    ├──────── Repair Problems
                    ├──────── Payments
                    ├──────── Technician
                    ├──────── Timeline
                    └──────── Storage Location

Supplier
    │
    └──────── Product
                    │
                    └──────── Stock Transaction
